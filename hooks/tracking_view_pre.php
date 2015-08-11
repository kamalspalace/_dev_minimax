<?php
require('includes/aws/aws-autoloader.php');
use Aws\S3\S3Client;
function hook_tracking_view_pre(&$data,$user)
{

  $settings = Settings::get($user['database'])->toArray();

  if($data['Pbnum'] > 1000000)
  {

    $S3Client = S3Client::factory(array(
        'key'    => $settings['aws_access_key_id'],
        'secret' => $settings['aws_secret_access_key']
    ));

    // MM/DD/YYYY
    $date = explode('/',$data['ProDate']);    
    $pbno = $data['Pbnum'];

    $dates = array();

    if(intval($date[0]) == 12) {
      $dates[0]['month'] = intval($date[0]) - 1;
      $dates[0]['year']  = $date[2];
      $dates[1]['month'] = intval($date[0]);
      $dates[1]['year']  = $date[2];
      $dates[2]['month'] = '01';
      $dates[2]['year']  = intval($date[2]) + 1;
    }
    elseif (intval($date[0]) == 1) {
      $dates[0]['month'] = '12';
      $dates[0]['year']  = $date[2]--;
      $dates[1]['month'] = intval($date[0]);
      $dates[1]['year']  = $date[2];
      $dates[2]['month'] = intval($date[0]) + 1;
      $dates[2]['year']  = $date[2];
    }
    else {
      $dates[0]['month'] = intval($date[0]) - 1;
      $dates[0]['year']  = $date[2];
      $dates[1]['month'] = intval($date[0]);
      $dates[1]['year']  = $date[2];
      $dates[2]['month'] = intval($date[0]) + 1;
      $dates[2]['year']  = $date[2];
    }

    $images = array();
    
    foreach($dates as $date)
    { 
        if(strlen($date['month']) < 2)
          $date['month'] = '0'.$date['month'];
        $result = $S3Client->listObjects(array(
                                       'Bucket' => $settings['aws_bucket'],
                                       'MaxKeys' => 50,
                                       'Prefix' => 'DTMS/'.$date['year'].'/'.$date['month'].'/'.$pbno
                                      ));

        $result = $result->toArray();
        
        if(isset($result['Contents']))
          foreach($result['Contents'] as $S3Object)
            array_push($images,$S3Object['Key']);
    }

    $pods = array();
    $bols = array();
    $docs = array();

    $b = 0; $p = 0; $d = 0;
    foreach($images as $image)
    {
      if(substr_count($image,'_BL')) {
         $bols[$b] = '#tracking#view_document-DTMS'.str_replace(array('DTMS','.jpg','.TIF','/'),array('','','','_'),$image); $b++;
      }
      elseif(substr_count($image,'_DOC')) {
        $docs[$d] = '#tracking#view_document-DTMS'.str_replace(array('DTMS','.jpg','.TIF','/'),array('','','','_'),$image); $d++;
      }      
      else {
        $pods[$p] = '#tracking#view_document-DTMS'.str_replace(array('DTMS','.jpg','.TIF','/'),array('','','','_'),$image); $p++;
      }
    }
  }

  
  if(isset($pods) || isset($bols) || isset($docs))
  { 
    $data['bl']  = $bols;
    $data['pod'] = $pods;
    $data['doc'] = $docs;
    return;
  }

  if($data['Pbnum'] < 1000000)
  {

    // BOL
    $doc_pod = query("SELECT * FROM minimax_tracking_old.vtl_pod_idx, minimax_tracking_old.vtl_pod_img WHERE pod_idx_pro = '".$data['Pbnum']."' AND pod_img_pro = pod_idx_loc ");
    
    $doc_sql = query("SELECT * FROM minimax_tracking_old.shipment WHERE vtlpro = '".$data['Pbnum']."'");

    $doc_arr = fetch($doc_sql);

    $year = substr($doc_arr['date'],0,4);

          if(num_rows($doc_pod) > 0)
          {
                  $i = 0;
                  while ($row_pod = fetch($doc_pod))
                  {
       /*
                     if(substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 15, 2) == "09")
                       $ref4 = "POD2009_".substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 12, 8);
                     // elseif(substr($row_pod['pod_idx_udt'], 0, 4) == '2013')
                     //      $ref4 = "POD2013_".substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 12, 8);
                     else
       */
                       $ref4 = substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 12, 8);
			$month = substr($row_pod['pod_idx_udt'],5,2);

                     $data['pod'][$i] = "#tracking#view_document-EZPRO".$year.$month.$ref4;
                     $i++;
            }
           }

/* BLs are fubar'd
    $doc_bol = query("SELECT * FROM minimax_tracking_old.vtl_bl_idx, minimax_tracking_old.vtl_bl_img WHERE idx_pro = '".$data['Pbnum']."' AND img_pro = idx_loc ");

          if(num_rows($doc_bol) > 0)
          {
            $i = 0;
                  while ($row_bl = fetch($doc_bol))
                  {      
                     if(substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 15, 2) == "09")
                       $ref4 = "BL2009_".substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 12, 8);
                     // elseif(substr($row_bl['idx_udt'], 0, 4) == '2013')
                     // $ref4 = "BL2013_".substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 12, 8);
                     else
                       $ref4 = "BL2012_".substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 12, 8);

                     $data['bl'][$i] = "#tracking#view_document-".$ref4." ";
                     $i++;
                  }
          }

*/
    }
}
?>

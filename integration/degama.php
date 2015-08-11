<?php

class ClientIntegrationHandler
{
	var $user;
	var $action;
	
	function __construct($user, $action)
	{
		$this->user = $user;
		$this->action = $action;
	}
	
	function handle_integration(&$data, &$return)
	{
		$action = $this->action;
		return $this->$action($data, $return);
	}
	
	function rate_request(&$data, &$return)
	{
		return true;
	}
	
	function new_shipment_request(&$data, &$return)
	{
		return true;
	}
	
	function handshake(&$data, &$return)
	{
		return true;
	}
	
	function tracking_list_request(&$data, &$return)
	{
                if($this->user['group'] == 1008 ||
		   $this->user['group'] == 1056 ||
                   $this->user['group'] == 523  ||
                   $this->user['group'] == 545  ||
                   $this->user['group'] == 648  ||
                   $this->user['group'] == 895  ||
                   $this->user['group'] == 650) // fixme
                  $cutoff_date_orig = "03/11/2013";
                elseif($this->user['group'] > 15)
                  $cutoff_date_orig =  "04/15/2013";
                else
                  $cutoff_date_orig = "02/04/2013";

		$data['cutoff_date'] = $cutoff_date_orig;
		$date = new DateTime($data['start_date']);
		$start_date = $date->format('Y-m-d');
		$data['start_date_backup'] = $start_date;
		$date = new DateTime($data['end_date']);
		$end_date = $date->format('Y-m-d');
		$date = new DateTime($cutoff_date_orig);
		$cutoff_date = $date->format('Y-m-d');

		if($start_date > $cutoff_date && $end_date > $cutoff_date)
		{
			return true;
		}
		elseif($start_date < $cutoff_date && $end_date < $cutoff_date)
		{
			$data['entries_per_page'] = 10;
			$data['order_by'] = "DESC";
			$offset = $data['page'] * $data['entries_per_page'];
			$return = $this->query_old_tracking_list($data, $start_date, $end_date, $offset);
			return false;
		}
		elseif($start_date < $cutoff_date && $end_date == $cutoff_date)
		{
			$data['entries_per_page'] = 10;
			$offset = $data['page'] * $data['entries_per_page'];
                        $return = $this->query_old_tracking_list($data, $start_date, $end_date, $offset);
                        return false;
		}
		if($start_date < $cutoff_date)
			$data['start_date'] = $cutoff_date_orig;

		return true;
	}
	
	function tracking_list_request_merge(&$return, &$result, &$data)
	{
		$cutoff_date = $data['cutoff_date'];
		
		$date = new DateTime($data['start_date_backup']);
		$start_date = $date->format('Y-m-d');
		$date = new DateTime($data['end_date']);
		$end_date = $date->format('Y-m-d');
		$date = new DateTime($cutoff_date);
		$cutoff_date = $date->format('Y-m-d');


		if($start_date <= $cutoff_date)
		{
			if($end_date > $cutoff_date) $end_date = $cutoff_date;		

			if(! $data['entries_per_page'])
			   $data['entries_per_page'] = 10;
			  $degama_page_count = ceil($result['count'] / $data['entries_per_page']);
			  $leftovers = $result['count'] % $data['entries_per_page'];
			
			
			if($data['page'] > $degama_page_count)
				$offset = ($data['page'] - $degama_page_count - 1) * $data['entries_per_page'] + $leftovers;
			else
				$offset = 0;
			$return = $this->query_old_tracking_list($data, $start_date, $end_date, $offset);
		}
		
		if(count($return) > 0)
		{
			if(isset($result['count']))
			{
				$result['dtmscount'] = $result['count'];  
				$result['count'] += $return['count'];
			}
			else						
			{
				$result['count'] = $return['count'];
			}
			if(isset($return['orders']) && count($return['orders']) > 0)
			{
				if(!isset($result['orders'])) $result['orders'] = array();
				if(count($result['orders']) < $data['entries_per_page'])
				{
					$orders_to_add = $data['entries_per_page'] - count($result['orders']);
					
					if(count($return['orders']) < $orders_to_add) $orders_to_add = count($return['orders']);
					for($i = 0; $i < $orders_to_add; $i++)
					{
						array_push($result['orders'], $return['orders'][$i]);
					}
				}
			}
		}
		return $result;
	}
	
	function query_old_tracking_list(&$data, $start_date, $end_date, $offset)
	{
		$return = array();
	
		$dictionary = array();
		$dictionary['ProDate'] = 'date';
		$dictionary['Pbnum'] = 'vtlpro';
		$dictionary['Sh-BOL'] = 'custpro';
		$dictionary['Rec-Status'] = 'date';
		$dictionary['ShipName'] = 'ship_name';
		$dictionary['Add-1'] = 'ship_addr';
		$dictionary['City'] = 'ship_city';
		$dictionary['Prv'] = 'ship_prov';
		$dictionary['ConsigName'] = 'cons_name';
		$dictionary['ConAdd-1'] = 'cons_addr';
		$dictionary['ConCity'] = 'cons_city';
		$dictionary['ConPrv'] = 'cons_prov';
		
		$search_string = "1";
		$var_array = array();

		if($data['search_string'] != '' && $data['search_string'] != 'Search')
		{
			$s = $data['search_string'];
			$search_string = "(date LIKE ? OR vtlpro LIKE ? OR custpro LIKE ? OR ship_name LIKE ? OR ship_addr LIKE ? OR ship_city LIKE ? OR ship_prov LIKE ? OR cons_name LIKE ? OR cons_addr LIKE ? OR cons_city LIKE ? OR cons_prov LIKE ?)";
			$var_array = array("%".$s."%","%".$s."%","%".$s."%", "%".$s."%", "%".$s."%", "%".$s."%", "%".$s."%", "%".$s."%", "%".$s."%", "%".$s."%", "%".$s."%");
		}
		
		$count_result = query("SELECT date FROM minimax_tracking_old.shipment WHERE custacct='".$this->user['account']."' AND date >= '$start_date' AND date <= '$end_date' AND ".$search_string, $var_array);
		
		$result = query("SELECT * FROM minimax_tracking_old.shipment 
						 WHERE 
						 	custacct='".$this->user['account']."' AND 
							date >= '$start_date' AND 
							date <= '$end_date' AND
							".$search_string." 
						ORDER BY ".$dictionary[$data['sort_by']]." ".$data['order_by']." 
						LIMIT ".$offset.",".$data['entries_per_page'], $var_array);
		
		$count = num_rows($count_result);
		
		$return['count'] = $count;
		$return['orders'] = array();
		for($i = 0; $i < num_rows($result); $i++)
		{
			$result_array = fetch($result);
			$order = array();
			$order["ProDate"] = $result_array['date'];
			$order["Pbnum"] = $result_array['vtlpro'];
			$order["ShipName"] = $result_array['ship_name'];
			$order["Add-"] = $result_array['ship_addr'];
			$order["City"] = $result_array['ship_city'];
			$order["Prv"] = $result_array['ship_prov'];
			$order["ConsigName"] = $result_array['cons_name'];
			$order["ConAdd1"] = $result_array['cons_addr'];
			$order["ConCity"] = $result_array['cons_city'];
			$order["ConPrv"] = $result_array['cons_prov'];
			$order["RecStatus"] = "";
			$order["ShBOL"] = $result_array['custpro'];
			// Get Shipment Status
			$delivered_result = query("SELECT date FROM minimax_tracking_old.delivered WHERE vtlpro = '".$result_array['vtlpro']."' LIMIT 0,1");

			if (num_rows($delivered_result) > 0) 
			{
				$date = fetch($delivered_result);
				$shipment_status = "Delivered";
				$shipment_stat1 = $date['date'];
				$stat = $shipment_status." ".$shipment_stat1;
			}
			else
			{
				$status_result = query("SELECT status, date FROM minimax_tracking_old.prostat WHERE vtlpro = '".$result_array['vtlpro']."' ORDER BY date DESC, psort DESC limit 1");
				$status_array = fetch($status_result);

				$shipment_status = $status_array['status'];
				$shipment_stat1 = $status_array['date'];
				
				// Check to see if Appointment is Waiting to show instead of On Dock
				$today = date("Y/m/d");
				if ($shipment_status != "Appointment" )
				{
					$app_result = query("SELECT status, date FROM minimax_tracking_old.prostat WHERE vtlpro = '".$result_array['vtlpro']."' AND status = \"Appointment\" AND date > '$today' LIMIT 1");

					if (num_rows($app_result) == 1)
					{
						$app_array = fetch($app_result);
						$shipment_status = "APPOINTMENT"; // $ap3[0];
						$shipment_stat1 = $app_array[1];
					}
				}
				$stat = $shipment_status." ".$shipment_stat1;
			}
			
			$order["Rec-Status"] = $stat;
			
			$return['orders'][] = $order;
		}
		
		return $return;
	}
	
	function tracking_details_request(&$data, &$return)
	{
		if(intval($data['pbnum']) < 1000000)
		{
			// Get Data from DB
			$shipment_query = query("SELECT * FROM minimax_tracking_old.shipment WHERE vtlpro = '".$data['pbnum']."' LIMIT 0,1");
						
			if(num_rows($shipment_query) == 1)
			{
				$shipment_row = fetch($shipment_query);
						
				$return['RefNumb'] = $shipment_row['custpo'];
				$return['RefName'] = '';		
				$return['ShipName'] = $shipment_row['ship_name'];
				$return['Add1'] = $shipment_row['ship_addr'];
				$return['Add2'] = '';
				$return['City'] = $shipment_row['ship_city'];
				$return['Prv'] = $shipment_row['ship_prov'];
				$return['Postal'] = '';
				$return['Tel'] = '';
				$return['ConsigName'] = $shipment_row['cons_name'];
				$return['ConAdd1'] = $shipment_row['cons_addr'];
				$return['ConAdd2'] = '';
				$return['ConRefName'] = '';
				$return['Contel'] = '';
				$return['ConCity'] = $shipment_row['cons_city'];
				$return['ConPrv'] = $shipment_row['cons_prov'];
			        $return['ConPostal'] = '';	
				$return['ConTel'] = '';
				$return['ProDate'] = $shipment_row['date'];
				$return['Pbnum'] = $shipment_row['vtlpro'];
				$return['Pieces'] = $shipment_row['pcs'];
				$return['Weight'] = $shipment_row['weight'];
				$return['RecStatus'] = '';
				$return['PupDate'] = '';
				$return['PupTime'] = '';
				$return['Skid'] = '';
				$return['DelDate'] = '';
				$return['DelTime'] = '';
				$return['ShBOL'] = $shipment_row['custpro'];
				$return['Inflag'] = 'I';
			}
			
			$delivered_query = query("SELECT * FROM minimax_tracking_old.delivered WHERE vtlpro = '".$data['pbnum']."' LIMIT 0,1");
			$return['RateDetails'] = array();
			
			if(num_rows($delivered_query) == 1)
			{
				$delivered_row = fetch($delivered_query);
				
				$return['RateDetails']['Rates'] = array();
				$return['RateDetails']['Rates']['Rate'] = array();
				
				$main_rate = array();
				
				$main_rate['Code'] = '';
				$main_rate['Descr1'] = $shipment_row['description'];
				$main_rate['Quant'] = $shipment_row['pcs'];
				$main_rate['Weight'] = $shipment_row['weight'];
				$main_rate['Rate'] = $delivered_row['freight_rate'];
				$main_rate['Uom'] = $delivered_row['freight_abv'];
				$main_rate['Tot'] = $delivered_row['freight'];
				
				// Accessorials
				$access_query = query("SELECT * FROM minimax_tracking_old.accessorials WHERE vtlpro = '".$data['pbnum']."'");
				
				if(num_rows($access_query) > 0)
				{
					$return['RateDetails']['Rates']['Rate'][] = $main_rate;
					
					while($access_row = fetch($access_query)) 
					{
						$rate = array();
				
						$rate['Code'] = '';
						$rate['Descr1'] = $access_row['acce'];
						$rate['Quant'] = '';
						$rate['Weight'] = '';
						$rate['Rate'] = $access_row['rate'];
						$rate['Uom'] = $access_row['abv'];
						$rate['Tot'] = $access_row['total'];
						
						$return['RateDetails']['Rates']['Rate'][] = $rate;
					}
				}
				else
				{
					$return['RateDetails']['Rates']['Rate'] = $main_rate;
				}

				$return['RateDetails']['Rate'] = $delivered_row['freight'];
				$return['RateDetails']['Gstamt'] = (float)$delivered_row['tax1dol'] + (float)$delivered_row['tax2dol'];
				$return['RateDetails']['Tot'] = $delivered_row['charges'];
			}

			$prostat_query = query("SELECT * FROM minimax_tracking_old.prostat WHERE vtlpro = '".$data['pbnum']."' AND psort > 0 ORDER BY psort DESC");
			$return['StatusLog'] = array();
						
			if(num_rows($prostat_query) > 0)
			{
				$return['StatusLog']['Status'] = array();
				
				if(num_rows($prostat_query) > 1)
				{
					while($prostat_row = fetch($prostat_query)) 
					{
						$status = array();
						$status['RecStatus'] = '-';
						$status['Dt'] = $prostat_row['date'];
						$status['Tm'] = $prostat_row['time'];
						$status['Remarks'] = $prostat_row['info'] != '' ? $prostat_row['status']." (".$prostat_row['info'].")" : $prostat_row['status'];
						
						$return['StatusLog']['Status'][] = $status;
					}
				}
				else
				{
					$prostat_row = fetch($prostat_query);
					$return['StatusLog']['Status']['RecStatus'] = '';
					$return['StatusLog']['Status']['Dt'] = $prostat_row['date'];
					$return['StatusLog']['Status']['Tm'] = $prostat_row['time'];
					$return['StatusLog']['Status']['Remarks'] = $prostat_row['info'] != '' ? $prostat_row['status']." (".$prostat_row['info'].")" : $prostat_row['status'];
				}
			}

/*			
			$result_pod = query("SELECT * FROM minimax_tracking_old.vtl_pod_idx, minimax_tracking_old.vtl_pod_img WHERE pod_idx_pro = '".$data['pbnum']."' AND pod_img_pro = pod_idx_loc ");
			$return['pod'] = "";
			
			if(num_rows($result_pod) > 0)
			{
				$ii = 0;
				while ($row_pod = fetch($result_pod))
				{					
					if (substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 15, 2) == "09")			
						$ref4 = "POD2009_".substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 12, 8);
					// elseif(substr($row_pod['pod_idx_udt'], 0, 4) == '2013')
					//	$ref4 = "POD2013_".substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 12, 8);
					else 
						$ref4 = "POD2012_".substr($row_pod['POD_IMG_LOC'], strlen($row_pod['POD_IMG_LOC']) - 12, 8);
					
					$return['pod'][$ii] = "#tracking#view_document-".$ref4." ";
					$ii++;
				}
			}
			
			$result_bl = query("SELECT * FROM minimax_tracking_old.vtl_bl_idx, minimax_tracking_old.vtl_bl_img WHERE idx_pro = '".$data['pbnum']."' AND img_pro = idx_loc ");
			$return['bl'] = "";
		
			if(num_rows($result_bl) > 0)
			{
				$ii = 0;
				while ($row_bl = fetch($result_bl))
				{					
					if (substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 15, 2) == "09")
						$ref4 = "BL2009_".substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 12, 8);
					// elseif(substr($row_bl['idx_udt'], 0, 4) == '2013')
					//	$ref4 = "BL2013_".substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 12, 8);
					else 
						$ref4 = "BL2012_".substr($row_bl['img_loc'], strlen($row_bl['img_loc']) - 12, 8);
					
					$return['bl'][$ii] = "#tracking#view_document-".$ref4." ";
					$ii++;
				}
			}
		 	*/	
			return false;
		}
		else
			return true;
	}
	
	function send_email($email, $token)
	{
		$message = "
		<html>	
			<body>	
				<table align='center'	
							style='	
									border-right: solid 1px #000;	
									border-left: solid 1px #000;	
									border-collapse: collapse;	
								  '	
				>	
					<tr>	
						<td colspan='3'	
							style='	
										width:350px;	
										text-align: center;	
										margin: 0 auto;	
										font-size: 14px;	
										font-weight: bold;
										color: #FFF;
										border: 2px solid #AB0303;	
										background: #C00 url(http://bol.shiponline.ca/minimax/css/images/ui-bg_highlight-hard_50_cc0000_1x100.png) 50% 50% repeat-x;	
										padding: 7px;	
								  '	
						>	
							You have recieved a new pick up request	
						</td>
					</tr>
	
					<tr style='background: #CCC'> <td>Name:      </td> <td colspan='2'> ".$address['name']."     </td> </tr>	
					<tr style='background: #EEE'> <td>Phone:     </td> <td colspan='2'> ".$address['phone']."    </td> </tr>	
					<tr style='background: #CCC'> <td>Email:     </td> <td colspan='2'> ".$address['email']."    </td> </tr>	
					<tr style='background: #EEE'> <td>Street:    </td> <td colspan='2'> ".$address['street']."   </td> </tr>	
					<tr style='background: #CCC'> <td>City:      </td> <td colspan='2'> ".$address['city']."     </td> </tr>	
					<tr style='background: #EEE'> <td>Province:  </td> <td>             ".getProvince($address['province'])." </td> <td>Postal: ".$address['postal']." </td> </tr>	
					
					<tr style='background: #CCC'> <td> &nbsp; </td> <td> &nbsp; </td> <td> &nbsp; </td>  </tr>	
	
					<tr style='background: #EEE'> <td>Pickup Date:      </td> <td> ".format_date($data['pickup_date'])."</td> <td>Time: ".$data['pickup_time']." </td> </tr>	
					<tr style='background: #CCC'> <td>Pickup Door:      </td> <td colspan='2'> ".$data['pickup_door']."</td> </tr>
	
					<tr style='background: #EEE'> <td> &nbsp; </td> <td> &nbsp; </td> <td> &nbsp; </td>  </tr>	
					<tr style='background: #FCC'> <td colspan='3' style='text-align: center;'>Click <a href='http://bol.shiponline.ca/minimax/pdf/view_mail.php?token=".$token."'> HERE </a> to view the Bill of Lading </td> </tr>
		
					<tr style='	
									width:300px;	
									text-align: center;	
									margin: 0 auto;	
									font-size: 14px;	
									font-weight: bold;	
									color: #FFF;
									border: 2px solid #AB0303;	
									background: #C00 url(http://bol.shiponline.ca/minimax/css/images/ui-bg_highlight-hard_50_cc0000_1x100.png) 50% 50% repeat-x;	
									padding: 7px;	
								'	
					>	
						<td> &nbsp; </td> <td> &nbsp; </td> <td> &nbsp; </td>  </tr>	
				</table>	
			</body>
		</html>	
		";
	
		mail($email, "New Shipment", "");
	}
	
	function quote_to_order(&$data, &$return)
	{
		/*
		if($data['shipon_shipment_service'] == 10) //Next flight out
		{
			$this->send_email("jjtrottier@jtec.ca", "Next Flight Out", $data);
			
			return false;
		}
		else
			return true;
		*/
		return true;
	}	
}

?>

<?php
function hook_shipment_post(&$user,&$shipment,&$session)
{ 
  $mailer = new Mailer($user['folder']);
  $mailer->addRcpt($shipment->ship_contact,'pickup@minimaxexpress.com');
  $mailer->dataObj  = $shipment->toArray();
  $mailer->dataObj['del_note'] = $session->account_notes." ".$mailer->dataObj['del_note'];
  $mailer->template = "order_summary";
  $mailer->subject  = "WEB ORDER #".$shipment->ext_id;
  $mailer->send();
}
?>

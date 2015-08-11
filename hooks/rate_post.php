<?php
function hook_rate_post(&$user,&$shipment,&$session)
{ 
  $mailer = new Mailer($user['folder']);
  $mailer->addRcpt($shipment->ship_contact,'rates@minimaxexpress.com'); // change to pickups @ minimaxexpress.com upon launch
  $mailer->addReplyTo($shipment->ship_contact,$shipment->ship_email);
  $mailer->dataObj  = $shipment->toArray();
  $mailer->dataObj['attn'] = "Please respond to this rate inquiry!";
  $mailer->template = "quote_summary";
  $mailer->subject  = "New Rate Inquiry";
  $mailer->send();
}
?>

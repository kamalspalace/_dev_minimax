<?php
function hook_login_post(&$user,&$session,&$return)
{
		$CI =&get_instance();
		$CI->load->library('integrationHandler',$user);
         $handshake = $CI->integrationhandler->process_request("handshake");
        $status    = intval($handshake->status);

        $session->bill_to_code  = (string)$handshake->bill_to_code;
        $session->bill_company  = (string)$handshake->Name;
        $session->bill_contact  = (string)$handshake->Contact2;
        $session->bill_address  = (string)$handshake->Address;
        $session->bill_city     = (string)$handshake->City;
        $session->bill_province = (string)$handshake->Province;
        $session->bill_postal   = (string)$handshake->Postal;
        $session->bill_phone    = (string)$handshake->Phone;
	if(! empty($handshake->Email))
	   $session->bill_email = (string)$handshake->Email; 
        $session->account_notes = (string)$handshake->Hours;
}
?>

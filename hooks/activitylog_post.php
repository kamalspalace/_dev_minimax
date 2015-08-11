<?php
// third times a charm
function hook_activitylog_post($data) {
    query("INSERT INTO `".$data['user_db']."`.activity 
	   (session_id,session_ip,user_id,action,view_action,data,os,browser,browser_version) 
	   VALUES(?,?,?,?,?,?,?,?,?)",
	   array($data['session_id'],
		 $data['ip'],
		 $data['user_id'],
		 $data['action'],
		 $data['view_action'],
		 $data['data'],
		 $data['os'],
		 $data['browser'],
		 $data['browser_version']));

}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

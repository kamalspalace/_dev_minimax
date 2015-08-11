<?php /* Smarty version Smarty-3.1.12, created on 2013-10-07 13:46:06
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/integration/degama/rate_request.xml" */ ?>
<?php /*%%SmartyHeaderCode:59622107051ecbfd4cbe8a0-89943884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '426e1e0d140a6acaa8aab8de1d2fe3b23264f375' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/integration/degama/rate_request.xml',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59622107051ecbfd4cbe8a0-89943884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ecbfd4ecca47_42191192',
  'variables' => 
  array (
    'shipment' => 0,
    'good' => 0,
    'total_pieces' => 0,
    'total_weight' => 0,
    'total_skids' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ecbfd4ecca47_42191192')) {function content_51ecbfd4ecca47_42191192($_smarty_tpl) {?><REQUEST>
	<NEW_ORDER>
		<?php if (isset($_smarty_tpl->tpl_vars['shipment']->value['ext_id'])){?><PBNUM><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ext_id'];?>
</PBNUM>
		<?php }?><DETAILS>
			<division>LTL</division>
			<service>A</service>
			<reference_no><?php echo $_smarty_tpl->tpl_vars['shipment']->value['reference'];?>
</reference_no>
			<reference_po><?php echo $_smarty_tpl->tpl_vars['shipment']->value['reference_po'];?>
</reference_po>
			<return_service><?php echo $_smarty_tpl->tpl_vars['shipment']->value['service_ret'];?>
</return_service>
			<declared_value><?php echo $_smarty_tpl->tpl_vars['shipment']->value['dec_value'];?>
</declared_value>
			<pod_email><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pod_email'];?>
</pod_email>
			<gps_email><?php echo $_smarty_tpl->tpl_vars['shipment']->value['gps_email'];?>
</gps_email>
		</DETAILS>
		<SHIPPER>
                        <name><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_name'];?>
</name>
                        <contact><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_contact'];?>
</contact>
                        <address1><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_street1'];?>
</address1>
                        <address2><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_street2'];?>
</address2>
                        <city><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_city'];?>
</city>
                        <province><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_province'];?>
</province>
                        <country><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_country'];?>
</country>
                        <postal><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_postal'];?>
</postal>
                        <phone><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_phone'];?>
</phone>
                        <ext><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_ext'];?>
</ext>
		</SHIPPER>
		<CONSIGNEE>
                        <name><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_name'];?>
</name>
                        <contact><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_contact'];?>
</contact>
                        <address1><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_street1'];?>
</address1>
                        <address2><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_street2'];?>
</address2>
                        <city><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_city'];?>
</city>
                        <province><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_province'];?>
</province>
                        <country><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_country'];?>
</country>
                        <postal><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_postal'];?>
</postal>
                        <phone><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_phone'];?>
</phone>
                        <ext><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_ext'];?>
</ext>
		</CONSIGNEE>
		<BILL_TO>
			<bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
		</BILL_TO>
		<FREIGHT_DETAILS>
			<GOODS>
			<?php $_smarty_tpl->tpl_vars["total_pieces"] = new Smarty_variable(0, null, 0);?>
			<?php $_smarty_tpl->tpl_vars["total_weight"] = new Smarty_variable(0, null, 0);?>
			<?php $_smarty_tpl->tpl_vars["total_skids"] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipment']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['good']->key;
?>
				<GOOD>
					<return><?php echo $_smarty_tpl->tpl_vars['good']->value['return_good'];?>
</return>
					<pieces><?php echo $_smarty_tpl->tpl_vars['good']->value['pieces'];?>
</pieces>
					<commodity><?php echo $_smarty_tpl->tpl_vars['good']->value['commodity'];?>
</commodity>
					<packaging><?php echo $_smarty_tpl->tpl_vars['good']->value['packaging'];?>
</packaging>
					<description><?php echo $_smarty_tpl->tpl_vars['good']->value['particulars'];?>
</description>
					<length><?php if ($_smarty_tpl->tpl_vars['good']->value['length']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['length'];?>
<?php }?></length>
					<width><?php if ($_smarty_tpl->tpl_vars['good']->value['width']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['width'];?>
<?php }?></width>
					<height><?php if ($_smarty_tpl->tpl_vars['good']->value['height']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['height'];?>
<?php }?></height>
					<weight><?php if ($_smarty_tpl->tpl_vars['good']->value['weight']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['weight'];?>
<?php }?></weight>
					<?php $_smarty_tpl->tpl_vars["total_pieces"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_pieces']->value+$_smarty_tpl->tpl_vars['good']->value['pieces']), null, 0);?>
					<?php $_smarty_tpl->tpl_vars["total_weight"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_weight']->value+$_smarty_tpl->tpl_vars['good']->value['weight']), null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['good']->value['packaging']=='S'){?><?php $_smarty_tpl->tpl_vars["total_skids"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_skids']->value+$_smarty_tpl->tpl_vars['good']->value['pieces']), null, 0);?><?php }?>
				</GOOD>
			<?php } ?>
			</GOODS>			
			<DETAILS>
				<equipment></equipment>
				<temp><?php echo $_smarty_tpl->tpl_vars['shipment']->value['temp_value'];?>
</temp>
				<level_of_temp><?php echo $_smarty_tpl->tpl_vars['shipment']->value['temp_level'];?>
</level_of_temp>
				<broker><?php if ($_smarty_tpl->tpl_vars['shipment']->value['cust_broker']!=0){?><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cust_broker'];?>
<?php }?></broker>
				<total_pieces><?php echo $_smarty_tpl->tpl_vars['total_pieces']->value;?>
</total_pieces>
				<total_weight><?php echo $_smarty_tpl->tpl_vars['total_weight']->value;?>
</total_weight>
				<number_of_skids><?php echo $_smarty_tpl->tpl_vars['shipment']->value['skids'];?>
</number_of_skids>
				<un_number><?php if ($_smarty_tpl->tpl_vars['shipment']->value['dg_un']!=0){?><?php echo $_smarty_tpl->tpl_vars['shipment']->value['dg_un'];?>
<?php }?></un_number>
				<cargo_scn><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cargo_scn'];?>
</cargo_scn>
				<UOM>imperial</UOM>
			</DETAILS>
		</FREIGHT_DETAILS>
		<PICKUP>
                        <date><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_date'];?>
</date>
                        <time_ready><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_time'];?>
</time_ready>
                        <area><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_area'];?>
</area>
                        <instructions><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_note'];?>
</instructions>
		</PICKUP>
		<DELIVERY>
                        <appointment_required><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_appt'];?>
</appointment_required>
                        <date><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_date'];?>
</date>
                        <time_from><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_time_from'];?>
</time_from>
                        <time_to><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_time_to'];?>
</time_to>
                        <area></area>
                        <appointment_no><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_area'];?>
</appointment_no>
                        <instructions><?php echo $_smarty_tpl->tpl_vars['session']->value->account_notes;?>
 <?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_note'];?>
</instructions>
		</DELIVERY>
	</NEW_ORDER>
</REQUEST>
<?php }} ?>
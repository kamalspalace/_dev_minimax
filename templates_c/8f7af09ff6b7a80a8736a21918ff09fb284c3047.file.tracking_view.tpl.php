<?php /* Smarty version Smarty-3.1.12, created on 2013-10-05 23:46:57
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/tracking/tracking_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196458866051d62fcd63c850-99640753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7af09ff6b7a80a8736a21918ff09fb284c3047' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/tracking/tracking_view.tpl',
      1 => 1377044378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196458866051d62fcd63c850-99640753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d62fcda5e431_71743600',
  'variables' => 
  array (
    'lang' => 0,
    'request' => 0,
    'data' => 0,
    'bl' => 0,
    'pod' => 0,
    'status' => 0,
    'loc' => 0,
    'rate' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d62fcda5e431_71743600')) {function content_51d62fcda5e431_71743600($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/shipon/public_html/new_bol/_COREDEV/includes/smarty/libs/plugins/modifier.replace.php';
?><div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container'>
		<div class='shipon_title'>
			<div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['lang']->value['tracking'];?>
</div>

			<div class='shipon_titlebuttons'>
				<div id='date-range'>
					<div id='date-range-field'><span></span><a href='#'>&#9660;</a></div>
					<div id='datepicker-calendar'></div>
				</div>
<input type='text' id='shipon_tracking_search' name='shipon_tracking_search' value='<?php if (isset($_smarty_tpl->tpl_vars['request']->value['search_string'])&&$_smarty_tpl->tpl_vars['request']->value['search_string']!=''){?><?php echo $_smarty_tpl->tpl_vars['request']->value['search_string'];?>
<?php }else{ ?>Search<?php }?>' style='width: 223px;' />
			</div>
		</div>
                <div id='shipon_tracking_view_header'>
                	<span id='tracking_view_h2'>PROBILL #<?php echo $_smarty_tpl->tpl_vars['data']->value['Pbnum'];?>
</span>
			
			<div id='shipon_tracking_attachments' style='float: right; margin-right: 135px; margin-top: 10px;'><b>Attachments:</b>&nbsp;&nbsp;
                        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['bl'])){?>
                                <?php  $_smarty_tpl->tpl_vars['bl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bl']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['bl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bl']->key => $_smarty_tpl->tpl_vars['bl']->value){
$_smarty_tpl->tpl_vars['bl']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['bl']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['bl']->value!=''){?><a href="<?php echo $_smarty_tpl->tpl_vars['bl']->value;?>
">BL</a>&nbsp;&nbsp;<?php }?>
                                <?php } ?>
                        <?php }?>


                        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['pod'])){?>
				<?php  $_smarty_tpl->tpl_vars['pod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pod']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['pod']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pod']->key => $_smarty_tpl->tpl_vars['pod']->value){
$_smarty_tpl->tpl_vars['pod']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pod']->key;
?>
                                	<?php if ($_smarty_tpl->tpl_vars['pod']->value!=''){?><a href="<?php echo $_smarty_tpl->tpl_vars['pod']->value;?>
">POD</a>&nbsp;&nbsp;<?php }?>
				<?php } ?>
                        <?php }?>

			</div>

                </div>

		<div id='shipon_tracking_view_radetail'>
			<span class='shipon_tracking_details_info'>DETAILS</span>
			<table id='shipon_tracking_details_info'>				
				<tbody>
					<tr>
						<td class='label'>Date</td>
						<td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['ProDate'];?>
</td>
						<td class='space'>&nbsp;</td>
						<td class='label'>Status</td>
						<td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['RecStatus'];?>
</td>
					</tr>		
                                        <tr>
                                                <td class='label'>BL #</td>
                                                <td class='value'><?php if (isset($_smarty_tpl->tpl_vars['data']->value['ShBOL'][0])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['ShBOL'];?>
<?php }else{ ?>-<?php }?></td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>PO / Ref #</td>
                                                <td class='value'><?php if (count($_smarty_tpl->tpl_vars['data']->value['RefNumb'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RefNumb'];?>
<?php }else{ ?>-<?php }?></td>
                                        </tr>
					
                                        <tr>
                                                <td class='label'>Weight</td>
                                                <td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['Weight'];?>
</td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>Skids-Pcs</td>
                                                <td class='value'>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['Skid']>0&&$_smarty_tpl->tpl_vars['data']->value['Pieces']>0){?>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['Skid'];?>
-<?php echo $_smarty_tpl->tpl_vars['data']->value['Pieces'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['data']->value['Skid']>0&&$_smarty_tpl->tpl_vars['data']->value['Pieces']<1){?>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['Skid'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['data']->value['Pieces']>0&&$_smarty_tpl->tpl_vars['data']->value['Skid']<1){?> 
								<?php echo $_smarty_tpl->tpl_vars['data']->value['Pieces'];?>

								<?php }?>
						</td>
                                        </tr>
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['AppointNo'][0])){?>
					<tr>
					     <td class='label'>Appt No.</td>
					     <td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['AppointNo'];?>
</td>
					     <td class='space'>&nbsp;</td>
					     <td class='label'>Appt Time</td>
					     <td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['DapDate'];?>
 - <?php if (strlen($_smarty_tpl->tpl_vars['data']->value['Daptime'])==1||strlen($_smarty_tpl->tpl_vars['data']->value['Daptime'])==2){?><?php echo $_smarty_tpl->tpl_vars['data']->value['Daptime'];?>
:00<?php }else{ ?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value['Daptime'],'.',':');?>
<?php }?></td>
					</tr>
					<?php }?>
				</tbody>
			</table>

			<span class='shipon_tracking_details_hstatus' style='margin-top: 15px;'>STATUS</span>
                        <table id='shipon_tracking_details_hstable'>
                                <thead>
                                        <tr>
                                                <th width='20%'>Timestamp</th>
                                                <th width='16%' style='text-align: left;'>Status</th>
						<th width='32%' style='text-align: left;'>Location</th>
                                                <th width='32%' style='text-align: left;'>Details</th>
                                        </tr>
                                </thead>
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['StatusLog']['Status'][0])){?>
					<tbody style='border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;'>
                                                <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['StatusLog']['Status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value){
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
						<tr>
							<td width='20%' <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>style='border-bottom-left-radius: 3px;'<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['Dt'];?>
<?php if ($_smarty_tpl->tpl_vars['status']->value['Tm']!=''){?> - <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['Tm'],'.',':');?>
<?php }?></td>
							<td width='16%' style='text-align: left; height: 36px;'><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['RecStatus'],'DPU','Dispatched'),'LDD','Loaded'),'DEL','Delivered'),'OFD','Out for Delivery'),'DOC','Docked');?>
</td>
							<td width='32%' style='text-align: left; height: 36px;'><?php if (isset($_smarty_tpl->tpl_vars['status']->value['Location'][0])){?><?php $_smarty_tpl->tpl_vars['loc'] = new Smarty_variable(explode(":",$_smarty_tpl->tpl_vars['status']->value['Location']), null, 0);?><?php echo strtoupper(smarty_modifier_replace($_smarty_tpl->tpl_vars['loc']->value[0],',',', '));?>
<?php }?><br /><?php if (isset($_smarty_tpl->tpl_vars['loc']->value[1])){?><?php echo $_smarty_tpl->tpl_vars['loc']->value[1];?>
<?php }?></td>
							<td width='32%' style='text-align: left; height: 36px; <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>border-bottom-right-radius: 3px;<?php }?>'><?php if (isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])){?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['Remarks'],':','<br />'),',,',', ');?>
<?php }?></td>
						</tr>
						<?php } ?>
					</tbody>
					<?php }else{ ?>
					<tfoot>
                                        <tr>
                                                <td width='25%'> </td>
                                                <td width='15%' style='text-align: left;'></td>
                                                <td width='60%' colspan='3' style='text-align: left;'>NO STATUS UPDATES ON FILE</td>
                                        </tr>
					</tfoot>
					<?php }?>	
				</tbody>
                        </table>

			<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Inflag'])&&($_smarty_tpl->tpl_vars['data']->value['Inflag']=='I'||$_smarty_tpl->tpl_vars['data']->value['Inflag']=='P')){?>
			
                        <span class='shipon_tracking_details_rates' style='margin-top: 20px;'>RATES</span>
			<table id='shipon_tracking_details_ratable' style='margin-bottom: 20px;'>
				<thead>
				    <tr>
					<th width='45%'>Description</th>
					<th width='10%'>Quantity</th>
					<th width='10%'>Weight</th>
					<th width='12%'>Rate</th>
					<th width='10%'>Per</th>
					<th width='13%'>Total</th>
				    </tr>
				</thead>
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate'][0])){?>
                                                <tbody>
                                       	        <?php  $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->key => $_smarty_tpl->tpl_vars['rate']->value){
$_smarty_tpl->tpl_vars['rate']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rate']->key;
?>
                                               	 <tr>
                                                        <td width='45%'><?php echo $_smarty_tpl->tpl_vars['rate']->value['Descr1'];?>
</td>
                                                        <td width='10%'><?php echo $_smarty_tpl->tpl_vars['rate']->value['Quant'];?>
</td>
                                                        <td width='10%'><?php echo $_smarty_tpl->tpl_vars['rate']->value['Weight'];?>
</td>
                                                        <td width='12%'><?php echo $_smarty_tpl->tpl_vars['rate']->value['Rate'];?>
</td>
                                                        <td width='10%'><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Uom'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Uom'];?>
<?php }else{ ?>-<?php }?></td>
                                                        <td width='13%'><?php echo $_smarty_tpl->tpl_vars['rate']->value['Tot'];?>
</td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>


						<?php }elseif(isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate'])){?>
						<tbody>
						<tr>
					 	 	<td width='45%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Descr1'];?>
</td>
					  		<td width='10%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Quant'];?>
</td>
					  		<td width='10%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Weight'];?>
</td>
					  		<td width='12%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Rate'];?>
</td>
					  		<td width='10%'><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Uom'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Uom'];?>
<?php }else{ ?>-<?php }?></td>
					  		<td width='13%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Tot'];?>
</td>
						</tr>
						</tbody>
						<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'])&&isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'])){?>
				<tfoot>
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Surcharge'])){?>
					<tr><td colspan='5' width='87%'>Fuel SC</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Surcharge'];?>
</td></tr><?php }?>

					<tr><td colspan='5' width='87%'>Subtotal</td><td><?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'];?>
<?php }else{ ?>0.00<?php }?></td></tr>
					<tr><td colspan='5' width='87%'>GST/HST</td><td><?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'];?>
<?php }else{ ?>0.00<?php }?></td></tr>
					<tr><td colspan='5' width='87%'><span style='font-size: 16px;'>Total</span></td><td><span style='color: #003594; font-size: 16px; font-weight: bold;'><?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Tot'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Tot'];?>
<?php }else{ ?>0.00<?php }?></span></td></tr>
				</tfoot>
				<?php }?>
			</table>
			<?php }?>
			<div style="float: left; clear: both;">
			<br />&nbsp;<br />
			</div>
		</div>
                <div id='shipon_tracking_view_leftpan'>
                    <div id='shipon_tracking_view_sidetail'>
                            <span class='shipon_tracking_details_hglyph'>&#xe001;</span><span class='shipon_tracking_details_head'>SHIPPER</span>
                            <span class='shipon_tracking_details_text' style='font-weight: bold;'><?php echo substr(strtoupper($_smarty_tpl->tpl_vars['data']->value['ShipName']),0,27);?>
</span>
                            <span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['data']->value['Add1']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Add1']);?>
<?php }else{ ?>&nbsp;<?php }?></span>
                            <?php if (count($_smarty_tpl->tpl_vars['data']->value['Add2'])>0){?>
                            <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Add2']);?>
</span>
                            <?php }?>
                            <span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['data']->value['City']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['City']);?>
<?php }else{ ?>&nbsp;&nbsp;<?php }?>, <?php if ($_smarty_tpl->tpl_vars['data']->value['Prv']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Prv']);?>
<?php }else{ ?>&nbsp;&nbsp;<?php }?></span>
                            <span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['data']->value['Postal']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Postal']);?>
<?php }else{ ?>&nbsp;<?php }?></span>
                            <span class='shipon_tracking_details_line'>&nbsp;</span>
                            <span class='shipon_tracking_details_hglyph'>&#xe01b;</span><span class='shipon_tracking_details_head'>CONSIGNEE</span>
                            <span class='shipon_tracking_details_text' style='font-weight: bold;'><?php echo strtoupper(substr($_smarty_tpl->tpl_vars['data']->value['ConsigName'],0,27));?>
</span>
                            <span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['data']->value['ConAdd1']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConAdd1']);?>
<?php }else{ ?>&nbsp;<?php }?></span>
                            <?php if (count($_smarty_tpl->tpl_vars['data']->value['ConAdd2'])>0){?>
                            <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConAdd2']);?>
</span>
                            <?php }?>
                            <span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['data']->value['ConCity']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConCity']);?>
<?php }else{ ?>&nbsp;&nbsp;<?php }?>, <?php if ($_smarty_tpl->tpl_vars['data']->value['ConPrv']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConPrv']);?>
<?php }else{ ?>&nbsp;&nbsp;<?php }?></span>
                            <span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['data']->value['ConPostal']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConPostal']);?>
<?php }else{ ?>&nbsp;<?php }?></span>
							<span class='shipon_tracking_details_line' style='margin-top: -2px;'>&nbsp;</span>
                            <span class='shipon_tracking_details_hglyph'>&#xe030;</span><span class='shipon_tracking_details_head' style='margin-bottom: 6px;'>BILL TO</span>
							<span class='shipon_tracking_details_text' style='font-weight: bold;'><?php echo substr($_smarty_tpl->tpl_vars['session']->value->bill_company,0,27);?>
</span>
							<span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['session']->value->bill_address){?><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
<?php }else{ ?>&nbsp;<?php }?></span>
							<span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['session']->value->bill_city){?><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
<?php }?>, <?php if ($_smarty_tpl->tpl_vars['session']->value->bill_province){?><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
<?php }else{ ?>&nbsp;&nbsp;<?php }?></span>
							<span class='shipon_tracking_details_text'><?php if ($_smarty_tpl->tpl_vars['session']->value->bill_postal){?><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_postal;?>
<?php }else{ ?>&nbsp;<?php }?></span>
							<span class='shipon_tracking_details_line'>&nbsp;</span>
                    </div>
                </div>

                <input type='hidden' id='shipon_tracking_date_from' name='shipon_tracking_date_from' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['start_date'];?>
' />
                <input type='hidden' id='shipon_tracking_date_to' name='shipon_tracking_date_to' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['end_date'];?>
' />
                <input type='hidden' id='shipon_tracking_sort_by' name='shipon_tracking_sort_by' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
'>
                <input type='hidden' id='shipon_tracking_sort_order' name='shipon_tracking_sort_order' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
' />
	</div>
</div>
<?php }} ?>
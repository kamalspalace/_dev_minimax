<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:43
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/tracking/tracking_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64395194851d5b1479addf8-01443756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a84168813e7c59d597d81c665eaa121604fb4e7' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/tracking/tracking_list.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64395194851d5b1479addf8-01443756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b147b06214_27577602',
  'variables' => 
  array (
    'lang' => 0,
    'request' => 0,
    'data' => 0,
    'order' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b147b06214_27577602')) {function content_51d5b147b06214_27577602($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/shipon/public_html/new_bol/_COREDEV/includes/smarty/libs/plugins/modifier.replace.php';
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
<input type='text' id='shipon_tracking_search' name='shipon_tracking_search' value='<?php if ($_smarty_tpl->tpl_vars['request']->value['search_string']){?><?php echo $_smarty_tpl->tpl_vars['request']->value['search_string'];?>
<?php }else{ ?>Search<?php }?>' style='width: 223px;' />
			</div>
		</div>

		<table id='shipon_tracking'>
			<thead>
				<tr>
					<th id='shipon_tracking_date' onclick='sort_by("ProDate");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</th>
                    <th id='shipon_tracking_probill_no' onclick='sort_by("Pbnum");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['probill_no'];?>
</th>
                    <th id='shipon_tracking_shbol' onclick='sort_by("Sh-BOL");'>&nbsp;BL #&nbsp;</th>
					<th id='shipon_tracking_status' onclick='sort_by("Rec-Status");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
</th>
					<th id='shipon_tracking_ship_name' onclick='sort_by("ShipName");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['ship_name'];?>
</th>
					<th id='shipon_tracking_ship_city' onclick='sort_by("City");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['ship_city'];?>
</th>
					<th id='shipon_tracking_ship_prov' onclick='sort_by("Prv");'>&nbsp;Prov&nbsp;</th>
					<th id='shipon_tracking_cons_name' onclick='sort_by("ConsigName");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['cons_name'];?>
</th>
					<th id='shipon_tracking_cons_addr' onclick='sort_by("ConAdd-1");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['cons_addr'];?>
</th>
					<th id='shipon_tracking_cons_city' onclick='sort_by("ConCity");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['cons_city'];?>
</th>
					<th id='shipon_tracking_cons_prov' onclick='sort_by("ConPrv");'>&nbsp;Prov&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['data']->value['orders'][0])){?>
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
						<tr onclick='get_tracking_details(<?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
);'>
							<td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value['ProDate'];?>
</td>
							<td><a href="javascript:get_tracking_details(<?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
);"><?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
</a></td>
                                                        <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order']->value['ShBOL'],","," ");?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['RecStatus'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['ShipName'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['City'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['Prv'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['ConsigName'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['ConAdd1'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['ConCity'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['order']->value['ConPrv'];?>
<?php if (isset($_smarty_tpl->tpl_vars['order']->value['Code'])){?><input type="hidden" id="code-<?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
" name="code-<?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['Code'];?>
" /><?php }?></td>
						</tr>
					<?php } ?>
					<?php if (count($_smarty_tpl->tpl_vars['data']->value['orders'])<10){?>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (count($_smarty_tpl->tpl_vars['data']->value['orders'])) : count($_smarty_tpl->tpl_vars['data']->value['orders'])-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = count($_smarty_tpl->tpl_vars['data']->value['orders']), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
						<tr>
							<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
							<td></td>
                                                        <td></td>
						</tr>
						<?php }} ?>
					<?php }?>
				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
							<td></td>
                                                        <td></td>
                                                        <td></td>
                                                </tr>
					<?php }} ?>
				<?php }?>
				
			</tbody>
		</table>
                <input type='hidden' id='shipon_tracking_date_from' name='shipon_tracking_date_from' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['start_date'];?>
' />
                <input type='hidden' id='shipon_tracking_date_to' name='shipon_tracking_date_to' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['end_date'];?>
' />
                <input type='hidden' id='shipon_tracking_sort_by' name='shipon_tracking_sort_by' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
'>
                <input type='hidden' id='shipon_tracking_sort_order' name='shipon_tracking_sort_order' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
' />
		<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

	</div>
</div>
<?php }} ?>
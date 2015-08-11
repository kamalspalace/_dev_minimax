<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/delivery_appt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144343125351ec92183ac453-12490489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef48de89867fe3b04df40f270bdf5036f1390b04' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/delivery_appt.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144343125351ec92183ac453-12490489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec92183e02c0_05671355',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec92183e02c0_05671355')) {function content_51ec92183e02c0_05671355($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('delivery', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<label class='shipon_titlelabel' style='color: #fff; font-weight: normal; padding-top: 2px;'>Appointment &raquo;</label>
        	<input type="checkbox" id="delivery_appointment" name="shipon_del_appt" class="shipon_checkbox shipon_title_checkbox" onclick="appointment_toggle(this);" style="margin-top: 11px;" value="1" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['delivery'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>

        <div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
&nbsp;</label>
            <input type="text" id="shipon_delivery_date" name="shipon_del_date" class="shipon_input shipon_datepicker"/>
        </div>
    	<div class='shipon_fieldblock' style='width: 23%;'>
            <label>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['time_from'];?>
</label>
            <input type="text" id="shipon_delivery_time_from" name="shipon_del_time_from" class="shipon_input shipon_timepicker" disabled="disabled"/>
    	</div>
        <div class='shipon_fieldblock' style='width: 20%;'>
            <label>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['time_to'];?>
</label>
            <input type="text" id="shipon_delivery_time_to" name="shipon_del_time_to" class="shipon_input shipon_timepicker" disabled="disabled"/>
        </div>
        <div class='shipon_fieldblock' style='width: 26%;'>
            <label>Appt #</label>
            <input type="text" id="shipon_del_note" name="shipon_del_area" class="shipon_input" disabled="disabled"/>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
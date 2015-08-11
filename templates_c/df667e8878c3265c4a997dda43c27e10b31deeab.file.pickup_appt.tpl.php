<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/pickup_appt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194606405451ec9217efdcd3-33199559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df667e8878c3265c4a997dda43c27e10b31deeab' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/pickup_appt.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194606405451ec9217efdcd3-33199559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9217f237a9_97089111',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9217f237a9_97089111')) {function content_51ec9217f237a9_97089111($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('pickup', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['pickup'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        
        <div class='shipon_fieldblock' style='width: 50%;'>
            <label style='width: 40px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</label>
            <input type='text' id='shipon_pup_date' name='shipon_pup_date' class='shipon_input shipon_datepicker' tabindex='2' />
        </div>
	<div class='shipon_fieldblock' style='width: 5%;'>
	    <span class='filler'></span>
	</div>
        <div class='shipon_fieldblock' style='width: 45%;'>
            <label style='width: 70px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['ready_by'];?>
</label>
            <input type='text' id='shipon_pup_ready' name='shipon_pup_time' class='shipon_input shipon_timepicker' tabindex='3' />
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
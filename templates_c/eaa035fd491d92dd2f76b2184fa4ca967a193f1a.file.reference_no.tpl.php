<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/reference_no.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192910799151ec9217eaf6b0-07560702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa035fd491d92dd2f76b2184fa4ca967a193f1a' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/reference_no.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192910799151ec9217eaf6b0-07560702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9217ec67a7_25120002',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9217ec67a7_25120002')) {function content_51ec9217ec67a7_25120002($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('reference_no', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>'REFERENCE #','button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        
	<div class='shipon_fieldblock' style='width: 45%;'>
		<label>BOL&nbsp;</label>
		<input type='text' id='shipon_reference' name='shipon_reference' class='shipon_input' tabindex='1'/>
	</div>
	<div class='shipon_fieldblock' style='width: 1%;'>
	    <span class='filler'></span>
	</div>
	<div class='shipon_fieldblock' style='width: 54%;'>
		<label>PO/Ref&nbsp;</label>
		<input type='text' id='shipon_reference_po' name='shipon_reference_po' class='shipon_input' tabindex='1'/>
	</div>	

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/shipment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162532758051ec9217e3cb61-93111621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba16c4fb7cd10b07072ce886ce2ffacddff4bc73' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/shipment.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162532758051ec9217e3cb61-93111621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9217e78e00_39474991',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9217e78e00_39474991')) {function content_51ec9217e78e00_39474991($_smarty_tpl) {?>
<form name='shipon_BOL' id='shipon_BOL' class='shipon_form' method='post'>
<div id='shipon_accordion'>
	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id='shipon_bol_footer'>
	<a class='shipon_button' id='shipon_back' onclick='shipon_back()'>Back</a>
	<span id='shipon_output'></span>
	<a class='shipon_button' id='shipon_continue' onclick='validate_form(shipon_continue)'>Continue</a>
</div>
</form>
<?php }} ?>
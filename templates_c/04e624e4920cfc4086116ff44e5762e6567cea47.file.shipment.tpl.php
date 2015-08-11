<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:37
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/shipment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112441943351d5b141362ce4-89520173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e624e4920cfc4086116ff44e5762e6567cea47' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/shipment.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112441943351d5b141362ce4-89520173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b1413a0957_20434099',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b1413a0957_20434099')) {function content_51d5b1413a0957_20434099($_smarty_tpl) {?>
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
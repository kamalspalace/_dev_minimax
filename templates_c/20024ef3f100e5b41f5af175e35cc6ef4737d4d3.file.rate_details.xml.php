<?php /* Smarty version Smarty-3.1.12, created on 2013-10-07 14:11:18
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/integration/degama/rate_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:138744669351ecc5ac2f9b65-25086233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20024ef3f100e5b41f5af175e35cc6ef4737d4d3' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/integration/degama/rate_details.xml',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138744669351ecc5ac2f9b65-25086233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ecc5ac336f24_38701739',
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ecc5ac336f24_38701739')) {function content_51ecc5ac336f24_38701739($_smarty_tpl) {?><REQUEST>
	<TRACKING_DETAILS>
		<pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pbnum'];?>
</pbnum>
		<bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
	</TRACKING_DETAILS>
</REQUEST>
<?php }} ?>
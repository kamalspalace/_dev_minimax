<?php /* Smarty version Smarty-3.1.12, created on 2013-07-25 20:49:52
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/integration/degama/rate_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:117314777251d5d4b3cf3576-33225034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6cf51d8a55f0bb0f80e93c52921b1b853853b87' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/integration/degama/rate_details.xml',
      1 => 1374799538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117314777251d5d4b3cf3576-33225034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5d4b3d02fb0_98272346',
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5d4b3d02fb0_98272346')) {function content_51d5d4b3d02fb0_98272346($_smarty_tpl) {?><REQUEST>
	<TRACKING_DETAILS>
		<pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pbnum'];?>
</pbnum>
		<bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
	</TRACKING_DETAILS>
</REQUEST>
<?php }} ?>
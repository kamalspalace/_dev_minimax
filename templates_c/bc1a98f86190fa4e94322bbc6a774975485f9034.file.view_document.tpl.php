<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 19:51:03
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/tracking/view_document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213750766151ec9733b808f8-89105423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc1a98f86190fa4e94322bbc6a774975485f9034' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/tracking/view_document.tpl',
      1 => 1381103461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213750766151ec9733b808f8-89105423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9733bb70c2_33022124',
  'variables' => 
  array (
    'type' => 0,
    'embed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9733bb70c2_33022124')) {function content_51ec9733bb70c2_33022124($_smarty_tpl) {?><div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container' style='background-color: #CCC; background-image: none;'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>Tracking</div>

			<div class="shipon_titlebuttons">
				&nbsp;
			</div>
		</div>
        	<div id='shipon_tracking_view_header' style='margin-bottom: 20px;'>
       			<span id='tracking_view_h2'><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</span>
			<span style="float: right; margin: 10px 12px 0px 0px;"><a href="javascript:history.back()">&laquo;&nbsp;Back to Order</a></span>	
		</div>

		<?php echo $_smarty_tpl->tpl_vars['embed']->value;?>

<?php }} ?>
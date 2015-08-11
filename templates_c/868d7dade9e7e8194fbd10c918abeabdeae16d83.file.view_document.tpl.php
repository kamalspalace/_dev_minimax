<?php /* Smarty version Smarty-3.1.12, created on 2013-10-05 23:47:11
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/tracking/view_document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15719734075250dd3f380742-28910399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '868d7dade9e7e8194fbd10c918abeabdeae16d83' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/tracking/view_document.tpl',
      1 => 1374799538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15719734075250dd3f380742-28910399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'embed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5250dd3f3e78a4_13596669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5250dd3f3e78a4_13596669')) {function content_5250dd3f3e78a4_13596669($_smarty_tpl) {?><div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
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
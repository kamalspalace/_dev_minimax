<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/common/box_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82162925451ec9217ec9fb0-60908543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7f9898e7937f8c4f3bfe691f3a78047297519d' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/common/box_header.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82162925451ec9217ec9fb0-60908543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9217ef4f38_55413380',
  'variables' => 
  array (
    'id' => 0,
    'width' => 0,
    'title' => 0,
    'help_icon' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9217ef4f38_55413380')) {function content_51ec9217ef4f38_55413380($_smarty_tpl) {?><div class='shipon_field' id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_content' style='width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
;'>
  <div class='shipon_field_container'>
    <div class='shipon_title'>
      <div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['help_icon']->value){?>
  	<span id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_tip' class='shipon_icon shipon_help_icon'>?</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['button']->value){?>
	<div class='shipon_titlebuttons'><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</div>
	<?php }?>	
       </div>
       <div class='shipon_field_content'>
<?php }} ?>
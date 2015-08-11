<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:37
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/common/box_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137764159151d5b1413f64b5-40737798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3894e1b34b05fc1d0db7d7a9b15edb88df64bc5' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/common/box_header.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137764159151d5b1413f64b5-40737798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b141422f75_41229405',
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
<?php if ($_valid && !is_callable('content_51d5b141422f75_41229405')) {function content_51d5b141422f75_41229405($_smarty_tpl) {?><div class='shipon_field' id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
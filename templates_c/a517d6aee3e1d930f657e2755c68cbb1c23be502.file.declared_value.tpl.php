<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:38
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/declared_value.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46084262051d5b1417c4632-44923852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a517d6aee3e1d930f657e2755c68cbb1c23be502' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/declared_value.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46084262051d5b1417c4632-44923852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b1417def46_15283684',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b1417def46_15283684')) {function content_51d5b1417def46_15283684($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('declared_value', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['declared_value'],'button'=>'','help_icon'=>'','width'=>'100%'), 0);?>


        <div class="shipon_fieldblock" style="width: 100%;">
	  <label>$</label>
          <input type="text" id="shipon_declared_value" name="shipon_dec_value" class="shipon_input"/>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
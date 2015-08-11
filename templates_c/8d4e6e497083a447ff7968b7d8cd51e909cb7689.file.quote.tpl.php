<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:37
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/quote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129955948851e4be0f62b1d6-89703467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d4e6e497083a447ff7968b7d8cd51e909cb7689' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/quote.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129955948851e4be0f62b1d6-89703467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51e4be0f644a36_46882981',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e4be0f644a36_46882981')) {function content_51e4be0f644a36_46882981($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('quote', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>'RETRIEVE A QUOTE','button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

	<div class='shipon_fieldblock searchBtnEmptyClass' style='width: 100%;'>
		<label>Quote #</label>
		<input type='text' id='shipon_quote_no' name='shipon_quote_no' class='shipon_input' style='width: auto; ' tabindex='100' />
		<span onclick="fetchQuote();" id="quote_search"></span>
	</div>        
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
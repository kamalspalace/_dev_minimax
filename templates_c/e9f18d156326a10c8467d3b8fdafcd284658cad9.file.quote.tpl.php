<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/quote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105377572551ec9217f28040-92933237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f18d156326a10c8467d3b8fdafcd284658cad9' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/quote.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105377572551ec9217f28040-92933237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9217f3dbc4_28129772',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9217f3dbc4_28129772')) {function content_51ec9217f3dbc4_28129772($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('quote', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>'RETRIEVE A QUOTE','button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

	<div class='shipon_fieldblock searchBtnEmptyClass' style='width: 100%;'>
		<label>Quote #</label>
		<input type='text' id='shipon_quote_no' name='shipon_quote_no' class='shipon_input' style='width: auto; ' tabindex='100' />
		<span onclick="fetchQuote();" id="quote_search"></span>
	</div>        
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/section1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150812203551ec9217e7deb1-87255071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447d9aa8412cbe9265c0adebb56b3251015d12e9' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/section1.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150812203551ec9217e7deb1-87255071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9217eabaf3_85681853',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9217eabaf3_85681853')) {function content_51ec9217eabaf3_85681853($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_address', null, 0);?>
	<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['bol_address'];?>
</h3>
	<div class='shipon_section_content' id='shipon_<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
_section'>
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 33%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/reference_no.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

			<div class='shipon_column' style='width: 34%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/pickup_appt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

			<div class='shipon_column' style='width: 33%;'>
			 <?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/quote.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 33%;'>
				<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/shipper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

            <div class='shipon_column' style='width: 34%;'>
				<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/consignee.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>

            <div class='shipon_column' style='width: 33%;'>
				<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/billto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
			    <?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
			
		</div>			
	</div>
<?php }} ?>
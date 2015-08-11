<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:37
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/section1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171216580951d5b1413a5a58-57489886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b126ae6398c4183a0b506f802a548a808ff7ec07' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/section1.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171216580951d5b1413a5a58-57489886',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b1413d39c1_15003659',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b1413d39c1_15003659')) {function content_51d5b1413d39c1_15003659($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_address', null, 0);?>
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
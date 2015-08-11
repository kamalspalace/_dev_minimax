<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:38
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/section2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18754806351d5b1417480b2-18746613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794f1871a5f67281430cbc4a8ec9f68b14fd596c' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/section2.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18754806351d5b1417480b2-18746613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b1417653b6_55031602',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b1417653b6_55031602')) {function content_51d5b1417653b6_55031602($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_goods', null, 0);?>
	<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['bol_goods'];?>
</h3>
	<div class='shipon_section_content' id='shipon_<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
_section'>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 100%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/goods/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<!--div class='shipon_row'>
                        <div class='shipon_column' style='width: 30%;'>
                        <?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/declared_value.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        </div>
			<div class='shipon_column' style='width: 30%;'>	
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/customs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div-->	

	</div>
<?php }} ?>
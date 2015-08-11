<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:38
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/section3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153866117051d5b141801c52-06344700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05014c4540a67a7d0af909fa29062c6795d3069c' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/section3.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153866117051d5b141801c52-06344700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b14182d367_67332530',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b14182d367_67332530')) {function content_51d5b14182d367_67332530($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_details', null, 0);?>
	<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['bol_details'];?>
</h3>
	<div class='shipon_section_content' id='shipon_<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
_section'>

		<!--div class='shipon_row'>
			<div class='shipon_column' style='width: 100%;'>
			
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/service_return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div-->
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/pickup_notes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
			<div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/delivery_appt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>			
		</div>
		<!--div class='shipon_row'>
			<div class='shipon_column' style='width: 25%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/gps_email.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>	
			<div class='shipon_column' style='width: 25%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/pod_email.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
			
			<!--div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/vehicle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div-->
		</div-->
			
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 25%;'>
			  <span class='filler'></span>
			</div>
			<div class='shipon_column' style='width: 75%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/rates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
<?php }} ?>
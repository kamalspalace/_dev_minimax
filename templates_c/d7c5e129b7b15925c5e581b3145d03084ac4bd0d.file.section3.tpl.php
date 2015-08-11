<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/section3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134587901851ec921833dee3-00579915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7c5e129b7b15925c5e581b3145d03084ac4bd0d' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/section3.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134587901851ec921833dee3-00579915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9218367556_67443658',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9218367556_67443658')) {function content_51ec9218367556_67443658($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_details', null, 0);?>
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
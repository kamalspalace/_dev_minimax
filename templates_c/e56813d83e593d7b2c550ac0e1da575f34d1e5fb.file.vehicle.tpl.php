<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/vehicle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8384900751ec921841fcf5-58260987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e56813d83e593d7b2c550ac0e1da575f34d1e5fb' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/vehicle.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8384900751ec921841fcf5-58260987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9218438fa5_08585537',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9218438fa5_08585537')) {function content_51ec9218438fa5_08585537($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('vehicle', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['vehicle'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 100%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_vehicle_car" name="shipon_equipment" value="CAR"/>
                <label for="shipon_vehicle_car">car</label>
                <input type="radio" id="shipon_vehicle_van" name="shipon_equipment" value="VAN"/>
                <label for="shipon_vehicle_van">van</label>
                <input type="radio" id="shipon_vehicle_5ton" name="shipon_equipment" value="St22"/>
                <label for="shipon_vehicle_5ton">5ton</label>
                <input type="radio" id="shipon_vehicle_53" name="shipon_equipment" value="53v2"/>
                <label for="shipon_vehicle_53">53</label>
            </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
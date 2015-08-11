<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:38
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/vehicle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49445490351d5b1418fb063-77417421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6474fe5004011aa6002df8fc1e469ba78617daa' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/vehicle.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49445490351d5b1418fb063-77417421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b141914c30_10131970',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b141914c30_10131970')) {function content_51d5b141914c30_10131970($_smarty_tpl) {?>
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
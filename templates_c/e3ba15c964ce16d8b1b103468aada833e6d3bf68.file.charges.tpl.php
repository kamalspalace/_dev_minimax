<?php /* Smarty version Smarty-3.1.12, created on 2013-07-04 13:30:41
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/charges.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146301494751d5b141456a81-82526279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ba15c964ce16d8b1b103468aada833e6d3bf68' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/charges.tpl',
      1 => 1372954173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146301494751d5b141456a81-82526279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b1414820e3_23716744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b1414820e3_23716744')) {function content_51d5b1414820e3_23716744($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('charges', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['charge_method'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 100%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_charges_prepaid" name="shipon_bill_method" value="PRP" checked="checked"/>
                <label for="shipon_charges_prepaid"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prepaid'];?>
</label>
                <input type="radio" id="shipon_charges_collect" name="shipon_bill_method" value="COL"/>
                <label for="shipon_charges_collect"><?php echo $_smarty_tpl->tpl_vars['lang']->value['collect'];?>
</label>
                <input type="radio" id="shipon_charges_third" name="shipon_bill_method" value="3PL"/>
                <label for="shipon_charges_third"><?php echo $_smarty_tpl->tpl_vars['lang']->value['thirdpty'];?>
</label>
            </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
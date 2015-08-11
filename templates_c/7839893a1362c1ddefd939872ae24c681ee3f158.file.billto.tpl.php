<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:38
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/billto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195074539051d5b14169c3d9-05295403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7839893a1362c1ddefd939872ae24c681ee3f158' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/billto.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195074539051d5b14169c3d9-05295403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b14173d6d9_40981034',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b14173d6d9_40981034')) {function content_51d5b14173d6d9_40981034($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/shipon/public_html/new_bol/_COREDEV/includes/smarty/libs/plugins/modifier.replace.php';
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('payer_address', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['payer_address'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>


	<div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_name'];?>
</label>
            <input type="text" id="shipon_bill_name" name="shipon_bill_name" class="shipon_input shipon_autocomplete" value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_company;?>
" readonly="readonly"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_contact'];?>
</label>
            <input type="text" id="shipon_bill_contact" name="shipon_bill_contact" class="shipon_input" value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_contact;?>
" readonly="readonly"></input>	   
	</div>

        <div class="shipon_fieldblock" style="width: 70%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone'];?>
</label>
            <input type="text" id="shipon_bill_phone" name="shipon_bill_phone" class="shipon_input" value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_phone;?>
" readonly="readonly" onKeyDown="formatTelNo (this);"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 30%;">
            <label for="shipon_payer_ext"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone_ext'];?>
</label>
            <input type="text" id="shipon_bill_ext" name="shipon_bill_ext" class="shipon_input" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_email'];?>
</label>
            <input type="text" id="shipon_bill_email" name="shipon_bill_email" class="shipon_input" value="<?php if ($_smarty_tpl->tpl_vars['session']->value->bill_email){?><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_email;?>
<?php }?>" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street1'];?>
</label>
            <input type="text" id="shipon_bill_street1" name="shipon_bill_street1" class="shipon_input" value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street2'];?>
</label>
            <input type="text" id="shipon_bill_street2" name="shipon_bill_street2" class="shipon_input" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_city'];?>
</label>
            <input type="text" id="shipon_bill_city" name="shipon_bill_city" class="shipon_input" value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_payer_province" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_province'];?>
</label>
            <input type="text" id="shipon_bill_prov" name="shipon_bill_prov" class="shipon_input" value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
" readonly="readonly"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 60%;">
            <label for="shipon_payer_country" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_country'];?>
</label>
		<input type="text" id="shipon_bill_country" name="shipon_bill_country" class="shipon_input" value="CA" readonly="readonly" />
        </div>

        <div class="shipon_fieldblock" style="width: 40%;">
            <label style="padding-top: 1px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_postal'];?>
&nbsp;</label>
            <input type="text" id="shipon_bill_postal" name="shipon_bill_postal" class="shipon_input" maxlength="6" value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['session']->value->bill_postal,' ','');?>
" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label style="padding-top: 2px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['billing_account_no'];?>
&nbsp;</label>
            <input type="text" id="shipon_account_no" name="shipon_bill_account" class="shipon_input" value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_to_code;?>
" readonly="readonly"/>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
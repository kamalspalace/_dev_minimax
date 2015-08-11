<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:05:44
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/settings/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41114058551ec9260de6a27-34538158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8adec14a38c1f8953d24fdace1c7d19eb5506e07' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/settings/settings.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41114058551ec9260de6a27-34538158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec9261049772_13538584',
  'variables' => 
  array (
    'session' => 0,
    'lang' => 0,
    'preferences' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec9261049772_13538584')) {function content_51ec9261049772_13538584($_smarty_tpl) {?> 
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('account_setting', null, 0);?>


<script type="text/javascript">
  window.session_address = [];
  window.session_address['shipon_settings_dad_company']  = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_company;?>
';
  window.session_address['shipon_settings_dad_contact']  = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_contact;?>
';
  window.session_address['shipon_settings_dad_phone']    = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_phone;?>
';
  window.session_address['shipon_settings_dad_ext']      = '';
  window.session_address['shipon_settings_dad_email']    = '';
  window.session_address['shipon_settings_dad_street1']  = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
';
  window.session_address['shipon_settings_dad_street2']  = '';
  window.session_address['shipon_settings_dad_city']     = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
';
  window.session_address['shipon_settings_dad_prov']     = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
';
  window.session_address['shipon_settings_dad_postal']   = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_postal;?>
';
  setup_autocomplete();
</script>


<div class='shipon_field' id='shipon_settings_content' style='width: 100%;'>
  <div class='shipon_field_container'>
    <div class='shipon_title'>
      <div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['lang']->value['preferences'];?>
</div>
		</div>
	</div>
  <div id='shipon_settings_view_header'>
	  <span class="shipon_setting_option_selected">General</span>
	</div>

	<div id='shipon_settings_general'>
	<form name='shipon_account_settings' id='shipon_account_settings' class='shipon_form' method='post'>
	  <div class="shipon_settings_left">
          <div class='shipon_fieldblock' style='width: 475px;'>
            <label style='width: 485px; padding: 2px 0px; text-decoration: underline; font-weight: bold; float: left;text-align: left;'>Default Shipper Address:</label>
        	</div>
          <div class='shipon_fieldblock' style='width: 90px;'>
      		  <label style='width: 100px; float: left; padding: 2px 0px 3px 0px; text-align: left;'>Behaviour</label>
          </div>
          <div class='shipon_fieldblock' style='width: 170px; padding-top: 5px !important;'>
      		  <input type='radio' id='shipon_settings_dab' name='shipon_settings_dad_beh' value='0' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio();' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh)||$_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh<1){?>checked="checked"<?php }?> />
            <label for='shipon_settings_dab' style='margin-top: 2px;'>&nbsp;Use Billing Address</label>
          </div>
          <div class='shipon_fieldblock' style='width: 170px; padding-top: 5px !important;'>
      		  <input type='radio' id='shipon_settings_dac' name='shipon_settings_dad_beh' value='1' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio()' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh)&&$_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh==1){?>checked="checked"<?php }?> />
            <label for='shipon_settings_dac' style='margin-top: 3px; float: left;'>&nbsp;Use Address Below</label>
          </div>
          <div class='shipon_fieldblock' style='width: 24px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Company</label>
            <input type='text' id='shipon_settings_dad_company' name='shipon_settings_dad_company' class='shipon_input' style='float: left; width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_company;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Contact</label>
            <input type='text' id='shipon_settings_dad_contact' name='shipon_settings_dad_contact' class='shipon_input' style='float: left; width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_contact)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_contact;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_contact;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 260px; padding-right: 10px;'>
            <label style='height: 27px !important; width: 99px !important; float: left; text-align: left;'>Phone</label>
            <input type='text' id='shipon_settings_dad_phone' name='shipon_settings_dad_phone' onKeyDown="formatTelNo (this);" class='shipon_input' style="float: left;" <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_phone)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_phone;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_phone;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 150px; margin-left: 2px;'>        
            <label style='height: 27px !important; width: 55px; float: left; text-align: left;'>Ext</label>
            <input type='text' id='shipon_settings_dad_ext' name='shipon_settings_dad_ext' class='shipon_input' maxlength='4' style="float: left;" <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company)){?>disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 39px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 99px; height: 27px; float: left; text-align: left;'>Email</label>
            <input type='text' id='shipon_settings_dad_email' name='shipon_settings_dad_email' class='shipon_input' style='float: left; width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_email)){?><?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_email;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Street 1</label>
            <input type='text' id='shipon_settings_dad_street1' name='shipon_settings_dad_street1' class='shipon_input' style='float: left; width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street1)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street1;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Street 2</label>
            <input type='text' id='shipon_settings_dad_street2' name='shipon_settings_dad_street2' class='shipon_input' style='float: left; width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street2)){?>disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street2;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>City</label>
            <input type='text' id='shipon_settings_dad_city' name='shipon_settings_dad_city' class='shipon_input' style='float: left; width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_city)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_city;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

	        <div class='shipon_fieldblock' style='width: 260px; padding-right: 10px;'>
        	   <label style='height: 27px; width: 96px; float: left; text-align: left;'>Province</label>
         	   <input type='text' id='shipon_settings_dad_prov' name='shipon_settings_dad_prov' class='shipon_input shipon_autocomplete' autocomplete_type='province' modifier='shipon_settings_dad_country' maxlength='2' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_prov)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_prov;?>
'<?php }?>/>
          </div>
          
          <div class='shipon_fieldblock' style='width: 157px; margin-left: 2px;'>                          
      		   <label style='height: 27px; width: 50px; float: left; text-align: left;'>Postal</label>
             <input type='text' id='shipon_settings_dad_postal' name='shipon_settings_dad_postal' class='shipon_input' maxlength='6' style='float: left; width:86px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_postal)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_postal;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_postal;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 32px; padding-top: 10px !important;'>
            &nbsp;<input type='hidden' id='shipon_settings_dad_country' name='shipon_settings_dad_country' value='CA' readonly />
          </div>            
          <div class='shipon_fieldblock' style='width: 475px;'>
            <label style='width: 99px; float: left;'>&nbsp;</label>
            <a class="address_save shipon_button" onclick="shipon_save_settings();" style='margin-bottom: 4px;'> Save </a>
          </div>
          <div class='shipon_fieldblock' style='width: 475px;'>
            <label style='height: 28px; width: 475px; float: left;'>&nbsp;</label>
          </div>          
	  </div>
    <div class="shipon_settings_right">
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important; padding-bottom: 0px;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div>     
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div>  
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important; padding-bottom: 2px;'>
            &nbsp;
          </div>
          <div class='shipon_fieldblock' style='width: 528px; padding-top: 10px !important;'>
            &nbsp;
          </div> 



	</form>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="shipon_pages">&nbsp;</div>
<?php }} ?>
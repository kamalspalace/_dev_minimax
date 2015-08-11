{* DIV ID of panel *} 
{assign 'id' 'account_setting'}

{literal}
<script type="text/javascript">
  window.session_address = [];
  window.session_address['shipon_settings_dad_company']  = '{/literal}{$session->bill_company}{literal}';
  window.session_address['shipon_settings_dad_contact']  = '{/literal}{$session->bill_contact}{literal}';
  window.session_address['shipon_settings_dad_phone']    = '{/literal}{$session->bill_phone}{literal}';
  window.session_address['shipon_settings_dad_ext']      = '';
  window.session_address['shipon_settings_dad_email']    = '';
  window.session_address['shipon_settings_dad_street1']  = '{/literal}{$session->bill_address}{literal}';
  window.session_address['shipon_settings_dad_street2']  = '';
  window.session_address['shipon_settings_dad_city']     = '{/literal}{$session->bill_city}{literal}';
  window.session_address['shipon_settings_dad_prov']     = '{/literal}{$session->bill_province}{literal}';
  window.session_address['shipon_settings_dad_postal']   = '{/literal}{$session->bill_postal}{literal}';
  setup_autocomplete();
</script>
{/literal}

<div class='shipon_field' id='shipon_settings_content' style='width: 100%;'>
  <div class='shipon_field_container'>
    <div class='shipon_title'>
      <div class='shipon_titletext'>{$lang.preferences}</div>
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
      		  <input type='radio' id='shipon_settings_dab' name='shipon_settings_dad_beh' value='0' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio();' {if ! isset($preferences->shipon_settings_dad_beh) || $preferences->shipon_settings_dad_beh < 1}checked="checked"{/if} />
            <label for='shipon_settings_dab' style='margin-top: 2px;'>&nbsp;Use Billing Address</label>
          </div>
          <div class='shipon_fieldblock' style='width: 170px; padding-top: 5px !important;'>
      		  <input type='radio' id='shipon_settings_dac' name='shipon_settings_dad_beh' value='1' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio()' {if isset($preferences->shipon_settings_dad_beh) && $preferences->shipon_settings_dad_beh == 1}checked="checked"{/if} />
            <label for='shipon_settings_dac' style='margin-top: 3px; float: left;'>&nbsp;Use Address Below</label>
          </div>
          <div class='shipon_fieldblock' style='width: 24px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Company</label>
            <input type='text' id='shipon_settings_dad_company' name='shipon_settings_dad_company' class='shipon_input' style='float: left; width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_company)}value='{$session->bill_company}' disabled{else}value='{$preferences->shipon_settings_dad_company}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Contact</label>
            <input type='text' id='shipon_settings_dad_contact' name='shipon_settings_dad_contact' class='shipon_input' style='float: left; width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_contact)}value='{$session->bill_contact}' disabled{else}value='{$preferences->shipon_settings_dad_contact}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 260px; padding-right: 10px;'>
            <label style='height: 27px !important; width: 99px !important; float: left; text-align: left;'>Phone</label>
            <input type='text' id='shipon_settings_dad_phone' name='shipon_settings_dad_phone' onKeyDown="formatTelNo (this);" class='shipon_input' style="float: left;" {if ! isset($preferences->shipon_settings_dad_phone)}value='{$session->bill_phone}' disabled{else}value='{$preferences->shipon_settings_dad_phone}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 150px; margin-left: 2px;'>        
            <label style='height: 27px !important; width: 55px; float: left; text-align: left;'>Ext</label>
            <input type='text' id='shipon_settings_dad_ext' name='shipon_settings_dad_ext' class='shipon_input' maxlength='4' style="float: left;" {if ! isset($preferences->shipon_settings_dad_company)}disabled{else}value='{$preferences->shipon_settings_dad_company}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 39px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 99px; height: 27px; float: left; text-align: left;'>Email</label>
            <input type='text' id='shipon_settings_dad_email' name='shipon_settings_dad_email' class='shipon_input' style='float: left; width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_email)}{else}value='{$preferences->shipon_settings_dad_email}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Street 1</label>
            <input type='text' id='shipon_settings_dad_street1' name='shipon_settings_dad_street1' class='shipon_input' style='float: left; width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_street1)}value='{$session->bill_address}' disabled{else}value='{$preferences->shipon_settings_dad_street1}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>Street 2</label>
            <input type='text' id='shipon_settings_dad_street2' name='shipon_settings_dad_street2' class='shipon_input' style='float: left; width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_street2)}disabled{else}value='{$preferences->shipon_settings_dad_street2}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='height: 27px; width: 99px; float: left; text-align: left;'>City</label>
            <input type='text' id='shipon_settings_dad_city' name='shipon_settings_dad_city' class='shipon_input' style='float: left; width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_city)}value='{$session->bill_city}' disabled{else}value='{$preferences->shipon_settings_dad_city}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

	        <div class='shipon_fieldblock' style='width: 260px; padding-right: 10px;'>
        	   <label style='height: 27px; width: 96px; float: left; text-align: left;'>Province</label>
         	   <input type='text' id='shipon_settings_dad_prov' name='shipon_settings_dad_prov' class='shipon_input shipon_autocomplete' autocomplete_type='province' modifier='shipon_settings_dad_country' maxlength='2' {if ! isset($preferences->shipon_settings_dad_prov)}value='{$session->bill_province}' disabled{else}value='{$preferences->shipon_settings_dad_prov}'{/if}/>
          </div>
          
          <div class='shipon_fieldblock' style='width: 157px; margin-left: 2px;'>                          
      		   <label style='height: 27px; width: 50px; float: left; text-align: left;'>Postal</label>
             <input type='text' id='shipon_settings_dad_postal' name='shipon_settings_dad_postal' class='shipon_input' maxlength='6' style='float: left; width:86px !important;' {if ! isset($preferences->shipon_settings_dad_postal)}value='{$session->bill_postal}' disabled{else}value='{$preferences->shipon_settings_dad_postal}'{/if} />
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
{include 'common/box_footer.tpl'}
<div id="shipon_pages">&nbsp;</div>

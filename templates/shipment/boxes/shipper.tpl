{* DIV ID of panel *}
{assign 'id' 'shipper'}

{capture name='button' assign='button'}
	<a id="clear_shipper" class="shipon_button shipon_titlebutton" onclick="address_clear(this)">Clear</a>
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.shipper_address button=$button help_icon='' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_name" class="shipon_label">{$lang.address_name}</label>
            <input type="text" id="shipon_ship_name" name="shipon_ship_name" class="shipon_input shipon_autocomplete" autocomplete_type="address" tabindex='4' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_company}"{else}value="{$session->bill_company}"{/if} />
	</div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_contact" class="shipon_label">{$lang.address_contact}</label>
            <input type="text" id="shipon_ship_contact" name="shipon_ship_contact" class="shipon_input" tabindex='5' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_contact}"{else}value="{$session->bill_contact}"{/if} />
	</div>

        <div class="shipon_fieldblock" style="width: 70%;">
            <label for="shipon_ship_phone" class="shipon_label">{$lang.address_phone}</label>
            <input type="text" id="shipon_ship_phone" name="shipon_ship_phone" class="shipon_input" onKeyDown="formatTelNo (this);" tabindex='6' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_phone}"{else}value="{$session->bill_phone}"{/if}>
        </div>

        <div class="shipon_fieldblock" style="width: 30%;">
            <label for="shipon_ship_ext">{$lang.address_phone_ext}</label>
            <input type="text" id="shipon_ship_ext" name="shipon_ship_ext" class="shipon_input" tabindex='7' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_ext}"{/if}>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_email" class="shipon_label">{$lang.address_email}</label>
            <input type="text" id="shipon_ship_email" name="shipon_ship_email" class="shipon_input" tabindex='8' {if isset($preferences.shipon_settings_dad_email) && $preferences.shipon_settings_dad_email != ''}value="{$preferences.shipon_settings_dad_email}"{/if} />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shion_ship_street1" class="shipon_label">{$lang.address_street1}</label>
            <input type="text" id="shipon_ship_street1" name="shipon_ship_street1" class="shipon_input" tabindex='9' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_street1}"{else}value="{$session->bill_address}"{/if} />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_street2" class="shipon_label">{$lang.address_street2}</label>
            <input type="text" id="shipon_ship_street2" name="shipon_ship_street2" class="shipon_input" tabindex='10' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_street2}"{/if} />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_city" class="shipon_label">{$lang.address_city}</label>
            <input type="text" id="shipon_ship_city" name="shipon_ship_city" class="shipon_input" tabindex='11' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_city}"{else}value="{$session->bill_city}"{/if} />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_province" class="shipon_label">{$lang.address_province}</label>
            <input type="text" id="shipon_ship_province" name="shipon_ship_province" class="shipon_input shipon_autocomplete" autocomplete_type="province" modifier="shipon_ship_country" maxlength="2" tabindex='12' {if isset($preferences.shipon_settings_dad_beh) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_prov}"{else}value="{$session->bill_province}"{/if} />
	</div>

        <div class="shipon_fieldblock" style="width: 60%;">
            <label for="shipon_ship_country" class="shipon_label">{$lang.address_country}</label>
            	<select id="shipon_ship_country" name="shipon_ship_country" class="shipon_select" tabindex='12'>
						<option value="CA">Canada</option>
                        <option value="US">United States</option>
                </select>
        </div>

        <div class="shipon_fieldblock" style="width: 40%;">
            <label for="shipon_ship_postal" >{$lang.address_postal}</label>
            <input type="text" id="shipon_ship_postal" name="shipon_ship_postal" class="shipon_input" maxlength="6" tabindex='13' {if isset($preferences.shipon_settings_dad_postal) && $preferences.shipon_settings_dad_beh > 0}value="{$preferences.shipon_settings_dad_postal}"{else}value="{$session->bill_postal}"{/if} />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <div style="float: right;">
                <a id="shipon_shipper_save" class="address_save shiponShipSave" onclick="shipon_address_save(this)"> Save </a>&nbsp;&nbsp;
            </div>
        </div>

{include 'common/box_footer.tpl'}

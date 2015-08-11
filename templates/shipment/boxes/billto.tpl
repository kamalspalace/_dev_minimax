{* DIV ID of panel *}
{assign 'id' 'payer_address'}

{include 'common/box_header.tpl' id=$id title=$lang.payer_address button='' help_icon='1' width='100%'}

	<div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_name}</label>
            <input type="text" id="shipon_bill_name" name="shipon_bill_name" class="shipon_input shipon_autocomplete" value="{$session->bill_company}" readonly="readonly"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_contact}</label>
            <input type="text" id="shipon_bill_contact" name="shipon_bill_contact" class="shipon_input" value="{$session->bill_contact}" readonly="readonly"></input>	   
	</div>

        <div class="shipon_fieldblock" style="width: 70%;">
            <label class="shipon_label">{$lang.address_phone}</label>
            <input type="text" id="shipon_bill_phone" name="shipon_bill_phone" class="shipon_input" value="{$session->bill_phone}" readonly="readonly" onKeyDown="formatTelNo (this);"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 30%;">
            <label for="shipon_payer_ext">{$lang.address_phone_ext}</label>
            <input type="text" id="shipon_bill_ext" name="shipon_bill_ext" class="shipon_input" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_email}</label>
            <input type="text" id="shipon_bill_email" name="shipon_bill_email" class="shipon_input" value="{if $session->bill_email}{$session->bill_email}{/if}" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_street1}</label>
            <input type="text" id="shipon_bill_street1" name="shipon_bill_street1" class="shipon_input" value="{$session->bill_address}" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_street2}</label>
            <input type="text" id="shipon_bill_street2" name="shipon_bill_street2" class="shipon_input" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_city}</label>
            <input type="text" id="shipon_bill_city" name="shipon_bill_city" class="shipon_input" value="{$session->bill_city}" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_payer_province" class="shipon_label">{$lang.address_province}</label>
            <input type="text" id="shipon_bill_prov" name="shipon_bill_prov" class="shipon_input" value="{$session->bill_province}" readonly="readonly"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 60%;">
            <label for="shipon_payer_country" class="shipon_label">{$lang.address_country}</label>
		<input type="text" id="shipon_bill_country" name="shipon_bill_country" class="shipon_input" value="CA" readonly="readonly" />
        </div>

        <div class="shipon_fieldblock" style="width: 40%;">
            <label style="padding-top: 1px;">{$lang.address_postal}&nbsp;</label>
            <input type="text" id="shipon_bill_postal" name="shipon_bill_postal" class="shipon_input" maxlength="6" value="{$session->bill_postal|replace:' ':''}" readonly="readonly"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label style="padding-top: 2px;">{$lang.billing_account_no}&nbsp;</label>
            <input type="text" id="shipon_account_no" name="shipon_bill_account" class="shipon_input" value="{$session->bill_to_code}" readonly="readonly"/>
        </div>

{include 'common/box_footer.tpl'}

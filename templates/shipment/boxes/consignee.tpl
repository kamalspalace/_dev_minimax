{* DIV ID of panel *}
{assign 'id' 'consignee'}

{capture name='button' assign='button'}
	<a id="clear_consignee" class="shipon_button shipon_titlebutton" onclick="address_clear(this)">Clear</a>
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.consignee_address button=$button help_icon='' width='100%'}

	<div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_name}</label>
            <input type="text" id="shipon_cons_name" name="shipon_cons_name" class="shipon_input shipon_autocomplete" autocomplete_type="address" tabindex='14'></input>
	</div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_contact}</label>
            <input type="text" id="shipon_cons_contact" name="shipon_cons_contact" class="shipon_input" tabindex='15'></input>
	</div>

        <div class="shipon_fieldblock" style="width: 70%;">
            <label class="shipon_label">{$lang.address_phone}</label>
            <input type="text" id="shipon_cons_phone" name="shipon_cons_phone" class="shipon_input" onKeyDown="formatTelNo (this);" tabindex='16'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 30%;">
            <label for="shipon_cons_ext">{$lang.address_phone_ext}</label>
            <input type="text" id="shipon_cons_ext" name="shipon_cons_ext" class="shipon_input" tabindex='17'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_email}</label>
            <input type="text" id="shipon_cons_email" name="shipon_cons_email" class="shipon_input" tabindex='18'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_street1}</label>
            <input type="text" id="shipon_cons_street1" name="shipon_cons_street1" class="shipon_input" tabindex='19'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_street2}</label>
            <input type="text" id="shipon_cons_street2" name="shipon_cons_street2" class="shipon_input" tabindex='20'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label">{$lang.address_city}</label>
            <input type="text" id="shipon_cons_city" name="shipon_cons_city" class="shipon_input" tabindex='21'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_cons_province" class="shipon_label">{$lang.address_province}</label>
            <input type="text" id="shipon_cons_province" name="shipon_cons_province" class="shipon_input shipon_autocomplete" autocomplete_type="province" modifier="shipon_cons_country" maxlength="2" tabindex='22' />
	</div>

        <div class="shipon_fieldblock" style="width: 60%;">
            <label for="shipon_cons_country" class="shipon_label">{$lang.address_country}</label>
            	<select id="shipon_cons_country" name="shipon_cons_country" class="shipon_select" tabindex='23'>
		  {include 'common/countries_all.tpl'}
                </select>
        </div>

        <div class="shipon_fieldblock" style="width: 40%;">
            <label>{$lang.address_postal}</label>
            <input type="text" id="shipon_cons_postal" name="shipon_cons_postal" class="shipon_input" maxlength="6" tabindex='24' ></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
	    <div style="float: right;">
                <a id="shipon_consignee_save" class="address_save shiponConSave" onclick="shipon_address_save(this)"> Save </a>&nbsp;&nbsp;
	    </div>
        </div>

{include 'common/box_footer.tpl'}

{* DIV ID of panel *}
{assign 'id' 'charges'}

{include 'common/box_header.tpl' id=$id title=$lang.charge_method button='' help_icon='1' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_charges_prepaid" name="shipon_bill_method" value="PRP" checked="checked"/>
                <label for="shipon_charges_prepaid">{$lang.prepaid}</label>
                <input type="radio" id="shipon_charges_collect" name="shipon_bill_method" value="COL"/>
                <label for="shipon_charges_collect">{$lang.collect}</label>
                <input type="radio" id="shipon_charges_third" name="shipon_bill_method" value="3PL"/>
                <label for="shipon_charges_third">{$lang.thirdpty}</label>
            </div>
	</div>
{include 'common/box_footer.tpl'}

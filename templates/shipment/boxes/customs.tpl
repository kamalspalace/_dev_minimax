{* DIV ID of panel *}
{assign 'id' 'customs_broker'}

{include 'common/box_header.tpl' id=$id title=$lang.customs_broker button='' help_icon='1' width='100%'}

        <div class="shipon_fieldblock" style="width: 100%;">
	  <input type="text" id="shipon_cust_broker" name="shipon_cust_broker" class="shipon_input" value="Disabled for domestic shipments." disabled/>
	</div>

{include 'common/box_footer.tpl'}

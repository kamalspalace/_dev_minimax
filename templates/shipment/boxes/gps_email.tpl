{* DIV ID of panel *}
{assign 'id' 'gps_email'}

{include 'common/box_header.tpl' id=$id title=$lang.gps_email button='' help_icon='' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
		<input type="text" id="shipon_gps_email" name="shipon_gps_email" class="shipon_input"/>
	</div>
{include 'common/box_footer.tpl'}

{* DIV ID of panel *}
{assign 'id' 'pod_email'}

{include 'common/box_header.tpl' id=$id title=$lang.pod_email button='' help_icon='' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
<input type="text" id="shipon_pod_email" name="shipon_pod_email" class="shipon_input"/>
	</div>
{include 'common/box_footer.tpl'}

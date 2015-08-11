{* DIV ID of panel *}
{assign 'id' 'choose_service'}

{capture name='button' assign='button'}
	<div id="shipon_map_container"></div>
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.choose_service button=$button help_icon='' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
		<div id="shipon_services" class="shipon_radio"></div>
	</div>
{include 'common/box_footer.tpl'}

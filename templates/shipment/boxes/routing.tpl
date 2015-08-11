{* DIV ID of panel *}
{assign 'id' 'routing'}

{include 'common/box_header.tpl' id=$id title=$lang.routing button='' help_icon='1' width='100%'}

        <div class="shipon_fieldblock" style="width: 100%;">
	  <input type="text" id="shipon_routing" name="shipon_routing" class="shipon_input"/>
	</div>

{include 'common/box_footer.tpl'}

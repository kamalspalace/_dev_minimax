{* DIV ID of panel *}
{assign 'id' 'cod'}

{include 'common/box_header.tpl' id=$id title=$lang.codamt button='' help_icon='1' width='100%'}

        <div class="shipon_fieldblock" style="width: 100%;">
	  <input type="text" id="shipon_codamt" name="shipon_codamt" class="shipon_input" value="To enable, click collect as the billing method." disabled/>
	</div>

{include 'common/box_footer.tpl'}

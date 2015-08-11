{* DIV ID of panel *}
{assign 'id' 'declared_value'}

{include 'common/box_header.tpl' id=$id title=$lang.declared_value button='' help_icon='' width='100%'}

        <div class="shipon_fieldblock" style="width: 100%;">
	  <label>$</label>
          <input type="text" id="shipon_declared_value" name="shipon_dec_value" class="shipon_input"/>
	</div>

{include 'common/box_footer.tpl'}

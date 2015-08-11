{* DIV ID of panel *}
{assign 'id' 'reference_no'}

{include 'common/box_header.tpl' id=$id title='REFERENCE #' button='' help_icon='1' width='100%'}
        {* start settings field blocks *}
	<div class='shipon_fieldblock' style='width: 45%;'>
		<label>BOL&nbsp;</label>
		<input type='text' id='shipon_reference' name='shipon_reference' class='shipon_input' tabindex='1'/>
	</div>
	<div class='shipon_fieldblock' style='width: 1%;'>
	    <span class='filler'></span>
	</div>
	<div class='shipon_fieldblock' style='width: 54%;'>
		<label>PO/Ref&nbsp;</label>
		<input type='text' id='shipon_reference_po' name='shipon_reference_po' class='shipon_input' tabindex='1'/>
	</div>	

{include 'common/box_footer.tpl'}

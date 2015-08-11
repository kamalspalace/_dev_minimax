{* DIV ID of panel *}
{assign 'id' 'quote'}

{include 'common/box_header.tpl' id=$id title='RETRIEVE A QUOTE' button='' help_icon='1' width='100%'}
	<div class='shipon_fieldblock searchBtnEmptyClass' style='width: 100%;'>
		<label>Quote #</label>
		<input type='text' id='shipon_quote_no' name='shipon_quote_no' class='shipon_input' style='width: auto; ' tabindex='100' />
		<span onclick="fetchQuote();" id="quote_search"></span>
	</div>        
{include 'common/box_footer.tpl'}

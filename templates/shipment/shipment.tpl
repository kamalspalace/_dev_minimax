
<form name='shipon_BOL' id='shipon_BOL' class='shipon_form' method='post'>
<div id='shipon_accordion'>
	{include 'shipment/section1.tpl'}
	{include 'shipment/section2.tpl'}
	{include 'shipment/section3.tpl'}
</div>
<div id='shipon_bol_footer'>
	<a class='shipon_button' id='shipon_back' onclick='shipon_back()'>Back</a>
	<span id='shipon_output'></span>
	<a class='shipon_button' id='shipon_continue' onclick='validate_form(shipon_continue)'>Continue</a>
</div>
</form>

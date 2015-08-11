<div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container' style='background-color: #CCC; background-image: none;'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>Order Review</div>

			<div class="shipon_titlebuttons">
				
				<div id="shipon_viewpdf_status">
					{if $shipment.sent < 1}
					<span class='shipon_title_warning'><strong>WARNING:</strong> this order is still pending and is not yet submitted.&nbsp;</span>
					<span class='shipon_icomoon_warning'>&#xe032;</span>
					{else}
					<span class='shipon_title_warning'>This order is finalized and has been submitted.&nbsp;</span>
					<span class='shipon_icomoon_success'>&#xe01c;</span>
					{/if}
				</div>
			</div>
		</div>
        <div id='shipon_tracking_view_header' style='margin-bottom: 20px;'>
       		<span id='tracking_view_h2'>ORDER #{$shipment.ext_id}</span>
       		{if $shipment.sent < 1}
       		<a onclick="shipon_send({$shipment.id});" id="shipon_submit_order"><span class="icomoon">&#xe01c;</span>Submit Order</a>
       		<img src="shiponline/theme/icon_loader2.gif" id="shipon_submit_loader" style="float: right; margin: 10px 8px 0px 0px; display: none;">
       		{/if}
		</div>

		<object data='shiponline/curl.php?action=generate_pdf&id={$shipment.id}' type='application/pdf' width='960' height='1100'></object>

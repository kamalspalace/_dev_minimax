<div style="width: 100%" id="shipon_history_content" class="shipon_field"> 
	<div class="shipon_field_container">
		<div class="shipon_title">
			<div class="shipon_titletext">{$lang.history}</div>
			<div class="shipon_titlebuttons">
				<form name="frm-filters">
				<div id='date-range'>
					<div id='date-range-field'><span></span><a href='#'>&#9660;</a></div>
					<div id='datepicker-calendar'></div>
				</div>
				<input type="text" value="Search" id="shipon_history_search" name="search_string" class="shipon_input shipon_input_search" placeholder="Search" />
				<input type='hidden'  name='start_date' value='{$request.start_date}' />
				<input type='hidden'  name='end_date' value='{$request.end_date}' />
				<input type="hidden" name="shipon_history_sort_by" name='sort_by'  id="shipon_history_sort_by" value="{$request.sort_column}">
				<input type="hidden" name="shipon_history_sort_order" name='sort_order'  id="shipon_history_sort_order" value="{$request.sort_order}">			
				</form>
			</div>
		</div>
		<div class="shipon_field_content">
			<table id="shipon_history">
				<thead>
					<tr>
						<th width="10%" onclick="sort_by(this)" class="shipon_sort_DESC">{$lang.shipment_id}</th>
						<th width="16%" onclick="sort_by(this)">{$lang.date}</th>
						<th width="45%" onclick="sort_by(this)">{$lang.consignee}</th>
						<th width="6%" onclick="sort_by(this)">{$lang.status}</th>
						<th width="24%">{$lang.action}</th>
					</tr>
				</thead>
				<tbody>
					{if $shipment|@count gt 0}
						{foreach from=$shipment key=i item=ship name=count}
					<tr>
						<td><!--a href="#tracking#view_details-{$ship.ext_id}" class="shipon_button shipon_history_button shipon_btorder"--><a href="javascript:get_tracking_details{$ship.ext_id}" style="cursor: pointer; width: 65px; margin-top: 0px; font-weight: bold;" >{$ship.ext_id}</a></td>
						<td style="color: #000; padding-left: 15px;">{$ship.timestamp}</td>
						<td style="font-weight: bold; text-transform: uppercase;">{$ship.cons_name}</td>
						<td style="text-align: center;"><span class="{if $ship.sent == 1}history_status_SUB{else}history_status_PND{/if}">{if $ship.sent == 1}Sent{else}Incomplete{/if}</span></td>
						<td style="padding-left: 13px;">
							<a href="#shipment#copy-{$ship.id}" class="shipon_history_button">&nbsp;<span style="font-size: 12px;">&#xe022;</span>&nbsp;Copy </a>
							<a {if $ship.sent == 1}nohref{else}href="#shipment#edit-{$ship.id}"{/if} class="shipon_history_button {if $ship.sent == 1}shipon_history_button_disable_hover{/if}" style="padding-bottom: 5px;">&nbsp;<span style="font-family: 'ModernPictogramsNormal';">V</span>&nbsp;Edit </a>
							<a href="#history#view_pdf-{$ship.id}" class="shipon_history_button" style="margin-right: none;">&nbsp;<span style="font-size: 12px;">&#xe000;</span>&nbsp;View </a>
						</td>
					</tr>
						{/foreach}
					{/if}

					{if $shipment|@count lt 10}
					{for $i=$shipment|@count to 9}
                        <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        </tr>
					{/for}
					{/if}
				</tbody>
			</table>
		</div> <!-- end of shipon_field_content -->
		{$pagination}
	</div><!-- end of class  shipon_field_container -->
</div><!-- end of shipon file content -->

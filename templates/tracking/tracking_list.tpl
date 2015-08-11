<div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>{$lang.tracking}</div>

			<div class='shipon_titlebuttons'>
				<form name="frm-filters">
					<div id='date-range'>
						<div id='date-range-field'><span></span><a href='#'>&#9660;</a></div>
						<div id='datepicker-calendar'></div>
					</div>
					<input type='text' id='shipon_tracking_search' class="shipon_input_search" name='search_string' placeholder="Search" value='{if $request.search_string}{$request.search_string}{else}Search{/if}' style='width: 223px;' />
					<input type='hidden' id='shipon_tracking_date_from' name='start_date' value='{$request.start_date}' />
					<input type='hidden' id='shipon_tracking_date_to' name='end_date' value='{$request.end_date}' />
					<input type='hidden' id='shipon_tracking_sort_by' name='sort_by' value='{$request.sort_column}'>
					<input type='hidden' id='shipon_tracking_sort_order' name='sort_order' value='{$request.sort_order}' />
				</form>
			</div>
		</div>

		<table id='shipon_tracking'>
			<thead>
				<tr>
					<th id='shipon_tracking_date' onclick='sort_by("ProDate");'>{$lang.date}</th>
                    <th id='shipon_tracking_probill_no' onclick='sort_by("Pbnum");'>{$lang.probill_no}</th>
                    <th id='shipon_tracking_shbol' onclick='sort_by("Sh-BOL");'>&nbsp;BL #&nbsp;</th>
					<th id='shipon_tracking_status' onclick='sort_by("Rec-Status");'>{$lang.status}</th>
					<th id='shipon_tracking_ship_name' onclick='sort_by("ShipName");'>{$lang.ship_name}</th>
					<th id='shipon_tracking_ship_city' onclick='sort_by("City");'>{$lang.ship_city}</th>
					<th id='shipon_tracking_ship_prov' onclick='sort_by("Prv");'>&nbsp;Prov&nbsp;</th>
					<th id='shipon_tracking_cons_name' onclick='sort_by("ConsigName");'>{$lang.cons_name}</th>
					<th id='shipon_tracking_cons_addr' onclick='sort_by("ConAdd-1");'>{$lang.cons_addr}</th>
					<th id='shipon_tracking_cons_city' onclick='sort_by("ConCity");'>{$lang.cons_city}</th>
					<th id='shipon_tracking_cons_prov' onclick='sort_by("ConPrv");'>&nbsp;Prov&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{if isset($data.orders[0])}
					{foreach from=$data.orders key=i item=order}
						<tr onclick='get_tracking_details({$order.Pbnum});'>
							<td>&nbsp;{$order.ProDate}</td>
							<td><a href="javascript:get_tracking_details({$order.Pbnum});">{$order.Pbnum}</a></td>
                                                        <td>{$order.ShBOL|replace:",":" "}</td>
							<td>{$order.RecStatus}</td>
							<td>{$order.ShipName}</td>
							<td>{$order.City}</td>
							<td>{$order.Prv}</td>
							<td>{$order.ConsigName}</td>
							<td>{$order.ConAdd1}</td>
							<td>{$order.ConCity}</td>
							<td>{$order.ConPrv}{if isset($order.Code)}<input type="hidden" id="code-{$order.Pbnum}" name="code-{$order.Pbnum}" value="{$order.Code}" />{/if}</td>
						</tr>
					{/foreach}
					{if $data.orders|@count lt 10}
						{for $i=$data.orders|@count to 9}
						<tr>
							<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
							<td></td>
                                                        <td></td>
						</tr>
						{/for}
					{/if}
				{else}
					{for $i=1 to 10}
                                                <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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
		{$pagination}
	</div>
</div>

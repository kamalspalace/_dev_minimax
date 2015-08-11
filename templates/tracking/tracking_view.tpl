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
					<input type='text' id='shipon_tracking_search' class="shipon_input_search" placeholder="Search" name='search_string' value='{if isset($request.search_string) && $request.search_string != ''}{$request.search_string}{else}Search{/if}' style='width: 223px;' />
					<input type='hidden' id='shipon_tracking_date_from' name='start_date' value='{$request.start_date}' />
					<input type='hidden' id='shipon_tracking_date_to' name='end_date' value='{$request.end_date}' />
					<input type='hidden' id='shipon_tracking_sort_by' name='sort_by' value='{$request.sort_column}'>
					<input type='hidden' id='shipon_tracking_sort_order' name='sort_order' value='{$request.sort_order}' />
				</form>
			</div>
		</div>
                <div id='shipon_tracking_view_header'>
                	<span id='tracking_view_h2'>PROBILL #{$data.Pbnum}</span>
			
			<div id='shipon_tracking_attachments' style='float: right; margin-right: 135px; margin-top: 10px;'><b>Attachments:</b>&nbsp;&nbsp;
                        {if isset($data.bl)}
                                {foreach from=$data.bl key=i item=bl}
                                        {if $bl != ""}<a href="{$bl}">BL</a>&nbsp;&nbsp;{/if}
                                {/foreach}
                        {/if}


                        {if isset($data.pod)}
				{foreach from=$data.pod key=i item=pod}
                                	{if $pod != ""}<a href="{$pod}">POD</a>&nbsp;&nbsp;{/if}
				{/foreach}
                        {/if}


                        {if isset($data.doc)}
                                {foreach from=$data.doc key=i item=doc}
                                        {if $doc != ""}<a href="{$doc}">DOC</a>&nbsp;&nbsp;{/if}
                                {/foreach}
                        {/if}
			</div>

                </div>

		<div id='shipon_tracking_view_radetail'>
			<span class='shipon_tracking_details_info'>DETAILS</span>
			<table id='shipon_tracking_details_info'>				
				<tbody>
					<tr>
						<td class='label'>Date</td>
						<td class='value'>{$data.ProDate}</td>
						<td class='space'>&nbsp;</td>
						<td class='label'>Status</td>
						<td class='value'>{$data.RecStatus}</td>
					</tr>
                                        {if ($data.PupDate|@count gt 0 && $data.PupDate != '') || ($data.DelDate|@count gt 0 && $data.DelTime != '')}
                                        <tr>
                                                <td class='label'>Pickup Date</td>
                                                <td class='value'>{if $data.PupDate|@count gt 0}{$data.PupDate}{*{if $data.PupTime > 0} - {$data.PupTime}{/if}*}{else} - {/if}</td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>Delivery Date</td>
                                                <td class='value'>{if $data.DelDate|@count gt 0}{$data.DelDate}{*{if $data.DelTime > 0} - {$data.DelTime}{/if}*}{else} - {/if}</td>
                                        </tr>
                                        {/if}
                                        {if isset($data.AppointNo[0])}
                                        <tr>
                                             <td class='label'>Delivery Appt. #</td>
                                             <td class='value'>{$data.AppointNo}</td>
                                             <td class='space'>&nbsp;</td>
                                             <td class='label'>Delivery Appt. Date</td>
                                             <td class='value'>{$data.DapDate} - {if $data.Daptime|strlen == 1 || $data.Daptime|strlen == 2}{$data.Daptime}:00{else}{$data.Daptime|replace:'.':':'}{/if}</td>
                                        </tr>
                                        {/if}		
                                        <tr>
                                                <td class='label'>BL #</td>
                                                <td class='value'>{if isset($data.ShBOL[0])}{$data.ShBOL}{else}-{/if}</td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>PO / Ref #</td>
                                                <td class='value'>{if $data.RefNumb|@count gt 0}{$data.RefNumb}{else}-{/if}</td>
                                        </tr>
                                        <tr>
                                                <td class='label'>Weight</td>
                                                <td class='value'>{$data.Weight}</td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>Skids-Pcs</td>
                                                <td class='value'>
								{if $data.Skid > 0 && $data.Pieces > 0}
								{$data.Skid}-{$data.Pieces}
								{elseif $data.Skid > 0 && $data.Pieces < 1}
								{$data.Skid}
								{elseif $data.Pieces > 0 && $data.Skid < 1} 
								{$data.Pieces}
								{/if}
						</td>
                                        </tr>
				</tbody>
			</table>

			<span class='shipon_tracking_details_hstatus' style='margin-top: 15px;'>STATUS</span>
                        <table id='shipon_tracking_details_hstable'>
                                <thead>
                                        <tr>
                                                <th width='20%'>Timestamp</th>
                                                <th width='16%' style='text-align: left;'>Status</th>
						<th width='32%' style='text-align: left;'>Location</th>
                                                <th width='32%' style='text-align: left;'>Details</th>
                                        </tr>
                                </thead>
					{if isset($data.StatusLog.Status[0])}
					<tbody style='border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;'>
                                                {foreach from=$data.StatusLog.Status key=i item=status}
						<tr>
							<td width='20%' {if $data.RecStatus == $status.RecStatus}style='border-bottom-left-radius: 3px;'{/if}>{$status.Dt}{if $status.Tm != ''} - {$status.Tm|replace:'.':':'}{/if}</td>
							<td width='16%' style='text-align: left; height: 36px;'>{$status.RecStatus|replace:'DPU':'Dispatched'|replace:'LDD':'Loaded'|replace:'DEL':'Delivered'|replace:'OFD':'Out for Delivery'|replace:'DOC':'Docked'}</td>
							<td width='32%' style='text-align: left; height: 36px;'>{if isset($status.Location[0])}{assign var=loc value=":"|explode:$status.Location}{$loc.0|replace:',':', '|upper}{/if}<br />{if isset($loc.1)}{$loc.1}{/if}</td>
							<td width='32%' style='text-align: left; height: 36px; {if $data.RecStatus == $status.RecStatus}border-bottom-right-radius: 3px;{/if}'>{if isset($status.Remarks[0])}{$status.Remarks|replace:':':'<br />'|replace:',,':', '}{/if}</td>
						</tr>
						{/foreach}
					</tbody>
					{else}
					<tfoot>
                                        <tr>
                                                <td width='25%'> </td>
                                                <td width='15%' style='text-align: left;'></td>
                                                <td width='60%' colspan='3' style='text-align: left;'>NO STATUS UPDATES ON FILE</td>
                                        </tr>
					</tfoot>
					{/if}	
				</tbody>
                        </table>

			{if isset($data.Inflag) && ($data.Inflag == 'I' || $data.Inflag == 'P')}
			
                        <span class='shipon_tracking_details_rates' style='margin-top: 20px;'>RATES</span>
			<table id='shipon_tracking_details_ratable' style='margin-bottom: 20px;'>
				<thead>
				    <tr>
					<th width='45%'>Description</th>
					<th width='10%'>Quantity</th>
					<th width='10%'>Weight</th>
					<th width='12%'>Rate</th>
					<th width='10%'>Per</th>
					<th width='13%'>Total</th>
				    </tr>
				</thead>
					{if isset($data.RateDetails.Rates.Rate[0])}
                                                <tbody>
                                       	        {foreach from=$data.RateDetails.Rates.Rate key=i item=rate}
                                               	 <tr>
                                                        <td width='45%'>{$rate.Descr1}</td>
                                                        <td width='10%'>{$rate.Quant}</td>
                                                        <td width='10%'>{$rate.Weight}</td>
                                                        <td width='12%'>{$rate.Rate}</td>
                                                        <td width='10%'>{if $rate.Uom|@count gt 0}{$rate.Uom}{else}-{/if}</td>
                                                        <td width='13%'>{$rate.Tot}</td>
                                                </tr>
                                                {/foreach}
                                                </tbody>


						{elseif isset($data.RateDetails.Rates.Rate)}
						<tbody>
						<tr>
					 	 	<td width='45%'>{$data.RateDetails.Rates.Rate.Descr1}</td>
					  		<td width='10%'>{$data.RateDetails.Rates.Rate.Quant}</td>
					  		<td width='10%'>{$data.RateDetails.Rates.Rate.Weight}</td>
					  		<td width='12%'>{$data.RateDetails.Rates.Rate.Rate}</td>
					  		<td width='10%'>{if $data.RateDetails.Rates.Rate.Uom|@count gt 0}{$data.RateDetails.Rates.Rate.Uom}{else}-{/if}</td>
					  		<td width='13%'>{$data.RateDetails.Rates.Rate.Tot}</td>
						</tr>
						</tbody>
						{/if}
				{if isset($data.RateDetails.Subtotal) && isset($data.RateDetails.Gstamt)}
				<tfoot>
					{if isset($data.RateDetails.Surcharge)}
					<tr><td colspan='5' width='87%'>Fuel SC</td><td>{$data.RateDetails.Surcharge}</td></tr>{/if}

					<tr><td colspan='5' width='87%'>Subtotal</td><td>{if isset($data.RateDetails.Subtotal)}{$data.RateDetails.Subtotal}{else}0.00{/if}</td></tr>
					<tr><td colspan='5' width='87%'>GST/HST</td><td>{if isset($data.RateDetails.Gstamt)}{$data.RateDetails.Gstamt}{else}0.00{/if}</td></tr>
					<tr><td colspan='5' width='87%'><span style='font-size: 16px;'>Total</span></td><td><span style='color: #003594; font-size: 16px; font-weight: bold;'>{if isset($data.RateDetails.Tot)}{$data.RateDetails.Tot}{else}0.00{/if}</span></td></tr>
				</tfoot>
				{/if}
			</table>
			{/if}
			<div style="float: left; clear: both;">
			<br />&nbsp;<br />
			</div>
		</div>
                <div id='shipon_tracking_view_leftpan'>
                    <div id='shipon_tracking_view_sidetail'>
                            <span class='shipon_tracking_details_hglyph'>&#xe001;</span><span class='shipon_tracking_details_head'>SHIPPER</span>
                            <span class='shipon_tracking_details_text' style='font-weight: bold;'>{$data.ShipName|upper|substr:0:27}</span>
                            <span class='shipon_tracking_details_text'>{if $data.Add1}{$data.Add1|upper}{else}&nbsp;{/if}</span>
                            {if $data.Add2|@count gt 0}
                            <span class='shipon_tracking_details_text'>{$data.Add2|upper}</span>
                            {/if}
                            <span class='shipon_tracking_details_text'>{if $data.City}{$data.City|upper}{else}&nbsp;&nbsp;{/if}, {if $data.Prv}{$data.Prv|upper}{else}&nbsp;&nbsp;{/if}</span>
                            <span class='shipon_tracking_details_text'>{if $data.Postal}{$data.Postal|upper}{else}&nbsp;{/if}</span>
                            <span class='shipon_tracking_details_line'>&nbsp;</span>
                            <span class='shipon_tracking_details_hglyph'>&#xe01b;</span><span class='shipon_tracking_details_head'>CONSIGNEE</span>
                            <span class='shipon_tracking_details_text' style='font-weight: bold;'>{$data.ConsigName|substr:0:27|upper}</span>
                            <span class='shipon_tracking_details_text'>{if $data.ConAdd1}{$data.ConAdd1|upper}{else}&nbsp;{/if}</span>
                            {if $data.ConAdd2|@count gt 0}
                            <span class='shipon_tracking_details_text'>{$data.ConAdd2|upper}</span>
                            {/if}
                            <span class='shipon_tracking_details_text'>{if $data.ConCity}{$data.ConCity|upper}{else}&nbsp;&nbsp;{/if}, {if $data.ConPrv}{$data.ConPrv|upper}{else}&nbsp;&nbsp;{/if}</span>
                            <span class='shipon_tracking_details_text'>{if $data.ConPostal}{$data.ConPostal|upper}{else}&nbsp;{/if}</span>
							<span class='shipon_tracking_details_line' style='margin-top: -2px;'>&nbsp;</span>
                            <span class='shipon_tracking_details_hglyph'>&#xe030;</span><span class='shipon_tracking_details_head' style='margin-bottom: 6px;'>BILL TO</span>
							<span class='shipon_tracking_details_text' style='font-weight: bold;'>{$session->bill_company|substr:0:27}</span>
							<span class='shipon_tracking_details_text'>{if $session->bill_address}{$session->bill_address}{else}&nbsp;{/if}</span>
							<span class='shipon_tracking_details_text'>{if $session->bill_city}{$session->bill_city}{/if}, {if $session->bill_province}{$session->bill_province}{else}&nbsp;&nbsp;{/if}</span>
							<span class='shipon_tracking_details_text'>{if $session->bill_postal}{$session->bill_postal}{else}&nbsp;{/if}</span>
							<span class='shipon_tracking_details_line'>&nbsp;</span>
                    </div>
                </div>
{*
		<div id='shipon_tracking_view_auxdetail'>
			<div id='shipon_tracking_aux_docinfo'>
				<span class='shipon_tracking_aux_head'>DOCUMENTS (3)</span>
				<span class='shipon_tracking_aux_left'>POD - 01/23/2013</span>
				<span class='shipon_tracking_aux_value'>Click Here</span>
				<span class='shipon_tracking_aux_left'>BL - 01/20/2013</span>
				<span class='shipon_tracking_aux_value'>Click Here</span>	
			</div>

		</div>
*}
	</div>
</div>

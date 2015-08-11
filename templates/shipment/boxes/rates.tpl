{* DIV ID of panel *}
{assign 'id' 'rates'}

{capture name='button' assign='button'}
	<a id="shipon_get_rates" class="shipon_button shipon_titlebutton" onclick="shipon_get_rates(true)">Get Rates</a>
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.rates button=$button help_icon='' width='100%'}
        <div class='shipon_fieldblock' style='width: 100%;'>
                        <div id="shipon_rates_table_container">
                                <table id="shipon_rates_table" style="width: 100%;">
                                        <tr>
                                                <th>Code</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Weight</th>
                                                <th>Rate</th>
                                                <th>Per</th>
                                                <th>Total</th>
                                        </tr>
					{* multi-line rate format *}
					{if isset($data.RateDetails.Rates.Rate[0])}
						{foreach from=$data.RateDetails.Rates.Rate key=i item=rate}
							<tr>
							  <td>{if $rate.Code|@count gt 0}{$rate.Code}{/if}</td>
							  <td>{if $rate.Descr1|@count gt 0}{$rate.Descr1}{/if}</td>
							  <td>{if $rate.Quant|@count gt 0}{$rate.Quant}{else}-{/if}</td>
							  <td>{if $rate.Weight|@count gt 0}{$rate.Weight}{else}-{/if}</td>
							  <td>{if $rate.Rate|@count gt 0}{$rate.Rate}{else}-{/if}</td>
							  <td>{if $rate.Uom|@count gt 0}{$rate.Uom}{else}-{/if}</td>
							  <td>{if $rate.Tot|@count gt 0}{$rate.Tot}{else}-{/if}</td>
							</tr>
						{/foreach}
					{* single-line rate format *}
					{elseif isset($data.RateDetails.Rates.Rate)}
					                 <tr>
                                                          <td>{if $data.RateDetails.Rates.Rate.Code|@count gt 0}{$data.RateDetails.Rates.Rate.Code}{/if}</td>
                                                          <td>{if $data.RateDetails.Rates.Rate.Descr1|@count gt 0}{$data.RateDetails.Rates.Rate.Descr1}{/if}</td>
                                                          <td>{if $data.RateDetails.Rates.Rate.Quant|@count gt 0}{$data.RateDetails.Rates.Rate.Quant}{else}-{/if}</td>
                                                          <td>{if $data.RateDetails.Rates.Rate.Weight|@count gt 0}{$data.RateDetails.Rates.Rate.Weight}{else}-{/if}</td>
                                                          <td>{if $data.RateDetails.Rates.Rate.Rate|@count gt 0}{$data.RateDetails.Rates.Rate.Rate}{else}-{/if}</td>
                                                          <td>{if $data.RateDetails.Rates.Rate.Uom|@count gt 0}{$data.RateDetails.Rates.Rate.Uom}{else}-{/if}</td>
                                                          <td>{if $data.RateDetails.Rates.Rate.Tot|@count gt 0}{$data.RateDetails.Rates.Rate.Tot}{else}-{/if}</td>
                                                        </tr>	
                                        		<tr><td/><td/><td/><td/><td/><td/><td/></tr>
                                        		<tr><td/><td/><td/><td/><td/><td/><td/></tr>
                                        		<tr><td/><td/><td/><td/><td/><td/><td/></tr>
					{* filler *}
					{else}
                                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
                                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
                                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
                                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
					{/if}
                                </table>
                        </div>
        </div>
	<div style="width:100%">							
		<div class='shipon_fieldblock' style='width: 55%;'>
			<span id="shipon_disclaimer">Rate is based on the information provided and may be subject to change based on actual weight, dimensions,<br /> vehicle type required or any other pertinent information<br />that has not been provided accurately.</span><br />
		</div>
		<div style='width:45%; margin-top:5px;float:right;'>							
			<div class='shipon_fieldblock' style='width: 100%;'>
				<label class="shipon_rates_label">{$lang.fuelsc}:&nbsp;</label>
				<input type='text' id='shipon_rate_fsc' name='shipon_rate_fsc' style="color: #eee; margin-left: 4px; width: 231px;" value="{if isset($data.RateDetails.Surcharge)}{$data.RateDetails.Surcharge}{else}0.00{/if}" readonly='readonly' />
			</div>
			<div class='shipon_fieldblock' style='width: 100%;'>
				<label class="shipon_rates_label">{$lang.subtotal}:&nbsp;</label>
				<input type='text' id='shipon_rate_charge' name='shipon_rate_charge' style="color: #eee; margin-left: 4px; width: 231px;" value="{if isset($data.RateDetails.Subtotal)}{$data.RateDetails.Subtotal}{else}0.00{/if}" readonly='readonly' />
			</div>
			<div class='shipon_fieldblock' style='width: 100%;'>
				<label class="shipon_rates_label">{$lang.tax}:&nbsp;</label>
				<input type='text' id='shipon_tax_charge' name='shipon_tax_charge' style="color: #eee; margin-left: 4px; width: 231px;" value="{if isset($data.RateDetails.Gstamt)}{$data.RateDetails.Gstamt}{else}0.00{/if}" readonly='readonly' />
			</div>
			<div class='shipon_fieldblock' style='width: 100%;'>
				<label class="shipon_rates_label">{$lang.total}:&nbsp;</label>
				<input type='text' id='shipon_total_charge' name='shipon_total_charge' style="color: #eee; margin-left: 4px; width: 231px;" value="{if isset($data.RateDetails.Tot)}{$data.RateDetails.Tot}{else}0.00{/if}" readonly='readonly' />
				<input type='hidden' id='shipon_id' name='shipon_id' />
				<input type='hidden' id='shipon_ext_id' name='shipon_ext_id' value='' />
				<input type='hidden' id='shipon_service' name='shipon_service' value='A' />
				<input type='hidden' id='shipon_qte_only' name='shipon_qte_only' value='1' />
			</div>
		</div>		
	</div>		
{include 'common/box_footer.tpl'}
{if isset($data.RateDetails.Tot)}
<script>
	if ({$data.RateDetails.Tot} == 0){	
		rateEmailPopup();
	}
</script>
{/if}

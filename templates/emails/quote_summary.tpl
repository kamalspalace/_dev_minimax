{include 'emails/email_header.tpl' subject=$subject}
<table cellspacing="5" cellpadding="3" border="0" style="width: 625px;">
<tr>
   <td style="text-align: center; font-weight: bold; color: red;">
	  {if $data.attn}
	     {$data.attn}
       {else}		  
		   ** THIS IS NOT A SHIPMENT CONFIRMATION **<br />** A SALES REPRESENTATIVE WILL CONTACT YOU WITH A PRICE **
	   {/if}
   </td>
</tr>
</table>
<div class="spacer" style="font-size: 4px; height: 4px;">
  &nbsp;
</div>
{include 'emails/email_title.tpl' subject=$subject}
<div class="spacer" style="font-size: 4px; height: 4px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="3" border="0" style="width: 625px; border: 1px solid #666;">
  <tr>
    <td style="border: none; font-size: 12px; width: 33%; text-align: center; padding-bottom: 4px;">
      <b>Reference #</b> {$data.reference}
    </td>
    <td style="border: none; font-size: 12px; width: 33%; text-align: center; padding-bottom: 4px;">
      <b>Quote #</b> {$data.ext_id}
    </td>
    <td style="border: none; font-size: 12px; width: 33%; text-align: center; padding-bottom: 4px;">
      <b>Ordered by </b> {$data.ship_contact}
    </td>
  </tr>
</table>
<div class="spacer" style="font-size: 2px; height: 2px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="0" border="0" style="width: 625px;">
  <tr>
    <td style="border: none; width: 33%; padding: 12px 0px 0px 5px;">
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; font-size: 12px;"><b>Shipper</b></td>
          <td style="padding-left: 15px; font-size: 12px;">
          {if $data.ship_name}{$data.ship_name|upper}<br />{/if}
          {if $data.ship_contact}{$data.ship_contact|upper}<br />{/if}
          {$data.ship_street1|upper}<br />
          {if $data.ship_street2}{$data.ship_street2|upper}<br />{/if}
          {$data.ship_city|upper}, {$data.ship_province|upper}<br />
          {$data.ship_postal|upper}
          </td>
       </tr>
     </table>
   </td>
   <td style="width: 33%; padding: 12px 0px 0px 0px;">
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; font-size: 12px;"><b>Consignee</b></td>
          <td style="padding-left: 15px; font-size: 12px;">
          {if $data.cons_name}{$data.cons_name|upper}<br />{/if}
          {if $data.cons_contact}{$data.cons_contact|upper}<br />{/if}
          {$data.cons_street1|upper}<br />
          {if $data.cons_street2}{$data.cons_street2|upper}<br />{/if}
          {$data.cons_city|upper}, {$data.cons_province|upper}<br />
          {$data.cons_postal|upper}
          </td>
        </tr>
      </table>
    </td>
    <td style="width: 33%; padding: 12px 0px 0px 5px;">
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; font-size: 12px;"><b>Bill-to</b></td>
          <td style="padding-left: 15px; font-size: 12px;">
          {if $data.bill_name}{$data.bill_name|upper}<br />{/if}
          {if $data.bill_contact}{$data.bill_contact|upper}<br />{/if}
          {$data.bill_street1|upper}<br />
          {if $data.bill_street2}{$data.bill_street2|upper}<br />{/if}
          {$data.bill_city|upper}, {$data.bill_prov|upper}<br />
          {$data.bill_postal|upper}
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table> 
<div class="spacer" style="font-size: 2px; height: 2px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="0" border="0" style="width: 625px; margin-top: 0px; padding-top: 5px;">
  <tr>
     <td colspan="4"><hr /></td>
  </tr>
  <tr>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b>Cargo/SCN</b><br />
          {if $data.cargo_scn}{$data.cargo_scn}{else}&nbsp;{/if}
     </td>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b>Ready time</b><br />
          {$data.pup_date} - {$data.pup_time}
     </td>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b># Skids - Pcs</b><br />
          {$data.skids}-{$data.total_pieces}
     </td>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b>Weight</b><br />
          {$data.total_weight}{$data.uom_weight|replace:'LB':'LBS'|replace:'KG':'kgs'|lower}
     </td>  
   </tr>
   <tr>
     <td colspan="4"><hr /></td>
   </tr>
</table>
<div class="spacer" style="font-size: 2px; height: 2px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="0" border="0" style="width: 625px;">
   <tr>
     <td style="border: none; width: 98%; padding: 12px 0px 3px 36px;">
       <table cellspacing="0" cellpadding="0" border="0">
   <tr>
     <td style="vertical-align: top; font-size: 12px;"><b>Particulars</b></td>
           <td style="padding-left: 15px; font-size: 12px;">
           {foreach from=$data.goods key=i item=good}
       {$good.pieces} ({$good.packaging}) x {if $good.particulars}{$good.particulars}{else}{$good.commodity|replace:'GF':'General Freight'}{/if} {if $good.length gt 0 || $good.width gt 0 || $good.height gt 0}({$good.length}{$data.uom_dim|lower} x {$good.width}{$data.uom_dim|lower} x {$good.height}{$data.uom_dim|lower}){/if}<br /> 
           {/foreach}    
           </td>
         </tr>
         <tr>
           <td style="vertical-align: top; padding-top: 10px; font-size: 12px;"><b>Comments</b></td>
           <td style="padding: 10px 0px 0px 15px; font-size: 12px;">{$data.del_note}</td>
         </tr>
       </table>
     </td>
   </tr>
   <tr>
     <td style="padding-top: 8px;"><hr /></td>
   </tr>
</table>
<div class="spacer" style="font-size: 4px; height: 4px;">
  &nbsp;
</div>
<table cellspacing="0" cellpadding="0" border="0" style="width: 625px;">
   <tr>
     <td style="padding: 4px 0px 7px 0px;"><p style="font-size: 12px;">You can respond to this rate request by calling {$data.ship_phone} or via email at: <a href="mailto:{$data.ship_email}">{$data.ship_email}</a>.</p>
   </tr>
</table>
<div class="spacer" style="font-size: 7px; height: 7px;">
  &nbsp;
</div>
{include 'emails/email_footer.tpl' datetime=$datetime}

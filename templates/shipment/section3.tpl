{assign 'section' 'bol_details'}
	<h3>{$lang.bol_details}</h3>
	<div class='shipon_section_content' id='shipon_{$section}_section'>

		<!--div class='shipon_row'>
			<div class='shipon_column' style='width: 100%;'>
			
			{include 'shipment/boxes/service_return.tpl'}
			</div>
		</div-->
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 50%;'>
			{include 'shipment/boxes/pickup_notes.tpl'}
			</div>
			<div class='shipon_column' style='width: 50%;'>
			{include 'shipment/boxes/delivery_appt.tpl'}
			</div>			
		</div>
		<!--div class='shipon_row'>
			<div class='shipon_column' style='width: 25%;'>
			{include 'shipment/boxes/gps_email.tpl'}
			</div>	
			<div class='shipon_column' style='width: 25%;'>
			{include 'shipment/boxes/pod_email.tpl'}
            </div>
			
			<!--div class='shipon_column' style='width: 50%;'>
			{include 'shipment/boxes/vehicle.tpl'}
			</div-->
		</div-->
			
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 25%;'>
			  <span class='filler'></span>
			</div>
			<div class='shipon_column' style='width: 75%;'>
			{include 'shipment/boxes/rates.tpl'}
			</div>
		</div>
	</div>

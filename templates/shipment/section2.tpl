{assign 'section' 'bol_goods'}
	<h3>{$lang.bol_goods}</h3>
	<div class='shipon_section_content' id='shipon_{$section}_section'>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 100%;'>
			{include 'shipment/goods/table.tpl'}
			</div>
		</div>
		<!--div class='shipon_row'>
                        <div class='shipon_column' style='width: 30%;'>
                        {include 'shipment/boxes/declared_value.tpl'}
                        </div>
			<div class='shipon_column' style='width: 30%;'>	
			{include 'shipment/boxes/customs.tpl'}
			</div>
		</div-->	

	</div>

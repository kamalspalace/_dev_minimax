{* DIV ID of panel *}
{assign 'id' 'vehicle'}

{include 'common/box_header.tpl' id=$id title=$lang.vehicle button='' help_icon='1' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_vehicle_car" name="shipon_equipment" value="CAR"/>
                <label for="shipon_vehicle_car">car</label>
                <input type="radio" id="shipon_vehicle_van" name="shipon_equipment" value="VAN"/>
                <label for="shipon_vehicle_van">van</label>
                <input type="radio" id="shipon_vehicle_5ton" name="shipon_equipment" value="St22"/>
                <label for="shipon_vehicle_5ton">5ton</label>
                <input type="radio" id="shipon_vehicle_53" name="shipon_equipment" value="53v2"/>
                <label for="shipon_vehicle_53">53</label>
            </div>
	</div>
{include 'common/box_footer.tpl'}

{* DIV ID of panel *}
{assign 'id' 'delivery'}

{capture name='button' assign='button'}
	<label class='shipon_titlelabel' style='color: #fff; font-weight: normal; padding-top: 2px;'>Appointment &raquo;</label>
        	<input type="checkbox" id="delivery_appointment" name="shipon_del_appt" class="shipon_checkbox shipon_title_checkbox" onclick="appointment_toggle(this);" style="margin-top: 11px;" value="1" />
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.delivery button=$button help_icon='' width='100%'}
        <div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;">{$lang.date}&nbsp;</label>
            <input type="text" id="shipon_delivery_date" name="shipon_del_date" class="shipon_input shipon_datepicker"/>
        </div>
    	<div class='shipon_fieldblock' style='width: 23%;'>
            <label>&nbsp;{$lang.time_from}</label>
            <input type="text" id="shipon_delivery_time_from" name="shipon_del_time_from" class="shipon_input shipon_timepicker" disabled="disabled"/>
    	</div>
        <div class='shipon_fieldblock' style='width: 20%;'>
            <label>&nbsp;{$lang.time_to}</label>
            <input type="text" id="shipon_delivery_time_to" name="shipon_del_time_to" class="shipon_input shipon_timepicker" disabled="disabled"/>
        </div>
        <div class='shipon_fieldblock' style='width: 26%;'>
            <label>Appt #</label>
            <input type="text" id="shipon_del_note" name="shipon_del_area" class="shipon_input" disabled="disabled"/>
        </div>
{include 'common/box_footer.tpl'}

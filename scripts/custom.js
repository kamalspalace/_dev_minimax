var app_engine = {};

$(function(){	
	
	app_engine = {
		/*Put everything in it which run at the very start of app*/
		intialize: function(){
			
		},
		current_tab: null,
		/*Shared*/
		pre_tab_call: function(){
			
			 jQuery('.ui-dialog_titlebar-close', '.shipon_titlebutton').css('margin-top', '-14px !important');
		},
		/*invoke on every tab call*/
		tab_load: {
			history_1: function(){
				
			},
			tracking_1: function(){
				
				// Don't initialize this if the object doesn't exist
				if(jQuery('.shipon_pod_sig').length)
				{
					jQuery('a.shipon_pod_sig').imgPreview({
						imgCSS: { width: 160 },
						distanceFromCursor: { top:-180,left:20 }
					});
				}
				
				if(jQuery('.shipon_ups_sig').length)
				{
					jQuery('a.shipon_ups_sig').imgPreview({
						imgCSS: { width: 300 },
						distanceFromCursor: { top:-80,left:-40 }
					});
				}
				
				jQuery("span[class^='tracking_status_']").qtip({
					style: {classes: 'ui-tooltip-green'}
				});
				
				jQuery("a[class^='con_']").qtip({
					style: {classes: 'ui-tooltip-green'}
					
				});  
				
				jQuery("a[class^='ship_']").qtip({
					style: {classes: 'ui-tooltip-green'}
					
				});
				
				/*Add date pickers*/
				var to = new Date();
				var from = new Date(to.getTime() - 1000 * 60 * 60 * 24 * 14);
				jQuery('#datepicker-calendar').DatePicker({
					inline: true,
					date: [from, to],
					calendars: 3,
					mode: 'range',
					current: new Date(to.getFullYear(), to.getMonth() - 1, 1),
					onChange: function(dates,el) {
						// update the range display
						jQuery('#date-range-field span').text(dates[0].getDate()+' '+dates[0].getMonthName()+', '+dates[0].getFullYear()+' - '+
						dates[1].getDate()+' '+dates[1].getMonthName()+', '+dates[1].getFullYear());
						
						window.tracking_from = eval(dates[0].getMonth()+1) + '/' + + dates[0].getDate() + '/' + dates[0].getFullYear();
						window.tracking_to   = eval(dates[1].getMonth()+1) + '/' + dates[1].getDate() + '/' + dates[1].getFullYear();
					}
				});
				
				jQuery('#datepicker-calendar').append('<div id="datepickerUpdate"><a id="datepickerBtUpdate" onclick="update_tracking();">Apply</a></div>');				
				
				/*set the dates*/
				var tracking_from = new Date(jQuery('#shipon_tracking_date_from').val());
				var tracking_to   = new Date(jQuery('#shipon_tracking_date_to').val());
				var tofrom = new Array(tracking_from,tracking_to);
				jQuery('#datepicker-calendar').DatePickerSetDate(tofrom);
				
			}
			//end tracking
		}
	};
	
	/*invoke calls*/
	app_engine.intialize();
});

function onload_custom()
{

        var to = new Date();
        var from = new Date(to.getTime() - 1000 * 60 * 60 * 24 * 14);
        
        jQuery('#datepicker-calendar').DatePicker({
          inline: true,
          date: [from, to],
          calendars: 3,
          mode: 'range',
          current: new Date(to.getFullYear(), to.getMonth() - 1, 1),
          onChange: function(dates,el) {
            // update the range display
            jQuery('#date-range-field span').text(dates[0].getDate()+' '+dates[0].getMonthName()+', '+dates[0].getFullYear()+' - '+
                                        dates[1].getDate()+' '+dates[1].getMonthName()+', '+dates[1].getFullYear());

		    window.tracking_from = eval(dates[0].getMonth()+1) + '/' + + dates[0].getDate() + '/' + dates[0].getFullYear();
		    window.tracking_to   = eval(dates[1].getMonth()+1) + '/' + dates[1].getDate() + '/' + dates[1].getFullYear();
          }
        });
        
        jQuery('#datepicker-calendar').append('<div id="datepickerUpdate"><a id="datepickerBtUpdate" onclick="update_tracking();">Apply</a></div>');

        // initialize the special date dropdown field
        if(jQuery('#shipon_tracking_date_from').val() && jQuery('#shipon_tracking_date_to').val())
        {
        	var tracking_from = new Date(jQuery('#shipon_tracking_date_from').val());
            var tracking_to   = new Date(jQuery('#shipon_tracking_date_to').val());
			var tofrom = new Array(tracking_from,tracking_to);
		  	jQuery('#datepicker-calendar').DatePickerSetDate(tofrom);
        }
		else
		{
			var tracking_from = new Date(to.getTime() - 1000 * 60 * 60 * 24 * 14);
			var tracking_to   = new Date();
			var tofrom = new Array(tracking_from,tracking_to);
			jQuery('#datepicker-calendar').DatePickerSetDate(tofrom);
		}



        jQuery('#date-range-field span').text(tracking_from.getDate() + ' ' + tracking_from.getMonthName() + ', ' + tracking_from.getFullYear() + ' - ' +
                         				 tracking_to.getDate() + ' ' + tracking_to.getMonthName() + ', ' + tracking_to.getFullYear());

        jQuery('#date-range-field').bind('click', function(){
          jQuery('#datepicker-calendar').toggle();
          if(jQuery('#date-range-field a').text().charCodeAt(0) === 9660) {
            // switch to up-arrow
            jQuery('#date-range-field a').html('&#9650;');
            jQuery('#date-range-field').css({borderBottomLeftRadius:0, borderBottomRightRadius:0});
            jQuery('#date-range-field a').css({borderBottomRightRadius:0});
          } else {
            // switch to down-arrow
            jQuery('#date-range-field a').html('&#9660;');
            jQuery('#date-range-field').css({borderBottomLeftRadius:3, borderBottomRightRadius:3});
            jQuery('#date-range-field a').css({borderBottomRightRadius:3});
          }
          return false;
        });

                jQuery("#datepicker-calendar").bind( "clickoutside", function(event){
                jQuery(this).hide();
           	    jQuery('#date-range-field a').html('&#9660;');
        	    jQuery('#date-range-field').css({borderBottomLeftRadius:3, borderBottomRightRadius:3});
	            jQuery('#date-range-field a').css({borderBottomRightRadius:3});
                });

		jQuery('#shipon_tracking_search').focus(function()
		{
		    /*to make this flexible, I'm storing the current width in an attribute*/
		    jQuery(this).attr('data-default', jQuery(this).width());
		    jQuery(this).animate({ width: 263 }, 'slow');
			if(jQuery(this).val() == 'Search')
				jQuery(this).val('');
			else
				jQuery(this).select();
		}).blur(function()
		{
			if(jQuery(this).val() == '')
			jQuery(this).val('Search');
		    /* lookup the original width */
		    var w = jQuery(this).attr('data-default');
		    jQuery(this).animate({ width: 223 }, 'slow');
		});

		jQuery("#shipon_tracking_search").mouseup(function(e){
			e.preventDefault();
		});

		jQuery('#shipon_tracking_search').keydown(function (e){
		    if(e.keyCode == 13){
		        update_tracking();
		    }
		});

    jQuery('.ui-dialog_titlebar-close', '.shipon_titlebutton').css('margin-top', '-14px !important');
	
	jQuery("#shipon_charges_third").click(function(){ 
		var strHTML = '<label>Billing Account No.</lable>';
		strHTML += '<input type="text" value="" id="party_id" name="party_id" />';
		strHTML += '<input type="button" value="Submit" id="get_account" name="get_account" onclick="fetchAccount();" />';
		strHTML += '<br /><div id="errorText"></div>';
		jQuery("#shipon_return").html(strHTML);
		init_3rdparty_popup();
		shipon_open_popup("#shipon_return");
	});
	
	jQuery('#shipon_history_search').focus(function()
	{   
		/*to make this flexible, I'm storing the current width in an attribute*/
		jQuery(this).attr('data-default', jQuery(this).width());
		jQuery(this).animate({ width: 260 }, 'slow');
		if(jQuery(this).val() == 'Search')
			jQuery(this).val('');
		else
			jQuery(this).select();	
	}).blur(function()
	{
		if(jQuery(this).val() == '')
		jQuery(this).val('Search');
		/* lookup the original width */
		var w = jQuery(this).attr('data-default');
		jQuery(this).animate({ width: 212 }, 'slow');
	});
	
	jQuery('#shipon_address_search').focus(function()
	{
		/*to make this flexible, I'm storing the current width in an attribute*/
		jQuery(this).animate({ width: 260 }, 'slow');
		if(jQuery(this).val() == 'Search')
			jQuery(this).val('');
		else
			jQuery(this).select();	

	}).blur(function()
	{
		jQuery(this).animate({ width: 212 }, 'slow');
		if(jQuery(this).val() == '')
		jQuery(this).val('Search');
	});
	

	jQuery("#shipon_tracking_search,#shipon_address_search,#shipon_history_search").mouseup(function(e){
		e.preventDefault();
	});

	jQuery('#shipon_history_search').keydown(function (e){ 
		if(e.keyCode == 13){
			history_search();
		}
	});
	
	jQuery('#shipon_address_search').keydown(function (e){
		if(e.keyCode == 13){
			address_search();
		}
	});

	jQuery('#shipon_quote_no').keydown(function (e){
	        if(e.keyCode == 13) {
	        	fetchQuote();
		}
	});
	
	
}

function init_3rdparty_popup() { 
    jQuery('#shipon_return').dialog({ autoOpen: false, modal: true, closeOnEscape: true, minHeight: 100, minWidth:450, resizable: false,
        open: function (event, ui) { jQuery(".ui-dialog-titlebar-close").show();}
    });
}

function fetchAccount() {
	var id = jQuery("#party_id").val();
    //var post = {'bill_id': id};        
    //load_content('change_bill_to_code',post, function (data) {
	//	console.log(data);
    //});
	var returnData;
	var post = 'bill_id='+id;
    //post += "&current_hash=" + window.location.hash;
    jQuery.ajax({
        url: "shiponline/curl.php?action=change_bill_to_code",
        type: 'POST',
        cache: false,
        dataType: 'json',
        data: post,
	async:false,
        success: function (data)
        {	
			if (data.error_desc) {
			    jQuery("#errorText").html("Client Record for Account Id " + id + " can not be found");	
			} else {
				jQuery("#shipon_bill_name").val(data.Name);
				jQuery("#shipon_bill_contact").val(data.Contact2);
				jQuery("#shipon_bill_phone").val(data.Phone);
				jQuery("#shipon_bill_email").val(data.Email);
				jQuery("#shipon_bill_street1").val(data.Address);
				jQuery("#shipon_bill_city").val(data.City);
				jQuery("#shipon_bill_prov").val(data.Province);
				jQuery("#shipon_bill_postal").val(data.Postal);
				jQuery("#shipon_account_no").val(data.bill_to_code).attr('value',data.bill_to_code);
				jQuery('.ui-dialog-titlebar-close').click();
			}	
			//returnData = data;
		}
    });
	//return returnData;	

}

function init_bol(action)
{
	var date  = new Date();
	var date_string = (date.getMonth() + 1) + "/" + date.getDate() + "/" + date.getFullYear();
	jQuery("#shipon_shipment_date").val(date_string);
	
	jQuery("#shipon_pickup_date").datepicker('option', 'minDate', new Date());
	jQuery("#shipon_delivery_date").datepicker('option', 'minDate', new Date());
	
	jQuery("#shipon_pickup_date").bind("change", handle_pickup_change);
	jQuery("#shipon_pickup_date").change();

	jQuery("input[name=shipon_units]").bind("click", handleUnitChange);

	//jQuery('#shipon_goods_table th:first').html('<a class="shipon_link" onclick="check_return()">Return Order?</a>');
	
	handle_pickup_ready();
	
//	jQuery("#shipon_shipper_address_content").find(".shipon_fieldblock").each(function ()
//    {
//        if (jQuery(this).children().length != 2) return true;
//        var attr = jQuery(this).children()[1].name;		
//    });
//	
//    jQuery("#shipon_customs_broker").attr("disabled", "disabled");
//	jQuery("#shipon_customs_broker").attr("disabled", "disabled");
//	
//	jQuery(".shipon_slider").find('a').html(jQuery(".shipon_slider").slider("value"));
//	jQuery(".shipon_slider").find('a').addClass("shipon_slider_default");
//	jQuery( ".shipon_slider" ).bind( "slide", function(event, ui) 
//	{
//		jQuery(this).find('a').removeClass("shipon_slider_red shipon_slider_blue shipon_slider_default");
//		if(ui.value > 0) jQuery(this).find('a').addClass("shipon_slider_red");
//		else if(ui.value < 0)  jQuery(this).find('a').addClass("shipon_slider_blue");
//		else  jQuery(this).find('a').addClass("shipon_slider_default");
//		
//		jQuery(this).find('a').html(ui.value);
//	});
//	
	add_change_listener('#shipon_pup_date', handle_pickup_date);
	add_change_listener('#shipon_del_date', handle_delivery_date);
//	
	add_change_listener('#shipon_pup_date', handle_pickup_ready);
//	add_change_listener('#shipon_delivery_time_from', handle_delivery_from);
//	add_change_listener('#shipon_delivery_time_to', handle_delivery_to);
//	
	jQuery("#shipon_pup_date").datepicker('option', 'minDate', new Date());
//	jQuery("#shipon_pup_date").datepicker('option', 'beforeShowDay', handlePickupDates);
	jQuery("#shipon_del_date").datepicker('option', 'minDate', new Date());
//	jQuery("#shipon_del_date").datepicker('option', 'beforeShowDay', handlePickupDates);
}

function init_tracking(action)
{
	//jQuery("#shipon_tracking_date_from").datepicker('setDate', '-2w');
	//jQuery("#shipon_tracking_date_to");
}

function handle_section_1()
{   
	handle_customs_broker();
}

function handle_section_2()
{
    //handle_weight_change();
	handle_services();
    //handle_commodity_type();
    
	//jQuery("input[name=shipment_service]").bind("click", handleServiceChange);
	//jQuery('#shipon_pickup_time_from').timeEntry('setTime', new Date());
	
	//handleServiceChange();
}

function handle_pickup_change()
{   
	var myDate = new Date();
	myDate.setDate(myDate.getDate() + 7);
	if (get_date_difference(myDate, jQuery('#shipon_pickup_date').val()) >= 7) {
		alert ("Rate Chagne message");
	} 
	if(get_date_difference(jQuery('#shipon_shipment_date').val(), jQuery('#shipon_pickup_date').val()) === 0)
	{
		jQuery("#shipon_delivery_date").datepicker('option', 'minDate', new Date());
		limitTimepicker('#shipon_pickup_time', new Date(), '17:00');
		jQuery('#shipon_pickup_time').timeEntry('setTime', new Date());
	}
	else
	{
		jQuery("#shipon_delivery_date").datepicker('option', 'minDate', jQuery('#shipon_pickup_date').val());
		limitTimepicker('#shipon_pickup_time', '9:00', '17:00');
		jQuery('#shipon_pickup_time').timeEntry('setTime', "9:00");
	}
}

function package_type_change(reference)
{
	
}

function commodity_change()
{
   // window.goods_set_division = get_selected_division();
    var count = jQuery('#shipon_goods_table').rowCount();

	var isDNG = false;
	var isTemp = false;

    for (i = 0; i < count; i++)
    {
        var name = "#shipon\\[goods\\]\\[" + i + "\\]\\[commodity\\]";
        val = jQuery(name).val();
		
		var type = jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[packaging\\]").val();
		
		switch(val)
		{
			case 'DG':
				isDNG = true;
			break;
			
			case 'CC':
			case 'GFHT':
			case 'FDSTF':
				//isTemp = true;
			break;
			
			case 'other':
				if(type != 'other')
					jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars\\]").rules('add', 
					{
						required: true,
						minlength: 3
					});
			break;
		}
		
		if(type !== "other" && val != "other" && jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars]\\").length != 0 && (jQuery("#shipon_ship_country").val() == jQuery("#shipon_cons_country").val()))
			jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars\\]").rules('remove', 'required');
    }
	
	if(isDNG) jQuery("#shipon_dg_un").prop("disabled", false);
	else	  jQuery("#shipon_dg_un").prop("disabled", true);
/*	
	if(isTemp)
	{
		jQuery("#shipon_templevel").prop("disabled", false);
		jQuery('#shipon_temp_slider').slider('option', 'disabled', false);
	}
	else
	{
		jQuery("#shipon_templevel").prop("disabled", true);
		jQuery('#shipon_temp_slider').slider('option', 'disabled', true);
	}
*/	
}

function datepicker_noweekends(date)
{
	var noWeekend = jQuery.datepicker.noWeekends(date);
	if (noWeekend[0]) {
		return [true, ''];
	} else {
		return noWeekend;
	}
}

function get_date_difference(date1, date2)
{
	var begin = new Date(date1);
	var end = new Date(date2);
	
	return end.getTime() - begin.getTime();
}

function get_date_difference_from_today(date)
{
	var begin = new Date();
	var today = (begin.getMonth() + 1) + "/" + begin.getDate() + "/" + begin.getFullYear();
	var begin = new Date(today);
	var end = new Date(date);
	
	return end.getTime() - begin.getTime();
}


function handle_pickup_date()
{
	var diff = get_date_difference(jQuery('#shipon_pup_date').val(), jQuery('#shipon_del_date').val());

	if(diff !== 0)
	{
		if(diff < 0) jQuery("#shipon_del_date").val(jQuery('#shipon_pup_date').val());
		jQuery("#shipon_delivery_date").datepicker('option', 'minDate', jQuery('#shipon_pup_date').val());
	}

	switch(get_selected_service())
	{
		case '0': jQuery("#shipon_delivery_date").datepicker('option', 'maxDate', jQuery('#shipon_pickup_date').val());
		break;
		
		case '1':
		case '2':
		case '3': jQuery("#shipon_delivery_date").datepicker('option', 'maxDate', jQuery('#shipon_pickup_date').val());
		break;
		
		case'4': 
			var date = new Date(jQuery('#shipon_pickup_date').val());
			date.setDate(date.getDate() + 1);
			jQuery("#shipon_delivery_date").datepicker('option', 'maxDate', date);
		break;
	}
	
	handle_pickup_ready();
}

function handle_delivery_date()
{
	handle_delivery_from();
}

function handle_pickup_ready()
{
	var diff = get_date_difference_from_today(jQuery('#shipon_pup_date').val());
	
	if(diff !== 0)
	{
		setMinTimepicker('#shipon_pup_ready', '08:00');
		jQuery('#shipon_pup_ready').val('08:00');
	}
	else
	{
		setMinTimepicker('#shipon_pup_ready', new Date());
		jQuery('#shipon_pup_ready').timeEntry('setTime', new Date());
	}
}

function handle_delivery_from()
{
	var diff = get_date_difference(jQuery('#shipon_pickup_date').val(), jQuery('#shipon_delivery_date').val());
	
	if(diff === 0)
	{
		var pt = jQuery('#shipon_pickup_ready').val();
		var df = jQuery('#shipon_delivery_time_from').val();
		
		if(pt > df)
		{
			jQuery('#shipon_delivery_time_from').val(pt); df = pt;
			setMinTimepicker('#shipon_delivery_time_from', pt);
		}
	}
	else
		setMinTimepicker('#shipon_delivery_time_from', "08:00");
	
	handle_delivery_to();
}

function handle_delivery_to()
{
	var df = jQuery('#shipon_delivery_time_from').val();
	var dt = jQuery('#shipon_delivery_time_to').val();
	
	if(df > dt)
	{
		jQuery('#shipon_delivery_time_to').val(df); dt = df;
		setMinTimepicker('#shipon_delivery_time_to', df);
	}
}

function limitTimepicker(id, time_min, time_max)
{
	setMinTimepicker(id, time_min);
	setMaxTimepicker(id, time_max);
}

function setMinTimepicker(id, time_min)
{
	jQuery(id).timeEntry('change', 'minTime', time_min);
}

function setMaxTimepicker(id, time_max)
{
	jQuery(id).timeEntry('change', 'maxTime', time_max);
}

function handle_customs_broker()
{
  //  if (jQuery('#shipon_cons_country').val() !== jQuery('#shipon_ship_country').val()) {
  //      jQuery("#shipon_cust_broker").removeAttr('disabled');
  //		jQuery("#shipon_cust_broker").val("");
  //	} else
  //      jQuery("#shipon_cust_broker").attr("disabled", "disabled");
}

//selector, title, text, pos_my, pos_at
function generate_tooltip(selector) 
{   //alert(selector);
    jQuery.ajax({
      url: "shiponline/curl.php?action=get_tooltip",
      type: "post",
      data: {'id':selector},
      dataType: "json",
      success: function(values){ //console.log(values); alert(values.id); 
	jQuery(selector).qtip(
	{
		content: 
		{
			text: values.text, 
			title: 
			{
				text: values.title, 
				button: false
			}
		}, 
		position: 
		{
			my: values.my,
			at: values.at
		},
		show:
		{
			target: jQuery(selector) 
		},
		style: {classes: 'ui-tooltip-green'}
	});          
      }
    }); 
}

//, title, text
function generate_tooltip_data(selector)
{
	var data = new Array();	
	data['selector'] = selector;
//	data['title'] = title;
//	data['text'] = text;
	
	return data;
}

function calculate_total_weight()
{
    jQuery('#shipon_weight').val(calculate_total_from_inputs('#shipon_goods_table', 'weight', ''));
    jQuery('#shipon_weight').change();
}

function handleUnitChange()
{
	var unit = jQuery('input[name=shipon_units]:checked').val();
	
	switch(unit)
	{
		case 'metric':
			jQuery('#shipon_dynamic_unit_weight').html('kg');
			jQuery('#shipon_dynamic_unit_weight1').html('kg');
			jQuery('#shipon_dynamic_unit_dim').html('cm');
		break;
		
		case 'imperial':
			jQuery('#shipon_dynamic_unit_weight').html('lbs');
			jQuery('#shipon_dynamic_unit_weight1').html('lbs');
			jQuery('#shipon_dynamic_unit_dim').html('in');
		break;
	}
}

function check_return()
{
	var count = jQuery('#shipon_goods_table tbody').rowCount();

	var hasReturn = false;
    for (i = 0; i < count; i++)
    {
        var name = "#shipon\\[goods\\]\\[" + i + "\\]\\[return_good\\]";
        val = jQuery(name).attr("checked");
		if(val === 'checked') hasReturn = true;
    }
	
	if(!hasReturn)
	{
		shipon_goods_add();
		jQuery('#shipon_goods_table tr:last-child td:first-child input').prop('checked', true).removeAttr('disabled');
	}
}

function handle_return_validation()
{
}

function handle_services()
{
	var services = new Array();

	services['radio'] = "";
	services['radio'] += generate_radio_button('shipon_regular', 'shipon_service', 'Regular', 'A', "50%", false, true);
	services['radio'] += generate_radio_button('shipon_same_day', 'shipon_service', 'Same Day', 'S', "%", false, true);

	services['tooltips'] = new Array();
	services['tooltips'][0] = generate_tooltip_data('label[for=shipon_freight_expedite]');
	services['tooltips'][1] = generate_tooltip_data('label[for=shipon_freight_rush]');
	jQuery("#shipon_services").html(services['radio']);
	jQuery('.shipon_radio').buttonset();
	
	handle_tooltips(services['tooltips']);
}

function generate_radio_button(id, name, label, value, width, checked, enabled, onclick)
{
	checked_string = checked === true  ? "checked='checked'" : "";
	enabled_string = enabled === false ? " disabled='disabled'" : "";
	if(typeof(onclick) === "undefined")
	  onclick_string = "";
	else
	  onclick_string = " onclick='" + onclick + "'";

    return "<input type='radio' id='" + id + "' name='" + name + "' value='" + value + "' " + checked_string + enabled_string + onclick_string + "/><label for='" + id + "' style='width: " + width + "'>" + label + "</label>";
}

function handle_tooltips(tooltips)
{ //, tooltips[i]['title'], tooltips[i]['text'], 'bottom center', 'top center' - generate_tooltop arguments
	if(typeof(tooltips) !== 'undefined')
		for(var i in tooltips)
			generate_tooltip(tooltips[i]['selector']);
}

/* Please do not delet it. It initializes the google graphs */
function initialize() {
}

function fetchQuote() {
	
	jQuery("#quote_search").css("background-image","url('shiponline/theme/icon_loader.gif')");
	ext_id = jQuery('#shipon_quote_no').val();
	bill_to_code = jQuery('#shipon_account_no').val();
	
    var post  = 'pbnum='+ext_id;
		post += '&view=bol';
		post += '&view_action=get_quote';
	
		
	load_content('view',post, function (data) {
	    	jQuery("tbody tr:nth-child(even)").addClass("shipon_table_odd");
   		jQuery("tbody tr:nth-child(odd)").addClass("shipon_table_even");
		jQuery("#quote_search").css("background-image","url('shiponline/theme/icon_search2.png')");
		if(data.success > 0) {
			jQuery("#shipon_BOL input").attr('readonly', true);
			jQuery("#shipon_BOL select").attr("disabled", true);
		}
	});
}

function init_rate_popup() { 
    jQuery('#shipon_return').dialog({ autoOpen: false, modal: true, closeOnEscape: true, minHeight: 100, minWidth:450, resizable: false,
        open: function (event, ui) { jQuery(".ui-dialog-titlebar-close").show();}
    });
}

function rateEmailPopup() {
	if (jQuery('#shipon_total_charge').val() == '0.00') {
			var strHTML = '<label style="line-height: 21px;">Your account profile currently has no rates setup for this order. How would you like to proceed?</label><br />';
			strHTML += '<a nohref id="continue" class="dialog_action shipon_button" style="margin-top: 5px;" name="continue" onclick="clickCloseButton();">Proceed with order anyway</a>';
			strHTML += '<a nohref id="rate_email" class="dialog_action shipon_button" style="margin-top: 5px;" name="rate_email" onclick="sendRateEmail();">Call me back with a rate</a>';
			jQuery("#shipon_return").html(strHTML);
			init_rate_popup();
			shipon_open_popup("#shipon_return");
			jQuery('#ui-dialog-title-shipon_return').html('Rate Request');
	}
	
}

function clickCloseButton() {
	jQuery('.ui-dialog-titlebar-close').click();
}

function shipon_settings_dad_radio()
{
	var behavior = jQuery('input[name=shipon_settings_dad_beh]:checked').val();

	if(parseInt(behavior) > 0)
	{
	  jQuery('.shipon_settings_left input:not([type=radio])').each(
		function()
		{
		  if(jQuery(this).attr('name') == 'shipon_settings_dad_email') { }
		  else {
		  	jQuery(this).removeAttr('disabled');
		  	jQuery(this).removeAttr('value');
		  }
		});
	  jQuery('#shipon_settings_dad_country').removeAttr('disabled').attr('value','CA');
	}
	else
	{
	 	for(var input in window.session_address)
		{
		  if(jQuery('#' + input).attr('name') == 'shipon_settings_dad_email') { }
		  else
		     jQuery('#' + input).attr('value',window.session_address[input]).attr('disabled','');
		}
		
	}
}

function sendRateEmail() {
	jQuery('#shipon_return').dialog('close');
	show_overlay('#shipon_wrapper');
	var id = jQuery('#shipon_id').val();
    	var data = jQuery('form').serialize();
    	data += '&view=bol&view_action=rate_quote_contact';
   	data += '&shipment_id=' + id;   
    	load_content('view', data, function() {
		window.location.reload();
	});
}






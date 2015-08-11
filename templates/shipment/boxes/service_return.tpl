{* DIV ID of panel *}
{assign 'id' 'choose_return'}

{include 'common/box_header.tpl' id=$id title=$lang.choose_return button='' help_icon='1' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
            <label style="width: 75px;">{$lang.service}:</label>
                        <select id="shipon_return_service" name="shipon_service_ret" class="shipon_select" onChange="check_return()">
                                <option value=''>If you require a return, please choose a service</option>
                                <option value="DR">Direct</option>
                                <option value="RS">Rush</option>
                                <option value="RG">Regular</option>
                                <option value="SD">Sameday</option>
                                <option value="ON">Overnight</option>
                </select>
	</div>
{include 'common/box_footer.tpl'}

{* DIV ID of panel *}
{assign 'id' 'pickup_note'}

{include 'common/box_header.tpl' id=$id title=$lang.pickup button='' help_icon='1' width='100%'}
        <div class='shipon_fieldblock' style='width: 50%;'>
            <label>Instructions&nbsp;</label>
            <input type='text' id='shipon_pup_note' name='shipon_pup_note' class='shipon_input' style='width: auto; ' tabindex='3' />
        </div>

        <div class='shipon_fieldblock' style='width: 50%;'>
            <label>&nbsp;Cargo/SCN&nbsp;</label>
            <input type='text' id='shipon_cargo_scn' name='shipon_cargo_scn' class='shipon_input' style='width: auto; ' tabindex='3' />
        </div>        
{include 'common/box_footer.tpl'}

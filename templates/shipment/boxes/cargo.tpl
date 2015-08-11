{* DIV ID of panel *}
{assign 'id' 'cargo'}

{include 'common/box_header.tpl' id=$id title=$lang.cargo button='' help_icon='1' width='100%'}
	<div class='shipon_fieldblock' style='width: 100%;'>
		<label>Cargo/SCN&nbsp;</label>
		<input type='text' id='shipon_cargo_scn' name='shipon_cargo_scn' class='shipon_input' style='width: auto; ' tabindex='3' />
	</div>        
{include 'common/box_footer.tpl'}

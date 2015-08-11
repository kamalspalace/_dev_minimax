<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/consignee.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76438203851ec9218186af6-87090216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b6b2fec33348a7f948ad698522184bc394dadb4' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/boxes/consignee.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76438203851ec9218186af6-87090216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec92181ebfb3_53991987',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec92181ebfb3_53991987')) {function content_51ec92181ebfb3_53991987($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('consignee', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<a id="clear_consignee" class="shipon_button shipon_titlebutton" onclick="address_clear(this)">Clear</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['consignee_address'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>


	<div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_name'];?>
</label>
            <input type="text" id="shipon_cons_name" name="shipon_cons_name" class="shipon_input shipon_autocomplete" autocomplete_type="address" tabindex='14'></input>
	</div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_contact'];?>
</label>
            <input type="text" id="shipon_cons_contact" name="shipon_cons_contact" class="shipon_input" tabindex='15'></input>
	</div>

        <div class="shipon_fieldblock" style="width: 70%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone'];?>
</label>
            <input type="text" id="shipon_cons_phone" name="shipon_cons_phone" class="shipon_input" onKeyDown="formatTelNo (this);" tabindex='16'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 30%;">
            <label for="shipon_cons_ext"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone_ext'];?>
</label>
            <input type="text" id="shipon_cons_ext" name="shipon_cons_ext" class="shipon_input" tabindex='17'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_email'];?>
</label>
            <input type="text" id="shipon_cons_email" name="shipon_cons_email" class="shipon_input" tabindex='18'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street1'];?>
</label>
            <input type="text" id="shipon_cons_street1" name="shipon_cons_street1" class="shipon_input" tabindex='19'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street2'];?>
</label>
            <input type="text" id="shipon_cons_street2" name="shipon_cons_street2" class="shipon_input" tabindex='20'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_city'];?>
</label>
            <input type="text" id="shipon_cons_city" name="shipon_cons_city" class="shipon_input" tabindex='21'></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_cons_province" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_province'];?>
</label>
            <input type="text" id="shipon_cons_province" name="shipon_cons_province" class="shipon_input shipon_autocomplete" autocomplete_type="province" modifier="shipon_cons_country" maxlength="2" tabindex='22' />
	</div>

        <div class="shipon_fieldblock" style="width: 60%;">
            <label for="shipon_cons_country" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_country'];?>
</label>
            	<select id="shipon_cons_country" name="shipon_cons_country" class="shipon_select" tabindex='23'>
		  <?php echo $_smarty_tpl->getSubTemplate ('common/countries_all.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </select>
        </div>

        <div class="shipon_fieldblock" style="width: 40%;">
            <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_postal'];?>
</label>
            <input type="text" id="shipon_cons_postal" name="shipon_cons_postal" class="shipon_input" maxlength="6" tabindex='24' ></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
	    <div style="float: right;">
                <a id="shipon_consignee_save" class="address_save shiponConSave" onclick="shipon_address_save(this)"> Save </a>&nbsp;&nbsp;
	    </div>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
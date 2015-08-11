<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:38
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/service_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52137335951d5b141830e70-84683254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f77c906f34c4bb69436a372ce7bc89f05c414a1' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/service_return.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52137335951d5b141830e70-84683254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b141851098_48843946',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b141851098_48843946')) {function content_51d5b141851098_48843946($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('choose_return', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['choose_return'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 100%;">
            <label style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['service'];?>
:</label>
                        <select id="shipon_return_service" name="shipon_service_ret" class="shipon_select" onChange="check_return()">
                                <option value=''>If you require a return, please choose a service</option>
                                <option value="DR">Direct</option>
                                <option value="RS">Rush</option>
                                <option value="RG">Regular</option>
                                <option value="SD">Sameday</option>
                                <option value="ON">Overnight</option>
                </select>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
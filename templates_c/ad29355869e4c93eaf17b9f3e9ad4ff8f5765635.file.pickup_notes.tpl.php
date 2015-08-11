<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:38
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/pickup_notes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41972192551d62e8aa1a923-84568844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad29355869e4c93eaf17b9f3e9ad4ff8f5765635' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/shipment/boxes/pickup_notes.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41972192551d62e8aa1a923-84568844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d62e8aa339f2_67678884',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d62e8aa339f2_67678884')) {function content_51d62e8aa339f2_67678884($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('pickup_note', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['pickup'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        <div class='shipon_fieldblock' style='width: 50%;'>
            <label>Instructions&nbsp;</label>
            <input type='text' id='shipon_pup_note' name='shipon_pup_note' class='shipon_input' style='width: auto; ' tabindex='3' />
        </div>

        <div class='shipon_fieldblock' style='width: 50%;'>
            <label>&nbsp;Cargo/SCN&nbsp;</label>
            <input type='text' id='shipon_cargo_scn' name='shipon_cargo_scn' class='shipon_input' style='width: auto; ' tabindex='3' />
        </div>        
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
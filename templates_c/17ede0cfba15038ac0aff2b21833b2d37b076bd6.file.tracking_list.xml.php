<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:42
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/integration/degama/tracking_list.xml" */ ?>
<?php /*%%SmartyHeaderCode:178137241551d5b1462ad6f3-40570666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17ede0cfba15038ac0aff2b21833b2d37b076bd6' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/integration/degama/tracking_list.xml',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178137241551d5b1462ad6f3-40570666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b14630c438_28641245',
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b14630c438_28641245')) {function content_51d5b14630c438_28641245($_smarty_tpl) {?><REQUEST>
  <TRACKING_LIST>
    <start_date><?php echo $_smarty_tpl->tpl_vars['request']->value['start_date'];?>
</start_date>
    <end_date><?php echo $_smarty_tpl->tpl_vars['request']->value['end_date'];?>
</end_date>
    <bill_to_code><?php echo $_smarty_tpl->tpl_vars['request']->value['bill_to_code'];?>
</bill_to_code>
    <start_row><?php echo $_smarty_tpl->tpl_vars['request']->value['start_row'];?>
</start_row>
    <sort_by><?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
</sort_by>
    <order_by><?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
</order_by>
    <number_of_entries><?php echo $_smarty_tpl->tpl_vars['request']->value['entries_per_page'];?>
</number_of_entries>
    <search_string><?php echo $_smarty_tpl->tpl_vars['request']->value['search_string'];?>
</search_string>
    <exclude_status>QTE,CNC</exclude_status>
    <COLUMNS>
      <column>ProDate</column>
      <column>Pbnum</column>
      <column>Rec-Status</column>
      <column>ShipName</column>
      <column>City</column>
      <column>Prv</column>
      <column>ConsigName</column>
      <column>ConAdd-1</column>
      <column>ConCity</column>
      <column>ConPrv</column>
      <column>Code</column>
      <column>Sh-BOL</column>
    </COLUMNS>
  </TRACKING_LIST>
</REQUEST>
<?php }} ?>
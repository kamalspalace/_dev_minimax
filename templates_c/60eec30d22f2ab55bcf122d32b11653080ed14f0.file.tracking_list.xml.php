<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 15:48:27
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/integration/degama/tracking_list.xml" */ ?>
<?php /*%%SmartyHeaderCode:199398432551ec921d711422-12100188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60eec30d22f2ab55bcf122d32b11653080ed14f0' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/integration/degama/tracking_list.xml',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199398432551ec921d711422-12100188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec921d7714c4_85971241',
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec921d7714c4_85971241')) {function content_51ec921d7714c4_85971241($_smarty_tpl) {?><REQUEST>
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
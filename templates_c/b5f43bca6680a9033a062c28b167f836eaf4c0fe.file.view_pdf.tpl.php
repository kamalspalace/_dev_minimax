<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 22:05:26
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/history/view_pdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35595069651ecd167e1c729-04622515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f43bca6680a9033a062c28b167f836eaf4c0fe' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/history/view_pdf.tpl',
      1 => 1381370722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35595069651ecd167e1c729-04622515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ecd167e77cd5_67946609',
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ecd167e77cd5_67946609')) {function content_51ecd167e77cd5_67946609($_smarty_tpl) {?><div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container' style='background-color: #CCC; background-image: none;'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>Order Review</div>

			<div class="shipon_titlebuttons">
				
				<div id="shipon_viewpdf_status">
					<?php if ($_smarty_tpl->tpl_vars['shipment']->value['sent']<1){?>
					<span class='shipon_title_warning'><strong>WARNING:</strong> this order is still pending and is not yet submitted.&nbsp;</span>
					<span class='shipon_icomoon_warning'>&#xe032;</span>
					<?php }else{ ?>
					<span class='shipon_title_warning'>This order is finalized and has been submitted.&nbsp;</span>
					<span class='shipon_icomoon_success'>&#xe01c;</span>
					<?php }?>
				</div>
			</div>
		</div>
        <div id='shipon_tracking_view_header' style='margin-bottom: 20px;'>
       		<span id='tracking_view_h2'>ORDER #<?php echo $_smarty_tpl->tpl_vars['shipment']->value['ext_id'];?>
</span>
       		<?php if ($_smarty_tpl->tpl_vars['shipment']->value['sent']<1){?>
       		<a onclick="shipon_send(<?php echo $_smarty_tpl->tpl_vars['shipment']->value['id'];?>
);" id="shipon_submit_order"><span class="icomoon">&#xe01c;</span>Submit Order</a>
       		<img src="shiponline/theme/icon_loader2.gif" id="shipon_submit_loader" style="float: right; margin: 10px 8px 0px 0px; display: none;">
       		<?php }?>
		</div>

		<object data='shiponline/curl.php?action=generate_pdf&id=<?php echo $_smarty_tpl->tpl_vars['shipment']->value['id'];?>
' type='application/pdf' width='960' height='1100'></object>
<?php }} ?>
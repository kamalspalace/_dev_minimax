<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:04:40
         compiled from "/home/shipon/public_html/new_bol/_dev-minimax/templates/history/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189415173051d5b151ab7666-95344404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf8b54cb088153957e8da256bb12a47542ead77' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-minimax/templates/history/history.tpl',
      1 => 1384383235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189415173051d5b151ab7666-95344404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d5b151b75365_29631038',
  'variables' => 
  array (
    'lang' => 0,
    'shipment' => 0,
    'ship' => 0,
    'request' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5b151b75365_29631038')) {function content_51d5b151b75365_29631038($_smarty_tpl) {?><div style="width: 100%" id="shipon_history_content" class="shipon_field"> 
	<div class="shipon_field_container">
		<div class="shipon_title">
			<div class="shipon_titletext"><?php echo $_smarty_tpl->tpl_vars['lang']->value['history'];?>
</div>
			<div class="shipon_titlebuttons">
				<input type="text" value="Search" id="shipon_history_search" class="shipon_input" />
			</div>
		</div>
		<div class="shipon_field_content">
			<table id="shipon_history">
				<thead>
					<tr>
						<th width="10%" onclick="sort_by(this)" class="shipon_sort_DESC"><?php echo $_smarty_tpl->tpl_vars['lang']->value['shipment_id'];?>
</th>
						<th width="16%" onclick="sort_by(this)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</th>
						<th width="45%" onclick="sort_by(this)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['consignee'];?>
</th>
						<th width="6%" onclick="sort_by(this)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
</th>
						<th width="24%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($_smarty_tpl->tpl_vars['shipment']->value)>0){?>
						<?php  $_smarty_tpl->tpl_vars['ship'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ship']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ship']->key => $_smarty_tpl->tpl_vars['ship']->value){
$_smarty_tpl->tpl_vars['ship']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['ship']->key;
?>
					<tr>
						<td><!--a href="#tracking#view_details-<?php echo $_smarty_tpl->tpl_vars['ship']->value['ext_id'];?>
" class="shipon_button shipon_history_button shipon_btorder"--><a href="javascript:get_tracking_details<?php echo $_smarty_tpl->tpl_vars['ship']->value['ext_id'];?>
" style="cursor: pointer; width: 65px; margin-top: 0px; font-weight: bold;" ><?php echo $_smarty_tpl->tpl_vars['ship']->value['ext_id'];?>
</a></td>
						<td style="color: #000; padding-left: 15px;"><?php echo $_smarty_tpl->tpl_vars['ship']->value['timestamp'];?>
</td>
						<td style="font-weight: bold; text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['ship']->value['cons_name'];?>
</td>
						<td style="text-align: center;"><span class="<?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>history_status_SUB<?php }else{ ?>history_status_PND<?php }?>"><?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>Sent<?php }else{ ?>Incomplete<?php }?></span></td>
						<td style="padding-left: 13px;">
							<a href="#bol#copy-<?php echo $_smarty_tpl->tpl_vars['ship']->value['id'];?>
" class="shipon_history_button">&nbsp;<span style="font-size: 12px;">&#xe022;</span>&nbsp;Copy </a>
							<a <?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>nohref<?php }else{ ?>href="#bol#edit-<?php echo $_smarty_tpl->tpl_vars['ship']->value['id'];?>
"<?php }?> class="shipon_history_button <?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>shipon_history_button_disable_hover<?php }?>" style="padding-bottom: 5px;">&nbsp;<span style="font-family: 'ModernPictogramsNormal';">V</span>&nbsp;Edit </a>
							<a href="#history#view_pdf-<?php echo $_smarty_tpl->tpl_vars['ship']->value['id'];?>
" class="shipon_history_button" style="margin-right: none;">&nbsp;<span style="font-size: 12px;">&#xe000;</span>&nbsp;View </a>
						</td>
					</tr>
						<?php } ?>
					<?php }?>

					<?php if (count($_smarty_tpl->tpl_vars['shipment']->value)<10){?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (count($_smarty_tpl->tpl_vars['shipment']->value)) : count($_smarty_tpl->tpl_vars['shipment']->value)-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = count($_smarty_tpl->tpl_vars['shipment']->value), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        </tr>
					<?php }} ?>
					<?php }?>
				</tbody>
			</table>
			<input type="hidden" name="shipon_history_sort_by" id="shipon_history_sort_by" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
">
			<input type="hidden" name="shipon_history_sort_order" id="shipon_history_sort_order" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
">			
		</div> <!-- end of shipon_field_content -->
		<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

	</div><!-- end of class  shipon_field_container -->
</div><!-- end of shipon file content -->
<?php }} ?>
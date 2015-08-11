<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:11:28
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/emails/order_summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85983141351ecd57705fab6-92411898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e0c6a8704c63a656b0e63b6a234fa055b107f6' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/emails/order_summary.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85983141351ecd57705fab6-92411898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ecd577243789_14134383',
  'variables' => 
  array (
    'subject' => 0,
    'data' => 0,
    'good' => 0,
    'datetime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ecd577243789_14134383')) {function content_51ecd577243789_14134383($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/shipon/public_html/new_bol/_CORE/includes/smarty/libs/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ('emails/email_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('subject'=>$_smarty_tpl->tpl_vars['subject']->value), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('emails/email_title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('subject'=>$_smarty_tpl->tpl_vars['subject']->value), 0);?>

<div class="spacer" style="font-size: 4px; height: 4px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="3" border="0" style="width: 625px; border: 1px solid #666;">
  <tr>
    <td style="border: none; font-size: 12px; width: 33%; text-align: center; padding-bottom: 4px;">
      <b>Reference #</b> <?php echo $_smarty_tpl->tpl_vars['data']->value['reference'];?>

    </td>
    <td style="border: none; font-size: 12px; width: 33%; text-align: center; padding-bottom: 4px;">
      <b>Probill #</b> <?php echo $_smarty_tpl->tpl_vars['data']->value['ext_id'];?>

    </td>
    <td style="border: none; font-size: 12px; width: 33%; text-align: center; padding-bottom: 4px;">
      <b>Ordered by </b> <?php echo $_smarty_tpl->tpl_vars['data']->value['ship_contact'];?>

    </td>
  </tr>
</table>
<div class="spacer" style="font-size: 2px; height: 2px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="0" border="0" style="width: 625px;">
  <tr>
    <td style="border: none; width: 33%; padding: 12px 0px 0px 5px;">
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; font-size: 12px;"><b>Shipper</b></td>
  		    <td style="padding-left: 15px; font-size: 12px;">
  		    <?php if ($_smarty_tpl->tpl_vars['data']->value['ship_name']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ship_name']);?>
<br /><?php }?>
  		    <?php if ($_smarty_tpl->tpl_vars['data']->value['ship_contact']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ship_contact']);?>
<br /><?php }?>
  		    <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ship_street1']);?>
<br />
  		    <?php if ($_smarty_tpl->tpl_vars['data']->value['ship_street2']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ship_street2']);?>
<br /><?php }?>
  		    <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ship_city']);?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ship_province']);?>
<br />
  		    <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ship_postal']);?>

  		    </td>
  		 </tr>
	   </table>
   </td>
   <td style="width: 33%; padding: 12px 0px 0px 0px;">
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; font-size: 12px;"><b>Consignee</b></td>
          <td style="padding-left: 15px; font-size: 12px;">
          <?php if ($_smarty_tpl->tpl_vars['data']->value['cons_name']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['cons_name']);?>
<br /><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['cons_contact']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['cons_contact']);?>
<br /><?php }?>
          <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['cons_street1']);?>
<br />
          <?php if ($_smarty_tpl->tpl_vars['data']->value['cons_street2']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['cons_street2']);?>
<br /><?php }?>
          <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['cons_city']);?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['cons_province']);?>
<br />
          <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['cons_postal']);?>

          </td>
        </tr>
      </table>
    </td>
    <td style="width: 33%; padding: 12px 0px 0px 5px;">
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; font-size: 12px;"><b>Bill-to</b></td>
          <td style="padding-left: 15px; font-size: 12px;">
          <?php if ($_smarty_tpl->tpl_vars['data']->value['bill_name']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['bill_name']);?>
<br /><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['bill_contact']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['bill_contact']);?>
<br /><?php }?>
          <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['bill_street1']);?>
<br />
          <?php if ($_smarty_tpl->tpl_vars['data']->value['bill_street2']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['bill_street2']);?>
<br /><?php }?>
          <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['bill_city']);?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['bill_prov']);?>
<br />
          <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['bill_postal']);?>

          </td>
        </tr>
      </table>
    </td>
  </tr>
</table> 
<div class="spacer" style="font-size: 2px; height: 2px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="0" border="0" style="width: 625px; margin-top: 0px; padding-top: 5px;">
  <tr>
     <td colspan="4"><hr /></td>
  </tr>
  <tr>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b>Cargo/SCN</b><br />
          <?php echo $_smarty_tpl->tpl_vars['data']->value['cargo_scn'];?>

     </td>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b>Ready time</b><br />
          <?php echo $_smarty_tpl->tpl_vars['data']->value['pup_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['pup_time'];?>

     </td>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b># Skids - Pcs</b><br />
          <?php echo $_smarty_tpl->tpl_vars['data']->value['skids'];?>
-<?php echo $_smarty_tpl->tpl_vars['data']->value['total_pieces'];?>

     </td>
     <td style="border: none; width: 145px; text-align: center; font-size: 12px;">
       <b>Weight</b><br />
          <?php echo $_smarty_tpl->tpl_vars['data']->value['total_weight'];?>
<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value['uom_weight'],'LB','LBS'),'KG','kgs'));?>

     </td>	
   </tr>
   <tr>
     <td colspan="4"><hr /></td>
   </tr>
</table>
<div class="spacer" style="font-size: 2px; height: 2px;">
  &nbsp;
</div>
<table cellspacing="5" cellpadding="0" border="0" style="width: 625px;">
   <tr>
     <td style="border: none; width: 98%; padding: 12px 0px 3px 36px;">
       <table cellspacing="0" cellpadding="0" border="0">
 	 <tr>
	   <td style="vertical-align: top; font-size: 12px;"><b>Particulars</b></td>
           <td style="padding-left: 15px; font-size: 12px;">
           <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['good']->key;
?>
	     <?php echo $_smarty_tpl->tpl_vars['good']->value['pieces'];?>
 (<?php echo $_smarty_tpl->tpl_vars['good']->value['packaging'];?>
) x <?php if ($_smarty_tpl->tpl_vars['good']->value['particulars']){?><?php echo $_smarty_tpl->tpl_vars['good']->value['particulars'];?>
<?php }else{ ?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['good']->value['commodity'],'GF','General Freight');?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['good']->value['length']>0||$_smarty_tpl->tpl_vars['good']->value['width']>0||$_smarty_tpl->tpl_vars['good']->value['height']>0){?>(<?php echo $_smarty_tpl->tpl_vars['good']->value['length'];?>
<?php echo strtolower($_smarty_tpl->tpl_vars['data']->value['uom_dim']);?>
 x <?php echo $_smarty_tpl->tpl_vars['good']->value['width'];?>
<?php echo strtolower($_smarty_tpl->tpl_vars['data']->value['uom_dim']);?>
 x <?php echo $_smarty_tpl->tpl_vars['good']->value['height'];?>
<?php echo strtolower($_smarty_tpl->tpl_vars['data']->value['uom_dim']);?>
)<?php }?><br /> 
           <?php } ?>	   
           </td>
         </tr>
         <tr>
           <td style="vertical-align: top; padding-top: 10px; font-size: 12px;"><b>Comments</b></td>
           <td style="padding: 10px 0px 0px 15px; font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['del_note'];?>
</td>
	       </tr>
       </table>
     </td>
   </tr>
   <tr>
     <td style="padding-top: 8px;"><hr /></td>
   </tr>
</table>
<div class="spacer" style="font-size: 4px; height: 4px;">
  &nbsp;
</div>
<table cellspacing="0" cellpadding="0" border="0" style="width: 625px;">
   <tr>
     <td style="padding: 4px 0px 7px 0px;"><p style="font-size: 12px;">Thank you for your order.</p>
   </tr>
</table>
<div class="spacer" style="font-size: 7px; height: 7px;">
  &nbsp;
</div>
<?php echo $_smarty_tpl->getSubTemplate ('emails/email_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('datetime'=>$_smarty_tpl->tpl_vars['datetime']->value), 0);?>

<?php }} ?>
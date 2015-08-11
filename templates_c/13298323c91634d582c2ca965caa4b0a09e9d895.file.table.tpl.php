<?php /* Smarty version Smarty-3.1.12, created on 2013-10-06 16:01:49
         compiled from "/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/goods/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129129272451ec92182bc614-43789016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13298323c91634d582c2ca965caa4b0a09e9d895' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-minimax/templates/shipment/goods/table.tpl',
      1 => 1381088812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129129272451ec92182bc614-43789016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ec92182fd580_05881497',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec92182fd580_05881497')) {function content_51ec92182fd580_05881497($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('goods_table', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
          <div class="shipon_radio">
            <input type="radio" id="shipon_unit_metric" name="shipon_units" value="metric"/>
            <label for="shipon_unit_metric">Metric</label>
            <input type="radio" id="shipon_unit_imperial" name="shipon_units" value="imperial" checked="checked"/>
            <label for="shipon_unit_imperial">Imperial</label>
          </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['goods_table'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>


        <div class="shipon_fieldblock" style="width: 100%;">
		<table id='shipon_goods_table'>
		  <thead>
		    <tr>
		      <th width='8%' style="padding-left: 5px;"># of skids</th>
		      <th width='9%' style="padding-left: 5px;"># of pieces</th>
		      <th width='15%'>Pieces type</th>
		      <th width='18%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['commodity_type'];?>
</th>
		      <th width='24%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</th>
		      <th width='18%' style="padding-left: 5px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dimensions'];?>
<br />
				<span id="shipon_dynamic_unit_dim">in</span>
			  </th>
		      <th width='8%' style="padding-left: 5px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['weight'];?>
 <br />
				<span id="shipon_dynamic_unit_weight1">lbs</span>
			  </th>
	             <th width='10px'></th>
		    </tr>
		  </thead>
		  <tbody>
	        <tr>
	        <td>
		  <div class='shipon_td_container'>
		    <input type="text" id="shipon_skids" name="shipon_skids" class="shipon_input shipon_table_input" style="width: 100%;">
		  </div>
		</td>
		<td>
		  <div class='shipon_td_container'>
		    <input type="text" id="shipon[goods][0][pieces]" name="shipon[goods][0][pieces]" class="shipon_input shipon_table_input" style="width: 100%;" onkeyup="calculate_total_pieces()" />
		  </div>
		</td>
		<td>
		  <div class='shipon_td_container'>
		    <select name="shipon[goods][0][packaging]" id="shipon[goods][0][packaging]" class="shipon_select shipon_good_type" onchange="package_type_change(this)">
	              <option value="B">Box</option>
	              <option value="D">Drums</option>
	              <option value="L">Bundles</option>
	              <option value="O">Coils</option>
	              <option value="P">Pieces</option>
	              <option value="R">Rolls</option>
				  <option value="S" selected>Skids</option>
	        </select>
		  </div>
		</td>
		<td>
		  <div class='shipon_td_container'>
		    <select id="shipon[goods][0][commodity]" name="shipon[goods][0][commodity]" class="shipon_select" onchange="commodity_change()">
      	      	      <option value="GF">General Freight</option>
                      <!--option value="FDSTF">Food Stuff</option-->
            	    </select>
	  	  </div>
	        </td>
		<td>
	  	  <div class='shipon_td_container'>
	    	    <input type="text" id="shipon[goods][0][particulars]" name="shipon[goods][0][particulars]" class="shipon_input shipon_table_input" style="width: 100%;" />
	  	  </div>
	       </td>
	       <td>
	         <div class='shipon_td_container'>
            	   <input type="text" id="shipon[goods][0][length]" name="shipon[goods][0][length]" class="shipon_input shipon_table_input" style="width: 33%;" maxlength="5" /><input type="text" id="shipon[goods][0][width]" name="shipon[goods][0][width]" class="shipon_input shipon_table_input" style="width: 33%;" maxlength="5" /><input type="text" id="shipon[goods][0][height]" name="shipon[goods][0][height]" class="shipon_input shipon_table_input" style="width: 33%;" maxlength="5" />
	        </div>
	      </td>
              <td>
	        <div class='shipon_td_container'>
	          <input type="text" id="shipon[goods][0][weight]" name="shipon[goods][0][weight]" class="shipon_input shipon_table_input" style="width: 100%;" maxlength="5" onkeyup="calculate_total_weight()" />
	       </div>
	     </td>
	     <td style="text-align: left; padding: 2px 0px 0px 3px !important;"><!--a class='shipon_icon' onclick='shipon_goods_add();'><img src='shiponline/theme/btnAddPkg.png'></a--></td>
         </tr>
         </tbody>
	</table>
	</div>

	<!--a class='shipon_button' id='shipon_goods_add' onclick='shipon_goods_add()'> Add </a-->
	<input type='hidden' id='shipon_goods_max_rows' value='3' />

        <div class="shipon_fieldblock" style="width: 100%;">
	  <hr />
	</div>

        <div class="shipon_fieldblock" style="width: 14%;visibility:hidden;">
            <label style="width: 67px;">Pieces:</label>
            <input type="text" id="shipon_pieces" name="shipon_pieces" class="shipon_input" readonly="readonly"/>
	</div>

        <div class="shipon_fieldblock" style="width: 10%;">
          <span class="filler"></span>
        </div>

        <div class="shipon_fieldblock" style="width: 20%;">
          <span class="filler"></span>
          <!--<label style="width: 100px; text-align: right;">UN:&nbsp;</label>
          <input type="text" id="shipon_dg_un" name="shipon_dg_un" class="shipon_input" maxlength="6" disabled="disabled" />-->
	</div>

        <div class="shipon_fieldblock" style="width: 34%;">
          <span class="filler"></span>
        </div>

        <div class="shipon_fieldblock" style="width: 16.5%;visibility:hidden;">
          <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['total_weight'];?>
:&nbsp;</label>
          <input type="text" id="shipon_weight" name="shipon_weight" class="shipon_input" style="color: #222;" readonly="readonly"/>
        </div>

        <div class="shipon_fieldblock" style="width: 2%;visibility:hidden;">
          <span id="shipon_dynamic_unit_weight">lbs</span>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
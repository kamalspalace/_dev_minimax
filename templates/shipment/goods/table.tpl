{* DIV ID of panel *}
{assign 'id' 'goods_table'}

{capture name='button' assign='button'}
          <div class="shipon_radio">
            <input type="radio" id="shipon_unit_metric" name="shipon_units" value="metric"/>
            <label for="shipon_unit_metric">Metric</label>
            <input type="radio" id="shipon_unit_imperial" name="shipon_units" value="imperial" checked="checked"/>
            <label for="shipon_unit_imperial">Imperial</label>
          </div>
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.goods_table button=$button help_icon='' width='100%'}

        <div class="shipon_fieldblock" style="width: 100%;">
		<table id='shipon_goods_table'>
		  <thead>
		    <tr>
		      <th width='8%' style="padding-left: 5px;"># of skids</th>
		      <th width='9%' style="padding-left: 5px;"># of pieces</th>
		      <th width='15%'>Pieces type</th>
		      <th width='18%'>{$lang.commodity_type}</th>
		      <th width='24%'>{$lang.description}</th>
		      <th width='18%' style="padding-left: 5px;">{$lang.dimensions}<br />
				<span id="shipon_dynamic_unit_dim">in</span>
			  </th>
		      <th width='8%' style="padding-left: 5px;">{$lang.weight} <br />
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
          <label>{$lang.total_weight}:&nbsp;</label>
          <input type="text" id="shipon_weight" name="shipon_weight" class="shipon_input" style="color: #222;" readonly="readonly"/>
        </div>

        <div class="shipon_fieldblock" style="width: 2%;visibility:hidden;">
          <span id="shipon_dynamic_unit_weight">lbs</span>
        </div>

{include 'common/box_footer.tpl'}

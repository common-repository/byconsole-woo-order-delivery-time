<style>
	.byconsolewooodt_holiday_container{float: left;width: 50%;}

	.byconsolewooodt_holiday_single_container{float: left;width: 20%;margin-bottom: 20px;background-color: #ddd;padding: 7px;margin-right: 8px;}

</style>

<?php $byconsolewooodt_holidays_setting = get_option('byconsolewooodt_holidays_setting');

parse_str($byconsolewooodt_holidays_setting, $byconsolewooodt_holidays_setting_array);

/*echo '<pre>';

print_r($byconsolewooodt_holidays_setting_array);

echo '</pre>';*/

?>

<script>

var dateToday = new Date();

jQuery(function(){

    jQuery("#byconsolewooodt_free_delivery_pickup_holiday1").datepicker({

		showButtonPanel: true,

		dateFormat: 'mm/dd/yy',

		minDate: dateToday

	});

	jQuery("#byconsolewooodt_free_delivery_pickup_holiday2").datepicker({

		showButtonPanel: true,

		dateFormat: 'mm/dd/yy',

		minDate: dateToday

	});

});

</script>

<form name="frm" method="post" class="byconsolewooodt_holiday_fields_form" action="">

 <label for="field1">

 	<span>Pickup Holiday<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Pickup Holiday Setting.</span></div></span>

    <div class="byconsolewooodt_holiday_container">

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_pickup_holidays[0]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_pickup_holidays" value="0" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ if (in_array("0",$byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ echo 'checked="checked"';} } ?>/>Sunday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_pickup_holidays[1]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_pickup_holidays" value="1" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ if (in_array("1",$byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ echo 'checked="checked"';} } ?>/>Monday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_pickup_holidays[2]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_pickup_holidays" value="2" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ if (in_array("2",$byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ echo 'checked="checked"';} } ?>/>Tuesday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_pickup_holidays[3]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_pickup_holidays" value="3" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ if (in_array("3",$byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ echo 'checked="checked"';} } ?>/>Wednesday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_pickup_holidays[4]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_pickup_holidays" value="4" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ if (in_array("4",$byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ echo 'checked="checked"';} } ?>/>Thursday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_pickup_holidays[5]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_pickup_holidays" value="5" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ if (in_array("5",$byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ echo 'checked="checked"';} } ?>/>Friday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_pickup_holidays[6]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_pickup_holidays" value="6" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ if (in_array("6",$byconsolewooodt_holidays_setting_array['byconsolewooodt_pickup_holidays'])){ echo 'checked="checked"';} } ?>/>Saturday</div>    

    </div>

</label>

<br>

<br>

<br>

<br>

<label for="field1">

 	<span>Delivery Holiday<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Delivery Holiday Setting.</span></div></span>

    <div class="byconsolewooodt_holiday_container">

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_delivery_holidays[0]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_delivery_holidays" value="0" <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ if (in_array("0",$byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ echo 'checked="checked"';} } ?>/>Sunday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_delivery_holidays[1]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_delivery_holidays" value="1"  <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ if (in_array("1",$byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ echo 'checked="checked"';} } ?>/>Monday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_delivery_holidays[2]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_delivery_holidays" value="2"  <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ if (in_array("2",$byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ echo 'checked="checked"';} } ?>/>Tuesday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_delivery_holidays[3]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_delivery_holidays" value="3"  <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ if (in_array("3",$byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ echo 'checked="checked"';} } ?>/>Wednesday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_delivery_holidays[4]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_delivery_holidays" value="4"  <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ if (in_array("4",$byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ echo 'checked="checked"';} } ?>/>Thursday</div>

    <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_delivery_holidays[5]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_delivery_holidays" value="5"  <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ if (in_array("5",$byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ echo 'checked="checked"';} } ?>/>Friday</div>

     <div class="byconsolewooodt_holiday_single_container"><input type="checkbox" name="byconsolewooodt_delivery_holidays[6]" class="byconsolewooodt_holidays_setting" id="byconsolewooodt_delivery_holidays" value="6"  <?php if(!empty($byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ if (in_array("6",$byconsolewooodt_holidays_setting_array['byconsolewooodt_delivery_holidays'])){ echo 'checked="checked"';} } ?>/>Saturday</div>

    </div>

</label>

<label for="field1">

 	<span>Holiday 1<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Click On Text Box To Open Calendar.</span></div></span>

   <input type="text" id="byconsolewooodt_free_delivery_pickup_holiday1" name="byconsolewooodt_free_delivery_pickup_holiday1" class="byconsolewooodt_holidays_setting" value="<?php if(!empty($byconsolewooodt_holidays_setting_array)){ echo esc_html($byconsolewooodt_holidays_setting_array['byconsolewooodt_free_delivery_pickup_holiday1']);}?>">

</label>

<label for="field1">

 	<span>Holiday 2<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Click On Text Box To Open Calendar.</span></div></span>

   <input type="text" id="byconsolewooodt_free_delivery_pickup_holiday2" name="byconsolewooodt_free_delivery_pickup_holiday2" class="byconsolewooodt_holidays_setting" value="<?php if(!empty($byconsolewooodt_holidays_setting_array)){ echo esc_html($byconsolewooodt_holidays_setting_array['byconsolewooodt_free_delivery_pickup_holiday2']);}?>">

</label>

   <label><span></span><input type="button" name="bycwooodt_holiday_setting_form_submit" id="bycwooodt_holiday_setting_form_submit" value="Update"/><img src="<?php echo esc_url_raw( plugin_dir_url( __DIR__ ) );?>/images/loading_image.gif" alt="" class="bycwooodt_admin_form_loader_display_image" id="bycwooodt_holiday_form_update_image" style="" /><img src="<?php echo esc_url_raw( plugin_dir_url( __DIR__ ) );?>/images/bycwooodt_update_succesfully_done_image.png" alt="" class="bycwooodt_admin_form_update_succesfully_done_image" id="bycwooodt_admin_holiday_form_update_succesfully_done_image" style="" />   

	</label>

</form>
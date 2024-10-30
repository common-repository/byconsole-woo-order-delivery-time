<?php $byconsolewooodt_odt_setting = get_option('byconsolewooodt_odt_setting');


parse_str($byconsolewooodt_odt_setting, $byconsolewooodt_odt_setting_array);


?>











<form name="frm" method="post" class="byconsolewooodt_fields_form" action="">





   <label for="field1">





        <span>Allow order for<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Select order for fields.</span></div></span>        





        <select name="byconsolewooodt_order_type" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields">





            <option value="both" <?php if(!empty($byconsolewooodt_odt_setting_array) && $byconsolewooodt_odt_setting_array['byconsolewooodt_order_type'] == 'both') { echo 'selected="selected"'; }?> >Both</option>





            <option value="levering" <?php if(!empty($byconsolewooodt_odt_setting_array) && $byconsolewooodt_odt_setting_array['byconsolewooodt_order_type'] == 'levering') { echo 'selected="selected"'; }?>>Delivery</option>





            <option value="take_away" <?php if(!empty($byconsolewooodt_odt_setting_array) && $byconsolewooodt_odt_setting_array['byconsolewooodt_order_type'] == 'take_away') { echo 'selected="selected"'; }?>>Pickup</option>





        </select>





    </label>    





    





    <label for="field1">





        <span>Add delivery/pickup date time in order note<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">If checked then it will add delivery/pickup date time in order note. Useful for third party apps those access order data by WooCommerce REST API</span></div></span><input type="checkbox" class="byconsolewooodt_odt_setting" name="add_delivery_pickup_date_time_in_order_note" id="byconsolewooodt_admin_fields" value="yes" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['add_delivery_pickup_date_time_in_order_note'] == 'yes') { echo 'checked="checked"'; }}?>  />





    </label>





    





    <label for="field1">

        <span>Ask for time<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Ask for delivery/pickup time</span></div></span><input type="checkbox" name="byconsolewooodt_time_field_show" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="yes" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_time_field_show'] == 'yes') { echo 'checked="checked"'; }}?>  />

    </label>

    <label for="field1">

        <span>Time field validation<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Make time selection mendatory</span></div></span><input type="checkbox" name="byconsolewooodt_time_field_validation" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="yes" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_time_field_validation'] == 'yes') { echo 'checked="checked"'; }}?>  />

    </label>

     <label for="field1">

        <span>Optionally ask for tips<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">If checked then it will optionally ask for "Tips for delivery person" on checkout page.</span></div></span><input type="checkbox" name="byconsolewooodt_tips_show_on_checkout_page" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="yes" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_tips_show_on_checkout_page'] == 'yes') { echo 'checked="checked"'; }}?>  />

    </label>

    <label for="field1">

        <span>Preorder Days<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Leave blank to not set and pre-order days, this is number of days customer can pre order in advance.<br/>(Eg: 10 Only number)</span></div></span><input type="number"  name="byconsolewooodt_preorder_days" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $byconsolewooodt_odt_setting_array['byconsolewooodt_preorder_days'] );?>" />

    </label>

    <label for="field1">

        <span>Pickup Hours<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Allowable Pickup Time.</span></div></span>From <input type="time" name="byconsolewooodt_opening_hours_from" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $byconsolewooodt_odt_setting_array['byconsolewooodt_opening_hours_from'] );?>" />

     To <input type="time" name="byconsolewooodt_opening_hours_to" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $byconsolewooodt_odt_setting_array['byconsolewooodt_opening_hours_to'] );?>" />

    </label>

    <label for="field1">

        <span>Delivery Hours<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Allowable Delivery Time.</span></div></span>From <input type="time" name="byconsolewooodt_delivery_hours_from" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $byconsolewooodt_odt_setting_array['byconsolewooodt_delivery_hours_from'] );?>" />

     To <input type="time" name="byconsolewooodt_delivery_hours_to" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $byconsolewooodt_odt_setting_array['byconsolewooodt_delivery_hours_to'] );?>" />

    </label>

    <label for="field1">

        <span>Minimum delivery Times<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> This is visible on widget front end if customer has chosen delivery.<br/>(Eg: Minimum Delivery time 30 minutes)</span></div></span><input type="number" class="byconsolewooodt_odt_setting" name="byconsolewooodt_delivery_times" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $byconsolewooodt_odt_setting_array['byconsolewooodt_delivery_times'] );?>" />

    </label>

    <label for="field1">

         <span>Display time as<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> NB: Time Slot will always be displayed as in 24 hours format. </span></div></span><select name="byconsolewooodt_display_time_as" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields">

        <option value="time_slot" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_widget_field_position'] == 'top') { echo 'checked="checked"'; }}?>>Time slot</option>

        <option value="fixed_time" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_widget_field_position'] == 'bottom') { echo 'checked="checked"'; }}?>>Fixed time</option>

        </select>

    </label> 

    <label for="field1">

        <span>Time format<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> 24 hours or 12 hours with AM / PM.</span></div></span><select name="byconsolewooodt_hours_format" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields">

        <option value="H:i A" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_hours_format'] == 'H:i A') { echo 'checked="checked"'; }}?>>24 hours(With AM/PM)</option>

        <option value="H:i" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_hours_format'] == 'H:i') { echo 'checked="checked"'; }}?>>24 hours(Without AM/PM)</option>                                    

        <option value="h:i A" <?php if(!empty($byconsolewooodt_odt_setting_array)) { if($byconsolewooodt_odt_setting_array['byconsolewooodt_hours_format'] == 'h:i A') { echo 'checked="checked"'; }}?>>12 hours</option>

        </select>

    </label>                 

    <label for="field1">

        <span>Same day delivery charge<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> Extra charge to add for same day delivery.</span></div></span><?php echo (get_woocommerce_currency_symbol());?><input type="number" name="byconsolewooodt_same_day_delivery_charge" class="byconsolewooodt_odt_setting" id="byconsolewooodt_admin_fields" value="<?php if(isset($byconsolewooodt_odt_setting_array['byconsolewooodt_same_day_delivery_charge']) && !empty($byconsolewooodt_odt_setting_array['byconsolewooodt_same_day_delivery_charge'])){echo esc_html( $byconsolewooodt_odt_setting_array['byconsolewooodt_same_day_delivery_charge']);}else{echo 0;}?>">

    </label>                 

    <label><span></span><input type="button" name="byconsolewooodt_odt_setting_form_submit" id="byconsolewooodt_odt_setting_form_submit" value="Update"/><img src="<?php echo esc_url_raw( plugin_dir_url( __DIR__ ) );?>/images/loading_image.gif" alt="" class="bycwooodt_admin_form_loader_display_image" id="bycwooodt_odt_form_update_image" style="" />

    <img src="<?php echo esc_url_raw( plugin_dir_url( __DIR__ ) );?>/images/bycwooodt_update_succesfully_done_image.png" alt="" class="bycwooodt_admin_form_update_succesfully_done_image" id="bycwooodt_admin_odt_form_update_succesfully_done_image" style="" />    

    </label>                                

</form>
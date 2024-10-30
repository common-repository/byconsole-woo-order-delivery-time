<?php $bycwooodt_language_translate = get_option('bycwooodt_language_translate');


parse_str($bycwooodt_language_translate, $bycwooodt_language_translate_array);



/*echo '<pre>';



print_r($bycwooodt_language_translate_array);



echo '</pre>';*/



?>



<form name="frm" method="post" class="byconsolewooodt_language_fields_form" action="">



    <label for="field1">



        <span>Checkout page section heading<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Texts to display on checkout page as section heading.<br/>(Eg: Desired delivery date and time)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="checkout_page_section_heading_label" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['checkout_page_section_heading_label'] );?>" />



    </label>



    



    <label for="field1">



        <span>Checkout page order type label<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">This will ask customer if the order is for delivery or self pickup on checkout page.<br/>(Eg: Select order type)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="checkout_page_order_type_label" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['checkout_page_order_type_label'] );?>" />



    </label>



    



    <label for="field1">



        <span>Pickup label text<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Pickup label shown on checkout page and in widget.</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_takeaway_lable" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['byconsolewooodt_takeaway_lable'] );?>" />



    </label>



    



    <label for="field1">



        <span>Delivery label text<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> Delivery label shown on checkout page and in widget.</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_delivery_lable" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['byconsolewooodt_delivery_lable'] );?>" />



    </label>



                                    



    <label for="field1">



        <span>Calendar label on checkout page<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Displayed as calendar label on checkout page.<br />(Eg: Select date)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_chekout_page_date_label" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['byconsolewooodt_chekout_page_date_label'] );?>" />



    </label>



    



    <label for="field1">



        <span>Time select label on checkout page<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Displayed as time drop-down label on checkout page.<br />(Eg: Select time)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_chekout_page_time_label" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['byconsolewooodt_chekout_page_time_label'] );?>" />



    </label>



    



    <label for="field1">



        <span>Hours text<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> Will be shown in time slot as time unit.<br />(Eg: Hrs)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_chekout_page_hrs_value" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['byconsolewooodt_chekout_page_hrs_value'] );?>" />



    </label>                               



    



    



    <label for="field1">



        <span>Select pickup location label on checkout page<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> This will ask customer to choose a pickup location on checkout page, in case Multiple Pickup Location is enabled on Location Settings page<br/>(Eg: Select pickup location)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="checkout_page_select_pickup_location_label" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['checkout_page_select_pickup_location_label'] );?>" />



    </label>



    



     <label for="field1">



        <span>Date field text<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Placeholder text for date-picker calendar input box.</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_date_field_text" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['byconsolewooodt_date_field_text'] );?>" />



    </label>



    



     <label for="field1">



        <span>Time field text



        <div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Placeholder text for time drop-down input box.</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_time_field_text" id="byconsolewooodt_admin_fields" value="<?php echo esc_html( $bycwooodt_language_translate_array['byconsolewooodt_time_field_text'] );?>" />



    </label>



    



    <label for="field1">



        <span>The order will be delivered



        <div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> This is the text is shown on Order details page of customer side.<br/>(Eg: The order will be delivered on [byc_delivery_date] at [byc_delivery_time])</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_orders_delivered" id="byconsolewooodt_admin_fields" value="<?php echo esc_html($bycwooodt_language_translate_array['byconsolewooodt_orders_delivered']);?>" />



    </label>



    



    <label for="field1">



        <span>The order can be Picked up 



        <div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> This is the text is shown on Order details page of customer side.<br/>(Eg: The order can be Picked Up on [byc_pickup_date] at [byc_pickup_time])</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_orders_pick_up" id="byconsolewooodt_admin_fields" value="<?php echo esc_html($bycwooodt_language_translate_array['byconsolewooodt_orders_pick_up']);?>" />



    </label>



    



    <label for="field1">



        <span>Tips label text<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">This text will displayed on order summary table as extra fees paid for.<br />(Eg: Tips to delivery person)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_chekout_page_tips_label" id="byconsolewooodt_admin_fields" value="<?php echo esc_html($bycwooodt_language_translate_array['byconsolewooodt_chekout_page_tips_label']);?>" />



    </label>



    



    <label for="field1">



        <span>Delivery tips text label on checkout page<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">This text will be displayed on order summary table, email & order details page as extra fees paid for<br/>(Eg: Tips to delivery person)</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_chekout_page_delivery_tip_label" id="byconsolewooodt_admin_fields" value="<?php echo esc_html($bycwooodt_language_translate_array['byconsolewooodt_chekout_page_delivery_tip_label']);?>" />



    </label>



    



    <label for="field1">



        <span>No tips text<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> Texts for "No tips" option, like "Not this time!"</span></div></span><input type="text" class="byconsolewooodt_language_translator" name="byconsolewooodt_select_tip_lable_text" id="byconsolewooodt_admin_fields" value="<?php echo esc_html($bycwooodt_language_translate_array['byconsolewooodt_select_tip_lable_text']);?>" />



    </label>                                



    



    <label><span></span><input type="button" name="bycwooodt_language_translate_form_submit" id="bycwooodt_language_translate_form_submit" class="bycwooodt_language_translate_form" value="Update"/><img src="<?php echo esc_url_raw(plugin_dir_url( __DIR__ ));?>/images/loading_image.gif" alt="" class="bycwooodt_admin_form_loader_display_image" id="bycwooodt_language_translate_form_update_image" style="" /><img src="<?php echo esc_url_raw(plugin_dir_url( __DIR__ ));?>/images/bycwooodt_update_succesfully_done_image.png" alt="" class="bycwooodt_admin_form_update_succesfully_done_image" id="bycwooodt_admin_language_form_update_succesfully_done_image" style="" />



    </label>



        



</form>
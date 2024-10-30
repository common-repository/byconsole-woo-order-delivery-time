<?php $byconsolewooodt_extra_options = get_option('byconsolewooodt_extra_options');


parse_str($byconsolewooodt_extra_options, $byconsolewooodt_extra_options_array);


//print_r($byconsolewooodt_extra_options_array);


$byconsolewooodt_widget_field_position = $byconsolewooodt_extra_options_array['byconsolewooodt_widget_field_position'];


$byconsolewooodt_fields_position = $byconsolewooodt_extra_options_array['byconsolewooodt_fields_position'];


?>





<form name="frm" method="post" class="byconsolewooodt_extra_options_fields_form" action="">








   <label for="field1">





        <span>Position of the text in the orders page<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext"> Choose if tracking text have to be shown on top (before order product list) or bottom (after product list). </span></div></span>


        


        <select name="byconsolewooodt_widget_field_position" class="byconsolewooodt_extra_options_fields" id="byconsolewooodt_admin_fields">





        <option value="top" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_widget_field_position == 'top') { echo 'selected="selected"'; }?>>Show on Top</option>





        <option value="bottom" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_widget_field_position == 'bottom') { echo 'selected="selected"'; }?>>Show on Bottom</option>





        </select>





    </label>





   <label for="field1">





        <span>ODT Fields position<div class="tooltip"><span class="material-icons tab-icon">help</span><span class="tooltiptext">Set your pickup delivery date time as you want. default it is before billing address.</span></div></span>        





        <select name="byconsolewooodt_fields_position" class="byconsolewooodt_extra_options_fields" id="byconsolewooodt_admin_fields">


        


        	<option value="">Select ODT Fields Position</option>





            <option value="woocommerce_checkout_before_customer_details" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_fields_position == 'woocommerce_checkout_before_customer_details') { echo 'selected="selected"'; }?> >Before User Billing Address</option>


            


            <option value="woocommerce_after_checkout_billing_form" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_fields_position == 'woocommerce_after_checkout_billing_form') { echo 'selected="selected"'; }?> >After User Billing Address</option>


            


            <option value="woocommerce_before_checkout_shipping_form" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_fields_position== 'woocommerce_before_checkout_shipping_form') { echo 'selected="selected"'; }?> >Before User Shipping Address</option>


            


            <option value="woocommerce_after_checkout_shipping_form" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_fields_position == 'woocommerce_after_checkout_shipping_form') { echo 'selected="selected"'; }?> >After User Shipping Address</option>


            


            <option value="woocommerce_before_order_notes" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_fields_position == 'woocommerce_before_order_notes') { echo 'selected="selected"'; }?> >Before User Order Notes</option>


            


            <option value="woocommerce_after_order_notes" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_fields_position == 'woocommerce_after_order_notes') { echo 'selected="selected"'; }?> >After User Order Notes</option>


            


            <option value="woocommerce_checkout_before_order_review" <?php if(!empty($byconsolewooodt_extra_options_array) && $byconsolewooodt_fields_position == 'woocommerce_checkout_before_order_review') { echo 'selected="selected"'; }?> >Before User Order Section</option>





            





        </select>





    </label>    





    





    <label><span></span><input type="button" name="byconsolewooodt_extra_options_form_submit" id="byconsolewooodt_extra_options_form_submit" value="Update"/><img src="<?php echo esc_html(plugin_dir_url( __DIR__ ));?>/images/loading_image.gif" alt="" class="bycwooodt_admin_form_loader_display_image" id="bycwooodt_extra_options_form_update_image" style="" />





    <img src="<?php echo esc_html(plugin_dir_url( __DIR__ ));?>/images/bycwooodt_update_succesfully_done_image.png" alt="" class="bycwooodt_admin_form_update_succesfully_done_image" id="bycwooodt_admin_extra_options_form_update_succesfully_done_image" style="" />    





    </label>                                





</form>
<?php $byconsolewooodt_location_setting = get_option('byconsolewooodt_location_setting');

parse_str($byconsolewooodt_location_setting, $byconsolewooodt_location_setting_array);

?>

<script type="text/javascript">

jQuery(document).ready(function() {	

//byconsolewooodt_pickup_location_count=<?php //echo count(get_option('byconsolewooodt_pickup_location'));?>;

byconsolewooodt_pickup_location_count= 

<?php  if (empty($byconsolewooodt_location_setting_array)){ echo '0' ;} else { echo esc_html( end($byconsolewooodt_location_setting_array) ); }?>

//alert(byconsolewooodt_pickup_location_count);

jQuery('#btn_pickup_add_another').click(function(){			 

// byconsolewooodt_pickup_location_count++;

byconsolewooodt_pickup_location_count+=1;

var bycwooodt_pickup_location_array_last_key = jQuery("#bycwooodt_pickup_location_array_last_key").val();

var bycwooodt_pickup_location_array_key_increment = parseInt(bycwooodt_pickup_location_array_last_key)+1;

//alert(bycwooodt_pickup_location_array_key_increment);

jQuery("#bycwooodt_pickup_location_array_last_key").val(bycwooodt_pickup_location_array_key_increment);











//alert(byconsolewooodt_pickup_location_count);











jQuery('.pickup_options').append('<fieldset class="fldst pickup_location'+bycwooodt_pickup_location_array_key_increment+'"><input type="checkbox" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][location_disable]" id="byconsolewooodt_pickup_location" value="disable"  style="" class="pro_only bycwooodt_location_disable_field" /><input type="text" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][location]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_location_setting bycwooodt_location_field" placeholder="Pickup Location" value="" onchange="" style="" /><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][start_time]" id="byconsolewooodt_pickup_location" value="" style="" class="pro_only bycwooodt_location_stattime_field" /><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][end_time]" id="byconsolewooodt_pickup_location" value="" style="" class="pro_only bycwooodt_location_endtime_field" /><input type="text" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][min_cart_value]" id="byconsolewooodt_pickup_location" placeholder="Pickup Price" value="" style="" class="pro_only bycwooodt_location_mincartamount_field" /><input type="text" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][shipping_cost]" id="byconsolewooodt_pickup_location" placeholder="Shipping Cost" value="" style="" class="pro_only bycwooodt_location_shippingcost_field" /><input type="text" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][email_id_on_each_location]" id="byconsolewooodt_pickup_location" placeholder="Enter Email Id" class="email_field pro_only bycwooodt_email_shippingcost_field" value="" style="" /><span id="del_pickup" class="pickup_location'+bycwooodt_pickup_location_array_key_increment+'" style="cursor:pointer;">X</span><br /><div style="float: left;"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sun][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" class="pro_only"><p style="margin-top: 8px;">Sun</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sun][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sun][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sun][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sun][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /></div></div>&nbsp;<div style="float: left;margin-left: 5px;"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][mon][service]" value="yes" checked="checked" style="margin-top: 10px;width: 5px;float:left;" class="pro_only"><p style="margin-top: 8px;">Mon</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][mon][start_time]" id="byconsolewooodt_pickup_location" value="10:00" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][mon][end_time]" id="byconsolewooodt_pickup_location" value="20:00" style="width: 95%;" class="pro_only" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][mon][break_start_time]" id="byconsolewooodt_pickup_location" value="14:30" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][mon][break_end_time]" id="byconsolewooodt_pickup_location" value="15:15" style="width: 95%;" class="pro_only" /></div></div>&nbsp;<div style="float: left;margin-left: 5px;"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][tue][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" class="pro_only"><p style="margin-top: 8px;">Tue</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][tue][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][tue][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][tue][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][tue][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /></div></div>&nbsp;<div style="float: left;margin-left: 5px;"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][wed][service]" value="yes" checked="checked" style="margin-top: 10px;width: 5px;float:left;" class="pro_only"><p style="margin-top: 8px;">Wed</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][wed][start_time]" id="byconsolewooodt_pickup_location" value="09:00" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][wed][end_time]" id="byconsolewooodt_pickup_location" value="18:00" style="width: 95%;" class="pro_only" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][wed][break_start_time]" id="byconsolewooodt_pickup_location" value="14:00" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][wed][break_end_time]" id="byconsolewooodt_pickup_location" value="15:00" style="width: 95%;" class="pro_only" /></div></div>&nbsp;<div style="float: left;margin-left: 5px;"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][thu][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" class="pro_only"><p style="margin-top: 8px;">Thu</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][thu][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][thu][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][thu][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][thu][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /></div></div>&nbsp;<div style="float: left;margin-left: 5px;"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][fri][service]" value="yes" checked="checked" style="margin-top: 10px;width: 5px;float:left;" class="pro_only"><p style="margin-top: 8px;">Fri</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][fri][start_time]" id="byconsolewooodt_pickup_location" value="09:30" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][fri][end_time]" id="byconsolewooodt_pickup_location" value="19:30" style="width: 95%;" class="pro_only" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][fri][break_start_time]" id="byconsolewooodt_pickup_location" value="13:30" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][fri][break_end_time]" id="byconsolewooodt_pickup_location" value="14:15" style="width: 95%;" class="pro_only" /></div></div>&nbsp;<div style="float: left;margin-left: 5px;"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sat][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" /><p style="margin-top: 8px;">Sat</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sat][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sat][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sat][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/><input type="time" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][sat][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /></div></div><p style="clear: both;background-color: #0000005c;color: #fff;width: 87%;font-weight: 600;padding: 5px 7px;font-size: 13px;text-align: center;">Please note - break time will be between start time and end time. If no break time then use same time i.e 2:00 P.M - 2:00 P.M</p><div style="float: left; clear:both; width:12%;display:none; "><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Hours Limit</p><label style="float:left; padding:7px;">Limit</label><input type="text" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][threshold_hours]" id="byconsolewooodt_pickup_location" value="" style="width: 50%;" class="pro_only" /></div><div style="float: left; width:12%;display:none;"><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Minutes Limit</p><label style="float:left; padding:6px;">Limit</label><input type="text" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][threshold_minutes]" id="byconsolewooodt_pickup_location" value="" style="width:50%; padding:7px;" class="pro_only" /></div><div style="float: left; width:32%;display:none;"><p style="margin-top: 8px; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Orders Limit</p><label style="float:left; padding:7px;">order(s)</label><input type="text" name="byconsolewooodt_pickup_location['+bycwooodt_pickup_location_array_key_increment+'][max_order_by_threshold_hours]" id="byconsolewooodt_pickup_location" value="" style="width: 50%;" class="pro_only" /><label style="padding:7px;"></label></div></div><div style="float: left; width:38%; padding-top:25px;display:none;"><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">In order to make this function work, please make sure "Limit [X] number of orders per [Y] hour(s)" has been checked on WooODT Features Settings page and <b style="color:#FF5722;">"Display time format as" is select as Fixed Time on ODT Management page.</b></p></div></fieldset><br />');











});











});











</script>











<?php











//$byconsolewooodt_pickup_loacation= unserialize(get_option('byconsolewooodt_pickup_location'));











//$byconsolewooodt_pickup_loacation_array= get_option('byconsolewooodt_pickup_location');











//print_r( $byconsolewooodt_pickup_loacation_array);











?>











<div style="width:100%;">











<div class="bycwooodt_location_disable_header"><b>Disable</b></div>











<div class="location_lable bycwooodt_location_header"><b>Location</b></div>











<!--<div class="latitude_lable" style="width: 10%;float: left;display:none;"><b>Latitude</b></div>











<div class="longitude_lable" style="width: 11%;float: left;display:none;"><b>Longitude</b></div>-->











<div class="bycwooodt_location_starttime_header"><b>Start Time</b></div>











<div class="bycwooodt_location_endtime_header"><b>End Time</b></div>











<div class="bycwooodt_location_mincartamount_header"><b>Min Cart Price</b></div>











<div class="bycwooodt_location_shippingcost_header" style=""><b>Shipping Cost</b></div>











<div class="bycwooodt_location_emailid_header"><b>Email Id</b></div>











</div><br />











<?php











/*echo '<pre>';











print_r($byconsolewooodt_location_setting_array['byconsolewooodt_pickup_location']);











echo '</pre>';*/











?>











<form name="frm" method="post" class="byconsolewooodt_location_fields_form" action="">











<?php











$byconsolewooodt_pickup_location_array = $byconsolewooodt_location_setting_array['byconsolewooodt_pickup_location'];











if(!empty($byconsolewooodt_pickup_location_array)){











end($byconsolewooodt_pickup_location_array);         // move the internal pointer to the end of the array











$lastKey = key($byconsolewooodt_pickup_location_array); 











$pickup_i=0;











$week_day_name_array = array("sun", "mon", "tue", "wed", "thu", "fri", "sat");











foreach ($byconsolewooodt_pickup_location_array as $pickup_loacation_single_array_key => $pickup_loacation_single_array_value)











{











//print_r($byconsolewooodt_pickup_loacation_single_array);	











//	print_r($pickup_loacation_single_array_key);











//	echo '<br />';











//	print_r($pickup_loacation_single_array_value);











//	echo '<hr />';











//foreach($pickup_location_array_value as $pickup_location_single_array_key => $pickup_location_single_array_value)











//{











//print_r($pickup_location_single_array_value);











foreach($pickup_loacation_single_array_value as $pickup_loacation_single_array_value_key_1 => $pickup_loacation_single_array_value_val_1)











{











//print_r($pickup_loacation_single_array_value_key_1);











//echo '<hr />';











//print_r($pickup_loacation_single_array_value_val_1);











}











if(!empty($pickup_loacation_single_array_value['week_day']))











{











$byconsolewoodt_weekday_name_array = $pickup_loacation_single_array_value['week_day'];











}











if(!empty($pickup_loacation_single_array_value['week_day_start_time']))











{











$byconsolewoodt_week_day_start_time_array = $pickup_loacation_single_array_value['week_day_start_time'];











}











if(!empty($pickup_loacation_single_array_value['week_day_end_time']))











{











$byconsolewoodt_week_day_end_time_array = $pickup_loacation_single_array_value['week_day_end_time'];











}











//print_r($byconsolewoodt_weekday_name_array);











//print_r($byconsolewoodt_week_day_start_time_array);











//print_r($byconsolewoodt_week_day_end_time_array);











if(!empty($byconsolewoodt_week_day_start_time_array))











{











foreach($byconsolewoodt_week_day_start_time_array as $byconsolewoodt_week_day_start_time_single_array)











{











$byconsolewoodt_week_day_start_time_single_array; 











}











}











?>











<fieldset class="fldst pickup_location<?php echo esc_attr($pickup_i);?>">











<input type="checkbox" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][location_disable]" id="byconsolewooodt_pickup_location" class="bycwooodt_location_disable_field" class="pro_only" 











<?php if(!empty($pickup_loacation_single_array_value['location_disable']))











{











if($pickup_loacation_single_array_value['location_disable']=='on') {?> checked="checked" <?php } 











}











?>  />











<input type="text" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][location]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_location_setting bycwooodt_location_field" value="<?php echo esc_attr( $pickup_loacation_single_array_value['location'] );?>" style="" onchange=""/>











<!--<input type="text" name="byconsolewooodt_pickup_location[<?php //echo $pickup_loacation_single_array_key;?>][address_latitude]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_address_latitude" value="" readonly style="width:10%; padding:7px; display:none;" />











<input type="text" name="byconsolewooodt_pickup_location[<?php //echo $pickup_loacation_single_array_key;?>][address_longitude]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_address_longitude" value=""  readonly="readonly" style="width:10%; padding:7px; display:none;" />-->











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][start_time]" class="bycwooodt_location_stattime_field" id="byconsolewooodt_pickup_location" value="" style="" class="pro_only" />











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][end_time]" id="byconsolewooodt_pickup_location" value="" class="bycwooodt_location_endtime_field" style="" class="pro_only" />











<input type="text" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][min_cart_value]" id="byconsolewooodt_pickup_location"  class="bycwooodt_location_mincartamount_field" value="" style="" class="pro_only" />











<input type="text" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][shipping_cost]" id="byconsolewooodt_pickup_location" value="" style="" class="pro_only bycwooodt_location_shippingcost_field" />











<input type="text" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][email_id_on_each_location]" id="byconsolewooodt_pickup_location" class="email_field pro_only bycwooodt_email_shippingcost_field" value="" style="" />











<span  id="del_pickup" class="pickup_location<?php echo esc_attr( $pickup_i ); ?>">X</span>











<br />











<div style="float: left;">











<input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sun][service]" value="" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" />











<p style="margin-top: 8px; text-transform:capitalize;">Sun</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sun][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sun][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











<div style="background-color:#ffa500;padding:2px;">











<p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sun][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sun][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











</div>











</div>











<div style="float: left;">











<input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][mon][service]" value="" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" />











<p style="margin-top: 8px; text-transform:capitalize;">Mon</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][mon][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][mon][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











<div style="background-color:#ffa500;padding:2px;">











<p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][mon][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][mon][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











</div>











</div>











<div style="float: left;">











<input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][tue][service]" value="" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" />











<p style="margin-top: 8px; text-transform:capitalize;">Tue</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][tue][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][tue][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











<div style="background-color:#ffa500;padding:2px;">











<p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][tue][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][tue][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











</div>











</div>











<div style="float: left;">











<input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][wed][service]" value="" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" />











<p style="margin-top: 8px; text-transform:capitalize;">Wed</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][wed][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][wed][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











<div style="background-color:#ffa500;padding:2px;">











<p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][wed][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][wed][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











</div>











</div>











<div style="float: left;">











<input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][thu][service]" value="" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" />











<p style="margin-top: 8px; text-transform:capitalize;">Thu</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][thu][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][thu][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











<div style="background-color:#ffa500;padding:2px;">











<p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][thu][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][thu][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











</div>











</div>











<div style="float: left;">	











<input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][fri][service]" value="" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" />











<p style="margin-top: 8px; text-transform:capitalize;">Fri</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][fri][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][fri][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











<div style="background-color:#ffa500;padding:2px;">











<p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][fri][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][fri][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











</div>











</div>











<div style="float: left;">











<input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sat][service]" value="" style="margin-top: 10px;width: 5px;float:left;" class="pro_only" />











<p style="margin-top: 8px; text-transform:capitalize;">Sat</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sat][start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sat][end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











<div style="background-color:#ffa500;padding:2px;">











<p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sat][break_start_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" /><br/>











<input type="time" name="byconsolewooodt_pickup_location[<?php echo esc_attr( $pickup_loacation_single_array_key );?>][sat][break_end_time]" id="byconsolewooodt_pickup_location" value="" style="width: 95%;" class="pro_only" />











</div>











</div>











<p style="clear: both;background-color: #0000005c;color: #fff;width: 84%;font-weight: 600;padding: 5px 7px;font-size: 13px;text-align: center;">Please note - break time will be between start time and end time. If no break time then use same time i.e 2:00 P.M - 2:00 P.M</p>











<div style="float: left; clear:both; width:12%;display:none;">











</div>











<div style="float: left; width:12%;display:none;">











</div>











<div style="float: left; width:32%;display:none;">











</div>











<div style="float: left; width:38%; padding-top:25px;display:none;">











</div>











</fieldset><br />











<?php 











$pickup_i++;











echo '<div class="after_location_field" style="border: 1px dotted #ccc;margin-bottom: 30px; margin-top: 15px;width: 90%;"></div>';











}











}





else{





 $lastKey = 0;





}





?>











<div class="pickup_options">











</div>  











<fieldset class="fldst">











<input type="button" id="btn_pickup_add_another" value="Add another" class="" />











</fieldset>











<input type="hidden" name="bycwooodt_pickup_location_array_last_key" id="bycwooodt_pickup_location_array_last_key" value="<?php echo esc_html( $lastKey );?>" />











<label><span></span><input type="button" name="bycwooodt_location_setting_form_submit" id="bycwooodt_location_setting_form_submit" value="Update"/><img src="<?php echo esc_url( plugin_dir_url( __DIR__ ) );?>/images/loading_image.gif" alt="" class="bycwooodt_admin_form_loader_display_image" id="bycwooodt_location_form_update_image" style="" />    











<img src="<?php echo esc_url( plugin_dir_url( __DIR__ ) );?>/images/bycwooodt_update_succesfully_done_image.png" alt="" class="bycwooodt_admin_form_update_succesfully_done_image" id="bycwooodt_admin_location_form_update_succesfully_done_image" style="" />





</label>











</form>
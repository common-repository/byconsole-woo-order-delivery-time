<?php function byconsolewooodt_admin_language_translator_settings_form(){



	error_reporting(0);



	?>



    



	<div class="wrap">



        <h1></h1>



        <!--form method="post" class="form_byconsolewooodt_free_plugin_settings" action="options.php">



				<?php



                settings_fields("language_translator");



                do_settings_sections("byconsolewooodt_free_language_translator_options");  



                //submit_button();



				?> 



		</form-->



        



   <!-- <div class="bycwooodt_diffence_free_pro_content">

        <div onclick="bycwooodt_diffence_free_pro_togglePopup()" class="close-btn">×</div>

        <h3>Our others products</h3>

    </div>-->



  



    <script type="text/javascript">



      



        // Function to show and hide the popup



        function bycwooodt_diffence_free_pro_togglePopup() {



            jQuery(".bycwooodt_diffence_free_pro_content").toggle(500);



        }



    </script>



        



        <div class="byc_site-wrapper">



        	<div class="byc_heading_container">



                <section class="article-wrapper">



                    <div class="article-container">



                        <div class="article-block">



                            <div class="entry-content">



                                <h1><span>Byconsole ODT Setting</span></h1>



                                <!--<button onclick="bycwooodt_diffence_free_pro_togglePopup()" class="byconsole_difference_between_free_pro_button">Difference between free and pro</button>-->



                                <p><a href="https://plugins.byconsole.com/product/wooodt-extended-woocommerce-delivery-date-plugin/" target="_blank">Get pro version</a></p>



                            </div>



                        </div>



                    </div>



                </section>



            </div>



			<section class="tabs-wrapper">



				<div class="tabs-container">



					<div class="tabs-block">



						<div id="tabs-section" class="tabs">



							<ul class="tab-head">								



                                <li>



									<a href="#tab-1" class="tab-link active"> <span class="material-icons tab-icon">event</span> <span class="tab-label">Delivery Pickup Calendar</span></a>



								</li>



                                <li>



									<a href="#tab-2" class="tab-link"> <span class="material-icons tab-icon">settings</span> <span class="tab-label">ODT Settings</span></a>



								</li>



								<li>



									<a href="#tab-3" class="tab-link"> <span class="material-icons tab-icon">holiday_village</span> <span class="tab-label">Holiday Management</span></a>



								</li>



								<li>



									<a href="#tab-4" class="tab-link"> <span class="material-icons tab-icon">place</span> <span class="tab-label">Location Settings</span></a>



								</li>



								<li>



									<a href="#tab-5" class="tab-link"> <span class="material-icons tab-icon">translate</span> <span class="tab-label">Language Translate</span></a>



								</li>

                                

                                <li>



									<a href="#tab-6" class="tab-link"> <span class="material-icons tab-icon">attachment</span> <span class="tab-label">Extra Settings</span></a>



								</li>



                                <li>



									<a href="#tab-7" class="tab-link"> <span class="material-icons tab-icon">dashboard_customize</span> <span class="tab-label">Custom Modification Request</span></a>



								</li>



                                 <li>



									<a href="#tab-8" class="tab-link"> <span class="material-icons tab-icon">compare_arrows</span> <span class="tab-label">Difference between free and pro</span></a>



								</li>



							</ul>



                            



                            <section id="tab-1" class="tab-body entry-content active active-content">								



								 



								<div class="form-style-2">



                                <div class="form-style-2-heading">Delivery Pickup Calendar</div>                                



                                	<?php include('bycwooodt_pickup_delivery_calender.php');?>



                                </div> 



                                



							</section>







							<section id="tab-2" class="tab-body entry-content">



								<div class="form-style-2">



                                <div class="form-style-2-heading">ODT Setting</div>



								



                                	<?php include('bycwooodt_odt_fields_setting.php');?>



                                </div>



							</section>







							<section id="tab-3" class="tab-body entry-content">



                                <div class="form-style-2">



                                <div class="form-style-2-heading">Holiday Managennemt</div>



                                	<?php include('bycwooodt_holiday_fields_setting.php');?>



                                </div>



                                



							</section>







							<section id="tab-4" class="tab-body entry-content">



                                <div class="form-style-2">



                                <div class="form-style-2-heading">Location Setting</div>



									<?php include('bycwooodt_location_fields_setting.php');?>



								</div>



							</section>







							<section id="tab-5" class="tab-body entry-content">



                                <div class="form-style-2">



                                <div class="form-style-2-heading">Language Translate</div>



                                	<?php include('bycwooodt_language_fields_setting.php');?>



                                </div>                               



							</section>



				

							<section id="tab-6" class="tab-body entry-content">



                                <div class="form-style-2">



                                <div class="form-style-2-heading">Extra options</div>



                                	<?php include('bycwooodt_extra_fields_setting.php');?>



                                </div> 



								



							</section>

                            



                            <section id="tab-7" class="tab-body entry-content">



                                <div class="form-style-2">



                                <div class="form-style-2-heading">Custom Modification Request</div>

									Hi.....

                                	<?php include('bycwooodt_custom_modification_request.php');?>



                                </div> 



								



							</section>



                            



                             <section id="tab-8" class="tab-body entry-content">



                                <div class="form-style-2">



                                <div class="form-style-2-heading">Free version and Pro version</div>

                                

                                <style>

									.bycwooodt_two_plugin_compare_heading{font-size: 20px;

text-decoration: underline;

padding: 20px 0px 20px 0px;

color: #ffa500;

font-weight: bold;}

								</style>



                                	<table style="text-align:center;">







  <tr>







    <th style="text-align:center;">SL No</th>







    <th style="width:50%; text-align:center;">Features</th>







    <th style="text-align:center;">WooODT Lite</th>







    <th style="text-align:center;"><a href="https://plugins.byconsole.com/product/wooodt-extended-woocommerce-delivery-date-plugin/" target="_blank">WooODT Pro</a></th>







  </tr>







  <tr>

      <td style="text-align:center;"></td>

      <td class="bycwooodt_two_plugin_compare_heading" style="text-align:left;">Date, time, location & other fields</td>

      <td style="color:green;"></td>

      <td style="color:green;"></td>

  </tr>



  <tr>

      <td style="text-align:center;">1</td>

      <td style="text-align:left;"><?php echo esc_html( __('Make WooCommerce store as take away only or delivery only or keep both the options','byconsole-woo-order-delivery-time') );?></td>

      <td style="color:green;">&#10004;</td>

      <td style="color:green;">&#10004;</td>

  </tr>







  







  <tr>







    <td style="text-align:center;">2</td>







    <td style="text-align:left;"><?php echo esc_html( __('Ask for order type as pickup or delivery at top of checkout page.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">3</td>







  <td style="text-align:left;"><?php echo esc_html( __('Ask for  delivery area or ask to select a pickup point when multiple location is available','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:green;">&#10004;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">4</td>







  <td style="text-align:left;"><?php echo esc_html( __('Ask to choose a date from a date picker calendar on checkout page & on widget','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:green;">&#10004;</td>







   <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">5</td>







  <td style="text-align:left;"><?php echo esc_html( __('Ask to choose preferred time slot on checkout page & on widget.','byconsole-woo-order-delivery-time') );?>)</td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">6</td>







  <td style="text-align:left;"><?php echo esc_html( __('Option to make time slot as optional or even disable time slot on checkout page & on widget.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">7</td>







  <td style="text-align:left;"><?php echo esc_html( __('Hide shipping address fields on checkout page when its a pickup order.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">8</td>







  <td style="text-align:left;"><?php echo esc_html( __('Option to remove chosen fields from billing & shipping address.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  	<td style="text-align:center;">9</td>







    <td style="text-align:left;"><a href="https://blog.byconsole.com/how-to-disable-delivery-date-time-location-selection-on-certain-woocommerce-shipping-zone/">No delivery date, time asked when order requires shipping instead of delivery (based on zip codes)</a> <span class="added_on_version">(from v-1.0.6.0)</span> (require <a href="https://www.plugins.byconsole.com/product/weight-based-dynamic-shipping-charge-for-woocommerce/">add-on plugin,</a>&nbsp;read <a href="http://www.blog.byconsole.com/how-to-disable-delivery-date-time-location-selection-on-certain-woocommerce-shipping-zone/" target="_blank" rel="noopener noreferrer">documentation)</a></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  <tr>







    <td style="text-align:center;">10</td>







    <td style="text-align:left;"><?php echo esc_html( __('Automated shipping based on customer’s order type selection','byconsole-woo-order-delivery-time') );?></td>







   <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>

  

  <tr>

      <td style="text-align:center;"></td>

      <td class="bycwooodt_two_plugin_compare_heading" style="text-align:left;">Time slots & schedules</td>

      <td style="color:green;"></td>

      <td style="color:green;"></td>

  </tr>







  <tr>







  	<td style="text-align:center;">11</td>







    <td style="text-align:left;"><?php echo esc_html( __('Limit number of pickup orders per time slot. ','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  <tr>







  	<td style="text-align:center;">12</td>







    <td style="text-align:left;"><?php echo esc_html( __('Limit how many times a particular delivery slot can be booked.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  <tr>







    <td style="text-align:center;">13</td>







    <td style="text-align:left;"><?php echo esc_html( __('Minimum waiting time / lead time for same day delivery & same day pickup separately. ','byconsole-woo-order-delivery-time') );?></td>







   <td style="color:red;">&#10008;</td>







   <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">14</td>







  <td style="text-align:left;"><?php echo esc_html( __('Order placing cutoff time for same day delivery & same day pickup. ','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">15</td>







  <td style="text-align:left;"><?php echo esc_html( __('Cutoff time for next day delivery & next day pickup.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">16</td>







  <td style="text-align:left;"><?php echo esc_html( __('Each pickup points has it’s own different operating time for each of seven days. ','byconsole-woo-order-delivery-time') );?></td>







   <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">17</td>







  <td style="text-align:left;"><?php echo esc_html( __('Different delivery slots depending on week days(all 7 days) for each delivery area/locations/street.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">18</td>







  <td style="text-align:left;"><?php echo esc_html( __('Minimum pre-order days.','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">19</td>







  <td style="text-align:left;"><?php echo esc_html( __('Automatic 30 minutes slot creation by plugin itself (Number of booking can’t be limited).','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">20</td>







  <td style="text-align:left;"><?php echo esc_html( __('Create your own custom time slots (You can limit booking numbers for each slot ).','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">21</td>







  <td style="text-align:left;"><?php echo esc_html( __('Automatically adjust pre-order days for orders placed on holiday days / closing days. ','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







  







  <tr>







  <td style="text-align:center;">22</td>







  <td style="text-align:left;"> <?php echo esc_html( __('Report generation for upcoming deliveries/pickups by calendar date search','byconsole-woo-order-delivery-time') );?></td>







    <td style="color:red;">&#10008;</td>







    <td style="color:green;">&#10004;</td>







  </tr>







 



</table>



                                </div> 



								



							</section>



                            



						</div>



					</div>



				</div>



			</section>			



		</div>



    </div>



    



    



<?php } 











?>
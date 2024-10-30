<?php function byconsolewooodt_admin_order_pickup_delivery_settings_form(){ error_reporting(0);?>

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

                                <h1 style="clear:both;"><span>Byconsole ODT Setting</span></h1>

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


color: #0d8abb;


font-weight: bold;}


								</style>


									<?php include('bycwooodt_odt_compare_free_and_pro_version_setting.php');?>


                                	


                                </div> 

								

							</section>

                            

						</div>

					</div>

				</div>

			</section>			

		</div>

<?php } ?>
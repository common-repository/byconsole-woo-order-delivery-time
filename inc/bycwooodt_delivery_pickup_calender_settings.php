<?php function byconsolewooodt_admin_delivery_pickup_calender_settings_form(){ ?>



	<div class="wrap">



			<!--h1>ByConsole Special Dates Charges Settings</h1-->



            <form method="post" class="form_byconsolewooodt_ordered_calender_settings" action="options.php">



				<?php



					settings_fields("ordered_calender_setting");



					do_settings_sections("byconsolewooodt_admin_ordered_calender_settings_options");      



					//submit_button(); 

					

					



				?>          



			</form>

			

			<?php

			

			

			

			error_reporting(0);

			

			?>

			

			<script>  

      

     jQuery(document).ready(function() {  

      var date = new Date();  

      var d = date.getDate();  

      var m = date.getMonth();  

      var y = date.getFullYear();  

      

      var calendar = jQuery('#byc_wooodt_calendar').fullCalendar({  

       editable: false,  

       header: {  

        left: 'prev,next today',

		//left: '',  

        center: 'title',  

        //right: 'month,agendaWeek,agendaDay'

		right: ''

       },  

      

       events: <?php include('bycwooodt_get_all_orders.php');?>, 

	   eventRender: function(event, element) {

        	element.attr('data-title', event.description);

    	}

    

       

     

      

         

      });  

       /* jQuery( "a" ).hover(
  function() {   
   var title = jQuery(this).attr("data-title");
    jQuery('<div/>', {
        text: title,
        class: 'box'
    }).appendTo(this); 
  }, function() {
    jQuery(document).find("div.box").remove();
  }
);*/

     });  

      

    </script> 
    <style>
		/*.box
{
  border: 1px solid green;
  position:absolute;
  color: white;
  top: 19px;
  left: 30px;
  background-color: black;
  z-index:99999;
  width:300px;
}*/
	</style>

    <div class="byc_main_container">

    <div class="byc_delivery_pickup_container"><span class="byc_delivery_color"></span>Delivery</div>

    <div class="byc_delivery_pickup_container"><span class="byc_pickup_color"></span>Pickup</div>

    </div>

<div id='byc_wooodt_calendar'></div>  

	</div>

	



<?php 	



}




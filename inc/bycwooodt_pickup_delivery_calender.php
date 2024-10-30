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
								   jQuery( ".fc-event-container a" ).hover(
									  function() {   
									   var title = jQuery(this).attr("data-title");
										jQuery('<div/>', {
											text: title,
											class: 'byconsolewooodt_single_order_tooltips'
										}).appendTo(this); 
									  }, function() {
										jQuery(document).find("div.byconsolewooodt_single_order_tooltips").remove();
									  }
									);
											
								 });  							  
							
								</script>
<div class="byc_main_container">                            
        <div class="byc_delivery_pickup_container"><span class="byc_delivery_color"></span>Delivery</div>
        <div class="byc_delivery_pickup_container"><span class="byc_pickup_color"></span>Pickup</div>
     </div>                                    
<div id='byc_wooodt_calendar'></div> 
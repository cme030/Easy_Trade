<script>
$(document).ready(function(){


   	  $(document).on('submit', '#car_form', function(event){
       event.preventDefault();  
       var car_name = $('#car_name').val();
       var car_price = $('#car_price').val();
       
       var car_gear_type = $('#car_gear_type').val(); 
       var car_seating = $('#car_seating').val(); 
       var car_fuel_type = $('#car_fuel_type').val(); 
       
       if(car_name == '') {
        toastr["error"]("Car Name is required!");
        return false;
       }

       if(car_price == '') {
        toastr["error"]("Car Price is required!");
        return false;
       }

       
         if(car_gear_type == '') {
          toastr["error"]("Please Select Gear Type");
          return false;
         }

         if(car_seating == '') {
          toastr["error"]("Car Seating is required!");
          return false;
         }

        if($('#car_image').val() == '') {
          toastr["error"]("Car Image  is required!");
          return false;
        }  
          

         if($('#car_image').val() != '')
          {
             var extension_profile = $('#car_image').val().split('.').pop().toLowerCase();  
             if(jQuery.inArray(extension_profile, ['gif','png','jpg','jpeg']) == -1)  
             {  
                toastr["error"]('Car image not allowed! Please choose a gif, png, jpg, jpeg format files only.');
                return false;
             }  
          }
          
          
          $.ajax({  
               url:"<?php echo base_url() ?>addcardatails",  
               method:'POST',  
               data:new FormData(this),
               contentType:false,  
               processData:false, 
               success:function(data)  
               {  
                  if(data)
                  {   
                      console.log(data);
                      $('#car_form')[0].reset();  
                      toastr["success"]("Car Details Added Successfully!"); 
                      window.location.href = "<?php echo base_url();?>car";

                  }
                  else
                  {
                        toastr["error"]("Car Details added failed! Please try again.");
                        return false;
                  }     
                    
               }  
          });   
    });

         $(document).on('submit', '#edit_car_form', function(event){
          event.preventDefault();
         var car_name = $('#car_name').val();
         var car_price = $('#car_price').val();
         var car_gear_type = $('#car_gear_type').val(); 
         var car_seating = $('#car_seating').val(); 
         var car_fuel_type = $('#car_fuel_type').val(); 
         var status = $('#status').val();  
         if(car_name == '') {
          toastr["error"]("Car Name is required!");
          return false;
         }

         if(car_price == '') {
          toastr["error"]("Car Price is required!");
          return false;
         }

       
         if(car_gear_type == '') {
          toastr["error"]("Please Select Gear Type");
          return false;
         }

         if(car_seating == '') {
          toastr["error"]("Car Seating is required!");
          return false;
         }

          $.ajax({  
               url:"<?php echo base_url() ?>updatecardetails",  
               method:'POST',  
               data:new FormData(this),
               contentType:false,  
               processData:false, 
               dataType:'JSON',
               success:function(data)  
               {  
                  if(data.status == 'success')
                  { 
                      
                      toastr["success"]("Car Details  Updated Successfully!");
                      window.location.href = "<?php echo base_url();?>car";
                  }
                  else
                  {    
                         toastr["error"]("Car Details updated failed! Please try again.");
                         return false;
                        
                  }

                    
               }       
          });   
      });

  
  

});
</script>
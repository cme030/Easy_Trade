<section class="row banner2-prefolder">
            <div class="container">
                <div class="row inner m0">
                    <div class="col-md-6 this-left">
                        <div class="this-texts">
                            <h2 class="this-title">Quick Sale</h2>
                            <h2 class="this-title2 h1">Well Meter Car!</h2>
                            <p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                            <a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 this-right">
                        <div class="this-texts">
                            <h2 class="this-title">Online Booking</h2>
                            <h2 class="this-title2 h1">SUMMER 39%</h2>
                            <p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                            <a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <footer class="row site-footer">
            
            <div class="bottom-footer row m0">
                <div class="container">
                    <div class="row">
                        Copyright © 2021 by <a href="index.html">Vegam Cars</a>. Design & Developed by <a href="http://adnectics.com/" target="_blank">Adnectics IT Solutions</a>. All rights reserved!
                    </div>
                </div>
            </div>
        </footer>
    
    <div class="socialmedia">
         <div class="">
            <ul>
               <li class="facebook"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
               <li class="instagram"><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="ion-social-instagram"></i></a></li>
               <li class="whatsapp"><a href="https://wa.link/kulhp0" target="_blank"><i class="ion-social-whatsapp"></i></a></li>
            </ul>
         </div>
      </div>
        <script src="<?=base_url()?>user_assets/front_end_assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?=base_url()?>user_assets/front_end_assets/js/bootstrap.min.js"></script>
        <!--Google Map-->
        <script src="<?=base_url()?>user_assets/front_end_assets/https://maps.googleapis.com/maps/api/js"></script>
        <script src="<?=base_url()?>user_assets/front_end_assets/js/gmaps.min.js"></script>
        <!--Contact-->    
        <script src="<?=base_url()?>user_assets/front_end_assets/js/jquery.form.js"></script>
        <script src="<?=base_url()?>user_assets/front_end_assets/js/jquery.validate.min.js"></script>
        <script src="<?=base_url()?>user_assets/front_end_assets/js/contact.js"></script>
        <!--Owl Carousel-->
        <script src="<?=base_url()?>user_assets/front_end_assets/vendors/owl.carousel/owl.carousel.min.js"></script>
        <!--CounterUp-->
        <script src="<?=base_url()?>user_assets/front_end_assets/vendors/couterup/jquery.counterup.min.js"></script>
        <!--WayPoints-->
        <script src="<?=base_url()?>user_assets/front_end_assets/vendors/waypoint/waypoints.min.js"></script>
        <!--Select-->
        <script src="<?=base_url()?>user_assets/front_end_assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
        <!--Instafeed-->
        <script src="<?=base_url()?>user_assets/front_end_assets/vendors/instafeed/instafeed.min.js"></script>
        <!-- Isotope -->
        <script src="<?=base_url()?>user_assets/front_end_assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="<?=base_url()?>user_assets/front_end_assets/vendors/isotope/isotope.min.js"></script>
        <!--Theme Script-->    
        <script src="<?=base_url()?>user_assets/front_end_assets/js/theme.js"></script>


        <!--Toster plugins -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">  
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--Toster end plugins -->
    </body>
    
<!-- Mirrored from haintheme.com/demo/html/supershine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2019 20:15:15 GMT -->
</html>

<script type="text/javascript">
    $(document).on('submit', '#booking_form', function(event){
      event.preventDefault();
    

      $.ajax({
                url:"<?php echo base_url() ?>save_booking",
                data:new FormData(this),
                method:'POST',
                contentType:false,  
                processData:false,
                success:function(data){

                  if(data) {
                    $('#booking_form')[0].reset();  
                    toastr["success"]("Added Successfully!");  
                     // banners_list.ajax.reload();
                     // $("#createbanner").modal('hide');
                  }
                  else
                    {
                        toastr["error"]("Banner failed! Please try again.");
                        return false;
                    } 
                }     
      });
  });
</script>
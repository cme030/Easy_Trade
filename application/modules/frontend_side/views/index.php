<!--Home 1 Slide Banner-->
  <section class="slide-banner row">
    <img src="<?=base_url()?>user_assets/front_end_assets/images/slide.jpg" alt="" class="this-bg hidden-xs">

    <div class="this-texts container">
      <h2 class="this-cursive">Hire Car <span>Professional</span></h2>
      <h2 class="this-h1">Now available at <img src="<?=base_url()?>user_assets/front_end_assets/images/availablity.png" alt=""></h2>
<!--      <h2 class="this-foot">1800 - 112 - 8888/ EXT: 001</h2>-->
      <a href="#" class="btn btn-primary">Let’s check it out</a>
    </div>
<!--    <a href="#" class="slide-location">LIMOUSINE<i class="ion-location"></i>New York, Vizag</a>-->
  </section>
  <!--3 Fold-->
  <section class="row find-quick">
    <div class="container">
      <form action="<?=base_url()?>search_home" method="post" class="row m0 find-quick-form text-center">
        <h2 class="this-title">FIND a <img src="<?=base_url()?>user_assets/front_end_assets/images/icons/find-quick/1.png" alt=""> <u>quickly</u>!</h2>
        <p class="this-p">You just do one step behind, Select your Favourite Car!</p>
        <div class="row m0 fr-it" style="padding-top: 30px;">
          <div class="location-group">
          <div class="input-group">
            <input name="lname" disabled class="form-control" placeholder="Sheela Nagar Visakhapatnam">
            <span class="input-group-addon"><i class="ion-android-locate"></i></span>
          </div>
<!--
          <input type="checkbox" name="dlocation" id="dlocation" class="sr-only">
          <label for="dlocation">Different return location?</label>
-->
<!--
          <div class="dlocate">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter airport, city or postcode...">
              <span class="input-group-addon"><i class="ion-android-locate"></i></span>
            </div>
          </div>
-->
        </div>          
        <div class="input-group date-group">
          <input type="date" class="datedroper form-control" placeholder="Pick up date" id="trip_start" name="trip_start" value="DD-MM-YYYY" >
<!--          <input type="text" class="datedroper form-control" placeholder="Pick up date">-->
          <span class="input-group-addon"></span>
        </div>
        <div class="input-group time-group">
          <input type="time" class="timedroper form-control td-input" id="trip_start_time" name="trip_start_time">
<!--          <input type="text"  placeholder="08:00 am" readonly="">-->
          <span class="input-group-addon"></span>
        </div>
        <div class="input-group date-group">
          <input type="date" class="datedroper form-control" placeholder="Pick up date" id="trip_end" name="trip_end" value="DD-MM-YYYY" min="2018-01-01" max="2018-12-1"  placeholder="Drop off date">
<!--          <input type="text" class="datedroper form-control">-->
          <span class="input-group-addon"></span>
        </div>
        <div class="input-group time-group">
          <input type="time" class="timedroper form-control td-input" id="trip_end_time" name="trip_end_time">
          <span class="input-group-addon"></span>
        </div>
        </div>
       
        <div class="row m0"  style="padding-top: 30px;" >
          <input type="submit" value="Book Now" class="btn btn-primary">
<!--          <input type="submit" value="Book Now" class="btn btn-primary">-->
        </div>
       
      </form>
    </div>
  </section>
  <!--Features-->
  <section class="row features">
    <div class="container">
      <div class="col-md-4 feature">
        <div class="media">
          <div class="media-left"><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/features/1.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">FREE FULL FUEL</h4>
            <p>Never need to pay for Fuel. If you need extra fuel just fill up and keep the receipt, we will <strong>refund the amount.</strong></p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/features/2.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">24/7 ROADSIDE ASSISTENCE</h4>
            <p>You drive to adventures, we get it. We and our roadside assistance partners are <strong>available</strong> around the clock.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 feature">
        <div class="media">
          <div class="media-left"><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/features/3.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">TAX &amp; INSURANCE INCLUDED</h4>
            <p>The hourly price includes Taxes &amp; Insurance. <strong>No hidden charges!</strong> Dosis amet consectua.</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/features/4.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">ALL Vizag. PERMIT</h4>
            <p>Go <strong>anywhere.</strong> Our cars have all‐Vizag permits. Just remember to pay state tolls and taxes.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 feature">
        <div class="media">
          <div class="media-left"><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/features/5.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">REFUNDABLE DEPOSIT</h4>
            <p>We take a small refundable deposit of <strong>₹5,000.</strong> It will take 5‐15 days before the refund reflects in your account.</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/features/6.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">DOORSTEP CAR DELIVERY</h4>
            <p>Get your car <strong>delivered</strong> to your doorstep as well as picked up once you are done lorem dolor.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Fleet-->
  <section class="row fleets2">
    <div class="container">
      <div class="row section-title text-center white">
        <h6 class="this-top">SO MANY CHOICE</h6>
        <h2 class="h1 this-main">A Car for Every Need!</h2>
      </div>
      <div class="row">
        <div class="col-md-4 fleet fleet2 sale-offer">
          <div class="inner row">
            <h2 class="rent text-center"><small>from</small>₹96.90<sub>/day</sub></h2>
<!--
            <h6 class="reviews text-center">
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i> 
              (5 reviews)
            </h6>
-->
            <h4 class="vehicle-title text-center">Swift</h4>
            <div class="row vehicle-img text-center">
              <img src="<?=base_url()?>user_assets/front_end_assets/images/fleet/1.png" alt="">
            </div>
            <div class="row specification">
              <ul class="nav">
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/1.png" alt=""></span>Manual</li>
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/2.png" alt=""></span>06 list/100 kms</li>-->
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/3.png" alt=""></span>05 seats</li>
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/4.png" alt=""></span>Make Year 2016</li>-->
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/5.png" alt=""></span>04 air bags</li>-->
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/6.png" alt=""></span>Diesel</li>
                </ul>
              <a href="fleet.html" class="details-page">+</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 fleet fleet2">
          <div class="inner row">
            <h2 class="rent text-center"><small>from</small>₹196.90<sub>/day</sub></h2>
<!--
            <h6 class="reviews text-center">
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i> 
              (5 reviews)
            </h6>
-->
            <h4 class="vehicle-title text-center">Swift Dzire</h4>
            <div class="row vehicle-img text-center">
              <img src="<?=base_url()?>user_assets/front_end_assets/images/fleet/2.png" alt="">
            </div>
            <div class="row specification">
              <ul class="nav">
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/1.png" alt=""></span>Manual</li>
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/2.png" alt=""></span>06 list/100 kms</li>-->
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/3.png" alt=""></span>05 seats</li>
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/4.png" alt=""></span>Make Year 2016</li>-->
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/5.png" alt=""></span>04 air bags</li>-->
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/6.png" alt=""></span>Diesel</li>
                </ul>
              <a href="fleet.html" class="details-page">+</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 fleet fleet2 sale-offer">
          <div class="inner row">
            <h2 class="rent text-center"><small>from</small>₹296.90<sub>/day</sub></h2>
<!--
            <h6 class="reviews text-center">
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i> 
              (5 reviews)
            </h6>
-->
            <h4 class="vehicle-title text-center">innova</h4>
            <div class="row vehicle-img text-center">
              <img src="<?=base_url()?>user_assets/front_end_assets/images/fleet/3.png" alt="">
            </div>
            <div class="row specification">
              <ul class="nav">
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/1.png" alt=""></span>Manual</li>
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/2.png" alt=""></span>06 list/100 kms</li>-->
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/3.png" alt=""></span>05 seats</li>
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/4.png" alt=""></span>Make Year 2016</li>-->
<!--                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/5.png" alt=""></span>04 air bags</li>-->
                  <li><span><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/fleet-list/6.png" alt=""></span>Diesel</li>
                </ul>
              <a href="fleet.html" class="details-page">+</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Updates-Partner-->

  <!--Service Offers-->
  <section class="row services-offer">
    <div class="container">
      <div class="row section-title text-center">
        <h6 class="this-top">The VALUE OF BRAND</h6>
        <h2 class="h1 this-main">What we offer?</h2>
        <p>We seek to get involved early in the design phase so that we can manage the project more efficiently, provide effective building solutions, and identify challenges early on to mitigate design changes after that.</p>
      </div>
      <div class="row text-center section-title-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/services/1.png" alt=""></div>

      <div class="row">
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="<?=base_url()?>user_assets/front_end_assets/images/services/1.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">ONE WAY HIRE CAR</h4>
                  <h5 class="this-area">All Vizag</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/1.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/7.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="<?=base_url()?>user_assets/front_end_assets/images/services/2.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Airport transfers</h4>
                  <h5 class="this-area">ALL Vizag</h5>
                </div>
                <div class="media-right media-middle">                    
                  <span class="normal"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/2.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/8.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="<?=base_url()?>user_assets/front_end_assets/images/services/3.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Flex (long-term car hire)</h4>
                  <h5 class="this-area">ALL Vizag</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/3.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/9.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="<?=base_url()?>user_assets/front_end_assets/images/services/4.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Breakdown assistance</h4>
                  <h5 class="this-area">All Vizag</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/4.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/10.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="<?=base_url()?>user_assets/front_end_assets/images/services/5.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">ADDITIONAL COVER</h4>
                  <h5 class="this-area">ALL Vizag</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/5.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/11.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="<?=base_url()?>user_assets/front_end_assets/images/services/6.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Chauffeur Drive</h4>
                  <h5 class="this-area">ALL Vizag</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/6.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="<?=base_url()?>user_assets/front_end_assets/images/icons/service-offer/12.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>          
      </div>        
    </div>
  </section>  
  <!--Funfact-->
  <section class="row funfacts">
    <div class="container">
      <div class="row inner">
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-alarm-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">1991</span><sup>+</sup></h2>
              <h5 class="this-about">Hours Saled</h5>
            </div>
          </div>
        </div>
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-ionic-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">69</span></h2>
              <h5 class="this-about">City Park</h5>
            </div>
          </div>
        </div>
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-paw-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">50</span></h2>
              <h5 class="this-about">Clients in Vizag</h5>
            </div>
          </div>
        </div>
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-speedometer-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">20</span><sup>+</sup></h2>
              <h5 class="this-about">Cars Storage</h5>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!--Banner 01-->
  <section class="row banner01">
    <div class="container">
      <div class="row inner text-center">
        <h2 class="this-cursive">The Flash</h2>
          <h4 class="this-deliver">DELIVERED AT <u>YOUR DOOR</u></h4>
          <h2 class="this-title">Yes, just at home!</h2>
          <h4 class="this-hire">Hire a car <u>never been easier!</u></h4>
          <a href="#" class="btn btn-outline">RESERVE A CAR</a>
        </div>
      </div>
    </section>  
  
    
    <!--Banner 3-->
    <section class="row banner3">
      <div class="container">
        <div class="media inner">
          <div class="media-body">
            <h2 class="h1 this-title">Many reasons to choose <u>HireCarPro!</u></h2>
            <p>Our fleet comprises quite the range of rides, whether you need a small hybrid for efficient bursts across town.</p>
          </div>
          <div class="media-right">
            <a href="#" class="btn btn-primary dark">read more</a>
          </div>
        </div>
      </div>
    </section>
    <!--Testimonial-->
    <section class="row testimonial-row">
      <div class="container">         
        <div class="row section-title text-center">
          <h6 class="this-top">SO MANY CHOICE</h6>
          <h2 class="h1 this-main">A Car for Every Need!</h2>
        </div>

        <div class="row">
          <div class="testimonial-carousel owl-carousel owl-theme owl-loaded">
          <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: all 0s ease 0s; width: 6000px;"><div class="owl-item cloned" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item cloned" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item active" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item active" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item cloned" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div><div class="owl-item cloned" style="width: 600px; margin-right: 0px;"><div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="<?=base_url()?>user_assets/front_end_assets/images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>           
        </div>

      </div>
    </section>
    <!--From Blogs-->
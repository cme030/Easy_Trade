$(document).ready(function(){
var urlParams = new URLSearchParams(window.location.search);
if(urlParams.has('reqSource')){
	var querystring = 'reqSource=app';

	$('a').each(function() {
	    var href = $(this).attr('href');

	    if (href) {
	        href += (href.match(/\?/) ? '&' : '?') + querystring;
	        $(this).attr('href', href);
	    }
	});
}
	$('.slide-text').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  asNavFor: '.mobile-outer',
	  infinite: false,
	   autoplay: true,
  	   autoplaySpeed: 3000
	});
	$('.mobile-outer').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  asNavFor: '.slide-text',
	  dots: true,
	  focusOnSelect: true,
	  infinite: false,
	  autoPlay: true,
	  autoplaySpeed: 3000
	});
	$('#partner-slider').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  arrows: false,
	  dots: true,
	  focusOnSelect: true,
	  infinite: false,
	  responsive: [
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 500,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	        infinite: true,
	        dots: true
	      }
	    },
	   ]
	});

	// hamburger menu click
	$('.toggle-btn').click(function(){
		$('.menu-wrapper').slideToggle().toggleClass("active");
		$(this).toggleClass('active');
		$('body').toggleClass('overflow');
	});

	function mobileSlider(){
		//if($(window).width() < 768){
			$('#mobile-slider').slick({				
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				infinite: true,
				mobileFirst: true
			});
		//}		
	}
	function mobilewhySlider(){
		//if($(window).width() < 768){
			$('#mobile-why-slider,#piggy-benefit-slider,#transportation-slider,#partner-testimonial-slider,#m-counter-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				infinite: true,
				mobileFirst: true
			});
		//}		
	}
	function financeFeature(){
		//if($(window).width() < 768){
			$('#finance-feature').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				infinite: false,
				mobileFirst: true				
				// autoplay: true,
				// autoplaySpeed: 3000				
			});
		//}		
	}
	function financeOffering(){
		//if($(window).width() < 768){
			$('#finance-offering').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				infinite: false,
				centerMode: true,
				centerPadding: '100px',
				mobileFirst: true	
			});
		//}		
	}
	
	$(window).on('load resize orientationchange', function() {
			if($(window).width() > 767){	
			if ($("#mobile-slider,#mobile-why-slider,#piggy-benefit-slider,#transportation-slider,#partner-testimonial-slider,#m-counter-slider,#finance-feature,#finance-offering").hasClass('slick-initialized')) {					
					$("#mobile-slider,#mobile-why-slider,#piggy-benefit-slider,#transportation-slider,#partner-testimonial-slider,#m-counter-slider,#finance-feature,#finance-offering").slick('unslick');
			}
			}else{
				if (!$("#mobile-slider,#mobile-why-slider,#piggy-benefit-slider,#transportation-slider,#partner-testimonial-slider,#m-counter-slider,#finance-feature,#finance-offering").hasClass('slick-initialized')) {
                    mobileSlider();
					mobilewhySlider();
					financeFeature();
					financeOffering();
                }					
			}
    });
	/*
	mobileSlider();
	mobilewhySlider();
	financeFeature();
	financeOffering();
	$(window).resize(function(){
		mobileSlider();
		mobilewhySlider();
		financeFeature();
		financeOffering();
		if($(window).width() > 768){
			$('#mobile-slider,#mobile-why-slider,#piggy-benefit-slider,#transportation-slider,#partner-testimonial-slider,#m-counter-slider,#finance-feature,#finance-offering').slick('unslick');
		}	
		
	})*/
	
	
	// accordion click
	$('.accordion-header').click(function(){
    	if($(".accordion-finance-body").length > 0) {
            $(this).parent().toggleClass('active').find('.accordion-finance-body').slideToggle();
            $(".accordion-header").not(this).parent().removeClass('active').find('.accordion-finance-body').slideUp();
    	} else {
    	    $(this).parent().toggleClass('active').find('.accordion-body').slideToggle();
            $(".accordion-header").not(this).parent().removeClass('active').find('.accordion-body').slideUp();
    	}
	})

	// mobile footer collapse
	$('.footer-head.mobile-show').click(function(){
		$(this).toggleClass('active');
		$(this).parent().find('.collapse-ul').slideToggle();
	})
	// clear input
	$(".clearable").each(function() {
  
	  var $inp = $(this).find("input:text"),
	      $close = $(this).find(".close-icon");

	  $inp.on("input", function(){
	    $close.toggle(!!this.value);
	    $('.pickup-wrap input').css("background-image","none")
	  });
	  
	  $close.on("touchstart click", function(e) {
	    e.preventDefault();
	    $inp.val("").trigger("input");
	  });
	  
	});
	// get estimate button click
//	$('#get-estimate-btn').click(function(event){
//		event.preventDefault();
//		$(this).parent().hide();
//		$('.estimate-wrap').show();
//	})

	// return checkbox check

	
	$('#return').click(function() {
        if($(this).is(':checked'))
            $('.return-time-wrap').show();
        else
            $('.return-time-wrap').hide();
    });
    $('#repeat').click(function() {
        if($(this).is(':checked'))
            $('.ride-repeat-wrap').show();
        else
            $('.ride-repeat-wrap').hide();
    });


    // toggle active 
    $('.ride-repeat-wrap ul li').click(function(){
    	$(this).toggleClass('active')
    });
    // custom scroll
    if($('.request-left').length && $(window).width() > 1024){
    	$(".request-left").mCustomScrollbar({
	    	theme: "minimal-dark"
	    
	    });
    }
    // otp focus
    $(".inputs").keyup(function () {
	    if (this.value.length == this.maxLength) {
	      $(this).next('.inputs').focus();
	    }
	});
	
	// testimonial slider
	$('#testimonial-slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  infinite: false,
	   autoplay: true,
	   dots: true,
  	   autoplaySpeed: 3000
	});

	// partner tab 
	$('.partner-tab-main ul li a').click(function(e){
		e.preventDefault();
		$('.partner-tab-main ul li a').removeClass("active");
		$(this).addClass("active")
		var tabID = $(this).attr("href");
		$('.tab-content').hide();
		$(tabID).fadeIn();
	})
	// rate tab 
	$('.rate-tab-wrap ul li a').click(function(e){
		e.preventDefault();
		$('.rate-tab-wrap ul li a').removeClass("active");
		$(this).addClass("active")
		var tabID = $(this).attr("href");
		$('.rate-tab-content').hide();
		$(tabID).fadeIn();
	})

	$('.finance-enroll-slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  draggable: false,
	  swipe: false,
	  infinite: false,
	  autoplay: false
		   
	});
	$('.finance-enroll-copy li[data-slide]').click(function(e) {
	   e.preventDefault();
	   $('.finance-enroll-copy li[data-slide]').removeClass('active');
	   $(this).addClass('active');
	   var slideno = $(this).data('slide');
	   $('.finance-enroll-slider').slick('slickGoTo', slideno - 1);
	 });
	
});



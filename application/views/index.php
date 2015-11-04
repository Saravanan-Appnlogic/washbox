<style>
#orderNowBox .modal-dialog{
    margin-top: 68px;	    
}
.verticalLine {
    border-right: thin solid #E0E0E0;
    height:386px;
    
}
.button-orange{
    background: #FF9C2D;
    margin:5px 1px;
}
.requestLocation{
    padding: 10%;
}
.requestLocation .button-lime{
    margin: 0px;
}
.requestLocationServe{
    padding-top: 10%;
    padding-left: 5%;
}
.requestLocation h2 i{
    position: absolute;
    margin-left: 7px;
}
.requestLocationServe h2 i{
/*    border-bottom: 2px solid white;
*/}
.requestLocationServe h4{
}
#cityName{
    text-align: center !important;
}
#orderNowBox .modal-content{
    border-radius: 0px;
    background: #1FA5FE;
    color: white;
}
#orderNowBox .button-white 
{
    color: black !important;

}
.no-padding{
    padding: 3px;
}
.form-control {
    background-color: #ffffff;
    background-image: none;
    border: 2px solid #ebebeb;
    border-radius: 2px;
    box-shadow: 0 1px 16px 2px rgba(0, 0, 0, 0.075) inset;
    color: grey;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.locationNames{
 color: #000;
 font-size: medium;
}
.order-btn {
    background-color: #ff683a;
    border-color: #eea236;
    color: #ffffff;
}

</style>
<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">WASHBOX<br/></h2><h2><span class="subhead">SAVE LIFE,LIVE BETTER Your Laundry Washed,Ironed, Folded & Delivered in 48 Hours</span></h2>
                            <div class="" data-caption-animate="fadeInUp">
				<div class="row">
				    <div>
					<a class="btn btn1 order-btn button-border button-dark button-rounded noleftmargin" data-toggle="modal" data-target=".bs-example-modal-lg" >Order Now</a>
				</div>
				    <div class="">
					
				    </div>
				</div>
			    </div>
			    </div>
			</div>
                        <div class="video-wrap">
                            <!--<video poster="images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
                                <source src='<?php echo site_url();?>application/assests/images/videos/explore1.mp4' type='video/mp4' />
                                <source src='<?php echo site_url();?>application/assests/images/videos/explore1.webm' type='video/webm' />
                            </video>-->
                            <div class="video-overlay" style="background-color: rgba(9, 138, 207, 0.8);"></div>
                        </div>
                    </div>
                 <!--   <div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!--<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>-->
            </div>

	    
	   
	    
	    
            <script>
		
		
		
                jQuery(document).ready(function($){
		    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        loop: true,
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeStart: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider').find('.swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                                if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                            });
                            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                                if($(this).find('.yt-bg-player').length > 0) {
                                    $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                                }
                            });
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });
                });
            </script>

        </section>

        <!-- Content============================================= -->
        <section id="content">

            <div class="content-wrap">

		<div class="row clearfix bottommargin-lg common-height">

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                        <div>
			    <img class="img-thumbnail" src="<?php echo site_url();?>application/assests/images/Order/order.png">
			<div class="pickanddeliver1">
                            <a class="pickanddeliver pricesmall"><div>COLLECTION & DELIVERY</div></a>
			    <hr class="order"><a class="pricesmall1">Order through mobile,tablet or Desktop</a>
			    
                        </div>
			</div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                        <div>
			    <img class="img-thumbnail" src="<?php echo site_url();?>application/assests/images/Order/collect.png">
			<div class="pickanddeliver1">
			    <a class="pickanddeliver pricesmall">COMPETITIVE PRICES</a><hr class="order">
			    <a class="pricesmall1">Choose a time and place that suit you</a>
                        </div>
			</div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                        <div>
			    <img class="img-thumbnail" src="<?php echo site_url();?>application/assests/images/Order/earthfriendly.jpg">
			<div class="pickanddeliver1">
			    <a class="pickanddeliver pricesmall">7 DAYS A WEEK</a><hr class="order">
			    <a class="pricesmall1">Your clothes are given a high quality clean</a>
                        </div>
			</div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                        <div>
			    <img class="img-thumbnail" src="<?php echo site_url();?>application/assests/images/Order/delivery.jpg">
			<div class="pickanddeliver1">
			    <a class="pickanddeliver pricesmall">QUALITY GUARANTEE</a><hr class="order">
			    <a class="pricesmall1">We'll deliver back to you anytime,anyware</a>
			</div>
			</div>
                    </div>

                </div>
		 
	     <!--MODAL START-->
	      <!-- Large modal -->
                 

                        <div ng-controller="locationController" id="orderNowBox"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-body">
                                    <div class="modal-content">

                                        <div class="modal-body">
					    <div class="row">
						<div class="col-md-12"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
					    </div>
					    <div class="row">
						<div class="col-md-6">
						    <div class="requestLocationServe ">
							<h2>Locations we serve <i class="icon-truck"></i></h2>
							<div class="col-md-12 no-padding">
							    <h4>Koramangala, Hosapalaya, Omkar Nagar, Vittasandra.</h4>
							</div>
							<a class="button button-3d button-rounded button-orange button-reveal  tright" href="<?php echo site_url('wash_BoxCntrl/wash_box_Orderpage');?>"><i class="icon-angle-right"></i><span >Proceed</span></a>
						    </div>
						</div>
						<div class="col-md-6">
						    <form class="requestLocation" ng-submit="placeForm()" role="form" method="post">
							<div class="form-group"><h2>Request your location <i class="icon-map-marker2"></i></h2></div>
							<div class="form-group"><input id="cityName" ng-model="cityName" placeholder="Enter Your City Name" class="required form-control input-block-level" type="text" value=""></div>
							<div class="form-group "><button type="submit" class="button button-3d button-rounded button-lime button-reveal   tright"  href="#"><i class="icon-map-marker2"></i><span>Submit </span></button></div>
						    </form>
						</div>
					    </div>
					    
					</div>
                                    </div>
                                </div>
                            </div>
                        </div>
			<!--MODAL ENDS-->

                <div class="container clearfix colpadd">

		    <div class="row">
                        <div class="center col-md-12" data-animate="fadeIn">
			    <h1>Affrodable Prices</h1>
			    <h5>All orders come with FREE collection & delivery</h5>
			    
                        </div>
                    </div>
		    	<div class="row center">
			    <div class="col-md-4" data-animate="fadeIn">
				<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin">&pound; 2.00 /<br><span class="pricesmall">Shirt Shirt Service</span></a>
			    </div>
			    <div class="col-md-4" data-animate="fadeIn">
				<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin affortablefont">From &pound; 2.00<br><span class="pricesmall">Dry Cleaning</span></a>
			    </div>
			    <div class="col-md-4" data-animate="fadeIn">
				<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin">&pound; 15/ 8Kg <br><span class="pricesmall">Laundry Services</span></a>
			    </div>
			</div>
		    <div class="row center" data-animate="fadeIn">
                        <div class="col-md-12" data-animate="fadeIn" data-delay="800">
			    <button class="button btn-warning button-3d button-rounded button-dirtygreen">See Full Price List</button>
                            <!--<a href="#" class="button1 button-border1 button-dark button-rounded button-large">See Full Price List</a>-->
			</div>
                    </div>

		    <div class="clear"></div>

		    <div class="clear"></div>

                </div>

           

                <div class="clear"></div>
	</section><!-- #content end -->
	
<script>
   
    
    //MOving Objects starts
    var margin=0;
    var marginLocation=0;
    function moveVan() {
	
	if (margin>70) {
	    margin=0;
	    
	}

	temp=margin+"px";

	$(".requestLocationServe h2 i").css("padding-left", temp);
	
	margin=margin+2;
    }
    //setInterval(moveVan, 200);
    function locationIcon() {
	if (marginLocation==0) {
	    marginLocation=-1;
	}
	else{
	    marginLocation=0;

	}
	tempLocation=marginLocation+"px";

	$(".requestLocation h2 i").css("margin-top", tempLocation);
    }
    setInterval(locationIcon, 200);
//Moving Objects ends

</script>
    
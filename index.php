<?php include('include/header.php'); ?>
 
  <div class="main-content">
    <section id="home">
      <div class="container-fluid p-0">
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg6.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <img src="images/bg/bg6.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              </li>
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg5.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <img src="images/bg/bg5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              </li>
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <img src="images/bg/bg7.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              </li>
            </ul>
          </div>
        </div>
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
      </div>
    </section>
    <section class="bg-black-333 home_trial_section">
      <div class="container p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="divider call-to-action sm-text-center text-center pt-10 pb-20">
                <h2 class="mt-20 mb-20 text-white">Quick Free Trial!</h2>
				<form>
				  <div class="row">
					<div class="col-sm-5">
					  <div class="form-group">
						<input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true">
					  </div>
					</div>
					<div class="col-sm-5">
					  <div class="form-group">
						<input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
					  </div>
					</div>
					<div class="col-sm-2">
					  <div class="form-group">
						<button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
					  </div>
					</div>
				  </div>
				</form>
				<p class="text-white">By clicking submit, you agree to our <a href="#">Terms and Conditions</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

	 <!-- Section: About  -->
    <section class="bg-lighter">
      <div class="container">
	  <div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h5 class="font-weight-300 m-0">What we can do?</h5>
              <h2 class="mt-0 text-uppercase font-28">Our <span class="text-theme-colored font-weight-400">Service</span> <span class="font-30 text-theme-colored">.</span></h2>
              <div class="icon">
                <i class="fa fa-hospital-o"></i>
              </div>
            </div>
          </div>
        </div>
	  
        <div class="section-content text-center">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box bg-white iconbox-theme-colored p-20 pb-30">
                <a href="#" class="icon icon-rounded icon-border-effect effect-rounded mb-0">
                  <i class="flaticon-charity-shaking-hands-inside-a-heart font-48"></i>
                </a>
                <h3 class="text-uppercase mt-20 mb-20"><a href="#">Basic Service</a></h3>
                <a class="btn btn-colored btn-theme-colored btn-sm mt-10" href="#">Read More</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box bg-white iconbox-theme-colored p-20 pb-30">
                <a href="#" class="icon icon-rounded icon-border-effect effect-rounded mb-0">
                  <i class="flaticon-charity-home-insurance font-48"></i>
                </a>
                <h3 class="text-uppercase mt-20 mb-20"><a href="#">Equity derivative service</a></h3>
                <a class="btn btn-colored btn-theme-colored btn-sm mt-10" href="#">Read More</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box bg-white iconbox-theme-colored p-20 pb-30">
                <a href="#" class="icon icon-rounded icon-border-effect effect-rounded mb-0">
                  <i class="flaticon-charity-make-an-online-donation font-48"></i>
                </a>
                <h3 class="text-uppercase mt-20 mb-20"><a href="#">Equity future service</a></h3>
                <a class="btn btn-colored btn-theme-colored btn-sm mt-10" href="#">Read More</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box bg-white iconbox-theme-colored p-20 pb-30">
                <a href="#" class="icon icon-rounded icon-border-effect effect-rounded mb-0">
                  <i class="flaticon-charity-make-an-online-donation font-48"></i>
                </a>
                <h3 class="text-uppercase mt-20 mb-20"><a href="#">Equity cash basic service</a></h3>
                <a class="btn btn-colored btn-theme-colored btn-sm mt-10" href="#">Read More</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box bg-white iconbox-theme-colored p-20 pb-30">
                <a href="#" class="icon icon-rounded icon-border-effect effect-rounded mb-0">
                  <i class="flaticon-charity-make-an-online-donation font-48"></i>
                </a>
                <h3 class="text-uppercase mt-20 mb-20"><a href="#">Equity future basic service</a></h3>
                <a class="btn btn-colored btn-theme-colored btn-sm mt-10" href="#">Read More</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box bg-white iconbox-theme-colored p-20 pb-30">
                <a href="#" class="icon icon-rounded icon-border-effect effect-rounded mb-0">
                  <i class="flaticon-charity-make-an-online-donation font-48"></i>
                </a>
                <h3 class="text-uppercase mt-20 mb-20"><a href="#">Equity option basic service</a></h3>
                <a class="btn btn-colored btn-theme-colored btn-sm mt-10" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg2.jpg" data-parallax-ratio="0.7">
      <div class="container pb-0">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0">Happy Clients</h5>
              <h2 class="mt-0 text-uppercase font-28">Testimonials <span class="font-30 text-theme-colored">.</span></h2>
              <div class="icon">
                <i class="fa fa-hospital-o"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/1.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/3.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/1.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
  
	 <!-- Section: Gallery -->
    <section id="gallery" class="our_tracksheet">
      <div class="container">
		<div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h5 class="font-weight-300 m-0">What we can do?</h5>
              <h2 class="mt-0 text-uppercase font-28">Tracksheets <span class="text-theme-colored font-weight-400">and Reports</span></h2>
              <div class="icon">
                <i class="fa fa-hospital-o"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Option</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Stock cash</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Inventory</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Index</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Cash services</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Commodity</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> BTST/STBT</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Stock cash circuit</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Platinum services</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Future services</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Agri commodity</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Stock future</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Currency</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Stock future circuit</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Option services</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="event media mb-20 no-bg no-border">
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Equity</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  </div>
  <!-- end main-content -->
  <?php include('include/footer.php'); ?>
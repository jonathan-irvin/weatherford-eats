<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>(Pro) Responsive Template</title>
<meta name="description" content="Enter Your Website Description Here">
<meta name="keywords" content="website, business, store" />
<meta name="robots" content="index, follow" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Mobile Specific Metas  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/menusm.css" />
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/skeleton.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/menusm.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<!-- PrettyPhoto Starts -->
<link rel="stylesheet" type="text/css" href="prettyPhoto/css/prettyPhoto.css" />
<script type="text/javascript" src="prettyPhoto/js/jquery.prettyPhoto.js"></script>
<!-- PrettyPhoto Ends -->
<!-- Preloader Starts -->
<link href="preloader/css/preloader.css" rel="stylesheet" />
<script src="preloader/js/jquery.preloader.js" charset="utf-8"></script>
<!-- Preloader Ends -->
<!-- Ui To Top Starts -->
<link href="ui_totop/css/ui.totop.css" rel="stylesheet" />
<script src="ui_totop/js/jquery.ui.totop.js" charset="utf-8"></script>
<!-- Ui To Top Ends -->
<!-- DC Twitter Starts -->
<link href="twitter_tweet/jquery.tweet.css" rel="stylesheet" />
<script src="twitter_tweet/jquery.tweet.js" charset="utf-8"></script>
<!-- DC Twitter End -->

<!-- jquery.jscrollpane Starts -->
<!-- jquery.jscrollpane End -->

<!-- Config User Intarface Box Import START -->
<script type="text/javascript" src="js/head_html_default_block.js"></script>
<script type="text/javascript" src="js/head_html_block.js"></script>
<!-- Config User Intarface Box Import END -->

<link type="text/css" rel="stylesheet" href="css/jquery.jscrollpane.css"/>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.js"></script>
<script type="text/javascript">
$(function () {
	$(window).resize(function () {
		content_width ();
	});
	content_width ();		
});

function content_width () {
	var work_content = $(document).width()-0;
		
	if ($('.main_menu').hasClass('opn_mn')) {
		work_content = work_content - 300;
	}
	$('.main_content').width(work_content + 'px');
	//jQuery('.scroll-panel').jScrollPane();
}

jQuery(document).ready(function() {
	$('.main_menu_button').click(function () {
	    if ($('.main_menu').hasClass('cls_mn')) { 	
			$('.menu').show("fast");
			$('.main_menu').animate({right: '0px'}).removeClass('cls_mn').addClass('opn_mn');
		} else {
			$('.menu').hide("fast");		
			var W=$('.main_menu').width();		
			$('.main_menu').animate({right: '-'+W+'px'}).removeClass('opn_mn').addClass('cls_mn');	  
		}
		content_width ();
    });
	
});
</script>

<!-- Config Slider : SLIDER START -->

<!-- DC Dream Accordion CSS -->
<link rel="stylesheet" type="text/css" href="js/dream-accordion/css/dream-accordion.css" />
<script type="text/javascript" src="js/scripts.js"></script>
<!-- requires easing library -->
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/dream-accordion/js/froogaloop.min.js"></script>
<script type="text/javascript" src="js/dream-accordion/js/jquery.transform-0.9.3.min.js" ></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/dream-accordion/js/dream-accordion.js"></script>
<script type="text/javascript">
//Responsive js

$(function(){

    $(window).resize(function(){

	var rwidth=$(this).width();

     if(rwidth >959)

	 {

        $(document).ready(function() {

        //$.noConflict();

		
		<!-- DC Dream Accordion Settings -->

		$("#dream_accordion_responsive").width('960');
       
	    
		<!-- DC Dream Accordion Settings -->

        });

     }

	else if(rwidth >= 480 && rwidth <= 767)

	{
       
	     <!-- DC Dream Accordion Settings -->

		$("#dream_accordion_responsive").width('418');

		<!-- DC Dream Accordion Settings -->
         $('.slideDiv').attr('data-width','200');

    }

	else if(rwidth <= 479)

	{

		
	   <!-- DC Dream Accordion Settings -->

		$("#dream_accordion_responsive").width('298');
        $('.slideDiv').attr('data-width','150');
		
	}

	else if(rwidth >= 768 && rwidth <= 959)

	 {
       	
	    <!-- DC Dream Accordion Settings -->

		$("#dream_accordion_responsive").width('768');
        $('.slideDiv').attr('data-width','330');
		<!-- DC Dream Accordion Settings -->
       	
     }

     })

  .resize();//trigger resize on page load<br>

});
</script>
<!-- DC Dream Accordion Settings -->
<script type="text/javascript">
			
			// SETTINGS
			var as_settings = {
				/* visibleItems: less of equal to total items in acordion  */
				visibleItems:5,
				/* slideshowOn; true, false */
				slideshowOn: true,
				/* useGlobalDelay; true, false (use same timer delay for all slides, if false you NEED to set individual delays for all slides) */
				useGlobalDelay: true,
				/* slideshowDelay; slideshow delay, in miliseconds (2500 = 2.5 seconds) */
				slideshowDelay: 2500,
				/* randomPlay; true, false (play slides in normal or random order or to be more accurate, if true - mixes slide order on the beginning to simulate random) */
				randomPlay: false,
				/* includeVideoInSlideshow; autoplay video if exist in slide and on video finish continue with next slide (true/false) */
				includeVideoInSlideshow: false,
				/* openOnRollover; true, false (open slides on rollover or click) */
				openOnRollover: true,
				/* useScroll; true, false */
				useScroll: true,
				/* scrollDraggerOverColor; scroll dragger color on mouse over */
				scrollDraggerOverColor: '#658',
				/* useControls; true/false */
				useControls: true,
				/* openSlideNum; open slide on begining, enter -1 for none, 0 = first, 1 = second, 2 = third... etc. */
				openSlideNum: 0,
				/* transitionTime: transition time for slide in miliseconds */
				transitionTime: 1000,
				/* transitionEase: transition ease for slide, (some eases may possibly not work correctly), check eases here: http://gsgd.co.uk/sandbox/jquery/easing/ */
				transitionEase: 'easeOutQuint'
			};
			//get window size
				var rwidth=$(window).width();
				if(rwidth >959) $("#dream_accordion_responsive").width('960');
				else if(rwidth >= 480 && rwidth <= 767) $("#dream_accordion_responsive").width('420');
				else if(rwidth <= 479)$("#dream_accordion_responsive").width('300');
				else if(rwidth >= 768 && rwidth <= 959) $("#dream_accordion_responsive").width('768');
			jQuery(window).load(function() {
				//jQuery.noConflict();
				jQuery.accordionSlider('#sliderWrapper', as_settings);
				as_settings = null;
				
				//after div holder (#gmap_canvas) for google map is ready in the dom, otherwise we get an error in ie coming from google maps.
			    //google.maps.event.addDomListener(window, 'load', initialize);
			    initializeGmap();
			});
		    
			/*
			https://developers.google.com/maps/documentation/javascript/reference
			google map example 
			*/
			
		    var gmap;
		    function initializeGmap() {
				var myOptions = {
				  zoom: 8,
				  center: new google.maps.LatLng(48.856614, 2.3522219), // google map location to show
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				gmap = new google.maps.Map(document.getElementById('gmap_canvas'),
					myOptions);
		    }
		
        </script>

<!-- Config Slider : SLIDER END -->

<!-- jcarouselScroller Starts-->
<link rel="stylesheet" type="text/css" href="sliders/jcarousel/css/jcarousel_skin.css" />
<script type="text/javascript" src="sliders/jcarousel/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {carousel.startAuto(0);});
    carousel.buttonPrev.bind('click', function() {carousel.startAuto(0);});
    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {carousel.stopAuto();}, function() {carousel.startAuto();});
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        auto: 2,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
});
</script>
<!-- jcarouselScroller End-->

<script type="text/javascript" src="js/tinynav.min.js"></script>
<script type="text/javascript">
	$(function () {
		$('#menu-top-menu').tinyNav({
			active: 'selected',
			header: 'Navigation' 
		});
	});
</script>
</head>
<body>
<div class="body_pattern">
<div class="index_page">
  <div class="main">
    <div class="main_menu opn_mn">
      <div class="main_menu_button"></div>
      <div class="main_menu_top"> 
        <!-- logo -->
        <div class="logo">
          <div><a href="index.html">Vooveo</a></div>
          <p>Premium portfolio</p>
        </div>
        <!-- logo -->
        <div class="clr"></div>
      </div>
      <!-- menu edit in file "js/menu_html_block.js" -->
      <div class="menu"> 
        <script type="text/javascript" src="js/menu_html_block.js"></script> 
      </div>
      <!-- /menu -->
      
      <div class="clr"></div>
      <div class="main_menu_bottom"> 
        <!-- social -->
        <div class="social">
          <div class="social_text">Stay Connected</div>
          <a href="#"><img src="images/spacer.gif" class="social1" /></a> <a href="#"><img src="images/spacer.gif" class="social2" /></a> <a href="#"><img src="images/spacer.gif" class="social3" /></a> <a href="#"><img src="images/spacer.gif" class="social4" /></a> <a href="#"><img src="images/spacer.gif" class="social5" /></a> <a href="#"><img src="images/spacer.gif" class="social6" /></a></div>
        <!-- social -->
        <div class="clr"></div>
        <!-- footer -->
        <div class="footer">
          <div class="footer_resize">
            <div class="clr"></div>
            <p>&copy; Copyright <a href="#"><em>SiteName</em></a>.<br />
              All Rights Reserved.<br />
              Design by <a href="http://www.dreamtemplate.com/" target="_blank" title="Dream Templates">dreamtemplate</a>.</p>
            <div class="clr"></div>
          </div>
          <div class="clr"></div>
        </div>
        <!-- footer -->
        <div class="clr"></div>
      </div>
    </div>
    <div class="main_content">
      <div class="scroll-panel">
        <div class="container">
          <div class="cont">
            <div class="mobileview">
              <div class="main_menu_top"> 
                <!-- logo -->
                <div class="logo gap">
                  <div><a href="index.html">Vooveo</a></div>
                  <p>Premium portfolio</p>
                </div>
                <!-- logo -->
                <div class="clr"></div>
              </div>
              
              <!-- menu edit in file "js/menu_html_block.js" -->
              <div class="menu"> 
                <script type="text/javascript" src="js/mobile_menu.js"></script> 
              </div>
              <!-- /menu -->
              
              <div class="social gap">
                <div class="social_text">Stay Connected</div>
                <a href="#"><img src="images/spacer.gif" class="social1" /></a> <a href="#"><img src="images/spacer.gif" class="social2" /></a> <a href="#"><img src="images/spacer.gif" class="social3" /></a> <a href="#"><img src="images/spacer.gif" class="social4" /></a> <a href="#"><img src="images/spacer.gif" class="social5" /></a> <a href="#"><img src="images/spacer.gif" class="social6" /></a></div>
            </div>
            <div id="now_slider" class="gap2"> 
              <!-- DC Dream Accordion Start -->
              <div id="dream_accordion_responsive" style="width:100%; margin:0 auto; height: 385px;position:relative;"> <!-- define slider container width (strict enforce) -->
                <div id="sliderWrapper">
                  <div class="sliderCointainer">
                    <div class="sliderHolder"> 
                      
                      <!-- Slide 1 -->
                      <div class='slideDiv' data-width='500' data-content='' data-link='http://www.google.com' data-target='_blank' data-delay='3000'> 
                        <!-- sample local image: 
                <!-- <img class='stack_img' src='../sliders/dream-accordion/data/images/01.jpg' width='500' height='333' alt='' /> --> 
                        <img class='stack_img' src='http://cdn.pimg.co/p/500x333/111333/fff/img.png' alt='' />
                        <p data-title='title' class="-90,bl,10,10" data-background-color="rgba(51,51,51, 0.6)" data-color="#ffffff">Dream Accordion</p>
                        <p data-title='caption' class="50,200" data-background-color="rgba(51,51,51, 0.6)" data-color="#ffffff">The World's Best Accordion Slider</p>
                        <p data-title='caption' class="50,250" data-background-color="rgba(51,51,51, 0.3)" data-color="#ffffff"> <a style="text-decoration:none" href="#" target="_blank">Supports YouTube, Vimeo & HTML Content.</a></p>
                      </div>
                      
                      <!-- Slide 2 -->
                      <div class='slideDiv' data-width='500' data-content='' data-link='' data-delay='5000'>
                        <div id="gmap_canvas"></div>
                        <p data-title='title' class="-90,bl,10,10" data-background-color="rgba(153,204,0, 0.6)" data-color="#ffffff">Google maps</p>
                        <p data-title='caption' class="50,250" data-background-color="rgba(153,204,0, 0.6)" data-color="#ffffff">Google Maps (try it!)</p>
                      </div>
                      
                      <!-- Slide 3 -->
                      <div class='slideDiv' data-width='500' data-content='youtube' data-link='FG0fTKAqZ5g' data-delay='3000'> <!-- data-link: add youtube video id here --> 
                        <img class='stack_img' src='http://cdn.pimg.co/p/500x333/777ggg/fff/img.png' alt='' />
                        <p data-title='title' class="-90,bl,10,10" data-background-color="rgba(204,0,0, 0.6)" data-color="#ffffff">YouTube Supported</p>
                        <p data-title='caption' class="50,50" data-background-color="rgba(204,0,0, 0.6)" data-color="#ffffff">This is Youtube</p>
                        <p data-title='caption' class="50,250" data-background-color="rgba(51,51,51, 0.6)" data-color="#ffffff">Click anywhere to view the video</p>
                      </div>
                      
                      <!-- Slide 4 -->
                      <div class='slideDiv' data-width='500' data-content='vimeo' data-link='4749536' data-delay='3000'> <!-- data-link: add vimeo video id here --> 
                        <img class='stack_img' src='http://cdn.pimg.co/p/500x333/600666/fff/img.png' alt='' />
                        <p data-title='title' class="-90,bl,10,10" data-background-color="rgba(0,153,204, 0.6)" data-color="#ffffff">Vimeo Supported</p>
                        <p data-title='caption' class="50,50" data-background-color="rgba(0,153,204, 0.6)" data-color="#ffffff">This is Vimeo</p>
                        <p data-title='caption' class="50,250" data-background-color="rgba(51,51,51, 0.6)" data-color="#ffffff">Click to play</p>
                      </div>
                      
                      <!-- Slide 5 -->
                      <div class='slideDiv' data-width='500' data-content='image' data-link='' data-target='' data-delay='3000' > <img class='stack_img' src='http://cdn.pimg.co/p/500x333/111333/fff/img.png' alt='' />
                        <p data-title='title' class="-90,bl,10,10" data-background-color="rgba(255,102,0, 0.6)" data-color="#ffffff">100% Flexible</p>
                        <p data-title='caption' class="50,250" data-background-color="rgba(51,51,51, 0.6)" data-color="#ffffff">Tons of customization options</p>
                      </div>
                      
                      <!-- Slide 6 -->
                      <div class='slideDiv' data-width='500' data-content='' data-link='' data-target='' data-delay='3000'> <img class='stack_img' src='http://cdn.pimg.co/p/500x333/123321/fff/img.png' alt='' />
                        <p data-title='title' class="-90,bl,10,10" data-background-color="rgba(94,73,188, 0.6)" data-color="#ffffff">More Slides!</p>
                        <p data-title='caption' class="50,50" data-background-color="rgba(51,51,51, 0.6)" data-color="#ffffff">Shows more slides gradually</p>
                      </div>
                      
                      <!-- Slide 7 -->
                      <div class='slideDiv' data-width='500' data-content='' data-link='' data-target='' data-delay='3000'> <img class='stack_img' src='http://cdn.pimg.co/p/500x333/777ggg/fff/img.png' alt='' />
                        <p data-title='title' class="-90,bl,10,10" data-background-color="rgba(4,4,4, 0.6)" data-color="#ffffff">Links & more!</p>
                        <p data-title='caption' class="50,200" data-background-color="rgba(128,128,128, 0.6)" data-color="#ffffff">Supports Real Links!</p>
                        <p data-title='caption' class="50,250" data-background-color="rgba(91,91,91, 0.6)" data-color="#ffffff"><a style="text-decoration:none" href="http://www.bing.com" target="_blank">Click me: Bing Search</a></p>
                      </div>
                    </div>
                    <!-- /sliderHolder --> 
                  </div>
                  <!-- /sliderCointainer --> 
                  
                  <!-- accordion controls -->
                  <div class="controls">
                    <div class="controls_prev"><img src='js/dream-accordion/data/icons/controls_prev.gif' width='9' height='13' alt='controls_prev'/></div>
                    <div class="controls_toggle"><img src='js/dream-accordion/data/icons/controls_play.gif' width='9' height='13' alt='controls_toggle'/></div>
                    <div class="controls_next"><img src='js/dream-accordion/data/icons/controls_next.gif' width='9' height='13' alt='controls_next'/></div>
                  </div>
                  
                  <!-- accordion scroll -->
                  <div class="scroll">
                    <div class="scrollTrack"></div>
                    <div class="scrollBar"></div>
                  </div>
                  <div class="fontMeasure">a</div>
                  
                  <!-- preloader 
            <div class="mediaPreloader"></div>--> 
                  
                </div>
                <!-- /sliderWrapper --> 
              </div>
              <!-- DC Dream Accordion End -->
              <div class="clr"></div>
            </div>
            
            <!-- now_page -->
            <div class="now_page">
              <div class="now_page_resize">
                <h1>Cras sit amet libero eros, <em>in ultricies lorem</em>. Nunc et odio neque. <span>Cras sit amet libero eros, in ultricies lorem. Nunc et odio neque. Maecenas vehicula interdum hendrerit. Integer hendrerit orci ullamcorper neque pellentesque feugiat. Aliquam magna metus, fringilla non ultrices id, fringilla eu erat. </span></h1>
                <div class="clr"></div>
              </div>
              <div class="clr"></div>
            </div>
            <!-- /now_page -->
            <div class="clr"></div>
            <div class="content" id="gallery">
              <div class="content_resize">
                <div class="cont1">
                  <div class="cols3">
                    <div class="one-third column alpha">
                      <div class="col3">
                        <div class="div_h3_act_href ico_1">
                          <h3 class="no_margin_top"><a href="#"><em>Fresh &amp; Clean <br />
                            Design</em></a></h3>
                          <p class="detail">Sed consequat suscipit est, <br />
                            vitae dapibus ipsum iaculis sed. </p>
                        </div>
                      </div>
                    </div>
                    <div class="one-third column">
                      <div class="col3">
                        <div class="div_h3_act_href ico_2">
                          <h3 class="no_margin_top"><a href="#"><em>Easily <br />
                            Customization</em></a></h3>
                          <p class="detail">Donec ut enim in risus <br />
                            molestie posuere non eu massa. </p>
                        </div>
                      </div>
                    </div>
                    <div class="one-third column omega">
                      <div class="col3 last">
                        <div class="div_h3_act_href ico_3">
                          <h3 class="no_margin_top"><a href="#"><em>24/7 <br />
                            Support</em> </a></h3>
                          <p class="detail">Morbi tortor arcu, <br />
                            aliqet nec aliquet at, 
                            convallis ut eros. </p>
                        </div>
                      </div>
                    </div>
                    <div class="clr"></div>
                  </div>
                  <div class="clr"></div>
                  <div class="sep"></div>
                  <div class="cont3">
                    <div class="h2_background">
                      <h2><span>Recent Projects</span></h2>
                      <!--<div class="h2_arrows"> <a href="#" class="arr_href"><img src="images/spacer.gif" class="arr_l"/></a> <a href="#" class="arr_href"><img src="images/spacer.gif" class="arr_r"/></a> </div>-->
                      <div class="clr"></div>
                    </div>
                    <div id="wrap">
                      <ul id="mycarousel" class="jcarousel-skin-tango">
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/72216c" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/72216c" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/953e7e" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/953e7e" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/a15adb" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/a15adb" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/a4e830" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/a4e830" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/d4d463" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/d4d463" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/7a2b2" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/7a2b2" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/d69931" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/d69931" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/65808b" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/65808b" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/3b8b9c" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/3b8b9c" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                        <li>
                          <div class="hover_bg_box2">
                            <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/8875f4" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/160x110/8875f4" width="160" height="110" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#">Vestibulum auctor</a> <span>Sed consequat suscipit</span> </h3>
                            <p class="detail"><a href="#"><em>Read More</em></a></p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="clr"></div>
                  </div>
                  <div class="clr"></div>
                </div>
                <div class="clr"></div>
              </div>
              <div class="clr"></div>
            </div>
            <div class="prefooter">
              <div class="prefooter_bg">
                <div class="prefooter_resize">
                  <div class="four columns alpha">
                    <div class="fcol">
                      <div class="dark small">
                        <h2><span class="h2_small"><em class="dark">Latest Tweets</em></span></h2>
                      </div>
                      <!-- DC Twitter Start -->
                      <div id="ticker" class="query"></div>
                      <!-- DC Twitter End --> 
                    </div>
                  </div>
                  <div class="four columns">
                    <div class="fcol">
                      <div class="dark small">
                        <h2><span class="h2_small"><em class="dark">Stay Connected</em></span></h2>
                      </div>
                      <p> 123 Example Way<br />
                        San Francisco, CA 94108<br />
                        USA <br />
                        <br />
                        Phone: (888) 123-4567 <br />
                        Fax: (887) 123-4567 <br />
                        contact&#64;example.com <br />
                      </p>
                      <!-- DC Facebook Likes Start -->
                      <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/DreamTemplate&send=false&layout=standard&width=200&show_faces=false&action=like&colorscheme=light&font&height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:45px;" allowTransparency="true"></iframe>
                      <!-- DC Facebook Likes End --> 
                    </div>
                  </div>
                  <div class="four columns">
                    <div class="fcol">
                      <div class="dark small">
                        <h2><span class="h2_small"><em class="dark">Our Commitment</em></span></h2>
                      </div>
                      <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br />
                        <br />
                        If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
                      <div class="clr"></div>
                    </div>
                  </div>
                  <div class="four columns omega">
                    <div class="fcol last">
                      <div class="dark small">
                        <div class="dark small">
                          <h2><span class="h2_small"><em class="dark">Keep Updated</em></span></h2>
                        </div>
                        <p>Subscribe to our mailing list for offers, news updates and more!</p>
                        
                        <!-- Mailing List Form -->
                        <div id="mailform-subscribe">
                          <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                            <input type="email" size="15" value="Your Email" name="EMAIL" class="required email" id="mce-EMAIL" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                            <div id="mce-responses" class="clear">
                              <div class="response" id="mce-error-response" style="display:none"></div>
                              <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <div>
                              <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                            </div>
                          </form>
                        </div>
                        <!-- Mailing List Form End --> 
                      </div>
                    </div>
                    <div class="clr"></div>
                  </div>
                  <div class="clr"></div>
                  <div class="prefooter_resize_bottom"></div>
                  <div class="clr"></div>
                </div>
                <div class="clr"></div>
              </div>
              <div class="copyright">
                <p>&copy; Copyright <a href="#"><em>SiteName</em></a>.
                  All Rights Reserved. Design by <a href="http://www.dreamtemplate.com/" target="_blank" title="Dream Templates">dreamtemplate</a>.</p>
              </div>
            </div>
          </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
</body>
</html>

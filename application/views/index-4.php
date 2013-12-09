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

<!-- DC Revolution Slider CSS -->
<link rel="stylesheet" type="text/css" href="js/revolution/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/revolution/rs-plugin/css/settings.css" media="screen" />

<!-- DC Revolution Slider JS -->
<script type="text/javascript" src="js/revolution/rs-plugin/js/jquery.dcodes.plugins.min.js"></script>
<script type="text/javascript" src="js/revolution/rs-plugin/js/jquery.dcodes.revolution.js"></script>

<!-- DC Revolution Slider Settings -->
<script type="text/javascript">

var tpj=jQuery;
//tpj.noConflict();

tpj(document).ready(function() {

if (tpj.fn.cssOriginal!=undefined)
	tpj.fn.css = tpj.fn.cssOriginal;

	tpj('.rev_banner').revolution(
		{
			delay:6000,
			startheight:490,
			startwidth:890,

			hideThumbs:200,

			thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
			navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
			navigationStyle:"navbar",				//round,square,navbar

			touchenabled:"on",						// Enable Swipe Function : on/off
			onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

			navOffsetHorizontal:0,
			navOffsetVertical:20,

			shadow:1,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
			fullWidth:"off",							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus

			stopLoop:"off"							// on == Stop loop at the last Slie,  off== Loop all the time.
		});

	});

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
              <!-- DC Revolution Slider Start -->
              <div class="rev_bannercontainer">
                <div class="rev_banner">
                  <ul>
                    
                    <!-- slide 1 -->
                    <li data-transition="curtain-3" data-slotamount="5"  data-masterspeed="300" data-thumb="js/revolution/images/thumbs/regular_thumb1.jpg" > <img src="js/revolution/images/slide1_a.jpg">
                      <div class="caption sfb" data-x="490" data-y="40" data-speed="6900" data-start="500" data-easing="easeOutBack"><img src="js/revolution/images/fish1.png"></div>
                      <div class="caption sfb" data-x="450" data-y="70" data-speed="7900" data-start="900" data-easing="easeOutBack"><img src="js/revolution/images/fish1.png"></div>
                      <div class="caption sfb" data-x="550" data-y="70" data-speed="8900" data-start="1200" data-easing="easeOutBack"><img src="js/revolution/images/fish1.png"></div>
                      <div class="caption lfr" data-x="550" data-y="120" data-speed="3700" data-start="800" data-easing="easeOutExpo"><img src="js/revolution/images/fish2.png"></div>
                      <div class="caption lfr" data-x="620" data-y="240" data-speed="4700" data-start="1000" data-easing="easeOutExpo"><img src="js/revolution/images/fish3.png"></div>
                      <div class="caption lfr" data-x="490" data-y="200" data-speed="2700" data-start="800" data-easing="easeOutExpo"><img src="js/revolution/images/fish4.png"></div>
                      <div class="caption lfr" data-x="660" data-y="50" data-speed="8700" data-start="800" data-easing="easeOutExpo"><img src="js/revolution/images/fish5.png"></div>
                      <div class="caption lfr" data-x="377" data-y="290" data-speed="2700" data-start="800" data-easing="easeOutExpo"><img src="js/revolution/images/fish6.png"></div>
                      <div class="caption lfb big_white"  data-x="50" data-y="47" data-speed="900" data-start="1700" data-easing="easeOutBack" style="padding:15px;"> Revolution Slider</div>
                      <div class="caption lft big_white"  data-x="50" data-y="119" data-speed="900" data-start="1900" data-easing="easeOutBack" style="padding:9px;">World's <span style="font-weight:normal;">#1</span><em> Parallax Slider</em></div>
                      <div class="caption lfr medium_grey"  data-x="60" data-y="190" data-speed="300" data-start="2500" data-easing="easeOutExpo">Unlimited Transitions</div>
                      <div class="caption sfl" data-x="60" data-y="230" data-speed="300" data-start="2600" data-easing="easeOutExpo"><img src="js/revolution/images/check.png"></div>
                      <div class="caption lfr small_text"  data-x="120" data-y="228" data-speed="300" data-start="2600" data-easing="easeOutExpo">Sliding, Fading, Slots, Box Transitions<br/>
                        <span style="color: #ccc;">SLIDER REVOLUTION</span> has it all!</div>
                      <div class="caption sfl" data-x="60" data-y="280" data-speed="300" data-start="2900" data-easing="easeOutExpo"><img src="js/revolution/images/check.png"></div>
                      <div class="caption lfr small_text"  data-x="120" data-y="287" data-speed="300" data-start="2900" data-easing="easeOutExpo">Responsive & Mobile Optimized</div>
                      <div class="caption sfl" data-x="60" data-y="330" data-speed="300" data-start="3200" data-easing="easeOutExpo"><img src="js/revolution/images/check.png"></div>
                      <div class="caption lfr small_text"  data-x="120" data-y="328" data-speed="300" data-start="3200" data-easing="easeOutExpo">Customizable Navigation<br/>
                        Arrows, Bullets, Thumbs</div>
                      <div class="caption sfb" data-x="55" data-y="380" data-speed="1000" data-start="3500" data-easing="easeOutBack"><a href="http://www.dcodes.net/" target="_blank" class="button blue small">More Details</a></div>
                    </li>
                    
                    <!-- slide 2 -->
                    <li data-transition="boxfade" data-slotamount="12"  data-masterspeed="300"  data-link="http://www.nasa.gov" title="Visit NASA Website" data-thumb="js/revolution/images/thumbs/regular_thumb2.jpg"> <img src="js/revolution/images/slide2_a.jpg"  >
                      <div class="caption lft big_white"  data-x="350" data-y="80" data-speed="900" data-start="1200" data-easing="easeOutBack">The Planets</div>
                      <div class="caption sfl" data-x="-270" data-y="0" data-speed="700" data-start="1700" data-easing="easeOutBack"><img src="js/revolution/images/slide2_b.gif"></div>
                      <div class="caption sfb" data-x="160" data-y="210" data-speed="800" data-start="1200" data-easing="easeOutBack"><img src="js/revolution/images/slide2_c.png"></div>
                      <div class="caption sfb" data-x="210" data-y="215" data-speed="900" data-start="1300" data-easing="easeOutBack"><img src="js/revolution/images/slide2_d.png"></div>
                      <div class="caption sfb" data-x="290" data-y="220" data-speed="1000" data-start="1400" data-easing="easeOutBack"><img src="js/revolution/images/slide2_e.png"></div>
                      <div class="caption sfb" data-x="370" data-y="240" data-speed="1100" data-start="1500" data-easing="easeOutBack"><img src="js/revolution/images/slide2_f.png"></div>
                      <div class="caption sfb" data-x="410" data-y="230" data-speed="1200" data-start="1600" data-easing="easeOutBack"><img src="js/revolution/images/slide2_g.png"></div>
                      <div class="caption sfb" data-x="540" data-y="225" data-speed="1300" data-start="1700" data-easing="easeOutBack"><img src="js/revolution/images/slide2_h.png"></div>
                      <div class="caption sfb" data-x="700" data-y="210" data-speed="1400" data-start="1800" data-easing="easeOutBack"><img src="js/revolution/images/slide2_i.png"></div>
                      <div class="caption sfb" data-x="760" data-y="200" data-speed="1500" data-start="1900" data-easing="easeOutBack"><img src="js/revolution/images/slide2_j.png"></div>
                      <div class="caption sfb" data-x="825" data-y="190" data-speed="1600" data-start="2000" data-easing="easeOutBack"><img src="js/revolution/images/slide2_k.png"></div>
                      <div class="caption sfb small_text" style="padding:8px;"  data-x="350" data-y="120" data-speed="300" data-start="2600" data-easing="easeOutExpo">The Amazing Solar System</div>
                    </li>
                    
                    <!-- slide 3 -->
                    <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="js/revolution/images/thumbs/regular_thumb3.jpg"> <img src="js/revolution/images/slide3_a.jpg"  >
                      <div class="caption sfb" data-x="340" data-y="30" data-speed="900" data-start="500" data-easing="easeOutBack"><img src="js/revolution/images/slide3_b.png"></div>
                      <div class="caption lfl" data-x="290" data-y="160" data-speed="700" data-start="800" data-easing="easeOutExpo"><img src="js/revolution/images/slide3_c.png"></div>
                      <div class="caption sfb" data-x="470" data-y="300" data-speed="700" data-start="1200" data-easing="easeOutExpo"><img src="js/revolution/images/slide3_d.png"></div>
                      <div class="caption sfb medium_grey" style="padding:8px;"  data-x="40" data-y="320" data-speed="300" data-start="1800" data-easing="easeOutExpo">100% Responsive</div>
                      <div class="caption lfl very_big_white"  data-x="40" data-y="50" data-speed="300" data-start="1200" data-easing="easeOutExpo" style="padding:9px;">PC</div>
                      <div class="caption lfl very_big_white"  data-x="40" data-y="140" data-speed="300" data-start="1300" data-easing="easeOutExpo" style="padding:9px;">Tablet</div>
                      <div class="caption lfl very_big_white"  data-x="40" data-y="230" data-speed="300" data-start="1400" data-easing="easeOutExpo" style="padding:9px;">Mobile</div>
                      <div class="caption lfb medium_grey"  data-x="40" data-y="400" data-speed="300" data-start="1500" data-easing="easeOutExpo" style="padding:9px;"><a href="#">Signup Now</a></div>
                    </li>
                    
                    <!-- slide 4 -->
                    <li data-transition="slideup" data-slotamount="20" data-masterspeed="300" data-delay="10000" data-thumb="js/revolution/images/thumbs/regular_thumb5.jpg"> <img src="js/revolution/images/slide4_a.jpg"  >
                      <div class="caption lfb boxshadow" data-x="70" data-y="120" data-speed="900" data-start="500" data-easing="easeOutBack">
                        <iframe src="http://player.vimeo.com/video/49224248?title=0&amp;byline=0&amp;portrait=0;api=1" width="460" height="259"></iframe>
                      </div>
                      <div class="caption sft big_black"  data-x="550" data-y="120" data-speed="300" data-start="1200" data-easing="easeOutExpo">Video Support</div>
                      <div class="caption sft big_white"  data-x="550" data-y="157" data-speed="300" data-start="1300" data-easing="easeOutExpo">Vimeo Example</div>
                      <div class="caption lfb medium_grey"  data-x="550" data-y="210" data-speed="300" data-start="1400" data-easing="easeOutExpo">You can easily add</div>
                      <div class="caption lfb medium_grey"  data-x="550" data-y="234" data-speed="300" data-start="1500" data-easing="easeOutExpo">Vimeo Videos</div>
                      <div class="caption lfb medium_grey"  data-x="550" data-y="258" data-speed="300" data-start="1600" data-easing="easeOutExpo">to your Slides</div>
                      <div class="caption sfb" data-x="0" data-y="0" data-speed="300" data-start="200" data-easing="easeOutBack"><img src="js/revolution/images/vimeo.jpg"></div>
                    </li>
                    
                    <!-- slide 5 -->
                    <li data-transition="slidedown" data-slotamount="14"  data-masterspeed="300" data-delay="10000" data-thumb="js/revolution/images/thumbs/regular_thumb6.jpg"> <img src="js/revolution/images/slide5_a.jpg"  >
                      <div class="caption lft boxshadow" data-x="70" data-y="120" data-speed="900" data-start="500" data-easing="easeOutBack">
                        <iframe src="http://www.youtube.com/embed/JYKpIr1lSG0?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0" width="460" height="259"></iframe>
                      </div>
                      <div class="caption sft big_black"  data-x="550" data-y="120" data-speed="300" data-start="1200" data-easing="easeOutExpo">Video Support</div>
                      <div class="caption sft big_white"  data-x="550" data-y="157" data-speed="300" data-start="1300" data-easing="easeOutExpo">Youtube Example</div>
                      <div class="caption lfb medium_grey"  data-x="550" data-y="210" data-speed="300" data-start="1400" data-easing="easeOutExpo">You can easily add</div>
                      <div class="caption lfb medium_grey"  data-x="550" data-y="234" data-speed="300" data-start="1500" data-easing="easeOutExpo">Youtube Videos</div>
                      <div class="caption lfb medium_grey"  data-x="550" data-y="258" data-speed="300" data-start="1600" data-easing="easeOutExpo">to your Slides</div>
                      <div class="caption sfb" data-x="0" data-y="0" data-speed="300" data-start="200" data-easing="easeOutBack"><img src="js/revolution/images/youtube.png"></div>
                    </li>
                  </ul>
                  <div class="tp-bannertimer"></div>
                </div>
                <!-- /rev_banner --> 
              </div>
              <!-- DC Revolution Slider End -->
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

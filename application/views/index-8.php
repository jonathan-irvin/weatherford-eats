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

<!-- DC Ken Burns Panel Slider CSS -->
<link rel="stylesheet" type="text/css" href="sliders/kbpanel-slider/css/kenburns-panel-settings.css" media="screen" />

<!-- DC Javascript Library -->
<script type="text/javascript" src="js/jquery.easing.js"></script><!-- jQuery Easing (do not call twice on same page) -->

<!-- DC Ken Burns Panel Slider JS -->
<script type="text/javascript" src="sliders/kbpanel-slider/js/jquery.waitforimages.js"></script>
<script type="text/javascript" src="sliders/kbpanel-slider/js/jquery.cssAnimate.mini.js"></script>
<script type="text/javascript" src="sliders/kbpanel-slider/js/jquery.touchwipe.min.js"></script>
<script type="text/javascript" src="sliders/kbpanel-slider/js/jquery.dcodes.kenburns-panel.min.js"></script>

<!-- DC Ken Burns Panel Slider Settings -->
<script type="text/javascript">
$(function() {   
    $('.kbpanel-bannercontainer').kenburn({
 
        thumbWidth:70, // thumbnail width
        thumbHeight:40, // thumbnail height
         
        thumbAmount:4,  // number of thumbnails to show
        thumbStyle:"both",   // thumb, bullet, none, both
        thumbVideoIcon:"on", // show a video icon for video content: off, on
         
        thumbVertical:"bottom",
        thumbHorizontal:"center",                          
        thumbXOffset:0,
        thumbYOffset:40,
        bulletXOffset:0,
        bulletYOffset:-16,
        hideThumbs:"on",
        touchenabled:'on',  // allow touch swipe (suitable for mobile devices): on, off
        pauseOnRollOverThumbs:'off', // pause slider when mouse over thumbnail
        pauseOnRollOverMain:'on', // pause slider when mouse over slider
        preloadedSlides:2, // number of slides to preload during startup
         
        timer:5, // time before next slide (5 = 5 seconds)
         
        debug:"off",                       
         
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //                                               Google Fonts !!                                             //
        // local GoogleFont JS from your server: http://www.yourdomain.com/kb-plugin/js/jquery.googlefonts.js        //
        // GoogleFonts from Original Source: http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js or https:... //
        //          PT+Sans+Narrow:400,700                                                                          //
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        googleFonts:'Oswald',
        googleFontJS:'sliders/kbpanel-slider/js/jquery.googlefonts.js'
    });
         
         
    $('.tnone').click(function() {
        $('.tbull').removeClass('selected');
        $('.tthumb').removeClass('selected');
        $('.tnone').addClass('selected');
        $('.tauto').removeClass('selected');
        $('.kenburn_thumb_container').css({'visibility':'hidden'});
        $('.thumbbuttons').css({'visibility':'hidden'});       
    });
     
    $('.tthumb').click(function() {
        $('.tbull').removeClass('selected');
        $('.tauto').removeClass('selected');
        $('.tthumb').addClass('selected');
        $('.tnone').removeClass('selected');
        $('.kenburn_thumb_container').css({'visibility':'visible'});
        $('.thumbbuttons').css({'visibility':'hidden'});
        $('body').addClass('tp_showthumbsalways');
        $('.kenburn_thumb_container').animate({'opacity':1},{duration:300,queue:false});
         
    });
     
    $('.tauto').click(function() {
        $('.tauto').addClass('selected');
        $('.tthumb').removeClass('selected');
        $('.tnone').removeClass('selected');
        $('.tbull').removeClass('selected');
        $('body').removeClass('tp_showthumbsalways');
        $('.kenburn_thumb_container').css({'visibility':'visible'});
        $('.thumbbuttons').css({'visibility':'hidden'});
        setTimeout(function() {
            $('.kenburn_thumb_container').animate({'opacity':0},{duration:300,queue:false});
        },100);
         
    });
     
    $('.tbull').click(function() {
        $('.tbull').addClass('selected');
        $('.tauto').removeClass('selected');
        $('.tthumb').removeClass('selected');
        $('.tnone').removeClass('selected');
        $('.kenburn_thumb_container').css({'visibility':'hidden'});
        $('.thumbbuttons').css({'visibility':'visible'});       
    });
     
    $('body').addClass('tp_showthumbsalways');
    $('.tthumb').click();
         
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
              <!-- DC Ken Burns Panel slider Start -->
              <div style="margin:0 auto; position:relative;"> <!-- define slider container width (by strict force) -->
                <div class="demoholder">
                  <div class="bggradient"></div>
                  <!-- <div class="kbpanel-bannercontainer centerme light"> light theme -->
                  <div class="kbpanel-bannercontainer centerme dark">
                    <ul>
                      <!-- Slide 1 -->
                      <li data-transition="fade" data-startalign="right,bottom" data-zoom="in" data-zoomfact="3" data-endAlign="center,top" data-panduration="12" data-colortransition="4"> <img alt="" src="http://cdn.pimg.co/p/940x400/772266/fff/img.png" data-bw="http://cdn.pimg.co/p/940x400/772266/fff/img.png" data-thumb="http://cdn.pimg.co/p/120x70/772266/fff/img.png">
                        <div class="creative_layer">
                          <div class="cp-left faderight" >
                            <p class="cp-title">Ken Burns Panel Slider</p>
                            <p>Supports IE, Firefox, Chrome, Safari, Opera.</p>
                            <p>The ultimate ken burns slider is here.<br />
                              Supports URLs, YouTube/Vimeo Videos<br />
                              multiple transition effects, transparent<br />
                              panels, bullets/thumbs and more! <br />
                            </p>
                            <a style="margin-top:10px" class="kb-button" href="#">See More</a>
                            <div class="clear"></div>
                          </div>
                        </div>
                      </li>
                      <!-- Slide 2 -->
                      <li data-transition="slide" data-startalign="right,top" data-zoom="out" data-zoomfact="1.5" data-endAlign="left,bottom" data-panduration="8" data-colortransition="4"> <img alt="" src="http://cdn.pimg.co/p/940x400/343266/fff/img.png" data-bw="http://cdn.pimg.co/p/940x400/343266/fff/img.png" data-thumb="http://cdn.pimg.co/p/120x70/343266/fff/img.png">
                        <div class="video_kenburner">
                          <div class="video_kenburn_wrap">
                            <div class="video_video">
                              <iframe class="video_clip" src="http://player.vimeo.com/video/4749536?title=0&byline=0&portrait=0"></iframe>
                            </div>
                            <div class="video_details">
                              <p class="cp-title">Vimeo Video</p>
                              <p>Watch sample embedded Vimeo video.<br />
                              </p>
                              <a style="margin-top:10px" class="kb-button" href="#">See More</a>
                              <div class="clear"></div>
                            </div>
                            <div class="close"></div>
                          </div>
                        </div>
                        <div class="creative_layer ">
                          <div class="cp-right fade">
                            <p class="cp-title">Vimeo Support</p>
                            <p>This slider supports embedded content.<br />
                              Click the play button to play a sample video.<br />
                            </p>
                            <a style="margin-top:10px" class="kb-button" href="#">See More</a>
                            <div class="clear"></div>
                          </div>
                        </div>
                      </li>
                      <!-- Slide 3 -->
                      <li data-transition="slide" data-startalign="left,bottom" data-zoom="in" data-zoomfact="3" data-endAlign="center,center" data-panduration="8" data-colortransition="4"> <img alt="" src="http://cdn.pimg.co/p/940x400/600666/fff/img.png" data-bw="http://cdn.pimg.co/p/940x400/600666/fff/img.png" data-thumb="http://cdn.pimg.co/p/120x70/600666/fff/img.png">
                        <div class="creative_layer ">
                          <div class="cp-bottom fadeup">
                            <p class="cp-title">Did You Know?</p>
                            <p>The Ken Burns effect is a popular name for a type of panning and zooming effect used in video production from still imagery.</p>
                          </div>
                        </div>
                      </li>
                      <!-- Slide 4 -->
                      <li data-transition="fade" data-startalign="right,top" data-zoom="out" data-zoomfact="1.2" data-endAlign="left,bottom" data-panduration="11" data-colortransition="4"> <img alt="" src="http://cdn.pimg.co/p/940x400/858652/fff/img.png" data-bw="http://cdn.pimg.co/p/940x400/858652/fff/img.png" data-thumb="http://cdn.pimg.co/p/120x70/858652/fff/img.png">
                        <div class="creative_layer ">
                          <div class="cp-top fadedown" >
                            <p class="cp-title">Your Portfolio, Revealed.</p>
                            <p>Showcase your work and bring still images to life!</p>
                          </div>
                        </div>
                      </li>
                      <!-- Slide 5 -->
                      <li data-transition="fade" data-startalign="center,top" data-zoom="in" data-zoomfact="1.6" data-endAlign="center,bottom" data-panduration="12" data-colortransition="4"> <img alt="" src="http://cdn.pimg.co/p/940x400/300307/fff/img.png" data-bw="http://cdn.pimg.co/p/940x400/300307/fff/img.png" data-thumb="http://cdn.pimg.co/p/120x70/300307/fff/img.png">
                        <div class="video_kenburner">
                          <div class="video_kenburn_wrap">
                            <div class="video_video">
                              <iframe class="video_clip" src="http://www.youtube.com/embed/FG0fTKAqZ5g?hd=1&wmode=opaque&autohide=1&showinfo=0"></iframe>
                            </div>
                            <div class="video_details">
                              <p class="cp-title">Youtube Video</p>
                              <p>YouTube Video</p>
                              <p>This is a sample YouTube video.</p>
                              <a style="margin-top:10px" class="kb-button" href="#">See More</a>
                              <div class="clear"></div>
                            </div>
                            <div class="close"></div>
                          </div>
                        </div>
                        <div class="creative_layer ">
                          <div class="cp-left fade">
                            <p class="cp-title">YouTube Support</p>
                            <p>Click to Play!</p>
                            <p>This innovative slider supports<br />
                              YouTube content. Click to play!</p>
                            <a style="margin-top:10px" class="kb-button" href="#">See More</a>
                            <div class="clear"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- /kbpanel-bannercontainer --> 
                  <!-- Banner Shadow Effect -->
                  <div class="bannershadow centerme"><img width="100%" height="40px" src="sliders/kbpanel-slider/images/bannershadow.png/fff/img.png"></div>
                </div>
                <!-- /demoholder --> 
              </div>
              <!-- DC Ken Burns Panel slider End -->
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
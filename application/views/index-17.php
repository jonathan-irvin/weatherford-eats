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

<!-- DC Showcase Slider CSS -->
<link rel="stylesheet" href="css/showcase/showcase.css" />

<!-- DC Showcase Slider JS -->
<!-- requires jquery library -->
<script type="text/javascript" src="sliders/showcase/jquery.aw-showcase.js"></script>
<script type="text/javascript">
//Responsive js

$(function(){
    $(window).resize(function(){
	var rwidth=$(this).width();
     if(rwidth >959)
	 {
        $(document).ready(function() {
        //$.noConflict();
        <!-- DC Showcase Slider Settings -->
		jQuery("#showcase").awShowcase(
	    {
		content_width:			816, // width of slider
		content_height:			470, // height of slider
		fit_to_parent:			false,
		auto:					true, // auto play slider on load
		interval:				3000, // interval between slides (3000 = 3 seconds)
		continuous:				true,
		loading:				true,
		tooltip_width:			142, // tooltip width
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true, // show side left/right arrow buttons
		buttons:				true, // show pagination bullets below slider
		btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
		keybord_keys:			true, // enable keyboard keys (left/right)
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true, // pause slide on hover
		stoponclick:			true,
		transition:				'vslide', /* hslide/vslide/fade */
		transition_delay:		300,
		transition_speed:		500,
		show_caption:			'onhover', /* onload/onhover/show */
		thumbnails:				true, // show thumbnails
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
	});
	    <!-- DC Showcase Slider Settings -->

		
        });
     }
	else if(rwidth >= 480 && rwidth <= 767)
	{
		jQuery('#image1').attr('src','http://cdn.pimg.co/p/290x270/777ggg/fff/img.png');
		jQuery('#image2').attr('src','http://cdn.pimg.co/p/290x270/600666/fff/img.png');
		jQuery('#image3').attr('src','http://cdn.pimg.co/p/290x270/111333/fff/img.png');
		jQuery('#image4').attr('src','http://cdn.pimg.co/p/290x270/123321/fff/img.png');
	    jQuery('#image5').attr('src','http://cdn.pimg.co/p/290x270/321321/fff/img.png'); 
		jQuery('#image6').attr('src','http://cdn.pimg.co/p/290x270/777ggg/fff/img.png'); 
		jQuery('#image7').attr('src','http://cdn.pimg.co/p/290x270/789987/fff/img.png'); 
		<!-- DC Showcase Slider Settings -->
		jQuery("#showcase").awShowcase(
	    {
		content_width:			290, // width of slider
		content_height:			270, // height of slider
		fit_to_parent:			false,
		auto:					true, // auto play slider on load
		interval:				3000, // interval between slides (3000 = 3 seconds)
		continuous:				true,
		loading:				true,
		tooltip_width:			200, // tooltip width
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true, // show side left/right arrow buttons
		buttons:				true, // show pagination bullets below slider
		btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
		keybord_keys:			true, // enable keyboard keys (left/right)
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true, // pause slide on hover
		stoponclick:			true,
		transition:				'vslide', /* hslide/vslide/fade */
		transition_delay:		300,
		transition_speed:		500,
		show_caption:			'onhover', /* onload/onhover/show */
		thumbnails:				true, // show thumbnails
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
	});
	    <!-- DC Showcase Slider Settings -->
		
	}
	else if(rwidth <= 479)
	{
		jQuery('#image1').attr('src','http://cdn.pimg.co/p/170x160/111333/fff/img.png');
		jQuery('#image2').attr('src','http://cdn.pimg.co/p/170x160/777ggg/fff/img.png');
		jQuery('#image3').attr('src','http://cdn.pimg.co/p/170x160/789987/fff/img.png');
		jQuery('#image4').attr('src','http://cdn.pimg.co/p/170x160/600666/fff/img.png');
	    jQuery('#image5').attr('src','http://cdn.pimg.co/p/170x160/111333/fff/img.png'); 
		jQuery('#image6').attr('src','http://cdn.pimg.co/p/170x160/123321/fff/img.png'); 
		jQuery('#image7').attr('src','http://cdn.pimg.co/p/170x160/321321/fff/img.png'); 
		<!-- DC Showcase Slider Settings -->
		jQuery("#showcase").awShowcase(
	    {
		content_width:			170, // width of slider
		content_height:			160, // height of slider
		fit_to_parent:			false,
		auto:					true, // auto play slider on load
		interval:				3000, // interval between slides (3000 = 3 seconds)
		continuous:				true,
		loading:				true,
		tooltip_width:			200, // tooltip width
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true, // show side left/right arrow buttons
		buttons:				true, // show pagination bullets below slider
		btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
		keybord_keys:			true, // enable keyboard keys (left/right)
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true, // pause slide on hover
		stoponclick:			true,
		transition:				'vslide', /* hslide/vslide/fade */
		transition_delay:		300,
		transition_speed:		500,
		show_caption:			'onhover', /* onload/onhover/show */
		thumbnails:				true, // show thumbnails
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
	});
	    <!-- DC Showcase Slider Settings -->
	
	}
	else if(rwidth >= 768 && rwidth <= 959)
	 {
		jQuery('#image1').attr('src','http://cdn.pimg.co/p/625x270/777ggg/fff/img.png');
		jQuery('#image2').attr('src','http://cdn.pimg.co/p/625x270/789987/fff/img.png');
		jQuery('#image3').attr('src','http://cdn.pimg.co/p/625x270/321321/fff/img.png');
		jQuery('#image4').attr('src','http://cdn.pimg.co/p/625x270/123321/fff/img.png');
	    jQuery('#image5').attr('src','http://cdn.pimg.co/p/625x270/600666/fff/img.png'); 
		jQuery('#image6').attr('src','http://cdn.pimg.co/p/625x270/111333/fff/img.png'); 
		jQuery('#image7').attr('src','http://cdn.pimg.co/p/625x270/123321/fff/img.png'); 
		<!-- DC Showcase Slider Settings -->
		jQuery("#showcase").awShowcase(
	    {
		content_width:			626, // width of slider
		content_height:			270, // height of slider
		fit_to_parent:			false,
		auto:					true, // auto play slider on load
		interval:				3000, // interval between slides (3000 = 3 seconds)
		continuous:				true,
		loading:				true,
		tooltip_width:			200, // tooltip width
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true, // show side left/right arrow buttons
		buttons:				true, // show pagination bullets below slider
		btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
		keybord_keys:			true, // enable keyboard keys (left/right)
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true, // pause slide on hover
		stoponclick:			true,
		transition:				'vslide', /* hslide/vslide/fade */
		transition_delay:		300,
		transition_speed:		500,
		show_caption:			'onhover', /* onload/onhover/show */
		thumbnails:				true, // show thumbnails
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
	});
	    <!-- DC Showcase Slider Settings -->
		
		
		
	 }
     })
  .resize();//trigger resize on page load<br>
});
</script>
<!-- DC Showcase Slider Settings -->
<script type="text/javascript">

/*$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			838, // width of slider
		content_height:			470, // height of slider
		fit_to_parent:			false,
		auto:					true, // auto play slider on load
		interval:				3000, // interval between slides (3000 = 3 seconds)
		continuous:				true,
		loading:				true,
		tooltip_width:			200, // tooltip width
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true, // show side left/right arrow buttons
		buttons:				true, // show pagination bullets below slider
		btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
		keybord_keys:			true, // enable keyboard keys (left/right)
		mousetrace:				false, /* Trace x and y coordinates for the mouse *
		pauseonover:			true, // pause slide on hover
		stoponclick:			true,
		transition:				'vslide', /* hslide/vslide/fade *
		transition_delay:		300,
		transition_speed:		500,
		show_caption:			'onhover', /* onload/onhover/show *
		thumbnails:				true, // show thumbnails
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first *
		thumbnails_direction:	'vertical', /* vertical/horizontal *
		thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. *
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. *
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. *
		viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. *
	});
});
*/
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
              <!-- DC Showcase Slider Start -->
              <div id="showcase" class="showcase"> 
                
                <!-- local sample image: 
                <img src="dcodes/sliders/images/showcase/838x470-image.jpg" width="838" height="470" /> --> 
                
                <!-- Slide 1 -->
                <div class="showcase-slide">
                  <div class="showcase-content"> <img src="http://cdn.pimg.co/p/838x470/777ggg/fff/img.png" id="image1" /> </div>
                  <div class="showcase-thumbnail"> <img src="http://cdn.pimg.co/p/140x120/789987/fff/img.png" width="140" />
                    <div class="showcase-thumbnail-caption">Vision</div>
                    <div class="showcase-thumbnail-cover"></div>
                  </div>
                  
                  <!-- Showcase Tooltips -->
                  <div class="showcase-tooltips"> 
                    <!-- Each anchor in .showcase-tooltips represents a tooltip. The coords attribute represents the position of the tooltip. --> 
                    <a href="http://www.bing.com" coords="334,230" target="_blank">Tooltips can be placed anywhere!</a> <a href="http://www.dcodes.net" coords="470,190" target="_blank">Another example tooltip. Just define two coordinates!</a> 
                    
                    <!-- You can add multiple elements to the anchor-tag which are display in the tooltip. --> 
                    <a href="http://www.google.com" coords="256, 192" target="_blank"> <img src="http://cdn.pimg.co/p/200x200/111333/fff/img.png" width="200" /> <span style="display: block; font-weight: bold; padding: 3px 0 3px 0; text-align: center;">Tooltip example with HTML content.</span> </a> </div>
                </div>
                <!-- /showcase-slide --> 
                
                <!-- Slide 2 -->
                <div class="showcase-slide">
                  <div class="showcase-content"> <img src="http://cdn.pimg.co/p/838x470/789987/fff/img.png" id="image2" /> </div>
                  <div class="showcase-thumbnail"> <img src="http://cdn.pimg.co/p/140x120/789987/fff/img.png" width="140" />
                    <div class="showcase-thumbnail-caption">Integrity</div>
                    <div class="showcase-thumbnail-cover"></div>
                  </div>
                  <div class="showcase-caption">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                  </div>
                </div>
                <!-- /showcase-slide --> 
                
                <!-- Slide 3 -->
                <div class="showcase-slide">
                  <div class="showcase-content"> <img src="http://cdn.pimg.co/p/838x470/600666/fff/img.png" id="image3" /> </div>
                  <div class="showcase-thumbnail"> <img src="http://cdn.pimg.co/p/140x120/600666/fff/img.png" width="140" />
                    <div class="showcase-thumbnail-caption">Wonder</div>
                    <div class="showcase-thumbnail-cover"></div>
                  </div>
                  <div class="showcase-caption">
                    <h2>Aliquam egestas vivamus consectetuer condimentum nibh purus amet adipiscing.</h2>
                  </div>
                </div>
                <!-- /showcase-slide --> 
                
                <!-- Slide 4 -->
                <div class="showcase-slide">
                  <div class="showcase-content"> <img src="http://cdn.pimg.co/p/838x470/321321/fff/img.png" id="image4" /> </div>
                  <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">Customize<br/>
                      <b>this text!</b></div>
                    <div class="showcase-thumbnail-cover"></div>
                  </div>
                  <div class="showcase-caption">
                    <h2>Nulla eget sapien neque, in commodo erat. Integer at felis tortor.</h2>
                  </div>
                </div>
                <!-- /showcase-slide --> 
                
                <!-- Slide 5 -->
                <div class="showcase-slide">
                  <div class="showcase-content"> <img src="http://cdn.pimg.co/p/838x470/123321/fff/img.png" id="image5" /> </div>
                  <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">More text examples!</div>
                    <div class="showcase-thumbnail-cover"></div>
                  </div>
                </div>
                <!-- /showcase-slide --> 
                
                <!-- Slide 6 -->
                <div class="showcase-slide">
                  <div class="showcase-content"> <img src="http://cdn.pimg.co/p/838x470/321321/fff/img.png" id="image6" /> </div>
                  <div class="showcase-thumbnail"> <img src="http://cdn.pimg.co/p/140x120/321321/fff/img.png" width="140" />
                    <div class="showcase-thumbnail-caption">Focus</div>
                    <div class="showcase-thumbnail-cover"></div>
                  </div>
                </div>
                <!-- /showcase-slide --> 
                
                <!-- Slide 7 -->
                <div class="showcase-slide">
                  <div class="showcase-content"> <img src="http://cdn.pimg.co/p/838x470/600666/fff/img.png" id="image7" /> </div>
                  <div class="showcase-thumbnail"> <img src="http://cdn.pimg.co/p/140x120/600666/fff/img.png" width="140" />
                    <div class="showcase-thumbnail-caption">Determined</div>
                    <div class="showcase-thumbnail-cover"></div>
                  </div>
                </div>
                <!-- /showcase-slide --> 
              </div>
              <!-- DC Showcase Slider End -->
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

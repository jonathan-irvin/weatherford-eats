<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>(Pro) Responsive Template</title>

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
<script type="text/javascript" src="js/tinynav.min.js"></script>
<script type="text/javascript">
	$(function () {
		$('#menu-top-menu').tinyNav({
			active: 'selected',
			header: 'Navigation' 
		});
	});
</script>

<!-- dCodes Hosted Examples: Start -->
<!-- For reference, visit: http://www.dcodes.net/2/docs/ -->

<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/accordion_toggle/css/dc_accordion_toggle.css" />
<script type="text/javascript" src="http://cdn.dcodes.net/2/accordion_toggle/js/dc_accordion_toggle.js"></script>

<!-- DC Flat Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/flat_buttons/css/dc_flat_buttons.css" />

<!-- DC Columns CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/columns/css/dc_columns.css" />

<!-- DC 3D Buttons CSS -->
<link rel="stylesheet" href="http://cdn.dcodes.net/2/3d_buttons/css/dc_3d_buttons.css" />

<!-- DC Social Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/social_buttons/css/dc_social_buttons.css" />

<!-- DC CSS3 Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/css3_buttons/css/dc_css3_buttons.css" />

<!-- DC Flat Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/flat_buttons/css/dc_flat_buttons.css" />

<!-- DC Elite Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/elite_buttons/css/dc_elite_buttons.css" />

<!-- DC Gradient Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/gradient_buttons/css/dc_gradient_buttons.css" />

<!-- DC Text Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/text_buttons/css/dc_text_buttons.css" />

<!-- DC Transparent Buttons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/buttons_transparent/css/dc_buttons_transp.css" />

<!-- DC Web Icons CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/web_icons/dc_web_icons.css" />

<!-- DC Web Icons II CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/web_icons2/dc_web_icons2.css" />

<!-- DC Web Icons III CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/web_icons3/dc_web_icons3.css" />

<!-- DC Web Icons CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/pictogram_icons/dc_pictogram_icons.css" />

<!-- DC Social Icons CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/social_icons/dc_social_icons.css" />

<!-- DC Payment Icons CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css" />

<!-- DC Seal Icons CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/seal_icons/dc_seal_icons.css" />
</head>
<body>
<div class="body_pattern">
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
          <!-- now_page -->
          <div class="now_page">
            <div class="now_page_resize">
              <h1>Element Shortcodes Page<span>Cras sit amet libero eros... </span></h1>
              <div class="clr"></div>
            </div>
            <div class="clr"></div>
          </div>
          <!-- /now_page -->
          <div class="clr"></div>
          <div class="content" id="gallery">
            <div class="content_resize"> 
              
              <!-- dCodes Hosted Examples: Start --> 
              <!-- For reference, visit: http://www.dcodes.net/2/docs/ -->
              
              <h2>dCodes: Elements</h2>
              Shortcodes: <a href="dc-format.html" title="Format Shortcodes">Format</a> / <a href="dc-embed.html" title="Embed Shortcodes">Embed</a> / <a href="dc-organize.html" title="Organize Shortcodes">Organize</a> / Elements<br />
              <br />
              
              <!-- DC Toggle 1 Start -->
              <div class="dc_toggle_container" style="width:90%"> + <a href="#" class="toggleCollapse" rel="style2">expand all</a><br />
                <br />
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">3D Buttons &nbsp; <small style="color:#999;">3D style - clickable buttons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC 3D Buttons Start --> 
                    <a href="#" class="dc_3d_button orange"> Orange </a> <a href="#" class="dc_3d_button cyan"> Cyan </a> <a href="#" class="dc_3d_button red"> Red </a> <a href="#" class="dc_3d_button magenta"> Pink </a> <a href="#" class="dc_3d_button blue"> Blue </a> <a href="#" class="dc_3d_button green"> Green </a> <a href="#" class="dc_3d_button black"> Black </a> <a href="#" class="dc_3d_button gray"> Gray </a> <a href="#" class="dc_3d_button white"> White </a> 
                    <!-- DC 3D Buttons End --> 
                    <br />
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/3d_buttons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Social Buttons &nbsp; <small style="color:#999;">Button styles from popular sites</small></a></div>
                  <div class="dc_toggle_box"><br />
                    Facebook Style<br />
                    <!-- DC Social Buttons Start --> 
                    <a href="#" class="dc_fb_button">Silver Button</a> <a href="#" class="dc_fb_button purple">Purple Button</a> <a href="#" class="dc_fb_button green">Green Button</a> <a href="#" class="dc_fb_button red">Red Button</a> <a href="#" class="dc_fb_button black">Black Button</a> 
                    <!-- DC Social Buttons End --> 
                    <br />
                    <br />
                    Google + Microsoft Metro Style<br />
                    <!-- DC Social Buttons Start --> 
                    <a href="#" class="dc_g_button white">White Button</a> <a href="#" class="dc_g_button silver">Silver Button</a> <a href="#" class="dc_g_button blue">Blue Button</a> <a href="#" class="dc_g_button red">Red Button</a> <a href="#" class="dc_g_button green">Green Button</a> <a href="#" class="dc_g_button gray">Gray Button</a> <a href="#" class="dc_g_button black">Black Button</a> 
                    <!-- DC Social Buttons End --> 
                    <br />
                    <br />
                    Pixelated Style<br />
                    <!-- DC Social Buttons Start --> 
                    <a href="#" class="dc_pixel_button lightbg-blue">Blue Button</a> <a href="#" class="dc_pixel_button lightbg-pink">Pink Button</a> <a href="#" class="dc_pixel_button lightbg-orange">Orange Button</a> <a href="#" class="dc_pixel_button lightbg-green">Green Button</a> <a href="#" class="dc_pixel_button lightbg-black">Black Button</a> 
                    <!-- DC Social Buttons End --> 
                    <br />
                    <br />
                    Bevel Style<br />
                    <!-- DC Social Buttons Start --> 
                    <a href="#" class="dc_bevel_button blue">Blue Button</a> <a href="#" class="dc_bevel_button red">Red Button</a> <a href="#" class="dc_bevel_button green">Green Button</a> <a href="#" class="dc_bevel_button gray">Gray Button</a> <a href="#" class="dc_bevel_button white">White Button</a> 
                    <!-- DC Social Buttons End --> 
                    <br />
                    <br />
                    Apple Style<br />
                    <!-- DC Social Buttons Start -->
                    <button class="dc_ibutton">Buy now</button>
                    <button class="dc_ibutton-red">Sign up</button>
                    <button class="dc_ibutton-green">Download</button>
                    <button class="dc_ibutton-gray">Specifications</button>
                    <!-- DC Social Buttons End --> 
                    <br />
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/social_buttons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">CSS3 Buttons &nbsp; <small style="color:#999;">CSS3 style - clickable buttons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC CSS3 Buttons Start --> 
                    <a class="dc_c3b_small dc_button" href="#"><span>Black</span></a> <a class="dc_c3b_small dc_c3b_blue dc_button" href="#"><span>Blue</span></a> <a class="dc_c3b_small dc_c3b_purple dc_button" href="#"><span>Purple</span></a> <a class="dc_c3b_small dc_c3b_green dc_button" href="#"><span>Green</span></a> <a class="dc_c3b_small dc_c3b_teal dc_button" href="#"><span>Teal</span></a> <a class="dc_c3b_small dc_c3b_magenta dc_button" href="#"><span>Magenta</span></a> <a class="dc_c3b_small dc_c3b_red dc_button" href="#"><span>Red</span></a> <a class="dc_c3b_small dc_c3b_orange dc_button" href="#"><span>Orange</span></a> <a class="dc_c3b_small dc_c3b_yellow dc_button" href="#"><span>Yellow</span></a> <a class="dc_c3b_small dc_c3b_gray dc_button" href="#"><span>Gray</span></a> 
                    <!-- DC CSS3 Buttons End --> 
                    <br />
                    <br />
                    
                    <!-- DC CSS3 Buttons Start --> 
                    <a class="dc_c3b_large dc_button" href="#"><span>Black</span></a> <a class="dc_c3b_large dc_c3b_blue dc_button" href="#"><span>Blue</span></a> <a class="dc_c3b_large dc_c3b_purple dc_button" href="#"><span>Purple</span></a> <a class="dc_c3b_large dc_c3b_green dc_button" href="#"><span>Green</span></a> <a class="dc_c3b_large dc_c3b_teal dc_button" href="#"><span>Teal</span></a> <a class="dc_c3b_large dc_c3b_magenta dc_button" href="#"><span>Magenta</span></a> <a class="dc_c3b_large dc_c3b_red dc_button" href="#"><span>Red</span></a> 
                    <!-- DC CSS3 Buttons End --> 
                    <br />
                    <br />
                    
                    <!-- DC CSS3 Buttons Start --> 
                    <a class="tall dc_button" href="#"><span>Click This<em>Try it today for free!</em></span></a> <a class="tall dc_c3b_blue dc_button" href="#"><span>Click This<em>Try it today for free!</em></span></a> <a class="tall dc_c3b_purple dc_button" href="#"><span>Click This<em>Try it today for free!</em></span></a> <a class="tall dc_c3b_green dc_button" href="#"><span>Click This<em>Try it today for free!</em></span></a> <a class="tall dc_c3b_teal dc_button" href="#"><span>Click This<em>Try it today for free!</em></span></a> 
                    <!-- DC CSS3 Buttons End --> 
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/css3_buttons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Flat Buttons &nbsp; <small style="color:#999;">Flat style - clickable buttons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Flat Buttons Start --> 
                    <a class="dc_awb_medium dc_flat" href="#">Super Flat Button »</a> <a class="dc_awb_medium dc_awb_gray dc_flat" href="#">Flat Gray Button »</a> <a class="dc_awb_medium dc_awb_blue dc_flat" href="#">Flat Blue Button »</a> <a class="dc_awb_medium dc_awb_teal dc_flat" href="#">Flat Teal Button »</a> <a class="dc_awb_medium dc_awb_green dc_flat" href="#">Flat Green Button »</a> 
                    <!-- DC Flat Buttons End --> 
                    <br />
                    <br />
                    
                    <!-- DC Flat Buttons Start --> 
                    <a class="dc_awb_large dc_awb_purple dc_flat" href="#">Flat Purple Button »</a> <a class="dc_awb_large dc_awb_pink dc_flat" href="#">Flat Pink Button »</a> <a class="dc_awb_large dc_awb_magenta dc_flat" href="#">Flat Magenta Button »</a> <a class="dc_awb_large dc_awb_red dc_flat" href="#">Flat Red Button »</a> 
                    <!-- DC Flat Buttons End --> 
                    <br />
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/flat_buttons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Elite Buttons &nbsp; <small style="color:#999;">Multiple styles - clickable buttons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Elite Buttons Start --> 
                    <a href="#" class="dc_buttons1 black">Black Button</a> <a href="#" class="dc_buttons1 blue">Blue Button</a> <a href="#" class="dc_buttons1 purple">Purple Button</a> <a href="#" class="dc_buttons1 green">Green Button</a> <a href="#" class="dc_buttons1 brown">Brown Button</a> <a href="#" class="dc_buttons1 red">Red Button</a> <a href="#" class="dc_buttons1 orange">Orange Button</a> <a href="#" class="dc_buttons1 yellow">Yellow Button</a> <a href="#" class="dc_buttons1 light-blue">Light Blue Button</a> <a href="#" class="dc_buttons1 light-purple">Light Purple Button</a> <a href="#" class="dc_buttons1 pink">Pink Button</a> <a href="#" class="dc_buttons1 light-green">Light Green Download</a> <a href="#" class="dc_buttons1 gray">Gray Button</a> <a href="#" class="dc_buttons1">White Button</a> 
                    <!-- DC Elite Buttons End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/elite_buttons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Gradient Buttons &nbsp; <small style="color:#999;">Shaded style - clickable buttons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Gradient Buttons Start --> 
                    <a href="#" class="dc_gradient_button small">Default</a> <a href="#" class="dc_gradient_button small grey">Grey</a> <a href="#" class="dc_gradient_button small light_blue">Light Blue</a> <a href="#" class="dc_gradient_button small blue">Blue</a> <a href="#" class="dc_gradient_button small green">Green</a> <a href="#" class="dc_gradient_button small yellow">Yellow</a> <a href="#" class="dc_gradient_button small orange">Orange</a> <a href="#" class="dc_gradient_button small red">Red</a> <a href="#" class="dc_gradient_button small pink">Pink</a> <a href="#" class="dc_gradient_button small purple">Purple</a> <a href="#" class="dc_gradient_button small black">Black</a> <br />
                    <br />
                    <a href="#" class="dc_gradient_button rounded">Default</a> <a href="#" class="dc_gradient_button rounded grey">Grey</a> <a href="#" class="dc_gradient_button rounded light_blue">Light Blue</a> <a href="#" class="dc_gradient_button rounded blue">Blue</a> <a href="#" class="dc_gradient_button rounded green">Green</a> <a href="#" class="dc_gradient_button rounded yellow">Yellow</a> <a href="#" class="dc_gradient_button rounded orange">Orange</a> <a href="#" class="dc_gradient_button rounded red">Red</a> <a href="#" class="dc_gradient_button rounded pink">Pink</a> <a href="#" class="dc_gradient_button rounded purple">Purple</a> <a href="#" class="dc_gradient_button rounded black">Black</a> <br />
                    <br />
                    <a href="#" class="dc_gradient_button large">Default</a> <a href="#" class="dc_gradient_button large grey">Grey</a> <a href="#" class="dc_gradient_button large light_blue">Light Blue</a> <a href="#" class="dc_gradient_button large blue">Blue</a> <a href="#" class="dc_gradient_button large green">Green</a> <a href="#" class="dc_gradient_button large yellow">Yellow</a> <a href="#" class="dc_gradient_button large orange">Orange</a> <a href="#" class="dc_gradient_button large red">Red</a> <a href="#" class="dc_gradient_button large pink">Pink</a> <a href="#" class="dc_gradient_button large purple">Purple</a> <a href="#" class="dc_gradient_button large black">Black</a> 
                    <!-- DC Gradient Buttons End --> 
                    
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/gradient_buttons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Text Buttons &nbsp; <small style="color:#999;">Text style - clickable buttons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Text Buttons Start --> 
                    <a class="dc_button3 ico-like" href="#"><span class="icon"></span>Love</a> <a class="dc_button3 ico-login" href="#"><span class="icon"></span>Lock</a> <a class="dc_button3 ico-accept" href="#"><span class="icon"></span>Accept</a> <a class="dc_button3 ico-add" href="#"><span class="icon"></span>Add</a> <a class="dc_button3 ico-delete" href="#"><span class="icon"></span>Delete</a> <a class="dc_button3 ico-cross" href="#"><span class="icon"></span>Cross</a> <br />
                    <br />
                    <a class="dc_button3 ico-disk" href="#"><span class="icon"></span>Disk</a> <a class="dc_button3 ico-error" href="#"><span class="icon"></span>Error</a> <a class="dc_button3 ico-exclamation" href="#"><span class="icon"></span>Exclamation</a> <a class="dc_button3 ico-feed" href="#"><span class="icon"></span>RSS Feed</a> <a class="dc_button3 ico-key" href="#"><span class="icon"></span>Key</a> <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/text_buttons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Transparent Buttons &nbsp; <small style="color:#999;">See thru - clickable buttons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Transparent Buttons Start -->
                    <table cellspacing="0" cellpadding="18" border="0">
                      <tr>
                        <td background="http://cdn.dcodes.net/2/bg_images/wood/w1.jpg"><p> <a class="tbutton" href="#">A Href Button</a> <a class="tbutton" href="#">Extra Long Button</a>
                            <input class="tbutton" type="submit" value="Form Submit">
                            <input class="tbutton" type="button" value="Form Button">
                            <button class="tbutton">Button Link</button>
                          </p>
                          <ul class="dc_toolbar">
                            <li><a class="tbutton" href="#">T</a></li>
                            <li><a class="tbutton" href="#">O</a></li>
                            <li><a class="tbutton" href="#">O</a></li>
                            <li><a class="tbutton" href="#">L</a></li>
                            <li><a class="tbutton" href="#">B</a></li>
                            <li><a class="tbutton" href="#">A</a></li>
                            <li><a class="tbutton" href="#">R</a></li>
                          </ul>
                          <ul class="dc_toolbar">
                            <li><a href="#" class="tbutton addcart icon">Add Item</a></li>
                            <li><a href="#" class="tbutton delcart icon">Remove item</a></li>
                          </ul>
                          <p> <a href="#" class="tbutton">Home</a> <a href="#" class="tbutton">Products</a> <a href="#" class="tbutton">Pricing</a> <a href="#" class="tbutton">Order</a> <a href="#" class="tbutton">About Us</a> </p></td>
                      </tr>
                    </table>
                    
                    <!-- DC Transparent Buttons End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/buttons_transparent.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Web Icons &nbsp; <small style="color:#999;">Over 450+ small royalty free icons for web usage.</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <p> L1: <span class="dc_web_icon_color32 color_64bit_32"></span> <span class="dc_web_icon_color32 color_add_32"></span> <span class="dc_web_icon_color32 color_advanced_32"></span> <span class="dc_web_icon_color32 color_alert_32"></span> <span class="dc_web_icon_color32 color_annouce_32"></span> <span class="dc_web_icon_color32 color_application_32"></span> <span class="dc_web_icon_color32 color_apps_32"></span> <span class="dc_web_icon_color32 color_archive_32"></span> <span class="dc_web_icon_color32 color_arrow_090_32"></span> <span class="dc_web_icon_color32 color_arrow_180_32"></span> <span class="dc_web_icon_color32 color_arrow_270_32"></span> <span class="dc_web_icon_color32 color_arrow_32"></span> <br />
                      L2: <span class="dc_web_icon_color32 color_arrow_down_32"></span> <span class="dc_web_icon_color32 color_arrow_left_32"></span> <span class="dc_web_icon_color32 color_arrow_right_32"></span> <span class="dc_web_icon_color32 color_arrow_up_32"></span> <span class="dc_web_icon_color32 color_back_32"></span> <span class="dc_web_icon_color32 color_balloon_32"></span> <span class="dc_web_icon_color32 color_ban_32"></span> <span class="dc_web_icon_color32 color_ban2_32"></span> <span class="dc_web_icon_color32 color_battery_32"></span> <span class="dc_web_icon_color32 color_bell_32"></span> <span class="dc_web_icon_color32 color_bell2_32"></span> <span class="dc_web_icon_color32 color_book_32"></span> <br />
                      L3: <span class="dc_web_icon_color32 color_bookmark_32"></span> <span class="dc_web_icon_color32 color_bookmark2_32"></span> <span class="dc_web_icon_color32 color_bookmarked_32"></span> <span class="dc_web_icon_color32 color_box_32"></span> <span class="dc_web_icon_color32 color_box2_32"></span> <span class="dc_web_icon_color32 color_briefcase_32"></span> <span class="dc_web_icon_color32 color_burn_32"></span> <span class="dc_web_icon_color32 color_calendar_32"></span> <span class="dc_web_icon_color32 color_calendar2_32"></span> <span class="dc_web_icon_color32 color_camera_32"></span> <span class="dc_web_icon_color32 color_cart_32"></span> <span class="dc_web_icon_color32 color_cc_32"></span> <br />
                      L4: <span class="dc_web_icon_color32 color_cc2_32"></span> <span class="dc_web_icon_color32 color_certificate_32"></span> <span class="dc_web_icon_color32 color_chalkboard_32"></span> <span class="dc_web_icon_color32 color_chart_32"></span> <span class="dc_web_icon_color32 color_chat_32"></span> <span class="dc_web_icon_color32 color_chat2_32"></span> <span class="dc_web_icon_color32 color_chat3_32"></span> <span class="dc_web_icon_color32 color_chip_32"></span> <span class="dc_web_icon_color32 color_clock_32"></span> <span class="dc_web_icon_color32 color_coffee_32"></span> <span class="dc_web_icon_color32 color_color_swatch_32"></span> <span class="dc_web_icon_color32 color_color_32"></span> <br />
                      L5: <span class="dc_web_icon_color32 color_color2_32"></span> <span class="dc_web_icon_color32 color_computer_32"></span> <span class="dc_web_icon_color32 color_computer2_32"></span> <span class="dc_web_icon_color32 color_computer3_32"></span> <span class="dc_web_icon_color32 color_counter_32"></span> <span class="dc_web_icon_color32 color_cross_32"></span> <span class="dc_web_icon_color32 color_cross2_32"></span> <span class="dc_web_icon_color32 color_design_32"></span> <span class="dc_web_icon_color32 color_desktop_32"></span> <span class="dc_web_icon_color32 color_disc_32"></span> <span class="dc_web_icon_color32 color_disc2_32"></span> <span class="dc_web_icon_color32 color_disc3_32"></span> <br />
                      L6: <span class="dc_web_icon_color32 color_document_text_32"></span> <span class="dc_web_icon_color32 color_document_32"></span> <span class="dc_web_icon_color32 color_document2_32"></span> <span class="dc_web_icon_color32 color_down_32"></span> <span class="dc_web_icon_color32 color_download_32"></span> <span class="dc_web_icon_color32 color_edit_32"></span> <span class="dc_web_icon_color32 color_edit2_32"></span> <span class="dc_web_icon_color32 color_error_32"></span> <span class="dc_web_icon_color32 color_exclamation_32"></span> <span class="dc_web_icon_color32 color_exit_32"></span> <span class="dc_web_icon_color32 color_f_happy_32"></span> <span class="dc_web_icon_color32 color_f_lol_32"></span> </p>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/web_icons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Web Icons II &nbsp; <small style="color:#999;">Over 450+ large royalty free icons for web usage.</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <p> L1: <span class="dc_web_icon_coq_64 coq_open_store"></span> <span class="dc_web_icon_coq_64 coq_video_clip"></span> <span class="dc_web_icon_coq_64 coq_support"></span> <span class="dc_web_icon_coq_64 coq_telephone"></span> <span class="dc_web_icon_coq_64 coq_computer"></span> <span class="dc_web_icon_coq_64 coq_accept"></span> <span class="dc_web_icon_coq_64 coq_10_percent_off"></span> <br />
                      L2: <span class="dc_web_icon_coq_64 coq_buy_now"></span> <span class="dc_web_icon_coq_64 coq_new"></span> <span class="dc_web_icon_coq_64 coq_yellow_mail"></span> <span class="dc_web_icon_coq_64 coq_add"></span> <span class="dc_web_icon_coq_64 coq_laptop"></span> <span class="dc_web_icon_coq_64 coq_lock"></span> <span class="dc_web_icon_coq_64 coq_cd"></span> </p>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/web_icons2.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Web Icons III &nbsp; <small style="color:#999;">Over 350+ large royalty free icons for web usage.</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <p> L6: <span class="dc_web_icon_deck_54 deck_invoice"></span> <span class="dc_web_icon_deck_54 deck_ipad"></span> <span class="dc_web_icon_deck_54 deck_iphone"></span> <span class="dc_web_icon_deck_54 deck_ipod"></span> <span class="dc_web_icon_deck_54 deck_key"></span> <span class="dc_web_icon_deck_54 deck_keyboard"></span> <span class="dc_web_icon_deck_54 deck_laptop"></span> <br />
                      L7: <span class="dc_web_icon_deck_54 deck_magic_wand"></span> <span class="dc_web_icon_deck_54 deck_mail"></span> <span class="dc_web_icon_deck_54 deck_mail2"></span> <span class="dc_web_icon_deck_54 deck_mail_attachment"></span> <span class="dc_web_icon_deck_54 deck_mailbox"></span> <span class="dc_web_icon_deck_54 deck_mail_inbox"></span> <span class="dc_web_icon_deck_54 deck_mail_outbox"></span> </p>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/web_icons3.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Pictogram Icons &nbsp; <small style="color:#999;">Over 400+ small royalty free icons for web usage.</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <p> L1: <span class="dc_pict_icon_24 ent_phone"></span> <span class="dc_pict_icon_24 ent_mobile"></span> <span class="dc_pict_icon_24 ent_website_mouse"></span> <span class="dc_pict_icon_24 ent_address"></span> <span class="dc_pict_icon_24 ent_email"></span> <span class="dc_pict_icon_24 ent_write_new"></span> <span class="dc_pict_icon_24 ent_attach"></span> <span class="dc_pict_icon_24 ent_reply"></span> <span class="dc_pict_icon_24 ent_reply_to_all"></span> <span class="dc_pict_icon_24 ent_forward"></span> <span class="dc_pict_icon_24 ent_contact_user"></span> <span class="dc_pict_icon_24 ent_contacts_users"></span> <span class="dc_pict_icon_24 ent_add_contact_add_user"></span> <span class="dc_pict_icon_24 ent_contact_card"></span> <span class="dc_pict_icon_24 ent_export"></span> <span class="dc_pict_icon_24 ent_location"></span> <br />
                      L2: <span class="dc_pict_icon_24 ent_map"></span> <span class="dc_pict_icon_24 ent_compass"></span> <span class="dc_pict_icon_24 ent_direction"></span> <span class="dc_pict_icon_24 ent_center"></span> <span class="dc_pict_icon_24 ent_share"></span> <span class="dc_pict_icon_24 ent_heart"></span> <span class="dc_pict_icon_24 ent_star"></span> <span class="dc_pict_icon_24 ent_like"></span> <span class="dc_pict_icon_24 ent_chat"></span> <span class="dc_pict_icon_24 ent_comment"></span> <span class="dc_pict_icon_24 ent_quote"></span> <span class="dc_pict_icon_24 ent_print"></span> <span class="dc_pict_icon_24 ent_alert"></span> <span class="dc_pict_icon_24 ent_link"></span> <span class="dc_pict_icon_24 ent_flag"></span> <span class="dc_pict_icon_24 ent_settings"></span> <br />
                      L3: <span class="dc_pict_icon_24 ent_search"></span> <span class="dc_pict_icon_24 ent_top_list"></span> <span class="dc_pict_icon_24 ent_offer_price_tag"></span> <span class="dc_pict_icon_24 ent_camera"></span> <span class="dc_pict_icon_24 ent_sleep"></span> <span class="dc_pict_icon_24 ent_palette"></span> <span class="dc_pict_icon_24 ent_leaf"></span> <span class="dc_pict_icon_24 ent_music"></span> <span class="dc_pict_icon_24 ent_shopping_bag"></span> <span class="dc_pict_icon_24 ent_flight"></span> <span class="dc_pict_icon_24 ent_lifebuoy"></span> <span class="dc_pict_icon_24 ent_google_circles"></span> <span class="dc_pict_icon_24 ent_view_eye"></span> <span class="dc_pict_icon_24 ent_time_clock"></span> <span class="dc_pict_icon_24 ent_mic"></span> <span class="dc_pict_icon_24 ent_calendar"></span> </p>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/pictogram_icons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Social Icons &nbsp; <small style="color:#999;">Add social buttons to your webpage</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <a class="email_dice dc_social_dice" title="email" href="#">email</a> <a class="skype_dice dc_social_dice" title="skype" href="#">skype</a> <a class="facebook_dice dc_social_dice" title="facebook" href="#">facebook</a> <a class="twitter_dice dc_social_dice" title="twitter" href="#">twitter</a> <a class="google_plus_dice dc_social_dice" title="google+" href="#">google+</a> <a class="linkedin_dice dc_social_dice" title="linkedin" href="#">linkedin</a> <a class="feed_dice dc_social_dice" title="feed" href="#">feed</a> <a class="location_dice dc_social_dice" title="location" href="#">location</a> <a class="pinterest_dice dc_social_dice" title="pinterest" href="#">pinterest</a> <a class="wordpress_dice dc_social_dice" title="wordpress" href="#">wordpress</a> <a class="youtube_dice dc_social_dice" title="youtube" href="#">youtube</a> <a class="vimeo_dice dc_social_dice" title="vimeo" href="#">vimeo</a> <a class="linked_dice dc_social_dice" title="linked" href="#">link</a> <a class="flickr_dice dc_social_dice" title="flickr" href="#">flickr</a> <br />
                    <br />
                    <a class="email_round_gray_32 dc_social_round_gray_32" title="email" href="#">email</a> <a class="phone_round_gray_32 dc_social_round_gray_32" title="phone" href="#">phone</a> <a class="skype_round_gray_32 dc_social_round_gray_32" title="skype" href="#">skype</a> <a class="facebook_round_gray_32 dc_social_round_gray_32" title="facebook" href="#">facebook</a> <a class="twitter2_round_gray_32 dc_social_round_gray_32" title="twitter" href="#">twitter</a> <a class="google_round_gray_32 dc_social_round_gray_32" title="google" href="#">google</a> <a class="linkedin_round_gray_32 dc_social_round_gray_32" title="linkedin" href="#">linkedin</a> <a class="rss_round_gray_32 dc_social_round_gray_32" title="rss" href="#">rss</a> <a class="location_round_gray_32 dc_social_round_gray_32" title="location" href="#">location</a> <a class="flickr_round_gray_32 dc_social_round_gray_32" title="flickr" href="#">flickr</a> <a class="pinterest_round_gray_32 dc_social_round_gray_32" title="pinterest" href="#">pinterest</a> <a class="twitter_round_gray_32 dc_social_round_gray_32" title="twitter" href="#">twitter</a> <a class="avatar_round_gray_32 dc_social_round_gray_32" title="avatar" href="#">avatar</a> <a class="profile_round_gray_32 dc_social_round_gray_32" title="profile" href="#">profile</a> <br />
                    <br />
                    <a class="mail_focused dc_social_focused" title="mail" href="#">mail</a> <a class="skype_focused dc_social_focused" title="skype" href="#">skype</a> <a class="facebook_focused dc_social_focused" title="facebook" href="#">facebook</a> <a class="twitter_focused dc_social_focused" title="twitter" href="#">twitter</a> <a class="linkedin_focused dc_social_focused" title="linkedin" href="#">linkedin</a> <a class="googleplus_focused dc_social_focused" title="google+" href="#">google+</a> <a class="rss_focused dc_social_focused" title="rss" href="#">rss</a> <a class="wordpress_focused dc_social_focused" title="blog" href="#">blog</a> <a class="flickr_focused dc_social_focused" title="flickr" href="#">flickr</a> <a class="youtube_focused dc_social_focused" title="youtube" href="#">youtube</a> <a class="vimeo_focused dc_social_focused" title="vimeo" href="#">vimeo</a> <a class="instagram_focused dc_social_focused" title="instagram" href="#">instagram</a> <a class="fivehundredpx dc_social_focused" title="500px" href="#">500px</a> <a class="addthis_focused dc_social_focused" title="add this" href="#">add this</a> <a class="tumblr_focused dc_social_focused" title="tumblr" href="#">tumblr</a> <br />
                    <br />
                    <a class="facebook_flat3d dc_social_flat3d" title="facebook" href="#">facebook</a> <a class="skype_flat3d dc_social_flat3d" title="skype" href="#">skype</a> <a class="twitter_flat3d dc_social_flat3d" title="twitter" href="#">twitter</a> <a class="linkedin_flat3d dc_social_flat3d" title="linkedin" href="#">linkedin</a> <a class="googleplus_flat3d dc_social_flat3d" title="google+" href="#">google+</a> <a class="rss_flat3d dc_social_flat3d" title="rss" href="#">rss</a> <a class="blog_flat3d dc_social_flat3d" title="blog" href="#">blog</a> <a class="flickr_flat3d dc_social_flat3d" title="flickr" href="#">flickr</a> <a class="cloud_flat3d dc_social_flat3d" title="cloud" href="#">cloud</a> <a class="lastfm_flat3d dc_social_flat3d" title="lastfm" href="#">lastfm</a> <br />
                    <br />
                    <a class="mail_teeny dc_social_teeny" title="email" href="#">email</a> <a class="skype_teeny dc_social_teeny" title="skype" href="#">skype</a> <a class="facebook_teeny dc_social_teeny" title="facebook" href="#">facebook</a> <a class="twitter_teeny dc_social_teeny" title="twitter" href="#">twitter</a> <a class="linkedin_teeny dc_social_teeny" title="linkedin" href="#">linkedin</a> <a class="googleplus_teeny dc_social_teeny" title="google+" href="#">google+</a> <a class="feed_teeny dc_social_teeny" title="rss" href="#">rss</a> <a class="flickr_teeny dc_social_teeny" title="flickr" href="#">flickr</a> <a class="youtube_teeny dc_social_teeny" title="youtube" href="#">youtube</a> <a class="youtube2_teeny dc_social_teeny" title="youtube" href="#">youtube</a> <a class="vimeo_teeny dc_social_teeny" title="vimeo" href="#">vimeo</a> <a class="pinterest_teeny dc_social_teeny" title="pinterest" href="#">pinterest</a> <a class="instagram_teeny dc_social_teeny" title="instagram" href="#">instagram</a> <a class="blogger_teeny dc_social_teeny" title="blogger" href="#">blogger</a> <a class="fivehundredpx dc_social_teeny" title="500px" href="#">500px</a> <a class="delicious_teeny dc_social_teeny" title="delicious" href="#">delicious</a> <a class="digg_teeny dc_social_teeny" title="digg" href="#">digg</a> <a class="dribbble_teeny dc_social_teeny" title="dribbble" href="#">dribbble</a> <a class="dopplr_teeny dc_social_teeny" title="dopplr" href="#">dopplr</a> <a class="evernote_teeny dc_social_teeny" title="evernote" href="#">evernote</a> <br />
                    <br />
                    <a class="mail_cube3d dc_social_cube64" title="mail" href="#">mail</a> <a class="skype_cube3d dc_social_cube64" title="skype" href="#">skype</a> <a class="facebook_cube3d dc_social_cube64" title="facebook" href="#">facebook</a> <a class="twitter_cube3d dc_social_cube64" title="twitter" href="#">twitter</a> <a class="in_cube3d dc_social_cube64" title="linkedin" href="#">in</a> <a class="google_cube3d dc_social_cube64" title="google" href="#">google</a> <a class="feed_cube3d dc_social_cube64" title="rss" href="#">rss</a> <a class="flickr_cube3d dc_social_cube64" title="flickr" href="#">flickr</a> <br />
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/social_icons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Payment Icons &nbsp; <small style="color:#999;">Display credit card acceptance logos</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <span class="dc_payment_icons_glossy_50 dc_visa_glossy" title="Visa"></span> <span class="dc_payment_icons_glossy_50 dc_mastercard_glossy" title="Mastercard"></span> <span class="dc_payment_icons_glossy_50 dc_americanexpress_glossy" title="American Express"></span> <span class="dc_payment_icons_glossy_50 dc_discover_glossy" title="Discover"></span> <span class="dc_payment_icons_glossy_50 dc_paypal_glossy" title="PayPal"></span> <span class="dc_payment_icons_glossy_50 dc_maestro_glossy" title="Maestro"></span> <span class="dc_payment_icons_glossy_50 dc_cirrus_glossy" title="Cirrus"></span> <span class="dc_payment_icons_glossy_50 dc_visaelectron_glossy" title="Visa Electron"></span> <br />
                    <br />
                    <span class="dc_payment_icons_mini_43 dc_visa2_mini" title="Visa"></span> <span class="dc_payment_icons_mini_43 dc_mastercard2_mini" title="Mastercard"></span> <span class="dc_payment_icons_mini_43 dc_amex2_mini" title="American Express"></span> <span class="dc_payment_icons_mini_43 dc_discover2_mini" title="Discover"></span> <span class="dc_payment_icons_mini_43 dc_electron2_mini" title="Visa Electron"></span> <span class="dc_payment_icons_mini_43 dc_cirrus2_mini" title="Cirrus"></span> <span class="dc_payment_icons_mini_43 dc_ccv2_mini" title="CCV"></span> <span class="dc_payment_icons_mini_43 dc_paypal2_mini" title="PayPal"></span> <span class="dc_payment_icons_mini_43 dc_amazon2_mini" title="Amazon Payments"></span> <span class="dc_payment_icons_mini_43 dc_googleckout2_mini" title="Google Checkout"></span> <br />
                    <br />
                    <span class="dc_payment_icons_bevel_48 dc_visa_bevel" title="Visa"></span> <span class="dc_payment_icons_bevel_48 dc_visa02_bevel" title="Visa"></span> <span class="dc_payment_icons_bevel_48 dc_mastercard_bevel" title="Mastercard"></span> <span class="dc_payment_icons_bevel_48 dc_americanexpress_bevel" title="American Express"></span> <span class="dc_payment_icons_bevel_48 dc_americanexpress02_bevel" title="American Express"></span> <span class="dc_payment_icons_bevel_48 dc_discover_bevel" title="Discover"></span> <span class="dc_payment_icons_bevel_48 dc_dinersclub_bevel" title="Diners Club"></span> <span class="dc_payment_icons_bevel_48 dc_visaelectron_bevel" title="Visa Electron"></span> <span class="dc_payment_icons_bevel_48 dc_maestro_bevel" title="Maestro"></span> <br />
                    <span class="dc_payment_icons_bevel_32 dc_visa_bevel" title="Visa"></span> <span class="dc_payment_icons_bevel_32 dc_visa02_bevel" title="Visa"></span> <span class="dc_payment_icons_bevel_32 dc_mastercard_bevel" title="Mastercard"></span> <span class="dc_payment_icons_bevel_32 dc_americanexpress_bevel" title="American Express"></span> <span class="dc_payment_icons_bevel_32 dc_americanexpress02_bevel" title="American Express"></span> <span class="dc_payment_icons_bevel_32 dc_discover_bevel" title="Discover"></span> <span class="dc_payment_icons_bevel_32 dc_dinersclub_bevel" title="Diners Club"></span> <span class="dc_payment_icons_bevel_32 dc_visaelectron_bevel" title="Visa Electron"></span> <span class="dc_payment_icons_bevel_32 dc_maestro_bevel" title="Maestro"></span> <span class="dc_payment_icons_bevel_32 dc_cirrus_bevel" title="Cirrus"></span> <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/payment_icons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Seal Icons &nbsp; <small style="color:#999;">Improve conversion rates by displaying seal marks</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <span class="dc_seal_icons_gday_97 dc_money_guarantee_redsilver30" title="30 Day Money Back Guarantee"></span> <span class="dc_seal_icons_gday_97 dc_money_guarantee_redsilver60" title="60 Day Money Back Guarantee"></span> <span class="dc_seal_icons_gday_97 dc_money_guarantee_redsilver90" title="90 Day Money Back Guarantee"></span> <br />
                    <br />
                    <span class="dc_seal_icons_gpercent_84 dc_money_guarantee_silver" title="Money Back Guarantee"></span> <span class="dc_seal_icons_gpercent_84 dc_money_guarantee_gold" title="Money Back Guarantee"></span> <span class="dc_seal_icons_gpercent_84 dc_money_guarantee_red" title="Money Back Guarantee"></span>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/seal_icons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">235+ Background Images &nbsp; <small style="color:#999;">Change your website look & feel</small></a></div>
                  <div class="dc_toggle_box"><br />
                    Change your web page background with ease using the dCodes Background Image Tool.<br />
                    <br />
                    <a class="dc_awb_large dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/background_images.html" target="_blank">Click to view Background Demo »</a><br />
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                  </div>
                </div>
              </div>
              <!-- DC Toggle 1 End --> 
              
              <!-- // dCodes Hosted Examples: End --> 
              
              <br />
              <br />
              <br />
              <br />
              <br />
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
</body>
</html>

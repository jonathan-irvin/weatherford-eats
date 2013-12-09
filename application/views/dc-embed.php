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

<!-- DC Twitter CSS -->
<link href="http://cdn.dcodes.net/2/twitter_tweet/jquery.tweet.css" rel="stylesheet">

<!-- DC Twitter JS -->
<script src="http://cdn.dcodes.net/2/twitter_tweet/jquery.tweet.js" charset="utf-8"></script>

<!-- DC jflickrfeed -->
<link href="http://cdn.dcodes.net/2/flickr/css/dc_jflickrfeed.css" type="text/css" rel="stylesheet" />
<script src="http://cdn.dcodes.net/2/flickr/js/jflickrfeed.js"></script>

<!-- DC jflickrfeed: Colorbox Lightbox -->
<link href="http://cdn.dcodes.net/2/flickr/js/colorbox/colorbox.css" rel="stylesheet" type="text/css" media="screen" />
<script src="http://cdn.dcodes.net/2/flickr/js/colorbox/jquery.colorbox-min.js"></script>

<!-- DC jflickrfeed: Cycle Slider -->
<script src="http://cdn.dcodes.net/2/flickr/js/cycle/jquery.cycle.all.js"></script>

<!-- DC Google Site Search CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/site_search/css/dc_sitesearch.css" />

<!-- DC Google Site Search JS -->
<script src="http://cdn.dcodes.net/2/site_search/js/dc_sitesearch.js"></script>

<!-- DC Contact Form CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/contact_forms/css/dc_form_contact_dark.css" />
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/contact_forms/css/dc_form_contact_light.css" />

<!-- DC Contact Form JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/contact_forms/js/dc_form_contact.js"></script>

<!-- DC Message Box CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/message_box/css/dc_message_box.css" />

<!-- DC Message Box JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/message_box/js/jquery.cookie.js"></script>
<script type="text/javascript" src="http://cdn.dcodes.net/2/message_box/js/dc_message_box.js"></script>

<!-- DC Popup Dialog CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/popup_dialog/css/dc_popup_dialog.css" />

<!-- DC Popup Dialog JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/popup_dialog/js/dc_popup_dialog.js"></script>

<!-- DC LightBox CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/prettyPhoto/css/prettyPhoto.css" />

<!-- DC LightBox JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/prettyPhoto/js/jquery.prettyPhoto.js"></script>

<!-- DC LightBox Settings -->
<script type="text/javascript">
$(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false,
    });
});
</script>

<!-- DC Syntax Highligher JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="http://cdn.dcodes.net/2/syntaxhighlighter/scripts/shBrushJScript.js"></script>

<!-- DC Syntax Highligher Brushes -->
<script src="http://cdn.dcodes.net/2/syntaxhighlighter/scripts/shBrushXml.js" type='text/javascript'></script>
<script src="http://cdn.dcodes.net/2/syntaxhighlighter/scripts/shBrushJScript.js" type='text/javascript'></script>
<script src="http://cdn.dcodes.net/2/syntaxhighlighter/scripts/shBrushCss.js" type='text/javascript'></script>

<!-- DC Syntax Highligher CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/syntaxhighlighter/styles/shCoreDefault.css" />

<!-- DC Syntax Highligher Settings -->
<script type="text/javascript">SyntaxHighlighter.all();</script>

<!-- DC ToolTips CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/tooltips/css/dc_tooltips.css" />

<!-- DC ToolTips JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/tooltips/js/dc_tooltips.js"></script>

<!-- // dCodes Hosted Examples: Header End -->

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
              <h1>Embed Shortcodes Page<span>Cras sit amet libero eros... </span></h1>
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
              
              <style>
.dc_toggle_container a{color:#333;}
.dc_toggle_container a:hover{color:#999};
</style>
              <h2>dCodes: Embed</h2>
              Shortcodes: <a href="dc-format.html" title="Format Shortcodes">Format</a> / Embed / <a href="dc-organize.html" title="Organize Shortcodes">Organize</a> / <a href="dc-elements.html" title="Element Shortcodes">Elements</a><br />
              <br />
              
              <!-- DC Toggle 1 Start -->
              <div class="dc_toggle_container" style="width:90%"> + <a href="#" class="toggleCollapse" rel="style2">expand all</a><br />
                <br />
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Web Videos &nbsp; <small style="color:#999;">Add web videos to your website in seconds</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <table cellpadding="8">
                      <tr>
                        <td> Vimeo<br />
                          
                          <!-- DC Vimeo Embed Start -->
                          
                          <iframe src="http://player.vimeo.com/video/4749536" width="350" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                          
                          <!-- <iframe src="http://player.vimeo.com/video/VIDEO_ID_HERE" width="600" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> --> 
                          <!-- DC Vimeo Embed End --> 
                          
                          <br /></td>
                        <td> YouTube<br />
                          
                          <!-- DC YouTube Embed Start -->
                          
                          <iframe width="350" height="200" src="http://www.youtube.com/embed/FG0fTKAqZ5g?rel=0" frameborder="0" allowfullscreen></iframe>
                          
                          <!-- <iframe width="600" height="300" src="http://www.youtube.com/embed/VIDEO_ID_HERE?rel=0" frameborder="0" allowfullscreen></iframe> --> 
                          <!-- DC YouTube Embed End --> 
                          <br /></td>
                      </tr>
                      <tr>
                        <td valign="top"> HTML 5<br />
                          
                          <!-- DC HTML 5 Video Embed Start -->
                          
                          <video poster="http://cdn.pimg.co/sc-samples/sample-clip.png" controls preload="metadata" width="350" height="200">
                            <source src="http://cdn.pimg.co/sc-samples/sample-clip.mp4" type="video/mp4; codecs="avc1.42E01E, mp4a.40.2"">
                            <!-- for IE -->
                            <source src="http://cdn.pimg.co/sc-samples/sample-clip.webm" type="video/webm; codecs="vp8, vorbis"">
                            <!-- for Firefox --> 
                            If you see this message, your browser does not support the video tag. </video>
                          
                          <!-- DC HTML 5 Video Embed End --> 
                          <br /></td>
                        <td valign="top"> Daily Motion<br />
                          
                          <!-- DC DailyMotion Embed Start -->
                          
                          <iframe src="http://www.dailymotion.com/embed/video/xq2cmn?logo=1" width="350" height="200" frameborder="0"></iframe>
                          
                          <!-- DC DailyMotion Embed End --> 
                          <br /></td>
                      </tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/embed_videos.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Embed Document Files &nbsp; <small style="color:#999;">Embed Adobe PDF/MS Office files internally or externally on a webpage</small></a></div>
                  <div class="dc_toggle_box"><br />
                    Supports: Adobe Acrobat (pdf), MS Word (doc), Excel (xls), PowerPoint (ppt), Adobe Illustrator (.ai), Adobe Photshop (.psd) <br />
                    <br />
                    <!-- DC PDF Embed Start -->
                    <iframe src="http://docs.google.com/viewer?url=http://cdn.pimg.co/sc-samples/sample.pdf&embedded=true" style="width:85%; height:500px;" frameborder="0"></iframe>
                    <!-- DC PDF Embed End --> 
                    <br />
                    <br />
                    <!-- DC PDF Embed Start --> 
                    <a href="http://docs.google.com/viewer?url=http://cdn.pimg.co/sc-samples/sample.pdf" target="_blank" style="text-decoration:underline;">Open PDF File via Link</a> 
                    <!-- DC PDF Embed End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/embed_pdf.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Social Networking &nbsp; <small style="color:#999;">Add social networking connections with ease</small></a></div>
                  <div class="dc_toggle_box"><br />
                    Using user: <strong>Microsoft</strong> as example.<br />
                    <table cellpadding="8" width="90%">
                      <tr>
                        <td> Facebook Likes Box<br />
                          
                          <!-- DC Facebook Likes Box Start -->
                          
                          <iframe src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/microsoft&width=350&height=300&colorscheme=light&show_faces=true&border_color&stream=false&header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:300px;" allowTransparency="true"></iframe>
                          
                          <!-- DC Facebook Likes Box End --></td>
                        <td width="40%"> Google +1 Button<br />
                          
                          <!-- Place this tag in your head or just before your close body tag --> 
                          <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                          <div class="g-plusone" data-size="medium" data-annotation="inline" data-href="http://www.microsoft.com"></div>
                          <br />
                          <br />
                          Facebook Likes<br />
                          
                          <!-- DC Facebook Likes Start -->
                          
                          <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.microsoft.com&send=false&layout=standard&width=200&show_faces=false&action=like&colorscheme=light&font&height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:35px;" allowTransparency="true"></iframe>
                          
                          <!-- DC Facebook Likes End --> 
                          
                          <br />
                          <br />
                          Twitter Follower Count<br />
                          
                          <!-- DC Twitter Count Start -->
                          
                          <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=MICROSOFT&show_count=true&show_screen_name=true&lang=en" style="width:250px; height:20px;"></iframe>
                          
                          <!-- DC Twitter Count End --> 
                          
                          <br />
                          <br />
                          Twitter Tweet<br />
                          
                          <!-- DC Twitter Tweet Start --> 
                          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://yourdomain.com/page-to-tweet-about.html">Tweet</a> 
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
                          <!-- DC Twitter Tweet End --> 
                          
                          <br />
                          <br />
                          pinterest Follow<br />
                          
                          <!-- DC pInterest Start --> 
                          <a href="http://pinterest.com/microsoft/"><img src="http://passets-cdn.pinterest.com/images/about/buttons/follow-me-on-pinterest-button.png" width="169" height="28" alt="Follow Me on Pinterest" /></a> 
                          <!-- DC pInterest End -->
                          
                          <div class="dc_clear"></div>
                          
                          <!-- line break/clear line --></td>
                      </tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/social_networking.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Web Store &nbsp; <small style="color:#999;">Setup an ecommerce store & accept orders in just 10 minutes!</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <br />
                    <a class="dc_awb_large dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/webstore.html" target="_blank">Click to view Web Store Demo »</a><br />
                    <br />
                    <br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Twitter Feeds &nbsp; <small style="color:#999;">Add live twitter streams to your web pages</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Twitter Settings --> 
                    <script type="text/javascript">
jQuery(function ($) {
    $("#ticker1").tweet({
        username: "microsoft", // define your twitter username
        page: 1,
        avatar_size: 16, // avatar size in px
        count: 2, // how many tweets to show
        loading_text: "loading ..."
    }).bind("loaded", function () {
        var ul = $(this).find(".tweet_list");
        var ticker1 = function () {
                setTimeout(function () {
                    ul.find('li:first').animate({
                        marginTop: '-4em'
                    }, 500, function () {
                        $(this).detach().appendTo(ul).removeAttr('style');
                    });
                    ticker1();
                }, 4000); // duration before next tick (4000 = 4 secs)
            };
        ticker1();
    });
});
</script>
                    <style type="text/css">
#ticker ul.tweet_list {
    height:4em;
    overflow-y:hidden;
}
#ticker .tweet_list li {
    height: 4em;
}
</style>
                    News Ticker Feed<br />
                    <!-- DC Twitter Start -->
                    <div id="ticker" class="query" style="width:80%;"></div>
                    <!-- DC Twitter End --> 
                    
                    <br />
                    
                    <!-- DC Twitter Settings --> 
                    <script type="text/javascript">
jQuery(function ($) {
    $(".tweet").tweet({
        username: "microsoft", // define your twitter username
        avatar_size: 16, // avatar size in px
        count: 3, // how many tweets to show
        loading_text: "loading tweets..."
    });
});
</script> 
                    Basic Twitter Feed<br />
                    <!-- DC Twitter Start -->
                    <div class="tweet query" style="width:80%;"></div>
                    <!-- DC Twitter End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/tweet.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">RSS Feeds &nbsp; <small style="color:#999;">Display RSS Feeds on your website. Just copy code + enter a RSS URL! </small></a></div>
                  <div class="dc_toggle_box"><br />
                    <br />
                    <a class="dc_awb_large dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/rssfeeds.html" target="_blank">Click to view RSS Feed Demo »</a><br />
                    <br />
                    <br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Site Screenshot &nbsp; <small style="color:#999;">Dynamically generate a screenshot of any website URL via HTML code</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Site Screenshot Start --> 
                    <img src="http://s.wordpress.com/mshots/v1/http%3A%2F%2Fwww.bing.com?w=300&h=250" border="1" /> <img src="http://s.wordpress.com/mshots/v1/http%3A%2F%2Fwww.bing.com?w=200&h=125" border="1" hspace="8" /> <img src="http://s.wordpress.com/mshots/v1/http%3A%2F%2Fwww.bing.com?w=150&h=112" border="1" /> 
                    <!-- DC Site Screenshot End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/site_screenshot.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Bing/Google Maps &nbsp; <small style="color:#999;">Add interactive Google Maps/Bing Maps</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Embed Google Maps Start -->
                    <iframe width="350" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=Liberty Island, New York, NY 10004, USA&layer=c&t=p&z=13&source=embed&output=svembed"></iframe>
                    <!-- DC Embed Google Maps End --> 
                    &nbsp;
                    <iframe id="map" name="mapFrame" src="http://www.bing.com/maps/embed/?lvl=16&amp;cp=40.689337621527514%7E-74.04410472271073&amp;sty=h&amp;draggable=true&amp;v=2&amp;dir=0&amp;ss=ypid.YN618x10620448%7Epg.1&amp;form=LMLTEW&amp;mkt=en-au&amp;emid=b32a3f62-4625-b48d-6c99-f9d0821f89b8&amp;w=350&amp;h=250" frameborder="0" height="250" scrolling="no" width="350"></iframe>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/maps.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Flickr &nbsp; <small style="color:#999;">Stream photos from your flickr account to your webpage</small></a></div>
                  <div class="dc_toggle_box"><br />
                    Flickr Feed with LightBox<br />
                    <!-- DC Flickr Feed Start -->
                    <div id="dc_jflickr_feed_container" style="width:95%;">
                      <ul id="jflickr_cbox" class="dc_jflickr_thumbs">
                      </ul>
                    </div>
                    <!-- DC Flickr Feed End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <!-- DC Flickr Feed Settings --> 
                    <script type="text/javascript">
	$('#jflickr_cbox').jflickrfeed({
		limit: 16, // number of images to show
		qstrings: { id: '25182021@N05' // id of flickr gallery (use idgettr.com to get flickr gallery id)
		},
		// Small images: {{image_s}}
		// Medium images: {{image}}
		// Large images: {{image_b}}
		itemTemplate: '<li>' + '<a rel="colorbox" href="{{image_b}}" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '</a>' + '</li>'
	}, function(data) {
		$('#jflickr_cbox a').colorbox();
	});
</script> 
                    Flickr Slideshow<br />
                    <!-- DC Flickr Gallery Start -->
                    <iframe src="http://www.flickr.com/slideShow/index.gne?group_id=&user_id=43335486@N00&set_id=&text=" frameBorder="0" width="95%" height="700" scrolling="no"></iframe>
                    <!-- DC Flickr Gallery End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/flickr.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Site Search &nbsp; <small style="color:#999;">Let users search your site. Powered by Google</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Google Site Search Start --> 
                    Domain used in this example: cnn.com<br />
                    <br />
                    <form id="gsearchForm" method="post">
                      <fieldset>
                        <input id="gsearch1" type="text" />
                        <input type="submit" value="Submit" id="gsubmitButton" />
                        <div id="searchInContainer">
                          <input type="radio" name="check" value="site" id="searchSite" checked />
                          <label for="searchSite" id="siteNameLabel">Search</label>
                          <input type="radio" name="check" value="web" id="searchWeb" />
                          <label for="searchWeb">Search The Web</label>
                        </div>
                        <ul class="gsearch-icons">
                          <li class="web" title="Web Search" data-searchType="web">Web</li>
                          <li class="images" title="Image Search" data-searchType="images">Images</li>
                          <li class="news" title="News Search" data-searchType="news">News</li>
                          <li class="videos" title="Video Search" data-searchType="video">Videos</li>
                        </ul>
                      </fieldset>
                    </form>
                    <div id="resultsDiv"></div>
                    <!-- DC Google Site Search End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/site_search.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">PayPal Buttons &nbsp; <small style="color:#999;">Accept and process credit card payments with Paypal links</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <table cellpadding="21">
                      <tr>
                        <td><!-- DC PayPal Payment Link Start -->
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="YOUR@PAYPALACCOUNT.COM">
                            <input type="hidden" name="item_name" value="Name of item paying for">
                            <input type="hidden" name="amount" value="29.95">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="button_subtype" value="products">
                            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          </form>
                          
                          <!-- DC PayPal Payment Link End --></td>
                        <td><!-- DC PayPal Subscription Link Start -->
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                            <input type="hidden" name="cmd" value="_xclick-subscriptions">
                            <input type="hidden" name="business" value="your@paypalaccuont.com">
                            <input type="hidden" name="item_name" value="Name of subscription item">
                            <input type="hidden" name="a3" value="29.95">
                            <!-- subscription price -->
                            <input type="hidden" name="p3" value="1">
                            <!-- rebill every x value -->
                            <input type="hidden" name="t3" value="M">
                            <!-- interval M=month/W=week/Y=year -->
                            <input type="hidden" name="src" value="1">
                            <!-- Is this recurring 1=yes/0=no -->
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          </form>
                          
                          <!-- DC PayPal Subscription Link End --></td>
                        <td><!-- DC PayPal Donation Link Start -->
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                            <input type="hidden" name="cmd" value="_donations">
                            <input type="hidden" name="business" value="YOUR@PAYPALACCOUNT.COM">
                            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          </form>
                          
                          <!-- DC PayPal Donation Link End --></td>
                      </tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/paypal_button.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Contact Forms &nbsp; <small style="color:#999;">Add stylish pre-made forms.</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Contact Form Start -->
                    <form action="" class="dc_form_contact_light frame tbar nolabel">
                      <h3>How can we help you?</h3>
                      <input type="text" name="name" class="form-input" placeholder="Name (required)" required />
                      <input type="email" name="email" class="form-input" placeholder="Email (required)" required />
                      <input type="text" name="subject" class="form-input" placeholder="Subject (optional)" />
                      <textarea name="message" class="form-input"  placeholder="Message (required)" required></textarea>
                      <input class="form-btn" type="submit" value="Send Message" />
                    </form>
                    <!-- DC Contact Form End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/contact_forms.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Message Boxes &nbsp; <small style="color:#999;">Display alert message boxes</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Message Box Start -->
                    <div class="dc_message_box1 dc_focused_bg success closeable">
                      <p><strong>Success!</strong> Event completed successfully.</p>
                    </div>
                    <div class="dc_message_box1 dc_focused_bg error">
                      <p><strong>Error!</strong> Event did not complete. (Dialog not closable)</p>
                    </div>
                    <div class="dc_message_box2 warning"> <span></span>
                      <div class="text">
                        <p><strong>Warning!</strong> This is a warning notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius eros et risus suscipit vehicula.</p>
                      </div>
                    </div>
                    <div class="dc_message_box2 info"> <span></span>
                      <div class="text">
                        <p><strong>Info!</strong> This is a info notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius eros et risus suscipit vehicula.</p>
                      </div>
                    </div>
                    
                    <!-- DC Message Box End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/message_box.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Lightbox &nbsp; <small style="color:#999;">Display content in popup modal dialogs with darkened background</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <table cellpadding="12">
                      <tr>
                        <td> Click to display larger image<br />
                          <a href="http://cdn.pimg.co/s/sak/2/800/600/c" rel="prettyPhoto[1]" title="Add description here"><img src="http://cdn.pimg.co/s/sak/2/192/132/c" alt="Image Caption #1" class="img_border_radius" border="0" height="138" width="189"></a> <a href="http://cdn.pimg.co/s/sak/3/800/600/c" rel="prettyPhoto[1]" title="Add description here"><img src="http://cdn.pimg.co/s/sak/3/192/132/c" alt="Image Caption #2" class="img_border_radius" border="0" height="138" width="189"></a> <br /></td>
                        <td> Display External Content (using IFRAME)<br />
                          <big> - <a href="http://www.bing.com?iframe=true&amp;width=800&amp;height=500" rel="prettyPhoto[iframes]" title="Add description here (optional)">View Bing Website</a> <br />
                          - <a href="http://www.news.com?iframe=true&amp;width=100%&amp;height=100%" rel="prettyPhoto[iframes]" title="Add description here (optional)">View News.com Website</a> (set 100% width) <br />
                          <br />
                          </big> Display YouTube Content<br />
                          <big> - <a href="http://www.youtube.com/watch?v=FG0fTKAqZ5g" rel="prettyPhoto" title="Add caption here (optional)">View YouTube Video Clip</a> </big></td>
                      </tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/lightbox.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Inline Content Scroller &nbsp; <small style="color:#999;">Add inline scrollable HTML content to your webpages</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <br />
                    <a class="dc_awb_large dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/inline_content.html" target="_blank">Click to view Inline Content Scroller Demo »</a><br />
                    <br />
                    <br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Syntax Highlighter &nbsp; <small style="color:#999;">Highlight HTML, CSS, Pascal, Java, JS, PHP Codes & more! </small></a></div>
                  <div class="dc_toggle_box"><br />
                    <pre class="brush: xml">

&lt;!-- code highlighting begins -->
&lt;html>
&lt;head>
&lt;link type="text/css" rel="stylesheet" href="css/sample.css" />
&lt;script type="text/javascript" src="js/sample.js">&lt;/script>

	&lt;style>
body { background:#fff; font: 12px;}
	&lt;/style>
&lt;/head>
&lt;body>

&lt;h1>My First Heading&lt;/h1>

&lt;p>My first paragraph.&lt;/p>

&lt;/body>
&lt;/html>
&lt;!-- code highlighting ends -->

</pre>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/syntaxhighlighter.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Tooltips &nbsp; <small style="color:#999;">Add tooltip hints to your links, images and forms!</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <big>
                    <table cellpadding="12" border="0" cellspacing="0">
                      <tr>
                        <td><!-- DC ToolTips Start --> 
                          <a href="#" class="dc_3dtooltip top left auto black" style="text-decoration:underline;">Black 3D Tooltip<span>This is <strong>black</strong> tooltip example.</span></a> 
                          <!-- DC ToolTips End --></td>
                        <td><!-- DC ToolTips Start --> 
                          <a href="#" class="dc_3dtooltip top left auto blue" style="text-decoration:underline;">Blue 3D Tooltip<span>This is <strong>blue</strong> tooltip example.</span></a> 
                          <!-- DC ToolTips End --></td>
                        <td><!-- DC ToolTips Start --> 
                          <a href="#" class="dc_flat_tooltip top left auto yellow" style="text-decoration:underline;">Yellow Flat Tooltip<span>This is <strong>yellow</strong> tooltip example.</span></a> 
                          <!-- DC ToolTips End --></td>
                        <td><!-- DC ToolTips Start --> 
                          <a href="#" class="dc_flat_tooltip top left auto green" style="text-decoration:underline;">Green Flat Tooltip<span>This is <strong>green</strong> tooltip example.</span></a> 
                          <!-- DC ToolTips End --></td>
                      </tr>
                    </table>
                    </big>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/tooltips.html" target="_blank">More options & styles »</a><br />
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
                    <div id="ticker1" class="query"></div>
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

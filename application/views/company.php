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
    <div class="scroll-panel gap">
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
              <h1>Company Page<span>Cras sit amet libero eros... </span></h1>
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
              
              <!-- DC Columns CSS -->
              <link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/columns/css/dc_columns.css" />
              
              <!-- DC Social Icons CSS -->
              <link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/social_icons/dc_social_icons.css" />
              <h1 class="gap1"><strong>About Us</strong></h1>
              <br />
              
              <!-- /// Testimonial Style 1 /// --> 
              
              <span style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;font-weight: 400; font-size: 36px;color:#999;line-height:130%">Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Cum sociis. </span>
              <p>&nbsp;</p>
              <br />
              
              <!-- DC [3 Columns] Start -->
              <div class="one_third_pad">
                <h2>Who we are?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis lobortis est congue tempor. Fusce condimentum, nisl a tempus rhoncus, tortor ipsum sollicitudin nibh, vel porttitor arcu nisi quis lectus. Ut in tortor felis, at semper arcu. Ut lectus erat, fermentum et imperdiet ut, accumsan eget leo. Suspendisse ac risus est. Sed a lectus lorem, sed gravida justo. Aenean non lectus adipiscing metus pulvinar ultricies. Quisque nec nisl at turpis fringilla congue. Pellentesque rhoncus est a urna blandit malesuada. Proin mattis augue sagittis sapien luctus pellentesque. </p>
              </div>
              <!-- END one_third_pad -->
              
              <div class="one_third_pad">
                <h2>Our Mission</h2>
                <p>Integer sed dolor neque, sit amet rutrum nisi. Vestibulum accumsan ligula ut lacus elementum sit amet sodales nunc rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent fringilla, libero in porttitor vulputate, ante sem blandit augue, sed tincidunt nunc tellus eu eros. Maecenas ut arcu nec lectus molestie tristique. Nulla quis lectus elit, id elementum justo. Nam libero ipsum, consectetur sed fermentum vitae, gravida vitae sem. Sed blandit tellus et massa pulvinar sit amet tincidunt nibh porttitor. </p>
              </div>
              <!-- END one_third_pad -->
              
              <div class="one_third_pad column-last">
                <h2>Our Commitment To You</h2>
                <p>Curabitur sagittis arcu pellentesque enim tempor pulvinar. Aliquam convallis vehicula elit, eget mollis quam volutpat sed. Duis consectetur erat nec est lacinia ac volutpat enim adipiscing. Proin posuere, lacus at laoreet tristique, dui erat viverra urna, vel euismod sem orci faucibus metus. Duis tempus fermentum nisi sed molestie. Proin suscipit egestas facilisis. Phasellus interdum, purus eu sagittis consequat, justo ligula posuere arcu, non lobortis est lectus dapibus massa.</p>
              </div>
              <!-- END one_third_pad --> 
              <!-- DC [3 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line -->
              
              <p>&nbsp;</p>
              
              <!-- DC Elastislide CSS -->
              <link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/carousel_hor/css/elastislide.css" />
              
              <!-- DC Elastislide JS --> 
              <script type="text/javascript" src="http://cdn.dcodes.net/2/carousel_hor/js/modernizr.custom.js"></script> 
              <script type="text/javascript" src="http://cdn.dcodes.net/2/carousel_hor/js/jquerypp.custom.js"></script> 
              <script type="text/javascript" src="http://cdn.dcodes.net/2/carousel_hor/js/jquery.elastislide.js"></script> 
              
              <!-- DC Elastislide Horizontal Carousel Start -->
              <div class="dc_es_container elastislide_hstyle" style="width:100%">
                <ul id="dc_es_carousel1" class="elastislide-list">
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/ccc/fff/img.png" /></a></li>
                  <li><a href="#"><img src="http://cdn.pimg.co/p/180x150/999/fff/img.png" /></a></li>
                </ul>
              </div>
              <!-- DC Elastislide Horizontal Carousel End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC Elastislide Carousel Settings --> 
              <script type="text/javascript">
             
            $( '#dc_es_carousel1' ).elastislide( {
                orientation : 'horizontal', // orientation 'horizontal' || 'vertical'
            speed : 500,    // sliding speed
            easing : 'ease-in-out', // sliding easing
            minItems : 3, // the minimum number of items to show. 
            start : 0 // index of the current item (left most item of the carousel)
             
            } );
             
</script> 
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

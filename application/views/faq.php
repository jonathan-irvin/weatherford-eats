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
              <h1>FAQ Page<span>Cras sit amet libero eros... </span></h1>
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
              
              <!-- DC Toggle CSS -->
              <link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/accordion_toggle/css/dc_accordion_toggle.css" />
              
              <!-- jQuery Library (skip this step if already called on page ) --> 
              
              <!-- DC Toggle JS --> 
              <script type="text/javascript" src="http://cdn.dcodes.net/2/accordion_toggle/js/dc_accordion_toggle.js"></script> 
              
              <!-- DC Columns CSS -->
              <link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/columns/css/dc_columns.css" />
              <h1 class="gap1">Frequently Asked Questions</h1>
              
              <!-- ///////////////// Style 2 --->
              
              <h2>Style 1</h2>
              
              <!-- DC [2 Columns] Start -->
              <div class="one_half"> 
                <!-- DC Toggle 1 Start -->
                <div class="dc_toggle_container" style="width:90%;"> + <a href="#" class="toggleCollapse" rel="style1">expand all</a><br />
                  <br />
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">What is your return policy?</a></div>
                    <div class="dc_toggle_box">We offer a 30-day money-back guarantee on all our products. If for any reason you are not entirely satisfied with the product, you may return it for a product refund.
                      The guarantee is valid from the day the order is made on our website and covers all customers.</div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">What payment methods do you accept?</a></div>
                    <div class="dc_toggle_box">We accept Credit Card, Paypal, Check, Money Orders, and Bank Wire. We accept credit cards in the form of Mastercard, Visa, American Express and Diners.</div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">Do you offer an affiliate program?</a></div>
                    <div class="dc_toggle_box">Yes! You can signup to our affiliate program <a href="#">here</a>.</div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">When will my order ship?</a></div>
                    <div class="dc_toggle_box">Your order will ship within one business day from the date you placed the order. Transit time will vary depending on the shipping method and destination, but generally, your products will arrive in five to seven business days (statewide).</div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">What are your hours of operation?</a></div>
                    <div class="dc_toggle_box"> General hours are:<br />
                      9:00am to 5:30pm, Monday to Friday. </div>
                  </div>
                </div>
                <!-- DC Toggle 1 End --> 
                
              </div>
              <!-- END one_half -->
              
              <div class="one_half column-last"> <br />
                <br />
                <!-- DC Toggle 1 Start -->
                <div class="dc_toggle_container" style="width:90%;">
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">Do you ship internationally?</a></div>
                    <div class="dc_toggle_box">At this time we only ship within state.</div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">What type of security do you use to safeguard personal information?</a></div>
                    <div class="dc_toggle_box">We use high-grade 256 bit encryption to secure all transactions.</div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">How do I track my package? </a></div>
                    <div class="dc_toggle_box">You will receive your tracking number via email as soon as it becomes available. Your tracking number will also be listed in your account. Tracking results should start to appear after the shipping carrier picks up the package from our warehouse.</div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">Where can I find your Terms and Conditions?</a></div>
                    <div class="dc_toggle_box">You can view our Terms and Conditions <a href="#">here</a>. </div>
                  </div>
                  <div class="dc_toggle style1">
                    <div><a href="" class="dc_toggle_link">How can I contact you?</a></div>
                    <div class="dc_toggle_box"> You can reach us via phone or email. Click <a href="#">here</a> for more information. </div>
                  </div>
                </div>
                <!-- DC Toggle 1 End --> 
                
              </div>
              <!-- END one_half --> 
              <!-- DC [2 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              <br />
              
              <!-- ///////////////// Style 2 --->
              
              <h2>Style 2</h2>
              
              <!-- DC Toggle 2 Start -->
              <div class="dc_toggle_container" style="width:90%;"> + <a href="#" class="toggleCollapse" rel="style2">expand all</a><br />
                <br />
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">How powerful is the human mind?</a></div>
                  <div class="dc_toggle_box">The human brain has the capacity to store everything that you experience.</div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">How long is the DNA?</a></div>
                  <div class="dc_toggle_box">If your DNA was stretched out it would reach to the moon 6,000 times.</div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">How long can the brain survive without oxygen?</a></div>
                  <div class="dc_toggle_box">The brain can stay alive for 4 to 6 minutes without oxygen. After that cells begin die.</div>
                </div>
              </div>
              <!-- DC Toggle 2 End --> 
              <br />
              
              <!-- ///////////////// Style 3 --->
              
              <h2>Style 3</h2>
              
              <!-- DC Toggle 3 Start -->
              <dl class="dc_accordion2" style="width:90%;">
                <dt class="current">+ What is Shock?</dt>
                <dd class="current">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat massa id libero feugiat placerat. Nulla consequat sollicitudin dignissim. Praesent vehicula risus eget elit rutrum porttitor.</p>
                </dd>
                <dt>+ What is Disbelief?</dt>
                <dd>
                  <p>Pellentesque vel mi enim. Phasellus scelerisque turpis sed leo ultricies semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque lacinia felis nec vehicula. Nam libero sem, auctor non tempor a, lacinia nec urna.</p>
                </dd>
                <dt>+ What is Acceptance?</dt>
                <dd>
                  <p>Ut bibendum tellus ac tortor mollis elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam egestas quam id purus dignissim porta. Cras augue quam, suscipit at aliquam tempor, molestie nec dolor.</p>
                </dd>
              </dl>
              <!-- DC Toggle 3 End --> 
              
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

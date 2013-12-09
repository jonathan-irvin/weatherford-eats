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
              <h1>The Team Page<span>Cras sit amet libero eros... </span></h1>
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
              
              <!-- ///////////////// Style 1 --->
              
              <h1 class="gap1">Style 1</h1>
              
              <!-- DC [Columns: L/Sidebar + Body] Start -->
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/300x250/cccccc/fff/img.png" /> </div>
              <!-- END one_third_pad -->
              
              <div class="two_third_pad column-last">
                <h3>John D.</h3>
                <h4>CEO</h4>
                <a class="mail_micro dc_social_micro" title="mail" href="#">mail</a> <a class="skype_micro dc_social_micro" title="skype" href="#">skype</a> <a class="facebook_micro dc_social_micro" title="facebook" href="#">facebook</a> <a class="twitter_micro dc_social_micro" title="twitter" href="#">twitter</a> <a class="google_micro dc_social_micro" title="google+" href="#">google+</a> <a class="linkedin_micro dc_social_micro" title="linkedin" href="#">linkedin</a> <a class="flickr_micro dc_social_micro" title="flickr" href="#">flickr</a>
                <p>Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. Lorem ipsum dolor sit amet. Quisque aliquam. Donec faucibus. Mauris a ante.</p>
              </div>
              <!-- END two_third_pad --> 
              <!-- DC [Columns: L/Sidebar + Body] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [Columns: L/Sidebar + Body] Start -->
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/300x250/cccccc/fff/img.png" /> </div>
              <!-- END one_third_pad -->
              
              <div class="two_third_pad column-last">
                <h3>Jessica B.</h3>
                <h4>Sales Manager</h4>
                <a class="mail_micro dc_social_micro" title="mail" href="#">mail</a> <a class="skype_micro dc_social_micro" title="skype" href="#">skype</a> <a class="facebook_micro dc_social_micro" title="facebook" href="#">facebook</a> <a class="twitter_micro dc_social_micro" title="twitter" href="#">twitter</a> <a class="google_micro dc_social_micro" title="google+" href="#">google+</a> <a class="linkedin_micro dc_social_micro" title="linkedin" href="#">linkedin</a> <a class="flickr_micro dc_social_micro" title="flickr" href="#">flickr</a>
                <p>Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. Lorem ipsum dolor sit amet. Quisque aliquam. Donec faucibus. Mauris a ante.</p>
              </div>
              <!-- END two_third_pad --> 
              <!-- DC [Columns: L/Sidebar + Body] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [Columns: L/Sidebar + Body] Start -->
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/300x250/cccccc/fff/img.png" /> </div>
              <!-- END one_third_pad -->
              
              <div class="two_third_pad column-last">
                <h3>Fredick M.</h3>
                <h4>Finance Manager</h4>
                <a class="mail_micro dc_social_micro" title="mail" href="#">mail</a> <a class="skype_micro dc_social_micro" title="skype" href="#">skype</a> <a class="facebook_micro dc_social_micro" title="facebook" href="#">facebook</a> <a class="twitter_micro dc_social_micro" title="twitter" href="#">twitter</a> <a class="google_micro dc_social_micro" title="google+" href="#">google+</a> <a class="linkedin_micro dc_social_micro" title="linkedin" href="#">linkedin</a> <a class="flickr_micro dc_social_micro" title="flickr" href="#">flickr</a>
                <p>Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. Lorem ipsum dolor sit amet. Quisque aliquam. Donec faucibus. Mauris a ante.</p>
              </div>
              <!-- END two_third_pad --> 
              <!-- DC [Columns: L/Sidebar + Body] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [Columns: L/Sidebar + Body] Start -->
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/300x250/cccccc/fff/img.png" /> </div>
              <!-- END one_third_pad -->
              
              <div class="two_third_pad column-last">
                <h3>Sally S.</h3>
                <h4>Support Manager</h4>
                <a class="mail_micro dc_social_micro" title="mail" href="#">mail</a> <a class="skype_micro dc_social_micro" title="skype" href="#">skype</a> <a class="facebook_micro dc_social_micro" title="facebook" href="#">facebook</a> <a class="twitter_micro dc_social_micro" title="twitter" href="#">twitter</a> <a class="google_micro dc_social_micro" title="google+" href="#">google+</a> <a class="linkedin_micro dc_social_micro" title="linkedin" href="#">linkedin</a> <a class="flickr_micro dc_social_micro" title="flickr" href="#">flickr</a>
                <p>Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. Lorem ipsum dolor sit amet. Quisque aliquam. Donec faucibus. Mauris a ante.</p>
              </div>
              <!-- END two_third_pad --> 
              <!-- DC [Columns: L/Sidebar + Body] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- ///////////////// Style 2 --->
              
              <h1 class="gap1">Style 2</h1>
              
              <!-- DC [2 Columns] Start -->
              <div class="one_half_pad"> <img src="http://cdn.pimg.co/p/400x350/cccccc/fff/img.png" style="border-radius: 6px;" /><br />
                <h3>John D.</h3>
                <h4>CEO</h4>
                <a class="email_switch dc_social_switch32" title="email" href="#">email</a> <a class="skype_switch dc_social_switch32" title="skype" href="#">skype</a> <a class="facebook_switch dc_social_switch32" title="facebook" href="#">facebook</a> <a class="twitter_switch dc_social_switch32" title="twitter" href="#">twitter</a> <a class="linkedin_switch dc_social_switch32" title="linkedin" href="#">linkedin</a> <a class="googleplus_switch dc_social_switch32" title="google+" href="#">google +</a> </div>
              <!-- END one_half_pad -->
              
              <div class="one_half_pad column-last"> <img src="http://cdn.pimg.co/p/400x350/cccccc/fff/img.png" style="border-radius: 6px;" /><br />
                <h3>Jessica B.</h3>
                <h4>Sales Manager</h4>
                <a class="email_switch dc_social_switch32" title="email" href="#">email</a> <a class="skype_switch dc_social_switch32" title="skype" href="#">skype</a> <a class="facebook_switch dc_social_switch32" title="facebook" href="#">facebook</a> <a class="twitter_switch dc_social_switch32" title="twitter" href="#">twitter</a> <a class="linkedin_switch dc_social_switch32" title="linkedin" href="#">linkedin</a> <a class="googleplus_switch dc_social_switch32" title="google+" href="#">google +</a> </div>
              <!-- END one_half_pad --> 
              <!-- DC [2 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [2 Columns] Start -->
              <div class="one_half_pad"> <img src="http://cdn.pimg.co/p/400x350/cccccc/fff/img.png" style="border-radius: 6px;" /><br />
                <h3>Fredick M.</h3>
                <h4>Finance Manager</h4>
                <a class="email_switch dc_social_switch32" title="email" href="#">email</a> <a class="skype_switch dc_social_switch32" title="skype" href="#">skype</a> <a class="facebook_switch dc_social_switch32" title="facebook" href="#">facebook</a> <a class="twitter_switch dc_social_switch32" title="twitter" href="#">twitter</a> <a class="linkedin_switch dc_social_switch32" title="linkedin" href="#">linkedin</a> <a class="googleplus_switch dc_social_switch32" title="google+" href="#">google +</a> </div>
              <!-- END one_half_pad -->
              
              <div class="one_half_pad column-last"> <img src="http://cdn.pimg.co/p/400x350/cccccc/fff/img.png" style="border-radius: 6px;" /><br />
                <h3>Sally S.</h3>
                <h4>Support Manager</h4>
                <a class="email_switch dc_social_switch32" title="email" href="#">email</a> <a class="skype_switch dc_social_switch32" title="skype" href="#">skype</a> <a class="facebook_switch dc_social_switch32" title="facebook" href="#">facebook</a> <a class="twitter_switch dc_social_switch32" title="twitter" href="#">twitter</a> <a class="linkedin_switch dc_social_switch32" title="linkedin" href="#">linkedin</a> <a class="googleplus_switch dc_social_switch32" title="google+" href="#">google +</a> </div>
              <!-- END one_half_pad --> 
              <!-- DC [2 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              <br />
              
              <!-- ///////////////// Style 3 --->
              
              <h1 class="gap1">Style 3</h1>
              
              <!-- DC [3 Columns] Start -->
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/250x450/cccccc/fff/img.png" />
                <h3>Jane D.</h3>
                <h4>Sales</h4>
                <a class="dc_simple_facebook_alt dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_twitter_alt dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus_alt dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_linkedin_alt dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_flickr_alt dc_social_simple20" title="flickr" href="#"></a> <br />
              </div>
              <!-- END one_third_pad -->
              
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/250x450/cccccc/fff/img.png" />
                <h3>Bob D.</h3>
                <h4>Consulting</h4>
                <a class="dc_simple_facebook_alt dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_twitter_alt dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus_alt dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_linkedin_alt dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_flickr_alt dc_social_simple20" title="flickr" href="#"></a> <br />
              </div>
              <!-- END one_third_pad -->
              
              <div class="one_third_pad column-last"> <img src="http://cdn.pimg.co/p/250x450/cccccc/fff/img.png" />
                <h3>Marry E.</h3>
                <h4>Customer Care</h4>
                <a class="dc_simple_facebook_alt dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_twitter_alt dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus_alt dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_linkedin_alt dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_flickr_alt dc_social_simple20" title="flickr" href="#"></a> <br />
              </div>
              <!-- END one_third_pad --> 
              <!-- DC [3 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [3 Columns] Start -->
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/250x450/cccccc/fff/img.png" />
                <h3>Michael J.</h3>
                <h4>Engineering</h4>
                <a class="dc_simple_facebook_alt dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_twitter_alt dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus_alt dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_linkedin_alt dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_flickr_alt dc_social_simple20" title="flickr" href="#"></a> <br />
              </div>
              <!-- END one_third_pad -->
              
              <div class="one_third_pad"> <img src="http://cdn.pimg.co/p/250x450/cccccc/fff/img.png" />
                <h3>Melissa W.</h3>
                <h4>Accounting</h4>
                <a class="dc_simple_facebook_alt dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_twitter_alt dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus_alt dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_linkedin_alt dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_flickr_alt dc_social_simple20" title="flickr" href="#"></a> <br />
              </div>
              <!-- END one_third_pad -->
              
              <div class="one_third_pad column-last"> <img src="http://cdn.pimg.co/p/250x450/cccccc/fff/img.png" />
                <h3>William F.</h3>
                <h4>Finance</h4>
                <a class="dc_simple_facebook_alt dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_twitter_alt dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus_alt dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_linkedin_alt dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_flickr_alt dc_social_simple20" title="flickr" href="#"></a> <br />
              </div>
              <!-- END one_third_pad --> 
              <!-- DC [3 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              <br />
              
              <!-- ///////////////// Style 4 --->
              
              <h1 class="gap1">Style 4</h1>
              
              <!-- DC [4 Columns] Start -->
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #1</h3>
                <h4>Sales</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #2</h3>
                <h4>Support</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #3</h3>
                <h4>Billing</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad column-last"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #4</h3>
                <h4>Technical</h4>
              </div>
              <!-- END one_fourth_pad --> 
              <!-- DC [4 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [4 Columns] Start -->
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #5</h3>
                <h4>Compliance</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #6</h3>
                <h4>Sales</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #7</h3>
                <h4>Support</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad column-last"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #8</h3>
                <h4>Engineering</h4>
              </div>
              <!-- END one_fourth_pad --> 
              <!-- DC [4 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [4 Columns] Start -->
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #9</h3>
                <h4>Compliance</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #10</h3>
                <h4>Sales</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #11</h3>
                <h4>Support</h4>
              </div>
              <!-- END one_fourth_pad -->
              
              <div class="one_fourth_pad column-last"> <img src="http://cdn.pimg.co/p/200x130/cccccc/fff/img.png" />
                <h3>Staff #12</h3>
                <h4>Engineering</h4>
              </div>
              <!-- END one_fourth_pad --> 
              <!-- DC [4 Columns] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              <br />
              
              <!-- ///////////////// Style 5 --->
              
              <h1 class="gap1">Style 5</h1>
              
              <!-- DC [Columns: R/Sidebar + Body] Start -->
              <div class="two_third_pad"> <img src="http://cdn.pimg.co/p/600x300/cccccc/fff/img.png" style="border-radius: 6px;" /><br />
                <br />
              </div>
              <!-- END two_third_pad -->
              
              <div class="one_third_pad column-last">
                <h3>Staff #1</h3>
                <h4>CEO</h4>
                <a class="dc_simple_phone dc_social_simple20" title="phone" href="#"></a> <a class="dc_simple_email dc_social_simple20" title="email" href="#"></a> <a class="dc_simple_facebook dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_linkedin dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_twitter dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_flickr dc_social_simple20" title="flickr" href="#"></a> <br />
                <br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, turpis vitae iaculis vulputate, magna libero tristique dolor, ut tincidunt tortor diam at tellus. </div>
              <!-- END one_third_pad --> 
              <!-- DC [Columns: R/Sidebar + Body] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <!-- DC [Columns: R/Sidebar + Body] Start -->
              <div class="two_third_pad"> <img src="http://cdn.pimg.co/p/600x300/cccccc/fff/img.png" style="border-radius: 6px;" /> </div>
              <!-- END two_third_pad -->
              
              <div class="one_third_pad column-last">
                <h3>Staff #2</h3>
                <h4>VP Of Sales</h4>
                <a class="dc_simple_phone dc_social_simple20" title="phone" href="#"></a> <a class="dc_simple_email dc_social_simple20" title="email" href="#"></a> <a class="dc_simple_facebook dc_social_simple20" title="facebook" href="#"></a> <a class="dc_simple_linkedin dc_social_simple20" title="linkedin" href="#"></a> <a class="dc_simple_twitter dc_social_simple20" title="twitter" href="#"></a> <a class="dc_simple_googleplus dc_social_simple20" title="google +1" href="#"></a> <a class="dc_simple_flickr dc_social_simple20" title="flickr" href="#"></a> <br />
                <br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, turpis vitae iaculis vulputate, magna libero tristique dolor, ut tincidunt tortor diam at tellus. </div>
              <!-- END one_third_pad --> 
              <!-- DC [Columns: R/Sidebar + Body] End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line -->
              
              <p>&nbsp;</p>
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

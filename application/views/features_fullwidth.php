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
              <h1>Full Width Page<span>Cras sit amet libero eros... </span></h1>
              <div class="clr"></div>
            </div>
            <div class="clr"></div>
          </div>
          <!-- /now_page -->
          <div class="clr"></div>
          <div class="content" id="gallery">
            <div class="content_resize">
              <div class="content_page">
                <div class="content_full_size">
                  <div class="h2_background">
                    <h2 class="no_margin_top no_padding_top"><span>More Info</span></h2>
                    <div class="clr"></div>
                  </div>
                  <div class="clr"></div>
                  <h3><a href="#">Cras mattis consectetur</a> </h3>
                  <div class="pic fl img_hover_box gap4"> <a href="http://cdn.pimg.co/p/800x600/b38b76/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/456x246/b38b76/fff/img.png" width="456" height="246" alt="Image" />
                    <div class="img_hover_overlay">
                      <div class="r_plus"></div>
                    </div>
                    </a></div>
                  <p>Lorem ipsum dolor sit amet, suscipit tego exerci camur diam huic, elit duis ea vel et dolore letalis. Odio, defui nonummy accumsan loquor quidne, volutpat in. Caecus iusto rusticus opto dolore appellatio, bis eligo laoreet. Antehabeo consequat neque antehabeo damnum dignissim praesent transverbero nulla plaga esca. Ullamcorper jus dolore ad neque delenit laoreet ingenium amet cui epulae tation. Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                  <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim. </p>
                  <div class="clr"></div>
                </div>
                <div class="sep2"></div>
                <div class="content_full_size">
                  <div class="h2_background">
                    <h2 class="no_margin_top no_padding_top"><span>What we do</span></h2>
                    <div class="clr"></div>
                  </div>
                  <div class="clr"></div>
                  <h3><a href="#">Nunc nostrud, feugiat molior appellatio</a> </h3>
                  <div class="pic fr img_hover_box gap5"> <a href="http://cdn.pimg.co/p/800x600/9a579b/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/256x156/9a579b/fff/img.png" width="256" height="156" alt="Image" />
                    <div class="img_hover_overlay">
                      <div class="r_plus"></div>
                    </div>
                    </a></div>
                  <p>Lorem ipsum dolor sit amet, suscipit tego exerci camur diam huic, elit duis ea vel et dolore letalis. Odio, defui nonummy accumsan loquor quidne, volutpat in. Caecus iusto rusticus opto dolore appellatio, bis eligo laoreet. Antehabeo consequat neque antehabeo damnum dignissim praesent transverbero nulla plaga esca. Ullamcorper jus dolore ad neque delenit laoreet ingenium amet cui epulae tation. Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                  <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim. </p>
                </div>
                <div class="sep2"></div>
                <div class="content_full">
                  <div class="cols4">
                    <div class="four columns alpha">
                      <div class="col4 cols_no_bg">
                        <div class="div_h3_act_href ico_1">
                          <h3><a href="#"><em>Image/Video</em></a></h3>
                          <p class="detail">Lorem ipsum dolor sit amet, lavabat quo est cum obiectum. </p>
                        </div>
                      </div>
                    </div>
                    <div class="four columns">
                      <div class="col4 cols_no_bg">
                        <div class="div_h3_act_href ico_2">
                          <h3><a href="#"><em>SEO</em></a></h3>
                          <p class="detail">Meam ad suis caelo in lucem exitum vivit in modo cavendum.</p>
                        </div>
                      </div>
                    </div>
                    <div class="four columns">
                      <div class="col4 cols_no_bg">
                        <div class="div_h3_act_href ico_3">
                          <h3><a href="#"><em>High-Quality</em></a></h3>
                          <p class="detail">Pellentesque rutrum auctor vulputate. Sed consequat susci. </p>
                        </div>
                      </div>
                    </div>
                    <div class="four columns omega">
                      <div class="col4 cols_no_bg last">
                        <div class="div_h3_act_href ico_4">
                          <h3><a href="#"><em>Free Updates</em></a></h3>
                          <p class="detail">Donec ut enim in risus molestie posuere non eu massa.</p>
                        </div>
                      </div>
                    </div>
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
</body>
</html>

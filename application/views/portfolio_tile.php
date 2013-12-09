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
              <h1>Tile Portfolio Page<span>Cras sit amet libero eros... </span></h1>
              <div class="clr"></div>
            </div>
            <div class="clr"></div>
          </div>
          <!-- /now_page -->
          <div class="clr"></div>
          <div class="content" id="gallery">
            <div class="content_resize">
              <link rel="stylesheet" href="dc_tile_portfolio/css/dc_tile_portfolio.css"/>
              <script type="text/javascript" src="dc_tile_portfolio/js/jquery.freetile.min.js"></script> 
              <script type="text/javascript" src="dc_tile_portfolio/js/dc_tile_portfolio.js"></script> 
              <script type="text/javascript" src="dc_tile_portfolio/js/jquery.easing.min.js"></script> 
              
              <!-- prettyPhoto Start -->
              <link rel="stylesheet" type="text/css" href="dc_tile_portfolio/prettyPhoto/css/prettyPhoto.css" />
              <script type="text/javascript" src="dc_tile_portfolio/prettyPhoto/js/jquery.prettyPhoto.js"></script> 
              <!-- prettyPhoto END --> 
              
              <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <style type="text/css">
    .element a span.overlay { background:none;}
  </style>
<![endif]-->
              
              <div class="dc_tile_portfolio_content">
                <h3>Filter:</h3>
                <ul class="dc_list" id="dc_tile_portfolio_tags">
                  <li class="dc_tile_portfolio_tag" id="element">All</li>
                  <li class="dc_tile_portfolio_tag" id="lan">Landscapes</li>
                  <li class="dc_tile_portfolio_tag" id="wed">Wedding</li>
                  <li class="dc_tile_portfolio_tag" id="cre">Creative</li>
                  <li class="dc_tile_portfolio_tag" id="edu">Education</li>
                  <li class="dc_tile_portfolio_tag" id="soc">Social</li>
                  <li class="dc_tile_portfolio_tag" id="spo">Sports</li>
                </ul>
                <h3>Sort by:</h3>
                <ul class="dc_list sorting">
                  <li id="sbd" class="sort-option">Date</li>
                  <li id="sbc" class="sort-option">Title</li>
                  <li id="sbr" class="sort-option">Shuffle</li>
                </ul>
                <div id="dc_tile_portfolio">
                  <div class="dtp_subbox" id="element-container">
                    <div class="element size640x320 lan"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/640x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Landscapes</span> &mdash; <span class="elementDate">1996</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x220 spo"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Running</span> &mdash; <span class="elementDate">2007</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size640x320 cre"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/640x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Bubble</span> &mdash; <span class="elementDate">2014</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x320 spo"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Montains</span> &mdash; <span class="elementDate">1972</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x220 lan"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Hot Air</span> &mdash; <span class="elementDate">1999</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size640x420 edu"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/640x420/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Education</span> &mdash; <span class="elementDate">2005</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x320 wed"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Wedding</span> &mdash; <span class="elementDate">2015</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size640x320 lan"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/640x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Landscapes</span> &mdash; <span class="elementDate">2008</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x220 cre"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Angel</span> &mdash; <span class="elementDate">1991</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size640x220 soc"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/640x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Holiday</span> &mdash; <span class="elementDate">2007</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x420 lan"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x420/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Hong Kong</span> &mdash; <span class="elementDate">2007</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x220 spo"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Biking</span> &mdash; <span class="elementDate">2006</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x320 edu"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Experiment</span> &mdash; <span class="elementDate">2007</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x220 soc"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Holidays</span> &mdash; <span class="elementDate">1998</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x320 cre"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Creative</span> &mdash; <span class="elementDate">2009</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size640x220 lan"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/640x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Landscapes</span> &mdash; <span class="elementDate">2001</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x220 spo"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Sports</span> &mdash; <span class="elementDate">2007</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size640x320 lan"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/640x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Australia</span> &mdash; <span class="elementDate">1992</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x220 wed"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x220/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Wedding</span> &mdash; <span class="elementDate">2007</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x420 cre"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x420/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Island</span> &mdash; <span class="elementDate">1993</span></span> <span class="overlay">&nbsp;</span></a></div>
                    <div class="element size310x320 soc"><a href="http://cdn.pimg.co/p/800x600/cccccc/fff/img.png" rel='prettyPhoto[gallery1]' title="Description of item goes here"><img src="http://cdn.pimg.co/p/310x320/cccccc/fff/img.png" alt="Sample Title" /> <span class="elementInfo"><span class="elementCat">Party</span> &mdash; <span class="elementDate">2012</span></span> <span class="overlay">&nbsp;</span></a></div>
                  </div>
                </div>
              </div>
              
              <!-- required for prettyphoto lightbox --> 
              
              <script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'dark_square',slideshow:8000, autoplay_slideshow: false, social_tools: false,show_title: true, allow_resize: true});
  });
</script> 
              <!-- required for prettyphoto lightbox -->
              
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

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

<!-- Gallery Starts -->
<script type="text/javascript" src="js/gallery-masonry/jquery.masonry.min.js"></script>
<script type="text/javascript" src="js/gallery-masonry/modernizr-transitions.js"></script>
<script type="text/javascript" src="js/gallery-masonry/gallery-masonry.js"></script>
<!-- Gallery Ends -->

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
              <h1>Gallery<span>Cras sit amet libero eros... </span></h1>
              <div class="clr"></div>
            </div>
            <div class="clr"></div>
          </div>
          <!-- /now_page -->
          <div class="clr"></div>
          <div class="content" id="gallery">
            <div class="content_resize">
              <div class="content_page content_full_size">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales ullamcorper accumsan. Ut felis urna, consequat eu venenatis sit amet, mollis ut quam. Nam facilisis facilisis neque, tincidunt cursus justo vehicula non. Integer fermentum fringilla mattis. Aliquam sed nunc hendrerit nisl consequat lobortis quis tincidunt ligula.</p>
                <ul class="gallery-categ" id="gallery-sort-menu">
                  <li class="all active" data-id="all"><a href="#">All</a></li>
                  <li class="abstract" data-id="abstract"><a href="#" title="Category abstract">Abstract</a> </li>
                  <li class="animals" data-id="animals"><a href="#" title="Category Animals">Animals</a> </li>
                  <li class="people" data-id="people"><a href="#" title="Category People">People</a> </li>
                  <li class="nature" data-id="nature"><a href="#" title="Category Nature">Nature</a> </li>
                </ul>
                <div class="sep_clear"></div>
                <div class="cols44" id="gallery-imgs">
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/342eb6/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x253/342eb6/fff/img.png" width="205" height="253" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/92a7d4/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x273/92a7d4/fff/img.png" width="205" height="273" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/4c9aea/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x203/4c9aea/fff/img.png" width="205" height="203" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="abstract">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/cca99/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x218/cca99/fff/img.png" width="205" height="218" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="abstract">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/c18d3/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x235/c18d3/fff/img.png" width="205" height="235" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/2c9355/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x277/2c9355/fff/img.png" width="205" height="277" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/c017ca/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x250/c017ca/fff/img.png" width="205" height="250" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/92b42/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x265/92b42/fff/img.png" width="205" height="265" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/93df/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x234/93df/fff/img.png" width="205" height="234" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/40b4a6/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x250/40b4a6/fff/img.png" width="205" height="250" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/37d416/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x223/37d416/fff/img.png" width="205" height="223" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/65923a/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x250/65923a/fff/img.png" width="205" height="250" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/adad54/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x283/adad54/fff/img.png" width="205" height="283" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/d53711/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x264/d53711/fff/img.png" width="205" height="264" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="abstract">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/f425f6/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x300/f425f6/fff/img.png" width="205" height="300" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/fa1337/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x205/fa1337/fff/img.png" width="205" height="205" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/83efc1/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x253/83efc1/fff/img.png" width="205" height="253" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/62ac7a/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x273/62ac7a/fff/img.png" width="205" height="273" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/f599af/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x203/f599af/fff/img.png" width="205" height="203" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="abstract">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/328210/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x218/328210/fff/img.png" width="205" height="218" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="abstract">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/55f58c/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x235/55f58c/fff/img.png" width="205" height="235" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/8e31df/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x277/8e31df/fff/img.png" width="205" height="277" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/d52198/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x250/d52198/fff/img.png" width="205" height="250" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/f0d288/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x265/f0d288/fff/img.png" width="205" height="265" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/889e3/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x234/889e3/fff/img.png" width="205" height="234" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/17162c/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x250/17162c/fff/img.png" width="205" height="250" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/ae5d9f/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x223/ae5d9f/fff/img.png" width="205" height="223" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/99e658/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x250/99e658/fff/img.png" width="205" height="250" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="nature">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/56c788/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x283/56c788/fff/img.png" width="205" height="283" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="animals">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/7454c4/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x264/7454c4/fff/img.png" width="205" height="264" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="abstract">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/d62de3/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x300/d62de3/fff/img.png" width="205" height="300" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="col44 cols_padding gallery-item" data-tags="people">
                    <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/3f8b/fff/img.png" class="prettyPhoto" rel="prettyPhoto[gallery]"><img src="http://cdn.pimg.co/p/205x205/3f8b/fff/img.png" width="205" height="205" alt="Image" />
                      <div class="img_hover_overlay">
                        <div class="r_plus"></div>
                      </div>
                      </a></div>
                    <p class="detail">Sit amet, consectetur adipi eiusmod. Lorem ipsum dolor.<a href="#">Read more &rarr;</a></p>
                  </div>
                  <div class="clr"></div>
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

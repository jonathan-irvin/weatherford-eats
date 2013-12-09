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
              <h1>One Column<span>Cras sit amet libero eros... </span></h1>
              <div class="clr"></div>
            </div>
            <div class="clr"></div>
          </div>
          <!-- /now_page -->
          <div class="clr"></div>
          <div class="content" id="gallery">
            <div class="content_resize">
              <div class="content_page">
                <div class="columns1">
                  <div class="two-thirds column alpha">
                    <div class="centercol">
                      <div class="content_full">
                        <div class="h2_background content_full_size">
                          <h2><span>Category 1</span></h2>
                          <div class="clr"></div>
                        </div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/c04812/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/c04812/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a> </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/909090/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/909090/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/123321/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/123321/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"><a href="http://cdn.pimg.co/p/800x600/9a9a9a/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/9a9a9a/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="clr"></div>
                        <div class="sep2"></div>
                      </div>
                      <div class="content_full">
                        <div class="h2_background content_full_size">
                          <h2><span>Category 2</span></h2>
                          <div class="clr"></div>
                        </div>
                        <div class="clr"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/ababab/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/ababab/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"><a href="http://cdn.pimg.co/p/800x600/bababa/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/bababa/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/666555/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/666555/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/965458/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/965458/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="clr"></div>
                        <div class="sep2"></div>
                      </div>
                      <div class="content_full">
                        <div class="h2_background content_full_size">
                          <h2><span>Category 3</span></h2>
                          <div class="clr"></div>
                        </div>
                        <div class="clr"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/964058/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/964058/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/ff0000/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/ff0000/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/123321/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/123321/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="sep2"></div>
                        <div class="cols1">
                          <div class="col1 content_full_size h3_bg">
                            <div class="pic img_hover_box"> <a href="http://cdn.pimg.co/p/800x600/600666/fff/img.png" class="prettyPhoto" rel="prettyPhoto[id]"><img src="http://cdn.pimg.co/p/620x340/600666/fff/img.png" width="620" height="340" alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <h3><a href="#"><em>Tunc lacrimas illa</em></a></h3>
                            <div class="sep_clear small"></div>
                            <p> Aliquip adipiscing at cui augue odio in esse, amet cogo, populus iaceo appellatio. Odio macto, refero velit obruo ideo et in et, dolore.</p>
                            <p>Nunc nostrud, feugiat molior appellatio tum vel consequat fatua dignissim. Ad aliquip augue regula lenis utrum et feugiat ad dolor, et odio ut ne turpis. Velit ideo eu duis, luptatum pagus ut tum verto abigo blandit. Uxor premo vulputate cui nisl suscipit, at minim.</p>
                            <p class="detail"><a href="#">Read More</a></p>
                          </div>
                        </div>
                        <div class="clr"></div>
                        <div class="sep_clear small"></div>
                      </div>
                      <div class="sep2"></div>
                      <div class="fl detail"><a href="#"><span>older</span></a></div>
                      <div class="fr detail" style=" margin:00px 0 10px;"><a href="#"><span>newer</span></a></div>
                      <div class="clr"></div>
                      <div class="clr"></div>
                    </div>
                  </div>
                  <div class="one-third column omega">
                    <div class="sidebar last">
                      <div class="sidebar_content">
                        <div class="sidebar_pop_posts">
                          <div class="sidebar_bg">
                            <div class="clr"></div>
                            <div class="sidebar_bg_small content_full_size">
                              <div class="h2_background h2_color_3">
                                <h2 class="no_margin_top no_padding_top"><span>Recent Posts</span></h2>
                              </div>
                              <div class="pop_posts">
                                <div class="pic fl"> <a href="http://cdn.pimg.co/p/800x600/d8db4/fff/img.png" class="prettyPhoto" rel="prettyPhoto[sb]"><img src="http://cdn.pimg.co/p/64x64/d8db4/fff/img.png" width="64" height="64" alt="Image" /></a></div>
                                <h3 class="no_margin_top no_padding_top"><a href="#">Pellentesque rutrum</a><span>07 January, 1 Comment</span></h3>
                                <p>Lorem ipsum dolor sit amet, lavabat quo est cum mihi coniunx. </p>
                                <div class="sep_clear small"></div>
                                <div class="pic fl"> <a href="http://cdn.pimg.co/p/800x600/c86d51/fff/img.png" class="prettyPhoto" rel="prettyPhoto[sb]"><img src="http://cdn.pimg.co/p/64x64/c86d51/fff/img.png" width="64" height="64" alt="Image" /></a></div>
                                <h3 class="no_margin_top no_padding_top"><a href="#">Cras sit amet gravida</a><span>07 January, 1 Comment</span></h3>
                                <p>Meam ad suis caelo in lucem exitum vivit in modo cavendum es. </p>
                                <div class="sep_clear small"></div>
                                <div class="pic fl"> <a href="http://cdn.pimg.co/p/800x600/593139/fff/img.png" class="prettyPhoto" rel="prettyPhoto[sb]"><img src="http://cdn.pimg.co/p/64x64/593139/fff/img.png" width="64" height="64" alt="Image" /></a></div>
                                <h3 class="no_margin_top no_padding_top"><a href="#">Donec pede justo</a><span>07 January, 1 Comment</span></h3>
                                <p>Praesent mattis imperdiet urna. Pellentesque rutrum auctor. </p>
                                <div class="clr"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="sep_clear"></div>
                        <div class="sidebar_text">
                          <div class="sidebar_bg">
                            <div class="clr"></div>
                            <div class="sidebar_bg_small content_full_size">
                              <div class="h2_background h2_color_2">
                                <h2 class="no_margin_top no_padding_top"><span>Text Widget</span></h2>
                              </div>
                              <div class="pic img_hover_box 1_ico"><a href="http://cdn.pimg.co/p/800x600/c5ac77/fff/img.png" class="prettyPhoto" rel="prettyPhoto[sb]"><img src="http://cdn.pimg.co/p/300x154/c5ac77/fff/img.png" width="300" height="154" alt="Image" />
                                <div class="img_hover_overlay">
                                  <div class="r_plus"></div>
                                </div>
                                </a></div>
                              <div class="sep_clear small"></div>
                              <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                              <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                          </div>
                        </div>
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
          <div class="clr"></div>
        </div>
      </div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
</body>
</html>

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

<!-- DC Tabs CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/tabs/css/dc_tabs.css" />

<!-- DC Tabs JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/tabs/js/dc_tabs.js"></script>

<!-- DC Pricing Tables CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/pricingtables/css/dc_pricingtables.css" />
<!-- DC Pricing Tables JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/pricingtables/js/dc_pricingtables.js"></script>

<!-- DC Pagination CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/pagination/css/dc_pagination.css" />

<!-- DC Breadcrumbs CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/breadcrumbs/css/dc_breadcrumbs.css" />

<!-- DC Ribbons CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/ribbons/css/dc_ribbons.css" />

<!-- DC Horizontal Carousel CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/carousel_hor/css/dc_carousel_hor.css" />

<!-- DC Horizontal Carousel JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/carousel_hor/js/jquery.bxslider2.min.js"></script>
<script type="text/javascript" src="http://cdn.dcodes.net/2/carousel_hor/js/dc_jqcarousel.js"></script>

<!-- DC Horizontal Carousel Settings -->
<script type="text/javascript">
  $(function() {jQuery('.dc_carousel_hor .carousel').jcarousel({scroll:1, wrap:'last',auto:3});});
  // auto: auto scroll in (seconds). Set to 0 to disable auto scroll
  // wrap: wrap carousel on last image. To disable auto return, set this to null.
</script>

<!-- DC Vertical Carousel CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/carousel_ver/css/dc_carousel_ver.css" />

<!-- DC Vertical Carousel JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/carousel_ver/js/dc_jqcarousel.js"></script>
<script type="text/javascript" src="http://cdn.dcodes.net/2/carousel_ver/js/dc_carousel_ver.js"></script>

<!-- DC Shadows CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/css_shadows/css/dc_css_shadows.css" />
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
              <h1>Organize Shortcodes Page<span>Cras sit amet libero eros... </span></h1>
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
              <h2>dCodes: Organize</h2>
              Shortcodes: <a href="dc-format.html">Format</a> / <a href="dc-embed.html">Embed</a> / Organize / <a href="dc-elements.html">Elements</a><br />
              <br />
              
              <!-- DC Toggle 1 Start -->
              <div class="dc_toggle_container" style="width:90%"> + <a href="#" class="toggleCollapse" rel="style2">expand all</a><br />
                <br />
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Tabs &nbsp; <small style="color:#999;">Organize content in auto-resizing tabbed containers</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Gradient Tabs Start -->
                    <section class="dc_gradient-tabs" style="width:90%; height:auto;"> 
                      
                      <!-- Tab 1 Caption -->
                      <input id="grad-tab-1" type="radio" name="radio-set1" class="grad-tab-selector-1" checked="checked" />
                      <label for="grad-tab-1" class="grad-tab-label-1">About</label>
                      
                      <!-- Tab 2 Caption -->
                      <input id="grad-tab-2" type="radio" name="radio-set1" class="grad-tab-selector-2" />
                      <label for="grad-tab-2" class="grad-tab-label-2">Services</label>
                      
                      <!-- Tab 3 Caption -->
                      <input id="grad-tab-3" type="radio" name="radio-set1" class="grad-tab-selector-3" />
                      <label for="grad-tab-3" class="grad-tab-label-3">Work</label>
                      
                      <!-- Tab 4 Caption -->
                      <input id="grad-tab-4" type="radio" name="radio-set1" class="grad-tab-selector-4" />
                      <label for="grad-tab-4" class="grad-tab-label-4">Contact</label>
                      <div class="clear-shadow"></div>
                      <div class="gradtab-content"> <!-- Tab Content Container --> 
                        
                        <!-- Tab 1 Start -->
                        <div class="gradtab-content-1">
                          <h2>About us</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in risus nisl. Aenean porta viverra risus, sed pulvinar orci convallis in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                          <h3>How we work</h3>
                          <p>Cras pretium augue ut felis lacinia congue. Phasellus consequat mauris ut sapien sagittis suscipit. Integer ut lacus sit amet eros laoreet porta. Sed semper imperdiet ligula, in gravida enim gravida eget. </p>
                        </div>
                        <!-- Tab 1 End --> 
                        
                        <!-- Tab 2 Start -->
                        <div class="gradtab-content-2">
                          <h2>Services</h2>
                          <p>Quisque egestas elementum justo, vitae pharetra lorem fermentum sit amet. Ut sodales ipsum quis nunc laoreet condimentum. Aliquam erat volutpat. Integer et tempor leo.</p>
                          <h3>Excellence</h3>
                          <p>Nullam sapien neque, accumsan sed placerat a, elementum volutpat purus. Proin feugiat, augue et hendrerit dignissim, dolor quam porttitor ligula, a dignissim felis urna id libero. </p>
                        </div>
                        <!-- Tab 2 End --> 
                        
                        <!-- Tab 3 Start -->
                        <div class="gradtab-content-3">
                          <h2>Portfolio</h2>
                          <p>Nulla nec augue et metus bibendum viverra. Integer neque odio, placerat quis porttitor eget, bibendum eu risus. Suspendisse erat arcu, placerat vitae posuere sit amet, aliquam a enim. Phasellus ullamcorper blandit consequat.</p>
                          <h3>Examples</h3>
                          <p>Donec velit quam, commodo ac vulputate non, viverra nec massa. Quisque semper convallis sem, a congue nisi posuere a. Ut vel tortor augue. </p>
                        </div>
                        <!-- Tab 3 End --> 
                        
                        <!-- Tab 4 Start -->
                        <div class="gradtab-content-4">
                          <h2>Contact</h2>
                          <p>Nullam eget metus quis sapien pharetra feugiat. Fusce sit amet nulla sit amet leo ultrices sodales. Proin eu tortor sapien. Integer at elit non dolor lacinia adipiscing.</p>
                          <h3>Get in touch</h3>
                          <p>Fusce nec nunc arcu. Nam in quam purus. Nullam libero mi, convallis id pellentesque ut, dictum non nulla. Mauris ac quam odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <!-- Tab 4 End --> 
                        
                      </div>
                      <!-- /gradtab-content --> 
                    </section>
                    <!-- DC Gradient Tabs End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <br />
                    <br />
                    
                    <!-- DC vGradient Tabs Start -->
                    <section class="dc_gradient-vtabs" style="width:90%; height:auto;"> 
                      
                      <!-- Tab 1 Caption -->
                      <input id="vgrad-tab-1" type="radio" name="radio-set2" class="vgrad-tab-selector-1" checked="checked" />
                      <label for="vgrad-tab-1" class="vgrad-tab-label-1">About</label>
                      
                      <!-- Tab 2 Caption -->
                      <input id="vgrad-tab-2" type="radio" name="radio-set2" class="vgrad-tab-selector-2" />
                      <label for="vgrad-tab-2" class="vgrad-tab-label-2">Services</label>
                      
                      <!-- Tab 3 Caption -->
                      <input id="vgrad-tab-3" type="radio" name="radio-set2" class="vgrad-tab-selector-3" />
                      <label for="vgrad-tab-3" class="vgrad-tab-label-3">Work</label>
                      
                      <!-- Tab 4 Caption -->
                      <input id="vgrad-tab-4" type="radio" name="radio-set2" class="vgrad-tab-selector-4" />
                      <label for="vgrad-tab-4" class="vgrad-tab-label-4">Contact</label>
                      <div class="clear-shadow"></div>
                      <div class="vgradtab-content"> <!-- Tab Content Container --> 
                        
                        <!-- Tab 1 Start -->
                        <div class="vgradtab-content-1">
                          <h2>About us</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in risus nisl. Aenean porta viverra risus, sed pulvinar orci convallis in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                          <h3>How we work</h3>
                          <p>Cras pretium augue ut felis lacinia congue. Phasellus consequat mauris ut sapien sagittis suscipit. Integer ut lacus sit amet eros laoreet porta. </p>
                        </div>
                        <!-- Tab 1 End --> 
                        
                        <!-- Tab 2 Start -->
                        <div class="vgradtab-content-2">
                          <h2>Services</h2>
                          <p>Quisque egestas elementum justo, vitae pharetra lorem fermentum sit amet. Ut sodales ipsum quis nunc laoreet condimentum. Aliquam erat volutpat. Integer et tempor leo. Sed semper imperdiet ligula, in gravida enim gravida eget.</p>
                          <h3>Excellence</h3>
                          <p>Nullam sapien neque, accumsan sed placerat a, elementum volutpat purus. Proin feugiat, augue et hendrerit dignissim, dolor quam porttitor ligula, a dignissim felis urna id libero. </p>
                        </div>
                        <!-- Tab 2 End --> 
                        
                        <!-- Tab 3 Start -->
                        <div class="vgradtab-content-3">
                          <h2>Portfolio</h2>
                          <p>Nulla nec augue et metus bibendum viverra. Integer neque odio, placerat quis porttitor eget, bibendum eu risus. Suspendisse erat arcu, placerat vitae posuere sit amet, aliquam a enim. Phasellus ullamcorper blandit consequat.</p>
                          <h3>Examples</h3>
                          <p>Donec velit quam, commodo ac vulputate non, viverra nec massa. Quisque semper convallis sem, a congue nisi posuere a. Ut vel tortor augue. </p>
                        </div>
                        <!-- Tab 3 End --> 
                        
                        <!-- Tab 4 Start -->
                        <div class="vgradtab-content-4">
                          <h2>Contact</h2>
                          <p>Suisque egestas elementum justo, vitae pharetra lorem fermentum sit amet. Ut sodales ipsum quis nunc laoreet condimentum. Aliquam erat volutpat. Integer et tempor leo. Sed semper imperdiet ligula, in gravida enim gravida eget.</p>
                          <h3>Get in touch</h3>
                          <p>Fusce nec nunc arcu. Nam in quam purus. Nullam libero mi, convallis id pellentesque ut, dictum non nulla. Mauris ac quam odio.</p>
                        </div>
                        <!-- Tab 4 End --> 
                      </div>
                      <!-- /vgradtab-content --> 
                    </section>
                    <!-- DC vGradient Tabs End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <br />
                    <br />
                    
                    <!-- DC Google Tabs Start -->
                    <div class="dc_tabs_type_3_container" style="width:90%; height:auto;">
                      <ul id="dc_tabs_type_3">
                        <!-- Tab Captions -->
                        <li><a href="#" name="#gtab1">One</a></li>
                        <li><a href="#" name="#gtab2">Two</a></li>
                        <li><a href="#" name="#gtab3">Three</a></li>
                        <li><a href="#" name="#gtab4">Four</a></li>
                      </ul>
                      <div id="dc_tabs_type_3_content" style="height:auto;"> <!-- Tab Content Container --> 
                        
                        <!-- Tab 1 Start -->
                        <div id="gtab1"> <big>Tab One</big>
                          <p>Praesent risus nisi, iaculis nec condimentum vel, rhoncus vel dolor. Aenean nisi lectus, varius nec tempus id, dapibus non quam.</p>
                          <p>Suspendisse ac libero mauris. Cras lacinia porttitor urna, vitae molestie libero posuere et. Mauris turpis tortor, mollis non vulputate sit amet, rhoncus vitae purus.</p>
                          <h3>Pellentesque habitant</h3>
                          <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        </div>
                        <!-- Tab 1 End --> 
                        
                        <!-- Tab 2 Start -->
                        <div id="gtab2"> <big>Tab Two</big>
                          <p>Aenean dui nulla, egestas sit amet auctor vitae, facilisis id odio. Donec dictum gravida feugiat.</p>
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras pretium elit et erat condimentum et volutpat lorem vehicula</p>
                          <p>Morbi tincidunt pharetra orci commodo molestie. Praesent ut leo nec dolor tempor eleifend.</p>
                        </div>
                        <!-- Tab 2 End --> 
                        
                        <!-- Tab 3 Start -->
                        <div id="gtab3"> <big>Tab Three</big>
                          <p>Non erat laoreet ullamcorper. Pellentesque magna metus, feugiat eu elementum sit amet, cursus sed diam. Curabitur posuere porttitor lorem, eu malesuada tortor faucibus sed.</p>
                          <h3>Duis pulvinar nibh vel urna</h3>
                          <p>Donec purus leo, porttitor eu molestie quis, porttitor sit amet ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec accumsan ornare elit id imperdiet. </p>
                          <p>Suspendisse ac libero mauris. Cras lacinia porttitor urna, vitae molestie libero posuere et. </p>
                        </div>
                        <!-- Tab 3 End --> 
                        
                        <!-- Tab 4 Start -->
                        <div id="gtab4"> <big>Tab Four</big>
                          <p>Magnis dis parturient montes, nascetur ridiculus mus. Nullam ac massa quis nisi porta mollis venenatis sit amet urna. Ut in mauris velit, sed bibendum turpis.</p>
                          <p>Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent bibendum sagittis libero.</p>
                        </div>
                        <!-- Tab 4 End --> 
                        
                      </div>
                      <!-- /dc_tabs_type_3_content --> 
                    </div>
                    <!-- DC Google Tabs End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <!-- DC Google Tabs Settings --> 
                    <script type="text/javascript">
    function resetTabs(){
        $("#dc_tabs_type_3_content div").hide(); //Hide all content
        $("#dc_tabs_type_3 a").attr("id",""); //Reset id's     
    }
 
    var myUrl = window.location.href; //get URL
    var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For localhost/tabs.html#tab2, myUrlTab = #tab2    
    var myUrlTabName = myUrlTab.substring(0,4); // For the above example, myUrlTabName = #tab
 
 
    (function(){
        $("#dc_tabs_type_3_content div").hide(); // Initially hide all content
        $("#dc_tabs_type_3 li:first a").attr("id","current"); // Activate first tab
        $("#dc_tabs_type_3_content div:first").fadeIn(); // Show first tab content
         
        $("#dc_tabs_type_3 a").on("click",function(e) {
            e.preventDefault();
            if ($(this).attr("id") == "current"){ //detection for current tab
             return      
            }
            else{            
            resetTabs();
            $(this).attr("id","current"); // Activate this
            $($(this).attr('name')).fadeIn(); // Show content for current tab
            }
        });
 
        for (i = 1; i <= $("#dc_tabs_type_3 li").length; i++) {
          if (myUrlTab == myUrlTabName + i) {
              resetTabs();
              $("a[name='"+myUrlTab+"']").attr("id","current"); // Activate url tab
              $(myUrlTab).fadeIn(); // Show url tab content       
          }
        }
    })()
     
  </script>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/tabs.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Columns &nbsp; <small style="color:#999;">Quickly add column layouts to webpages</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC [2 Columns] Start -->
                    <div class="one_half">
                      <h4>1/2</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_half -->
                    
                    <div class="one_half column-last">
                      <h4>1/2</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_half --> 
                    <!-- DC [2 Columns] End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <!-- DC [3 Columns] Start -->
                    <div class="one_third">
                      <h4>1/3</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_third -->
                    
                    <div class="one_third">
                      <h4>1/3</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_third -->
                    
                    <div class="one_third column-last">
                      <h4>1/3</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_third --> 
                    <!-- DC [3 Columns] End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <!-- DC [4 Columns] Start -->
                    <div class="one_fourth">
                      <h4>1/4</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_fourth -->
                    
                    <div class="one_fourth">
                      <h4>1/4</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_fourth -->
                    
                    <div class="one_fourth">
                      <h4>1/4</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_fourth -->
                    
                    <div class="one_fourth column-last">
                      <h4>1/4</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
                    </div>
                    <!-- END one_fourth --> 
                    <!-- DC [4 Columns] End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <!-- DC [5 Columns] Start -->
                    <div class="one_fifth">
                      <h4>1/5</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia.</p>
                    </div>
                    <!-- END one_fifth -->
                    
                    <div class="one_fifth">
                      <h4>1/5</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia.</p>
                    </div>
                    <!-- END one_fifth -->
                    
                    <div class="one_fifth">
                      <h4>1/5</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia.</p>
                    </div>
                    <!-- END one_fifth -->
                    
                    <div class="one_fifth">
                      <h4>1/5</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia.</p>
                    </div>
                    <!-- END one_fifth -->
                    
                    <div class="one_fifth column-last">
                      <h4>1/5</h4>
                      <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia.</p>
                    </div>
                    <!-- END one_fifth --> 
                    <!-- DC [5 Columns] End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/columns.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Accordions &nbsp; <small style="color:#999;">Organize data in tab groups that can expand/collapse</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Accordions 1 Start -->
                    <div class="dc_accordion" style="width:80%;">
                      <ul>
                        <li class="block_header">The Life Stages</li>
                        <li class="block" id="block_1"><a class="header" href="#block_1">Stage 1: Lorem ipsum dolor sit amet</a>
                          <div class="arrow"></div>
                          <div>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis mi tincidunt orci auctor ultricies a porta sapien. Nulla laoreet nisl sed felis scelerisque sed luctus dolor iaculis. Quisque viverra ante quis lorem dignissim consequat. Maecenas pharetra mattis nulla, pharetra accumsan purus sodales vitae. Nunc quis nisi quis lorem posuere sollicitudin quis sit amet tortor. Aliquam molestie condimentum rhoncus. Duis egestas lectus non elit sodales sed mollis turpis imperdiet. Phasellus imperdiet, purus eget imperdiet molestie, purus massa commodo ligula, eget posuere nisl enim sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam id sapien nibh, dignissim adipiscing erat. Aenean ipsum turpis, vestibulum non imperdiet non, dignissim ac nibh. </p>
                          </div>
                        </li>
                        <li class="block" id="block_2"><a class="header" href="#block_2">Stage II: Etiam turpis magna</a>
                          <div class="arrow"></div>
                          <div>
                            <p> Etiam turpis magna, vulputate vel fermentum in, lacinia ut erat. Maecenas elementum feugiat turpis vitae consequat. Etiam lacinia, dui ut rhoncus pharetra, arcu neque auctor purus, quis pharetra massa neque sit amet mauris. Nullam in turpis est, nec tincidunt elit. Nam dui leo, blandit eu interdum et, ullamcorper vel dui. Quisque sapien lectus, facilisis vel faucibus id, sagittis in risus. Fusce arcu augue, tristique quis ultricies dictum, laoreet vitae ante. Proin vitae sem libero, sollicitudin mollis urna. Nam euismod, neque id vulputate laoreet, est felis consectetur libero, eget consectetur sem neque eget est. Nunc eget turpis sit amet mi dictum faucibus. Sed imperdiet venenatis sodales. Etiam nec tempor tortor. Mauris consectetur faucibus est, vel pharetra est congue ullamcorper. </p>
                          </div>
                        </li>
                        <li class="block" id="block_3"><a class="header" href="#block_3">Stage III: Nullam egestas quam in arcu</a>
                          <div class="arrow"></div>
                          <div>
                            <p> Nullam egestas quam in arcu tristique id condimentum risus vehicula. Nunc a nunc dui, sed pharetra dui. Nunc lectus neque, malesuada non mattis at, sagittis nec lacus. Pellentesque nec interdum velit. </p>
                          </div>
                        </li>
                        <li class="block" id="block_4"><a class="header" href="#block_4">Stage IV: Nunc eu ligula pretium turpis</a>
                          <div class="arrow"></div>
                          <div>
                            <p> Nunc eu ligula pretium turpis scelerisque vehicula sed non ante. Nam vel nulla mi, sit amet lacinia nunc. Aenean volutpat ultricies iaculis. Cras nec enim lectus. Praesent eu ante neque, nec fringilla nibh. Nam porttitor laoreet nunc, id commodo risus dignissim eu. Vivamus accumsan tempus iaculis. Nulla ultricies porttitor viverra. Integer id ipsum tellus. Quisque turpis nisl, imperdiet ut scelerisque a, congue in lectus. Praesent gravida tincidunt varius. Nulla at tellus in dui feugiat luctus id sed justo. Nullam sollicitudin tempus tortor ac luctus. Suspendisse sit amet vestibulum turpis. </p>
                          </div>
                        </li>
                        <li class="block" id="block_5"><a class="header" href="#block_5">Stage V: Integer tempor dui ac ante</a>
                          <div class="arrow"></div>
                          <div>
                            <p> Integer tempor dui ac ante pharetra sit amet viverra odio consequat. Nulla facilisi. Praesent vel lorem sed elit dictum auctor. Nulla neque ligula, condimentum at fermentum sed, dignissim in augue. Sed nec justo sed nibh placerat vulputate et at purus. Nulla ultrices, lorem at malesuada vulputate, dolor lectus blandit nisl, vitae interdum ligula urna vel ligula. Vivamus volutpat lacinia neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum eget eleifend diam. Etiam velit lectus, lacinia et venenatis non, lobortis dignissim quam. </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- DC Accordions 1 End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <br />
                    
                    <!-- DC Accordion 4 Start -->
                    <section class="dc_ac-container" style="width:80%;">
                      <div>
                        <input id="ac-1" name="accordion-1" type="radio" checked />
                        <label for="ac-1">The Firm</label>
                        <article class="ac-small">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque, tortor vel aliquam elementum, lectus urna accumsan orci, eget venenatis ligula nisl quis orci. Integer rhoncus venenatis aliquam.</p>
                        </article>
                      </div>
                      <div>
                        <input id="ac-2" name="accordion-1" type="radio" />
                        <label for="ac-2">Why us</label>
                        <article class="ac-medium">
                          <p>Nullam iaculis vehicula nunc et imperdiet. Nullam gravida nunc libero. Suspendisse interdum lacus et tellus placerat condimentum. Sed eget semper urna. Integer hendrerit convallis ipsum id tristique. </p>
                        </article>
                      </div>
                      <div>
                        <input id="ac-3" name="accordion-1" type="radio" />
                        <label for="ac-3">Services</label>
                        <article class="ac-large">
                          <p>Donec lacinia, odio nec lacinia feugiat, mauris sem condimentum velit, sollicitudin malesuada velit ante quis quam. Fusce non scelerisque augue. Cras volutpat risus a metus fermentum placerat. </p>
                        </article>
                      </div>
                      <div>
                        <input id="ac-4" name="accordion-1" type="radio" />
                        <label for="ac-4">Contact us</label>
                        <article class="ac-large">
                          <p>Nulla adipiscing arcu sed odio semper lobortis. Curabitur tincidunt nulla metus. Sed faucibus sem vitae libero eleifend ac ullamcorper mauris aliquam.Sed sed odio tellus. Fusce commodo suscipit augue. </p>
                        </article>
                      </div>
                    </section>
                    <!-- DC Accordion 4 End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/accordion_toggle.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Toggles &nbsp; <small style="color:#999;">Create expandable Q&A toggles</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Toggle 3 Start -->
                    <dl class="dc_accordion2" style="width:80%;">
                      <dt class="current">+ Stage 1: Shock</dt>
                      <dd class="current">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat massa id libero feugiat placerat. Nulla consequat sollicitudin dignissim. Praesent vehicula risus eget elit rutrum porttitor.</p>
                      </dd>
                      <dt>+ Stage 2: Disbelief</dt>
                      <dd>
                        <p>Pellentesque vel mi enim. Phasellus scelerisque turpis sed leo ultricies semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque lacinia felis nec vehicula. Nam libero sem, auctor non tempor a, lacinia nec urna.</p>
                      </dd>
                      <dt>+ Stage 3: Acceptance</dt>
                      <dd>
                        <p>Ut bibendum tellus ac tortor mollis elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam egestas quam id purus dignissim porta. Cras augue quam, suscipit at aliquam tempor, molestie nec dolor.</p>
                      </dd>
                    </dl>
                    <!-- DC Toggle 3 End --> 
                    
                    <br />
                    <br />
                    
                    <!-- DC Toggle 4 Start -->
                    <section class="dc_ac-container" style="width:80%;">
                      <div>
                        <input id="toggle-ac-1" name="accordion-2" type="checkbox" />
                        <label for="toggle-ac-1">The Firm</label>
                        <article class="ac-small">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque, tortor vel aliquam elementum, lectus urna accumsan orci, eget venenatis ligula nisl quis orci. Integer rhoncus venenatis aliquam.</p>
                        </article>
                      </div>
                      <div>
                        <input id="toggle-ac-2" name="accordion-2" type="checkbox" />
                        <label for="toggle-ac-2">Why Us</label>
                        <article class="ac-medium">
                          <p>Nullam iaculis vehicula nunc et imperdiet. Nullam gravida nunc libero. Suspendisse interdum lacus et tellus placerat condimentum. Sed eget semper urna. Integer hendrerit convallis ipsum id tristique.</p>
                        </article>
                      </div>
                      <div>
                        <input id="toggle-ac-3" name="accordion-2" type="checkbox" />
                        <label for="toggle-ac-3">Services</label>
                        <article class="ac-large">
                          <p>Donec lacinia, odio nec lacinia feugiat, mauris sem condimentum velit, sollicitudin malesuada velit ante quis quam. Fusce non scelerisque augue. Cras volutpat risus a metus fermentum placerat. </p>
                        </article>
                      </div>
                      <div>
                        <input id="toggle-ac-4" name="accordion-2" type="checkbox" />
                        <label for="toggle-ac-4">Contact us</label>
                        <article class="ac-large">
                          <p>Nulla adipiscing arcu sed odio semper lobortis. Curabitur tincidunt nulla metus. Sed faucibus sem vitae libero eleifend ac ullamcorper mauris aliquam.Sed sed odio tellus. Fusce commodo suscipit augue. </p>
                        </article>
                      </div>
                    </section>
                    <!-- DC Toggle 4 End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/toggle.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Pricing Tables &nbsp; <small style="color:#999;">Create stylish comparison tables</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Pricing Tables:1 Start -->
                    <div id="dc_pricingtable01" class="clear">
                      <div class="plan">
                        <h3>Business<span>$59</span></h3>
                        <a class="signup" href="">Sign up</a>
                        <ul>
                          <li><b>10GB</b> Disk Space</li>
                          <li><b>100GB</b> Monthly Bandwidth</li>
                          <li><b>20</b> Email Accounts</li>
                          <li><b>Unlimited</b> subdomains</li>
                        </ul>
                      </div>
                      <div class="plan" id="most-popular">
                        <h3>Professional<span>$29</span></h3>
                        <a class="signup" href="">Sign up</a>
                        <ul>
                          <li><b>5GB</b> Disk Space</li>
                          <li><b>50GB</b> Monthly Bandwidth</li>
                          <li><b>10</b> Email Accounts</li>
                          <li><b>Unlimited</b> subdomains</li>
                        </ul>
                      </div>
                      <div class="plan">
                        <h3>Standard<span>$17</span></h3>
                        <a class="signup" href="">Sign up</a>
                        <ul>
                          <li><b>3GB</b> Disk Space</li>
                          <li><b>25GB</b> Monthly Bandwidth</li>
                          <li><b>5</b> Email Accounts</li>
                          <li><b>Unlimited</b> subdomains</li>
                        </ul>
                      </div>
                      <div class="plan">
                        <h3>Basic<span>$9</span></h3>
                        <a class="signup" href="">Sign up</a>
                        <ul>
                          <li><b>1GB</b> Disk Space</li>
                          <li><b>10GB</b> Monthly Bandwidth</li>
                          <li><b>2</b> Email Accounts</li>
                          <li><b>Unlimited</b> subdomains</li>
                        </ul>
                      </div>
                    </div>
                    <!-- DC Pricing Tables:1 End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <br />
                    <br />
                    
                    <!-- DC Pricing Tables:2 Start -->
                    <div class="dc_pricingtable02 pricing_four"><!-- use pricing_three for 3 columns, pricing_four = 4 columns, pricing_five = 5 columns, pricing_six = 6 columns --> 
                      
                      <!-- Column 1 -->
                      <ul class="pricing_column_first gap">
                        <li class="pricing_header1"></li>
                        <li class="pricing_header2"><span>Choose a Plan</span></li>
                        <li class="odd"> <a class="tooltip" href="#">Disk Storage <span>The amount of disk storage we provide you with every account purchase.</span> </a> </li>
                        <li class="even"> <a class="tooltip" href="#">Bandwidth <span>Amount of data transfer bandwidth provided to each account, per month.</span> </a> </li>
                        <li class="odd"><span>Domain Names</span></li>
                        <li class="even"> <a class="tooltip" href="#">Subdomains <span>Number of subdomain assigned to your account. </a> </li>
                        <li class="odd"><span>Site Builder</span></li>
                        <li class="even"><span>Backups</span></li>
                        <li class="odd"> <a class="tooltip" href="#">CPANEL <span>Web-based control panel system.</span> </a> </li>
                        <li class="even"><span>Email Accounts</span></li>
                        <li class="odd"><span>MySQL Databases</span></li>
                        <li class="pricing_footer"></li>
                      </ul>
                      <div class="pricing_hover_area"> 
                        
                        <!-- Column 2 -->
                        <ul class="pricing_column glass_white">
                          <!-- color options: glass_black, glass_orange, glass_lightblue, glass_blue, glass_green, glass_purple, glass_red, glass_white, glass_aqua, glass_yellow, light_blue, blue, navy, green, yellow, orange, red, maroon, purple, pink, white, paper, silver, grey, black -->
                          <li class="pricing_header1">Starter</li>
                          <li class="pricing_header2">$5 <span>/mo.</span></li>
                          <li class="odd">10GB</li>
                          <li class="even">100GB</li>
                          <li class="odd">1</li>
                          <li class="even">10</li>
                          <li class="odd"><span class="pricing_no"></span></li>
                          <li class="even"><span class="pricing_no"></span></li>
                          <li class="odd"><span class="pricing_yes"></span></li>
                          <li class="even">10</li>
                          <li class="odd">5</li>
                          <li class="pricing_footer"> <a href="#" class="dc_pricing_button grey">Sign Up</a><!-- additional options: small, rounded, large, light_blue, blue, green, red, orange, yellow, pink, purple, grey, black --> 
                          </li>
                        </ul>
                        
                        <!-- Column 3 -->
                        <ul class="pricing_column glass_aqua">
                          <li class="pricing_header1">Basic</li>
                          <li class="pricing_header2">$10 <span>/mo.</span></li>
                          <li class="odd">50GB</li>
                          <li class="even">500GB</li>
                          <li class="odd">10</li>
                          <li class="even">50</li>
                          <li class="odd"><span class="pricing_yes"></span></li>
                          <li class="even"><span class="pricing_yes"></span></li>
                          <li class="odd"><span class="pricing_yes"></span></li>
                          <li class="even">50</li>
                          <li class="odd">10</li>
                          <li class="pricing_footer"><a href="#" class="dc_pricing_button grey">Sign Up</a></li>
                        </ul>
                        
                        <!-- Column 4 -->
                        <ul class="pricing_column glass_black">
                          <li class="pricing_header1">Professional</li>
                          <li class="pricing_header2">$29 <span>/mo.</span></li>
                          <li class="odd">100GB</li>
                          <li class="even">1000GB</li>
                          <li class="odd">Unlimited</li>
                          <li class="even">Unlimited</li>
                          <li class="odd"><span class="pricing_yes"></span></li>
                          <li class="even"><span class="pricing_yes"></span></li>
                          <li class="odd"><span class="pricing_yes"></span></li>
                          <li class="even">Unlimited</li>
                          <li class="odd">50</li>
                          <li class="pricing_footer"><a href="#" class="dc_pricing_button grey">Sign Up</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- DC Pricing Tables:2 End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/pricingtables.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Pagination &nbsp; <small style="color:#999;">Create page numbers on your webpages</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Pagination:A1 Start -->
                    <ul class="dc_pagination dc_paginationA dc_paginationA01">
                      <li><a href="#" class="first">First</a></li>
                      <li><a href="#" class="previous">Previous</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#" class="current">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#" class="next">Next</a></li>
                      <li><a href="#" class="last">Last</a></li>
                    </ul>
                    <!-- DC Pagination:A1 End --> 
                    
                    <!-- DC Pagination:B9 Start -->
                    <ul class="dc_pagination dc_paginationB dc_paginationB09">
                      <li><a href="#" class="first">First</a></li>
                      <li><a href="#" class="previous">Previous</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#" class="current">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#" class="next">Next</a></li>
                      <li><a href="#" class="last">Last</a></li>
                    </ul>
                    <!-- DC Pagination:B9 Start --> 
                    
                    <!-- DC Pagination:B2 Start -->
                    <ul class="dc_pagination dc_paginationB dc_paginationB02">
                      <li><a href="#" class="first">First</a></li>
                      <li><a href="#" class="previous">Previous</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#" class="current">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#" class="next">Next</a></li>
                      <li><a href="#" class="last">Last</a></li>
                    </ul>
                    <!-- DC Pagination:B2 End --> 
                    
                    <!-- DC Pagination:B6 Start -->
                    <ul class="dc_pagination dc_paginationB dc_paginationB06">
                      <li><a href="#" class="first">First</a></li>
                      <li><a href="#" class="previous">Previous</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#" class="current">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#" class="next">Next</a></li>
                      <li><a href="#" class="last">Last</a></li>
                    </ul>
                    <!-- DC Pagination:B6 Start -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/pagination.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Breadcrumbs &nbsp; <small style="color:#999;">Create navigation aids on your webpages</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Breadcrumbs Start -->
                    <ul id="dc_breadcrumb-3">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Products</a></li>
                      <li><a href="#">Mobile Phones</a></li>
                      <li><a href="#">iPhone</a></li>
                      <li>Specs</li>
                    </ul>
                    <!-- DC Breadcrumbs End --> 
                    <br />
                    <br />
                    
                    <!-- DC Breadcrumbs Start -->
                    <ul id="dc_breadcrumb-4">
                      <li><a href="">Home</a></li>
                      <li><a href="">Products</a></li>
                      <li><a href="">Mobile Phones</a></li>
                      <li><a href="">iPhone</a></li>
                      <li><a href="" class="current">Specs</a></li>
                    </ul>
                    <!-- DC Breadcrumbs End --> 
                    <br />
                    <br />
                    
                    <!-- DC Breadcrumbs Start -->
                    <ul id="dc_breadcrumb-7">
                      <li><a href="">Home</a></li>
                      <li><a href="">Products</a></li>
                      <li><a href="">Mobile Phones</a></li>
                      <li><a href="">iPhone</a></li>
                      <li><a href="" class="current">Specs</a></li>
                    </ul>
                    <!-- DC Breadcrumbs End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/breadcrumbs.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Ribbons &nbsp; <small style="color:#999;">Mark your images or content with ribbons</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Ribbons Start -->
                    <div class="dc_ribbon_wrap edge" style="width:80%; height:130px;">
                      <div class="ribbon-wrap left-edge point lblue"><span>Left Edge Marker</span></div>
                      <br />
                      <br />
                      <div align="center"> <big>Add images, <a href="http://www.bing.com">links</a> or text<br />
                        <small>This is a just a [DIV] layer.</small></big> </div>
                    </div>
                    <!-- DC Ribbons End --> 
                    <br />
                    <br />
                    
                    <!-- DC Ribbons Start -->
                    <div class="dc_ribbon_wrap edge" style="width:678px; height:130px;">
                      <div class="ribbon-wrap right-edge point lred"><span>Right Edge Marker</span></div>
                      <img src="http://cdn.pimg.co/p/678x130" width="678" height="130" /> </div>
                    <!-- DC Ribbons End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/ribbons.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Horizontal Carousel &nbsp; <small style="color:#999;">Add horizontal sliding carousels to your webpages</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <script type="text/javascript">
    $(function(){
    $('#bxslides1').bxSlider({
        prev_image: 'http://cdn.dcodes.net/2/carousel_hor/images/btn_arrow_left.jpg',
        next_image: 'http://cdn.dcodes.net/2/carousel_hor/images/btn_arrow_right.jpg',
        wrapper_class: 'bxslides1_wrap',
        margin: 70,
        auto: true,
        auto_controls: true
    });
});
</script>
                    <div id="bxcontent">
                      <div id="bxcontent_inner">
                        <ul id="bxslides1">
                          <li> <img src="http://cdn.pimg.co/s/sak/10/209/140/c" height="140" width="209">
                            <div class="bxcontent">
                              <h3>Integrity</h3>
                              <h4>Inspired by vision</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dictum, justo in feugiat vulputate, ante ante commodo libero, ut dignissim urna est sit amet est. In lacinia ultricies lectus quis tempus.</p>
                            </div>
                            <div class="clear"></div>
                          </li>
                          <li> <img src="http://cdn.pimg.co/s/sak/11/209/140/c" height="140" width="209">
                            <div class="bxcontent">
                              <h3>Relentless</h3>
                              <h4>Pursuit of perfection</h4>
                              <p>Cras facilisis euismod sapien, vitae ornare nunc vulputate ut. In ac nulla quis metus egestas imperdiet ac non lacus. Duis tincidunt, orci a dapibus lobortis, risus magna auctor velit.</p>
                            </div>
                            <div class="clear"></div>
                          </li>
                          <li> <img src="http://cdn.pimg.co/s/sak/12/209/140/c" height="140" width="209">
                            <div class="bxcontent">
                              <h3>Visionary</h3>
                              <h4>Next generation</h4>
                              <p>Integer semper ultrices arcu, et porta dui condimentum vitae. Phasellus et urna ut lectus varius molestie at nec augue. Praesent at imperdiet quam. Ut posuere metus et orci auctor consectetur.</p>
                            </div>
                            <div class="clear"></div>
                          </li>
                          <li> <img src="http://cdn.pimg.co/s/sak/13/209/140/c" height="140" width="209">
                            <div class="bxcontent">
                              <h3>Devotion</h3>
                              <h4>Unparalleled</h4>
                              <p>In facilisis urna quis ante sollicitudin ut consequat lectus dignissim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                            <div class="clear"></div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <br />
                    <br />
                    <br />
                    <a class="dc_awb_large dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/carousel_hor.html" target="_blank">Click to view more H.Carousel Demos »</a><br />
                    <br />
                    <br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Vertical Carousel &nbsp; <small style="color:#999;">Add vertical sliding carousels to your webpages</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <br />
                    <a class="dc_awb_large dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/carousel_ver.html" target="_blank">Click to view Vertical Carousel Demo »</a><br />
                    <br />
                    <br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">CSS Shadows &nbsp; <small style="color:#999;">Create DIV box shadows</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC CSS Shadows Start -->
                    <div class="css_image_shadows">
                      <div class="drop-shadow lifted" style="width:240px;height:70px;">
                        <p>Lifted corners<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow curled" style="width:240px;height:70px;">
                        <p>Curled corners<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow perspective" style="width:240px;height:70px;">
                        <p>Perspective<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow raised" style="width:240px;height:70px;">
                        <p>Raised box<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow curved curved-vt-1" style="width:240px;height:70px;">
                        <p>Single vertical curve<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow curved curved-vt-2" style="width:240px;height:70px;">
                        <p>Vertical curves<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow curved curved-hz-1" style="width:240px;height:70px;">
                        <p>Single horizontal curve<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow curved curved-hz-2" style="width:240px;height:70px;">
                        <p>Horizontal curves<br />
                          <small>Add your content here!</small></p>
                      </div>
                      <div class="drop-shadow lifted rotated">
                        <p><img src="http://cdn.pimg.co/p/200x120" alt="image" width="200" vspace="9" /><br />
                          Rotated [DIV] with image.</p>
                      </div>
                    </div>
                    <!-- DC CSS Shadows End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/css_shadows.html" target="_blank">More options & styles »</a><br />
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
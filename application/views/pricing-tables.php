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
              <h1>Pricing Tables Page<span>Cras sit amet libero eros... </span></h1>
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
              
              <!-- DC Pricing Tables CSS -->
              <link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/pricingtables/css/dc_pricingtables.css" />
              <!-- DC Pricing Tables JS --> 
              <script type="text/javascript" src="http://cdn.dcodes.net/2/pricingtables/js/dc_pricingtables.js"></script> 
              
              <!-- DC Social Icons CSS -->
              <link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/social_icons/dc_social_icons.css" />
              
              <!-- DC Flat Buttons CSS -->
              <link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/flat_buttons/css/dc_flat_buttons.css" />
              <h1 class="gap1">Pricing Tables</h1>
              
              <!-- DC Pricing Tables:1 Start -->
              <div id="dc_pricingtable01" class="clear"> 
                <!-- Column 1 -->
                <div class="plan">
                  <h3>Business<span>$59</span></h3>
                  <ul>
                    <br />
                    <li><b>10GB</b> Disk Space</li>
                    <li><b>100GB</b> Monthly Bandwidth</li>
                    <li><b>20</b> Email Accounts</li>
                    <li><b>Unlimited</b> subdomains</li>
                    <br />
                    <a href="#" class="dc_pricing_button blue">Sign Up</a><!-- additional options: small, rounded, large, light_blue, blue, green, red, orange, yellow, pink, purple, grey, black -->
                  </ul>
                </div>
                <!-- Column 2 (standout) -->
                <div class="plan" id="most-popular">
                  <h3>Professional<span>$29</span></h3>
                  <ul>
                    <br />
                    <li><b>5GB</b> Disk Space</li>
                    <li><b>50GB</b> Monthly Bandwidth</li>
                    <li><b>10</b> Email Accounts</li>
                    <li><b>Unlimited</b> subdomains</li>
                    <br />
                    <a href="#" class="dc_pricing_button blue">Sign Up</a>
                  </ul>
                </div>
                <!-- Column 3 -->
                <div class="plan">
                  <h3>Standard<span>$17</span></h3>
                  <ul>
                    <br />
                    <li><b>3GB</b> Disk Space</li>
                    <li><b>25GB</b> Monthly Bandwidth</li>
                    <li><b>5</b> Email Accounts</li>
                    <li><b>Unlimited</b> subdomains</li>
                    <br />
                    <a href="#" class="dc_pricing_button blue">Sign Up</a>
                  </ul>
                </div>
                <!-- Column 4 -->
                <div class="plan">
                  <h3>Basic<span>$9</span></h3>
                  <ul>
                    <br />
                    <li><b>1GB</b> Disk Space</li>
                    <li><b>10GB</b> Monthly Bandwidth</li>
                    <li><b>2</b> Email Accounts</li>
                    <li><b>Unlimited</b> subdomains</li>
                    <br />
                    <a href="#" class="dc_pricing_button blue">Sign Up</a>
                  </ul>
                </div>
              </div>
              <!-- DC Pricing Tables:1 End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              <br />
              
              <!-- DC Pricing Tables:2 Start -->
              <div class="dc_pricingtable02 pricing_six"><!-- use pricing_three for 3 columns, pricing_four = 4 columns, pricing_five = 5 columns, pricing_six = 6 columns --> 
                
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
                    <li class="pricing_footer"> <a href="#" class="dc_pricing_button black">Sign Up</a><!-- additional options: small, rounded, large, light_blue, blue, green, red, orange, yellow, pink, purple, grey, black --> 
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
                    <li class="pricing_footer"><a href="#" class="dc_pricing_button black">Sign Up</a></li>
                  </ul>
                  
                  <!-- Column 4 -->
                  <ul class="pricing_column glass_yellow">
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
                    <li class="pricing_footer"><a href="#" class="dc_pricing_button black">Sign Up</a></li>
                  </ul>
                  
                  <!-- Column 5 -->
                  <ul class="pricing_column glass_green">
                    <li class="pricing_header1">Business</li>
                    <li class="pricing_header2">$39 <span>/mo.</span></li>
                    <li class="odd">500GB</li>
                    <li class="even">Unlimited</li>
                    <li class="odd">Unlimited</li>
                    <li class="even">Unlimited</li>
                    <li class="odd"><span class="pricing_yes"></span></li>
                    <li class="even"><span class="pricing_yes"></span></li>
                    <li class="odd"><span class="pricing_yes"></span></li>
                    <li class="even">Unlimited</li>
                    <li class="odd">200</li>
                    <li class="pricing_footer"><a href="#" class="dc_pricing_button black">Sign Up</a></li>
                  </ul>
                  <!-- Column 6 -->
                  <ul class="pricing_column glass_black">
                    <li class="pricing_header1">Enterprise</li>
                    <li class="pricing_header2">$39 <span>/mo.</span></li>
                    <li class="odd">500GB</li>
                    <li class="even">Unlimited</li>
                    <li class="odd">Unlimited</li>
                    <li class="even">Unlimited</li>
                    <li class="odd"><span class="pricing_yes"></span></li>
                    <li class="even"><span class="pricing_yes"></span></li>
                    <li class="odd"><span class="pricing_yes"></span></li>
                    <li class="even">Unlimited</li>
                    <li class="odd">200</li>
                    <li class="pricing_footer"><a href="#" class="dc_pricing_button black">Sign Up</a></li>
                  </ul>
                </div>
              </div>
              <!-- DC Pricing Tables:2 End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              <br />
              <br />
              
              <!-- DC Pricing Tables:3 Start -->
              <div class="dc_pricingtable03 dc_pt3_style1">
                <div class="caption_column">
                  <ul>
                    <li class="header_row_1 align_center radius5_topleft"></li>
                    <li class="header_row_2">
                      <h2 class="caption">Choose plan</h2>
                    </li>
                    <li class="row_style_4"><span>Web Space</span></li>
                    <li class="row_style_2"><span>Bandwidth</span></li>
                    <li class="row_style_4"><span>E-mail accounts</span></li>
                    <li class="row_style_2"><span>MySQL databases</span></li>
                    <li class="row_style_4"><span><a href="#" class="tooltip" rel="Web-based control panel system">CPANEL</a></span></li>
                    <li class="row_style_2"><span><a href="#" class="tooltip" rel="24/7 Support via Phone, Email, Web.">24/7 Support</a></span></li>
                    <li class="footer_row"></li>
                  </ul>
                </div>
                <div class="column_1">
                  <ul>
                    <li class="header_row_1 align_center">
                      <h2 class="col1">starter</h2>
                    </li>
                    <li class="header_row_2 align_center">
                      <h1 class="col1">$<span>5</span></h1>
                      <h3 class="col1">per month</h3>
                    </li>
                    <li class="row_style_3 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">10GB</a></span></li>
                    <li class="row_style_1 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">100GB</a></span></li>
                    <li class="row_style_3 align_center"><span><a href="#" class="tooltip" rel="Tooltip info.">1</a></span></li>
                    <li class="row_style_1 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">1</a></span></li>
                    <li class="row_style_3 align_center"><span class="pricing_no"></span></li>
                    <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
                    <li class="footer_row"><a href="" class="sign_up">sign up!</a></li>
                  </ul>
                </div>
                <div class="column_2">
                  <ul>
                    <li class="header_row_1 align_center">
                      <h2 class="col2">basic</h2>
                    </li>
                    <li class="header_row_2 align_center">
                      <h1 class="col2">$<span>10</span></h1>
                      <h3 class="col2">per month</h3>
                    </li>
                    <li class="row_style_4 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">30GB</a></span></li>
                    <li class="row_style_2 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">200GB</a></span></li>
                    <li class="row_style_4 align_center"><span><a href="#" class="tooltip" rel="Tooltip info.">10</a></span></li>
                    <li class="row_style_2 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">10</a></span></li>
                    <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
                    <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
                    <li class="footer_row"><a href="" class="sign_up">sign up!</a></li>
                  </ul>
                </div>
                <div class="column_3">
                  <ul>
                    <li class="header_row_1 align_center">
                      <h2 class="col3">pro</h2>
                    </li>
                    <li class="header_row_2 align_center">
                      <h1 class="col3">$<span>29</span></h1>
                      <h3 class="col3">per month</h3>
                    </li>
                    <li class="row_style_3 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">100GB</a></span></li>
                    <li class="row_style_1 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">500GB</a></span></li>
                    <li class="row_style_3 align_center"><span><a href="#" class="tooltip" rel="Tooltip info.">50</a></span></li>
                    <li class="row_style_1 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">50</a></span></li>
                    <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
                    <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
                    <li class="footer_row"><a href="" class="sign_up">sign up!</a></li>
                  </ul>
                </div>
                <div class="column_4">
                  <ul>
                    <li class="header_row_1 align_center radius5_topright">
                      <h2 class="col4">biz</h2>
                    </li>
                    <li class="header_row_2 align_center">
                      <h1 class="col4">$<span>39</span></h1>
                      <h3 class="col4">per month</h3>
                    </li>
                    <li class="row_style_4 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">Unlimited</a></span></li>
                    <li class="row_style_2 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">1000GB</a></span></li>
                    <li class="row_style_4 align_center"><span><a href="#" class="tooltip" rel="Tooltip info.">Unlimited</a></span></li>
                    <li class="row_style_2 align_center"><span><a href="#" class="tooltip" rel="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">Unlimited</a></span></li>
                    <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
                    <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
                    <li class="footer_row"><a href="" class="sign_up">sign up!</a></li>
                  </ul>
                </div>
              </div>
              <!-- DC Pricing Tables:3 End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              <br />
              <br />
              
              <!-- DC Pricing Tables:5 Start -->
              <div class="dc_pricingtable05">
                <ul class="borderright">
                  <li>
                    <h3>Basic</h3>
                    <span>$4.50/month</span></li>
                  <li class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button grey">Sign Up</a></li>
                </ul>
                <ul class="borderleft borderright">
                  <li>
                    <h3>Advanced</h3>
                    <span>$9.50/month</span></li>
                  <li  class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button grey">Sign Up</a></li>
                </ul>
                <ul class="borderright borderleft">
                  <li>
                    <h3>Premium</h3>
                    <span>$11.50/month</span></li>
                  <li class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button grey">Sign Up</a></li>
                </ul>
                <ul class="borderleft">
                  <li>
                    <h3>Pro</h3>
                    <span>$13.50/month</span></li>
                  <li class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button grey">Sign Up</a></li>
                </ul>
              </div>
              <!-- DC Pricing Tables:5 End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              
              <!-- DC Pricing Tables:6 Start -->
              <div class="dc_pricingtable06">
                <ul class="borderright">
                  <li>
                    <h3>Basic</h3>
                    <span>$4.50/month</span></li>
                  <li class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button blue">Sign Up</a></li>
                </ul>
                <ul class="borderleft borderright">
                  <li>
                    <h3>Advanced</h3>
                    <span>$9.50/month</span></li>
                  <li  class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button red">Sign Up</a></li>
                </ul>
                <ul class="borderright borderleft">
                  <li>
                    <h3>Premium</h3>
                    <span>$11.50/month</span></li>
                  <li class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button green">Sign Up</a></li>
                </ul>
                <ul class="borderleft">
                  <li>
                    <h3>Pro</h3>
                    <span>$13.50/month</span></li>
                  <li class="white">Up to 50 users</li>
                  <li>50 GB storage</li>
                  <li class="white">Unlimited Sets</li>
                  <li>Unlimited Workspaces</li>
                  <li class="white">iPhone App</li>
                  <li>Private URLs</li>
                  <li class="white">Enhanced Security</li>
                  <li><a href="#" class="dc_pricing_button orange">Sign Up</a></li>
                </ul>
              </div>
              <!-- DC Pricing Tables:6 End -->
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
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

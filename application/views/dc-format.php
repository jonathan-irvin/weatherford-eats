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

<!-- DC Page Header CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/headers/css/dc_headers.css" />
<!-- DC Page Header JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/headers/js/dc_headers.js"></script>
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/dropcaps/css/dc_dropcaps.css" />

<!-- DC Text Highlighter CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/highlighter/css/dc_css_highlighter_shortcodes.css" />

<!-- DC Spoiler Codes -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/spoiler_codes/css/dc_spoiler_code.css" />
<script type="text/javascript" src="http://cdn.dcodes.net/2/spoiler_codes/js/dc_spoiler_code.js"></script>

<!-- DC Blockquotes CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/quotes/css/dc_blockquotes_and_pullquotes.css" />

<!-- DC Comment Boxes CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/comment_boxes/css/dc_comment_boxes.css" />

<!-- DC Lists CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/lists/css/dc_lists.css" />

<!-- DC DataGrid CSS -->
<link rel="stylesheet" href="http://cdn.dcodes.net/2/datagrid/css/dc_datagrid.css" />

<!-- DC DataGrid JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/datagrid/js/dc_datagrid.js"></script>

<!-- DC Table Styles I CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/tables1/css/dc_tables1.css" />

<!-- DC Table Styles II CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/tables2/css/dc_tables2.css" />

<!-- DC Image Hover Effects CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/image_hover_effects/css/dc_image_hover_effects.css" />

<!-- DC Image Hover Effects JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/image_hover_effects/js/jquery.adipoli.min.js"></script>
<script type="text/javascript" src="http://cdn.dcodes.net/2/image_hover_effects/js/dc_image_hover_effects.js"></script>

<!-- DC Image Captions CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/image_captions/css/dc_image_captions.css" />
<!-- DC Image Captions JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/image_captions/js/dc_image_captions.js"></script>

<!-- DC Image Frames CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/image_frames/css/dc_image_frames.css" />

<!-- DC Form Beautify CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/form_beautify/css/jqtransform.css" />
<!-- DC Form Beautify JS -->
<script type="text/javascript" src="http://cdn.dcodes.net/2/form_beautify/js/jquery.jqtransform.js"></script>
<!-- DC Form Beautify Settings -->
<script language="javascript">
        $(function(){
            $('form').jqTransform({imgPath:'form_beautify/img/'});
        });
</script>

<!-- DC Divider CSS -->
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/divider/css/dc_divider.css" />

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
              <h1>Format Shortcodes Page<span>Cras sit amet libero eros... </span></h1>
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
              
              <h2>dCodes: Format & Typography</h2>
              Shortcodes: Format / <a href="dc-embed.html" title="Embed Shortcodes">Embed</a> / <a href="dc-organize.html" title="Organize Shortcodes">Organize</a> / <a href="dc-elements.html" title="Element Shortcodes">Elements</a><br />
              <br />
              
              <!-- DC Toggle 1 Start -->
              <div class="dc_toggle_container" style="width:90%"> + <a href="#" class="toggleCollapse" rel="style2">expand all</a><br />
                <br />
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Heading Styles &nbsp; <small style="color:#999;">Standard Page Styles</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <table border=0 cellpadding="8" cellspacing="0">
                      <tr>
                        <td><h1 style="text-align:left;">Heading 1</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac mattis nisl. Nulla cursus justo id eros luctus imperdiet id eget tellus. Nullam sit amet neque elementum nunc sollicitudin facilisis. Aliquam quis quam dui, vitae condimentum quam.</p></td>
                        <td><h2 style="text-align:left;">Heading 2</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac mattis nisl. Nulla cursus justo id eros luctus imperdiet id eget tellus. Nullam sit amet neque elementum nunc sollicitudin facilisis. Aliquam quis quam dui, vitae condimentum quam.</p></td>
                      </tr>
                      <tr>
                        <td><h3 style="text-align:left;">Heading 3</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac mattis nisl. Nulla cursus justo id eros luctus imperdiet id eget tellus. Nullam sit amet neque elementum nunc sollicitudin facilisis. Aliquam quis quam dui, vitae condimentum quam.</p></td>
                        <td><h4 style="text-align:left;">Heading 4</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac mattis nisl. Nulla cursus justo id eros luctus imperdiet id eget tellus. Nullam sit amet neque elementum nunc sollicitudin facilisis. Aliquam quis quam dui, vitae condimentum quam.</p></td>
                      </tr>
                    </table>
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">500+ Google Web Fonts &nbsp; <small style="color:#999;">Change the look of your page by embedding a new font face in seconds!</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=PT Sans Narrow" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=PT Sans" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Dancing Script" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Cabin Sketch" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Cardo" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Walter Turncoat" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Arimo" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Droid Sans" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Neuton" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Geo" rel="stylesheet" type="text/css">
                    <table border="0" cellpadding="12" cellspacing="3" style="border:0px dotted #eee;">
                      <tr>
                        <td><span style="font-family:'Lobster';font-size:24px;text-decoration:none;" title="Font name: Lobster">Lobster</span><br /></td>
                        <td><span style="font-family:'PT Sans Narrow';font-size:24px;text-decoration:none;" title="Font name: PT Sans Narrow">PT Sans Narrow</span><br /></td>
                        <td><span style="font-family:'PT Sans';font-size:24px;text-decoration:none;" title="Font name: PT Sans">PT Sans</span><br /></td>
                        <td><span style="font-family:'Oswald';font-size:24px;text-decoration:none;" title="Font name: Oswald">Oswald</span><br /></td>
                      </tr>
                      <tr>
                        <td><span style="font-family:'Merriweather';font-size:24px;text-decoration:none;" title="Font name: Merriweather">Merriweather</span><br /></td>
                        <td><span style="font-family:'Dancing Script';font-size:24px;text-decoration:none;" title="Font name: Dancing Script">Dancing Script</span><br /></td>
                        <td><span style="font-family:'Cabin Sketch';font-size:24px;text-decoration:none;" title="Font name: Cabin Sketch">Cabin Sketch</span><br /></td>
                        <td><span style="font-family:'Ubuntu';font-size:24px;text-decoration:none;" title="Font name: Ubuntu">Ubuntu</span><br /></td>
                      </tr>
                      <tr>
                        <td><span style="font-family:'Cardo';font-size:24px;text-decoration:none;" title="Font name: Cardo">Cardo</span><br /></td>
                        <td><span style="font-family:'Walter Turncoat';font-size:24px;text-decoration:none;" title="Font name: Walter Turncoat">Walter Turncoat</span><br /></td>
                        <td><span style="font-family:'Arimo';font-size:24px;text-decoration:none;" title="Font name: Arimo">Arimo</span><br /></td>
                        <td><span style="font-family:'Droid Sans';font-size:24px;text-decoration:none;" title="Font name: Droid Sans">Droid Sans</span><br /></td>
                      </tr>
                      <tr>
                        <td><span style="font-family:'Lato';font-size:24px;text-decoration:none;" title="Font name: Lato">Lato</span><br /></td>
                        <td><span style="font-family:'Cuprum';font-size:24px;text-decoration:none;" title="Font name: Cuprum">Cuprum</span><br /></td>
                        <td><span style="font-family:'Amaranth';font-size:24px;text-decoration:none;" title="Font name: Amaranth">Amaranth</span><br /></td>
                        <td><span style="font-family:'Neuton';font-size:24px;text-decoration:none;" title="Font name: Neuton">Neuton</span><br /></td>
                      </tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/fontstyler.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Page Headers &nbsp; <small style="color:#999;">Spice up your pages with these fancy title headers</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Page Header Start -->
                    <div class="dc_gradient1">
                      <h1><span></span>CSS Gradient Text</h1>
                    </div>
                    <!-- DC Page Header End --> 
                    
                    <!-- DC Page Header Start -->
                    <div class="dc_gradient2">
                      <h1><a href="#"><span></span>Black Glossy Link</a></h1>
                    </div>
                    <!-- DC Page Header End --> 
                    
                    <!-- DC Page Header Start -->
                    <div class="dc_gradient3">
                      <h1><span></span>Dark on Light Sample</h1>
                    </div>
                    <!-- DC Page Header End --> 
                    
                    <!-- DC Page Header Start -->
                    <div class="dc_gradient4">
                      <h1><span></span>Metallic shine</h1>
                      <h2>The next evolution</h2>
                    </div>
                    <!-- DC Page Header End --> 
                    
                    <!-- DC Page Header Start -->
                    <div class="dc_gradient6">
                      <h1><span></span>Vertical Stripe</h1>
                    </div>
                    <!-- DC Page Header End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/headers.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Dropcaps &nbsp; <small style="color:#999;">Over 20 colors and 4 types of dropcap styles to choose from</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <p class="one_fourth"><span class="dc_dropcap silver_dropcaps">1</span><strong>Dropcap #1</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap2 silver_text">2</span><strong>Dropcap #2</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap3 silver_dropcaps">3</span><strong>Dropcap #3</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth last"><span class="dc_dropcap4 silver">4</span><strong>Dropcap #4</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap steelblue_dropcaps">1</span><strong>Dropcap #1</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap2 steelblue_text">2</span><strong>Dropcap #2</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap3 steelblue_dropcaps">3</span><strong>Dropcap #3</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth last"><span class="dc_dropcap4 steelblue">4</span><strong>Dropcap #4</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap black_dropcaps">1</span><strong>Dropcap #1</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap2 black_text">2</span><strong>Dropcap #2</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap3 black_dropcaps">3</span><strong>Dropcap #3</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth last"><span class="dc_dropcap4 black">4</span><strong>Dropcap #4</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap red_dropcaps">1</span><strong>Dropcap #1</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap2 red_text">2</span><strong>Dropcap #2</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap3 red_dropcaps">3</span><strong>Dropcap #3</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth last"><span class="dc_dropcap4 red">4</span><strong>Dropcap #4</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap yellow_dropcaps">1</span><strong>Dropcap #1</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap2 yellow_text">2</span><strong>Dropcap #2</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap3 yellow_dropcaps">3</span><strong>Dropcap #3</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth last"><span class="dc_dropcap4 yellow">4</span><strong>Dropcap #4</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap green_dropcaps">1</span><strong>Dropcap #1</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap2 green_text">2</span><strong>Dropcap #2</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap3 green_dropcaps">3</span><strong>Dropcap #3</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth last"><span class="dc_dropcap4 green">4</span><strong>Dropcap #4</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap olive_dropcaps">1</span><strong>Dropcap #1</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap2 olive_text">2</span><strong>Dropcap #2</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth"><span class="dc_dropcap3 olive_dropcaps">3</span><strong>Dropcap #3</strong><br />
                      Template ShortCodes</p>
                    <p class="one_fourth last"><span class="dc_dropcap4 olive">4</span><strong>Dropcap #4</strong><br />
                      Template ShortCodes</p>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/dropcaps.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Text Highlighter &nbsp; <small style="color:#999;">Over 20 colors and 2 types of highlighting styles to choose from</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Text Highlighter Start -->
                    <p>Suspendisse potenti <span class="dc_highlight silver">sample text example of silver dc_highlight</span> purus varius nibh. <br />
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit and <span class="dc_highlight2 silver_text">another sample text example of silver dc_highlight2</span> quis nisl mauris. </p>
                    
                    <!-- DC Text Highlighter End --> 
                    
                    <!-- DC Text Highlighter Start -->
                    <p>Suspendisse potenti <span class="dc_highlight steelblue">sample text example of steelblue dc_highlight</span> purus varius nibh. <br />
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit and <span class="dc_highlight2 steelblue_text">another sample text example of steelblue dc_highlight2</span> quis nisl mauris. </p>
                    <!-- DC Text Highlighter End --> 
                    
                    <!-- DC Text Highlighter Start -->
                    <p>Suspendisse potenti <span class="dc_highlight black">sample text example of black dc_highlight</span> purus varius nibh. <br />
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit and <span class="dc_highlight2 black_text">another sample text example of black dc_highlight2</span> quis nisl mauris. </p>
                    <!-- DC Text Highlighter End --> 
                    
                    <!-- DC Text Highlighter Start -->
                    <p>Suspendisse potenti <span class="dc_highlight orange">sample text example of orange dc_highlight</span> purus varius nibh. <br />
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit and <span class="dc_highlight2 orange_text">another sample text example of orange dc_highlight2</span> quis nisl mauris. </p>
                    <!-- DC Text Highlighter End --> 
                    
                    <!-- DC Text Highlighter Start -->
                    <p>Suspendisse potenti <span class="dc_highlight red">sample text example of red dc_highlight</span> purus varius nibh. <br />
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit and <span class="dc_highlight2 red_text">another sample text example of red dc_highlight2</span> quis nisl mauris. </p>
                    <!-- DC Text Highlighter End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/dropcaps.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Spoiler Codes &nbsp; <small style="color:#999;">Create movie/data spoilers easily!</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Spoiler Codes Start -->
                    <p>James Cameron's epic motion picture, Avatar grossed over <span class="dc_spoiler">$2.8 billion dollars worldwide!</span></p>
                    <p>The Mars Science Laboratory Rover touched down on Mars: <span class="dc_spoiler">August 6.</span></p>
                    
                    <!-- DC Spoiler Codes End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/highlighter.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Pullquotes &nbsp; <small style="color:#999;">Create pullquotes in seconds</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Pullquotes 1a:Right Start --> 
                    <span class="dc_pullquote quotes alignright">This is pullquote 1a. Nam sit amet sem liberi nec gravida vehicula a nisl</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat vulputate turpis, non sodales lectus fringilla at. Duis mi dolor, feugiat et porttitor vel, rhoncus sed justo. Pellentesque non lorem a lorem lacinia pharetra. Vivamus lobortis enim ut sapien porta vel vulputate arcu tempor. 
                    <!-- DC Pullquotes:Right End --> 
                    
                    <!-- DC Pullquotes 2b:Left Start --> 
                    <span class="dc_pullquote2 alignleft">This is pullquote 2b. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas mattis tortor, vel vulputate eros porta quis.</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat vulputate turpis, non sodales lectus fringilla at. Duis mi dolor, feugiat et porttitor vel, rhoncus sed justo. Pellentesque non lorem a lorem lacinia pharetra. Vivamus lobortis enim ut sapien porta vel vulputate arcu tempor. 
                    <!-- DC Pullquotes:Left End --> 
                    
                    <!-- DC Pullquotes 3c:Center Start --> 
                    <span class="dc_pullquote3 quotes aligncenter">This is pullquote 3c. Nam sit amet sem liberi nec gravida vehicula a nisl. Nunc iaculis sem a suscipit dui.</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat vulputate turpis, non sodales lectus fringilla at. Duis mi dolor, feugiat et porttitor vel, rhoncus sed justo. Pellentesque non lorem a lorem lacinia pharetra. Vivamus lobortis enim ut sapien porta vel vulputate arcu tempor. 
                    <!-- DC Pullquotes:Center End --> 
                    
                    <!-- DC Pullquotes 4a:Right Start --> 
                    <span class="dc_pullquote4 quotes alignright">This is pullquote 4a. Nam sit amet sem liberi nec gravida vehicula a nisl</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat vulputate turpis, non sodales lectus fringilla at. Duis mi dolor, feugiat et porttitor vel, rhoncus sed justo. Pellentesque non lorem a lorem lacinia pharetra. Vivamus lobortis enim ut sapien porta vel vulputate arcu tempor. 
                    <!-- DC Pullquotes:Right End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/pullquotes.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Blockquotes &nbsp; <small style="color:#999;">Create scroller/static blockquotes in seconds</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Quotes Rotator JS --> 
                    <script src="dcodes/quotes/js/jquery.quovolver.js"></script> 
                    <!-- DC Quotes Rotator Settings --> 
                    <script>
    $(document).ready(function() {
         
        // Example One
        $('#dc_quotes-rotator-container1 .dc_quotes-rotator1').quovolver({
            transitionSpeed : 300, // transition speed
            autoPlaySpeed : 2300, // duration before each transition (default 2300 = 2.3 seconds)
            autoPlay : true, // auto play quotes rotator
            equalHeight : false // disable auto resizing of panels
        });
         
    });
    </script> 
                    <!-- DC Quotes Rotator Start -->
                    <div id="dc_quotes-rotator-container1" style="width: 90%;">
                      <div class="dc_quotes-rotator1">
                        <blockquote class="dc_silver_blockquotes">
                          <p>"I've been with you for almost a year. So far I am very pleased with your service!"</p>
                          <p>- Tom S.</p>
                        </blockquote>
                        <blockquote class="dc_silver_blockquotes">
                          <p>"I've been with a few different companies in my time and I must say you have exceeded my expectations."</p>
                          <p>- John F.</p>
                        </blockquote>
                        <blockquote class="dc_silver_blockquotes">
                          <p>"Great prices, awesome customer service and solid features. Highly recommended! A+"</p>
                          <p>- George D.</p>
                        </blockquote>
                        <blockquote class="dc_silver_blockquotes">
                          <p>"I'm very impressed with the knowledge of the staff and your fast response times!"</p>
                          <p>- William B.</p>
                        </blockquote>
                      </div>
                    </div>
                    <!-- DC Quotes Rotator End --> 
                    
                    <!-- DC Blockquotes Start -->
                    <blockquote class="dc_green_blockquotes">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas mattis tortor, vel vulputate eros porta quis. Nulla non nulla sapien.</p>
                      <p> <cite>- Joe Blogs, <a href="http://www.dreamtemplate.com">DreamTemplate.com</a></cite> </p>
                    </blockquote>
                    <!-- DC Blockquotes End --> 
                    
                    <!-- DC Blockquotes Start -->
                    <blockquote class="dc_steelblue_blockquotes">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas mattis tortor, vel vulputate eros porta quis. Nulla non nulla sapien.</p>
                      <p> <cite>- Joe Blogs, <a href="http://www.dreamtemplate.com">DreamTemplate.com</a></cite> </p>
                    </blockquote>
                    <!-- DC Blockquotes End --> 
                    
                    <!-- DC Blockquotes Start -->
                    <blockquote class="dc_hotpink_blockquotes">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas mattis tortor, vel vulputate eros porta quis. Nulla non nulla sapien.</p>
                      <p> <cite>- Joe Blogs, <a href="http://www.dreamtemplate.com">DreamTemplate.com</a></cite> </p>
                    </blockquote>
                    <!-- DC Blockquotes End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/blockquotes.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Comment Boxes/Testimonials &nbsp; <small style="color:#999;">Create comment boxes & testimonials</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <table border=0 cellpadding="8">
                      <tr>
                        <td><!-- DC Comment Boxes Start -->
                          
                          <div class="dc_clean_comment">
                            <div class="avatar_box"> <img src="http://cdn.pimg.co/p/52x52/cccccc/000/pic.jpg" alt="Avatar" class="avatar" />
                              <p class="username">Sally</p>
                            </div>
                            <div class="comment_box fr">
                              <p class="comment_paragraph" contenteditable="true">This field is completely editable. To disable this feature remove the "contenteditable=true" tag from this code.</p>
                              <a href="#" class="reply">Reply</a> <span class="date">1st January 2020</span> </div>
                            <div class="dc_clear"></div>
                          </div>
                          <div class="dc_clean_comment">
                            <div class="avatar_box"> <img src="http://cdn.pimg.co/p/52x52/cccccc/000/pic.jpg" alt="Avatar" class="avatar" />
                              <p class="username">Lisa</p>
                            </div>
                            <div class="comment_box fr">
                              <p class="comment_paragraph" contenteditable="false">This field is not editable. To enable this feature add the "contenteditable=true" tag to this code.</p>
                              <a href="#" class="reply">Reply</a> <span class="date">1st January 2020</span> </div>
                            <div class="dc_clear"></div>
                          </div>
                          
                          <!-- DC Comment Boxes End --></td>
                      <tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/comment_boxes.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Lists &nbsp; <small style="color:#999;">Create fancy ordered lists with icon bullets</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <table>
                      <tr>
                        <td><!-- DC Lists Start -->
                          
                          <ul class="dc_list ">
                            <li class="dc_li_arrow">Arrow list</li>
                            <li class="dc_li_comment">Comment list</li>
                            <li class="dc_li_bullet">Bullet list (default)</li>
                            <li class="dc_li_minus">Minus list</li>
                            <li class="dc_li_check">Check list</li>
                            <li class="dc_li_plus">Plus list</li>
                            <li class="dc_li_carrow">Circled arrow list</li>
                            <li class="dc_li_star">Star list</li>
                          </ul>
                          
                          <!-- DC Lists End --></td>
                        <td><!-- DC Lists Start -->
                          
                          <ul class="dc_list dc_li_788794">
                            <li class="dc_li_arrow">Arrow list</li>
                            <li class="dc_li_comment">Comment list</li>
                            <li class="dc_li_bullet">Bullet list (default)</li>
                            <li class="dc_li_minus">Minus list</li>
                            <li class="dc_li_check">Check list</li>
                            <li class="dc_li_plus">Plus list</li>
                            <li class="dc_li_carrow">Circled arrow list</li>
                            <li class="dc_li_star">Star list</li>
                          </ul>
                          
                          <!-- DC Lists End --></td>
                        <td><!-- DC Lists Start -->
                          
                          <ul class="dc_list dc_li_008899">
                            <li class="dc_li_arrow">Arrow list</li>
                            <li class="dc_li_comment">Comment list</li>
                            <li class="dc_li_bullet">Bullet list (default)</li>
                            <li class="dc_li_minus">Minus list</li>
                            <li class="dc_li_check">Check list</li>
                            <li class="dc_li_plus">Plus list</li>
                            <li class="dc_li_carrow">Circled arrow list</li>
                            <li class="dc_li_star">Star list</li>
                          </ul>
                          
                          <!-- DC Lists End --></td>
                        <td><!-- DC Lists Start -->
                          
                          <ul class="dc_list dc_li_74941f">
                            <li class="dc_li_arrow">Arrow list</li>
                            <li class="dc_li_comment">Comment list</li>
                            <li class="dc_li_bullet">Bullet list (default)</li>
                            <li class="dc_li_minus">Minus list</li>
                            <li class="dc_li_check">Check list</li>
                            <li class="dc_li_plus">Plus list</li>
                            <li class="dc_li_carrow">Circled arrow list</li>
                            <li class="dc_li_star">Star list</li>
                          </ul>
                          
                          <!-- DC Lists End --></td>
                      </tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/lists.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">DataGrid / Fixed Table Header &nbsp; <small style="color:#999;">Organize data in a sortable data grid</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC DataGrid Start -->
                    <div id="tsort-tablewrapper" style="width:90%;">
                      <div id="tsort-tableheader">
                        <div class="tsort-search">
                          <select id="tsort-columns" onchange="sorter.search('query')">
                          </select>
                          <input type="text" id="query" onkeyup="sorter.search('query')" />
                        </div>
                        <span class="tsort-details">
                        <div>Records <span id="tsort-startrecord"></span>-<span id="tsort-endrecord"></span> of <span id="tsort-totalrecords"></span></div>
                        <div><a href="javascript:sorter.reset()">reset</a></div>
                        </span> </div>
                      <table cellpadding="0" cellspacing="0" border="0" id="tsctablesort1" class="tinytable">
                        <thead>
                          <tr>
                            <th class="nosort"><h5>ID</h5></th>
                            <th><h5>Name</h5></th>
                            <th><h5>Phone</h5></th>
                            <th><h5>Birthdate</h5></th>
                            <th><h5>Last Access</h5></th>
                            <th><h5>Rating</h5></th>
                            <th><h5>Done</h5></th>
                            <th><h5>Salary</h5></th>
                            <th><h5>Score</h5></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>John Hart</td>
                            <td>(627) 536-4760</td>
                            <td>12/02/1962</td>
                            <td>March 26, 2012</td>
                            <td>-7</td>
                            <td>7%</td>
                            <td>$73,229</td>
                            <td>6.9</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Jaquelyn Pace</td>
                            <td>(921) 943-5780</td>
                            <td>06/03/1957</td>
                            <td>October 20, 2010</td>
                            <td>-7</td>
                            <td>33%</td>
                            <td>$130,752</td>
                            <td>4.9</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Lois Pickett</td>
                            <td>(835) 361-5993</td>
                            <td>10/15/1983</td>
                            <td>June 01, 1999</td>
                            <td>4</td>
                            <td>44%</td>
                            <td>$48,684</td>
                            <td>5.5</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Keane Raymond</td>
                            <td>(605) 803-1561</td>
                            <td>07/30/1982</td>
                            <td>July 24, 1996</td>
                            <td>5</td>
                            <td>20%</td>
                            <td>$7,023</td>
                            <td>9.5</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Porter Thomas</td>
                            <td>(666) 569-9894</td>
                            <td>09/27/1986</td>
                            <td>December 05, 2007</td>
                            <td>1</td>
                            <td>66%</td>
                            <td>$69,875</td>
                            <td>0.9</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Imani Murphy</td>
                            <td>(771) 294-6690</td>
                            <td>10/23/1970</td>
                            <td>December 08, 1996</td>
                            <td>-1</td>
                            <td>30%</td>
                            <td>$113,763</td>
                            <td>4.9</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>Zachery Guthrie</td>
                            <td>(851) 784-4129</td>
                            <td>12/22/1972</td>
                            <td>September 20, 2002</td>
                            <td>-5</td>
                            <td>24%</td>
                            <td>$130,248</td>
                            <td>6.9</td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>Harper Bowen</td>
                            <td>(810) 652-6704</td>
                            <td>10/26/1973</td>
                            <td>May 29, 2011</td>
                            <td>5</td>
                            <td>49%</td>
                            <td>$73,197</td>
                            <td>4.5</td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Caldwell Larson</td>
                            <td>(850) 562-3177</td>
                            <td>07/20/1985</td>
                            <td>June 15, 2012</td>
                            <td>-3</td>
                            <td>81%</td>
                            <td>$63,736</td>
                            <td>7.5</td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Baker Osborn</td>
                            <td>(378) 371-0559</td>
                            <td>03/29/1970</td>
                            <td>July 23, 2011</td>
                            <td>-7</td>
                            <td>61%</td>
                            <td>$2,868</td>
                            <td>0.1</td>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Yael Owens</td>
                            <td>(465) 520-1801</td>
                            <td>08/10/1963</td>
                            <td>April 09, 1997</td>
                            <td>10</td>
                            <td>85%</td>
                            <td>$126,469</td>
                            <td>8.9</td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>Fletcher Briggs</td>
                            <td>(992) 962-9419</td>
                            <td>08/12/1971</td>
                            <td>December 12, 2006</td>
                            <td>7</td>
                            <td>23%</td>
                            <td>$142,448</td>
                            <td>8.9</td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td>Maggy Murphy</td>
                            <td>(585) 210-0390</td>
                            <td>07/11/1968</td>
                            <td>April 02, 2007</td>
                            <td>9</td>
                            <td>31%</td>
                            <td>$40,267</td>
                            <td>6.9</td>
                          </tr>
                          <tr>
                            <td>14</td>
                            <td>Maggie Blake</td>
                            <td>(489) 101-5447</td>
                            <td>04/11/1970</td>
                            <td>May 24, 2008</td>
                            <td>-2</td>
                            <td>32%</td>
                            <td>$99,686</td>
                            <td>7.9</td>
                          </tr>
                          <tr>
                            <td>15</td>
                            <td>Ginger Bell</td>
                            <td>(934) 692-7294</td>
                            <td>06/10/1957</td>
                            <td>April 13, 2003</td>
                            <td>-10</td>
                            <td>74%</td>
                            <td>$112,997</td>
                            <td>4.5</td>
                          </tr>
                        </tbody>
                      </table>
                      <div id="tsort-tablefooter">
                        <div id="tsort-tablenav">
                          <div> <img src="dcodes/datagrid/images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" /> <img src="dcodes/datagrid/images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" /> <img src="dcodes/datagrid/images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" /> <img src="dcodes/datagrid/images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" /> </div>
                          <div>
                            <select id="tsort-pagedropdown">
                            </select>
                          </div>
                          <div> <a href="javascript:sorter.showall()">view all</a> </div>
                        </div>
                        <div id="tsort-tablelocation">
                          <div>
                            <select onchange="sorter.size(this.value)">
                              <option value="5">5</option>
                              <option value="10" selected="selected">10</option>
                              <option value="20">20</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select>
                            <span>Entries Per Page</span> </div>
                          <div class="tsort-page">Page <span id="tsort-currentpage"></span> of <span id="tsort-totalpages"></span></div>
                        </div>
                      </div>
                    </div>
                    <!-- DC DataGrid Settings --> 
                    <script type="text/javascript">
    var sorter = new TINY.table.sorter('sorter','tsctablesort1',{
        headclass:'head',
        ascclass:'asc',
        descclass:'desc',
        evenclass:'tsort-evenrow',
        oddclass:'tsort-oddrow',
        evenselclass:'tsort-evenselected',
        oddselclass:'tsort-oddselected',
        paginate:true, // pagination (true,false)
        size:10, // show 10 results per page
        colddid:'tsort-columns',
        currentid:'tsort-currentpage',
        totalid:'tsort-totalpages',
        startingrecid:'tsort-startrecord',
        endingrecid:'tsort-endrecord',
        totalrecid:'tsort-totalrecords',
        hoverid:'tsort-selectedrow',
        pageddid:'tsort-pagedropdown',
        navid:'tsort-tablenav',
        sortcolumn:1, // sort column 1
        sortdir:1, // sort direction
        sum:[8], // create totalsum for column 8
        avg:[6,7,8,9], // create averages for column 6,7,8,9
        columns:[{index:6, format:'%', decimals:1},{index:7, format:'$', decimals:0}], // classify for proper sorting
        init:true // activate datagrid (true,false)
    });
  </script> 
                    <!-- DC DataGrid End -->
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <br />
                    <br />
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/datagrid.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Tables Styles I &nbsp; <small style="color:#999;">Stylish table styles - various colors</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Table Styles I:3 Start -->
                    <table class="dc_table_s3" summary="Sample Table" style="width:80%;">
                      <caption>
                      Table 3: Sample Table
                      </caption>
                      <thead>
                        <tr>
                          <th scope="col">Structure</th>
                          <th scope="col">Country</th>
                          <th scope="col">City</th>
                          <th scope="col">Height</th>
                          <th scope="col">Built</th>
                          <th scope="col">Rank</th>
                          <th scope="col">...</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th scope="row">Total</th>
                          <td colspan="7">4 buildings</td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr >
                          <th scope="row">Burj Khalifa</th>
                          <td>UAE</td>
                          <td>Dubai</td>
                          <td>829m</td>
                          <td>2010</td>
                          <td>1</td>
                          <td><a href="#">details</a></td>
                        </tr>
                        <tr class="odd">
                          <th scope="row">Clock Tower Hotel</th>
                          <td>Saudi Arabia</td>
                          <td>Mecca</td>
                          <td>601m</td>
                          <td>2012</td>
                          <td>2</td>
                          <td><a href="#">details</a></td>
                        </tr>
                        <tr >
                          <th scope="row">Taipei 101</th>
                          <td>Taiwan</td>
                          <td>Taipei</td>
                          <td>509m</td>
                          <td>2004</td>
                          <td>3</td>
                          <td><a href="#">details</a></td>
                        </tr>
                        <tr class="odd">
                          <th scope="row">Financial Center</th>
                          <td>China</td>
                          <td>Shanghai</td>
                          <td>492m</td>
                          <td>2008</td>
                          <td>4</td>
                          <td><a href="#">details</a></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- DC Table Styles I:3 End --> 
                    
                    <br />
                    <br />
                    
                    <!-- DC Table Styles I:13 Start -->
                    <table class="dc_table_s13" summary="Sample Table" style="width:80%;">
                      <caption>
                      Table 13: Sample Table
                      </caption>
                      <thead>
                        <tr>
                          <th scope="col">Structure</th>
                          <th scope="col">Country</th>
                          <th scope="col">City</th>
                          <th scope="col">Height</th>
                          <th scope="col">Built</th>
                          <th scope="col">Rank</th>
                          <th scope="col">...</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th scope="row">Total</th>
                          <td colspan="7">4 buildings</td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr >
                          <th scope="row">Burj Khalifa</th>
                          <td>UAE</td>
                          <td>Dubai</td>
                          <td>829m</td>
                          <td>2010</td>
                          <td>1</td>
                          <td><a href="#">details</a></td>
                        </tr>
                        <tr class="odd">
                          <th scope="row">Clock Tower Hotel</th>
                          <td>Saudi Arabia</td>
                          <td>Mecca</td>
                          <td>601m</td>
                          <td>2012</td>
                          <td>2</td>
                          <td><a href="#">details</a></td>
                        </tr>
                        <tr >
                          <th scope="row">Taipei 101</th>
                          <td>Taiwan</td>
                          <td>Taipei</td>
                          <td>509m</td>
                          <td>2004</td>
                          <td>3</td>
                          <td><a href="#">details</a></td>
                        </tr>
                        <tr class="odd">
                          <th scope="row">Financial Center</th>
                          <td>China</td>
                          <td>Shanghai</td>
                          <td>492m</td>
                          <td>2008</td>
                          <td>4</td>
                          <td><a href="#">details</a></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- DC Table Styles I:13 End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/tables1.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Table Styles II &nbsp; <small style="color:#999;">Stylish table styles - grey tones</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Table Styles II:Gradient Settings --> 
                    <script type="text/javascript">
 $(function() {
        /* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
        /* For cell text alignment */
        $("table td:first-child, table th:first-child").addClass("first");
        /* For removing the last border */
        $("table td:last-child, table th:last-child").addClass("last");
});
</script> 
                    <!-- DC Table Styles II:Gradient Start -->
                    <table class="dc_tables2_0" cellspacing="0" summary="DT features" style="width:60%;">
                      <tr>
                        <th>Features</th>
                        <th>(dt)</th>
                        <th>Others</th>
                      </tr>
                      <tr>
                        <td>Number of Designs</td>
                        <td>7,000</td>
                        <td>Single Buy</td>
                      </tr>
                      <tr>
                        <td>XHTML Slicing</td>
                        <td>Yes</td>
                        <td>Yes</td>
                      </tr>
                      <tr>
                        <td>Number of Shortcodes</td>
                        <td>1500</td>
                        <td>40</td>
                      </tr>
                      <tr>
                        <td>Sliders</td>
                        <td>20</td>
                        <td>3</td>
                      </tr>
                    </table>
                    <!-- DC Table Styles II:Gradient End --> 
                    
                    <br />
                    <br />
                    
                    <!-- DC Table Styles II:4 Start -->
                    <table class="dc_tables2_4" summary="Employee Pay Sheet" style="width:60%;">
                      <thead>
                        <tr>
                          <th scope="col">Employee</th>
                          <th scope="col">Salary</th>
                          <th scope="col">Bonus</th>
                          <th scope="col">Supervisor</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John D. Wells</td>
                          <td>$300</td>
                          <td>$50</td>
                          <td>Bob</td>
                        </tr>
                        <tr>
                          <td>Fred Max</td>
                          <td>$150</td>
                          <td>-</td>
                          <td>Annie</td>
                        </tr>
                        <tr>
                          <td>Sam Cook</td>
                          <td>$200</td>
                          <td>$35</td>
                          <td>Andy</td>
                        </tr>
                        <tr>
                          <td>Tom H. Williams</td>
                          <td>$175</td>
                          <td>$25</td>
                          <td>Annie</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- DC Table Styles II:4 End --> 
                    
                    <br />
                    <br />
                    
                    <!-- DC Table Styles II:5 Start -->
                    <table class="dc_tables2_5" summary="Top Movies" style="width:60%;">
                      <thead>
                        <tr>
                          <th scope="col">Comedy</th>
                          <th scope="col">Adventure</th>
                          <th scope="col">Action</th>
                          <th scope="col">Children</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Scary Movie</td>
                          <td>Indiana Jones</td>
                          <td>Inception</td>
                          <td>Wall-E</td>
                        </tr>
                        <tr>
                          <td>Epic Movie</td>
                          <td>Star Wars</td>
                          <td>The Avengers</td>
                          <td>Madagascar</td>
                        </tr>
                        <tr>
                          <td>Spartan</td>
                          <td>LOTR</td>
                          <td>Die Hard</td>
                          <td>Finding Nemo</td>
                        </tr>
                        <tr>
                          <td>Dr. Dolittle</td>
                          <td>John Carter</td>
                          <td>Prometheus</td>
                          <td>A Bug's Life</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- DC Table Styles II:5 End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/tables2.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Image Hover Effects &nbsp; <small style="color:#999;">Add hover effects to your images</small></a></div>
                  <div class="dc_toggle_box"><br />
                    <table cellpadding="2" cellspacing="0">
                      <tr>
                        <td><!-- zoom hover --> 
                          <a href="#" class="dc_zoom_css"> <span class="roll_css1"></span> <img src="http://cdn.pimg.co/s/sakv/1/210x140/t/pic.jpg" border="0" /> </a></td>
                        <td><!-- plus circle hover --> 
                          <a href="#" class="dc_zoom_css"> <span class="roll_css2"></span> <img src="http://cdn.pimg.co/s/sakv/2/210x140/t/pic.jpg" border="0" /> </a></td>
                        <td><!-- plus hover --> 
                          <a href="#" class="dc_zoom_css"> <span class="roll_css3"></span> <img src="http://cdn.pimg.co/s/sakv/3/210x140/t/pic.jpg" border="0" /> </a></td>
                      </tr>
                    </table>
                    <table cellpadding="2" cellspacing="0">
                      <tr>
                        <td><a href="#" class="dc_zoom_css"> <span class="roll_css1_light" ></span> <img src="http://cdn.pimg.co/s/sakv/1/210x140/t/pic.jpg" alt="" border="0" /> </a></td>
                        <td><a href="#" class="dc_zoom_css"> <span class="roll_css2_light" ></span> <img src="http://cdn.pimg.co/s/sakv/2/210x140/t/pic.jpg" alt="" border="0" /> </a></td>
                        <td><a href="#" class="dc_zoom_css"> <span class="roll_css3_light" ></span> <img src="http://cdn.pimg.co/s/sakv/3/210x140/t/pic.jpg" alt="" border="0" /> </a></td>
                      </tr>
                    </table>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/image_hover_effects.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Image Captions &nbsp; <small style="color:#999;">Add captions to your images </small></a></div>
                  <div class="dc_toggle_box"><br />
                    <a href="#" class="dc_slidebotadd_css"> <span class="roll_css" >Lorem ipsum dolor<br />
                    <small>sit amet, consectetur adipisicing elit</small></span> <img src="http://cdn.pimg.co/s/sak/5/350x197/c/pic.jpg" alt="" border="0" /> </a> <a href="#" class="dc_slidetop_css"> <span class="roll_css" >Lorem ipsum dolor<br />
                    <small>sit amet, consectetur adipisicing elit</small></span> <img src="http://cdn.pimg.co/s/sak/6/350x197/c/pic.jpg" alt="" border="0" /> </a>
                    <div class="dc_clear"></div>
                    <a href="#" class="dc_slidebot_css"> <span class="roll_css" >Lorem ipsum dolor<br />
                    <small>sit amet, consectetur adipisicing elit</small></span> <img src="http://cdn.pimg.co/s/sak/4/350x197/c/pic.jpg" alt="" border="0" /> </a> <a href="#" class="dc_slideimgrt_css" style="width:350px; height:197px;"> <span class="roll_css" >Lorem ipsum dolor<br />
                    <small>sit amet, consectetur adipisicing elit</small></span> <img src="http://cdn.pimg.co/s/sak/7/350x197/c/pic.jpg" alt="" border="0" /> </a>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/image_captions.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Image Frames &nbsp; <small style="color:#999;">Add stylish frames to your images</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- Video Frame -->
                    <div class="dc_decor_img"><a href="#"><span></span><img src="http://cdn.pimg.co/s/sak/1/300x200/c/pic.jpg" width="300" height="200" alt="image" /></a></div>
                    <!-- Pin Frame  -->
                    <div class="dc_decor_img dc_dis_1"><a href="#"><span></span><img src="http://cdn.pimg.co/s/sak/2/300x200/c/pic.jpg" width="300" height="200" alt="image" /></a></div>
                    <!-- Transparent Tape Frame  -->
                    <div class="dc_decor_img dc_dis_2"><a href="#"><span></span><img src="http://cdn.pimg.co/s/sak/3/300x200/c/pic.jpg" width="300" height="200" alt="image" /></a></div>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    
                    <!-- Paper Clip Frame -->
                    <div class="dc_decor_img dc_dis_3"><a href="#"><span></span><img src="http://cdn.pimg.co/s/sak/4/300x200/c/pic.jpg" width="300" height="200" alt="image" /></a></div>
                    <!-- Tape Frame -->
                    <div class="dc_decor_img dc_dis_4"><a href="#"><span></span><img src="http://cdn.pimg.co/s/sak/5/300x200/c/pic.jpg" width="300" height="200" alt="image" /></a></div>
                    <!-- Gold Frame -->
                    <div class="dc_decor_img dc_dis_5"><a href="#"><span></span><img src="http://cdn.pimg.co/s/sak/6/300x200/c/pic.jpg" width="300" height="200" alt="image" /></a></div>
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/image_frames.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Form Beautifier &nbsp; <small style="color:#999;">Beautify your existing forms by simply adding a few lines of code. </small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Form Beautify Start -->
                    <form action="url-to-post-to.php" method="POST">
                      <table border="0" cellspacing="0" cellpadding="6" bgcolor="#ffffff" style="padding:25px; border:1px dotted #ccc; ">
                        <tr>
                          <td><label>Input Text:</label></td>
                          <td><input name="input1" type="text" size="25" /></td>
                        </tr>
                        <tr>
                          <td><label>Input Password:</label></td>
                          <td><input type="password" size="25" /></td>
                        </tr>
                        <tr>
                          <td><label>Check Box: </label></td>
                          <td><input type="checkbox" name="checkbox1" /></td>
                        </tr>
                        <tr>
                          <td><label>Radio Button:</label></td>
                          <td><input type="radio" name="radio1" value="Yes" checked="checked" />
                            <label>Yes</label>
                            <input type="radio" name="radio2" value="No" />
                            <label>No</label></td>
                        </tr>
                        <tr>
                          <td><label>Textarea :</label></td>
                          <td><textarea cols="33" rows="3" name="textarea1"></textarea></td>
                        </tr>
                        <tr>
                          <td><label>Select Menu :</label></td>
                          <td><select name="selectmenu1">
                              <option value="salesdept">Sales Department </option>
                              <option value="supportdept">Support Department </option>
                              <option value="billingdept">Billing Department </option>
                            </select></td>
                        </tr>
                        <tr>
                          <td><label>Submit Button:</label></td>
                          <td><input type="submit" value="Submit Now" /></td>
                        </tr>
                        <tr>
                          <td><label>Reset Button:</label></td>
                          <td><input type="reset" value="Reset" /></td>
                        </tr>
                        <tr>
                          <td><label>Input Button:</label></td>
                          <td><input type="button" value="Input Button" /></td>
                        </tr>
                      </table>
                    </form>
                    <!-- DC Form Beautify End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/form_beautify.html" target="_blank">More options & styles »</a><br />
                  </div>
                </div>
                <div class="dc_toggle style2">
                  <div><a href="" class="dc_toggle_link">Line Dividers &nbsp; <small style="color:#999;">Add line dividers/horizontal rulers</small></a></div>
                  <div class="dc_toggle_box"><br />
                    
                    <!-- DC Divider Start -->
                    <div class="dc_divider1"></div>
                    <div class="dc_divider1_black"></div>
                    <!-- DC Divider End --> 
                    
                    <!-- DC Divider Start -->
                    <div class="dc_divider2"></div>
                    <div class="dc_divider2_black"></div>
                    <!-- DC Divider End --> 
                    
                    <!-- DC Divider Start -->
                    <div class="dc_divider4"></div>
                    <div class="dc_divider4_black"></div>
                    <!-- DC Divider End --> 
                    
                    <!-- DC Divider Start -->
                    <div class="dc_divider8"></div>
                    <div class="dc_divider8_black"></div>
                    <!-- DC Divider End --> 
                    
                    <!-- DC Divider Start -->
                    <div class="dc_divider9"></div>
                    <div class="dc_divider9_black"></div>
                    <!-- DC Divider End -->
                    
                    <div class="dc_clear"></div>
                    <!-- line break/clear line --> 
                    <br />
                    <a class="dc_awb_small dc_awb_white dc_flat" href="http://www.dcodes.net/2/docs/divider.html" target="_blank">More options & styles »</a><br />
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title;?></title>
<meta name="description" content="Enter Your Website Description Here">
<meta name="keywords" content="website, business, store" />
<meta name="robots" content="index, follow" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Mobile Specific Metas  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/css/menusm.css" />
<link rel="stylesheet" href="assets/css/layout.css">
<link rel="stylesheet" href="assets/css/skeleton.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/menusm.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript" src="assets/js/tinynav.min.js"></script>
<script type="text/javascript">
	$(function () {
		$('#menu-top-menu').tinyNav({
			active: 'selected',
			header: 'Navigation' 
		});
	});
</script>

<!-- PrettyPhoto Starts -->
<link rel="stylesheet" type="text/css" href="assets/prettyPhoto/css/prettyPhoto.css" />
<script type="text/javascript" src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<!-- PrettyPhoto Ends -->
<!-- Preloader Starts -->
<link href="assets/preloader/css/preloader.css" rel="stylesheet" />
<script src="assets/preloader/js/jquery.preloader.js" charset="utf-8"></script>
<!-- Preloader Ends -->
<!-- Ui To Top Starts -->
<link href="assets/ui_totop/css/ui.totop.css" rel="stylesheet" />
<script src="assets/ui_totop/js/jquery.ui.totop.js" charset="utf-8"></script>
<!-- Ui To Top Ends -->
<!-- DC Twitter Starts -->
<link href="assets/twitter_tweet/jquery.tweet.css" rel="stylesheet" />
<script src="assets/twitter_tweet/jquery.tweet.js" charset="utf-8"></script>

<!-- DC Twitter End -->

<!-- jquery.jscrollpane Starts -->
<!-- jquery.jscrollpane End -->

<!-- Config User Intarface Box Import START -->
<script type="text/javascript" src="assets/js/head_html_default_block.js"></script>
<script type="text/javascript" src="assets/js/head_html_block.js"></script>
<!-- Config User Intarface Box Import END -->

<link type="text/css" rel="stylesheet" href="assets/css/jquery.jscrollpane.css"/>
<script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="assets/js/jquery.jscrollpane.js"></script>
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
	if (resizeTimer) clearTimeout(resizeTimer); 
	resizeTimer = setTimeout("tz_init("+"350)", 100);
	
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
<link href="assets/css/isotop.css" rel="stylesheet" type="text/css" />
<link href="assets/css/tz_portfolio.css" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="assets/js/jquery.isotope.js"></script><!-- jQuery -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script><!-- jQuery -->

</head>
<body>
<script type="text/javascript">
        function tz_init(defaultwidth){
            var contentWidth    = jQuery('#content').outerWidth(true);
            var columnWidth     = defaultwidth;
            var curColCount     = 0;
            var maxColCount     = 0;
            var newColCount     = 0;
            var newColWidth     = 0;
            var featureColWidth = 0;

            curColCount = Math.floor(contentWidth / columnWidth);
            maxColCount = curColCount + 1;
            if((maxColCount - (contentWidth / columnWidth)) > ((contentWidth / columnWidth) - curColCount)){
                newColCount     = curColCount;
            }
            else{
                newColCount = maxColCount;
            }

            newColWidth = contentWidth;
            featureColWidth = contentWidth;


            if(newColCount > 1){
                newColWidth = Math.floor(contentWidth / newColCount);
                featureColWidth = newColWidth * 2;
            }

            jQuery('.element').width(newColWidth);
            jQuery('.tz_item').each(function(){
                jQuery(this).find('img').first().attr('width','100%');
            });

            jQuery('.tz_feature_item').width(featureColWidth);

            var $container = jQuery('#portfolio');
            $container.imagesLoaded(function(){
                //Get Item Height
                var $element = jQuery('.element img');
                var minHeight   = jQuery('.element img:first').height();
                var imgWidth    = jQuery('.element img:first').width();
                /////Get minimum image Height
                $element.each(function(){
                    if(minHeight > jQuery(this).height()){
                        minHeight   = jQuery(this).height();
                        imgWidth    = jQuery(this).width();
                    }
                });

                /////Calculate image width and image height again
                var $newImgW    = newColWidth;
                var $newImgH    = $newImgW*minHeight/imgWidth;
                jQuery('.element .TzInner').css({
                    'height':parseInt($newImgH),
                    'padding-bottom': 0
                });
                $container.isotope({
                    masonry:{
                        columnWidth: newColWidth
                    }
                });

            });
        }
    </script>
<div class="body_pattern">
  <div class="index_page">
    <div class="main">
      <div class="main_menu opn_mn">
        <div class="main_menu_button"></div>
        <div class="main_menu_top"> 
          <!-- logo -->
          <div class="logo">
            <div><a href="index.html"><?php echo $title;?></a></div>
            <p>Your source for the best eats in Weatherford</p>
          </div>
          <!-- logo -->
          <div class="clr"></div>
        </div>
        <!-- menu edit in file "js/menu_html_block.js" -->
        <div class="menu"> 
          <script type="text/javascript" src="assets/js/menu_html_block.js"></script> 
        </div>
        <!-- /menu -->
        
        <div class="clr"></div>
        <div class="main_menu_bottom"> 
          <!-- social -->
          <div class="social">
            <div class="social_text">Stay Connected</div>
            <a href="#"><img src="assets/images/spacer.gif" class="social1" /></a> 
			<a href="#"><img src="assets/images/spacer.gif" class="social2" /></a> 
			<a href="#"><img src="assets/images/spacer.gif" class="social3" /></a> 
			<a href="#"><img src="assets/images/spacer.gif" class="social4" /></a> 
			<a href="#"><img src="assets/images/spacer.gif" class="social5" /></a> 
			<a href="#"><img src="assets/images/spacer.gif" class="social6" /></a></div>
          <!-- social -->
          <div class="clr"></div>
          <!-- footer -->
          <div class="footer">
            <div class="footer_resize">
              <div class="clr"></div>
              <p>&copy; Copyright <a href="#"><em><? echo $title; ?></em></a>.<br />
                All Rights Reserved.<br />
                Design by <a href="http://www.beacontechsupport.com" target="_blank" title="Beacon Tech Support">Beacon Tech Support</a>.</p>
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
          <div id="content" class="content">
            <div class="mobileview">
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
                <script type="text/javascript" src="js/mobile_menu.js"></script> 
              </div>
              <!-- /menu -->
              
              <div class="social">
                <div class="social_text">Stay Connected</div>
                <a href="#"><img src="images/spacer.gif" class="social1" /></a> <a href="#"><img src="images/spacer.gif" class="social2" /></a> <a href="#"><img src="images/spacer.gif" class="social3" /></a> <a href="#"><img src="images/spacer.gif" class="social4" /></a> <a href="#"><img src="images/spacer.gif" class="social5" /></a> <a href="#"><img src="images/spacer.gif" class="social6" /></a></div>
            </div>
            <div id="tz_options" class="clearfix">
              <div class="option-combo">
                <h2 class="TzFilter">?What are you hungry for<span></span></h2>
                <ul id="filter" class="option-set clearfix" data-option-key="filter">
                  <li><a href="#show-all" data-option-value="*" class="selected"><em>Show all</em></a></li>
                  <li> <a href="#American" data-option-value=".American"> <em>American</em> </a> </li>
                  <li> <a href="#Bakery" data-option-value=".Bakery"> <em>Bakery</em> </a> </li>
                  <li> <a href="#BBQ" data-option-value=".BBQ"> <em>BBQ</em> </a> </li>
                  <li> <a href="#Coffee" data-option-value=".Coffee"> <em>Coffee</em> </a> </li>
                  <li> <a href="#Italian" data-option-value=".Italian"> <em>Italian</em> </a> </li>
                  <li> <a href="#Mexican" data-option-value=".Mexican"> <em>Mexican</em> </a> </li>
                  <li> <a href="#Steakhouse" data-option-value=".Steakhouse"> <em>Steakhouse</em> </a> </li>
				  <li> <a href="#International" data-option-value=".International"> <em>International</em> </a> </li>
				  <li> <a href="#IceCream" data-option-value=".IceCream"> <em>Ice Cream</em> </a> </li>
				  <li> <a href="#Sandwiches" data-option-value=".Sandwiches"> <em>Sandwiches</em> </a> </li>
				  <li> <a href="#Pizza" data-option-value=".Pizza"> <em>Pizza</em> </a> </li>
				  <li> <a href="#Burgers" data-option-value=".Burgers"> <em>Burgers</em> </a> </li>
				  <li> <a href="#FastFood" data-option-value=".FastFood"> <em>Fast Food</em> </a> </li>
                </ul>
              </div>
            </div>
            <div id="portfolio" class="super-list variable-sizes clearfix">
	      <?php foreach($restaurants as $listing)print $listing;?>			           
            </div>
            <script type="text/javascript">
	
	     var tz = jQuery.noConflict();
	     var resizeTimer = null;
	    jQuery(window).bind('load resize', function() {
	        if (resizeTimer) clearTimeout(resizeTimer);
	        resizeTimer = setTimeout("tz_init("+"350)", 100);
	    });
	
	
	    var $container = tz('#portfolio');
	    $container.imagesLoaded( function(){
	        $container.isotope({
	            itemSelector : '.element',
	            layoutMode: 'masonry',
	            getSortData: {
	                name: function( $elem ) {
	                    var name = $elem.find('.name'),
	                        itemText = name.length ? name : $elem;
	                    return itemText.text();
	                },
	                date: function($elem){
	                    var number = $elem.hasClass('element') ?
	                      $elem.find('.create').text() :
	                      $elem.attr('data-date');
	                    return number;
	
	                }
	            }
	        });
	        tz_init(350);
	    });
	     jQuery(document).ready(function(){
			 //my_comment
	         //jQuery.callFunction("tz_init(358)");
	     });
	
	    function loadPortfolio(){
	          var $optionSets = tz('#tz_options .option-set'),
	             $optionLinks = $optionSets.find('a');
	          $optionLinks.click(function(event){
	              event.preventDefault();
	            var $this = tz(this);
	            // don't proceed if already selected
	            if ( $this.hasClass('selected') ) {
	              return false;
	            }
	            var $optionSet = $this.parents('.option-set');
	            $optionSet.find('.selected').removeClass('selected');
	            $this.addClass('selected');
	
	            // make option object dynamically, i.e. { filter: '.my-filter-class' }
	            var options = {},
	                key = $optionSet.attr('data-option-key'),
	                value = $this.attr('data-option-value');
	            // parse 'false' as false boolean
	
	            value = value === 'false' ? false : value;
	            options[ key ] = value;
	            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	
	              // changes in layout modes need extra logic
	              changeLayoutMode( $this, options )
	            } else {
	              // otherwise, apply new options
	              $container.isotope( options );
	            }
	
	            return false;
	          });
	    }
	//    isotopeinit();
	    loadPortfolio();
			//my_comment
	       // jQuery('#portfolio > div.element > div.TzInner > div.TzPortfolioMedia').hoverdir();


 		 </script>
            <div id="tz_append"> </div>
            <div class="copyright">
              <p>&copy; Copyright <a href="#"><em><?php echo $title;?></em></a>.
                All Rights Reserved. Design by <a href="http://www.beacontechsupport.com" target="_blank" title="Beacon Tech Support">Beacon Tech Support</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
</body>
</html>

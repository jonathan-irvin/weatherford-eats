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
        <!-- <div class="main_menu_button"></div> -->
        <div class="main_menu_top"> 
          <!-- logo -->
          <div class="logo">
            <div><a href="/"><?php echo $title;?></a></div>
            <p>Your source for the best eats in Weatherford</p>
          </div>
          <!-- logo -->
          <div class="clr"></div>
        </div>
        <!-- menu edit in file "js/menu_html_block.js" 
        <div class="menu"> 
          <script type="text/javascript" src="assets/js/menu_html_block.js"></script> 
        </div>
         /menu -->
        
        <div class="clr"></div>
        <div class="main_menu_bottom"> 
          <!-- social 
          <div class="social">
            <div class="social_text">Stay Connected</div>
				<a href="#"><img src="assets/images/spacer.gif" class="social1" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social2" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social3" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social4" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social5" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social6" /></a>
			</div>
          <!-- social -->
          <div class="clr"></div>
          <!-- footer -->
          <div class="footer">
            <div class="footer_resize">
              <div class="clr"></div>
              <p>&copy; Copyright <a href="#"><em><?php echo $title; ?></em></a>.<br />
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
                  <div><a href="/"><?php echo $title;?></a></div>
                  <p>Your source for the best eats in Weatherford</p>
                </div>
                <!-- logo -->
                <div class="clr"></div>
              </div>
              
              <!-- menu edit in file "js/menu_html_block.js" -->
              <div class="menu"> 
                <script type="text/javascript" src="js/mobile_menu.js"></script> 
              </div>
              <!-- /menu -->
              
			  <!--
              <div class="social">
                <div class="social_text">Stay Connected</div>
                <a href="#"><img src="assets/images/spacer.gif" class="social1" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social2" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social3" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social4" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social5" /></a> 
				<a href="#"><img src="assets/images/spacer.gif" class="social6" /></a>
			  </div>
			  -->
            </div>
            <div id="tz_options" class="clearfix">
              <div class="option-combo">
                <h2 class="TzFilter">?What are you hungry for<span></span></h2>
                <ul id="filter" class="option-set clearfix" data-option-key="filter">
                  <li> <a href="#show-all" data-option-value="*" class="selected"><em>Show all</em></a></li>
                  <li> <a href="#American" data-option-value=".American"> <em>American</em> </a> </li>
				  <li> <a href="#Asian" data-option-value=".Asian"> <em>Asian</em> </a> </li>
                  <li> <a href="#Bakery" data-option-value=".Bakery"> <em>Bakery</em> </a> </li>
                  <li> <a href="#BBQ" data-option-value=".BBQ"> <em>BBQ</em> </a> </li>
				  <li> <a href="#Burgers" data-option-value=".Burgers"> <em>Burgers</em> </a> </li>
                  <li> <a href="#Coffee" data-option-value=".Coffee"> <em>Coffee</em> </a> </li>
				  <li> <a href="#International" data-option-value=".International"> <em>International</em> </a> </li>
                  <li> <a href="#Italian" data-option-value=".Italian"> <em>Italian</em> </a> </li>
                  <li> <a href="#Mexican" data-option-value=".Mexican"> <em>Mexican</em> </a> </li>             
				  <li> <a href="#Pizza" data-option-value=".Pizza"> <em>Pizza</em> </a> </li>				  
				  <li> <a href="#Sandwiches" data-option-value=".Sandwiches"> <em>Sandwiches</em> </a> </li>
				  <li> <a href="#Steakhouse" data-option-value=".Steakhouse"> <em>Steakhouse</em> </a> </li>
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

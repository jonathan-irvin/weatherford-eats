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
              <h1>Web Store Page<span>Cras sit amet libero eros... </span></h1>
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
              
              <!-- jQuery Library (skip this step if already called on page ) --> 
              <script type="text/javascript" src="http://cdn.dcodes.net/2/jquery.min.js"></script> <!-- (do not call twice) --> 
              
              <!-- DC Toggle CSS -->
              <link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/accordion_toggle/css/dc_accordion_toggle.css" />
              
              <!-- DC Toggle JS --> 
              <script type="text/javascript" src="http://cdn.dcodes.net/2/accordion_toggle/js/dc_accordion_toggle.js"></script> 
              
              <!-- DC Instant.Webstore CSS -->
              <link rel="stylesheet" href="http://cdn.dcodes.net/2/webstore/css/style.css">
              
              <!-- DC Instant.Webstore JS --> 
              <script src="http://cdn.dcodes.net/2/webstore/js/jquery.instant.webstore.js"></script> 
              
              <!-- DC Instant.Webstore Start -->
              
              <h3>Setup a web store & accept orders in just 10 minutes!</h3>
              
              <!-- DC Toggle 2 Start -->
              <div class="dc_toggle_container" style="width:80%;">
                <div class="dc_toggle style1">
                  <div><a href="" class="dc_toggle_link">Instant.Webstore: Features</a></div>
                  <div class="dc_toggle_box"> <span style="font:15px arial,sans-serif;line-height:150%"> + 100% Browser/Javascript based: <strong>No database required</strong>.<br />
                    + Fast & Simple Setup: Add store items in <strong>seconds!</strong><br />
                    + Shipping Features: Supports Flat Rate/Fixed Rate/Variable Shipping Fees/Taxes<br />
                    + Cart Features: Supports Coupon/Discount Codes, Calculates State Taxes<br />
                    + Merchant Ready: Supports Authorize.Net, PayPal, Skrill (MoneyBookers), Google Checkout, Amazon Payments.<br />
                    + Browser Cookies Support - Stores buyer cart items <strong>automatically!</strong><br />
                    + Just edit this page and have a web store ready in <strong>10 minutes!</strong><br />
                    </span> </div>
                </div>
              </div>
              <!-- DC Toggle 2 End -->
              
              <div id="webstore">
                <ul id="webstore-navigation">
                  <li><a class="current store-tab" href="#catalogue">Catalogue</a></li>
                  <li><a class="store-tab" href="#cart">Cart (<span class="cart-quantity">0</span> items)</a></li>
                  <li><a class="store-tab" href="#checkout">Checkout</a></li>
                </ul>
                <div id="webstore-container">
                  <div id="webstore-container-inner">
                    <div class="webstore-clear" id="catalogue">
                      <ul>
                        <!-- item 1 -->
                        <li class="product first-column" data-id="item1">
                          <div class="webstore-clear">
                            <div class="webstore-clear"> <img class="left thumb" src="http://cdn.dcodes.net/2/webstore/item1.png"> <!-- Add item images to dcodes/webstore/ -->
                              <div class="right">
                                <h3 class="title">Blue Shirt</h3>
                                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis velit
                                  et elit tempor et aliquet diam suscipit. </p>
                              </div>
                            </div>
                            <div class="right"> <span class="left price">$9.95</span>
                              <button class="left purchase" type="button"><span>Add to Cart</span></button>
                            </div>
                          </div>
                        </li>
                        <!-- item 1 ends --> 
                        
                        <!-- item 2 -->
                        <li class="product last-column" data-id="item2">
                          <div class="webstore-clear">
                            <div class="webstore-clear"> <img class="left thumb" src="http://cdn.dcodes.net/2/webstore/item2.png">
                              <div class="right">
                                <h3 class="title">Green Shirt</h3>
                                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis velit
                                  et elit tempor et aliquet diam suscipit. </p>
                              </div>
                            </div>
                            <div class="right"> <span class="left price">$14.95</span>
                              <button class="left purchase" type="button"><span>Add to Cart</span></button>
                            </div>
                          </div>
                        </li>
                        <!-- item 2 ends--> 
                        
                        <!-- item 3 -->
                        <li class="product first-column" data-id="item3">
                          <div class="webstore-clear">
                            <div class="webstore-clear"> <img class="left thumb" src="http://cdn.dcodes.net/2/webstore/item3.png">
                              <div class="right">
                                <h3 class="title">Red Shirt</h3>
                                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis velit
                                  et elit tempor et aliquet diam suscipit. </p>
                              </div>
                            </div>
                            <div class="right"> <span class="left price">$6.00</span>
                              <button class="left purchase" type="button"><span>Add to Cart</span></button>
                            </div>
                          </div>
                        </li>
                        <!-- item 3 ends--> 
                        
                        <!-- item 4 -->
                        <li class="product last-column" data-id="item4">
                          <div class="webstore-clear">
                            <div class="webstore-clear"> <img class="left thumb" src="http://cdn.dcodes.net/2/webstore/item4.png">
                              <div class="right">
                                <h3 class="title">Black Shirt</h3>
                                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis velit
                                  et elit tempor et aliquet diam suscipit. </p>
                              </div>
                            </div>
                            <div class="right"> <span class="left price">$18.00</span>
                              <button class="left purchase" type="button"><span>Add to Cart</span></button>
                            </div>
                          </div>
                        </li>
                        <!-- item 4 ends-->
                        
                      </ul>
                    </div>
                    <div class="webstore-clear" id="cart">
                      <div class="cart-is-empty">Your shopping cart is empty.</div>
                      <div class="cart-is-full">
                        <div class="webstore-clear" id="cart-heading"> <span class="description">Item</span> <span class="quantity">Quantity</span> <span class="price"><span>Price</span><span>Total</span></span> </div>
                        <div class="webstore-clear" id="cart-list"></div>
                        <hr>
                        <div class="webstore-clear">
                          <button class="left empty" type="button"><span>Empty cart</span></button>
                          <div class="right cart-totals">
                            <label>Subtotal</label>
                            <span class="cart-subtotal">$0.00</span><br>
                            <label>Shipping</label>
                            <span class="cart-shipping">$0.00</span><br>
                            <label>Tax</label>
                            <span class="cart-tax">$0.00</span><br>
                            <label>Discount</label>
                            <span class="cart-discount">$0.00</span><br>
                            <br>
                            <label>Grand Total</label>
                            <span class="cart-total">$0.00</span><br>
                            <br>
                            <button class="right" type="button" id="checkout-continue-button"><span>Checkout</span></button>
                          </div>
                          <div class="right cart-options">
                            <label>Discount code</label>
                            <input class="discount">
                            <br>
                            <select class="shipping">
                              <option value="">Choose a shipping method</option>
                            </select>
                          </div>
                        </div>
                        <em>Try these discount codes: 10PERCENT, 10DOLLARS, FREESHIPPINGOVER100</em> </div>
                    </div>
                    <div class="webstore-clear" id="checkout">
                      <div class="cart-is-empty">Your shopping cart is empty.</div>
                      <div class="cart-is-full">
                        <form>
                          <div> 
                            <!-- PAYMENT PROCESSORS --> 
                            <!-- comment out 3rd party merchant processor to remove from checkout form -->
                            <label> <img src="dcodes/webstore/css/images/credit-mini.png" title="Credit Card" hspace="5" vspace="0" border="0" />
                              <input type="radio" name="instant_webstore[method]" value="authorizenet" checked>
                              Credit card </label>
                            <label> <img src="dcodes/webstore/css/images/paypal-mini.png" title="PayPal" hspace="5" vspace="0" border="0" />
                              <input type="radio" name="instant_webstore[method]" value="paypal">
                              PayPal </label>
                            <label> <img src="dcodes/webstore/css/images/skrill-mini.png" title="Skrill (Moneybookers)" hspace="5" vspace="0" border="0" />
                              <input type="radio" name="instant_webstore[method]" value="skrill">
                              Skrill </label>
                            <label> <img src="dcodes/webstore/css/images/googleckout-mini.png" title="Google Checkout" hspace="5" vspace="0" border="0" />
                              <input type="radio" name="instant_webstore[method]" value="google">
                              Google Checkout </label>
                            <label> <img src="dcodes/webstore/css/images/amazon-mini.png" title="Amazon Payments" hspace="5" vspace="0" border="0" />
                              <input type="radio" name="instant_webstore[method]" value="amazon">
                              Amazon </label>
                          </div>
                          <table cellspacing="0">
                            <tr>
                              <td><label>Email address *</label></td>
                              <td><input data-validate="required:method=authorizenet" name="instant_webstore[email]"></td>
                            </tr>
                          </table>
                          <table cellspacing="0">
                            <tr>
                              <td colspan="2"><h3>Billing address</h3></td>
                            </tr>
                            <tr>
                              <td><label>First and last name *</label></td>
                              <td><table cellspacing="0">
                                  <tr>
                                    <td><input data-validate="required:method=authorizenet" name="instant_webstore[first_name]"></td>
                                    <td><input data-validate="required:method=authorizenet" name="instant_webstore[last_name]"></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td><label>Address line 1 *</label></td>
                              <td><input data-validate="required:method=authorizenet" name="instant_webstore[address1]"></td>
                            </tr>
                            <tr>
                              <td><label>Address line 2</label></td>
                              <td><input name="instant_webstore[address2]"></td>
                            </tr>
                            <tr>
                              <td><label>City *</label></td>
                              <td><input data-validate="required:method=authorizenet" name="instant_webstore[city]"></td>
                            </tr>
                            <tr>
                              <td><label>State *</label></td>
                              <td><select data-validate="required:method=authorizenet" name="instant_webstore[region]">
                                  <option value="International" selected>Outside US</option>
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ">Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DE">Delaware</option>
                                  <option value="FL">Florida</option>
                                  <option value="GA">Georgia</option>
                                  <option value="HI">Hawaii</option>
                                  <option value="ID">Idaho</option>
                                  <option value="IL">Illinois</option>
                                  <option value="IN">Indiana</option>
                                  <option value="IA">Iowa</option>
                                  <option value="KS">Kansas</option>
                                  <option value="KY">Kentucky</option>
                                  <option value="LA">Louisiana</option>
                                  <option value="ME">Maine</option>
                                  <option value="MD">Maryland</option>
                                  <option value="MA">Massachusetts</option>
                                  <option value="MI">Michigan</option>
                                  <option value="MN">Minnesota</option>
                                  <option value="MS">Mississippi</option>
                                  <option value="MO">Missouri</option>
                                  <option value="MT">Montana</option>
                                  <option value="NE">Nebraska</option>
                                  <option value="NV">Nevada</option>
                                  <option value="NH">New Hampshire</option>
                                  <option value="NJ">New Jersey</option>
                                  <option value="NM">New Mexico</option>
                                  <option value="NY">New York</option>
                                  <option value="NC">North Carolina</option>
                                  <option value="ND">North Dakota</option>
                                  <option value="OH">Ohio</option>
                                  <option value="OK">Oklahoma</option>
                                  <option value="OR">Oregon</option>
                                  <option value="PA">Pennsylvania</option>
                                  <option value="RI">Rhode Island</option>
                                  <option value="SC">South Carolina</option>
                                  <option value="SD">South Dakota</option>
                                  <option value="TN">Tennessee</option>
                                  <option value="TX">Texas</option>
                                  <option value="UT">Utah</option>
                                  <option value="VT">Vermont</option>
                                  <option value="VA">Virginia</option>
                                  <option value="WA">Washington</option>
                                  <option value="WV">West Virginia</option>
                                  <option value="WI">Wisconsin</option>
                                  <option value="WY">Wyoming</option>
                                </select></td>
                            </tr>
                            <tr>
                              <td><label>Country *</label></td>
                              <td><select data-validate="required:method=authorizenet" name="instant_webstore[country]">
                                  <option value=" " selected>(please select a country)</option>
                                  <option value="US">United States </option>
                                  <option value="CA">Canada</option>
                                  <option value="GB">United Kingdom</option>
                                  <option value="FR">France</option>
                                  <option value="DE">Germany </option>
                                  <option value="AU">Australia</option>
                                  <option value="AF">Afghanistan </option>
                                  <option value="AL">Albania </option>
                                  <option value="DZ">Algeria </option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra </option>
                                  <option value="AO">Angola</option>
                                  <option value="AI">Anguilla</option>
                                  <option value="AQ">Antarctica</option>
                                  <option value="AG">Antigua and Barbuda </option>
                                  <option value="AR">Argentina </option>
                                  <option value="AM">Armenia </option>
                                  <option value="AW">Aruba </option>
                                  <option value="AT">Austria </option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas </option>
                                  <option value="BH">Bahrain </option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BB">Barbados</option>
                                  <option value="BY">Belarus </option>
                                  <option value="BE">Belgium </option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin </option>
                                  <option value="BM">Bermuda </option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia </option>
                                  <option value="BA">Bosnia and Herzegowina</option>
                                  <option value="BW">Botswana</option>
                                  <option value="BV">Bouvet Island </option>
                                  <option value="BR">Brazil</option>
                                  <option value="IO">British Indian Ocean Territory</option>
                                  <option value="BN">Brunei Darussalam </option>
                                  <option value="BG">Bulgaria</option>
                                  <option value="BF">Burkina Faso</option>
                                  <option value="BI">Burundi </option>
                                  <option value="KH">Cambodia</option>
                                  <option value="CM">Cameroon</option>
                                  <option value="CV">Cape Verde</option>
                                  <option value="KY">Cayman Islands</option>
                                  <option value="CF">Central African Republic</option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile </option>
                                  <option value="CN">China </option>
                                  <option value="CX">Christmas Island</option>
                                  <option value="CC">Cocos (Keeling) Islands </option>
                                  <option value="CO">Colombia</option>
                                  <option value="KM">Comoros </option>
                                  <option value="CG">Congo </option>
                                  <option value="CD">Congo, the Democratic Republic of the </option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="CI">Cote d'Ivoire </option>
                                  <option value="HR">Croatia (Hrvatska)</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
                                  <option value="DK">Denmark </option>
                                  <option value="DJ">Djibouti</option>
                                  <option value="DM">Dominica</option>
                                  <option value="DO">Dominican Republic</option>
                                  <option value="TP">East Timor</option>
                                  <option value="EC">Ecuador </option>
                                  <option value="EG">Egypt </option>
                                  <option value="SV">El Salvador </option>
                                  <option value="GQ">Equatorial Guinea </option>
                                  <option value="ER">Eritrea </option>
                                  <option value="EE">Estonia </option>
                                  <option value="ET">Ethiopia</option>
                                  <option value="FK">Falkland Islands (Malvinas) </option>
                                  <option value="FO">Faroe Islands </option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland </option>
                                  <option value="FX">France, Metropolitan</option>
                                  <option value="GF">French Guiana </option>
                                  <option value="PF">French Polynesia</option>
                                  <option value="TF">French Southern Territories </option>
                                  <option value="GA">Gabon </option>
                                  <option value="GM">Gambia</option>
                                  <option value="GE">Georgia </option>
                                  <option value="GH">Ghana </option>
                                  <option value="GI">Gibraltar </option>
                                  <option value="GR">Greece</option>
                                  <option value="GL">Greenland </option>
                                  <option value="GD">Grenada </option>
                                  <option value="GP">Guadeloupe</option>
                                  <option value="GU">Guam</option>
                                  <option value="GT">Guatemala </option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau </option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti </option>
                                  <option value="HM">Heard and Mc Donald Islands </option>
                                  <option value="VA">Holy See (Vatican City State) </option>
                                  <option value="HN">Honduras</option>
                                  <option value="HK">Hong Kong </option>
                                  <option value="HU">Hungary </option>
                                  <option value="IS">Iceland </option>
                                  <option value="IN">India </option>
                                  <option value="ID">Indonesia </option>
                                  <option value="IR">Iran (Islamic Republic of)</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland </option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy </option>
                                  <option value="JM">Jamaica </option>
                                  <option value="JP">Japan </option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya </option>
                                  <option value="KI">Kiribati</option>
                                  <option value="KP">Korea, Democratic People's Republic of</option>
                                  <option value="KR">Korea, Republic of</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Lao People's Democratic Republic</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon </option>
                                  <option value="LS">Lesotho </option>
                                  <option value="LR">Liberia </option>
                                  <option value="LY">Libyan Arab Jamahiriya</option>
                                  <option value="LI">Liechtenstein </option>
                                  <option value="LT">Lithuania </option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MO">Macau </option>
                                  <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                  <option value="MG">Madagascar</option>
                                  <option value="MW">Malawi</option>
                                  <option value="MY">Malaysia</option>
                                  <option value="MV">Maldives</option>
                                  <option value="ML">Mali</option>
                                  <option value="MT">Malta </option>
                                  <option value="MH">Marshall Islands</option>
                                  <option value="MQ">Martinique</option>
                                  <option value="MR">Mauritania</option>
                                  <option value="MU">Mauritius </option>
                                  <option value="YT">Mayotte </option>
                                  <option value="MX">Mexico</option>
                                  <option value="FM">Micronesia, Federated States of </option>
                                  <option value="MD">Moldova, Republic of</option>
                                  <option value="MC">Monaco</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="MS">Montserrat</option>
                                  <option value="MA">Morocco </option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar </option>
                                  <option value="NA">Namibia </option>
                                  <option value="NR">Nauru </option>
                                  <option value="NP">Nepal </option>
                                  <option value="NL">Netherlands </option>
                                  <option value="AN">Netherlands Antilles</option>
                                  <option value="NC">New Caledonia </option>
                                  <option value="NZ">New Zealand </option>
                                  <option value="NI">Nicaragua </option>
                                  <option value="NE">Niger </option>
                                  <option value="NG">Nigeria </option>
                                  <option value="NU">Niue</option>
                                  <option value="NF">Norfolk Island</option>
                                  <option value="MP">Northern Mariana Islands</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PW">Palau </option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines </option>
                                  <option value="PN">Pitcairn</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="PR">Puerto Rico </option>
                                  <option value="QA">Qatar </option>
                                  <option value="RE">Reunion </option>
                                  <option value="RO">Romania </option>
                                  <option value="RU">Russian Federation</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="KN">Saint Kitts and Nevis </option>
                                  <option value="LC">Saint LUCIA </option>
                                  <option value="VC">Saint Vincent and the Grenadines</option>
                                  <option value="WS">Samoa </option>
                                  <option value="SM">San Marino</option>
                                  <option value="ST">Sao Tome and Principe </option>
                                  <option value="SA">Saudi Arabia</option>
                                  <option value="SN">Senegal </option>
                                  <option value="SC">Seychelles</option>
                                  <option value="SL">Sierra Leone</option>
                                  <option value="SG">Singapore </option>
                                  <option value="SK">Slovakia (Slovak Republic)</option>
                                  <option value="SI">Slovenia</option>
                                  <option value="SB">Solomon Islands </option>
                                  <option value="SO">Somalia </option>
                                  <option value="ZA">South Africa</option>
                                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                                  <option value="ES">Spain </option>
                                  <option value="LK">Sri Lanka </option>
                                  <option value="SH">St. Helena</option>
                                  <option value="PM">St. Pierre and Miquelon </option>
                                  <option value="SD">Sudan </option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                  <option value="SZ">Swaziland </option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland </option>
                                  <option value="SY">Syrian Arab Republic</option>
                                  <option value="TW">Taiwan, Province of China </option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania, United Republic of</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TG">Togo</option>
                                  <option value="TK">Tokelau </option>
                                  <option value="TO">Tonga </option>
                                  <option value="TT">Trinidad and Tobago </option>
                                  <option value="TN">Tunisia </option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="TC">Turks and Caicos Islands</option>
                                  <option value="TV">Tuvalu</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine </option>
                                  <option value="AE">United Arab Emirates</option>
                                  <option value="UM">United States Minor Outlying Islands</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Vietnam</option>
                                  <option value="VG">Virgin Islands (British)</option>
                                  <option value="VI">Virgin Islands (U.S.)</option>
                                  <option value="WF">Wallis and Futuna Islands</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="YU">Yugoslavia</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                                </select></td>
                            </tr>
                            <tr>
                              <td><label>Zip/postal code *</label></td>
                              <td><input data-validate="required:method=authorizenet" name="instant_webstore[postal]" size="10"></td>
                            </tr>
                          </table>
                          <table cellspacing="0" id="checkout-ship-to-address">
                            <tr>
                              <td><h3>Shipping address</h3></td>
                              <td><table cellspacing="0">
                                  <tr>
                                    <td><label>
                                        <input type="radio" name="instant_webstore[ship_to_address]" value="0" checked>
                                        My shipping address is my billing address </label></td>
                                    <td><label>
                                        <input type="radio" name="instant_webstore[ship_to_address]" value="1">
                                        I have a different shipping address </label></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table>
                          <table cellspacing="0">
                            <tr>
                              <td><label>First and last name</label></td>
                              <td><table cellspacing="0">
                                  <tr>
                                    <td><input data-validate="required:method=authorizenet;ship_to_address=1" name="instant_webstore[ship_to_first_name]"></td>
                                    <td><input data-validate="required:method=authorizenet;ship_to_address=1" name="instant_webstore[ship_to_last_name]"></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td><label>Address line 1</label></td>
                              <td><input data-validate="required:method=authorizenet;ship_to_address=1" name="instant_webstore[ship_to_address1]"></td>
                            </tr>
                            <tr>
                              <td><label>Address line 2</label></td>
                              <td><input name="instant_webstore[ship_to_address2]"></td>
                            </tr>
                            <tr>
                              <td><label>City</label></td>
                              <td><input data-validate="required:method=authorizenet;ship_to_address=1" name="instant_webstore[ship_to_city]"></td>
                            </tr>
                            <tr>
                              <td><label>State</label></td>
                              <td><select data-validate="required:method=authorizenet;ship_to_address=1" name="instant_webstore[ship_to_region]">
                                  <option value="International" selected>Outside US</option>
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ">Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DE">Delaware</option>
                                  <option value="FL">Florida</option>
                                  <option value="GA">Georgia</option>
                                  <option value="HI">Hawaii</option>
                                  <option value="ID">Idaho</option>
                                  <option value="IL">Illinois</option>
                                  <option value="IN">Indiana</option>
                                  <option value="IA">Iowa</option>
                                  <option value="KS">Kansas</option>
                                  <option value="KY">Kentucky</option>
                                  <option value="LA">Louisiana</option>
                                  <option value="ME">Maine</option>
                                  <option value="MD">Maryland</option>
                                  <option value="MA">Massachusetts</option>
                                  <option value="MI">Michigan</option>
                                  <option value="MN">Minnesota</option>
                                  <option value="MS">Mississippi</option>
                                  <option value="MO">Missouri</option>
                                  <option value="MT">Montana</option>
                                  <option value="NE">Nebraska</option>
                                  <option value="NV">Nevada</option>
                                  <option value="NH">New Hampshire</option>
                                  <option value="NJ">New Jersey</option>
                                  <option value="NM">New Mexico</option>
                                  <option value="NY">New York</option>
                                  <option value="NC">North Carolina</option>
                                  <option value="ND">North Dakota</option>
                                  <option value="OH">Ohio</option>
                                  <option value="OK">Oklahoma</option>
                                  <option value="OR">Oregon</option>
                                  <option value="PA">Pennsylvania</option>
                                  <option value="RI">Rhode Island</option>
                                  <option value="SC">South Carolina</option>
                                  <option value="SD">South Dakota</option>
                                  <option value="TN">Tennessee</option>
                                  <option value="TX">Texas</option>
                                  <option value="UT">Utah</option>
                                  <option value="VT">Vermont</option>
                                  <option value="VA">Virginia</option>
                                  <option value="WA">Washington</option>
                                  <option value="WV">West Virginia</option>
                                  <option value="WI">Wisconsin</option>
                                  <option value="WY">Wyoming</option>
                                </select></td>
                            </tr>
                            <tr>
                              <td><label>Country</label></td>
                              <td><select data-validate="required:method=authorizenet;ship_to_address=1" name="instant_webstore[ship_to_country]">
                                  <option value=" " selected>(please select a country)</option>
                                  <option value="US">United States </option>
                                  <option value="CA">Canada</option>
                                  <option value="GB">United Kingdom</option>
                                  <option value="FR">France</option>
                                  <option value="DE">Germany </option>
                                  <option value="AU">Australia</option>
                                  <option value="AF">Afghanistan </option>
                                  <option value="AL">Albania </option>
                                  <option value="DZ">Algeria </option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra </option>
                                  <option value="AO">Angola</option>
                                  <option value="AI">Anguilla</option>
                                  <option value="AQ">Antarctica</option>
                                  <option value="AG">Antigua and Barbuda </option>
                                  <option value="AR">Argentina </option>
                                  <option value="AM">Armenia </option>
                                  <option value="AW">Aruba </option>
                                  <option value="AT">Austria </option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas </option>
                                  <option value="BH">Bahrain </option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BB">Barbados</option>
                                  <option value="BY">Belarus </option>
                                  <option value="BE">Belgium </option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin </option>
                                  <option value="BM">Bermuda </option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia </option>
                                  <option value="BA">Bosnia and Herzegowina</option>
                                  <option value="BW">Botswana</option>
                                  <option value="BV">Bouvet Island </option>
                                  <option value="BR">Brazil</option>
                                  <option value="IO">British Indian Ocean Territory</option>
                                  <option value="BN">Brunei Darussalam </option>
                                  <option value="BG">Bulgaria</option>
                                  <option value="BF">Burkina Faso</option>
                                  <option value="BI">Burundi </option>
                                  <option value="KH">Cambodia</option>
                                  <option value="CM">Cameroon</option>
                                  <option value="CV">Cape Verde</option>
                                  <option value="KY">Cayman Islands</option>
                                  <option value="CF">Central African Republic</option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile </option>
                                  <option value="CN">China </option>
                                  <option value="CX">Christmas Island</option>
                                  <option value="CC">Cocos (Keeling) Islands </option>
                                  <option value="CO">Colombia</option>
                                  <option value="KM">Comoros </option>
                                  <option value="CG">Congo </option>
                                  <option value="CD">Congo, the Democratic Republic of the </option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="CI">Cote d'Ivoire </option>
                                  <option value="HR">Croatia (Hrvatska)</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
                                  <option value="DK">Denmark </option>
                                  <option value="DJ">Djibouti</option>
                                  <option value="DM">Dominica</option>
                                  <option value="DO">Dominican Republic</option>
                                  <option value="TP">East Timor</option>
                                  <option value="EC">Ecuador </option>
                                  <option value="EG">Egypt </option>
                                  <option value="SV">El Salvador </option>
                                  <option value="GQ">Equatorial Guinea </option>
                                  <option value="ER">Eritrea </option>
                                  <option value="EE">Estonia </option>
                                  <option value="ET">Ethiopia</option>
                                  <option value="FK">Falkland Islands (Malvinas) </option>
                                  <option value="FO">Faroe Islands </option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland </option>
                                  <option value="FX">France, Metropolitan</option>
                                  <option value="GF">French Guiana </option>
                                  <option value="PF">French Polynesia</option>
                                  <option value="TF">French Southern Territories </option>
                                  <option value="GA">Gabon </option>
                                  <option value="GM">Gambia</option>
                                  <option value="GE">Georgia </option>
                                  <option value="GH">Ghana </option>
                                  <option value="GI">Gibraltar </option>
                                  <option value="GR">Greece</option>
                                  <option value="GL">Greenland </option>
                                  <option value="GD">Grenada </option>
                                  <option value="GP">Guadeloupe</option>
                                  <option value="GU">Guam</option>
                                  <option value="GT">Guatemala </option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau </option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti </option>
                                  <option value="HM">Heard and Mc Donald Islands </option>
                                  <option value="VA">Holy See (Vatican City State) </option>
                                  <option value="HN">Honduras</option>
                                  <option value="HK">Hong Kong </option>
                                  <option value="HU">Hungary </option>
                                  <option value="IS">Iceland </option>
                                  <option value="IN">India </option>
                                  <option value="ID">Indonesia </option>
                                  <option value="IR">Iran (Islamic Republic of)</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland </option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy </option>
                                  <option value="JM">Jamaica </option>
                                  <option value="JP">Japan </option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya </option>
                                  <option value="KI">Kiribati</option>
                                  <option value="KP">Korea, Democratic People's Republic of</option>
                                  <option value="KR">Korea, Republic of</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Lao People's Democratic Republic</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon </option>
                                  <option value="LS">Lesotho </option>
                                  <option value="LR">Liberia </option>
                                  <option value="LY">Libyan Arab Jamahiriya</option>
                                  <option value="LI">Liechtenstein </option>
                                  <option value="LT">Lithuania </option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MO">Macau </option>
                                  <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                  <option value="MG">Madagascar</option>
                                  <option value="MW">Malawi</option>
                                  <option value="MY">Malaysia</option>
                                  <option value="MV">Maldives</option>
                                  <option value="ML">Mali</option>
                                  <option value="MT">Malta </option>
                                  <option value="MH">Marshall Islands</option>
                                  <option value="MQ">Martinique</option>
                                  <option value="MR">Mauritania</option>
                                  <option value="MU">Mauritius </option>
                                  <option value="YT">Mayotte </option>
                                  <option value="MX">Mexico</option>
                                  <option value="FM">Micronesia, Federated States of </option>
                                  <option value="MD">Moldova, Republic of</option>
                                  <option value="MC">Monaco</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="MS">Montserrat</option>
                                  <option value="MA">Morocco </option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar </option>
                                  <option value="NA">Namibia </option>
                                  <option value="NR">Nauru </option>
                                  <option value="NP">Nepal </option>
                                  <option value="NL">Netherlands </option>
                                  <option value="AN">Netherlands Antilles</option>
                                  <option value="NC">New Caledonia </option>
                                  <option value="NZ">New Zealand </option>
                                  <option value="NI">Nicaragua </option>
                                  <option value="NE">Niger </option>
                                  <option value="NG">Nigeria </option>
                                  <option value="NU">Niue</option>
                                  <option value="NF">Norfolk Island</option>
                                  <option value="MP">Northern Mariana Islands</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PW">Palau </option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines </option>
                                  <option value="PN">Pitcairn</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="PR">Puerto Rico </option>
                                  <option value="QA">Qatar </option>
                                  <option value="RE">Reunion </option>
                                  <option value="RO">Romania </option>
                                  <option value="RU">Russian Federation</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="KN">Saint Kitts and Nevis </option>
                                  <option value="LC">Saint LUCIA </option>
                                  <option value="VC">Saint Vincent and the Grenadines</option>
                                  <option value="WS">Samoa </option>
                                  <option value="SM">San Marino</option>
                                  <option value="ST">Sao Tome and Principe </option>
                                  <option value="SA">Saudi Arabia</option>
                                  <option value="SN">Senegal </option>
                                  <option value="SC">Seychelles</option>
                                  <option value="SL">Sierra Leone</option>
                                  <option value="SG">Singapore </option>
                                  <option value="SK">Slovakia (Slovak Republic)</option>
                                  <option value="SI">Slovenia</option>
                                  <option value="SB">Solomon Islands </option>
                                  <option value="SO">Somalia </option>
                                  <option value="ZA">South Africa</option>
                                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                                  <option value="ES">Spain </option>
                                  <option value="LK">Sri Lanka </option>
                                  <option value="SH">St. Helena</option>
                                  <option value="PM">St. Pierre and Miquelon </option>
                                  <option value="SD">Sudan </option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                  <option value="SZ">Swaziland </option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland </option>
                                  <option value="SY">Syrian Arab Republic</option>
                                  <option value="TW">Taiwan, Province of China </option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania, United Republic of</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TG">Togo</option>
                                  <option value="TK">Tokelau </option>
                                  <option value="TO">Tonga </option>
                                  <option value="TT">Trinidad and Tobago </option>
                                  <option value="TN">Tunisia </option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="TC">Turks and Caicos Islands</option>
                                  <option value="TV">Tuvalu</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine </option>
                                  <option value="AE">United Arab Emirates</option>
                                  <option value="UM">United States Minor Outlying Islands</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Vietnam</option>
                                  <option value="VG">Virgin Islands (British)</option>
                                  <option value="VI">Virgin Islands (U.S.)</option>
                                  <option value="WF">Wallis and Futuna Islands</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="YU">Yugoslavia</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                                </select></td>
                            </tr>
                            <tr>
                              <td><label>Zip/postal code</label></td>
                              <td><input data-validate="required:method=authorizenet;ship_to_address=1" name="instant_webstore[ship_to_postal]" size="10"></td>
                            </tr>
                          </table>
                          <table cellspacing="0">
                            <tr>
                              <td><label>Credit card number *</label></td>
                              <td><input data-validate="required:method=authorizenet" name="instant_webstore[card_num]"></td>
                            </tr>
                            <tr>
                              <td><label>Expiration date *</label></td>
                              <td><table cellspacing="0">
                                  <tr>
                                    <td><input data-validate="required:method=authorizenet" name="instant_webstore[exp_date]"></td>
                                    <td></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td><label>Security code *</label></td>
                              <td><input data-validate="required:method=authorizenet" name="instant_webstore[card_code]" size="10"></td>
                            </tr>
                          </table>
                          <hr>
                          <div class="webstore-clear cart-totals">
                            <div class="left">* Required fields</div>
                            <div class="right">
                              <label>Subtotal</label>
                              <span class="cart-subtotal">$0.00</span><br>
                              <label>Shipping</label>
                              <span class="cart-shipping">$0.00</span><br>
                              <label>Tax</label>
                              <span class="cart-tax">$0.00</span><br>
                              <label>Discount</label>
                              <span class="cart-discount">$0.00</span><br>
                              <br>
                              <label>Grand Total</label>
                              <span class="cart-total">$0.00</span><br>
                              <br>
                              <button class="right authorizenet" type="button" id="checkout-order"><span>Place Order</span></button>
                            </div>
                            <div class="right cart-options">
                              <label>Discount code</label>
                              <input class="discount">
                              <br>
                              <select class="shipping" data-validate="required">
                                <option value="">Choose a shipping method</option>
                              </select>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- DC Instant.Webstore End --> 
              
              <!-- DC Instant.Webstore Settings --> 
              <script type="text/javascript">
	   $x=jQuery.noConflict();
$x('#cart-list').instant('webstore', {
 
// PAYMENT SETTINGS
// To configure advanced settings, edit dcodes/webstore/js/jquery.instant.webstore.js
 
    sandbox: false, // enable sandbox to test payment without incurring real charges. Set to false to accept real payments.
    authorizeNetSignature: 'http://yourdomain.com/dcodes/webstore/authorize.net.php', // return path to authorize.net.php. Make sure you edit this file located in dcodes/webstore/authorize.net.php to configure your Authorize.Net login/key
    paypaluser: 'paypal', // enter your paypal username, for example if your paypal address is paypal@mydomain.com, enter "paypal" here
    paypaldomain: 'dcodes.net', // enter your paypal domain, for example if your paypal address is paypal@mydomain.com, enter "mydomain.com" here
    skrilluser: '', // enter your skrill (moneybookers) user name
    skrilldomain: '', // enter your skrill (moneybookers) domain name
    amazonmerchant: '', // enter your amazon payments username/id
    googlemerchant: '', // enter your google checkout username/id
    returnurl: 'http://www.yourdomain.com/thankyou-for-your-order.html', // enter your return URL here after payment success. Return URL should be a thank you/confirmation page.
    properties: [ 'thumb', 'title', 'description' ],
    cartitem: '<div class="left"><img src="{thumb}"></div>'
        + '<div class="right">'
        + '<span class="title">{title}</span>'
        + '<span class="description">{description}<span class="gradient"></span></span>'
        + '<input class="quantity" value="{quantity}">'
        + '<span class="price"><small><span>{pricesingle}</span></small><span>{pricetotal}</span></span>'
        + '</div>',
    discountCodes: { // define coupon codes here
        '10PERCENT': '10%', // coupon code is 10PERCENT, discount items by 10%
        '10DOLLARS': 10, // coupon code is 10DOLLARS, discount items by $10
        '2FOR10': function () { // coupon code is 2FOR10, let users select any two items for $10
            return this.quantity === 2 ? (this.subtotal + this.shipping + this.tax) - 10 : 0;
        },
        'FREESHIPPINGOVER100': function () { // make shipping free if users spend over $100
            return this.subtotal > 100 ? this.shipping : 0;
        }
    },
             
    geolocation: true, // Set this to true to use instant.webstore's experimental geolocation, which utilizes services of geoplugin.com, a third-party provider.
 
 // tax shipping: enable/disable tax on shipping (edit in dcodes/webstore/js/jquery.instant.webstore.js)
             
    shippingType: 'flat', // 'flat' = flat rate shipping fee, 'fixed' = fixed fee per item, 'range', or 'variable' = % based on cost of shopping cart total (e.g. 0.10 = 10%)
             
    shippingRate: {
        'USPS': 9.95, // 9.95 = $9.95 (fixed) / 0.10 = 10% (variable)
        'UPS Ground': 14.95,
        'FedEx Express': 21.95
    }
});
</script>
              <div class="dc_clear"></div>
              <!-- line break/clear line --> 
              
              <br />
              <br />
              <br />
              
              <!-- /////////////////////////////////////////////////////////////////////////////////////////////// dCodes Hosted Examples: End -->
              
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

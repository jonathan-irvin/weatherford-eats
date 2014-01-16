<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$title?></title>
<meta name="description" content="Your source for the best eats in Weatherford, OK">
<meta name="keywords" content="website, business, store" />
<meta name="robots" content="index, follow" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Mobile Specific Metas  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
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

<?=$google_maps?>

</head>

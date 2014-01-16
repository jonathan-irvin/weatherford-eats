<!-- Map Settings Start -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var gmap;
function initialize() {
    var myOptions = {
   	 zoom: 15,
   	 center: new google.maps.LatLng(<?=$lat?>,<?=$long?>), // google map location to show
   	 mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    gmap = new google.maps.Map(document.getElementById('gmap_contact'),myOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Map Settings End -->

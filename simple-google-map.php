<?php
/**
 * Class simple_google_map
 * Google Maps API script in embedded in this file - url includes reference
 * to callback function 'initMap' - https://maps.googleapis.com/maps/api/js?callback=initMap
 */
class simple_google_map {

	public $lat;
	public $long;
	public $title;

	public function __construct( $lat, $long, $title ) {

		$this->lat = $lat;
		$this->long = $long;
		$this->title = $title;
	}

	public function output_map() { ?>

		<script>
			function initMap() {

				var myLatLng = {lat: <?php echo $this->lat; ?>, lng: <?php echo $this->long; ?>};

				var mapDiv = document.getElementById('map');

				var map = new google.maps.Map(mapDiv, {
					center: myLatLng,
					zoom: 8,
					scrollwheel: false
				});

				var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					title: '<?php echo $this->title; ?>'
				});
			}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
		        async defer></script>

		<div class="google-map-outer-wrapper">

				<div id="map"></div>

		</div>

	<?php }

}

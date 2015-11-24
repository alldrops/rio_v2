<?php /* Template Name: Template - Contact */ ?>

<?php include("header.php"); ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
		// Get the HTML DOM element that will contain your map 
	    var mapElement = document.getElementById('map');
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,
            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(49.292374, -123.134339) 
        };
        // Get the HTML DOM element that will contain your map 
        var mapElement = document.getElementById('map');
        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(49.292374, -123.134339),
            map: map
            //icon: 'http://alldrops.ca/rio/wp-content/themes/rio/images/marker.png'
        });
    }
</script>

<?php while ( have_posts() ) : the_post(); ?>

	<?php # include("inc/top-banner.php") ?>

    <section class="banner banner--menu">
        
    </section>

	<section class="row">
        <h1 class="page-title text-center has-border">Get in touch with us</h1>
		<?php the_content(); ?>
	</section>

	<section class="map">
		<div id="map"></div>
	</section>

<?php endwhile; ?>

<?php include("footer.php"); ?>
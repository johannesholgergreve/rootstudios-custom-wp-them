<?php
/*
Template Name: Kontakt
*/
?>

<?php include("header.php") ?>




<div class="heroSectionLarge" style="background-image: url('<?php echo get_field("large_hero_background_image");?>');">
	<div class="container">
		<div class="col-md-7 heroTextBox">
			<div class="heroTexts">
				<h1><?php echo get_field("heading");?></h1><br>
				<h2><?php echo get_field("sub_heading");?></h2>
			</div>
		</div>
	</div>
</div>



	<div id="kontaktContentWrap" class="col-sm-8 col-md-9">
		<div class="col-sm-12 col-md-6 leftCol">
			<h3>Kom ind til en <br> gratis kop kaffe</h3>
			<p>Vores kontorer er placeret i hjertet af Nørrebro, lige ved den røde plads. Offentlig transport: Bus 5A og 350S. Tog linje F. <br><br>  

	Lad os tage en uforpligtende snak om jeres projekt eller kom forbi til en gratis kop kaffe og lidt rådgivning.

	</p>
		</div>
		<div class="col-sm-6 rightCol">
			<h3>Ring</h3>
			<h4>+45 42 70 70 40</h4>
			<br>
			<h3>Mail</h3>
			<a href="mailto:hello@rootstudios.dk">hello@rootstudios.dk</a><br><br><br><br>
		</div>

	</div>


	<div id="map" class="col-sm-4 col-md-3">

	</div>
	<div class="clearfix"></div>






<script src="<?php include bloginfo('template_url'); ?>/resources/js/jquery-2.1.4.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAH3t3RDnsL0raYK6dQG25e7IOGQsotLSU"></script>

<script type="text/javascript">
           
    var center,
   		kontaktBoxHeight = $('#kontaktContentWrap'),
		windowWidth = $(window).innerWidth();



	if (windowWidth > 768){
		setTimeout(function(){
			mapBoxHeight = $(kontaktBoxHeight).outerHeight();
			console.log(mapBoxHeight);
			$("#map").height(mapBoxHeight+"px");
		}, 50);
	}
	else{
		$("#map").height("300px");
	}

	$(window).resize(function(){
		if (windowWidth > 768){
			mapBoxHeight = $(kontaktBoxHeight).outerHeight();
			console.log(mapBoxHeight);
			$("#map").height(mapBoxHeight+"px");
		}
		else{
			$("#map").height("300px");
		}
	});






    google.maps.event.addDomListener(window, 'load', init);

    function init() {

        var mapOptions = {

            // Zoom level (always required)
            zoom: 16,

            // hide default controls
			disableDefaultUI: true,
			scrollwheel: false,
		    navigationControl: false,
		    mapTypeControl: false,
		    scaleControl: false,
		    draggable: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(55.69822, 12.54041), // Esromgade 15

            // Map JSON styling 
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        };

        // Get DOM element to hold the Map
        var mapElement = document.getElementById('map');

        // Create the Google Map inside the mapElement
        var map = new google.maps.Map(mapElement, mapOptions);

        // Marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(55.69822, 12.54041),
            map: map,
            title: 'Root Studios!'
        });


        // Center map on resize
        google.maps.event.addDomListener(window, "resize", function() {
		    var center = map.getCenter();
		    google.maps.event.trigger(map, "resize");
		    map.setCenter(center); 
		});


        $(document).on("click", "#map", function(e){
        	map.set('draggable', true);
        	map.set('disableDefaultUI', false);
        })

		$(document).mouseup(function (e) {
		    var container = $("#map");

		    if (!container.is(e.target) // if the target of the click isn't the container...
		        && container.has(e.target).length === 0) // ... nor a descendant of the container
		    {
		        map.set('draggable', false);
        		map.set('disableDefaultUI', true);
		    }
		});



    }

</script>



<?php include("footer.php") ?>
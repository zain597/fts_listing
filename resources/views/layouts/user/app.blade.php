<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/main-color.css')}}" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">



<!-- Banner
================================================== -->
<div class="main-search-container plain-color">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-search-headlines">
						<h2>
							Find Nearby
							<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
							<span class="typed-words"></span>
						</h2>
						<h4>Expolore top-rated attractions, activities and more</h4>
					</div>

					<div class="main-search-input">

						<div class="main-search-input-item">
							<input type="text" placeholder="What are you looking for?" value=""/>
						</div>

						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input id="autocomplete-input" type="text" placeholder="Location">
							</div>
							<a href="#"><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item">
							<select data-placeholder="All Categories" class="chosen-select" >
								<option>All Categories</option>
								<option>Shops</option>
								<option>Hotels</option>
								<option>Restaurants</option>
								<option>Fitness</option>
								<option>Events</option>
							</select>
						</div>

						<button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Search</button>

					</div>
				</div>
			</div>
			<!-- Features Categories -->
			<div class="row">
				<div class="col-md-12">
					<h5 class="highlighted-categories-headline">Or browse featured categories:</h5>

					<div class="highlighted-categories">
						<!-- Box -->
						<a href="listings-list-with-sidebar.html" class="highlighted-category">
					    	<i class="im im-icon-Home"></i>
					    	<h4>Apartments</h4>
						</a>

						<!-- Box -->
						<a href="listings-list-full-width.html" class="highlighted-category">
					    	<i class="im im-icon-Hamburger"></i>
					    	<h4>Eat &amp; Drink</h4>
						</a>

						<!-- Box -->
						<a href="listings-half-screen-map-list.html" class="highlighted-category">
					    	<i class="im im-icon-Electric-Guitar"></i>
					    	<h4>Events</h4>
						</a>

						<!-- Box -->
						<a href="listings-half-screen-map-list.html" class="highlighted-category">
					    	<i class="im im-icon-Dumbbell"></i>
					    	<h4>Fitness</h4>
						</a>
					</div>

				</div>
			</div>
			<!-- Featured Categories - End -->
		</div>

	</div>

	<!-- Main Search Photo Slider -->
	<div class="container msps-container">

		<div class="main-search-photo-slider">
			<div class="msps-slider-container">
				<div class="msps-slider">
					<div class="item"><img src="{{asset('frontend/images/category-box-01.jpg')}}" class="item" title="Title 1"/></div>
					<div class="item"><img src="{{asset('frontend/images/category-box-02.jpg')}}" class="item" title="Title 1"/></div>
					<div class="item"><img src="{{asset('frontend/images/category-box-03.jpg')}}" class="item" title="Title 1"/></div>
				</div>
			</div>
		</div>

		<div class="msps-shapes" id="scene">

			<div class="layer" data-depth="0.2">
				<svg height="40" width="40" class="shape-a">
					<circle cx="20" cy="20" r="17" stroke-width="4" fill="transparent" stroke="#C400FF" />
				</svg>
			</div>

			<div class="layer" data-depth="0.5">
				<svg width="90" height="90" viewBox="0 0 500 800" class="shape-b">
				<g transform="translate(281,319)">
				<path fill="transparent" style="transform:rotate(25deg)" stroke-width="35" stroke="#F56C83" fill  d="M260.162831,132.205081
				A18,18 0 0,1 262.574374,141.205081
				A18,18 0 0,1 244.574374,159.205081H-244.574374
				A18,18 0 0,1 -262.574374,141.205081
				A18,18 0 0,1 -260.162831,132.205081L-15.588457,-291.410162
				A18,18 0 0,1 0,-300.410162
				A18,18 0 0,1 15.588457,-291.410162Z"/></g></svg>
			</div>

			<div class="layer" data-depth="0.2" data-invert-x="false" data-invert-y="false" style="z-index: -10">
				<svg height="200" width="200" viewbox="0 0 250 250" class="shape-c">
				<path d="
				    M 0, 30
				    C 0, 23.400000000000002 23.400000000000002, 0 30, 0
				    S 60, 23.400000000000002 60, 30
				        36.599999999999994, 60 30, 60
				        0, 36.599999999999994 0, 30
				" fill="#FADB5F" transform="rotate(
				    -25,
				    100,
				    100
				) translate(
				    0
				    0
				) scale(3.5)"></path>
				</svg>
			</div>


			<div class="layer" data-depth="0.6" style="z-index: -10">
				<svg height="120" width="120" class="shape-d">
					<circle cx="60" cy="60" r="60" fill="#222" />
				</svg>
			</div>


			<div class="layer" data-depth="0.2">
				<svg height="70" width="70" viewBox="0 0 200 200"  class="shape-e">
					<path fill="#FF0066" d="M68.5,-24.5C75.5,-0.8,58.7,28.5,33.5,46.9C8.4,65.4,-25.2,73.1,-42.2,60.2C-59.2,47.4,-59.6,13.9,-49.8,-13.7C-40,-41.3,-20,-63.1,5.4,-64.8C30.7,-66.6,61.5,-48.3,68.5,-24.5Z" transform="translate(100 100)" />
				</svg>
			</div>

		</div>
	</div>



</div>
<!-- Header
================================================== -->
@include('layouts.user.header')
<!-- Header / End -->

<!-- Main Body / start -->
    @yield('content')
<!-- Main Body / end -->

<!-- Footer
================================================== -->
@include('layouts.user.footer')
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{asset('frontend/scripts/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/jquery-migrate-3.3.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/rangeslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/custom.js')}}"></script>


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="{{asset('frontend/scripts/leaflet.min.js')}}"></script>

<!-- Leaflet Maps Scripts -->
<script src="{{asset('frontend/scripts/leaflet-markercluster.min.js')}}"></script>
<script src="{{asset('frontend/scripts/leaflet-gesture-handling.min.js')}}"></script>
<script src="{{asset('frontend/scripts/leaflet-listeo.js')}}"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="{{asset('frontend/scripts/leaflet-autocomplete.js')}}"></script>
<script src="{{asset('frontend/scripts/leaflet-control-geocoder.js')}}"></script>



<!-- Typed Script -->
<script type="text/javascript" src="{{asset('frontend/scripts/typed.js')}}"></script>
<script>
var typed = new Typed('.typed-words', {
strings: ["Attractions"," Restaurants"," Hotels"],
	typeSpeed: 80,
	backSpeed: 80,
	backDelay: 4000,
	startDelay: 1000,
	loop: true,
	showCursor: true
});
</script>



<!-- Home Search Scripts -->
<script>
    $(window).on('load', function() { $('.msps-shapes').addClass('shapes-animation'); });
</script>

<script src="{{asset('frontend/scripts/parallax.min.js')}}"></script>
<script>
const parent = document.getElementById('scene');
const parallax = new Parallax(parent, {
  limitX: 50,
  limitY: 50,
});


$('.msps-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1000,
    fade: true,
    cssEase: 'linear'
});

</script>


</body>
</html>

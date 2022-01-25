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

	<!-- Header Container
	================================================== -->
	@include('layouts.admin.header')
	<!-- Header Container / End -->
	<!-- Dashboard -->
	@yield('content')
	<!-- Dashboard / End -->


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


</body>
</html>

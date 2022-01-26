<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/main-color.css')}}" id="colors">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@stack('css')
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

@stack('modal')
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
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
	@if(Session::has('message'))
		var type="{{Session::get('alert-type')}}"
		switch(type){
			case 'info':
				toastr.info("{{Session::get('message')}}");
				breake;
			case 'success':
				toastr.success("{{Session::get('message')}}");
				breake;
			case 'warning':
				toastr.warning("{{Session::get('message')}}");
				breake;
			case 'error':
				toastr.error("{{Session::get('message')}}");
				breake;
	}
	@endif
</script>
@stack('js')
<script>
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
</body>
</html>

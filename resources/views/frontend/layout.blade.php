


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/booking-tour-package.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2019 20:50:53 GMT -->
<head>
    <title>The Travel - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="{{ asset('/') }}images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}css/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/materialize.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/mob.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/animate.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

   <!-- Start Header Section -->
   @include('frontend.inc.header')
    <!--END HEADER SECTION-->
	
   @yield('content')
	
	{{-- @include('frontend.inc.footer') --}}
	@include('frontend.inc.script')
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/booking-tour-package.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2019 20:50:53 GMT -->
</html>
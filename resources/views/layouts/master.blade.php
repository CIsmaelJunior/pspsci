<!DOCTYPE html>
<html lang="fr">

<style>
	.blink {
		animation: blink-animation 1.3s steps(5, start) infinite;
    background: linear-gradient(90deg, #ff7f50, #228b22); /* Dégradé orange à vert foncé */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
    text-shadow: 0 0 10px rgba(190, 93, 134, 0.6);
}

@keyframes blink-animation {
    to {
        visibility: hidden;
    }
	0%, 100% {
        opacity: 1;
    }
    70% {
        opacity: 0.7;
    }
	
}

@-webkit-keyframes blink-animation {
    to {
        visibility: hidden;
    }
}
</style>
<head>
<meta charset="utf-8">

<!-- Primary Meta Tags -->
<title>@yield('title', 'La plateforme du Secteur Privé de la Santé en Côte d\'Ivoire')</title>
<meta name="title" content="@yield('title', 'La plateforme du Secteur Privé de la Santé en Côte d\'Ivoire')">
<meta name="description" content="Découvrez la plateforme dédiée au Secteur Privé de la Santé en Côte d'Ivoire. Collaboration et innovation pour une santé optimale.">
<meta content="PSPSCI, Plateforme Santé Privée, Secteur Privé de la Santé, Côte d'Ivoire, Collaboration, Innovation, Santé optimale" name="keywords">
<meta http-equiv="keywords" name="keywords" content="PSPSCI, Plateforme Santé Privée, Secteur Privé de la Santé, Côte d'Ivoire, Collaboration, Innovation, Santé optimale">
<meta name="Copyright" content="PSPSCI">
<meta name="Author" content="AMOSK CONSULTING">
<meta name="robots" content="index, follow">


<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://pspsci.org/">
<meta property="og:title" content="La plateforme du Secteur Privé de la Santé en Côte d'Ivoire">
<meta property="og:description" content="Découvrez la plateforme dédiée au Secteur Privé de la Santé en Côte d'Ivoire. Collaboration et innovation pour une santé optimale.">
<meta property="og:image" content="http://pspsci.org/images/resource/video-img.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="http://pspsci.org/">
<meta property="twitter:title" content="La plateforme du Secteur Privé de la Santé en Côte d'Ivoire">
<meta property="twitter:description" content="Découvrez la plateforme dédiée au Secteur Privé de la Santé en Côte d'Ivoire. Collaboration et innovation pour une santé optimale.">
<meta property="twitter:image" content="http://pspsci.org/images/resource/video-img.jpg">

<!-- Favicons -->
<!-- Stylesheets -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">


<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    @include('_header')
    <!-- End Main Header -->

	<div class="">
		@yield('content')
	</div>
	
	<!--Main Footer-->
	@include('_footer')
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Scroll to top-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/scrollbar.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->
</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AMTC 2024 | Congrès Africain du Tourisme Médical 2024 Template">
    <meta name="keywords" content="AMTC 2024 | Congrès Africain du Tourisme Médical 2024, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMTC 2024 | Congrès Africain du Tourisme Médical 2024</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('amtc24/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('amtc24/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('amtc24/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('amtc24/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('amtc24/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('amtc24/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('amtc24/css/style.css') }}" type="text/css">

    <style>
        .gradient-text {
            background: linear-gradient(90deg, #228bf2, #3cff00, #2cf8f2);
            background-size: 300% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
            animation: gradient-animation 5s ease infinite;
        }
        
        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }


    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="{{asset('amtc24/img/conceptionCollectionHommes.jpg')}}" style="height: 80vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <span>27 au 29 Nov 2024, Latrille events, Abidjan, Côte d'Ivoire</span>
                        <h2>Changez de vison sur<br/>La santé en Afrique.</h2>
                        <a href="https://airtable.com/appHOIxrjBtJio7nV/pag5TyxCOGW3uIgGe/form" target="_blank" class="primary-btn">INSCRIPTION</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- <img src="img/hero-right.png" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Counter Section Begin -->
    <section class="counter-section bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="counter-text">
                        <span>Date du congrès</span>
                        <h3>Temps restant <br />avant l'événement.</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cd-timer" id="countdown">
                        <div class="cd-item">
                            <span>40</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>46</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>32</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="{{asset('amtc24/img/lasantecestlaffairedetous.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-text" style="padding-top: 10px;">
                        <h2>Congrès Africain du Tourisme Médical 2024 : <span class="gradient-text">Vers une Synergie Durable en Santé</span></h2>
                        <p>Participez au Congrès Africain du Tourisme Médical 2024, un événement incontournable dédié à la coopération et aux investissements dans le secteur de la santé en Afrique.</p>
                        <!-- <p>Rejoignez-nous pour le Congrès Africain du Tourisme Médical 2024, un événement phare réunissant des experts, des décideurs et des investisseurs autour du thème « Coopération et Investissements dans le Secteur de la Santé en Afrique ». Au programme, des conférences, des ateliers et des panels de discussion visant à explorer les opportunités de partenariat et à promouvoir l'innovation dans le domaine du tourisme médical. Ensemble, construisons un avenir où la santé et le bien-être en Afrique sont accessibles à tous. Ne manquez pas cette occasion unique de networker et d'échanger des idées avec des leaders du secteur !</p> -->
                        <ul>
                            <li><span class="icon_check"></span> Échanges d'expertise</li>
                            <li><span class="icon_check"></span> Opportunités d'investissement</li>
                            <li><span class="icon_check"></span> Panels de discussion</li>
                            <li><span class="icon_check"></span> Networking</li>
                        </ul>
                        <a href="#" class="ha-btn">Participer Maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Team Member Section Begin -->
    @if (count($speakers) > 0)
    <section class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2> Ils seront présent pour l'AMTC</h2>
                        <p>Voici nos intervenants, vous pouvez consulter les informations de chaque personne.</p>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($speakers as $speaker)
        {{-- <div class="member-item set-bg" data-setbg="{{asset('storage/'.$speaker->photo)}}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>{{$speaker->name}}</h5>
                <span>{{$speaker->role}}</span>
            </div>
        </div> --}}


        <div class="member-item set-bg col-sm-12 col-md-4" data-setbg="{{asset($speaker->photo)}}" style="width:100%;">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>{{$speaker->name}}</h5>
                <span>{{$speaker->title}}</span>
            </div>
        </div>
        @endforeach
    </section>
    @endif
    <!-- Team Member Section End -->

    <!-- Schedule Section Begin -->
    <section class="schedule-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Le programme</h2>
                        <p>Ne ratez aucun moment important de ce fabuleux congrès.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <h5>Jour 1</h5>
                                    <p>27 Novemre 2024</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <h5>Jour 2</h5>
                                    <p>28 Novemre 2024</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <h5>Jour 3</h5>
                                    <p>29 Novembre 2024</p>
                                </a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{asset('amtc24/img/schedule-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Reception et installation</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> Adam williams</li>
                                                        {{-- <li><i class="fa fa-envelope"></i> john@Colorlib.com --}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 90:29 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> Latrille events
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{asset('amtc24/img/schedule-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Intervention du Président</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> Dr. Sery</li>
                                                        {{-- <li><i class="fa fa-envelope"></i> john@Colorlib.com --}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 09:30 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> Latrille events
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{asset('amtc24/img/schedule-3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Pause déjeuner</h4>
                                                    {{-- <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul> --}}
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Easy People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Intermediate People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section set-bg spad" data-setbg="{{asset('amtc24/img/pricing-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Prix des tickets</h2>
                        <p>Choisissez votre plan d'inscription</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>1 Day Pass</h4>
                        <div class="pi-price">
                            <h2>10.000</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="price-btn">S'inscrire <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item top-rated">
                        <div class="tr-tag">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>VIP</h4>
                        <div class="pi-price">
                            <h2><span></span>25.000</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                        </ul>
                        <a href="#" class="price-btn">S'inscrire <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>VVIP</h4>
                        <div class="pi-price">
                            <h2><span></span>100.000</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="price-btn">S'inscrire <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- latest BLog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Actualités récentes</h2>
                        <p>Ne ratez aucune actualité au sujet de l'évènement phare de la santé en Afrique.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="latest-item set-bg large-item" data-setbg="{{asset('amtc24/img/blog/latest-1.jpg')}}">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h4><a href="./blog-details.html">Improve You Business Cards And Enchan Your Sales</a></h4>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-item set-bg" data-setbg="{{asset('amtc24/img/blog/latest-2.jpg')}}">
                        <div class="li-tag">Experience</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html">All users on MySpace will know that there are millions of people out there.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                    <div class="latest-item set-bg" data-setbg="{{asset('amtc24/img/blog/latest-3.jpg')}}">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html">A Pocket PC is a handheld computer, which features many of the same capabilities.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest BLog Section End -->

    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container">
            <div class="newslatter-inner set-bg" data-setbg="{{asset('amtc24/img/newslatter-bg.jpg')}}">
                <div class="ni-text">
                    <h3>S'inscrire à la Newsletter</h3>
                    <p>Inscrivez-vous pour ne rien ratez de l'évènement : avant comme après</p>
                </div>
                <form action="#" class="ni-form">
                    <input type="text" placeholder="Votre email">
                    <button type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Lieu</h2>
                        <p>Latrille events</p>
                    </div>
                    <div class="cs-text">
                        <div class="ct-address">
                            <span>Address:</span>
                            <p>01BP 4145 Abidjan 01<br />Abidjan, Côte d'Ivoire</p>
                        </div>
                        <ul>
                            <li>
                                <span>Phone:</span>
                                +225 01 01 30 67 57
                            </li>
                            <li>
                                <span>Email:</span>
                                foasps@amtc-côtedivoire.com
                            </li>
                        </ul>
                        <div class="ct-links">
                            <span>Website:</span>
                            <p>https://amtc-côtedivoire.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2548818222003!2d-3.99896382376771!3d5.378055594600897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb525bf3f3fb%3A0xf110eea23e59a44b!2sLatrille%20Event!5e0!3m2!1sfr!2sci!4v1728669309283!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" height="400" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('amtc24/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('amtc24/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('amtc24/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('amtc24/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('amtc24/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('amtc24/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('amtc24/js/main.js')}}"></script>
</body>

</html>
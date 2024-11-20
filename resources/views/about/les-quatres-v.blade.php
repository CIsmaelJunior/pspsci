@extends('layouts.master')


@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('img/backgrounds/5.jpg')}})">
    <div class="auto-container">
        <h2>Les quatres (04) V</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home-site')}}">Accueil</a></li>
            <li>À propos</li>
            <li>Les quatres (04) V</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- About-us -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Side / Services Detail -->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="services-detail">
                    <div class="inner-box">
                        <div class="bold-text"></div>
                        <div class="text">
                            <!-- Two Column -->
                            <!-- <div class="two-column">
                            </div> -->

                            <div class="row ">

                                <div class="col-sm-12">
                                    <div class="row clearfix">
                                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <ul class="list-style-one">
                                                    <li><span style="color: #1ed501!important; font-weight: bold">V</span>olonté affirmée du Ministère de la Santé d’être en partenariat avec le secteur privé de la santé à travers la plateforme du secteur privé de la santé en Côte d’Ivoire (PSPSCI) en vue d’améliorer l’accessibilité aux soins de qualité, la gestion et la sécurité dans les structures de santé du secteur privé de la santé sur l’ensemble du territoire national (Accord de partenariat signé le 25 juin 2020).</li>
                                                    <li><span style="color: #1ed501!important; font-weight: bold">V</span>olonté affirmée de la plateforme du secteur privé de la santé en Côte d’Ivoire (PSPSCI) d’accompagner l’Etat à travers le Ministère en charge de la Santé et les Ministères techniques (Accord de partenariat signé le 25 juin 2020).</li>
                                                    <li><span style="color: #1ed501!important; font-weight: bold">V</span>olonté de la plateforme du secteur privé de la santé en Côte d’Ivoire (PSPSCI) d’unir, d’organiser, d’intégrer et d’accompagner tous les acteurs du secteur privé de la santé (Statuts).</li>
                                                    <li><span style="color: #1ed501!important; font-weight: bold">V</span>olonté de la plateforme du secteur privé de la santé en Côte d’Ivoire (PSPSCI) à collaborer avec tous les partenaires au developpement technique et financier (Statuts).</li>
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
            
            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    
                
                    <!-- Sidebar Widget / Contact Widget-->

                    <div class="sidebar-widget contact-widget">
                        <div class="widget-content" style="background-image: url({{asset('img/backgrounds/7.jpg')}});">
                            <h3>Bésoin de renseignément ?</h3>
                            <a href="contact.php" class="theme-btn btn-style-one"><span class="txt">Contactez-nous</span></a>
                        </div>
                    </div>
                
                </aside>
            </div>
            
        </div>
    </div>
</div>
<!-- End About-us -->
@endsection
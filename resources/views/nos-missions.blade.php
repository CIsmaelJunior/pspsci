@extends('layouts.master')


@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('img/backgrounds/5.jpg')}})">
    <div class="auto-container">
        <h2>Nos missions</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home-site')}}">Accueil</a></li>
            <li>Nos missions</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Mission Section -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <h2>Nos Missions</h2>
        </div>
        
        <div class="row clearfix">
            
            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="content">
                        <div class="icon-box">
                            <span class="icon flaticon-desk-1"></span>
                        </div>
                        <h3><a href="#details"> Répertorier, regrouper et aider</a></h3>
                        <div class="text">à organiser tous les acteurs privés de la santé en Côte d’ivoire.</div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="content">
                        <div class="icon-box">
                            <span class="icon flaticon-hospital"></span>
                        </div>
                        <h3><a href="#details">Maintenir avec tout partenaire, national, régional et international</a></h3>
                        <div class="text">un contact privilégié de collaboration.</div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="content">
                        <div class="icon-box">
                            <span class="icon flaticon-hotel"></span>
                        </div>
                        <h3><a href="#details">Assurer, <br> maintenir <br> et preserver </a></h3>
                        <div class="text">le bon développement de ses adhérents.</div>
                        
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="content">
                        <div class="icon-box">
                            <span class="icon flaticon-house-1"></span>
                        </div>
                        <h3><a href="#details">Identifier<br>et prioriser</a></h3>
                        <div class="text">les besoins du secteur privé de la santé.</div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="content">
                        <div class="icon-box">
                            <span class="icon flaticon-shop"></span>
                        </div>
                        <h3><a href="#details">Maintenir un contact permanent avec le pouvoir public</a></h3>
                        <div class="text">présence aux discussions</div>
                        
                    </div>
                </div>
            </div>
            
            
            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="content">
                        <div class="icon-box">
                            <span class="icon flaticon-apartment-1"></span>
                        </div>
                        <h3><a href="#details">Avoir <br>une représentation</a></h3>
                        <div class="text">décentralisée sur l’ensemble du territoire national.</div>
                    </div>
                </div>
            </div>
            
            
            
        </div>
        
    </div>
</section>
<!-- End Mission Section -->
@endsection
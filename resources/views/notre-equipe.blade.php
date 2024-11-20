@extends('layouts.master')


@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('img/backgrounds/5.jpg')}})">
    <div class="auto-container">
        <h2>Notre équipe</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home-site')}}">Notre équipe</a></li>
            <li>Notre équipe</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Team Section -->
<section class="team-section style-two mt-5"  style="background-color: #fff!important;">
    <style>
        .team-section.style-two::before {
            background-color: #fcfcfc;
        }
    </style>
    <div class="auto-container mt-2">
        <!-- Sec Title -->
        <!-- <div class="sec-title black centered p-3" style="background-color: rgb(163, 235, 162); border-radius: 30px;">
            <h2 class="" style="color: white!important;">Notre équipe</h2>
            <div class="text mx-auto" style="color: white; width:700px; justify-content: center;">afin d'avoir un seul interlocuteur clé, engagé, organisé pour faciliter l’accessibilité de tous à des services de santé de qualité.</div>
        </div> -->
        
        <div class="clearfix">

            @foreach ($teams as $team)
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-3 col-sm-6 px-2">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{$team->photo_path}}" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    @if ($team->facebook)
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    @endif

                                    @if ($team->instagram)
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    @endif

                                    @if ($team->linkedin)
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    @endif

                                    @if ($team->x)
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    @endif

                                    @if ($team->skype)
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('site.teams.show', ['team' => $team])}}">{{$team->full_name}}</a></h3>
                            <div class="designation text-warning"> <strong>{{$team->fonction}}</strong></div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        
    </div>
</section>
<!-- End Team Section -->

<!-- Call To Action Section -->
<section class="call-to-action-section" style="background-image: url({{asset('img/ressources/medecin-tir-moyen-portant-masque-facial.jpg')}}); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <div class="auto-container">
        <h2>Voulez vous faire une demande d'adhésion ? </h2>
        <div class="text">Remplissez notre formulaire d'adhésion pour intégrer  <br> notre équipe dynamique.</div>
        <a href="#adhesion" class="theme-btn btn-style-two"><span class="txt">Formulaire d'adhésion</span></a>
    </div>
</section>
<!-- End Call To Action Section -->
@endsection
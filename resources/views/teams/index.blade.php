@extends('layouts.master')


@section('content')
<!-- Team Section -->
<section class="team-section style-two mt-5"  style="background-color: #fff!important;">
    <style>
        .team-section.style-two::before {
            background-color: #fcfcfc;
        }
    </style>
    <div class="auto-container mt-5">
        <!-- Sec Title -->
        <!-- <div class="sec-title black centered p-3" style="background-color: rgb(163, 235, 162); border-radius: 30px;">
            <h2 class="" style="color: white!important;">Notre équipe</h2>
            <div class="text mx-auto" style="color: white; width:700px; justify-content: center;">afin d'avoir un seul interlocuteur clé, engagé, organisé pour faciliter l’accessibilité de tous à des services de santé de qualité.</div>
        </div> -->
        
        <div class="clearfix">
            
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-3 col-sm-6 px-2">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/dr-sery-pr.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="bio-president-pspsci.php">Dr Jean Maurin Séry</a></h3>
                        <div class="designation">Président</div>
                    </div>
                </div>
            </div>
            
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-3 col-sm-6 px-2">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/dr-koffi-vc.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="bio-mme-koffi-vice-president-pspsci.php">Annick Joelle KOFFI</a></h3>
                        <div class="designation text-warning">Vice-présidente</div>
                    </div>
                </div>
            </div>
            
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-3 col-sm-6 px-2">
                <div class="inner-box ">
                    <div class="image">
                        <img src="images/resource/dr-kouakou-vc.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="bio-kouakou-vice-president-pspsci.php">Dr Kouakou Issoufou</a></h3>
                        <div class="designation text-warning">Vice-président</div>
                    </div>
                </div>
            </div>
            
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-3 col-sm-6 px-2">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/dr-guy-roger-zougrou-vc.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="guy-roger-zougrou.php">Dr Guy Roger ZOUGROU</a></h3>
                        <div class="designation text-warning">Vice-président</div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</section>
<!-- End Team Section -->

<!-- Call To Action Section -->
<section class="call-to-action-section" style="background-image: url(images/resource/medecin-tir-moyen-portant-masque-facial.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <div class="auto-container">
        <h2>Voulez vous faire une demande d'adhésion ? </h2>
        <div class="text">Remplissez notre formulaire d'adhésion pour intégrer  <br> notre équipe dynamique.</div>
        <a href="#adhesion" class="theme-btn btn-style-two"><span class="txt">Formulaire d'adhésion</span></a>
    </div>
</section>
<!-- End Call To Action Section -->
@endsection
@extends('layouts.master')


@section('content')
<!--Page Title-->
	
<section class="page-title" style="background-image:url({{asset("img/backgrounds/5.jpg")}})">
    <div class="auto-container">
        <h2>Nos valeurs</h2>
        <ul class="page-breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li>À propos</li>
            <li>Nos valeurs</li>
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

                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <h3 class="mini-head"><span class="color: green!important;">1.</span> La Santé</h3>
                                                <p>Elle est primordiale et constitue le but ultime de nos actions. Nous sommes ainsi convaincu que la santé de l’humain est étroitement liée à la santé animale et environnementale.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <h3 class="mini-head"><span class="color: green!important;">2.</span> La cohésion</h3>
                                                <p>C’est la force qui stabilise et donne du sens à notre unité. Pour la santé nous harmonisons nos points de vues et actions. Nous sommes pour le concept “One Health”.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <h3 class="mini-head"><span class="color: green!important;">3.</span> Solidarité</h3>
                                                <p>Nous nous engageons à une assistance mutuelle entre membres. Il s’agit aussi pour nous de travailler conjointement, solidairement pour établir et mettre à jour les normes de santé.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <h3 class="mini-head"><span class="color: green!important;">4.</span> La compétence</h3>
                                                <p>Nous partageons et unissons nos competences pour la santé. Nous nous disposons à utiliser ces compétences pour améliorer la législation et la réglementation de la santé.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <h3 class="mini-head"><span class="color: green!important;">5.</span> L'unité</h3>
                                                <p>C’est le fondement de notre existence : nous unir et unir nos atouts et efforts pour la santé.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <h3 class="mini-head"><span class="color: green!important;">6.</span> L'élévation</h3>
                                                <p>Nous travaillons ensemble et avec tous, pour tout ce qui contribue au bien être de l’humain et de son élévation, sa valorisation.</p>
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
@extends('layouts.master')


@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('img/backgrounds/5.jpg')}})">
    <div class="auto-container">
        <h2>NOS ENGAGEMENTS AVEC L’ÉTAT</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home-site')}}">Accueil</a></li>
            <li>À propos</li>
            <li>NOS ENGAGEMENTS AVEC L’ÉTAT</li>
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
                                                    <li>Contribuer par ses actions au renforcement du dialogue Public/Privé dans le secteur de la santé et à l'optimisation du partenariat Public/Privé.</li>
                                                    <li>Œuvrer par des actions stratégiques à la promotion de la politique nationale de santé et à la mise en oeuvre du PNDS du Gouvernement.</li>
                                                    <li>Œuvrer à l'autorégulation de l'écosystème sanitaire privé et à l'amélioration de l'environnement des affaires du secteur privé de la santé.</li>
                                                    <li>Promouvoir l'assimilation et l'observance stricte de la réglementation sanitaire par tous les acteurs du secteur privé de la santé en Côte d'Ivoire.</li>
                                                    <li>Appuyer le Ministère de la Santé, de l'Hygiène Publique et de la Couverture Maladie Universelle (MSHPCMU) dans ses actions de promotion de la conscience professionnelle (éthique et déontologie) et du comportement vertueux du personnel médical du secteur privé de la santé.</li>
                                                    <li>Mettre en place un dispositif continu de gestion des risques, de sécurité et d'amélioration de la qualité des prestations des services de santé dans le secteur privé.</li>
                                                    <li>Organiser à intervalles réguliers les fora de concertation et d'échanges des acteurs du secteur privé de la santé sur les bonnes pratiques, les forces et faiblesses, opportunités et menaces du secteur.</li>
                                                    <li>Aider à la collecte d'informations sanitaires produites par le secteur privé et à son intégration dans le dispositif du Système National d'Information Sanitaire.</li>
                                                    <li>Veiller à la qualité et à la fiabilité de l'information sanitaire recueillie au niveau du secteur privé et au renforcement de la transformation digitale du secteur privé de la santé.</li>
                                                    <li>Contribuer à l'amélioration de la chaîne logistique nationale d'approvisionnement des produits de santé au plan sanitaire, de la qualité des produits de santé et des plateaux techniques des structures du secteur privé de la santé.</li>
                                                    <li>Appuyer le MSHPCMU dans le renforcement du contrôle de la chaîne d'approvisionnement et le contrôle de la circulation illicite des produits de santé.</li>
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
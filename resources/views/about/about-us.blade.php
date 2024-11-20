@extends('layouts.master')


@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset("img/backgrounds/5.jpg")}})">
    	<div class="auto-container">
        	<h2>Qui sommes-nous ?</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('home-site')}}">Accueil</a></li>
                <li>À propos</li>
                <li>Qui sommes-nous ?</li>
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
								<p><strong>La plateforme du secteur privé de la santé de Côte d’Ivoire</strong> est une alliance entre les organisations professionnelles et entreprises du secteur privé de la santé ainsi que de la société civile agissant dans le secteur de la santé.</p>
								<p>Elle est née sur l’initiative du  <strong>projet SHOPS</strong>, le financement de l’<strong>USAID West Africa</strong> et l’accord du <strong>Ministère de la santé et de la lutte contre le SIDA</strong>.</p>
                                <p><strong>Crée en 2015</strong> avec pour objectif d’unir, d’organiser et de représenter les organisations professionnelles du secteur privé de la santé et de la société civile agissant dans le secteur de la santé au sein de toute instance publique et privé afin de faciliter un accès universel à des services de santé de qualité.</p>
                                <p><strong>La PSPSCI est apolitique</strong>, non confessionnelle et à but non lucratif.</p>
                                <h4>Nos objectifs spécifiques sont :</h4>
								<ul class="list-style-one">
									<li>   Sélectionner et organiser les membres en respectant la diversité et étant inclusif.</li>
									<li>   Identifier les priorités et mobiliser la participation de tous les acteurs pour la soumission de requêtes au sein des instances de dialogue et de partenariat public-privé.</li>
									<li>   Elaborer et soumettre des propositions de subventions à l’état et aux partenaires techniques et financiers.</li>
									<li>   Assurer le suivi et l’évaluation de la mise en œuvre des subventions.</li>
									<li>   Participer également à l’élaboration et la validation des projets régionaux et sous régionaux en collaboration avec les plateformes des autres pays concernés.</li>
								</ul>
								<!-- Two Column -->
								<div class="two-column">
									<div class="row clearfix">
										<div class="column col-lg-4 col-md-4 col-sm-12">
											<div class="image">
												<img src="{{asset('img/ressources/service-22.jpg')}}" alt="" />
											</div>
										</div>
										<div class="content-column col-lg-8 col-md-8 col-sm-12">
											<div class="inner-column">
												<h3>Notre slogan</h3>
												<p>Fédérer et renforcer le secteur privé de la santé pour la Couverture Santé Universelle.</p>
                                                
                                                <h3>Notre vision</h3>
												<p>Un secteur privé Uni, afin d'avoir un seul interlocuteur clé, engagé, organisé pour faciliter l’accessibilité de tous à des services de santé de qualité.</p>
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
							<div class="widget-content" style="background-image: url({{asset("img/backgrounds/7.jpg")}});">
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
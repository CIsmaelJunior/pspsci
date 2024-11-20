@extends('layouts.master')


@section('content')
<div class="">
    <!-- Main Slider -->
	<section class="main-slider">
		<div class="slider-box">
		
			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">
			
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{asset('img/main-sliders/965-modified2.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Transformons l'avenir <br> du tourisme médical en Afrique.</h2>
							<div class="text">Soyez au cœur des discussions sur la coopération et les investissements dans le secteur de la santé en Afrique. Rencontrez des experts de renommée internationale, explorez des opportunités innovantes et connectez-vous avec des leaders d'opinion. </div>
							<div class="btns-box">
								<a href="https://airtable.com/appHOIxrjBtJio7nV/pag5TyxCOGW3uIgGe/form" target="_blank" class="theme-btn btn-style-one"><span class="txt">Réservez Votre Place !</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{asset('img/main-sliders/infirmiere-patiente-afro-americaine-utilisant-hologramme-medical-pour-analyser-projection-metaverse-holographique-ia-dans-salle-attente-gens-qui-regardent-realite-augmentee-par-intelligence-artificielle-prise-vue-au-trepied.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Bienvenue sur  <br> le site de la PSPSCI</h2>
							<div class="text">Le secteur privé uni, qui sert comme interlocuteur clé, engagé, organisé pour faciliter l’accessibilité de tous à des services de santé de qualité.</div>
							<div class="btns-box">
								<a href="nos-missions.php" class="theme-btn btn-style-one"><span class="txt">Nos missions</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{asset('img/main-sliders/jeune-docteur-pendant-son-travail-expliquant-recettes-pour-drogues.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Explorez notre site <br> dédié à la PSPSCI</h2>
							<div class="text">Découvrez le secteur privé uni, qui sert comme interlocuteur clé, engagé, organisé pour faciliter l’accessibilité de tous à des services de santé de qualité.</div>
							<div class="btns-box">
								<a href="about-us.php" class="theme-btn btn-style-one"><span class="txt">Qui sommes-nous ?</span></a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{asset('img/main-sliders/portrait-infirmiere-praticienne-afro-americaine-souriant-camera-travaillant-expertise-maladie.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Engagez-vous avec la PSPSCI <br> pour un avenir meilleur</h2>
							<div class="text">Rejoignez notre communauté et participez à notre mission visant à améliorer l'accès aux services de santé de qualité pour tous. Votre engagement compte.</div>
							<div class="btns-box">
								<a href="contact.php" class="theme-btn btn-style-one"><span class="txt">Rejoignez-nous maintenant</span></a>
							</div>
						</div>
					</div>

				</div>

				
				
			</div>
			
		</div>
	</section>
	<!-- End Banner Section -->
	
	<!-- Services Section -->
	<section class="services-section bg-white">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box" style="border-left: 1px solid rgb(4 153 56);">
				<h2>Contexte</h2>
				<br>
				<div class="text">Notre pays poursuit sa marche vers le développement. Dans le secteur de la santé, le vaste programme hospitalier qui a été lancé en 2018 s’est accéléré au cours de ces derniers mois, en vue d’offrir des soins de qualité aux populations sur l’ensemble du territoire national et de consolider la mise œuvre de la Couverture Maladie Universelle (CMU)</div>
				<br/>
				<p class=""><strong>SEM Alassane Ouattara, Président de la République de Côte d’Ivoire</strong></p>
			</div>
			
			<!--
			<div class="row clearfix">
				
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#details"><img src="images/resource/service-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#details">Residential Interiors</a></h3>
							<div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies.</div>
							<a href="#details" class="read-more">Read more</a>
						</div>
					</div>
				</div>
				
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#details"><img src="images/resource/service-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#details">Office Designs</a></h3>
							<div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies. Seam lessly visualize quality intellectual.</div>
							<a href="#details" class="read-more">Read more</a>
						</div>
					</div>
				</div>
				
				<! - - Service Block - - 
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="commercial-interior.html"><img src="images/resource/service-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="commercial-interior.html">Commercial Interiors</a></h3>
							<div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies. Seam lessly visualize quality intellectual.</div>
							<a href="commercial-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>
				
			</div>
			-->
			
		</div>
	</section>
	<!-- End Services Section -->


	<!-- Mission Section -->
    <section class="mission-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{asset('img/ressources/mission.jpg')}}" alt=""/>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-xl-9 col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Mot du Président</h2>
						<div class="bold-text">Mesdames/Messieurs les Presidents/ Délégués des organisations professionnelles du secteur privés de la santé et de la société civil intervenant dans la santé,</div>
						<div class="text">La mise en ligne de notre site internet répond à plusieurs objectifs notamment donner une plus grande visibilité aux activités et actions de notre organisation en temps réel et ainsi mieux la faire connaitre des acteurs du secteur privé de la santé en Côte D’Ivoire, des opérateurs économiques et des partenaires au développement tant nationaux qu’internationaux.</div>
						<a href="mot-du-president.php" class="theme-btn btn-style-one">Voir plus</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Mission Section -->
	
	<!-- Services Section Two -->
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
	<!-- End Services Section Two -->

	<!-- Fluid Section One -->
    <!-- <section class="fluid-section-one">
    	<div class="outer-container clearfix">
        	
			<div class="content-column" style="">
				<style>
					.content-column::before{
						background-color: #212529!important;
					}
				</style>
				<div class="content-box">
					<h2 class="text-white">Cérémonie d’Investiture du Bureau PSPSCI</h2>
					<br>
					<div class="text-justify">
						<p class="text-white">Abidjan, le lundi 27 Juillet 2015, s’est tenue à l’hôtel Tiama Plateau, la cérémonie officielle d’investiture de la Plateforme du Secteur Privé de la Santé de Côte d’Ivoire en abrégé PSPS - CI et son Bureau Exécutif. La cérémonie était placée sous la présidence de Madame Raymonde Goudou COFFIE, Ministre de la Santé et de la Lutte contre le Sida.</p>
						<p class="text-white">Elle a vu la participation de plus 50 personnalités et invités issues des ministères techniques, des structures publiques nationales, des institutions internationales, des partenaires au développement et financiers, des organisations patronales et professionnelles du secteur privé, des institutions sanitaires, des PME, des syndicats et autres ordres des professions de santé ainsi que des responsables d’entreprises.</p>
						<p class="text-white">L’objectif de cette cérémonie était de procéder à la présentation officielle de la Plateforme et de son Bureau Exécutif mais également de présenter ses missions, les membres du Bureau Exécutif et de proposer des axes de collaboration pour le renforcement du partenariat public–privé.</p>
					</div>
					
					<div class="bold-text text-white">Parce que la santé et primordial et que le secteur privé a besoin d'attention<br> <br> <a href="contact.html" class="btn btn-success" style="colors: #0fs0; text-decoration:none;">Contactez nous</a></div>
				</div>
			</div>
			
        	<div class="image-column" style="background-image: url(images/resource/video-img.jpg)">
				<div class="inner-column">
					<div class="image">
						<img src="images/resource/video-img.jpg" alt="">
					</div>
					<a href="https://www.youtube.com/watch?v=SuKkFrS86ys" class="overlay-link lightbox-image">
						<div class="icon-box">
							<span class="icon flaticon-play-button"></span>
                            <i class="ripple"></i>
						</div>
					</a>
				</div>
            </div>
			
		</div>
	</section> -->
	
	<!-- Featured Section -->
	<section class="featured-section" style="background-image: url({{asset('img/backgrounds/2.jpg')}})">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Pourquoi la PSPSCI ?</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-hand-shake"></span>
							</div>
							<div class="feature-number">1</div>
						</div>
						<div class="lower-content">
							<h3><a href="#details">Santé Collaborative</a></h3>
							<div class="text text-jusitfy">Renforcement du partenariat pour façonner la législation de la santé.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-answer"></span>
							</div>
							<div class="feature-number">2</div>
						</div>
						<div class="lower-content">
							<h3><a href="#details">Lois en Synergie</a></h3>
							<div class="text text-jusitfy">Fusion d'efforts avec PSPSCI pour la réglementation de la santé.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-sketch"></span>
							</div>
							<div class="feature-number">3</div>
						</div>
						<div class="lower-content">
							<h3><a href="#details">Alliance Législative</a></h3>
							<div class="text">Unis avec PSPSCI pour façonner les règles du secteur de la santé.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-house-1"></span>
							</div>
							<div class="feature-number">4</div>
						</div>
						<div class="lower-content">
							<h3><a href="#details">Normes Solidaires</a></h3>
							<div class="text">Travail conjoint pour établir les normes de santé avec PSPSCI.</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Objectifs spécifiques</h2>
				<div class="text">Pour faciliter un accès universel à des services de santé de qualité.</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<!-- <a href="blog-detail.html"><img src="images/resource/goal.jpg" alt="" /></a> -->
						</div>
						<div class="lower-content">
							<h3><a href="blog-detail.html">Définir son organisation, organiser la sélection de ses membres en se portant garant du respect de la diversité et assurer son fonctionnement ainsi que celui du Secrétariat Permanent.</a></h3>
							<!--<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>-->
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<!-- <a href="blog-detail.html"><img src="images/resource/goal.jpg" alt="" /></a> -->
						</div>
						<div class="lower-content">
							<h3><a href="blog-detail.html">Fixer les priorités, mobiliser la participation de tous les acteurs pour la soumission de requêtes au sein des instances de Dialogue et de Partenariat Public-Privé </a></h3>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<!-- <a href="blog-detail.html"><img src="images/resource/goal.jpg" alt="" /></a> -->
						</div>
						<div class="lower-content">
							<h3><a href="blog-detail.html">Élaborer des propositions de subventions à l’Etat et aux bailleurs de fonds ; assurer le suivi et l’évaluation de la mise en œuvre des subventions</a></h3>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url({{asset('img/backgrounds/1.jpg')}})">
		<div class="auto-container">
			<h2>Innovations Santé Privée</h2>
			<div class="text">Propulser la santé par l'innovation et la collaboration avec le secteur privé.</div>
			<a href="engagement-avec-l-etat.php" class="theme-btn btn-style-two"><span class="txt">Découvrez nos Initiatives</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
</div>
@endsection
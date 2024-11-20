@extends('layouts.master')


@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('img/backgrounds/5.jpg')}})">
    <div class="auto-container">
        <h2>Nos activités</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home-site')}}">Nos activités</a></li>
            <li>Nos activités</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Our Blogs Section -->
<section class="our-blogs-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            @foreach ($posts as $post)
            <!--News Block Two -->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="blog-detail.html"><img src="{{asset('img/resource/news-9.jpg')}}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="upper-box clearfix">
                            <div class="posted-date">25 Mars 2019</div>
                            <ul class="post-meta">
                                <li>Publié par :  Admin</li>
                                <li>interior, furniture</li>
                                <li>Commentaire: 8</li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h3><a href="blog-detail.html">How to make best home interior ourself</a></h3>
                            <div class="text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. dolore magna aliqua. Ut enim ad minim veniam.</div>
                            <a href="blog-detail.html" class="theme-btn read-more">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- News Block Three-->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div id="carouselExampleSlidesOnly2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('img/ressources/yam4.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('img/ressources/yam1.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('img/ressources/yam2.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('img/ressources/atelierformationlive.jpg')}}" alt="Third slide">
                                </div>
                            </div>
                        </div>
                        <span class="date">26 et 27 Septembre 2024</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">C'était à Yamoussoukro !</a></h3>
                        <div class="text">La plateforme du secteur prive de la sante (PSPSCI) organise en ce moment un atelier de formation avec pour cible les entreprises du secteur prive de la sante de la region de Yamoussoukro (centre de la Côte D'Ivoire). Cet atelier  qui se tient du 26 au 27 septembre est organisé en partenariat avec la banque mondiale (SFI). Outre les chefs d'entreprise, plusieurs equipementiers y ont pris part de même que les banques partenaires NSIA et BICICI.</div>
                        <div class="link-box">
                            <a target="_blank" href="https://youtu.be/pq_i_snMayk?si=WfdpD2NM-hzT341r" class="theme-btn read-more">En savoir plus !</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News Block Three -->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="video-box">
                        <figure class="video">
                            <video controls autoplay muted style="width: 100%; height: 100%; object-fit: cover;">
                                <source src="{{asset('img/ressources/comment_participer_congres_amtc.mp4')}}" type="video/mp4">
                                Votre navigateur ne prend pas en charge la vidéo.
                            </video>
                        </figure>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Comment participer au congrès AMTC ?</a></h3>
                        <div class="text">Rejoignez-nous pour la 5ème Édition du Congrès Africain du Tourisme Médical, qui aura lieu du 27 au 29 novembre 2024 à Latrille Events, à Abidjan, Côte d'Ivoire. Cet événement est une opportunité incontournable pour explorer les avancées et les perspectives du secteur de la santé en Afrique. Participez à des débats enrichissants sur la collaboration et les opportunités d'investissement, et connectez-vous avec des experts et des décideurs influents. Profitez de cette occasion pour découvrir des solutions innovantes et élargir vos horizons professionnels.</div>
                        <div class="link-box">
                            <a target="_blank" href="https://airtable.com/appHOIxrjBtJio7nV/pag5TyxCOGW3uIgGe/form" class="theme-btn read-more">Inscrivez-vous dès maintenant !</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News Block Three-->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('img/ressources/atelier-de-formation.jpg')}}" alt=""></a></figure>
                        <span class="date">26, 27 Septembre & 03,04 Octobre 2024</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Atelier de Formation sur l'Accès au Financement des Équipements Médicaux en Afrique !</a></h3>
                        <div class="text">La Société Financière Internationale (IFC) lance un atelier de formation dédié aux acteurs du secteur médical en Afrique de l'Est et de l'Ouest. Cet événement, inscrit dans le cadre du Programme pour l'accès aux équipements médicaux en Afrique (AMEF), vise à renforcer la capacité des petites et moyennes organisations de santé à accéder à des financements en monnaie locale pour l'achat d'équipements médicaux essentiels. Les participants auront l'opportunité de discuter des défis liés à la planification, l'acquisition et l'entretien des équipements médicaux, tout en recevant des formations sur la gestion de la trésorerie et les conditions d'accès au financement. Cet atelier est une étape cruciale pour améliorer la qualité des soins de santé offerts aux populations locales.</div>
                        <div class="link-box">
                            <a target="_blank" href="https://youtu.be/pq_i_snMayk?si=-JtvNY0uVUEJAzt7" class="theme-btn read-more">En savoir plus !</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News Block Three-->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('img/ressources/lasantecestlaffairedetous.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('img/ressources/congres_ampc.jpeg')}}" alt="Second slide">
                                </div>
                            </div>
                        </div>
                        <span class="date">27,28, 29 Novembre 2024</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Rejoignez le Congrès Africain du Tourisme Médical 2024 !</a></h3>
                        <div class="text">Participez à la 5ème Édition du Congrès Africain du Tourisme Médical, qui se tiendra les 27, 28 et 29 novembre 2024 à Latrille Events, Abidjan, Côte d'Ivoire. Découvrez les dernières innovations et opportunités dans le secteur de la santé en Afrique, et engagez-vous dans des discussions sur la coopération et les investissements. Ne manquez pas l'occasion de rencontrer des leaders de l'industrie, d'explorer des solutions novatrices et de renforcer vos réseaux professionnels.</div>
                        <div class="link-box"><a target="_blank" href="https://airtable.com/appHOIxrjBtJio7nV/pag5TyxCOGW3uIgGe/form" class="theme-btn read-more">Inscrivez-vous dès maintenant !</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('img/ressources/ceremonie-investiture.jpg')}}" alt=""></a></figure>
                        <span class="date">28~29 Novembre 2023</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Nous vous invitons pour refléchir ensemble à un plan de conduite des actions prochaines de la PSPSCI.</a></h3>
                        <div class="text">
                            Chers membres et partenaires de la Plateforme du Secteur Privé de la Santé en Côte d'Ivoire (PSPSCI),
                            <br>
                            Nous vous convions à un moment privilégié de réflexion collective et d'échange d'idées. Ensemble, nous avons accompli des progrès significatifs, mais l'avenir nous offre de nouvelles opportunités et défis passionnants.

                            <br><br>
                            <strong>🤔 Pourquoi Participer ?</strong>
                            <br> <br>
                            <p>Votre expertise et vos idées sont cruciales pour définir la trajectoire future de la PSPSCI. En unissant nos forces, nous pouvons véritablement impacter positivement le secteur privé de la santé en Côte d'Ivoire.</p>

                            <br> <strong>👥 Qui Devrait Participer ?</strong> <br><br>
                            <p>Tous les membres, partenaires, et acteurs impliqués dans notre mission de renforcement du secteur privé de la santé sont encouragés à rejoindre cette séance stratégique.</p>

                            <br> <strong>📌 Ordre du Jour :</strong> <br><br>
                            <ul>
                                <li>Bilan des actions précédentes.</li>
                                <li>Identification des défis et opportunités actuels.</li>
                                <li>Discussions sur les priorités pour la prochaine phase.</li>
                                <li>Élaboration d'un plan d'actions concerté.</li>
                            </ul>
                        </div>
                        <!-- <div class="link-box"><a href="#" class="theme-btn read-more">En savoir plus</a></div> -->
                    </div>
                </div>
            </div>

            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('img/ressources/rencontre_du_29_09_2023_avec_l_organisation nationale_des_etudiants.jpg')}}" alt=""></a></figure>
                        <span class="date">29 Septembre 2023</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Rencontre de ce matin avec l’organisation nationale des étudiants en sciences de la santé (medecine -odontostomatologie-pharmacie)</a></h3>
                        <div class="text">Ce matin, nous avons eu le privilège de rencontrer l'Organisation Nationale des Étudiants en Sciences de la Santé, qui englobe les futurs médecins, dentistes et pharmaciens. Cette réunion a été l'occasion d'échanger des idées, de discuter des défis actuels et futurs du secteur de la santé, et de renforcer notre engagement envers l'éducation et la croissance dans ce domaine vital. Restez à l'écoute pour en savoir plus sur nos initiatives et partenariats passionnants avec cette organisation dynamique!</div>
                        <!-- <div class="link-box"><a href="#" class="theme-btn read-more">En savoir plus</a></div> -->
                    </div>
                </div>
            </div>

            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('img/ressources/reunion_a_la_DEPPS.jpg')}}" alt=""></a></figure>
                        <span class="date">22 Septembre 2023</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Réunion avec la DEPPS et la Banque mondiale.</a></h3>
                        <div class="text">Nous avons eu l'honneur de participer à une réunion stratégique avec la DEPPS (direction des établissements privés et des professions sanitaires) ainsi que la Banque mondiale. Cette rencontre a été l'occasion d'établir des collaborations cruciales visant à améliorer l'accès aux soins de santé, à renforcer les systèmes de santé et à promouvoir l'innovation dans le secteur privé de la santé. Nous sommes impatients de travailler ensemble pour créer un impact durable et positif dans le domaine de la santé.</div>
                        <div class="link-box"><a href="contact.php" class="theme-btn read-more">En savoir plus</a></div>
                    </div>
                </div>
            </div>				
            <!-- News Block Three-->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('img/main-sliders/groupe-medecins-equipage-paramedical-africain.jpg')}}" alt=""></a></figure>
                        <span class="date">09 Septembre 2021</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">La plateforme du secteur privé de la santé veut occuper une place de choix dans le dialogue national</a></h3>
                        <div class="text">Abidjan, Les acteurs du secteur privé de la santé en Côte d’Ivoire veulent promouvoir leur Plateforme au plan national, afin de lui permettre de jouer un rôle important dans le débat sur les questions de santé, a annoncé, mercredi 8 septembre 2021 lors d'une conférence de presse, le président ...</div>
                        <div class="link-box"><a target="_blank" href="https://news.abidjan.net/articles/697289/la-plateforme-du-secteur-prive-de-la-sante-veut-occuper-une-place-de-choix-dans-le-dialogue-national" class="theme-btn read-more">En savoir plus</a></div>
                    </div>
                </div>
            </div>

            <!-- News Block Three-->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('img/main-sliders/conference-regionale-CSU-Collaboration.jpg')}}" alt=""></a></figure>
                        <span class="date">10 Juillet 2023</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Conférence Régionale sur la CSU : Collaboration Secteur Privé et Public</a></h3>
                        <div class="text">À Abidjan, la FOASPS et la PSPSCI ont rassemblé 300 leaders du secteur de la santé pour discuter de la Couverture Sanitaire Universelle (CSU). Sous le thème « Dialogue Public-Privé pour la CSU en Afrique », les débats ont porté sur le rôle crucial du secteur privé et les défis financiers. Les ministres ont souligné l'importance des partenariats pour réaliser la CSU. #SantéOuestAfricaine #PartenariatSanté 🌍💊...</div>
                        <div class="link-box"><a target="_blank" href="https://www.hospihub.com/actualites/le-secteur-prive-de-la-sante-ouest-africain-engage-pour-une-couverture-sanitaire" class="theme-btn read-more">En savoir plus</a></div>
                    </div>
                </div>
            </div>

            <!-- News Block Three-->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('img/main-sliders/thumbnail-8-e1686952447447-825x425.jpg')}}" alt=""></a></figure>
                        <span class="date">17 Juin 2023</span>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Conférence Historique du Secteur Privé de la Santé en Afrique de l'Ouest</a></h3>
                        <div class="text">La première conférence politique du secteur privé de la santé en Afrique de l'Ouest a été lancée à Abidjan. Organisée par la PSPS-CI en partenariat avec la FOASPS, elle se tiendra du 6 au 8 juillet 2023. L'événement vise à promouvoir le Dialogue Public-Privé pour atteindre la Couverture Sanitaire Universelle (CSU) dans la région. Plus de 300 décideurs et neuf ministres de la santé sont attendus. L'objectif est de renforcer les systèmes de santé, d'attirer des investissements et de faciliter l'accès aux soins de qualité. #CSUAfriqueOuest #SantéPrivée 🌍💉...</div>
                        <div class="link-box"><a target="_blank" href="https://www.aip.ci/cote-divoire-aip-lancement-de-la-premiere-conference-politique-de-haut-niveau-du-secteur-prive-de-la-sante-en-afrique-de-louest/" class="theme-btn read-more">En savoir plus</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Styled Pagination-->
        <ul class="styled-pagination text-center">
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
        </ul>                
        <!--End Styled Pagination-->
        
    </div>
</section>
<!-- End Our Blogs Section -->

@endsection
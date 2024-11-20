<header class="main-header header-style-one">
    <!--Header Top-->
    <div class="header-top bg-white">
        <div class="auto-container clearfix">
            <div class="top-left clearfix">
                <div class="text"><span class="icon flaticon-call-answer"></span> Besoin d'aide ? Appelez nous au : <a href="tel:+2250709775311" class="number">+225 07 09 77 53 11</a></div>
                
            </div>
            <div class="top-right clearfix">
                <!-- Info List -->
                <ul class="info-list">
                    <li><a href="https://www.facebook.com/profile.php?id=61550072236752&mibextid=ZbWKwL" target="_blank"><span class="fab fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://www.linkedin.com/company/plateforme-du-secteur-prive-de-la-sante-en-c%C3%B4te-d-ivoire/" target="_blank"><span class="fab fa-linkedin"></span></a></a></li>
                    <li><a href="https://twitter.com/pspsci" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li class="quote"><a href="contact.php">Prendre contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Upper -->
    <div class="header-upper bg-white">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Info-->
                <div class="logo-outer">
                    <div class="logo"><a href="{{route('home-site')}}"><img src="{{asset('img/2@4x.png')}}" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-1"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="<?php if (request()->is('/')) echo 'current'; ?>"><a href="{{route('home-site')}}">ACCUEIL</a></li>
                                
                                <li class="dropdown <?php if (in_array(request()->urls, array('about-us', 'mot-du-president', 'les-quatres-v', 'nos-valeurs', 'engagement-avec-l-etat')) ) echo 'current'; ?>">
                                <a href="#" class="">A PROPOS</a>
                                    <ul>
                                        <li><a href="{{route('site.abous-us')}}">Qui sommes nous ?</a></li>
                                        <li><a href="{{route('site.nos-valeurs')}}">Nos valeurs</a></li>
                                        <li><a href="{{route('site.les-quatres-v')}}">Les quatres (04) V</a></li>
                                        <li><a href="{{route('site.nos-engagements')}}">engagements avec l’état</a></li>
                                        <li><a href="{{route('site.mot-du-president')}}">Le mot du Président</a></li>
                                    </ul>
                                </li>

                                <li class="<?php if (request()->is('notre-equipe')) echo 'current'; ?>"><a href="{{route('site.our-teams')}}">ÉQUIPE</a></li>
                                <li class=" <?php if (request()->is('nos-missions')) echo 'current'; ?>"><a href="{{route('site.nos-missions')}}">NOS MISSIONS</a>
                                    <!-- <ul>
                                        <li><a href="#services-dark.html">Répertorier, regrouper et aider</a></li>
                                        <li><a href="#">Maintenir avec tout partenaire, national, régional et international</a></li>
                                        <li><a href="#">Assurer, maintenir et preserver</a></li>
                                        <li><a href="#">Identifier et prioriser</a></li>
                                        <li><a href="#">Maintenir un contact permanent avec le pouvoir public</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="{{route('amtc-index')}}"> <span class="badge badge-warning blink">AMTC 24</span></a></li>
                                    <!-- <li class="<?php if (request()->is('adhesion.*')) echo 'current'; ?>"><a href="https://airtable.com/appHOIxrjBtJio7nV/pag5TyxCOGW3uIgGe/form" target="_blank">INSCRIPTION AMTC24</a></li> -->
                                <li class="<?php if (request()->is('news')) echo 'current'; ?>"><a href="{{route('news.index')}}">ACTUALITÉS</a></li>
                                <li class="<?php if (request()->is('contact')) echo 'current'; ?>"><a href="{{route('site.contact')}}">CONTACT</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('home-site')}}"><img src="images/logo.png" alt="" title=""></a></div>
            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <!-- <li><a href="#"><span class="fab fa-link"></span></a></li> -->
                    <li><a href="https://www.facebook.com/profile.php?id=61550072236752&mibextid=ZbWKwL" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="https://www.linkedin.com/company/plateforme-du-secteur-prive-de-la-sante-en-c%C3%B4te-d-ivoire/" target="_blank"><span class="fab fa-linkedin-square"></span></a></li>
                    <li><a href="https://twitter.com/pspsci" target="_blank"><span class="fab fa-twitter"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
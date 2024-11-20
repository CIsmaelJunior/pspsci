@extends('layouts.master')


@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('img/backgrounds/5.jpg')}})">
    <div class="auto-container">
        <h2>Contactez nous</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home-site')}}">Accueil</a></li>
            <li>Contactez nous</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Form Section -->
<section class="contact-form-section" style="background-image:url({{asset('img/backgrounds/contact.png')}})">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <h2>Contactez-nous</h2>
            <div class="text">Avez-vous des informations à partager dans le domaine de la santé ? N'hésitez pas à nous contacter via notre formulaire.</div>
        </div>
        
        <div class="row clearfix">
            
            <!-- Form Column -->
            <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                            
                        <!--Contact Form-->
                        <form method="post" action="" id="contact-form_">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="nom" placeholder="Votre nom" required>
                                </div>
                                
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="email" placeholder="Votre email" required>
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="subject" placeholder="Votre sujet" required>
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" placeholder="Votre message"></textarea>
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Envoyer</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            
            <!-- Info Column -->
            <div class="info-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    
                    <!-- Contact Info List -->
                    <ul class="contact-info-list">
                        <li><strong>Address :</strong><br>2 plateaux, Cocody Aghien 01 BP 4145 Abidjan 01</li>
                    </ul>
                    <!-- Contact Info List -->
                    <ul class="contact-info-list">
                        <li><strong>Fixe : </strong><a href="tel:+2252733760646">+225 27 33 76 06 46</a></li>
                        <li><strong>Phone : </strong><a href="tel:+2250505425302">+225 05 05 42 53 02</a></li>
                        <li><strong>Phone 2: </strong><a href="tel:+2250707645539">+225 07 07 64 55 39</a></li>
                        <li><strong>Email : </strong><a href="mailto:info@stellaorre.com">infos@pspsci.org</a></li>
                    </ul>
                    <!-- Contact Info List -->
                    <ul class="contact-info-list">
                        <li><strong>Ouvert :</strong><br>8:00 – 18:00 <br> Lundi – Vendredi</li>
                    </ul>
                    
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<!-- End Contact Form Section -->

<!-- Map Section -->
<section class="map-section">
    <!--https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15889.360363408661!2d-3.9980585000000004!3d5.364984349999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1692982377915!5m2!1sfr!2sci-->
    <div class="outer-container">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d11735.750281183668!2d-4.001567753700465!3d5.390263585976049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjMnMjQuMCJOIDPCsDU5JzE5LjUiVw!5e0!3m2!1sfr!2sci!4v1699012067422!5m2!1sfr!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
    </div>
</section>
<!-- End Map Section -->
@endsection
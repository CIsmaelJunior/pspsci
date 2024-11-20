@extends('layouts.master')


{{-- <!-- Primary Meta Tags -->
<title><?= $title; ?></title>
<meta name="title" content="<?= $title; ?>">
<meta name="description" content="<?= $description; ?>">
<meta content="<?= $keywords; ?>" name="keywords">
<meta http-equiv="keywords" name="keywords" content="<?= $keywords; ?>">
<meta name="Copyright" content="PSPSCI">
<meta name="Author" content="AMOSK CONSULTING">
<meta name="robots" content="index, follow">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://pspsci.org/">
<meta property="og:title" content="<?= $title; ?>">
<meta property="og:description" content="<?= $description; ?>">
<meta property="og:image" content="http://pspsci.org/images/resource/dr-kouakou-vc.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="http://pspsci.org/">
<meta property="twitter:title" content="<?= $title; ?>">
<meta property="twitter:description" content="<?= $description; ?>">
<meta property="twitter:image" content="http://pspsci.org/images/resource/dr-kouakou-vc.jpg">

<!-- Favicons -->
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">


<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

$current_page = basename($_SERVER['PHP_SELF']);
$title = "Docteur ISSOUFOU KOUAKOU : Vice-président Engagé dans le Secteur Pharmaceutique";
$description = "Découvrez le parcours du Dr. ISSOUFOU KOUAKOU, Vice-président de la Plateforme du Secteur Privé de la Santé en Côte d'Ivoire (PSPSCI). Titulaire d'un Doctorat en Pharmacie et expert en industrie pharmaceutique, il apporte son leadership au service de la santé en Côte d'Ivoire";
$keywords = "Docteur ISSOUFOU KOUAKOU, Vice-président, PSPSCI, Pharmacie, Industrie Pharmaceutique, Leadership, Conseiller de l'Ordre des Pharmaciens, Association des Producteurs Pharmaceutiques, Santé en Côte d'Ivoire."; --}}


@section('content')

 <!--Page Title-->
 <section class="page-title" style="background-image:url({{asset('img/backgrounds/about-header.png')}})">
    <div class="auto-container">
        <h2>NOTRE {{strtoupper($team->fonction)}}</h2>
        <ul class="page-breadcrumb">
            <li><a href="index.php">ACCUEIL</a></li>
            <li>NOTRE {{strtoupper($team->fonction)}}</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Story Section -->
<section class="story-section">
    <div class="auto-container">
        <div class="row clearfix">
            

            <!-- Image Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="{{$team->photo_path}}" alt="{{$team->full_name}}" />
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    {!!$team->description!!}
                </div>
            </div>
            
            
        </div>
    </div>
</section>
<!-- End Story Section -->
    
@endsection



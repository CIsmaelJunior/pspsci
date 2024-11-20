<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('admin/img/svg/Logo.svg')}}" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">
  @notifyCss
</head>

<body>
    <div class="layer"></div>

    <main class="page-center">
        <article class="sign-up">
            <h1 class="sign-up__title">Bon retour!</h1>
            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            <p class="sign-up__subtitle">Connectez-vous pour continuer</p>
            <form class="sign-up-form form" action="{{route('authenticate')}}" method="POST">
                @csrf
            <label class="form-label-wrapper">
                <p class="form-label">Email</p>
                <input class="form-input" type="email" name="email" placeholder="Entrez votre email" required>
            </label>
            <label class="form-label-wrapper">
                <p class="form-label">Mot de passe</p>
                <input class="form-input" type="password" name="password" placeholder="Entrez votre mot de passe" required>
            </label>
            <a class="link-info forget-link" href="##">Mot de passe oublié ?</a>
            <label class="form-checkbox-wrapper">
                <input class="form-checkbox" name="remember_me" type="checkbox"x>
                <span class="form-checkbox-label">Se souvenir de moi</span>
            </label>
            <button class="form-btn primary-default-btn transparent-btn">Se connecter</button>
            </form>
        </article>
    </main>

    <!-- Chart library -->
    <script src="{{asset('admin/plugins/chart.min.js')}}"></script>
    <!-- Icons library -->
    <script src="{{asset('admin/plugins/feather.min.js')}}"></script>
    <!-- Custom scripts -->
    <script src="{{asset('admin/js/script.js')}}"></script>
    <x-notify::notify />
    @notifyJs
</body>

</html>

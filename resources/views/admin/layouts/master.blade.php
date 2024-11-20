<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord | PSPSCI</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('admin/img/svg/logo.svg')}}" type="image/x-icon">
  <!-- Custom styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">

  <style>
    .local-green{
      background-color: #105510!important;
      color: white;
    }
  </style>
  @notifyCss
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    @include('admin.partials._sidebar')
    
    <div class="main-wrapper">
        <!-- ! Main nav -->
        @include('admin.partials._navbar')
        <!-- ! Main -->
        <main class="main users chart-page" id="skip-target">
        <div class="container">
            @yield('content')
        </div>
        </main>
        
        <!-- ! Footer -->
        @include('admin.partials._footer')

    </div>
</div>
<!-- Chart library -->
<script src="{{asset('admin/plugins/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{asset('admin/plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script src="{{asset('admin/js/script.js')}}"></script>
<x-notify::notify />
@notifyJs
@yield('scripts')
</body>

</html>
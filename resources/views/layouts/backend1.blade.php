<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

 <title>Dashboard</title>

 <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
 <meta name="author" content="pixelcave">
 <meta name="robots" content="noindex, nofollow">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Icons -->
 <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
 <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
 <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

 <!-- Fonts and Styles -->
 @yield('css_before')
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
 <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.css') }}">


 @yield('css_after')

 <!-- Scripts -->
 <script>
  window.Laravel = {
   !!json_encode(['csrfToken' => csrf_token(), ]) !!
  };
 </script>
</head>

<body>

 <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed">
  <!-- Side Overlay-->
  <aside id="side-overlay" class="font-size-sm">
   <!-- Side Header -->
   <div class="content-header border-bottom">
    <!-- User Avatar -->
    <a class="img-link mr-1" href="javascript:void(0)">
     <img class="img-avatar img-avatar32" src="{{ asset('assets/media/avatars/avatar10.jpg') }}" alt="">
    </a>
    <!-- END User Avatar -->

    <!-- User Info -->
    <div class="ml-2">
     <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
    </div>
    <!-- END User Info -->

    <!-- Close Side Overlay -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
     <i class="fa fa-fw fa-times text-danger"></i>
    </a>
    <!-- END Close Side Overlay -->
   </div>
   <!-- END Side Header -->

   <!-- Side Content -->
   <div class="content-side">
    <p>
     Content..
    </p>
   </div>
   <!-- END Side Content -->
  </aside>
  <!-- END Side Overlay -->


  <nav id="sidebar" aria-label="Main Navigation">
   <!-- Side Header -->
   <div class="content-header bg-white-5">
    <!-- Logo -->
    <a class="font-w600 text-dual" href="/admin/home">
     <i class="fa fa-circle-notch text-primary"></i>
     <span class="smini-hide">
      <span class="font-w700 font-size-h5">Gestion Progamme</span>
     </span>
    </a>
    <!-- END Logo -->

    <!-- Options -->
    <div>
     <!-- Color Variations -->
     <div class="dropdown d-inline-block ml-3">
      <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
       <i class="si si-drop"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
       <!-- Color Themes -->
       <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
       <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
        <span>Default</span>
        <i class="fa fa-circle text-default"></i>
       </a>
       <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('assets/css/themes/amethyst.css') }}" href="#">
        <span>Amethyst</span>
        <i class="fa fa-circle text-amethyst"></i>
       </a>
       <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('assets/css/themes/city.css') }}" href="#">
        <span>City</span>
        <i class="fa fa-circle text-city"></i>
       </a>
       <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('assets/css/themes/flat.css') }}" href="#">
        <span>Flat</span>
        <i class="fa fa-circle text-flat"></i>
       </a>
       <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('assets/css/themes/modern.css') }}" href="#">
        <span>Modern</span>
        <i class="fa fa-circle text-modern"></i>
       </a>
       <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('assets/css/themes/smooth.css') }}" href="#">
        <span>Smooth</span>
        <i class="fa fa-circle text-smooth"></i>
       </a>
       <!-- END Color Themes -->

       <div class="dropdown-divider"></div>

       <!-- Sidebar Styles -->
       <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
       <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
        <span>Sidebar Light</span>
       </a>
       <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
        <span>Sidebar Dark</span>
       </a>
       <!-- Sidebar Styles -->

       <div class="dropdown-divider"></div>

       <!-- Header Styles -->
       <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
       <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
        <span>Header Light</span>
       </a>
       <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
        <span>Header Dark</span>
       </a>
       <!-- Header Styles -->
      </div>
     </div>
     <!-- END Themes -->

     <!-- Close Sidebar, Visible only on mobile screens -->
     <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
     <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
      <i class="fa fa-times"></i>
     </a>
     <!-- END Close Sidebar -->
    </div>
    <!-- END Options -->
   </div>
   <!-- END Side Header -->

   <!-- Side Navigation -->
   <div class="content-side content-side-full">
    <ul class="nav-main">
     <li class="nav-main-item">
      <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="">
       <i class="nav-main-link-icon si si-cursor"></i>
       <span class="nav-main-link-name">Dashboard</span>
      </a>
     </li>

     <!-- <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
       <i class="nav-main-link-icon si si-user"></i>
       <span class="nav-main-link-name">GESTION UTILISATEUR</span>
      </a>
      <ul class="nav-main-submenu">
       <li class="nav-main-item">
        <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
         <span class="nav-main-link-name">DataTables</span>
        </a>
       </li>
       <li class="nav-main-item">
        <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">
         <span class="nav-main-link-name">Slick Slider</span>
        </a>
       </li>
      </ul>
     </li> -->


   </div>
   <!-- END Side Navigation -->
  </nav>
  <!-- END Sidebar -->

  <!-- Header -->
  <header id="page-header">
   <!-- Header Content -->
   <div class="content-header">
    <!-- Left Section -->
    <div class="d-flex align-items-center">
     <!-- Toggle Sidebar -->
     <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
     <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
      <i class="fa fa-fw fa-bars"></i>
     </button>
     <!-- END Toggle Sidebar -->

     <!-- Toggle Mini Sidebar -->
     <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
     <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
      <i class="fa fa-fw fa-ellipsis-v"></i>
     </button>
     <!-- END Toggle Mini Sidebar -->
    </div>
    <!-- END Left Section -->
    @auth
    <!-- Right Section -->
    <div class="d-flex align-items-center">
     <!-- User Dropdown -->
     <div class="dropdown d-inline-block ml-2">
      <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <img class="rounded" src="{{ asset('assets/media/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 18px;">
       <span class="d-none d-sm-inline-block ml-1"> {{ Auth::user()->email }} </span>
       <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
       <div class="p-3 text-center bg-primary">
        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
       </div>
       <div class="p-2">

        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
         Deconnexion
         <i class="si si-logout ml-1"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
        </form>
       </div>
      </div>
     </div>
     @endauth
     <!-- END User Dropdown -->

    </div>
    <!-- END Right Section -->
   </div>
   <!-- END Header Content -->

   <!-- Header Search -->
   <div id="page-header-search" class="overlay-header bg-white">
    <div class="content-header">
     <form class="w-100" action="/dashboard" method="POST">
      @csrf
      <div class="input-group input-group-sm">
       <div class="input-group-prepend">
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
         <i class="fa fa-fw fa-times-circle"></i>
        </button>
       </div>
       <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
      </div>
     </form>
    </div>
   </div>
   <!-- END Header Search -->

   <!-- Header Loader -->
   <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
   <div id="page-header-loader" class="overlay-header bg-white">
    <div class="content-header">
     <div class="w-100 text-center">
      <i class="fa fa-fw fa-circle-notch fa-spin"></i>
     </div>
    </div>
   </div>
   <!-- END Header Loader -->
  </header>
  <!-- END Header -->
  <main id="main-container">
   @yield('content')
  </main>
  <!-- OneUI Core JS -->
  <script src="{{ asset('js/oneui.app.js') }}"></script>

  @yield('js_after')
</body>

</html>
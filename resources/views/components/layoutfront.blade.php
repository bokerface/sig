<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>SIGOV UMY</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/customsd.css">
{{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> --}}
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">   
<link rel="stylesheet" type="text/css" href="fonts/icomoon/style.css"> 
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">

<style>
    .header.sigov{
        background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
    }

    .header-logo-app a.header-title.mcustomsd {
        margin-left: 30px !important;
    }

    .footer-bar-5 .active-nav i {
        color:#e62e45;
    }
</style>
@livewireStyles

<script type="text/javascript" src="{{ asset('js/plugin.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>
    
<body class="theme-light" data-highlight="pink2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header sigov  header-fixed header-auto-show header-logo-app">
        <a href="index.html" class="header-title mcustomsd text-white">SIGOV</a>
    </div>

    <div id="footer-bar" class="footer-bar-5 rounded-0">            
        <a href="{{ url('inbox') }}" class="{{ (request()->is('inbox')) ? 'active-nav' : '' }}"><i class="icon-mail"></i></a>
        <a href="{{ url('home') }}" class="{{ (request()->is('home')) ? 'active-nav' : '' }}"><i class="icon-home"></i></a>
        <a href="#" data-menu="menu-profile" class="{{ (request()->is('profile')) ? 'active-nav' : '' }}"><i class="icon-user"></i></a>
    </div>
    
    <div class="page-content">
        
        {{-- <div class="page-title page-title-large">
            <h2 data-username="Enabled!" class="greeting-text"></h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div> --}}
        
       {{ $slot }}
        
         
    </div>    
    <!-- end of page content-->

    <div id="modal-success" class="menu menu-box-modal bg-red-dark rounded-s shadow-l" style="z-index:9999;"
        {{-- data-menu-height="100" --}}
        data-menu-width="350">
        <h3 class="text-center mt-4 color-white font-300">Your request was succesfully submitted!</h3>

            <p class="color-white mx-3 text-center">We will notify you when documents is fully checked</p>
       
        <div class="bg-white pt-4 pb-5">
            <h1 class="text-center mt-3 pb-5 font-45"><i class="fa fa-3x fa-check-circle text-danger shadow-xl rounded-circle"></i></h1>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-m text-uppercase font-900 bg-danger text-white">Close</a>
        </div>
        
       
    </div>

    <div id="modal-error" class="menu menu-box-modal bg-dark rounded-s shadow-l" style="z-index:9999;"
        {{-- data-menu-height="100" --}}
        data-menu-width="350">
        <h3 class="text-center mt-4 color-white font-300">Error!</h3>
            <p class="color-white mx-3 text-center">Please fill all required fields.</p>       
        <div class="bg-white pt-4 pb-5">
            <h1 class="text-center mt-3 pb-5 font-45"><i class="fa fa-3x fa-times text-danger shadow-xl rounded-circle"></i></h1>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-m text-uppercase font-900 bg-danger text-white">Close</a>
        </div>       
    </div>
        </div>       
    </div>
     
   
    <!-- Modal Profile --> 
    
    <div id="menu-profile" 
    class="menu menu-box-right" 
    data-menu-height="cover" 
    data-menu-width="cover" 
    data-menu-effect="menu-over" >
        @livewire('profile')
    </div>
   
    
    <!-- Be sure this is on your main visiting page, for example, the index.html page-->
    <!-- Install Prompt for Android -->
    <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="350" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-l mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">SIGOV on your Home Screen</h4>
            <p>
                Install SIGOV on your home screen, and access it just like a regular app. It really is that simple!
            </p>
            <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to Home Screen</a><br>
            <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe later</a>
            <div class="clear"></div>
        </div>
    </div>   

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios" 
        class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="320" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-xl mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">SIGOV on your Home Screen</h4>
            <p class="mb-0 pb-3">
                Install SIGOV on your home screen, and access it just like a regular app.  Open your Safari menu and tap "Add to Home Screen".
            </p>
            <div class="clear"></div>
            <a href="#" class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Maybe later</a><br>
            <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
        </div>
    </div>

    
</div>    


</body>

@livewireScripts

{{-- <script type="text/javascript" src="scripts/bootstrap.min.js"></script> --}}


<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>


</html>
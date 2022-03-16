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
<link rel="stylesheet" type="text/css" href="fonts/css/icomoon.css"> 
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">


@livewireStyles
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
   
    
    <div class="page-content">
      
        
       {{ $slot }}
        
         
    </div>    
    <!-- end of page content-->
    
    <div id="menu-highlights" 
    class="menu menu-box-bottom menu-box-detached rounded-m" 
    data-menu-height="260" 
    data-menu-effect="menu-over">       
    
    <div class="content mt-2 mb-0 p-3">
        <form wire:submit.prevent="login">
            <div class="input-style no-borders has-icon validate-field mb-4">
                <i class="fa fa-user"></i>
                <input type="email" wire:model="email" class="form-control validate-name" id="form1a"
                    placeholder="Name">
                <label for="form1a" class="color-blue-dark font-10 mt-1">Name</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>

            <div class="input-style no-borders has-icon validate-field mb-4">
                <i class="fa fa-lock"></i>
                <input type="password" wire:model="password" class="form-control validate-password"
                    id="form3a" placeholder="Password">
                <label for="form3a" class="color-blue-dark font-10 mt-0">Password</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <button class="btn btn-s mt-2 mb-4 mx-4 btn-full bgsd-pink rounded-m text-uppercase font-900">
                Login
            </button>
        </form>

        <div class=".d-flex text-center">
            <div class="font-11 pb-2 color-theme opacity-60 pb-3"><a href="#" class="color-theme">Need
                    Help?</a>
            </div>
            <!-- <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-end"><a href="#" class="color-theme">Forgot Credentials</a></div> -->
        </div>
    </div>

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



<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
@livewireScripts
</body>

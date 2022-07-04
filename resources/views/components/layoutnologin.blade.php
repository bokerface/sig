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

    <style>
        html, body {
            background: #ffffff;
        }
        .igovclass {

            min-height: 50vh;
            border-bottom-left-radius: 10%;
            border-bottom-right-radius: 10%;
            padding: 15px;
            text-align: center;
            color: white;
        }

        .igovclass p {
            color: white;
            font-size: 16px;
            line-height: 24px;
        }

        .logo-atas {
            text-align: right !important;
        }

        .logo-atas img {
            width: 100%;
            max-width: 80px;
        }

        .loginsd input,
        .loginsd .input-group-text {
            background: transparent;
            border-bottom: 1px solid #e62e57 !important;
        }

        .loginsd i {
            color: #e62e57 !important;
        }

        .loginsd button {
            padding: 2px;
            width: 100%;
            font-size: 17px !important;
        }
    </style>

    @livewireStyles
</head>

<body class="body-sd theme-light" data-highlight="pink">



    <div id="page" class="bg-white">

        <div class="page-content">

            {{ $slot }}


        </div>
        <!-- end of page content-->

        <div id="menu-login" class="menu menu-box-right" data-menu-height="cover" data-menu-width="cover" data-menu-effect="menu-over">
                @livewire('form-login');
        </div>   
            <!-- Be sure this is on your main visiting page, for example, the index.html page-->
            <!-- Install Prompt for Android -->
        <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="350" data-menu-effect="menu-parallax">
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
        <div id="menu-install-pwa-ios" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="320" data-menu-effect="menu-parallax">
            <div class="boxed-text-xl mt-4">
                    <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
                    <h4 class="mt-3">SIGOV on your Home Screen</h4>
                    <p class="mb-0 pb-3">
                        Install SIGOV on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
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
</html>
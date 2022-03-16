<div>             
        
    <style>
        .page-content .page-title {
            margin: 20px 20px 0px 20px !important;
            font-weight: 300 !important;
        }

        .page-title-small h2 {
            font-weight: 300 !important;
            font-size: 17px !important;
        }

        .search-box {
            margin-top: 10px !important;
        }

        .icon-header-home {
            display: inline-block;
        }

        .icon-header-home a {
            display: inline-block;
            padding: 7px;
            margin-left: 8px;
        }

        .icon-header-home a i {
            font-size: 18px;
        }

        .bg-search {
            background-color: rgb(255 255 255 / 9%);
        }

        .bg-search input,
        .bg-search input::placeholder {
            color: rgba(255, 255, 255, 0.644);
            font-size: 17px !important;
            font-weight: 300;
        }

        .bg-search i {
            color: #E43256;
        }

        .search-box .icon-search1 {
            position: absolute;
            left: 0px;
            line-height: 40px;
            padding: 0px 15px 0px 30px;
            font-size: 18px;
        }

        .page-title-small [data-menu] {
            position: relative;
            margin-top:3px;
            padding-top:9px;
        }
    </style>

@php
$fullname = Session::get('user_data.fullname');
$wordcount = str_word_count($fullname);

if($wordcount > 1) :

    $expl = explode( ' ', $fullname);

    $name = $expl[0];

else :

    $name = $fullname;

endif;

@endphp

    <div class="page-title mb-5">

        <div class="page-title page-title-small d-flex justify-content-between">
            <h2 class="font-18 font-300">Hi, {{ $name }} </h2>
            <span class="icon-header-home d-flex align-items-center">                
                <a href="#" class="text-pinky"  data-menu="menu-profile"><i class="icon-user"></i></a>
                <a href="{{ url('notification') }}" class="text-pinky"><i class="icon-bell"></i></a>
            </span>
        </div>

        <div class="search-box search-boxsd search-dark bg-search shadow-m border-0 mt-4 rounded-m bottom-0">
            <i class="icon-search1 ms-n3"></i>
            <input type="text" class="border-0" placeholder="Search" data-search>
        </div>

    </div>

    <div class="sdcustom card header-card shape-rounded" data-card-height="130">
        <div class="bgsd-gradient card-overlay opacity-95"></div>
    </div>

    <!-- Homepage Slider-->
    <div class="splide single-slider slider-no-arrows homepage-slider mt-4" id="single-slider-1">
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide">
                    <div class="card rounded-m mx-2 text-center shadow-m" data-card-height="170">
                        <a href="{{ url('news') }}">
                            <img src="./images/asset/pic1.jpg">
                            <div class="card-bottom news d-flex align-items-end">
                                <h1 class="font-18 font-400 pb-2 text-white text-start">
                                    Vaccinations from UMY is now Different than Before</h1>
                            </div>
                            <div class="card-overlay bg-gradient-fade2"></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="content mb-2">
        <h5 class="float-start font-16 font-500"><b>SIGOV</b> Services</h5>
        <div class="clearfix"></div>
    </div>

    <div class="row p-4 pt-0 pb-0">
        <div class="splide__slide ps-1 col-3">
            <a href="{{ url('exchange') }}" class="btn p-0 d-block">
                <div class="rounded-s shadow-m text-center bgsd-dark-red text-white">
                    <i class="icon-repeat py-3 d-block font-30"></i>
                </div>
                <div class="text-center mt-3">
                    <h6 class="font-12">Exchange</h6>
                </div>
            </a>

        </div>
        <div class="splide__slide ps-1 col-3">
            <a href="{{ url('letter') }}" class="btn p-0 d-block">
                <div class="rounded-s shadow-m text-center bgsd-pink text-white">
                    <i class="icon-file-text py-3 d-block font-30"></i>
                </div>
                <div class="text-center mt-3">
                    <h6 class="font-12">Letter</h6>
                </div>
            </a>
        </div>
        <div class="splide__slide ps-1 col-3">
            <a href="{{ url('transcript-application') }}" class="btn p-0 d-block">
                <div class="rounded-s shadow-m text-center bgsd-blue text-white">
                    <i class="icon-printer py-3 d-block font-30 text-white"></i>
                </div>
                <div class="text-center mt-3">
                    <h6 class="font-12">Transcript Application</h6>
                </div>
            </a>
        </div>
        <div class="splide__slide ps-1 col-3">
            <a href="{{ url('secondary-supervisor') }}" class="btn p-0 d-block">
                <div class="rounded-s shadow-m text-center bgsd-blur-blue text-white">
                    <i class="icon-users py-3 d-block  font-30"></i>
                </div>
            </a>
            <div class="text-center mt-3">
                <h6 class="font-12">Secondary Supervisor</h6>
            </div>

        </div>

    </div>

    <div class="content mb-2">
        <h5 class="float-start font-16 font-500"><b>Students</b> Capacity Building </h5>
        <a class="float-end font-12 color-highlight mt-n1" href="{{ url('capacity-buildings') }}">View All</a>
        <div class="clearfix"></div>
    </div>

    <div class="row mb-4 mt-4">
        <div class="col-4 pe-0 rounded-s">
            <a href="#" data-menu="menu-detail-capacity-building">
                <div class="card card-style me-0 bgsdimg-1 rounded-s" data-card-height="200">                
                    <div class="card-bottom p-3">
                        <h5 class="color-white font-500 textsd-black">
                            English <br>Booster
                        </h5>
                    </div>
                
                    <div class="card-overlay text-center">
                        <img src="./images/hihello.png" class="p-4 mt-4">
                    </div>
                </div>
            </a>
        </div>

       
        <div class="col-8 ps-0">
            <div class="card card-style bgsdimg-2 mb-2 rounded-s" data-card-height="95">
                <a href="#" data-menu="menu-detail-capacity-building">
                    <div class="card-bottom p-3">
                        <h5 class="color-white font-500 font-14 mb-n1 textsd-black">
                            IGOV <br>Creative Hub
                        </h5>
                    </div>
                </a>
                <div class="card-overlay opacity-60">
                    <img src="./images/asset/lightbulb.png" class="float-end p-4" width="80">
                </div>
            </div>
            <div class="card card-style bgsdimg-3 mb-2 rounded-s" data-card-height="95">
                <a href="#" data-menu="menu-detail-capacity-building">
                    <div class="card-bottom p-3">
                        <h5 class="color-white font-500 font-14 mb-n1 textsd-black">
                            Scholarship <br>Hack 101
                        </h5>
                    </div>
                </a>
                <div class="card-overlay opacity-60">
                    <img src="./images/asset/graduation-cap.png" class="float-end p-3 mt-3" width="80">>
                </div>
            </div>
        </div>
    </div>
      
</div>

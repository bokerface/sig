<div>

    <style>
        .search-button {
            color: rgba(255, 255, 255, 0.644);
            font-size: 17px !important;
            font-weight: 300;
            width: 100%;
            text-align: left;
            padding: 9px 30px;
            margin-top: 10px;
            cursor: text !important;
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
                <a href="#" class="text-pinky" data-menu="menu-profile"><i class="icon-user"></i></a>
                {{-- <a href="{{ url('notification') }}" class="text-pinky"><i
                    class="icon-bell"></i></a> --}}
            </span>
        </div>

        {{-- <div class="search-box search-boxsd search-dark bg-search shadow-m border-0 mt-4 rounded-m bottom-0">
            <i class="icon-search1 ms-n3"></i> --}}
        {{-- <input type="text" class="border-0" placeholder="Search" data-search> --}}
        <button data-menu="menu-search" class="btn bg-search rounded-m search-button"><i class="icon-search1 ms-n3"></i>
            Search
        </button>
        {{-- </div> --}}

    </div>

    <div class="sdcustom card header-card shape-rounded" data-card-height="140" style="height:140px;">
        <div class="bgsd-gradient card-overlay opacity-95"></div>
    </div>

    @livewire('blog-posts')

    <div class="ms-3"><a href="{{ url('all-news') }}">View All News <i class="fas fa-arrow-right"></i></a></div>
        <div class="content mb-2">
            <h5 class="float-start font-16 font-500"><b>SIGOV</b> Services</h5>
            <div class="clearfix"></div>
        </div>

        <div class="row p-4 pt-0 pb-0">
            <div class="splide__slide ps-1 col-3">
                <a href="{{ url('exchange') }}" class="btn p-0 d-block">
                    <div class="rounded-s shadow-m text-center bg-sigov-red text-white">
                        <i class="icon-repeat py-3 d-block font-30"></i>
                    </div>
                </a>

                <div class="text-center mt-3">
                    <h6 class="font-12">Exchange</h6>
                </div>

            </div>
            <div class="splide__slide ps-1 col-3">
                <a href="{{ url('letter') }}" class="btn p-0 d-block">
                    <div class="rounded-s shadow-m text-center bg-sigov-pink text-white">
                        <i class="icon-file-text py-3 d-block font-30"></i>
                    </div>
                </a>

                <div class="text-center mt-3">
                    <h6 class="font-12">Letter</h6>
                </div>
            </div>
            <div class="splide__slide ps-1 col-3">
                <a href="{{ url('transcript-application') }}" class="btn p-0 d-block">
                    <div class="rounded-s shadow-m text-center bg-primary text-white">
                        <i class="icon-printer py-3 d-block font-30 text-white"></i>
                    </div>
                </a>

                <div class="text-center mt-3">
                    <h6 class="font-12">Transcript Application</h6>
                </div>
            </div>
            <div class="splide__slide ps-1 col-3">
                <a href="{{ url('secondary-supervisor') }}" class="btn p-0 d-block">
                    <div class="rounded-s shadow-m text-center bg-sigov-abusma text-white">
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
            <a class="float-end font-12 color-highlight mt-n1"
                href="{{ url('capacity-buildings') }}">View
                All</a>
            <div class="clearfix"></div>
        </div>

        <div class="row mb-4 mt-4">
            <div class="col-4 pe-0 rounded-s">
                <a href="{{ route('form-capacity-building', 7) }}"
                    data-menu="menu-detail-capacity-building">
                    <div class="card card-style me-0 bgsdimg-1 rounded-s" data-card-height="200" style="height:200px;">
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
                <div class="card card-style bgsdimg-2 mb-2 rounded-s" data-card-height="95" style="height:95px;">
                    <a href="{{ route('form-capacity-building', 8) }}"
                        data-menu="menu-detail-capacity-building">
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
                <div class="card card-style bgsdimg-3 mb-2 rounded-s" data-card-height="95" style="height:95px;">
                    <a href="{{ route('form-capacity-building', 9) }}"
                        data-menu="menu-detail-capacity-building">
                        <div class="card-bottom p-3">
                            <h5 class="color-white font-500 font-14 mb-n1 textsd-black">
                                Scholarship <br>Hack 101
                            </h5>
                        </div>
                    </a>
                    <div class="card-overlay opacity-60">
                        <img src="./images/asset/graduation-cap.png" class="float-end p-3 mt-3" width="80">
                    </div>
                </div>
            </div>
        </div>

</div>

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

        .bgsd-grey {
            background-color: #F7F7F8;
        }

        .text-black-sd {
            color: #000;
            font-weight: 500;

        }

        .item-info {

            border-left: solid 5px #FD1049 !important;

        }

        .sdcustom-btnicon {
            padding: 0px 10px 0px 0px;
            display: block !important;
            padding-left: 0px !important;
            overflow: hidden;
            position: relative;
            color: #ffffff;
            border-radius: 0px;
            min-height: 10px !important;
            margin-bottom: 10px;
        }


        .item-info {
            padding: 15px;
        }

        .item-info span {
            color: #c2c2c2;
            float: right;
            right: 15px;
            top: 15px;
            font-weight: 400;
            font-size: medium;
            position: absolute;
        }


        .item-info span.iconsd {
            color: #c2c2c2;
            float: right;
            right: 15px;
            top: 50% !important;
            font-weight: 700;
            font-size: large;
            position: absolute;
        }

    </style>

    <div class="mb-5">
        <div class="page-title mb-5">

            <div class="page-title page-title-small d-flex justify-content-between">
                <h2><a href="#" data-back-button><i class="fas fa-chevron-left me-2"></i> Inbox</a></h2>
            </div>

            <div class="search-box search-boxsd  search-dark bg-search shadow-m border-0 mt-4 rounded-m bottom-0">
                <i class="icon-search1 ms-n3"></i>
                <input type="text" wire:model="search" class="border-0" placeholder="Search">
            </div>

            {{-- <div class="d-flex m-3"> --}}
            {{-- <input type="text" class="border-0 rounded-start p-1 col-10" wire:model.defer="search" id=""> --}}
            {{-- <button class="rounded-end text-light p-1 col-2 bg-search" wire:click="$emit('refreshComponent')"> --}}
            {{-- <i class="icon-search1"></i> Search --}}
            {{-- </button> --}}
            {{-- </div> --}}

        </div>

        <div class="sdcustom card header-card shape-rounded" data-card-height="130">
            <div class="bgsd-gradient card-overlay opacity-95"></div>
        </div>
    </div>


    @foreach($submissions as $submission)

        @if($submission->submission_type != 'transcript')
            <a href="{{ url('inbox-detail',$submission->id) }}"
                class="item-category sdcustom-btnicon bgsd-grey bg-gradient-start btn-margins">
                <div class="item-info text-black">

                    <h5 style="text-transform: capitalize">{{ $submission->letter_type }}</h5>
                    <p class="mb-0">Hello, {{ Session::get('user_data.fullname') }} ...</p>

                    <span style="font-size:12px;">{{ $submission->created_at }}</span>
                    <span class="iconsd">&#8942;</span>
                </div>
            </a>

        @endif

    @endforeach

</div>

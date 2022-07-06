<div>
    <style>
     
     #page-search .bg-search {
            background-color: rgb(255 255 255 / 9%);
        }

        #page-search .bg-search input,
        #page-search  .bg-search input::placeholder {
            color: rgba(80, 76, 76, 0.644);
            font-size: 17px !important;
            font-weight: 300;
        }

        #page-search .bg-search i {
            color: #E43256;
        }

        #page-search .search-box .icon-search1 {
            position: absolute;
            left: 25px;
            line-height: 40px;
            padding: 0px 15px 0px 30px;
            font-size: 18px;
        }

        .btn-searchlist.capacity-building {
            border-left:4px solid #361928;
        }
        .btn-searchlist.exchange {
            border-left:4px solid #AC0023;
        }
        .btn-searchlist.letter {
            border-left:4px solid rgba(227,49,86);
        }
        .btn-searchlist.transcript {
            border-left:4px solid #2D55CA;
        }
        .btn-searchlist.secondary_supervisor {
            border-left:4px solid rgba(136,154,224);
        }

    </style>

    <div class="mb-2" id="page-search">
        <div class="page-title mb-5">

            <div class="page-title page-title-small d-flex justify-content-between">
                <h2><a href="#" class="close-menu"><i class="fas fa-chevron-left me-2"></i> Search</a></h2>
            </div>
            

        </div>

        <div class="search-box search-boxsd  search-dark bg-search shadow-m border-0 rounded-m bottom-0 m-4">
            <i class="icon-search1 ms-n3"></i>
            <input type="text" wire:model="search" class="border-0" placeholder="Type here what you need ..">
        </div>

        <div class="sdcustom card header-card shape-rounded" data-card-height="90" style="height:90px;">
            <div class="bgsd-gradient card-overlay opacity-95"></div>
        </div>
    </div>

    <div class="p-4 pt-2">
        @foreach($submissions as $submission)

            @if ($submission->submission_type != 'capacity_building')
                <a href="{{ url($submission->slug) }}"
                    class="d-block p-1 btn btn-s btn-light mb-1 btn-searchlist {{ $submission->submission_type }}" style="color:#666666; text-align:left;">{{ $submission->name }}  
                </a>
            @else
            <a href="{{ url('capacity-building', $submission->id) }}"
                class="d-block p-1 btn btn-s btn-light mb-1 btn-searchlist capacity-building" style="color:#666666; text-align:left;">{{ $submission->name }}  
            </a>
            @endif

            

        @endforeach
    </div>

</div>

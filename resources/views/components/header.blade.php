<div>
    <style>
        /* .page-title {
            margin: 20px 20px 20px 20px;
        }

        .page-title-small h2 {
            font-size: 18px !important;
            padding-top: 0;
        }

        .page-title-small h2 i {
            font-size: 15px;
        }

        .page-title-small h2 a {
            padding-right: 20px;
        }

        .page-title .subtitle {
            font-size: 16px;
        } */

    </style>


    <div class="page-title page-title-small px-2">
        <h2><a href="#" @if($modal == 'true') class="close-menu" @else data-back-button @endif ><i class="icon-arrow-left me-1"></i> {{ $title }}</a></h2>
       
        @if($type == 'large')  
            <div class="row d-flex align-items-center mt-4 mb-2" style="height:{{ $height-($height*30/100) }}px;">
                <div class="col-9">
                    <div class="text-white subtitle font-16 font-400">
                        {!!$subtitle !!}
                    </div>
                </div>
                <div class="col-3">
                    <p class="font-40 text-white text-center m-0 p-0"><i class="{{ $icon }}"></i></p>
                </div>
            </div>   
        @endif
    </div>

    <div class="sdcustom-small card header-card shape-rounded" style="height:{{ $height }}px;">
        <div class="{{ $bg }} bgsd-circleimg-title-{{ $type }} card-overlay">
        </div>
    </div>


    
</div>

<div>
    <style>
        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

        .page-title h2 a {
            color: #FD1049
        }

        .bgsd-grey {
            background-color: #F7F7F8;
        }

        .bgsd-circleimg-pink {
            background-image: url("./images/asset/cpink.png");
            background-position: 200px -200px;
            background-repeat: no-repeat;
        }

        /* ------ */

        .sdcustom-btnicon {
            background-position: -45px -20px;
            background-repeat: no-repeat;
            padding-left: 100px !important;
        }

        .bgsd-circleimg-small-pink {
            background-image: url("./images/asset/cpink.png");

        }

        .bgsd-circleimg-small-cblue1 {
            background-image: url("./images/asset/cblue1.png");
        }

        .bgsd-circleimg-small-cyellow {
            background-image: url("./images/asset/cyellow.png");
        }

        .bgsd-circleimg-small-ctosca {
            background-image: url("./images/asset/ctosca.png");
        }

        .bgsd-circleimg-small-csoftblue {
            background-image: url("./images/asset/csoftblue.png");
        }

        .bgsd-circleimg-small-cbluepastel {
            background-image: url("./images/asset/cbluepastel.png");
        }

        .text-black-sd {
            color: #000;
            font-weight: 500;

        }

    </style>
<x-header title="Student Capacity Building" subtitle="Student Capacity Building is a program that designed to improve student's abilities and capabilities.transc" bg="bgsd-gradient" height="230" icon="far fa-comment-dots" type="large" modal="" />

    <div class="p-2">
        <a href="{{ route('form-capacity-building',7) }}"
            class="sdcustom-btnicon bgsd-grey bgsd-circleimg-small-pink bg-gradient-start btn-margins">
            <span class="icon d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/asset/hi.png') }}" />
            </span>
            <span class="text d-flex align-items-center text-black-sd">English Booster</span>
        </a>

        <a href="{{ route('form-capacity-building',8) }}"
            class="sdcustom-btnicon bgsd-grey bgsd-circleimg-small-cblue1 bg-gradient-start btn-margins">
            <span class="icon d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/asset/bulb.png') }}" />
            </span>
            <span class="text d-flex align-items-center text-black-sd">IGOV Creative Hub</span>
        </a>

        <a href="{{ route('form-capacity-building',9) }}"
            class="sdcustom-btnicon bgsd-grey bgsd-circleimg-small-cyellow bg-gradient-start btn-margins">
            <span class="icon d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/asset/cap.png') }}" />
            </span>
            <span class="text d-flex align-items-center text-black-sd">Scholarship Hack 101</span>
        </a>

        <a href="{{ route('form-capacity-building',10) }}"
            class="sdcustom-btnicon bgsd-grey bgsd-circleimg-small-ctosca bg-gradient-start btn-margins">
            <span class="icon d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/asset/mags.png') }}" />
            </span>
            <span class="text d-flex align-items-center text-black-sd">IGOV Hello Research</span>
        </a>

        <a href="{{ route('form-capacity-building',11) }}"
            class="sdcustom-btnicon bgsd-grey bgsd-circleimg-small-csoftblue bg-gradient-start btn-margins">
            <span class="icon d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/asset/bag.png') }}" />
            </span>
            <span class="text d-flex align-items-center text-black-sd">Digital Enterpreneurship</span>
        </a>

        <a href="{{ route('form-capacity-building',12) }}"
            class="sdcustom-btnicon bgsd-grey bgsd-circleimg-small-cbluepastel bg-gradient-start btn-margins">
            <span class="icon d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/asset/cert.png') }}" />
            </span>
            <span class="text d-flex align-items-center text-black-sd">Sertifikasi Kompetensi</span>
        </a>
    </div>

</div>

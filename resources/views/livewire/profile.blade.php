<div>

    <style>
        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

    </style>

    <x-header title="Profile" subtitle="" bg="bgsd-gradient" height="170" icon="" type="large" modal="true" />

    @php
        $studentid = Session::get('user_data.user_id');
        $year = substr($studentid, 0, 4);
        $foto = 'https://krs.umy.ac.id/FotoMhs/' . $year . '/' . $studentid . '.jpg';
    @endphp
    <div class="page light profile">
        <div class="profile-pic">
            <div class="students-pict text-center mask">
                <img src="{{ $foto }}">
            </div>
            <div class="mask-overlay"></div>
        </div>


        <div class="p-5 pt-2 pb-0">

            <div class="row">
                <div class="col-12">
                    <label class="title">Name</label>
                    <span class="judul">{{ Session::get('user_data.fullname') }}</span>
                </div>

            </div>
            <div class="row">
                <div class="col-8">
                    <label class="title">Student ID</label>
                    <span class="judul">{{ $studentid }}</span>
                </div>
                <div class="col-4">
                    <label class="title">Status</label>
                    <span class="judul">Active</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="title">Phone Number</label>
                    <span class="judul">(+62) 813 2345678</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="title">Email</label>
                    <span class="judul">{{ Session::get('user_data.email') }}</span>
                </div>
            </div>

            <a href="{{ url('logout') }}"
                class="btn btn-s mt-2 mb-4 mx-5 btn-full bg-sigov-pink rounded-m text-uppercase font-300 mt-4">Sign
                Out</a>
        </div>

    </div>

</div>

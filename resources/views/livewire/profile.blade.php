<div>
    <style>
        .profile {
            margin-top: -35%;
            z-index: 9999;
            width: 100%;
        }
    
        .students-pict img {
            max-width: 40%;
        }

        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

        .title {
            color:#E43256;
            display: block;
        }

        .judul {
            color:#242424;
            display: block;
            font-weight:600;
        }
        .profile .row {
            border-bottom:1px solid #c7c7c7;
            margin-bottom:5px;
        }

        .mask {
            -webkit-mask-image: url('{{ asset('./images/mask.png') }}');
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            mask-image: url('{{ asset('./images/mask.png') }}');
            mask-repeat: no-repeat;
            -webkit-mask-position: center;
            mask-position: center;
            z-index:20;
            position:relative;
            background:#3b4e8a;
        }

        .mask img {
            width:130px;
        }
        .profile-pic {
            position: relative;
        }
        .mask-overlay {
            background: transparent url('{{ asset('./images/mask-shadow.png') }}') center top no-repeat;
            height:200px;
            position:absolute;
            top:0;
            width:100%;
            z-index:0;
        }

    </style>
    
    <x-header title="Profile" subtitle="" bg="bgsd-gradient" height="170" icon="" type="large" modal="true"/>
    
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

            <a href="logout" class="btn btn-s mt-2 mb-4 mx-5 btn-full bgsd-pink rounded-m text-uppercase font-900 mt-4">Sign Out</a>


        </div>

        
        
        
    
    </div>
    
    </div>
    
    
    
    
    
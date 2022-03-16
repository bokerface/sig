<div>
  
            <style>
                .igovclass {
                    
                    min-height:50vh;
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

                .loginsd input {
                    background:transparent;
                    border-bottom:1px solid #e62e57 !important;
                }
                .loginsd i {
                    color: #e62e57 !important;
                }

             

            </style>
     

        <div class="bgsd-white loginsd">
            <div class="igovclass bgsd-gradient d-flex align-items-center flex-column">
                <div class="logo-atas mt-4">
                    <img src="./images/asset/igovlogo.png">
                </div>

                <div class="mt-auto">
                    <img src="./images/asset/IGOV-merah.png" width="100">
                    <p>Students Information Service<br><b>IGOV</b></p>
                </div>        

            </div>
                               
            

            <div class="content mb-0 p-2 px-3">

                @if(Session::has("success"))
                <p class="alert alert-success my-2">
                    {{ Session::get('success') }}
                </p>
                @endif
                @if(Session::has("error"))
                <p class="alert alert-danger my-2">
                   {{ Session::get('error') }}
                </p>
                @endif

                <form wire:submit.prevent="login">
                    <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                        <i class="fa fa-user"></i>
                        <input type="text" wire:model="email" class="form-control validate-name" id="form1aa" placeholder="puteri.syifa.ruhama@mail.umy.ac.id">
                        {{-- <label for="form1aa" class="color-highlight mt-1 font-500 font-11">Username</label> --}}
                        {{-- <i class="fa fa-times disabled invalid color-red-dark"></i> --}}
                        {{-- <i class="fa fa-check disabled valid color-green-dark"></i>  --}}
                        @error('email') <i class="fa fa-times disabledd invalid color-red-dark"></i> @enderror
                        {{-- <em>(required)</em> --}}
                    </div>
                    @error('email') <span class="error"><i class="fa fa-times invalid color-red-dark"></i> {{ $message }}</span> @enderror
                    <div class="input-style no-borders has-icon validate-field mb-4">
                        <i class="icon-unlock"></i>
                        <input type="password" wire:model="password" class="form-control validate-password" id="form1aab" placeholder="*****">
                        {{-- <label for="form1aab" class="color-highlight mt-1 font-500 font-11">Password</label> --}}
                        {{-- <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i> --}}
                        {{-- <em>(required)</em> --}}
                        @error('password') <i class="fa fa-times disabledd invalid color-red-dark"></i> @enderror
                        
                    </div>
                    @error('password') <span class="error"><i class="fa fa-times invalid color-red-dark"></i> {{ $message }}</span> @enderror
                    <button class="mt-5 btn btn-full btn-s shadow-l rounded-l bgsd-pink font-300" style="padding:2px;width:100%; font-size:20px !important;">Sign In</button>
                </form>

                <div id="snackbar-5" class="snackbar-toast bg-red-dark" data-bs-delay="1500" data-bs-autohide="true"><i class="fa fa-times me-3"></i>Error Occured</div>
            </div>
       


        </div>   
</div>

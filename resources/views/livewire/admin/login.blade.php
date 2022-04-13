<div>
    <div class="col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="{{ asset('images/logo.png') }}" width="200" class="pt-5 pb-5 mb-5"/>                                      
                            </div>

                            <div class="alert text-center">
                                <p class="text-pinksigov">
                                    @if(Session::has("error"))
                                        &#9888;
                                        {{ Session::get('error') }}
                                    @else
                                        &nbsp;
                                    @endif
                                </p>
                            </div>

                            <form class="user mb-5" wire:submit.prevent="login">
                                <div class="form-group">
                                    <input wire:model="username" type="text" class="form-control form-control-user @error('username')  {! is-invalid !} @enderror"
                                        id="exampleInputusername" aria-describedby="usernameHelp"
                                        placeholder="Username">

                                        @error('username')                                        
                                         <div class="invalid-feedback is-invalid">
                                            {{ $message }}
                                          </div>
                                         @enderror
                                </div>
                                <div class="form-group">
                                    <input wire:model="password" type="password" class="form-control form-control-user @error('password')  {! is-invalid !} @enderror"
                                        id="exampleInputPassword" placeholder="Password">
                                        @error('password')                                        
                                        <div class="invalid-feedback is-invalid">
                                           {{ $message }}
                                         </div>
                                        @enderror
                                </div>
                             
                                <button class="btn btn-pinksigov btn-user btn-block">
                                    Login
                                </button>
                                <hr>
                                
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

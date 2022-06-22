<x-layoutfront>


            <style>
                .igovclass {
                    height: 250px;
                    border-bottom-left-radius: 10%;
                    border-bottom-right-radius: 10%;
                    padding: 15px;
                    text-align: center;
                    color: white;
                }

                .igovclass p {
                    color: white;
                    font-size: 16px;
                    line-height: 16px;
                }

                .logo-atas {
                    text-align: right !important;
                }

                .logo-atas img {
                    width: 100%;
                    max-width: 80px;
                }

                .loginsd .input-style input,
                .loginsd .input-style select,
                .loginsd .input-style textarea {
                    height: 30px;
                    font-size: 14px;
                }

            </style>
 

        <div class="bgsd-white loginsd">
            <div class="igovclass bgsd-gradient">
                <div class="logo-atas mb-4">
                    <img src="./images/asset/Igove Logo.png">
                </div>


                <img src="./images/asset/IGOV-merah.png">
                <p>Students Information Service<br><b>IGOV</b></p>

            </div>
            <div class="card card-style m-0 rounded-0 p-3">
                <div class="content mt-2 mb-0">
                    <form wire:submit.prevent="login">
                        <div class="input-style no-borders has-icon validate-field mb-4">
                            <i class="fa fa-user"></i>
                            <input type="email" wire:model="email" class="form-control validate-name" id="form1a"
                                placeholder="Name">
                            <label for="form1a" class="color-blue-dark font-10 mt-1">Name</label>
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                            <em>(required)</em>
                        </div>

                        <div class="input-style no-borders has-icon validate-field mb-4">
                            <i class="fa fa-lock"></i>
                            <input type="password" wire:model="password" class="form-control validate-password"
                                id="form3a" placeholder="Password">
                            <label for="form3a" class="color-blue-dark font-10 mt-0">Password</label>
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                            <em>(required)</em>
                        </div>
                        <button class="btn btn-s mt-2 mb-4 mx-4 btn-full bgsd-pink rounded-m text-uppercase font-900">
                            Sign In
                        </button>
                    </form>

                    <div class=".d-flex text-center">
                        <div class="font-11 pb-2 color-theme opacity-60 pb-3"><a href="#" class="color-theme">Need
                                Help?</a>
                        </div>
                        <!-- <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-end"><a href="#" class="color-theme">Forgot Credentials</a></div> -->
                    </div>
                </div>

            </div>
        </div>
</x-layoutfront>

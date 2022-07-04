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

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="icon-user"></i></span>
                <input type="text" wire:model="username" class="form-control @error('username')  {! is-invalid !} @enderror" placeholder="yourname@mail.umy.ac.id" aria-label="Email" aria-describedby="basic-addon1">

                @error('username')
                <div class="invalid-feedback">
                    <i class="fa fa-times invalid color-sigov-red"></i> {{ $message }}
                </div>
                @enderror

            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="password"><i class="icon-unlock"></i></span>
                <input type="password" wire:model="password" class="form-control @error('password')  {! is-invalid !} @enderror" placeholder="KRS Password" aria-label="Password" aria-describedby="password">

                @error('password')
                <div class="invalid-feedback">
                    <i class="fa fa-times invalid color-sigov-red"></i> {{ $message }}
                </div>
                @enderror

            </div>


            <button class="mt-5 btn btn-full btn-s shadow-l rounded-l bg-pink font-300">Sign In</button>
        </form>

       
    </div>
</div>
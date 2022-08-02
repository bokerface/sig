<div>
    @section('page-title')
    Add New Supervisor
    @endsection
    <div class="col-md-7 mx-auto">
        <div class="card">
            <div class="card-header">
                Supervisor Form
            </div>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <div class="row">
                            <label for="username"
                                class="col-4 my-auto align-self-center {{ $errors->has('username') ? 'text-danger' : '' }}">
                                Username
                            </label>
                            <input type="text" wire:model="username" class="form-control col-8" autocomplete="nope">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('username') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="name"
                                class="col-4 my-auto align-self-center {{ $errors->has('name') ? 'text-danger' : '' }}">
                                Supervisor Name
                            </label>
                            <input type="text" wire:model="name" id="name" class="form-control col-8"
                                autocomplete="nope">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('name') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="phone_number"
                                class="col-4 my-auto align-self-center {{ $errors->has('phone_number') ? 'text-danger' : '' }}">
                                Phone Number
                            </label>
                            <input type="text" wire:model="phone_number" id="phone_number" class="form-control col-8"
                                autocomplete="nope">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('phone_number') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="email"
                                class="col-4 my-auto align-self-center {{ $errors->has('email') ? 'text-danger' : '' }}">
                                Email
                            </label>
                            <input type="text" wire:model="email" id="email" class="form-control col-8"
                                autocomplete="nope">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('email') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="profile"
                                class="col-4 {{ $errors->has('profile') ? 'text-danger' : '' }}">
                                Profile
                            </label>
                            <textarea wire:model="profile" id="profile" class="form-control col-8" cols="30"
                                rows="3"></textarea>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('profile') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="password"
                                class="col-4 my-auto align-self-center {{ $errors->has('password') ? 'text-danger' : '' }}">
                                Password
                            </label>
                            <input type="password" wire:model="password" id="password" class="form-control col-8"
                                autocomplete="off">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('password') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="password_confirmation"
                                class="col-4 my-auto align-self-center {{ $errors->has('password_confirmation') ? 'text-danger' : '' }}">
                                Repeat Password
                            </label>
                            <input type="password" wire:model="password_confirmation" id="password_confirmation"
                                class="form-control col-8" autocomplete="nope">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('password_confirmation') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        @livewire('admin.meta')
    </div>
</div>

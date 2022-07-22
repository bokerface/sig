<div>
    @section('page-title')
    Settings
    @endsection
    <div class="col-md-7 mx-auto">
        <div class="card">
            <div class="card-header">
                Change Settings
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update_setting">
                    <div class="form-group">
                        <div class="row">
                            <label for="director_name"
                                class="col-4 my-auto align-self-center {{ $errors->has('director_name') ? 'text-danger' : '' }}">
                                Director Name
                            </label>
                            <input type="text" wire:model="director_name" class="form-control col-8"
                                autocomplete="nope">
                            <input type="hidden" wire.model="setting_id_director_name">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('director_name') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="director_nik"
                                class="col-4 my-auto align-self-center {{ $errors->has('director_nik') ? 'text-danger' : '' }}">
                                Director NIK
                            </label>
                            <input type="text" wire:model="director_nik" class="form-control col-8" autocomplete="nope">
                            <input type="hidden" wire.model="setting_id_director_nik">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('director_nik') }}
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

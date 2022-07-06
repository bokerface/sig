<div>
    @section('page-title')
    Add New Exchange Destination
    @endsection
    <div class="col-md-7 mx-auto">
        <div class="card">
            <div class="card-header">
                Destination Form
            </div>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <div class="row">
                            <label for="destination_country"
                                class="col-3 my-auto align-self-center {{ $errors->has('destination_country') ? 'text-danger' : '' }}">
                                Destination Country
                            </label>
                            <input type="text" wire:model="destination_country" id="destination_country"
                                class="form-control col-9">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-3"></div>
                            <small class="text-danger col-9 m-0">
                                {{ $errors->first('destination_country') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Add New</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        @livewire('admin.meta')
    </div>
</div>

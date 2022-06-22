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
                            <label for="name"
                                class="col-4 my-auto align-self-center {{ $errors->has('name') ? 'text-danger' : '' }}">
                                Supervisor Name
                            </label>
                            <input type="text" wire:model="name" id="name" class="form-control col-8">
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
                            <label for="note"
                                class="col-4 {{ $errors->has('note') ? 'text-danger' : '' }}">
                                Description
                            </label>
                            <textarea wire:model="note" id="note" class="form-control col-8" cols="30"
                                rows="3"></textarea>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-4"></div>
                            <small class="text-danger col-8 m-0">
                                {{ $errors->first('note') }}
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

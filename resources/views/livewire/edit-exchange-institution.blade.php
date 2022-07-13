<div>
    @section('page-title')
    Add New Exchange University
    @endsection
    <div class="col-md-7 mx-auto">
        <div class="card">
            <div class="card-header">
                University Form
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update">
                    <div class="form-group">
                        <div class="row">
                            <label for="institution_name"
                                class="col-3 my-auto align-self-center {{ $errors->has('institution_name') ? 'text-danger' : '' }}">
                                University Name
                            </label>
                            <input type="text" wire:model="institution_name" id="institution_name"
                                class="form-control col-9">
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-3"></div>
                            <small class="text-danger col-9 m-0">
                                {{ $errors->first('institution_name') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="destination"
                                class="col-3 my-auto align-self-center {{ $errors->has('destination') ? 'text-danger' : '' }}">
                                Destination
                            </label>
                            <select wire:model="selected_destination" id="selected_destination"
                                class="form-control col-9">
                                <option>Choose Destination</option>
                                @foreach($destinations as $destination)
                                    <option value="{{ $destination->id }}" wire:key="{{ $destination->id }}">
                                        {{ $destination->destination }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-3"></div>
                            <small class="text-danger col-9 m-0">
                                {{ $errors->first('destination') }}
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-3 my-auto align-self-center">
                            </label>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" wire:model.defer="status"
                                    value="{{ $status }}" id="status">
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        @livewire('admin.meta')
    </div>
</div>

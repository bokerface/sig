<div>
    @section('page-title')
    Exchange
    @endsection
    <div class="row">
        <div class="col-md-7">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Add Institution
            </button>

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                                </div>
                                <input wire:model="search" type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">

                            <div class="row">
                                <div class="col-md-8 pt-2 text-right">
                                    Show
                                </div>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="paginate">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsives">
                        <table class="table table-bordered" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Destination</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1
                                @endphp

                                @foreach($institutions as $institution)

                                    <tr>
                                        <td>{{ $institution->institution; }}</td>
                                        <td>{{ $institution->destination; }}</td>
                                        <td>{{ $institution->status; }}</td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                        {{ $institutions->links() }}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            @livewire('admin.meta')
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="col-12">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Institution Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group row">
                                <label for="institution_name" class="col-sm-3">Institution Name</label>
                                <input type="text" name="institution_name" id="institution_name"
                                    class="form-control col-sm-9">
                            </div>
                            <div class="form-group row">
                                <label for="destination" class="col-sm-3">Destination</label>
                                <input type="text" name="destination" id="destination" class="form-control col-sm-9">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add New</button>
                </div>
            </div>
        </div>
    </div>
</div>

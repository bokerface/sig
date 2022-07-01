<div>
    @section('page-title')
    Exchange
    @endsection
    <div class="row">
        <div class="col-md-12">

            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Add Institution
            </button> --}}

            <a href="{{ route('add-supervisor') }}" class="btn btn-primary mb-3">
                Add New Supervisor
            </a>

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
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Profile</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1
                                @endphp

                                @foreach($supervisors as $supervisor)

                                    <tr>
                                        <td>{{ $supervisor->name; }}</td>
                                        <td>{{ $supervisor->phone; }}</td>
                                        <td>{{ $supervisor->email; }}</td>                                
                                        <td>{{ $supervisor->keterangan; }}</td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                        {{ $supervisors->links() }}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            @livewire('admin.meta')
        </div>
    </div>
</div>

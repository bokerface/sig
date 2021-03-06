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

            <a href="{{ route('add-exchange-institution') }}" class="btn btn-primary mb-3">
                Add University
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
                                    <th>Institution Name</th>
                                    <th>Country</th>
                                    {{-- <th>Status</th> --}}
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1
                                @endphp

                                @foreach($institutions as $institution)

                                    <tr>
                                        <td>
                                            <a
                                                href="{{ route('edit-exchange-institution',$institution->id) }}">
                                                {{ $institution->institution; }}
                                            </a>
                                        </td>
                                        <td>{{ $institution->destination; }}</td>
                                        {{-- <td>{{ $institution->status; }}</td> --}}
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

</div>

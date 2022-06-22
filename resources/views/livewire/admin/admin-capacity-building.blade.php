<div>
    @section('page-title')
    Capacity Building
    @endsection
    <div class="row">
        <div class="col-md-10 offset-md-1">
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
                                    <th width="10">No</th>
                                    <th width="50">Student Id</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1
                                @endphp

                                @foreach($capacity_buildings as $capacity_building)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <a
                                                href="{{ route('submission-detail',$capacity_building->id) }}">
                                                {{ $capacity_building->student_id; }}
                                            </a>
                                        </td>
                                        <td>{{ $capacity_building->fullname; }}</td>
                                        <td>{{ $capacity_building->created_at; }}</td>
                                        <td>{{ $capacity_building->status; }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $capacity_buildings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    @section('page-title')
    Exchange
    @endsection
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-7">
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

                                @foreach($exchanges as $exchange)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <a href="#" wire:click="getMeta({{ $exchange->id }})">
                                                {{ $exchange->student_id; }}
                                            </a>
                                        </td>
                                        <td>{{ $exchange->fullname; }}</td>
                                        <td>{{ $exchange->created_at; }}</td>
                                        <td>{{ $exchange->status; }}</td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>

                        {{ $exchanges->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            @livewire('admin.meta')
        </div>
=======
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsives">
                <table class="table table-bordered" id="dataTables" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10">No</th>
                            <th width="50">Student Id</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th style="width:120px;">&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $i = 1
                        @endphp

                        @foreach($exchanges as $exchange)


                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $exchange->student_id; }}</td>
                                <td>{{ $exchange->fullname; }}</td>
                                <td>{{ $exchange->created_at; }}</td>
                                <td>{{ $exchange->status; }}</td>
                                <td class="text-center">
                                    <button wire:click.prevent="detail({{ $exchange->id }})"
                                        class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail"><i
                                            class="fas fa-reply"></i></button>
                                    {{-- <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button> --}}
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="detailLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Reply Exchange</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <table class="table table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>{{ $fullname }} ({{ $student_id }})</td>
                        </tr>
                    </table>


                    @if($modalOpen)
                        @foreach($metass as $meta)

                            {{ $meta->post_type }}

                        @endforeach
                    @endif



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Reply this</button>
                </div>
            </div>
        </div>
>>>>>>> main
    </div>
</div>

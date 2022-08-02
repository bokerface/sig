<div>
    @section('page-title')
    Exchange
    @endsection
    <div class="row">
        {{-- <div class="col-md-8 offset-md-2"> --}}
        <div class="col-12">
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
                                    <th style="width:150px;">Student Id</th>
                                    <th style="width:50%;">Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1
                                @endphp

                                @foreach($exchanges as $exchange)
                                    <tr
                                        class="{{ $exchange->status == 0 ? 'not-verified' : 'verified' }}">
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <a
                                                href="{{ route('submission-detail',$exchange->id) }}">
                                                {{ $exchange->student_id; }}
                                            </a>
                                        </td>
                                        <td>{{ $exchange->fullname; }}</td>
                                        <td>{{ $exchange->created_at; }}</td>
                                        <td>
                                            @if($exchange->status == 0)

                                                Awaiting Verification

                                            @else

                                                Verified

                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-danger"
                                                wire:click="delete({{ $exchange->id }})">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $exchanges->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="form-group row"> --}}
    {{-- <label for="catatan" class="col-3">Catatan <span class="text-muted">(Jika perlu --}}
    {{-- direvisi)</span></label> --}}
    {{-- <textarea id="catatan" cols="30" rows="1" class="form-control col-9 ckeditor"></textarea> --}}
    {{-- </div> --}}
</div>

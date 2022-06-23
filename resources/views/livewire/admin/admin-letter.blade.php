<div>
    @section('page-title')
    Letter
    @endsection 
    
    <div class="row">
        <div class="col-md-12">
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
                                    <th style="width:28%">Letter Type</th>
                                    <th style="width:150px">Student Id</th>
                                    <th style="width:32%">Name</th>
                                    <th style="width:250px">Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @php
                                    $i = 1
                                @endphp
        
                                @foreach($submissions as $submission)        
        
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $submission->name; }}</td>
                                        <td>
                                            <a
                                            href="{{ route('submission-detail',$submission->id) }}">
                                            {{ $submission->student_id; }}
                                        </a>
                                        
                                        </td>
                                        <td>{{ $submission->fullname; }}</td>
                                        <td>{{ $submission->created_at; }}</td>
                                        <td>  
                                            @if($submission->status == 0)
                                                Awaiting Verification                                                
                                            @else
                                                Verified
                                            @endif
                                        </td>                                      
                                    </tr>
        
                                @endforeach
        
                            </tbody>
                        </table>

                        {{ $submissions->links() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-5">
            @livewire('admin.meta')
        </div> --}}
    </div>
</div>
            
       



<div>
    @section('page-title')
    Exchange
    @endsection
    <div class="card shadow mb-4">      
        <div class="card-body">
            <div class="table-responsives">
                <table class="table table-bordered" id="dataTables" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10">No</th>
                            <th width="50">Student Id</th>
                            <th >Name</th>
                            <th >Date</th>
                            <th >Status</th>
                            <th style="width:120px;">&nbsp;</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @php $i = 1 @endphp

                        @foreach ($exchanges as $exchange)
                            
                       
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $exchange->student_id; }}</td>
                            <td>{{ $exchange->fullname; }}</td>
                            <td>{{ $exchange->created_at; }}</td>
                            <td>{{ $exchange->status; }}</td>
                            <td class="text-center">
                                <button wire:click.prevent="detail({{ $exchange->id }})" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail"><i class="fas fa-reply"></i></button> 
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
<div wire:ignore.self class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="detailLabel" aria-hidden="true">
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

            @php

                echo '<pre>'; print_r($metass); echo '</pre>';


            @endphp

            {{-- @foreach($metass as $meta)

               {{ $meta }} 

            @endforeach        --}}
            

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Reply this</button>
        </div>
      </div>
    </div>
  </div>
</div>

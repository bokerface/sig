<div>    
    @if ($click)
  
    <div class="card shadow mb-4">
        <div class="card-body ">  

        <h5>{{ $submission['fullname'] }}</h5>
        <p>{{ $submission['student_id'] }}</p>          
        
                    @foreach ($metas as $meta)

                    @if ($meta['key'] !=='exchange_type')
                        
                   
                    <div class="alert alert-abusma">
                        <div class="row">
                            <div class="col-md-8">
                                {{ $meta['key'] }}
                            </div>
                            <div class="col-md-4">
                                <button title="Download" class="btn btn-sm" wire:click.prevent="download('{{ $meta['value'] }}')"><i class="fas fa-file-pdf"></i></button>
                            </div>
                        </div>
                    </div>

                    @endif


                    @endforeach   

                    <div class="my-3 alert alert-warning">
                        <p>Document Status</p>
                        <form wire:submit.prevent="verify({{ $submission['id'] }})">
                            <select class="form-control mb-1 @error('select_verified') is-invalid @enderror" wire:model="select_verified">
                                <option>- Select Verified -</option>
                                <option value="1" 
                                    @if ($submission['status'] == 1)
                                    selected="true"
                                    @endif
                                >Verified</option>
                                <option value="2"
                                    @if ($submission['status'] == 2)
                                    selected="true"
                                    @endif
                                >Need Revision</option>      
                            </select> 
                            @error('select_verified')
                                <p class="text-danger mb-1">{{ $message }}</p>
                            @enderror                     
                            <button type="submit" class="mt-1 btn btn-warning">Submit</button>
                        </form>  
                    </div>
                

        </div>
    </div> 
              
   @endif
</div>


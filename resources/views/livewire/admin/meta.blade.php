<div>    
    @if ($click)
  
    <div class="card shadow mb-4">
        <div class="card-body ">  

        <h5>{{ $submission['fullname'] }}</h5>
        <p>{{ $submission['student_id'] }}</p>       
        
                    @foreach ($metas as $meta)

                    <div class="card mb-3">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary"> {{ $meta['key'] }}</h6>
                        </div>
                    
                        <div class="card-body">

                                <button title="Download" class="btn btn-sm" wire:click.prevent="download('{{ $meta['value'] }}')"><i class="fas fa-file-pdf"></i></button> 
                                
                                
                                <hr />
                                <form action="" wire:submit.prevent="verifyField({{ $meta['id'] }})">
                                    
                                    <input type="checkbox" id="" class="" wire:model="verified"              
                                    /> Need Revision  
                              
                                   <textarea class="form-control mb-2" wire:model="comment"></textarea>

                                    <button class="btn btn-warning btn-sm">
                                        Submit Comment
                                    </button>
                                </form>          
                            

                        </div>
                    </div>

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


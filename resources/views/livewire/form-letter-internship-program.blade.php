<div>
        <x-modal-title title="Letter Statement for Internship Program"  bg="bg-sigov-pink" />
    
            <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm">  
    
                <div class="form-field">
                    <label for="form5" class="d-block form-label @error('company_destination') text-danger @enderror">Company <span class="text-danger">*</span></label>           
                    <div class="input-group mb-3">
    
                        <input type="text" wire:model="company_destination" id="" class="form-control mb-2" />
                    </div>
                </div>
    
                @error('company_destination')
                    <p class="text-danger mb-2">{{ $message }}</p>
                @enderror

                <div class="form-field">
                    <label for="form5" class="d-block form-label @error('duration') text-danger @enderror">Duration (Months) <span class="text-danger">*</span></label>           
                    <div class="input-group mb-3">
    
                        <input type="number" wire:model="duration" id="" class="form-control mb-2" />
                    </div>
                </div>
    
                @error('duration')
                    <p class="text-danger mb-2">{{ $message }}</p>
                @enderror

                <div class="form-field">
                    <label for="form5" class="d-block form-label @error('send_to') text-danger @enderror">Send to (surat ditujukan kepada) <span class="text-danger">*</span></label>           
                    <div class="input-group mb-3">
    
                        <input type="text" wire:model="send_to" id="" class="form-control mb-2" />
                    </div>
                </div>
    
                @error('send_to')
                    <p class="text-danger mb-2">{{ $message }}</p>
                @enderror
    
                <button type="submit" class="btn btn-md bg-sigov-pink rounded-m px-4">Request</button>
           
            </form>
        
    
      
    </div>   
            
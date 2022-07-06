<div>
        <x-modal-title title="Letter Statement for Internship Program"  bg="bg-sigov-pink" />
    
            <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm">  
    
                <div class="form-field mb-2">
                    <label for="form5" class="d-block form-label @error('company_destination') text-danger @enderror">Company <span class="text-danger mb-1">*</span>
                    <span class="text-muted">E.g : Kantor Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Pati, Pemerintah Daerah Kabupaten Bantul.</span></label>           
                    <div class="input-group">    
                        <input type="text" wire:model="company_destination" id="" class="form-control @error('company_destination') is-invalid @enderror" />                        
                    </div>
                    @error('company_destination')
                    <p class="text-danger mb-1">{{ $message }}</p>
                    @enderror
                </div>              

                <div class="form-field mb-2">
                    <label for="form5" class="d-block form-label @error('company_division') text-danger @enderror">Division <span class="text-danger mb-1">*</span>
                    <span class="text-muted">E.g : Community Outreach Intern, Humas.</span></label>
                    <div class="input-group">    
                        <input type="text" wire:model="company_division" id="" class="form-control @error('company_division') is-invalid @enderror" />
                    </div>  
                    @error('company_division')
                    <p class="text-danger mb-1">{{ $message }}</p>
                    @enderror                  
                </div>               

                <div class="form-field mb-2">
                    <label for="form5" class="d-block form-label @error('start_date') text-danger @enderror">Start Date<span class="text-danger mb-1">*</span></label>           
                    <div class="input-group">    
                        <input type="date" wire:model="start_date" id="" class="form-control @error('start_date') is-invalid @enderror" />
                    </div>
                    @error('start_date')
                    <p class="text-danger mb-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <div class="form-field mb-2">
                    <label for="form5" class="d-block form-label @error('end_date') text-danger @enderror">End Date<span class="text-danger mb-1">*</span></label>           
                    <div class="input-group">    
                        <input type="date" wire:model="end_date" id="" class="form-control @error('end_date') is-invalid @enderror" />
                    </div>
                    @error('end_date')
                    <p class="text-danger mb-1">{{ $message }}</p>
                    @enderror
                </div>            

                <div class="form-field mb-4">
                    <label for="form5" class="d-block form-label @error('your_mobile') text-danger @enderror">Your mobile number <span class="text-danger mb-1">*</span>
                        <span class="text-muted">E.g : 0812345678</span>
                    </label>           
                    <div class="input-group">                        
                        <input type="text" wire:model="your_mobile" id="" class="form-control @error('your_mobile') is-invalid @enderror" />
                    </div>
                    @error('your_mobile')
                    <p class="text-danger mb-1">{{ $message }}</p>
                    @enderror
                </div>
    
               
    
                <button type="submit" class="btn btn-md bg-sigov-pink rounded-m px-4">Request</button>
           
            </form>
        
    
      
    </div>   
            
<div>  

   <x-modal-title title="Outbound Exchange"  bg="bg-sigov-red" />
   

    <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm" enctype="multipart/form-data">
        <h4 class="mb-3 font-600 text-sigov-red">Documents needed</h4>

        <div class="mb-2">
            <label for="inputfile" class="form-label @error('curriculum_vitae') text-danger @enderror" >Curriculum Vitae <span class="text-danger">*</span></label>

            <input type="file" wire:model="curriculum_vitae" class="form-control @error('curriculum_vitae') is-invalid @enderror"> 
            
            <span class="text-muted">Filetype: .pdf</span>  
            
            @error('curriculum_vitae')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-2">
            <label for="inputfile" class="form-label @error('motivation_letter') text-danger @enderror">Motivation Letter <span class="text-danger">*</span></label>
            
            <input type="file" wire:model="motivation_letter" class="form-control @error('motivation_letter') is-invalid @enderror">

            <span class="text-muted">Filetype: .pdf</span>  

            @error('motivation_letter')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror 

        </div>
        
        <div class="mb-2">
            <label for="inputfile" class="form-label @error('passport') text-danger @enderror">Scanned Copy of Passport <span class="text-danger">*</span></label>
            
            <input type="file" wire:model="passport" class="form-control @error('passport') is-invalid @enderror">

            <span class="text-muted">Biodata page only. Filetype: .pdf</span>   

            @error('passport')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-2">
            <label for="inputfile" class="form-label @error('certificate') text-danger @enderror">Scanned Copy of English Proficiency Certificate <span class="text-danger">*</span></label>
            
            <input type="file" wire:model="certificate" class="form-control @error('certificate') is-invalid @enderror">

            <span class="text-muted">Min. 450= KKU, MAEJO, UUM. Min. 480= USM. Min. 500=
                Thammasat University, UM, and all east Asia and European
                University. Filetype: .pdf</span>   

            @error('certificate')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-3">
            <label for="inputfile" class="form-label @error('photo') text-danger @enderror">Latest Photograph <span class="text-danger">*</span></label>
            
            <input type="file" wire:model="photo" class="form-control @error('photo') is-invalid @enderror">

            <span class="text-muted">Filetype: .jpg. Max file size: 1MB</span> 

            @error('photo')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror  

        </div>
         

        <button type="submit" class="btn btn-md btn-danger rounded-m px-4">Submit</button>
    </form>
    
</div> 

    


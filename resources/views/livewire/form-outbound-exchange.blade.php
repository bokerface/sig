<div>  

   <x-modal-title title="Outbound Exchange"  bg="bgsd-dark-red" />

    <form class="p-4 formsd" wire:submit.prevent="handleForm">
        <h4 class="mb-4 font-600 sdtitle-red">Documents needed</h4>

        <div class="form-group mb-4">
            <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0"> 
                <input type="file" class="form-control "  >
                <label for="form1ab" class="color-theme  text-uppercase font-700 font-10">Curriculum Vitae</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>            
            </div>
            <span class="text-muted">Filetype: .pdf</span>
        </div>
        <div class="form-group mb-4">
            <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0"> 
                <input type="file" class="form-control "  >
                <label for="form1ab" class="color-theme  text-uppercase font-700 font-10">Motivation Letter</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>            
            </div>
            <span class="text-muted">Filetype: .pdf</span>
        </div>
        <div class="form-group mb-4">
            <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0"> 
                <input type="file" class="form-control "  >
                <label for="form1ab" class="color-theme  text-uppercase font-700 font-10">Latest Academic Transcript</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>            
            </div>
            <span class="text-muted">Filetype: .pdf</span>
        </div>
        <div class="form-group mb-4">
            <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0"> 
                <input type="file" class="form-control "  >
                <label for="form1ab" class="color-theme  text-uppercase font-700 font-10">Scanned Copy of Passport</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>            
            </div>
            <span class="text-muted"> Biodata page only. Filetype: .pdf</span>
        </div>
        <div class="form-group mb-4">
            <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0"> 
                <input type="file" class="form-control "  >
                <label for="form1ab" class="color-theme  text-uppercase font-700 font-10">Scanned Copy of English Proficiency Certificate
                </label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>            
            </div>
            <span class="text-muted"> Min. 450= KKU, MAEJO, UUM. Min. 480= USM. Min. 500=
                Thammasat University, UM, and all east Asia and European
                University. Filetype: .pdf</span>
        </div>
        <div class="form-group mb-4">
            <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0"> 
                <input type="file" class="form-control "  >
                <label for="form1ab" class="color-theme  text-uppercase font-700 font-10"> Latest Photograph</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>            
            </div>
            <span class="text-muted">Filetype: .jpg.</span>
        </div>        

        <button type="submit" class="btn btn-md btn-danger rounded-m px-4">Submit</button>
    </form>
</div> 

    


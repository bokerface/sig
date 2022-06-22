<div>
    <x-modal-title title="Letter of Dispensation For Payment" bg="bg-sigov-pink" />



    <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm" enctype="multipart/form-data">

        <p>Before applying for a payment dispensation, please download the following template which must be
            signed by your parents. <a
                href="{{ asset('template-doc/statement-letter-template.docx') }}">Download template
                here.</a></p>

        <h4 class="mb-3 font-600 text-sigov-red">Documents needed</h4>

        <div class="mb-2">
            <label for="inputfile" class="form-label @error('statement_letter') text-danger @enderror">Statement letter
                from your parents
                <span class="text-danger">*</span></label>

            <input type="file" wire:model="statement_letter"
                class="form-control @error('statement_letter') is-invalid @enderror">

            <span class="text-muted">Filetype: .pdf</span>

            @error('statement_letter')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror
        </div>


        <button type="submit" class="btn btn-md btn-danger rounded-m px-4">Submit</button>
    </form>




</div>

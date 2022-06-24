<div>
    <x-header title="Secondary Supervisor" subtitle="Secondary supervisor is supervisor
    who will guide you to correct the
    grammar of your thesis." bg="bg-sigov-abusma" height="230" icon="icon-users" type="large" modal="" />

    <form action="" class="p-4 pt-2  formsd" wire:submit.prevent="handleForm" enctype="multipart/form-data">

        <h4 class="mb-3 font-600 text-sigov-red">Documents needed</h4>

        <div class="mb-2">
            <label for="form5" class="d-block form-label @error('title') text-danger @enderror">Title UG Thesis <span
                    class="text-danger">*</span></label>

            <input type="text" wire:model="title" id="" class="form-control mb-2" />


            @error('title')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror
        </div>



        <div class="mb-2">
            <label for="inputfile" class="form-label @error('thesis') text-danger @enderror">Thesis Proposal <span
                    class="text-danger">*</span></label>

            <input type="file" wire:model="thesis" class="form-control @error('thesis') is-invalid @enderror">

            <span class="text-muted">Filetype: .docx</span>

            @error('thesis')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-2">
            <label for="inputfile" class="form-label @error('sempro') text-danger @enderror">Proof <span
                    class="text-danger">*</span></label>

            <input type="file" wire:model="proof" class="form-control @error('sempro') is-invalid @enderror">

            <span class="text-muted">Capture/Berita Acara Seminar Proposal. Filetype: .jpg</span>

            @error('sempro')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror

        </div>

        <button type="submit" class="btn btn-md btn-sigov-abusma rounded-m px-4">Submit</button>
    </form>

</div>

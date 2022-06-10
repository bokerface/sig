<div>
    <x-modal-title title="Letter of Recommendation for Pasport" bg="bg-sigov-pink" />

    <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm">

        <div class="form-field">
            <label for="form5" class="d-block form-label @error('imigration_office') text-danger @enderror">Name
                Immigration Office. (Exp: Kantor Imigrasi Yogyakarta) <span class="text-danger">*</span></label>
            <div class="input-group mb-3">
                <input type="text" wire:model="imigration_office" id="" class="form-control mb-2" />
            </div>
        </div>

        @error('imigration_office')
            <p class="text-danger mb-2">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn btn-md bg-sigov-pink rounded-m px-4">Request</button>

    </form>



</div>

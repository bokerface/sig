<div>
    <x-modal-title title="Letter Statement for Active Student"  bg="bg-sigov-pink" />

    <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm">  
        
        
        <div class="form-field">
            <label for="form5" class="d-block form-label @error('purpose') text-danger @enderror">Purpose <span class="text-danger">*</span></label>
            <div class="input-group mb-3">
                <input type="text" wire:model="purpose" id="" class="form-control mb-2" />
            </div>
        </div>

        @error('purpose')
            <p class="text-danger mb-2">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn btn-md btn-sigov-pink rounded-xl px-4" style="padding:12px;width:100%; font-size:18px !important;">Request Letter</button>
    </form>
</div>
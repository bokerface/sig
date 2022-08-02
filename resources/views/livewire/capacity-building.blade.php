<div>

    <x-modal-title title="{{ $letter_type->name }}" bg="bg-sigov-red" />


    <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm" enctype="multipart/form-data">
        <div class="mb-2">
            <label for="inputfile" class="form-label @error('phone_number') text-danger @enderror">
                {{ $description }}
            </label>
        </div>
        <h4 class="mb-3 font-600 text-sigov-red">Data needed</h4>

        <div class="mb-2">
            <label for="inputfile" class="form-label @error('phone_number') text-danger @enderror">Phone Number
                <span class="text-danger">*</span></label>

            <input type="text" wire:model="phone_number"
                class="form-control @error('phone_number') is-invalid @enderror">

            @error('phone_number')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="inputfile" class="form-label @error('motivation') text-danger @enderror">
                Motivation<span class="text-danger">*</span>
            </label>

            <textarea wire:model="motivation" class="form-control @error('motivation') is-invalid @enderror" id=""
                cols="30" rows="10"></textarea>

            @error('motivation')
                <p class="text-danger mb-2">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-danger rounded-m px-4">Submit</button>
    </form>

</div>

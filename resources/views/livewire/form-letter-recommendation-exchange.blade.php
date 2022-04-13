 <div>
    <x-modal-title title="Letter of Recommendation for Exchange (IRO)"  bg="bg-sigov-pink" />

        <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm">  

            <div class="form-field">
                <label for="form5" class="d-block form-label @error('exchange_destination_id') text-danger @enderror">Destination <span class="text-danger">*</span></label>           
                <div class="input-group mb-3">

                    <select id="form5" wire:model="exchange_destination_id"  class="form-control @error('exchange_destination_id') is-invalid @enderror">
                        <option value="" selected>Select Destination</option>

                        @foreach ($destinations as $destination)
                            <option value="{{ $destination->id }}">{{ $destination->destination }}</option>
                        @endforeach
                    </select>
                    <span class="input-group-text" id="password"><i class="fas fa-chevron-down"></i></span>
                
                </div>

                @error('exchange_destination_id')
                    <p class="text-danger mb-2">{{ $message }}</p>
                @enderror
            </div>

               
            <button type="submit" class="btn btn-md bg-sigov-pink rounded-m px-4">Submit</button>
        </form>
    

  
</div>   
        
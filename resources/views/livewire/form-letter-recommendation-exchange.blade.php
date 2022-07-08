 <div>
     <x-modal-title title="Letter of Recommendation for Exchange (IRO)" bg="bg-sigov-red" />

     <form class="p-4 pt-2 formsd" wire:submit.prevent="handleForm">

         <div class="form-field">
             <label for="form5" class="d-block form-label @error('exchange_destination') text-danger @enderror">Country
                 <span class="text-danger">*</span></label>
             <div class="input-group mb-3">

                 <select id="form5" wire:model="exchange_destination"
                     class="form-control @error('exchange_destination') is-invalid @enderror">
                     <option value="" selected>Select Country</option>

                     @foreach($destinations as $destination)
                         <option value="{{ $destination->id }}">{{ $destination->destination }}</option>
                     @endforeach
                 </select>
                 <span class="input-group-text" id="password"><i class="fas fa-chevron-down"></i></span>

             </div>

             @error('exchange_destination')
                 <p class="text-danger mb-2">{{ $message }}</p>
             @enderror
         </div>

         <div class="form-field">
             <label for="form5"
                 class="d-block form-label @error('exchange_institution') text-danger @enderror">University <span
                     class="text-danger">*</span></label>
             <div class="input-group mb-3">

                 <select id="form5" wire:model="exchange_institution"
                     class="form-control @error('exchange_institution') is-invalid @enderror">
                     <option value="" selected>Select University</option>

                     @foreach($exchange_institutions as $institution)
                         <option value="{{ $institution->id }}">{{ $institution->institution }}</option>
                     @endforeach
                 </select>
                 <span class="input-group-text" id="password"><i class="fas fa-chevron-down"></i></span>

             </div>

             @error('exchange_institution')
                 <p class="text-danger mb-2">{{ $message }}</p>
             @enderror
         </div>


         <button type="submit" class="btn btn-md bg-sigov-pink rounded-m px-4">Submit</button>
     </form>



 </div>

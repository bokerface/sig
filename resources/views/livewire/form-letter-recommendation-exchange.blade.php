
 <div>
    <x-modal-title title="Letter of Recommendation for Exchange (IRO)"  bg="bgsd-pink" />

    <div class="p-4">    
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

 
        <form class="overflow-scroll" wire:submit.prevent="handleForm">  
            <input type="text" wire:model="letter_type_id" />

                {{-- <div class="form-group mb-4" >
                    <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0">
                        <label for="form5" class="color-theme text-uppercase font-700 font-10">Exchange Destination</label>
                        <select id="form5" wire:model="exchange_destination_id">
                            <option value="default" disabled selected>Select destination</option>
                            <option value="1">UK</option>
                            <option value="2">France</option>
                            <option value="3">Malaysia</option>
                            <option value="4">Thailand</option>
                            <option value="5">USA</option>
                            <option value="6">Canada</option>
                            <option value="7">India</option>
                        </select>
                        <span><i class="fa fa-chevron-down"></i></span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>

                </div> --}}
            <button type="submit" class="btn btn-md btn-danger rounded-m px-4">Submit</button>
        </form>
    </div>        
</div>   
        
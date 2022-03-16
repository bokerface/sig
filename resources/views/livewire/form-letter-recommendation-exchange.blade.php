
 <div>
    <x-modal-title title="Letter of Recommendation for Exchange (IRO)"  bg="bgsd-pink" />

    <form class="p-4 overflow-scroll" wire:submit.prevent="handleForm">           

            <div class="form-group mb-4" >
                <div class="input-style input-style-always-active has-borders validate-field mb-0 pb-0">
                    <label for="form5" class="color-theme text-uppercase font-700 font-10">Exchange Destination</label>
                    <select id="form5">
                        <option value="default" disabled selected>Select destination</option>
                        <option value="UK">UK</option>
                        <option value="France">France</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Thailand">Thailand</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="India">India</option>
                    </select>
                    <span><i class="fa fa-chevron-down"></i></span>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <i class="fa fa-check disabled invalid color-red-dark"></i>
                    <em></em>
                </div>

            </div>
            <button type="submit" class="btn btn-md btn-danger rounded-m px-4">Submit</button>
        </form>


</div>   
        
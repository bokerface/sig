<div class="my-3 alert alert-warning">
    @if($status != 2)
        <p>Document Status</p>
        <select class="form-control mb-1 @error('select_verified') is-invalid @enderror" wire:model="select_verified"
            wire:change="verify({{ $submission_id }})">
            <option>- Select Verified -</option>
            <option value="1" wire:key="1">
                Verified
            </option>
            <option value="2" wire:key="2">
                Need Revision
            </option>
        </select>
        @error('select_verified')
            <p class="text-danger mb-1">{{ $message }}</p>
        @enderror

        @if($status == 1)

            @if($submission_type == 'exchange')

            @elseif($submission_type == 'letter')
                @if($letter_type == "1")
                    <form wire:submit.prevent="verify_recommendation_for_exchange({{ $submission_id }})">
                        <div class="my-2">
                            <label for="inputfile" class="form-label @error('letter_number') text-danger @enderror">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex flex-row">
                                        Nomor Surat <span class="text-danger">*</span>
                                    </div>
                                </div>
                            </label>

                            <input type="text" wire:model="letter_number"
                                class="form-control @error('letter_number') is-invalid @enderror">

                            @error('letter_number')
                                <p class="text-danger mb-2">{{ $message }}</p>
                            @enderror

                            <label for="inputfile" class="form-label @error('year_of_academic') text-danger @enderror">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex flex-row">
                                        Nomor Surat <span class="text-danger">*</span>
                                    </div>
                                </div>
                            </label>

                            <input type="text" wire:model="year_of_academic"
                                class="form-control @error('year_of_academic') is-invalid @enderror">

                            @error('year_of_academic')
                                <p class="text-danger mb-2">{{ $message }}</p>
                            @enderror
                            <div class="d-flex flex-row justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary" type="submit">submit</button>
                            </div>
                        </div>
                    </form>
                @elseif($letter_type == "2")
                    <form wire:submit.prevent="verify_recommendation_for_passport({{ $submission_id }})">
                        <div class="my-2">
                            <label for="inputfile" class="form-label @error('letter_number') text-danger @enderror">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex flex-row">
                                        Nomor Surat <span class="text-danger">*</span>
                                    </div>
                                </div>
                            </label>

                            <input type="text" wire:model="letter_number"
                                class="form-control @error('letter_number') is-invalid @enderror">

                            @error('letter_number')
                                <p class="text-danger mb-2">{{ $message }}</p>
                            @enderror
                            <div class="d-flex flex-row justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary" type="submit">submit</button>
                            </div>
                        </div>
                    </form>
                @elseif(in_array($letter_type,[3,4,5]))
                    @if($verification_file_exist == false)
                        <form wire:submit.prevent="verify_with_file({{ $submission_id }})">
                            <div class="my-2">
                                <label for="inputfile"
                                    class="form-label @error('upload_verification_file') text-danger @enderror">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div class="d-flex flex-row">
                                            Verification File <span class="text-danger">*</span>
                                        </div>
                                        @if($document_verified)
                                            <button title="Download" class="btn btn-sm btn-danger"
                                                wire:click.prevent="download_verification_file('{{ $verification_file }}')">
                                                <i class="fas fa-file-pdf"></i> Download
                                            </button>
                                        @endif
                                    </div>
                                </label>

                                <input type="file" wire:model="upload_verification_file"
                                    class="form-control @error('upload_verification_file') is-invalid @enderror">

                                <small class="text-muted">Filetype: .pdf</small>

                                @error('upload_verification_file')
                                    <p class="text-danger mb-2">{{ $message }}</p>
                                @enderror
                                <div class="d-flex flex-row justify-content-end">
                                    <button type="submit" class="btn btn-primary" type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                    @endif
                @endif
            @elseif($submission_type == 'secondary_supervisor')
                <form wire:submit.prevent="verify_secondary_supervisor({{ $submission_id }})">
                    <div class="my-2">
                        <label for="inputfile" class="form-label @error('selected_supervisor') text-danger @enderror">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-row">
                                    Nama Supervisor <span class="text-danger">*</span>
                                </div>
                            </div>
                        </label>

                        {{-- <input type="text" wire:model="selected_supervisor"
                            class="form-control @error('selected_supervisor') is-invalid @enderror"> --}}

                        <select wire:model="selected_supervisor"
                            class="form-control @error('selected_supervisor') is-invalid @enderror">
                            <option>- Select Supervisor -</option>
                            @foreach($supervisor_list as $supervisor)
                                <option value="{{ $supervisor->id }}" wire:key="{{ $supervisor->id }}">
                                    {{ $supervisor->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('selected_supervisor')
                            <p class="text-danger mb-2">{{ $message }}</p>
                        @enderror
                        <div class="d-flex flex-row justify-content-end mt-1">
                            <button type="submit" class="btn btn-primary" type="submit">submit</button>
                        </div>
                    </div>
                </form>
            @endif

        @endif
    @else
        <p><strong>Document Status</strong></p>
        <span>Menunggu revisi pengajuan</span>
    @endif
</div>

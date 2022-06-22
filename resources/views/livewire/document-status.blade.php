<div class="my-3 alert alert-warning">
    <p>Document Status</p>
    <select class="form-control mb-1 @error('select_verified') is-invalid @enderror" wire:model="select_verified"
        wire:change="verify({{ $submission_id }})">
        <option>- Select Verified -</option>
        <option value="1"
            {{ $status == 1 ? 'selected' : '' }}>
            Verified
        </option>
        <option value="2"
            {{ $status == 2 ? 'selected' : '' }}>
            Need Revision
        </option>
    </select>
    @error('select_verified')
        <p class="text-danger mb-1">{{ $message }}</p>
    @enderror

    @if($status == 1)
        <form wire:submit.prevent="upload_document({{ $submission_id }})">
            <div class="my-2">
                <label for="inputfile" class="form-label @error('upload_verification_file') text-danger @enderror">
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
</div>

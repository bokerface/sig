<div>
    <style>
        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

        h3.judul span {
            font-size: 11px;
        }
    </style>

    <x-modal-title title="Edit Submission" bg="bgsd-gradient" />

    <div class="col-12 mx-2">

        <div class="card">
            <div class="card-body">
                test
                @foreach($submission_field_values as $item)
                <div class="mb-2">
                    <label for="inputfile" class="form-label @error('{{ $item->key }}') text-danger @enderror">
                        {{ $item->label }}
                        <span class="text-danger">*</span>
                    </label>

                    <input type="{{ $item->type }}" wire:model="{{ $item->key }}"
                        class="form-control @error('{{ $item->key }}') is-invalid @enderror">

                    <span class="text-muted">Filetype: .pdf</span>

                    @error('{{ $item->key }}')
                    <p class="text-danger mb-2">{{ $message }}</p>
                    @enderror
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
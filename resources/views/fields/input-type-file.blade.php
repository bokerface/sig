<form wire:submit.prevent="update('{{ $id_field }}')">
    <div class="mb-2">
        <label for="inputfile" class="form-label @error('{{ $key }}') text-danger @enderror">
            {{ $label }}
            <span class="text-danger">*</span>
        </label>

        <input type="file" wire:model="value" class="form-control @error('{{ $key }}') is-invalid @enderror">

        <span class="text-muted">Filetype: .pdf</span>

        @error('{{ $key }}')
            <p class="text-danger mb-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-success">upload <i class="icon-edit"></i></button>
    </div>
</form>

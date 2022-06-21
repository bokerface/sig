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

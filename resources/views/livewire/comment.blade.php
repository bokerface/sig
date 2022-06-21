<div>
    <div class="form-group">
        <label for="catatan" class="col-12">
            Catatan<span class="text-muted">(Jika perlu direvisi)</span>
        </label>
        <textarea wire:model="comment" wire:change="verifyField({{ $field_id }})" id="catatan" cols="30" rows="1"
            class="form-control col-12 ckeditor-{{ $field_id }}"></textarea>
    </div>
    {{-- @push('js') --}}
    {{-- <script> --}}
    {{-- document.addEventListener('livewire:load', function () { --}}
    {{-- $(document).ready(function () { --}}
    {{-- $('.ckeditor-{{ $field_id }}').ckeditor(); --}}
    {{-- }); --}}
    {{-- }) --}}
    {{-- </script> --}}
    {{-- @endpush --}}
    @push('js')
        <script>
            $(document).ready(function () {
                $('.ckeditor-{{ $field_id }}').ckeditor();
            });

        </script>
    @endpush
</div>

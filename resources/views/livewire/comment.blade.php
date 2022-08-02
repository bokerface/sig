<div class="col-md-8">
    <div class="form-group">
        <div class="row">

            <label for="catatan" class="col-12">
                Catatan<span class="text-muted">(Jika perlu direvisi)</span>
            </label>
        </div>
        <textarea wire:model="comment" wire:change="verifyField({{ $field_id }})" id="catatan" cols="65" rows="3"
            class="form-control col-12 ckeditor-{{ $field_id }}"></textarea>
    </div>

    @push('js')
        <script>
            $(document).ready(function () {
                // $('.ckeditor-{{ $field_id }}').ckeditor();
            });

        </script>
    @endpush
</div>

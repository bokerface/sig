<div>
    <div class="form-group">
        <div class="row">

            <label for="catatan" class="col-12">
                Catatan<span class="text-muted">(Jika perlu direvisi)</span>
            </label>
        </div>
    </div>

    @push('js')
        <script>
            $(document).ready(function () {
                // $('.ckeditor-{{ $field_id }}').ckeditor();
            });

        </script>
    @endpush
</div>

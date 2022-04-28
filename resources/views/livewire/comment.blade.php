<div class="form-group row">
    <label for="catatan" class="col-3">Catatan <span class="text-muted">(Jika perlu direvisi)</span></label>
    <textarea wire:model="comment" wire:change="verifyField({{ $field_id }})" id="catatan" cols="30" rows="1"
        class="form-control col-9"></textarea>

</div>

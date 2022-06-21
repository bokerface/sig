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
                @foreach($submission_field_values as $item)
                    @if($item->type == 'file')
                        @if(!empty($item->comment))
                            <livewire:input-file :item="$item" :label="$item->label" :key="$item->key"
                                :id_field="$item->id">
                        @endif
                    @elseif($item->type == 'text')
                        @if(!empty($item->comment))
                            <livewire:input-text :item="$item" :label="$item->label" :key="$item->key"
                                :id_field="$item->id">
                        @endif
                    @elseif($item->type == 'image')
                        @if(!empty($item->comment))
                            <livewire:input-file :item="$item" :label="$item->label" :key="$item->key"
                                :id_field="$item->id">
                        @endif
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</div>

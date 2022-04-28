<div>
    @if($click)

        <div class="card shadow mb-4">
            <div class="card-body ">

                <h5>{{ $submission['fullname'] }}</h5>
                <p>{{ $submission['student_id'] }}</p>

                @foreach($metas as $meta)
                     @if ($meta['key'] !=='exchange_type')
                        <div class="alert alert-abusma">
                            <div class="row">
                                <div class="col-md-8">
                                   <strong>{{ $meta['label'] }}</strong>
                                </div>
                                    @if(($meta['type'] == 'file') || ($meta['type']=='image'))
                                    <div class="col-md-4">
                                        <button title="Download" class="btn btn-sm btn-danger"
                                            wire:click.prevent="download('{{ $meta['value'] }}')">
                                            <i class="fas fa-file-pdf"></i> Download
                                        </button>
                                    </div>
                                @else
                                    <span>{{ $meta['value'] }}</span>
                                @endif

                            </div>
                            <div class="mt-2">
                                <livewire:comment :field_id="$meta['id']" :comment="$meta['comment']" />     
                            </div>
                           
                        </div>
                    @endif
                @endforeach

                <livewire:document-status :submission_id="$submission['id']" :status="$status" />

            </div>
        </div>
    @endif
</div>

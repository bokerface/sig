<div>
    @section('page-title')
    {{ $submission->letter_type == '' ? $submission->submission_type :  $submission->letter_type }}
    @endsection
    <div>
        <div class="col-md-10 offset-md-1">
            <div class="card shadow">
                <div class="card-body">
                    <h5>{{ $submission->fullname }}</h5>
                    <p>{{ $submission->studentid }}</p>
                    @foreach($metas as $meta)
                        <div class="alert alert-abusma">
                            <div class="row">
                                <div class="col-md-3">
                                    @php
                                        $key = str_replace("_"," ", $meta->key);
                                    @endphp
                                    <strong class="text-capitalize">{{ $key }}</strong>
                                    <br>
                                    @php
                                        $downloadable = ['file','image'];
                                    @endphp

                                    @if(in_array($meta->type,$downloadable))
                                        <a href="{{ route('download-file','q?filename='.$meta->value) }}"
                                            class="btn btn-sm btn-danger">
                                            Download File
                                        </a>
                                    @else
                                        @if($meta->key == 'exchange_destination')
                                            <span>{{ destination_name($meta->value) }}</span>
                                        @elseif($meta->key == 'exchange_institution')
                                            <span>{{ institution_name($meta->value) }}</span>
                                        @else
                                            <span>{{ $meta->value }}</span>
                                        @endif
                                    @endif
                                </div>
                                <livewire:comment :field_id="$meta->id" :comment="$meta->comment" :key="$meta->id" />
                            </div>
                        </div>
                    @endforeach
                    <livewire:document-status :submission_id="$submission->id" :status="$status" />
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('ckeditor/adapters/jquery.js') }}"></script>
    @endpush
</div>

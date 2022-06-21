<div>
    @section('page-title')
    Exchange Detail
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
                                <div class="col-md-4">
                                    <strong>{{ $meta->label }}</strong>
                                    <br>
                                    @php
                                        $downloadable = ['file','image'];
                                    @endphp

                                    @if(in_array($meta->type,$downloadable))
                                        {{-- <button title="Download" class="btn btn-sm btn-danger"
                                            wire:click.prevent="download('{{ $meta->value }}')"> --}}

                                        {{-- <i class="fas fa-file-pdf"></i> Download --}}
                                        {{-- </button> --}}
                                        <a href="{{ route('download-file','q?filename='.$meta->value) }}"
                                            class="btn btn-sm btn-danger">
                                            Download
                                        </a>
                                    @else
                                        <span>{{ $meta->value }}</span>
                                    @endif
                                </div>
                                <livewire:comment :field_id="$meta->id" :comment="$meta->comment" :key="$meta->id" />
                                {{-- <div class="col-md-8"> --}}
                                {{-- <div class="form-group"> --}}
                                {{-- <label for="catatan" class="col-12"> --}}
                                {{-- Catatan<span class="text-muted">(Jika perlu direvisi)</span> --}}
                                {{-- </label> --}}
                                {{-- <textarea id="catatan" cols="30" rows="1" --}}
                                {{-- class="form-control col-12 ckeditor ml-2"></textarea> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
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

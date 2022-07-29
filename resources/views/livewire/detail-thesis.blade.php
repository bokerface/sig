<div>
    @section('page-title')
    Thesis Details
    @endsection

    <div>
        <div class="col-md-10 offset-md-1">
            <div class="card shadow">
                <div class="card-body">

                    <div class="mb-3">
                        <p>{{ $submission->FULLNAME }}</p>
                        <p>{{ $submission->STUDENTID }}</p>
                    </div>

                    @foreach($metas as $meta)
                        <div class="alert alert-abusma">
                            <div class="row">
                                <div class="col-md-5">
                                    <strong class="text-capitalize">{{ $meta->label }}</strong>
                                    <br>
                                    @php
                                        $downloadable = ['file','image'];
                                    @endphp
                                    @if(in_array($meta->type,$downloadable))
                                        <a href="{{ route('spv-download-file','q?filename='.$meta->value) }}"
                                            class="btn btn-sm btn-danger">
                                            Download File
                                        </a>
                                    @else
                                        <p>{{ $meta->value }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if($accompaniment_done == false)
                        <div class="my-3 alert alert-warning">
                            <form wire:submit.prevent="verify_accompaniment({{ $submission->id }})">
                                <div class="my-2">
                                    <label for="inputfile"
                                        class="form-label @error('accompaniment_document') text-danger @enderror">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                Final Result <span class="text-danger">*</span>
                                            </div>
                                        </div>
                                    </label>

                                    <input type="file" id="inputfile" wire:model.defer="accompaniment_document"
                                        class="form-control @error('accompaniment_document') is-invalid @enderror">

                                    @error('accompaniment_document')
                                        <p class="text-danger mb-2">{{ $message }}</p>
                                    @enderror

                                    <div class="d-flex flex-row justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary" type="submit">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>

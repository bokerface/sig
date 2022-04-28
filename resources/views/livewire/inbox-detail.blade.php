<div>
    <style>
        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

    </style>

    <x-modal-title title="Inbox" bg="bgsd-gradient" />

    <div class="col-12 mx-2">
        <p>{{ $submission->submission_type }}</p>
        <p>{{ $submission->created_at }}</p>
        {{-- <button class="btn btn-sm btn-danger" wire:click.prevent="download('{{ $submission->additional_file }}')">--}}
        {{-- <i class="fas fa-file-pdf"></i> Download --}}
        {{-- </button> --}}

        @if(!empty($submission->additional_file))
            <a class="btn btn-sm btn-danger"
                href="{{ url('download?filename='.$submission->additional_file) }}">
                <i class="fas fa-file-pdf"></i> Download
            </a>
        @endif
    </div>
</div>

<div>
    <style>
        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

        h3.judul span {
            font-size: 11px;
        }

    </style>

    <x-modal-title title="Inbox" bg="bgsd-gradient" />

    <div class="col-12 ps-3 pe-4">

        {{-- @if($submission->submission_type == 'transcript') --}}
        <div class="card" style="border-radius:15px;">
            <div class="card-body p-4">
                <div class="d-flex flex-row  justify-content-between align-items-center">
                    <h3 class="judul text-capitalize">{{ $submission->submission_type }} :
                        {{ $submission->letter_type }}
                    </h3>
                </div>

                <p class="mb-0">to {{ Session::get('user_data.fullname') }}</p>
                <hr>
                {{-- 
                    <h5 class="card-title">Hello, {{ Session::get('user_data.fullname') }} </h5>
                --}}

                {{-- disini jika sudah ok --}}
                @if($submission->status == 1)

                    @php
                        $with_downloadable = [1,2,3,4,5];
                        $capacity_building = [7,8,9,10,11,12];
                    @endphp

                    @if(in_array($submission->letter_types,$with_downloadable))
                        @if(!empty($submission->additional_file))
                            <span>{{ $submission->created_at }}</span>
                            <p class="card-text">
                                Your documents for {{ $submission->submission_type }} are ready to
                                use. You can download the documents by click link below. <br>

                                <a class="btn btn-xs mt-2 btn-sigov-pink"
                                href="{{ url('download?filename='.$submission->additional_file) }}">
                                <i class="fas fa-file-pdf"></i> Download Document
                            </a>
                            
                            </p>
                            
                            <hr>
                        @else
                            <p class="card-text">
                                Your letter is already to download.
                            </p>

                            @php
                                if($submission->letter_types == '1') {
                                $letter = 'download-recommendation-exchange';
                                } elseif($submission->letter_types == '2') {
                                $letter = 'download-recommendation-passport';
                                }
                            @endphp
                            <p>
                                <a class="btn btn-sm btn-sigov-pink"
                                    href="{{ url( $letter . '/' . $submission->id) }}">
                                    <i class="fas fa-file-pdf"></i> Download Document
                                </a>
                            </p>

                        @endif
                    @elseif($submission->letter_types == 6)
                        <span>{{ $submission->created_at }}</span>
                        <p class="card-text">
                            Your submission is verified. We will contact you soon.
                        </p>
                        <hr>
                    @elseif(in_array($submission->letter_types,$capacity_building))
                        <span>{{ $submission->created_at }}</span>
                        <p class="card-text">
                            We will contact you soon.
                        </p>
                        <hr>
                    @elseif($submission->letter_types == 13)
                        <span>{{ $submission->created_at }}</span>
                        <br>
                        <span class="card-text"> Congratulation, your secondary supervisor: </span>
                        @if(!empty($supervisor))
                            <p>Name : {{ $supervisor->name }}<br>
                            Mobile : {{ $supervisor->phone }}<br>
                            Email : {{ $supervisor->email }}</p>
                        @endif
                        <hr>
                    @endif
                @endif

                @if($submission->letter_types == 14)
                    <span>{{ $submission->created_at }}</span>
                    <p class="card-text">
                        Transcript
                    </p>
                    <hr>
                @endif

                @if($submission->status == 2)
                    {{-- jika perlu revisi --}}
                    <span>{{ $submission->created_at }}</span>
                    <p class="card-text">
                        Your submission needs to be revised. Check the following fields again: <br>
                        @php
                            $a = 1;
                        @endphp
                        @foreach($metas as $meta)
                            @if(!empty($meta->comment))
                                {{ $a++.'.'.' '.$meta->comment }} <br>
                            @endif
                        @endforeach
                    </p>
                    <div class="d-grid">
                        <a href="{{ route("edit-submission",$submission->id) }}"
                            class="btn btn-warning btn-block">Edit <i class="icon-edit"></i>
                        </a>
                    </div>
                    <hr>
                @endif

                @if($submission->status == 3)
                    ditolak
                @endif

                @if($submission->submission_type == "capacity_building")
                    {{-- di sini pesan pengajuan sudah diterima --}}
                    <span>{{ $submission->created_at }}</span>
                    <br>
                    Thank you for your participation.
                @else
                    {{-- di sini pesan pengajuan sudah diterima --}}
                    <span>{{ $submission->created_at }}</span>
                    <br>
                    We have received your application. Please wait for the admin verification process.
                @endif

            </div>
        </div>
        {{-- @endif --}}
    </div>
</div>

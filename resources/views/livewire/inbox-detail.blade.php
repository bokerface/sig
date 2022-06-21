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

    <div class="col-12 mx-2">

        {{-- @if($submission->submission_type == 'transcript') --}}
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row  justify-content-between align-items-center">
                    <h3 class="judul">Exchange</h3>
                </div>

                <p class="mb-0">to {{ Session::get('user_data.fullname') }}</p>
                <hr>
                {{-- 
                    <h5 class="card-title">Hello, {{ Session::get('user_data.fullname') }} </h5>
                --}}

                {{-- disini jika sudah ok --}}
                @if($submission->status == 1)
                    <span>{{ $submission->created_at }}</span>
                    <p class="card-text">
                        Your documents for {{ $submission->submission_type }} program are ready to
                        use. You can download the documents by click link below.
                    </p>

                    @if(!empty($submission->additional_file))
                        <a class="btn btn-sm btn-sigov-pink"
                            href="{{ url('download?filename='.$submission->additional_file) }}">
                            <i class="fas fa-file-pdf"></i> Download Document
                        </a>
                    @endif

                    <hr>
                @endif


                @if($submission->status == 2)
                    {{-- jika perlu revisi --}}
                    <span>{{ $submission->created_at }}</span>
                    <p class="card-text">
                        Pengajuan Anda perlu direvisi. perliksa kembali field berikut ini : <br>
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


                {{-- di sini pesan pengajuan sudah diterima --}}
                <span>{{ $submission->created_at }}</span>
                Selamat oengajuan Saudara sudah kami terima, dan akan di verifikasi oleh admin

            </div>
        </div>
        {{-- @endif --}}
    </div>
</div>

<div>
    <style>
        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

        .inbox-bg {
            background: #141118;
        }

        h3.judul span {
            font-size: 11px;
        }
    </style>

    <x-modal-title title="News" bg="inbox-bg" />

    <div class="col-12 ps-3 pe-4">
        @php

        $posts = Http::withoutVerifying()->withHeaders([])->get("https://igov.umy.ac.id/wp-json/wp/v2/posts", [
        "per_page"=> 15,
        "_embed"=> ''
        ])->json();

        // dd($posts);

        @endphp

        <div class="card card-style">
            <div class="content mb-0">
                @foreach($posts as $value)

                @php
                $date = \Carbon\Carbon::parse( $value['date']);
                @endphp

                <a href="{{ url('news/' . $value['id']) }}">
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-15 pb-1">{{ $value['title']['rendered'] }}</h5>
                            <span class="badge text-uppercase px-2 py-1 bg-green-dark">
                                {{ $value['_embedded']['wp:term'][0][0]['name'] }}
                            </span>
                            <span class="color-theme font-11 ps-2 opacity-50">{{ $date->format('j F Y') }}</span>
                        </div>
                        <div class="align-self-center ms-auto ps-2">
                            @if($value['featured_media'] > 0)
                            <img src="{{ $value['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['thumbnail']['source_url'] ?? asset('images/preload-logo.png') }}" style="width: 100px;">
                            @endif
                        </div>
                    </div>
                </a>
                <div class="divider mb-3"></div>
                @endforeach
            </div>

            <a href="https://igov.umy.ac.id" class="btn btn-danger btn-xs">Visit IGOV website for more update</a>
        </div>

    </div>
</div>
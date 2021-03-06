<div class="splide single-slider slider-no-arrows homepage-slider mt-5" id="single-slider-1">

    <div class="splide__track">
        <div class="splide__list">
            @php

                $posts = Http::withoutVerifying()->withHeaders([])->get("https://igov.umy.ac.id/wp-json/wp/v2/posts", [
                "per_page"=> 3,
                "_embed"=> ''
                ])->json();

                // dd($posts);
            @endphp

            @foreach($posts as $value)

                <div class="splide__slide">
                    <div class="card rounded-m mx-2 text-center shadow-m" data-card-height="170" style="height:170px;">
                        <a href="{{ url('news/' . $value['id']) }}">
                            @if($value['featured_media'] > 0)
                                <img src="{{ $value['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['for_appsigov']['source_url'] ?? asset('images/noimage.jpg') }}"
                                    style="width: 100%">
                            @endif

                            <div class="card-bottom news d-flex align-items-end">
                                <h1 class="font-18 font-400 pb-2 text-white text-start">
                                    {{ substr_replace($value['title']['rendered']," ...",70) }}
                                </h1>
                            </div>
                            <div class="card-overlay bg-gradient-fade2"></div>
                        </a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>

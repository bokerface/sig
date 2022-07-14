<div>
    <style>
        .bgsd-gradient {
            background: linear-gradient(to bottom right, #361928 0%, #141118 100%);
        }

        .bg-news {
            background: #141118;
        }

    </style>

    <x-header title="News" subtitle="" bg="bg-news" height="80" icon="" type="small" modal="" />

    @php
        $date = \Carbon\Carbon::parse($postdetail['date'])->locale('en');
        $date->settings(['formatFunction' => 'translatedFormat']);
    @endphp


    <div class="card card-style mt-5">
        <div class="content">
            <h1 class="font-600 font-18 line-height-m">{{ $postdetail['title'] }}</h1>
            <span class="d-block mb-0">{{ $date->format('F j, Y') }} <span
                    class="copyright-year"></span></span>
        </div>
        <img src="{{ $postdetail['featured_image'] }}" class="img-fluid">
        <span class="d-block text-end font-10 pe-3 opacity-60 mt-n4 color-white">Image Source: igov.umy.ac.id</span>
        <div class="content">
            {!! $postdetail['content'] !!}
        </div>
    </div>
</div>

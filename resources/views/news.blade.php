<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $newsItem->title }} | UKM Senior</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo_UKM_SENIOR-removebg-preview.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style-news.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dhurjati&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Indie+Flower&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/PNUP Logo.png') }}" alt="" class="pnup">
            <img src="{{ asset('images/Logo UKM SENIOR.jpg') }}" class="logo" />
            <ul class="nav-list">
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">BERANDA</a></li>
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">TENTANG</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="{{ Request::is('kegiatan') ? 'active' : '' }}">KEGIATAN</a></li>
                <li><a href="{{ url('/order') }}" class="{{ Request::is('order') ? 'active' : '' }}">ORDER</a></li>
                <li><a href="{{ url('/news') }}" class="{{ Request::is('news*') ? 'active' : '' }}">BERITA</a></li>
            </ul>
            <a href="{{ route('students.create') }}" class="daftar">Daftar UKM</a>
        </div>
        <div class="Sampul">
            <div class="mask-group">
                <img src="{{ asset('img/' . $newsItem->image) }}" alt="" class="hed2">
                <div class="rectangle-17"></div>
                <h1>{{ Str::upper($newsItem->title) }}</h1>
            </div>
        </div>
        <div class="group-2">
            <p>by Divisi Humas UKM SENIOR</p>
            <h4>{{ $newsItem->created_at->format('j F Y | H:i') }}</h4>
        </div>

        <div class="parberita-container">
            @php
                $paragraphs = array_filter(array_map('trim', preg_split('/\r\n\r\n|\n\n/', $newsItem->body)));
            @endphp
            @if (count($paragraphs) > 0)
                @foreach ($paragraphs as $paragraph)
                    <p class="parberita1">{!! nl2br(e($paragraph)) !!}</p>
                @endforeach
            @else
                <p class="parberita1">{!! nl2br(e($newsItem->body)) !!}</p>
            @endif
        </div>

        @if ($latestNews->count() > 0)
            <div class="recom-section">
                <h2 class="recom">REKOMENDASI :</h2>
                <div class="recom-container">
                    @foreach ($latestNews as $news)
                        <a href="{{ url('news', $news->id) }}" class="rek{{ $loop->index + 1 }}">
                            <img src="{{ asset('img/' . $news->image) }}" alt="">
                            <div class="grd"></div>
                            <h3>{{ $news->title }}</h3>
                            <div class="linee"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="footer">
            <a href="https://www.youtube.com/@ukmseniorpnup1879" class="ftr1"><img src="{{ asset('images/YT.png') }}"
                    alt="" class="medsos1"></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fukmseniorpnup" class="ftr2"><img
                    src="{{ asset('images/Twitter.png') }}" alt="" class="medsos2"></a>
            <a href="https://www.instagram.com/ukmsenior_pnup" class="ftr3"><img src="{{ asset('images/IG.png') }}"
                    alt="" class="medsos3"></a>
            <a href="https://www.tiktok.com/@poltek_upg?_t=8iYPHTx8AHo&_r=1" class="ftr4"><img
                    src="{{ asset('images/tiktok.png') }}" alt="" class="medsos4"></a>
            <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
        </div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>

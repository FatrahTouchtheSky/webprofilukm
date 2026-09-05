<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Senior</title>
    <link rel="shortcut icon" href="images/Logo_UKM_SENIOR-removebg-preview.png" type="images/x-icon">
    <link rel="stylesheet" href="css/style-newss.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dhurjati&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Indie+Flower&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="images/PNUP Logo.png" alt="" class="pnup">
            <img src="images/Logo UKM SENIOR.jpg" class="logo" />
            <ul class="nav-list">
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">BERANDA</a></li>
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">TENTANG</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="{{ Request::is('kegiatan') ? 'active' : '' }}">KEGIATAN</a></li>
                <li><a href="{{ url('/order') }}" class="{{ Request::is('order') ? 'active' : '' }}">ORDER</a></li>
                <li><a href="{{ url('/news') }}" class="{{ Request::is('news*') ? 'active' : '' }}">BERITA</a></li>
            </ul>
            <a href="{{ route('students.create') }}" class="daftar">Daftar UKM</a>
        </div>
        <div class="berita-container">
            @if ($news->isEmpty())
                <p>Tidak ada berita.</p>
            @else
                @foreach ($news as $index => $newsItem)
                    @if ($index < 4 || $index == 9 || $index == 10 || $index == 14 || $index == 15)
                        <a class="berita" href="{{ url('news', $newsItem->id) }}">
                            <div class="brt">
                                <img src="{{ asset('img/' . $newsItem->image) }}" alt="Gambar {{ $index + 1 }}">
                                <div class="linebrt1"></div>
                            </div>
                            <h2>{{ Str::upper($newsItem->title) }}</h2>
                            <p>{{ Str::limit(preg_replace('/\s+/', ' ', $newsItem->body), 100) }}</p>
                            <h4>{{ $newsItem->created_at->diffForHumans() }}</h4>
                            <img src="images/share.png" alt="Share" class="share">
                        </a>
                    @elseif ($index == 4 || $index == 6 || $index == 7)
                        <a class="berita-lebar" href="{{ url('news', $newsItem->id) }}">
                            <div class="brt-lebar">
                                <img src="{{ asset('img/' . $newsItem->image) }}" alt="Gambar {{ $index + 1 }}">
                            </div>
                            <div class="linebrt1-lebar"></div>
                            <h2>{{ Str::upper($newsItem->title) }}</h2>
                            <p>{{ Str::limit(preg_replace('/\s+/', ' ', $newsItem->body), 100) }}</p>
                            <h4>{{ $newsItem->created_at->diffForHumans() }}</h4>
                            <img src="images/share.png" alt="Share" class="share-lebar">
                        </a>
                    @elseif ($index == 5 || $index == 8 || $index == 11 || $index == 12)
                        <a class="berita-full" href="{{ url('news', $newsItem->id) }}">
                            <div class="brt-full">
                                <div class="brt-grd"></div>
                                <img src="{{ asset('img/' . $newsItem->image) }}" alt="Gambar {{ $index + 1 }}">
                            </div>
                            <div class="linebrt1-full"></div>
                            <h2>{{ Str::upper($newsItem->title) }}</h2>
                            <p>{{ Str::limit(preg_replace('/\s+/', ' ', $newsItem->body), 100) }}</p>
                            <h4>{{ $newsItem->created_at->diffForHumans() }}</h4>
                            <img src="images/share.png" alt="Share" class="share-full">
                        </a>
                    @elseif ($index == 13 || $index == 16)
                        <a class="berita-full-pendek" href="{{ url('news', $newsItem->id) }}">
                            <div class="brt-full-pendek">
                                <div class="brt-grd"></div>
                                <img src="{{ asset('img/' . $newsItem->image) }}" alt="Gambar {{ $index + 1 }}">
                            </div>
                            <div class="linebrt1-full-pendek"></div>
                            <h2>{{ Str::upper($newsItem->title) }}</h2>
                            <p>{{ Str::limit(preg_replace('/\s+/', ' ', $newsItem->body), 100) }}</p>
                            <h4>{{ $newsItem->created_at->diffForHumans() }}</h4>
                            <img src="images/share.png" alt="Share" class="share-full-pendek">
                        </a>
                    @endif
                @endforeach
            @endif
        </div>

        <img src="images/bg2.png" alt="" class="bg2">
        <div class="footer">
            <a href="https://www.youtube.com/@ukmseniorpnup1879" class="ftr1"><img src="images/YT.png" alt=""
                    class="medsos1"></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fukmseniorpnup" class="ftr2"><img
                    src="images/Twitter.png" alt="" class="medsos2"></a>
            <a href="https://www.instagram.com/ukmsenior_pnup" class="ftr3"><img src="images/IG.png" alt=""
                    class="medsos3"></a>
            <a href="https://www.tiktok.com/@poltek_upg?_t=8iYPHTx8AHo&_r=1" class="ftr4"><img
                    src="images/tiktok.png" alt="" class="medsos4"></a>
            <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
        </div>
    </div>

    <script src="js/script.js?v=1.0"></script>
</body>

</html>

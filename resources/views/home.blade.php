<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Senior</title>
    <link rel="shortcut icon" href="images/Logo_UKM_SENIOR-removebg-preview.png" type="images/x-icon">
    <link rel="stylesheet" href="css/style.css">
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
        <!-- Tambahkan di sini -->
    <div class="hamburger" id="hamburger-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
            <ul class="nav-list">
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">BERANDA</a></li>
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">TENTANG</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="{{ Request::is('kegiatan') ? 'active' : '' }}">KEGIATAN</a></li>
                <li><a href="{{ url('/order') }}" class="{{ Request::is('order') ? 'active' : '' }}">ORDER</a></li>
                <li><a href="{{ url('/news') }}" class="{{ Request::is('news*') ? 'active' : '' }}">BERITA</a></li>
            </ul>
            <a href="{{ route('students.create') }}" class="daftar">Daftar UKM</a>
            {{-- <a href="{{ route('new_member.create') }}" class="daftar">Daftar UKM</a> --}}
        </div>
        <div class="Sampul">
            <div class="mask-group">
                <img src="images/hed2.jpg" alt="" class="hed2">
                <div class="rectangle-17"></div>
            </div>
            <h1 class="ukm-senior-pnup">UKM SENIOR</h1>
            <p class="m"> POLITEKNIK NEGERI UJUNG PANDANG </p>
        </div>
        <div class="hero-slider-section">
            <img src="images/motif2.png" alt="" class="bgswipe">
            <img src="images/motif2.png" alt="" class="bgswipe1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/Asset 7.png" alt="Gambar 1"></div>
                    <div class="swiper-slide"><img src="images/Asset 8.png" alt="Gambar 2"></div>
                    <div class="swiper-slide"><img src="images/Asset 10.png" alt="Gambar 3"></div>
                    <div class="swiper-slide"><img src="images/Asset 12.png" alt="Gambar 4"></div>
                    <div class="swiper-slide"><img src="images/Asset 13.png" alt="Gambar 5"></div>
                    <div class="swiper-slide"><img src="images/Asset 14.png" alt="Gambar 6"></div>
                </div>
            </div>
            <div class="intro-text-box">
                <h3 class="desc1">UKM SENIOR</h3>
                <p class="desc">UKM Senior telah berdiri sejak 9 Juni tahun 1997 dengan harapan menjadi wadah bagi mahasiswa
                    pnup dalam mengembangkan minat dan bakat mereka khususnya dibidang seni dan olahraga. Hadir dengan 6 unit
                    kegiatan menjadikan ukm ini sebagai ukm terbesar dipoliteknik negeri ujung pandang. <a href="/about"
                        class="rmore">Selengkapnya &raquo;</a></p>
            </div>
        </div>
        <div class="bggradasi"></div>
        <img class="bgberita" src="images/8.png" alt="">
        <img class="bgberita2" src="images/8.png" alt="">

        <div class="group-2">
            <div class="jberita"> INFO SENIOR</div>
            <div class="line-1"></div>
            <a href="{{ url('/news') }}">Temukan Berita Lainnya </a>
        </div>
        <div class="berita-container">
            @if ($news->isEmpty())
                <p>Tidak ada berita.</p>
            @else
                @foreach ($news as $index => $newsItem)
                    @if ($index < 4)
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
                    @elseif ($index == 4 || $index == 5)
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
                    @elseif ($index == 6 || $index == 7)
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
                    @endif
                @endforeach
            @endif
        </div>
        <div class="prestasi-container">
            <div class="prestasi">
                <img src="images/icontrophybasket.png" alt="">
                <p>Basketball Walikota CUP 2021</p>
            </div><img class="p1" src="images/1st.png" alt="">
            <div class="prestasi2">
                <img src="images/icontari.png" alt="">
                <p>Lomba Seni Tari Sulawesi Selatan</p>
            </div><img class="p2" src="images/3rd.png" alt="">
            <div class="prestasi3">
                <img src="images/iconvolli.png" alt="">
                <p>Volly Fisioterapi Cup 2019</p>
            </div><img src="images/3rd.png" alt="" class="p3">
            <div class="prestasi4">
                <img src="images/iconmusik.png" alt="">
                <p>Bri Fest Talent Hunt 2023</p>
            </div><img src="images/3rd.png" alt="" class="p4">
            <div class="prestasi5">
                <img src="images/icontenis.png" alt="">
                <p>Kategori Umum Beregu Putri Kapolres Cup</p>
            </div><img src="images/3rd.png" alt="" class="p5">
            <div class="prestasi6">
                <img src="images/iconbultang.png" alt="">
                <p> Tunggal Putra Kejuaraan Unhas Badminton Cup 3</p>
            </div><img src="images/1st.png" alt="" class="p6">
            <div class="prestasi7">
                <img src="images/icontrophy.png" alt="">
                <p>Juara Umum Walikota Cup 2021</p>
            </div><img src="images/1st.png" alt="" class="p7">
            <div class="prestasi8">
                <img src="images/iconbasket.png" alt="">
                <p>L.A Three Point Contest 2021</p>
            </div><img src="images/4th.png" alt="" class="p8">
            <div class="prestasi9">
                <img src="images/iconmusik.png" alt="">
                <p>Kalla Youth Competition 2023</p>
            </div><img src="images/2nd.png" alt="" class="p9">
        </div>
        <div class="kgtn1">
            <img src="images/smile1.JPG" alt="">
            <p>#Please Your Smile </p>
        </div>
        <div class="footer">
            <a href="https://www.youtube.com/@ukmseniorpnup1879" class="ftr1"><img src="images/YT.png"
                    alt="" class="medsos1"></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fukmseniorpnup" class="ftr2"><img
                    src="images/Twitter.png" alt="" class="medsos2"></a>
            <a href="https://www.instagram.com/ukmsenior_pnup" class="ftr3"><img src="images/IG.png"
                    alt="" class="medsos3"></a>
            <a href="https://www.tiktok.com/@poltek_upg?_t=8iYPHTx8AHo&_r=1" class="ftr4"><img
                    src="images/tiktok.png" alt="" class="medsos4"></a>
            <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
        </div>
    </div>
    <script src="js/script.js?v=1.0"></script>
</body>

</html>

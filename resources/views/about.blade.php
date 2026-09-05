<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Senior</title>
    <link rel="shortcut icon" href="images/Logo_UKM_SENIOR-removebg-preview.png" type="images/x-icon">
    <link rel="stylesheet" href="css/style-about.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dhurjati&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Indie+Flower&display=swap"
        rel="stylesheet">
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
        <div class="Sampul">
            <div class="mask-group">
                <div class="parallax"></div>
                <div class="rectangle-17"></div>
            </div>
            <h1 class="ukm-senior-pnup">UKM SENIOR</h1>
            <p class="m"> POLITEKNIK NEGERI UJUNG PANDANG </p>
        </div>

        <div class="sejarah-section">
            <div class="sejarah-header">
                <h3 class="desc1">Sejarah</h3>
                <div class="line-sejarah"></div>
            </div>
            <p class="desc">UKM Senior telah berdiri sejak 9 Juni tahun 1997 dengan harapan menjadi wadah bagi mahasiswa
                pnup dalam mengembangkan minat dan bakat mereka khususnya dibidang seni dan olahraga. Hadir dengan 6 unit
                kegiatan menjadikan ukm ini sebagai ukm terbesar dipoliteknik negeri ujung pandang.<br><br>Pada awal pembentukannya,
                UKM seni dan olahraga sering kali dimulai dengan kegiatan yang sederhana dan spontan. Kelompok-kelompok
                kecil mahasiswa yang memiliki minat yang sama mulai berkumpul untuk berlatih dan mengadakan pertunjukan atau
                pertandingan. Seiring berjalannya waktu, kegiatan ini semakin terorganisir dengan baik. Berbagai universitas mulai melihat
                pentingnya mendukung kegiatan-kegiatan ini, baik dari segi fasilitas maupun pendanaan.</p>
        </div>

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

        <div class="prestasi-section">
            <div class="prestasi-header">
                <h3 class="desc2">Daftar Prestasi</h3>
                <div class="line-prestasi"></div>
            </div>
            <div class="prestasi-container">
            <div class="uk">
                <div class="coverimg">
                    <img src="images/hed3.jpg" alt="">
                </div>
                <div class="judul-container">
                    <div class="judul">Basket</div>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 1 Three Point contest L.A 2020</p>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 1 Walikota Cup 2020</p>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 3 Walikota Cup 2022</p>
                </div>
            </div>

            <div class="uk">
                <div class="coverimg">
                    <img src="images/hed4.jpg" alt="">
                </div>
                <div class="judul-container">
                    <div class="judul">Bulutangkis</div>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Tunggal Putra Kejuaraan Bulutangkis Tingkat Universitas Se-Sulawesi Unhas
                        Badminton Cup 3
                    </p>
                </div>
                <div class="poin">
                    <img src="images/2ndw.png" alt="" class="juara">
                    <p class="hover-text"> Ganda Campuran Kejuaraan Bulutangkis Tingkat Universitas Se-Sulawesi Unhas
                        Badminton Cup 3
                    </p>
                </div>
                <div class="poin">
                    <img src="images/2ndw.png" alt="" class="juara">
                    <p class="hover-text"> Lomba Badminton FISIP CUP UIM Liga Ramadhan

                    </p>
                </div>
            </div>

            <div class="uk">
                <div class="coverimg">
                    <img src="images/hed5.jpg" alt="">
                </div>
                <div class="judul-container">
                    <div class="judul">Volly</div>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Lomba Volly Fisioterapi Cup 2019
                    </p>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 1 Walikota Cup 2020</p>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 3 Walikota Cup 2022</p>
                </div>
            </div>

            <div class="uk">
                <div class="coverimg">
                    <img src="images/hed6.jpg" alt="">
                </div>
                <div class="judul-container">
                    <div class="judul">Tari</div>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 1 Lomba Seni Tari
                    </p>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 1 Walikota Cup 2020</p>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 3 Walikota Cup 2022</p>
                </div>
            </div>

            <div class="uk">
                <div class="coverimg">
                    <img src="images/image5.jpg" alt="">
                </div>
                <div class="judul-container">
                    <div class="judul">Musik</div>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 1 Nyanyi Lagu Daerah Kategori Umum Festival Budaya Tradisional
                        Se-Sulawesi Selatan
                    </p>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Lomba Nyanyi Lagu Daerah Kategori Umum
                    </p>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 3 Walikota Cup 2022</p>
                </div>
            </div>

            <div class="uk">
                <div class="coverimg">
                    <img src="images/hed7.jpg" alt="">
                </div>
                <div class="judul-container">
                    <div class="judul">Tenis Meja</div>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Tennis Meja Kategori Umum Beregu Putri Kapolres Cup
                    </p>
                </div>
                <div class="poin">
                    <img src="images/1stw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 1 Walikota Cup 2020</p>
                </div>
                <div class="poin">
                    <img src="images/3rdw.png" alt="" class="juara">
                    <p class="hover-text"> Juara 3 Walikota Cup 2022</p>
                </div>
            </div>
        </div>
        </div>
        <img src="images/bg2.png" alt="" class="bg2">
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


    <script src="/js/script.js"></script>

</body>

</html>

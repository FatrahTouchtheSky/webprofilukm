<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan | UKM Senior</title>
    <link rel="shortcut icon" href="images/Logo_UKM_SENIOR-removebg-preview.png" type="images/x-icon">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Indie+Flower&family=Teko&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="header">
            <div class="bg">
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
        </div>

        <div class="jadwal-header">
            <h1 class="jadwallatihan">JADWAL LATIHAN</h1>
            <div class="linejadwal"></div>
        </div>
        <div class="latihan">
            <div class="volly">
                <img src="images/voli.jpg" alt="">
                <h2>UK Volly</h2>
                <div class="jadwal-row">
                    <p>Selasa <br>Kamis <br>Sabtu</p>
                    <h3>: 16.30 <br>: 16.30 WITA <br>: 8.00 WITA</h3>
                </div>
                <h4>Lap. Merdeka kampus 1</h4>
            </div>
            <div class="tarii">
                <h2>UK Tari</h2>
                <div class="jadwal-row">
                    <p>Selasa <br>Kamis <br>Sabtu</p>
                    <h3>: 16.30 <br>: 16.30 WITA <br>: 8.00 WITA</h3>
                </div>
                <h4>Gazebo akademik kampus 1</h4>
            </div>
            <div class="basket">
                <h2>UK Basket</h2>
                <div class="jadwal-row">
                    <p>Selasa <br>Kamis <br>Sabtu</p>
                    <h3>: 17.00 <br>: 17.00 WITA <br>: 17.00 WITA</h3>
                </div>
                <h4>Lap. Basket kampus 1</h4>
            </div>
            <div class="tennis">
                <h2>UK Tenis Meja</h2>
                <div class="jadwal-row">
                    <p>Selasa <br>Kamis <br>Sabtu</p>
                    <h3>: 16.30 <br>: 16.30 WITA <br>: 8.00 WITA</h3>
                </div>
                <h4>Lap. Bulutangkis kampus 1</h4>
            </div>
            <div class="musik">
                <h2>UK Musik</h2>
                <div class="jadwal-row">
                    <p>Selasa <br>Kamis <br>Sabtu</p>
                    <h3>: 16.30 <br>: 16.30 WITA <br>: 8.00 WITA</h3>
                </div>
                <h4>Sekretariat UKM Senior</h4>
            </div>
            <div class="bultang">
                <h2>UK Bulutangkis</h2>
                <div class="jadwal-row">
                    <p>Selasa <br>Kamis <br>Sabtu</p>
                    <h3>: 16.30 <br>: 16.30 WITA <br>: 8.00 WITA</h3>
                </div>
                <h4>Lap. Bulutangkis kampus 1</h4>
            </div>
        </div>
        <div class="galeri-header">
            <h1 class="galeri">GALERI SENIOR</h1>
            <div class="linegaleri"></div>
        </div>
        <div class="gallery-grid">
            @foreach ($galleries as $gallery)
                <div class="prog">
                    <img src="{{ asset('img/gallery/' . $gallery->image) }}" alt="">
                    <p>{{ $gallery->title }}</p>
                    <p class="p1">{{ $gallery->description }}</p>
                </div>
            @endforeach
        </div>

        <div class="footer">
            <a href="https://www.youtube.com/@ukmseniorpnup1879" class="ftr1"><img src="images/YT.png" alt=""
                    class="medsos1"></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fukmseniorpnup" class="ftr2"><img
                    src="images/Twitter.png" alt="" class="medsos2"></a>
            <a href="https://www.instagram.com/ukmsenior_pnup" class="ftr3"><img src="images/IG.png" alt=""
                    class="medsos3"></a>
            <a href="https://www.tiktok.com/@poltek_upg?_t=8iYPHTx8AHo&_r=1" class="ftr4"><img src="images/tiktok.png"
                    alt="" class="medsos4"></a>
            <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
        </div>
    </div>
</body>

</html>

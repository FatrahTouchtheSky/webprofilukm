<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pentas23 Registration</title>
    <link rel="stylesheet" href="{{ asset('css/style-createmember.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="/images/PNUP Logo.png" alt="" class="pnup">
            <img src="/images/Logo UKM SENIOR.jpg" class="logo" />
            <ul class="nav-list">
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">BERANDA</a></li>
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">TENTANG</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="{{ Request::is('kegiatan') ? 'active' : '' }}">KEGIATAN</a></li>
                <li><a href="{{ url('/order') }}" class="{{ Request::is('order') ? 'active' : '' }}">ORDER</a></li>
                <li><a href="{{ url('/news') }}" class="{{ Request::is('news*') ? 'active' : '' }}">BERITA</a></li>
            </ul>
            <a href="{{ url('/') }}" class="daftar">KEMBALI KE BERANDA</a>
        </div>
        <main>
            <div class="welcome-text">
                <h1>Registrasi <span>Berhasil</span></h1>
                <div class="linebrt1"></div>
                <img src="/images/light.png" alt="">
                <p>Terima Kasih telah Mendaftarkan diri di Pentas23</p>
            </div>
            <div class="form-and-image">

                <img src="/images/done.png" alt="Image" class="img">
            </div>
        </main>
    </div>
    <img src="bg2.png" alt="" class="bg2">
    <div class="footer">
        <a href="https://www.youtube.com/@ukmseniorpnup1879" class="ftr1"><img src="/images/YT.png" alt=""
                class="medsos1"></a>
        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fukmseniorpnup" class="ftr2"><img
                src="/images/Twitter.png" alt="" class="medsos2"></a>
        <a href="https://www.instagram.com/ukmsenior_pnup" class="ftr3"><img src="/images/IG.png" alt=""
                class="medsos3"></a>
        <a href="https://www.tiktok.com/@poltek_upg?_t=8iYPHTx8AHo&_r=1" class="ftr4"><img src="/images/tiktok.png"
                alt="" class="medsos4"></a>
        <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
    </div>
    <script src="/js/script.js" defer></script>
</body>

</html>

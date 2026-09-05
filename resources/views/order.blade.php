<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order | UKM Senior </title>
    <link rel="shortcut icon" href="images/Logo_UKM_SENIOR-removebg-preview.png" type="images/x-icon">
    <link rel="stylesheet" href="css/style-order.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Indie+Flower&family=Teko&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="contaiiner">
        <div class="header">
            <img src="images/PNUP Logo.png" alt="" class="pnup">
            <img src="images/Logo UKM SENIOR.jpg" class="logo" />
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
        </div>
        <div class="price">
            <div class="order-header">
                <h2 class="judul">JASA SENIOR</h2>
                <div class="lineorder1"></div>
            </div>

            <div class="tari">
                <div class="paduppa">
                    <img src="images/paduppa.JPG" alt="">
                    <h4>Tari Paduppa</h4>
                    <p>3 Orang <br>5 Orang</p>
                    <h5>: Rp 1.400.000 <br>: Rp 1.500.000</h5>
                </div>
                <div class="mappadendang">
                    <img src="images/mappa.jpg" alt="">
                    <h4>Tari Mappadendang</h4>
                    <p>5 Orang <br>7 Orang <br>9 Orang</p>
                    <h5>: Rp 1.700.000 <br>: Rp 1.800.000 <br>: Rp 2.000.000</h5>
                </div>
                <div class="etnis">
                    <img src="images/4etnis.JPG" alt="">
                    <h4>Tari 4 Etnis</h4>
                    <p>4 Orang <br>5 Orang <br>8 Orang <br>12 Orang </p>
                    <h5>: Rp 1.400.000 <br>: Rp 1.600.000 <br>: Rp 1.900.000 <br>: Rp 2.200.000</h5>
                </div>
            </div>

            <div class="alat">
                <img src="images/tongkonan.png" alt="">
                <h4>Pakaian dan Alat</h4>
                <p>Pakaian <br> Gendang Toraja <br> Gendang Gold & Merah <br> Suling <br> Pui - pui </p>
                <h5>: Rp 50.000/set <br> : Rp 50.000/set <br> : Rp 50.000/buah <br> : Rp 20.000/buah <br> : Rp
                    35.000/buah</h5>
                <h6>Jimbe <br> Bosara Besar <br> Bosara Kecil <br> Ba'bala</h6>
                <h1>: Rp 35.000/buah <br> : Rp 10.000/buah <br> : Rp 5.000/buah <br> : Rp 15.000/set</h1>
            </div>

            <div class="how">
                <h3>Info Pemesanan</h3>
                <p>Andi Arum Alfika | 085342501326</p>
                <img src="images/wa.png" alt="">
            </div>
        </div>
        <div class="footer2">
            <a href="https://www.youtube.com/@ukmseniorpnup1879" class="ftr12"><img src="images/YT.png" alt=""
                    class="medsos12"></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fukmseniorpnup" class="ftr22"><img
                    src="images/Twitter.png" alt="" class="medsos22"></a>
            <a href="https://www.instagram.com/ukmsenior_pnup" class="ftr32"><img src="images/IG.png" alt=""
                    class="medsos32"></a>
            <a href="https://www.tiktok.com/@poltek_upg?_t=8iYPHTx8AHo&_r=1" class="ftr42"><img src="images/tiktok.png"
                    alt="" class="medsos42"></a>


            <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
        </div>
    </div>
    <div class="bgftr2"></div>
</body>

</html>

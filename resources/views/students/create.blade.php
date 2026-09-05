<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pentas23 Registration</title>
    <link rel="stylesheet" href="{{ asset('css/style-createmember.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/Logo_UKM_SENIOR-removebg-preview.png') }}" type="image/x-icon">
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
        </div>
        <main>
            <div class="welcome-text">
                <h1>Selamat Datang Calon <span>Pentas23</span></h1>
                <div class="linebrt1"></div>
                <img src="/images/light.png" alt="">
            </div>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-and-image">
                <form class="registration-form" action="{{ route('students.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <label>Nama :</label>
                    <input type="text" name="name" value="{{ old('name') }}" required>


                    <label>NIM :</label>
                    <input type="text" name="nim" value="{{ old('nim') }}" required>


                    <label>Jurusan :</label>
                    <select id="jurusan" name="department" onchange="updateProdi()" value="{{ old('department') }}"
                        required>
                        <option value="" disabled selected>Pilih Jurusan</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Informatika dan Komputer">Teknik Informatika dan Komputer</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Administrasi Niaga">Administrasi Niaga</option>
                        <option value="Akuntansi">Akuntansi</option>
                    </select>
                    {{-- <input type="text" name="department" value="{{ old('department') }}" required> --}}


                    <label>Program Studi :</label>
                    {{-- <input type="text" name="program_of_study" value="{{ old('program_of_study') }}" required> --}}
                    <select id="prodi" name="program_of_study" value="{{ old('program_of_study') }}" required>
                        <option value="" disabled selected>Pilih Prodi</option>
                    </select>


                    <label>Jenis Kelamin :</label>
                    <select name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>


                    <label>Alamat</label>
                    <input type="text" id="alamat" name="address" value="{{ old('address') }}" required>
                    {{-- <textarea name="address" required>{{ old('address') }}</textarea> --}}


                    <label>Email :</label>
                    <input type="email" name="email" value="{{ old('email') }}" required>


                    <label>No. Telp (Whatsapp) :</label>
                    <input type="text" name="phone_number" value="{{ old('phone_number') }}" required>


                    <label>Unit Kegiatan :</label>
                    {{-- <input type="text" name="unit_of_activity" value="{{ old('unit_of_activity') }}" required> --}}
                    <select name="unit_of_activity" value="{{ old('unit_of_activity') }}" required>
                        <option value="" disabled selected>Pilih Unit Kegiatan</option>
                        <option value="UK Musik">UK Musik</option>
                        <option value="UK Tari">UK Tari</option>
                        <option value="UK Tennis Meja">UK Tennis Meja</option>
                        <option value="UK BuluTangkis">UK BuluTangkis</option>
                        <option value="UK Voli">UK Voli</option>
                        <option value="UK Basket">UK Basket</option>
                    </select>


                    <label>Photo 3x4 :</label>
                    <input type="file" name="photo" class="file" required>

                    <div class="buttons">
                        <button type="button" class="btn-back" name="back" onclick="goBack()">Back</button>
                        <button type="submit" class="btn-accept" name="submit">Accept</button>
                    </div>
                </form>
                <img src="/images/memberimg.png" alt="Image" class="img">
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

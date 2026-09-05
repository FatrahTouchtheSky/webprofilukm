<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($news) ? 'Edit News' : 'Add News' }}</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo_UKM_SENIOR-removebg-preview.png') }}" type="images/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style-addnews.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}" class="{{ Request::routeIs('admin.dashboard') || Request::routeIs('admin.addnews') || Request::routeIs('news.edit') ? 'active' : '' }}"><span class="material-symbols-outlined">article</span> News</a></li>
                    <li><a href="{{ route('gallery.index') }}" class="{{ Request::routeIs('gallery.*') ? 'active' : '' }}"><span class="material-symbols-outlined">photo_library</span> Gallery Senior</a></li>
                    <li><a href="{{ route('students.index') }}" class="{{ Request::routeIs('students.index') ? 'active' : '' }}"><span class="material-symbols-outlined">person_add</span> New Member</a></li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="material-symbols-outlined">logout</span> Logout
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <div class="navbar">
                <img src="{{ asset('images/PNUP Logo.png') }}" alt="" class="pnup">
                <img src="{{ asset('images/Logo UKM SENIOR.jpg') }}" alt="" class="ukm">
                <h3>UKM SENIOR <br> Politeknik Negeri Ujung Pandang</h3>
                <div class="profile">
                    <img src="{{ asset('images/profil.jpg') }}" alt="Profile Picture">
                </div>
            </div>
            <div class="header">
                <h1>{{ isset($news) ? 'Edit Berita' : 'Tambahkan Berita Baru' }}</h1>
            </div>
            <form class="registration-form"
                action="{{ isset($news) ? route('news.update', $news->id) : route('news.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @if (isset($news))
                    @method('POST')
                @endif
                <label for="title">Judul Berita :</label>
                <input type="text" id="title" name="title" value="{{ old('title', isset($news) ? $news->title : '') }}"
                    required placeholder="Masukkan judul berita...">

                <label for="body">Isi Berita :</label>
                <textarea id="body" name="body" rows="10" required placeholder="Tuliskan isi berita di sini. Tekan Enter 2x untuk memisahkan antar paragraf...">{{ old('body', isset($news) ? $news->body : '') }}</textarea>

                <label for="image">Foto Berita :</label>
                <input type="file" id="image" name="image" {{ isset($news) ? '' : 'required' }}
                    class="file">

                <label for="status">Status :</label>
                <select name="status" id="status" required>
                    <option value="" disabled {{ isset($news) ? '' : 'selected' }}>Pilih Status Berita &cudarrr;
                    </option>
                    <option value="ON" {{ isset($news) && $news->status == 'ON' ? 'selected' : '' }}>ON</option>
                    <option value="OFF" {{ isset($news) && $news->status == 'OFF' ? 'selected' : '' }}>OFF</option>
                </select>

                <div class="button-container">
                    <button type="button" class="btn-back" onclick="goBack()" name="back">Back</button>
                    <button type="submit" class="btn-accept"
                        name="submit">{{ isset($news) ? 'Update' : 'Accept' }}</button>
                </div>
            </form>
            {{-- <img src="{{ asset('images/img1.png') }}" alt="Image" class="img"> --}}
            <img src="{{ asset('images/bg2.png') }}" alt="" class="bg2">
            <div class="footer">
                <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>

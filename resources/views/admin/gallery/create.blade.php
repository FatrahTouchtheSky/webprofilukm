<!-- resources/views/admin/gallery/create.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($gallery) ? 'Edit Gallery' : 'Create Gallery' }}</title>
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
                <h1>{{ isset($gallery) ? 'Edit Galeri' : 'Tambahkan Galeri Baru' }}</h1>
            </div>
            <form class="registration-form"
                action="{{ isset($gallery) ? route('gallery.update', $gallery->id) : route('gallery.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                @if (isset($gallery))
                    @method('PUT')
                @endif
                <label for="title">Nama Kegiatan :</label>
                <input type="text" id="title" name="title" value="{{ old('title', isset($gallery) ? $gallery->title : '') }}"
                    required placeholder="Masukkan nama kegiatan...">

                <label for="description">Waktu Kegiatan :</label>
                <input type="text" id="description" name="description" value="{{ old('description', isset($gallery) ? $gallery->description : '') }}" placeholder="Masukkan waktu/keterangan kegiatan...">

                <label for="image">Foto Galeri :</label>
                <input type="file" id="image" name="image" {{ isset($gallery) ? '' : 'required' }}
                    class="file">

                <div class="button-container">
                    <button type="button" class="btn-back" onclick="goBack()" name="back">Back</button>
                    <button type="submit" class="btn-accept"
                        name="submit">{{ isset($gallery) ? 'Update' : 'Accept' }}</button>
                </div>
            </form>
            <img src="{{ asset('images/bg2.png') }}" alt="" class="bg2">
            <div class="footer">
                <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>

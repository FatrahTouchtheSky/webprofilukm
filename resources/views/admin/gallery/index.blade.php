<!-- resources/views/admin/gallery/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/Logo_UKM_SENIOR-removebg-preview.png') }}" type="images/x-icon">
    <title>Dashboard UKM Senior</title>
    <link rel="stylesheet" href="{{ asset('css/style-dashboard.css') }}">
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
                <h1>Gallery Senior</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="search-add">
                <input type="text" placeholder="Search" id="searchInput">
                <button class="add-new" onclick="window.location.href='{{ url('/admin/gallery/create') }}'">
                    <span class="material-symbols-outlined">add_photo_alternate</span>
                    Add New Gallery
                </button>
            </div>
            <div class="table-container">
                <table class="gallery-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Kegiatan</th>
                            <th>Waktu</th>
                            <th>Dibuat</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $gallery->title }}</td>
                                <td>{{ $gallery->description }}</td>
                                <td>{{ $gallery->created_at->format('d M Y') }}</td>
                                <td><img src="{{ asset('img/gallery/' . $gallery->image) }}"
                                        alt="Image {{ $loop->iteration }}" style="width:100px; height:auto;"></td>
                                <td class="button-container">
                                    <button class="button"
                                        onclick="window.location.href='{{ route('gallery.edit', $gallery->id) }}'">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST"
                                        class="delete-form" onsubmit="return confirmDelete(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="footer">
                <p>| &copy; 2023 UKM Senior Politeknik Negeri Ujung Pandang </p>
            </div>
        </main>
    </div>
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">Konfirmasi Penghapusan</div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus galeri ini?</p>
            </div>
            <div class="modal-footer">
                <button class="btn-confirm" onclick="confirmDeleteAction()">Hapus</button>
                <button class="btn-cancel" onclick="cancelDeleteAction()">Batal</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>

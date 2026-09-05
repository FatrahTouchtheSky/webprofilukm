<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo_UKM_SENIOR-removebg-preview.png') }}" type="images/x-icon">
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
                <h1>Pentas23</h1>
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
            </div>
            <div class="table-container">
                <table class="gallery-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Program Studi</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. Telp</th>
                            <th>Unit Kegiatan</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($students as $index => $student)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->nim }}</td>
                                <td>{{ $student->department }}</td>
                                <td>{{ $student->program_of_study }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone_number }}</td>
                                <td>{{ $student->unit_of_activity }}</td>
                                <td><img src="{{ asset('storage/' . $student->photo) }}" alt="Photo"
                                        style="width:100px; height:auto;">
                                </td>
                                <td class="button-container">
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST"
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
                <p>Apakah Anda yakin ingin menghapus data calon anggota ini?</p>
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

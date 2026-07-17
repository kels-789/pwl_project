<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('itbss.jpg') }}" width="55">
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">
                        Menu
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                               href="{{ action([App\Http\Controllers\DosenController::class,'index']) }}">
                                Dosen
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item active"
                               href="{{ action([App\Http\Controllers\MahasiswaController::class,'index']) }}">
                                Mahasiswa
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ action([App\Http\Controllers\JurusanController::class,'index']) }}">
                                Jurusan
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ action([App\Http\Controllers\MataKuliahController::class,'index']) }}">
                                Mata Kuliah
                            </a>
                        </li>
                    </ul>

                </li>

            </ul>

        </div>
    </div>
</nav>

<!-- Background -->
<div class="bg-primary-subtle min-vh-100 py-5">

    <div class="container">

        <div class="card shadow">

            <div class="card-header d-flex justify-content-between align-items-center">

                <h3 class="mb-0">
                    Data Mahasiswa
                </h3>

                <a href="{{ route('mahasiswa.add') }}"
                   class="btn btn-primary">
                    Create
                </a>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-striped table-hover align-middle">

                        <thead class="table-primary">

                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NIM</th>
                            <th>NISN</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>

                        </thead>

                        <tbody>

                        @foreach ($mahasiswa as $m)

                        <tr>

                            <td>{{ $m->id }}</td>
                            <td>{{ $m->Fullname }}</td>
                            <td>{{ $m->NIM }}</td>
                            <td>{{ $m->NIDN }}</td>
                            <td>{{ $m->Tempat_Lahir }}</td>
                            <td>{{ $m->Tanggal_Lahir }}</td>
                            <td>{{ $m->Alamat }}</td>
                            <td>{{ $m->created_at }}</td>

                            <td>

                                <a href="{{ route('mahasiswa.update',$m->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('mahasiswa.delete',$m->id) }}"
                                      method="post"
                                      class="d-inline">

                                    @csrf
                                    <input type="hidden" name="id" value="{{ $m->id }}">
                                    <input type="hidden" name="_method" value="DELETE">

                                    <button type="submit"
                                            class="btn btn-danger btn-sm">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
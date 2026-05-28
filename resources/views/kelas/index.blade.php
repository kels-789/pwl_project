<html lang="en">
    <body>
        <table class="table table-stripped">
            <thead>
            </thead>
            @foreach ($kelas as $k)
            <tr>
                <td>{{$k->id}}</td>
                <td>{{$k->kode_kelas}}</td>
                <td>{{$k->dosen->Fullname}}</td>
                <td>{{$k->matakuliah->Nama_Mata_Kuliah}}</td>
                <td>{{$k->ruang_kelas}}</td>
                <td>{{$k->hari}}</td>
                <td>{{$k->jam}}</td>
                <td>{{$k->tahun_ajaran}}</td>
                <td>
                    <form action="{{ action([App\Http\Controllers\KelasController::class, 'index']) }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$k->id}}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
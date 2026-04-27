<a href={{route('matakuliah.add')}}>
    <input type="button" value="create">
</a>   
<table border="1">
    <thead>
        <th> No </th>
        <th> Jurusan ID </th>
        <th> Kode MK </th>
        <th> Nama MK </th>
        <th> SKS </th>
        <th> Dosen ID </th>
        <th> Tanggal Dibuat </th>
        <th> Aksi </th>
    </thead>
    @foreach ($matakuliah as $mk)
    <tr>
        <td>{{$mk->id}} </td>
        <td>{{$mk->jurusan_id}} </td>
        <td>{{$mk->Kode_MK}} </td>
        <td>{{$mk->Nama_MK}} </td>
        <td>{{$mk->SKS}} </td>
        <td>{{$mk->dosen_id}} </td>
        <td>{{$mk->created_at}} </td>
        <td>
            <a href={{route('matakuliah.update', $mk->id)}}>
                <input type="button" value="edit">
            </a>   
            <form action="{{route('matakuliah.delete', $mk->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$mk->id}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>

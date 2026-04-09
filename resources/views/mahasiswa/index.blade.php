<table border="1">
    <thead>
        <th> No </th>
        <th> Nama Lengkap </th>
        <th> NIM </th>
        <th> NISN </th>
        <th> Tempat Lahir </th>
        <th> Tanggal Lahir </th>
        <th> Alamat </th>
        <th> Tanggal Dibuat </th>
    </thead>
    @foreach ($mahasiswa as $m)
    <tr>
        <td>{{$m->id}} 1 </td>
        <td>{{$m->Fullname}} Kelsy Angelita </td>
        <td>{{$m->NIM}} 24210018 </td>
        <td>{{$m->NIDN}} NISN </td>
        <td>{{$m->Tempat_Lahir}} Pontianak </td>
        <td>{{$m->Tanggal_Lahir}} 19 Desember 2006 </td>
        <td>{{$m->Alamat}} Jl. Tanjung Pura </td>
        <td>{{$m->created_at}} 02 April 2026 </td>
    </tr>
    @endforeach
</table>
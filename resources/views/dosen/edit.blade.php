<form action="{{route('dosen.edit', $dosen->id)}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$dosen->id}}">
<input type="hidden" name="_method" value="PUT">
<table>
	<tr>
		<td> Nama Lengkap </td>
		<td> : </td>
		<td> <input type="text" name="Fullname" value="{{$dosen->Fullname}}"> </td>
	</tr>
	<tr>
		<td> Nomor Induk Pegawai </td>
		<td> : </td>
		<td> <input type="text" name="NIP" value="{{$dosen->NIP}}"> </td>
	</tr>
	<tr>
		<td> Nomor Induk Dosen Nasional </td>
		<td> : </td>
		<td> <input type="text" name="NIDN" value="{{$dosen->NIDN}}"> </td>
	</tr>
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td><input type="text" name="Pendidikan_Terakhir" value="{{$dosen->Pendidikan_Terakhir}}"></td>
    </tr>
    <tr>
        <td>Jurusan ID</td>
        <td>:</td>
        <td><input type="text" name="jurusan_id" value="{{$dosen->jurusan_id}}"></td>
    </tr>
	<tr>
		<td> Tempat Lahir </td>
		<td> : </td>
		<td> <input type="text" name="Tempat_Lahir" value="{{$dosen->Tempat_Lahir}}"> </td>
	</tr>
	<tr>
		<td> Tanggal Lahir </td>
		<td> : </td>
		<td> <input type="text" name="Tanggal_Lahir" value="{{$dosen->Tanggal_Lahir}}"> </td>
	</tr>
	<tr>
		<td> Alamat </td>
		<td> : </td>
		<td> <textarea name="Alamat">{{$dosen->Alamat}}</textarea> </td>
	</tr>
</table>

<button type="submit"> Add </button>
<button type="reset"> Clear </button>
</form>
<form action="{{route('matakuliah.edit', $matakuliah->id)}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$matakuliah->id}}">
<input type="hidden" name="_method" value="PUT">
<table>
	<tr>
		<td> Jurusan ID </td>
		<td> : </td>
		<td> <input type="text" name="jurusan_id" value="{{$matakuliah->jurusan_id}}"> </td>
	</tr>
	<tr>
		<td> Kode MK </td>
		<td> : </td>
		<td> <input type="text" name="Kode_MK" value="{{$matakuliah->Kode_MK}}"> </td>
	</tr>
	<tr>
		<td> Nama MK </td>
		<td> : </td>
		<td> <input type="text" name="Nama_MK" value="{{$matakuliah->Nama_MK}}"> </td>
	</tr>
    <tr>
        <td> SKS </td>
        <td>:</td>
        <td><input type="text" name="SKS" value="{{$matakuliah->SKS}}"></td>
    </tr>
    <tr>
        <td> Dosen ID </td>
        <td>:</td>
        <td><input type="text" name="dosen_id" value="{{$matakuliah->dosen_id}}"></td>
    </tr>
</table>

<button type="submit"> Add </button>
<button type="reset"> Clear </button>
</form>
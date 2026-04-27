<form action="{{route('jurusan.edit', $jurusan->id)}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$jurusan->id}}">
<input type="hidden" name="_method" value="PUT">
<table>
	<tr>
		<td> Nama Jurusan </td>
		<td> : </td>
		<td> <input type="text" name="Nama_Jurusan" value="{{$jurusan->Nama_Jurusan}}"> </td>
	</tr>
	<tr>
		<td> Kode Jurusan </td>
		<td> : </td>
		<td> <input type="text" name="Kode_Jurusan" value="{{$jurusan->Kode_Jurusan}}"> </td>
	</tr>
</table>

<button type="submit"> Add </button>
<button type="reset"> Clear </button>
</form>
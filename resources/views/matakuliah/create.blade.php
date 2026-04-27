<form action="{{route('matakuliah.save')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>Jurusan ID</td>
            <td>:</td>
            <td><input type="text" name="jurusan_id"></td>
        </tr>
        <tr>
            <td>Kode MK</td>
            <td>:</td>
            <td><input type="text" name="Kode_MK"></td>
        </tr>
        <tr>
            <td>Nama MK</td>
            <td>:</td>
            <td><input type="text" name="Nama_MK"></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>:</td>
            <td><input type="text" name="SKS"></td>
        </tr>
        <tr>
            <td>Dosen ID</td>
            <td>:</td>
            <td><input type="text" name="dosen_id"></td>
        </tr>
    </table>
    <button type="submit"> Add </button>
    <button type="reset"> Clear </button>
</form>

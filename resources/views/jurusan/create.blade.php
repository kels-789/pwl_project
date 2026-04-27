<form action="{{route('jurusan.save')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>Nama Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Nama_Jurusan"></td>
        </tr>
        <tr>
            <td>Kode Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Kode_Jurusan"></td>
        </tr>
    </table>
    <button type="submit"> Add </button>
    <button type="reset"> Clear </button>
</form>
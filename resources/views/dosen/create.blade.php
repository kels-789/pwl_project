<form action="{{route('dosen.save')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="Fullname"></td>
        </tr>
        <tr>
            <td>Nomor Induk Pegawai</td>
            <td>:</td>
            <td><input type="text" name="NIP"></td>
        </tr>
        <tr>
            <td>Nomor Induk Dosen Nasional</td>
            <td>:</td>
            <td><input type="text" name="NIDN"></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><input type="text" name="Pendidikan_Terakhir"></td>
        </tr>
        <tr>
            <td>Jurusan ID</td>
            <td>:</td>
            <td><input type="text" name="jurusan_id"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tempat_Lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tanggal_Lahir"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="Alamat"></textarea></td>
        </tr>
    </table>
    <button type="submit"> Add </button>
    <button type="reset"> Clear </button>
</form>

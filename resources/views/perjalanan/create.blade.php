<form action="/perjalanan/store" method="post">
    @csrf
    <table>
        <?php date_default_timezone_set('Asia/Jakarta') ?>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Jam</td>
            <td>:</td>
            <td><input type="text" value="{{ date('H.i')}}" name="jam"></td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td>:</td>
            <td><input type="text" name="lokasi"></td>
        </tr>
        <tr>
            <td>Suhu Tubuh</td>
            <td>:</td>
            <td><input type="find" name="suhu_tubuh"></td>
        </tr>
    </table>
    <tr>
        <td><button type="submit">Simpan</button></td>
    </tr>
</form>
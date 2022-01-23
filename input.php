<a href="index.php">GO TO HOME</a>
<br/>
<form action="simpan.php" method="post">
    <table widhe="25%" border="0">
    <tr>
        <td>id siswa</td><td><input type="text" name="id_siswa"></td>
    </tr>
    <tr>
        <td>nama siswa</td><td><input type="text" name="nama_siswa"></td>
    </tr>
    <tr>
        <td>jenis kelamin</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="pria">Pria
            <input type="radio" name="jenis_kelamin" value="wanita">perempuan
        </td>
    </tr>
    <tr>
        <td>Alamat</td><td><input type="text" name="alamat"></td>
    </tr>
    <td>Hoby</td>
    <td><input type="text" name="hoby"></td>
    <tr>
        <td><input type="submit" name="save" value="simpan data"></td>
    </tr>
    </table>
</form>
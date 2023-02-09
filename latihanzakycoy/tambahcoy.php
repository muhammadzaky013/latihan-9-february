<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH</title>
    <link rel="stylesheet" href="datatambah.css">
    <link rel="icon" type="icon/x-icon" href="logo.png">
</head>
<body>
    <center>
    <div class="header">
       <h1>بسم الله الرحمن الرحيم</h1>
       </div>
        <h1>FORM RENTAL</h1>
        <form action="prosestambahcoy.php" method="POST">
            <table border="3">
                <tr>
                    <td><label for="nama_peminjam">Nama Peminjam</label></td>
                    <td><input type="text" name="nama_peminjam"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td><label for="umur">Umur</label></td>
                    <td><input type="text" name="umur"></td>
                </tr>
                <tr>
                    <td><label for="keperluan">Keperluan</label></td>
                    <td><input type="text" name="keperluan"></td>
                </tr>
                <tr>
                    <td><label for="jaminan">Jaminan</label></td>
                    <td><input type="text" name="jaminan"></td>
                </tr>
                <tr>
                    <td><label for="plat_nomor">Plat Nomor</label></td>
                    <td><input type="text" name="plat_nomor"></td>
                </tr>
                <tr>
                    <td><label for="merek">Merek</label></td>
                    <td><input type="text" name="merek"></td>
                </tr>
                <tr>
                    <td><label for="jenis_mobil">Jenis Mobil</label></td>
                    <td><input type="text" name="jenis_mobil"></td>
                </tr>
                <tr>
                    <td><label for="tahun_mobil">Tahun Mobil</label></td>
                    <td><input type="number" name="tahun_mobil"></td>
                </tr>
                <tr>
                    <td><label for="tanggal_pinjam">Tanggal Pinjam</label></td>
                    <td><input type="date" name="tanggal_pinjam"></td>
                </tr>
                <tr>
                    <td><label for="tanggal_kembali">Tanggal Kembali</label></td>
                    <td><input type="date" name="tanggal_kembali"></td>
                </tr>
                </div>
</table><p>
<td><a href="tampilcoy.php"><input type="button" name="kembali" value="KEMBALI"></a></td>
<td><input type="submit" name="tambah" value="TAMBAH"></a></td>
</form>
</body>
</html>
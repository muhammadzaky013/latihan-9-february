<?php

include("koneksi.php");


if( !isset($_GET['id_pinjaman']) ){
    header('Location: tampilcoy.php');
}



$id = $_GET['id_pinjaman'];
$sql = "SELECT * FROM tb_pinjaman INNER JOIN tb_mobil ON tb_pinjaman.id_mobil = tb_mobil.id_mobil WHERE tb_pinjaman.id_pinjaman='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT</title>
    <link rel="stylesheet" href="dataedit.css">
    <link rel="icon" type="icon/x-icon" href="logo.png">
</head>
<body>
    <center>
    <div class="header">
       <h1>بسم الله الرحمن الرحيم</h1>
       </div>
        <h1>EDIT DATA</h1>
        <form action="proseseditcoy.php" method="POST">
            <table border="3">
                <tr>
                    <td><input type="hidden" name="id_pinjaman" value="<?php echo $data['id_pinjaman']?>" /></td>
               </tr>
                <tr>
                    <td><label for="nama_peminjam">Nama Peminjam</label></td>
                    <td><input type="text" name="nama_peminjam" value="<?php echo $data['nama_peminjam']?>"/></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"/></td>
                </tr>
                <tr>
                    <td><label for="umur">Umur</label></td>
                    <td><input type="text" name="umur" value="<?php echo $data['umur']?>"/></td>
                </tr>
                <tr>
                    <td><label for="keperluan">Keperluan</label></td>
                    <td><input type="text" name="keperluan" value="<?php echo $data['keperluan']?>"/></td>
                </tr>
                <tr>
                    <td><label for="jaminan">Jaminan</label></td>
                    <td><input type="text" name="jaminan" value="<?php echo $data['jaminan']?>"/></td>
                </tr>
                <tr>
                    <td><label for="plat_nomor">Plat Nomor</label></td>
                    <td><input type="text" name="plat_nomor" value="<?php echo $data['plat_nomor']?>"/></td>
                </tr>
                <tr>
                    <td><label for="merek">Merek</label></td>
                    <td><input type="text" name="merek" value="<?php echo $data['merek']?>"/></td>
                </tr>
                <tr>
                    <td><label for="jenis_mobil">Jenis Mobil</label></td>
                    <td><input type="text" name="jenis_mobil" value="<?php echo $data['jenis_mobil']?>"/></td>
                </tr>
                <tr>
                    <td><label for="tahun_mobil">Tahun Mobil</label></td>
                    <td><input type="number" name="tahun_mobil" value="<?php echo $data['tahun_mobil']?>"/></td>
                </tr>
                <tr>
                    <td><label for="tanggal_pinjam">Tanggal Pinjam</label></td>
                    <td><input type="date" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam']?>"/></td>
                </tr>
                <tr>
                    <td><label for="tanggal_kembali">Tanggal Kembali</label></td>
                    <td><input type="date" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali']?>"/></td>
                </tr>
</table><p>
<td><a href="tampilcoy.php"><input type="button" name="kembali" value="KEMBALI"></a></td>
<td><input type="submit" name="edit" value="EDIT"></a></td>
</form>
</body>
</html>
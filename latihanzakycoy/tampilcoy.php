<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Zaky</title>
    <link rel="stylesheet" href="datatampil.css">
    <link rel="icon" type="icon/x-icon" href="logo.png">

</head>
<body>
    <center>
       <div class="header">
       <h1>بسم الله الرحمن الرحيم</h1>
       </div>
       <h1>DATA RENTAL MOBIL</h1>
       <P>PT.ZETRO ID</P>
        <table border="2">
            <tr>
                <td>No</td>
                <td>Nama Peminjam</td>
                <td>Alamat</td>
                <td>Umur</td>
                <td>Keperluan</td>
                <td>Jaminan</td>
                <td>Plat Nomor</td>
                <td>Merek</td>
                <td>Jenis Mobil</td>
                <td>Tahun Mobil</td>
                <td>Tanggal Pinjam</td>
                <td>Tanggal Kembali</td>
                <td>AKSI</td>
</tr>

<?php
include("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_pinjaman INNER JOIN tb_mobil
         ON tb_pinjaman.id_mobil = tb_mobil.id_mobil");
$no = 1;
foreach($query as $row):
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_peminjam']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['umur']; ?></td>
    <td><?= $row['keperluan']; ?></td>
    <td><?= $row['jaminan']; ?></td>
    <td><?= $row['plat_nomor']; ?></td>
    <td><?= $row['merek']; ?></td>
    <td><?= $row['jenis_mobil']; ?></td>
    <td><?= $row['tahun_mobil']; ?></td>
    <td><?= $row['tanggal_pinjam']; ?></td>
    <td><?= $row['tanggal_kembali']; ?></td>
    <td>
        <a href="editcoy.php?id_pinjaman=<?= $row['id_pinjaman'];?>"><input type="button" name="edit" value="EDIT"></a>
        <a href="hapuscoy.php?id_pinjaman=<?= $row['id_pinjaman'];?>"><input type="button" name="hapus" value="HAPUS"></a>
<?php endforeach ?>
</center>
</table><p>
<td><a href="menucoy.php"><input type="button" name="menu" value="MENU"></a></td>
<td><a href="tambahcoy.php"><input type="button" name="tambah" value="TAMBAH"></a></td>
<p>
<center>
<p>ⓢ PERKASA✭ID</p>
</center>
<iframe src="" width="500" height="281" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
<p><a href="https://mizakysan.wordpress.com/"><input type="button" name="web saya" value="WEB SAYA"></a></p>
</body>
</html>

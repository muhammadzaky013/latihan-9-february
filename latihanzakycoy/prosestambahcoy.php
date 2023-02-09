<?php
include("koneksi.php");
if (isset( $_POST['tambah'])) {
    $nama_peminjam = $_POST['nama_peminjam'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $keperluan = $_POST['keperluan'];
    $jaminan = $_POST['jaminan'];
    $plat_nomor = $_POST['plat_nomor'];
    $merek = $_POST['merek'];
    $jenis_mobil = $_POST['jenis_mobil'];
    $tahun_mobil = $_POST['tahun_mobil'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];

$sql = "INSERT INTO tb_mobil(plat_nomor,merek,jenis_mobil,tahun_mobil,tanggal_pinjam,tanggal_kembali)
        VALUES('$plat_nomor','$merek','$jenis_mobil','$tahun_mobil','$tanggal_pinjam','$tanggal_kembali')";
$query = mysqli_query ($db,$sql);

$sql = "SELECT max(id_mobil) AS mobil_id FROM tb_mobil LIMIT 1";
$query = mysqli_query($db,$sql);

$data = mysqli_fetch_array($query);
$mobil_id = $data['mobil_id'];

$sql = "INSERT INTO tb_pinjaman(id_mobil,nama_peminjam,alamat,umur,keperluan,jaminan)
        VALUES('$mobil_id','$nama_peminjam','$alamat','$umur','$keperluan','$jaminan')";
$query = mysqli_query($db,$sql);


if($query){
    header('location:tampilcoy.php?status=sukses');
}else{
    header('location:tampilcoy.php?status=sukses');
}

}
?>
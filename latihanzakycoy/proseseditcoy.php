<?php
include("koneksi.php");
if(isset($_POST['edit'])){
 $id = $_POST['id_pinjaman'];
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

$sql="UPDATE tb_pinjaman SET nama_peminjam='$nama_peminjam', alamat='$alamat',
 umur='$umur', keperluan='$keperluan', jaminan='$jaminan' WHERE id_pinjaman='$id'";
$query= mysqli_query($db,$sql);
$sql="UPDATE tb_mobil SET plat_nomor='$plat_nomor', merek='$merek', jenis_mobil='$jenis_mobil',
 tahun_mobil='$tahun_mobil', tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali' WHERE id_mobil='$id'";
$query= mysqli_query($db,$sql);



 if($query){
    header('location:tampilcoy.php');
}else{
    die('gagal mengedit');
}
}
?>
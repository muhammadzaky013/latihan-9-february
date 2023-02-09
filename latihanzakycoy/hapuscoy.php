<?php
include("koneksi.php");
isset($_GET['hapus']);
$id = $_GET['id_pinjaman'];
$sql= "DELETE FROM tb_mobil where id_mobil=$id";
$query = mysqli_query($db, $sql);
$sql= "DELETE FROM tb_pinjaman where id_pinjaman=$id";
$query = mysqli_query($db, $sql);

if($query){
    header('Location:tampilcoy.php?status=sukses');
}else{

    header('Location:tampilcoy.php?status=sukses');
}
?>
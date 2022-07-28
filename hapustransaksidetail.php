<?php

include('koneksi.php');

//get id
$id = $_GET['id_transaksi_detail'];

$query = "DELETE FROM transaksi_detail WHERE id_transaksi_detail = '$id'";
$sql = mysqli_query($connection,"SELECT id_transaksi FROM detail_transaksi WHERE id_transaksi_detail='$id'");
$fetch = mysqli_fetch_array($sql);
$id_transaksi = $fetch['id_transaksi'];

if($connection->query($query)) {
    header("location: datatransaksidetail.php?id-transaksi=$id_transaksi");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
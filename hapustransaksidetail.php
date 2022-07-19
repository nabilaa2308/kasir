<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM transaksi_detail WHERE id_transaksi_detail = '$id'";

if($connection->query($query)) {
    header("location: datatransaksidetail.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
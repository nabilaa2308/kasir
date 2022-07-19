<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM metode_pembayaran WHERE id_metode_pembayaran = '$id'";

if($connection->query($query)) {
    header("location: datametodebayar.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
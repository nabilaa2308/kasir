<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM supplier WHERE id_supplier = '$id'";

if($connection->query($query)) {
    header("location: datasupplier.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
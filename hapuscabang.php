<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM cabang WHERE id_cabang = '$id'";

if($connection->query($query)) {
    header("location: datacabang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
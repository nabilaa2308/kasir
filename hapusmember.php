<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM member WHERE id_member = '$id'";

if($connection->query($query)) {
    header("location: datamember.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
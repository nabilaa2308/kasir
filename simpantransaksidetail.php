<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_transaksi_detail     = $_POST['id_transaksi_detail'];
$id_transaksi     = $_POST['id_transaksi'];
$id_barang   = $_POST['id_barang'];
$jumlah      = $_POST['jumlah'];
$harga_jual          = $_POST['harga_jual'];
$total_harga  = $_POST['total_harga'];


//query insert data ke dalam database
$query = "INSERT INTO transaksi_detail (id_transaksi_detail, id_transaksi id_barang, jumlah, harga_jual, total_harga) VALUES ('$id_transaksi_detail', '$id_transaksi '$id_barang', '$jumlah', '$harga_jual', '$total_harga')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman datatransaksidetail.php 
    header("location: datatransaksidetail.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
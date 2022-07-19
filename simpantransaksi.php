<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_transaksi     = $_POST['id_transaksi'];
$kode_inv   = $_POST['kode_inv'];
$waktu_transaksi      = $_POST['waktu_transaksi'];
$id_kasir          = $_POST['id_kasir'];
$id_member  = $_POST['id_member'];
$nama_pembeli  = $_POST['nama_pembeli'];
$id_metode_pembayaran  = $_POST['id_metode_pembayaran'];
$total_bayar  = $_POST['total_bayar'];
$ppn  = $_POST['ppn'];
$diskon  = $_POST['diskon'];


//query insert data ke dalam database
$query = "INSERT INTO transaksi (id_transaksi, kode_inv, waktu_transaksi, id_kasir, id_member, nama_pembeli, id_metode_pembayaran, total_bayar, ppn, diskon) VALUES ('$id_transaksi', '$kode_inv', '$waktu_transaksi', '$id_kasir', '$id_member', '$nama_pembeli', '$id_metode_pembayaran', '$total_bayar', '$ppn', '$diskon')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman datatransaksi.php 
    header("location: datatransaksi.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
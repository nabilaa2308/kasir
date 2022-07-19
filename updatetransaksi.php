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

//query update data ke dalam database berdasarkan ID
$query = "UPDATE transaksi SET kode_inv ='$kode_inv', waktu_transaksi = '$waktu_transaksi', id_kasir = '$id_kasir', id_member = '$id_member' nama_pembeli = '$nama_pembeli', id_metode_pembayaran = '$id_metode_pembayaran', total_bayar = '$total_bayar', ppn = '$ppn', diskon = '$diskon' WHERE id_transaksi = '$id_transaksi'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman datatransaksi.php 
    header("location: datatransaksi.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
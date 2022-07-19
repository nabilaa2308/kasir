<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_barang     = $_POST['id_barang'];
$nama_barang   = $_POST['nama_barang'];
$id_kategori   = $_POST['id_kategori'];
$id_supplier   = $_POST['id_supplier'];
$stok          = $_POST['stok'];
$harga_modal   = $_POST['harga_modal'];
$harga_jual    = $_POST['harga_jual'];

$tanggal_masuk = $_POST['tanggal_masuk'];

//query insert data ke dalam database
$query = "INSERT INTO barang (id_barang, nama_barang, id_kategori, id_supplier, stok, harga_modal, harga_jual, tanggal_masuk) VALUES ('$id_barang', '$nama_barang', '$id_ketegori', '$id_supplier', '$stok', '$harga_modal', '$harga_jual', '$tanggal_masuk')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman databarang.php 
    header("location: databarang.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
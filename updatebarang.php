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


//query update data ke dalam database berdasarkan ID
$query = "UPDATE barang SET nama_barang='$nama_barang', id_kategori='$id_kategori', id_supplier='$id_supplier', stok='$stok', harga_modal='$harga_modal', harga_jual='$harga_jual', tanggal_masuk='$tanggal_masuk' WHERE id_barang='$id_barang'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman databarang.php 
    header("location: databarang.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
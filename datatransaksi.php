<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<title>Data Transaksi</title>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-light">PENJUALAN</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-3 mb-lg-2">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="databarang.php">BARANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datakategori.php">KATEGORI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datasupplier.php">SUPPLIER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datametodebayar.php">METODE PEMBAYARAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datacabang.php">CABANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dataperusahaan.php">PERUSAHAAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datakasir.php">KASIR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datamember.php">MEMBER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datatransaksi.php">TRANSAKSI</a>
        </li>
      </form>
    </div>
  </div>
</nav>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA TRANSAKSI
            </div>
            <div class="card-body">
              <a href="tambahtransaksi.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">KODE INV</th>
                    <th scope="col">NAMA KASIR</th>
                    <th scope="col">NAMA MEMBER</th>
                    <th scope="col">METODE PEMBAYARAN</th>
                    <th scope="col">WAKTU TRANSAKSI</th>
                    <th scope="col">PPN%</th>
                    <th scope="col">DISKON%</th>
                    <th scope="col">TOTAL BAYAR</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      include('librupiah.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT *, DATE_FORMAT(waktu_transaksi, '%W, %d/%m/%Y %H:%i') as waktu FROM transaksi 
                      INNER JOIN kasir ON kasir.id_kasir=transaksi.id_kasir INNER JOIN member ON member.id_member=transaksi.id_member 
                      INNER JOIN metode_pembayaran ON metode_pembayaran.id_metode_pembayaran=transaksi.id_metode_pembayaran");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['kode_inv'] ?></td>
                      <td><?php echo $row['nama_kasir'] ?></td>
                      <td><?php echo $row['nama_member'] ?></td>
                      <td><?php echo $row['nama_metode'] ?></td>
                      <td><?php echo $row['waktu'] ?></td>
                      <td><?php echo $row['ppn'] ?></td>
                      <td><?php echo $row['diskon'] ?></td>                
                      <td><?php echo rupiah3($row['total_bayar']) ?></td>
                      <td class="text-center">
                        <a href="edittransaksi.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapustransaksi.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                        <a href="datatransaksidetail.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-info">DETAIL</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<title>Data Transaksi Detail</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA TRANSAKSI DETAIL
            </div>
            <div class="card-body">
              <a href="tambahtransaksi.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">KODE INV</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">JUMLAH</th>
                    <th scope="col">HARGA JUAL</th>
                    <th scope="col">TOTAL HARGA</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM transaksi_detail INNER JOIN transaksi ON transaksi.id_transaksi=transaksi_detail.id_transaksi INNER JOIN barang ON barang.id_barang=transaksi_detail.id_barang");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['kode_inv'] ?></td>
                      <td><?php echo $row['nama_barang'] ?></td>
                      <td><?php echo $row['jumlah'] ?></td>
                      <td>Rp<?php echo $row['harga_jual'] ?></td>
                      <td>Rp<?php echo $row['total_harga'] ?></td>
                      <td class="text-center">
                        <a href="edittransaksidetail.php?id=<?php echo $row['id_transaksi_detail'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapustransaksidetail.php?id=<?php echo $row['id_transaksi_detail'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
              <a href="datatransaksi.php" class="btn btn-md btn-dark" style="margin-bottom: 10px">BACK</a>
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
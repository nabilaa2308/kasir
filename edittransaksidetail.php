<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM transaksi_detail WHERE id_transaksi_detail = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="updatetransaksidetail.php" method="POST">
                
                <div class="form-group">
                  <label>ID Transaksi Detail</label>
                  <input type="text" name="id_transaksi_detail" value="<?php echo $row['id_transaksi_detail'] ?>" placeholder="Masukkan ID Transaksi" class="form-control”>
                  <input type="hidden" name="id_transaksi_detail" value="<?php echo $row['id_transaksi_detail'] ?>">
                </div>

                <div class="form-group">
                  <label></label>
                  <input type="text" name="kode_inv" value="<?php echo $row['kode_inv'] ?>" placeholder="Masukkan Kode Inv" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>waktu Transaksi</label>
                  <input type="time" name="waktu_transaksi" value="<?php echo $row['waktu_transaksi'] ?>" placeholder="Masukkan Waktu Transaksi" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>ID Kasir</label>
                  <input type="text" name="id_kasir" value="<?php echo $row['id_kasir'] ?>" placeholder="Masukkan ID Kasir" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Member</label>
                  <input type="text" name="id_member" value="<?php echo $row['id_member'] ?>" placeholder="Masukkan ID Member" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Pembeli</label>
                  <input type="text" name="nama_pembeli" value="<?php echo $row['nama_pembeli'] ?>" placeholder="Masukkan Nama Pembeli" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Metode Pembayaran</label>
                  <input type="text" name="id_metode_pembayaran" value="<?php echo $row['id_metode_pembayaran'] ?>" placeholder="Masukkan ID Metode Pembayaran" class="form-control">
                </div>

                <div class="form-group">
                  <label>Total Bayar</label>
                  <input type="text" name="total_bayar" value="<?php echo $row['total_bayar'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>PPN</label>
                  <input type="text" name="ppn" value="<?php echo $row['ppn'] ?>" placeholder="Masukkan PPN" class="form-control">
                </div>

                <div class="form-group">
                  <label>Diskon</label>
                  <input type="text" name="diskon" value="<?php echo $row['diskon'] ?>" placeholder="Masukkan Diskon" class="form-control">
                </div>

                
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
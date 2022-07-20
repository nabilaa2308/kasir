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
    <title>Edit Transaksi Detail </title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI DETAIL
            </div>
            <div class="card-body">
              <form action="updatetransaksidetail.php" method="POST">
                
                <div class="form-group">
                  <label>ID Transaksi Detail</label>
                  <input type="text" name="id_transaksi_detail" value="<?php echo $row['id_transaksi_detail'] ?>" placeholder="Masukkan ID Transaksi Detail" class="form-control”>
                  <input type="hidden" name="id_transaksi_detail" value="<?php echo $row['id_transaksi_detail'] ?>">
                </div>

                <div class="form-group">
                  <label>ID Transaksi</label>
                  <input type="text" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>" placeholder="Masukkan ID Transaksi" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>ID Barang</label>
                  <input type="text" name="id_barang" value="<?php echo $row['id_barang'] ?>" placeholder="Masukkan ID Barang" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" value="<?php echo $row['jumlah'] ?>" placeholder="Masukkan Jumlah" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" name="harga_jual" value="<?php echo $row['harga_jual'] ?>" placeholder="Masukkan Harga Jual" class="form-control">
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
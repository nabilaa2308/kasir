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
                <input type="hidden" name="id_transaksi_detail" value="<?php echo $row['id_transaksi_detail'] ?>" placeholder="Masukkan ID Transaksi Detail" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Kode INV</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM transaksi";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_transaksi" class="form-control">
                    <?php while($row1=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row1['id_transaksi']?>"><?php echo $row1['id_transaksi'].$a.$row1['kode_inv'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Barang</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM barang";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_barang" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_barang']?>"><?php echo $row2['id_barang'].$a.$row2['nama_barang'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" value="<?php echo $row['jumlah'] ?>" placeholder="Masukkan Jumlah" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <?php
                    include 'koneksi.php';
                  $sql= "SELECT * FROM barang";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_barang" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_barang']?>"><?php echo $row2['id_barang'].$a.$row2['harga_jual'];?></option>
                    <?php } ?>
                  </select>
                </div>

         
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="datatransaksidetail.php" class="btn btn-md btn-dark">BACK</a>

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
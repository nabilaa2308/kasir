<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM transaksi WHERE id_transaksi =$id";

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
              <form action="updatetransaksi.php" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kode INV</label>
                  <input type="text" name="kode_inv" value="<?php echo $row['kode_inv'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Kasir</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM kasir ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_kasir" class="form-control">
                    <?php while($row3=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row3['id_kasir']?>"><?php echo $row3['id_kasir'].$a.$row3['nama_kasir'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Member</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM member";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_member" class="form-control">
                    <?php while($row1=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row1['id_member']?>"><?php echo $row1['id_member'].$a.$row1['nama_member'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM metode_pembayaran";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_metode_pembayaran" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_metode_pembayaran']?>"><?php echo $row2['id_metode_pembayaran'].$a.$row2['nama_metode'];?></option>
                    <?php } ?>
                  </select>
                </div>


                <div class="form-group">
                  <input type="hidden" name="nama_pembeli" value="<?php echo $row['nama_pembeli'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>PPN%</label>
                  <input type="text" name="ppn" value="<?php echo $row['ppn'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Diskon%</label>
                  <input type="text" name="diskon" value="<?php echo $row['diskon'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Total Bayar</label>
                  <input type="float" name="total_bayar" value="<?php echo $row['total_bayar'] ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="datatransaksi.php" class="btn btn-md btn-dark">BACK</a>

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
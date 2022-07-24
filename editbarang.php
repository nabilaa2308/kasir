<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM barang WHERE id_barang =$id ";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Barang</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT BARANG
            </div>
            <div class="card-body">
              <form action="updatebarang.php" method="POST">
                
                <div class="form-group">
                  <input type="hidden" name="id_barang" value="<?php echo $row['id_barang'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>ID Kategori</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM kategori";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_kategori" class="form-control">
                    <?php while($row1=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row1['id_kategori']?>"><?php echo $row1['id_kategori'].$a.$row1['nama_kategori'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>ID Supplier</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM supplier";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_supplier" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_supplier']?>"><?php echo $row2['id_supplier'].$a.$row2['nama_supplier'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" name="stok" value="<?php echo $row['stok'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Harga Modal</label>
                  <input type="text" name="harga_modal" value="<?php echo $row['harga_modal'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" name="harga_jual" value="<?php echo $row['harga_jual'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk'] ?>" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="databarang.php" class="btn btn-md btn-dark" style="margin-bottom: 10px">BACK</a>

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
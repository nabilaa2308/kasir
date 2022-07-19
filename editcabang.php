<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM cabang WHERE id_cabang = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Cabang</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT CABANG
            </div>
            <div class="card-body">
              <form action="updatecabang.php" method="POST">
                
                <div class="form-group">
                  <label>ID Cabang</label>
                  <input type="text" name="id_cabang" value="<?php echo $row['id_cabang'] ?>" placeholder="Masukkan ID Cabang" class="form-control”>
                  <input type="hidden" name="id_cabang" value="<?php echo $row['id_cabang'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Cabang</label>
                  <input type="text" name="nama_cabang" value="<?php echo $row['nama_cabang'] ?>" placeholder="Masukkan Nama Cabang" class="form-control">
                </div>  
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Cabang" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" value="<?php echo $row['nomor_telp'] ?>" placeholder="Masukkan Nomor Telpon Cabang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Email Cabang" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Perusahaan</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM perusahaan ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_perusahaan" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_perusahaan']?>"><?php echo $row['id_perusahaan'].$a.$row['nama_perusahaan'];?></option>
                    <?php } ?>
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
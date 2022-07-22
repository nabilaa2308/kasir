<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Data Kasir</title>
  </head>

  <body>
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              DATA KASIR
            </div>
            <div class="card-body">
              <form action="simpankasir.php" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_kasir" placeholder="Masukkan ID Kasir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Kasir</label>
                  <input type="text" name="nama_kasir" placeholder="Masukkan Nama Kasir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Kasir" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name=jenis_kelamin class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>


                <div class="form-group">
                  <label>Cabang</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM cabang ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_cabang" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_cabang']?>"><?php echo $row['id_cabang'].$a.$row['nama_cabang'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
  </body>
</html>
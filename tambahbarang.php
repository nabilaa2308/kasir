<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Barang</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH BARANG
            </div>
            <div class="card-body">
              <form action="simpanbarang.php" method="POST">

              <div class="form-group">
                  <input type="hidden" name="id_barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM kategori ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_kategori" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_kategori']?>"><?php echo $row['id_kategori'].$a.$row['nama_kategori'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Supplier</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM supplier ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_supplier" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_supplier']?>"><?php echo $row['id_supplier'].$a.$row['nama_supplier'];?></option>
                    <?php } ?>
                  </select>
                  </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" name="stok" placeholder="Masukkan Stok Barang" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Harga Modal</label>
                  <input type="text" name="harga_modal" placeholder="Masukkan Harga Modal Barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" name="harga_jual" placeholder="Masukkan Harga Jual Barang" class="form-control">
                </div>
                      
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" name="tanggal_masuk" placeholder="Masukkan Tanggal Masuk Barang" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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
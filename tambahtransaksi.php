<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI
            </div>
            <div class="card-body">
              <form action="simpantransaksi.php" method="POST">    

                <div class="form-group">
                  <label>Kode Inv</label>
                  <input type="text" name="kode_inv" placeholder="Masukkan Kode Inv" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Kasir</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM kasir";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_kasir" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_kasir']?>"><?php echo $row['id_kasir'].$a.$row['nama_kasir'];?></option>
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
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_metode_pembayaran']?>"><?php echo $row['id_metode_pembayaran'].$a.$row['nama_metode'];?></option>
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
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_member']?>"><?php echo $row['id_member'].$a.$row['nama_member'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <input type="hidden" name="nama_pembeli" placeholder="Masukkan Nama Pembeli" class="form-control">
                </div>

                <div class="form-group">
                  <label>PPN%</label>
                  <input type="number" name="ppn" placeholder="Masukkan PPN" class="form-control">
                </div>

                <div class="form-group">
                  <label>Diskon%</label>
                  <input type="number" name="diskon" placeholder="Masukkan Diskon" class="form-control">
                </div>

                <div class="form-group">
                  <label>Total Bayar</label>
                  <input type="number" name="total_bayar" placeholder="Masukkan Total Bayar" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="datatransaksi.php" class="btn btn-md btn-dark" style="margin-bottom: 10px">BACK</a>

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
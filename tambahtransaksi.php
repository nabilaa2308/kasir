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
                  <label>ID Transaksi</label>
                  <input type="text" name="id_transaksi" placeholder="Masukkan ID Transaksi" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kode Inv</label>
                  <input type="text" name="kode_inv" placeholder="Masukkan Kode Inv" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>ID Kasir</label>
                  <input type="text" name="id_kasir" placeholder="Masukkan ID Kasir" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Metode Pembayaran</label>
                  <input type="text" name="id_metode_pembayaran" placeholder="Masukkan ID Metode Pembayaran" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>ID Member</label>
                  <input type="text" name="id_member" placeholder="Masukkan ID Member" class="form-control">
                </div>

                <div class="form-group">
                  <label>Waktu Transaksi</label>
                  <input type="time" name="waktu_transaksi" placeholder="Masukkan Waktu Transaksi" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Pembeli</label>
                  <input type="text" name="nama_pembeli" placeholder="Masukkan Nama Pembeli" class="form-control">
                </div>

                

                <div class="form-group">
                  <label>Total Bayar</label>
                  <input type="text" name="total_bayar" placeholder="Masukkan Total Bayar" class="form-control">
                </div>

                <div class="form-group">
                  <label>PPN</label>
                  <input type="text" name="ppn" placeholder="Masukkan PPN" class="form-control">
                </div>

                <div class="form-group">
                  <label>Diskon</label>
                  <input type="text" name="diskon" placeholder="Masukkan Diskon" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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
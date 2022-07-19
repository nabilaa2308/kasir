<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Transaksi Detail</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI DETAIL
            </div>
            <div class="card-body">
              <form action="simpantransaksidetail.php" method="POST">
                <div class="form-group">
                  <label>ID Transaksi Detail</label>
                  <input type="text" name="id_transaksi_detail" placeholder="Masukkan ID Transaksi Detail" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Transaksi</label>
                  <input type="text" name="id_transaksi" placeholder="Masukkan ID Transaksi" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Barang</label>
                  <input type="text" name="id_barang" placeholder="Masukkan ID Barang" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" name="harga_jual" placeholder="Masukkan Harga Jual" class="form-control">
                </div> 

                <div class="form-group">
                  <label>Total Harga</label>
                  <input type="text" name="total_harga" placeholder="Masukkan Total Harga" class="form-control">
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
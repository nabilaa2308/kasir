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
                  <input type="hidden" name="id_transaksi_detail" placeholder="Masukkan ID Transaksi Detail" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kode INV</label>
                  <?php
                    include 'koneksi.php';
                  $sql= " SELECT * FROM transaksi ";
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
                  $sql= " SELECT * FROM barang ";
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
                  <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <?php
                    include 'koneksi.php';
                  $sql= "SELECT * FROM barang";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select id="harga_jual" name="id_barang" class="form-control">
                    <?php while($row3=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row3['id_barang']?>"><?php echo $row3['id_barang'].$a.$row3['harga_jual'];?></option>
                    <?php } ?>
                  </select>                
                </div> 

                <script type="text/javascript">
		
		var rupiah = document.getElementById('harga_jual');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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
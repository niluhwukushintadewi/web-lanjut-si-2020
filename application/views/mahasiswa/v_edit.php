

<div class="alert alert-info" role="alert">
  <center><b>Tambah Data Mahasiswa</b></center>
</div>
<div class="card">
  <div class="card-body">
   Edit Data Mahasiswa
    <br>
  </div>
<div class="row">
	<div class="col-m-6">
		<form action="<?= site_url('mahasiswa/update')?>" method="post">
			<div class="from-group">
				<label>NIM</label>
				<input type="text" readonly value="<?=$data_nim->nim?>" name="nim" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Nama Mahasiswa</label>
				<input type="text" value="<?=$data_nim->nama?>"  name="nama" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea type="text" name="alamat" class="form-control">
					<?=$data_nim->alamat?>
				</textarea>
				
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">
					Simpan Data
				</button>

<a href="<?= site_url('mahasiswa/index')?>" class="btn btn-warning">Batal</a>

			</div>
		</form>
	</div> 
	
</div>
	
</div>
</body>
</html>
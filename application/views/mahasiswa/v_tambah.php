
<div class="alert alert-info" role="alert">
  <center><b>Tambah Data Mahasiswa</b></center>
</div>
<div class="card">
  <div class="card-body">
   Tambah Data Mahasiswa
    <br>
  </div>
<div class="row">
	<div class="col-m-6">
		<form action="<?= site_url('mahasiswa/simpan_data')?>" method="post">
			<div class="from-group">
				<label>NIM</label>
				<input type="text" name="nim" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Nama Mahasiswa</label>
				<input type="text" name="nama" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea type="text" name="alamat"></textarea>
				
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">
					Simpan Data
				</button>
			</div>
		</form>
	</div> 
	
</div>
	
</div>
</body>
</html>
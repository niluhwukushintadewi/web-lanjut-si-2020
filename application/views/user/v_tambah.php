
<div class="alert alert-info" role="alert">
  <center><b>Tambah Data Pengguna</b></center>
</div>
<div class="card">
  <div class="card-body">
   Tambah Data Pengguna
    <br>
  </div>
<div class="row">
	<div class="col-m-6">
		<form action="<?= site_url('pengguna/simpan_data')?>" method="post">
			<div class="from-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Nama Lengkap</label>
				<textarea type="text" name="nama_lengkap"></textarea>
				
			</div>
			<div class="form-group">
				<label>Hak Akses</label>
				<input type="text" name="hak_akses" class="form-control">
				
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
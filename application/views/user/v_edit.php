<div class="alert alert-info" role="alert">
  <center><b>Tambah Data Pengguna</b></center>
</div>
<div class="card">
  <div class="card-body">
   Edit Data Pengguna
    <br>
  </div>
<div class="row">
	<div class="col-m-6">
		<form action="<?= site_url('pengguna/simpan_edit')?>" method="post">
			<div class="from-group">
				<label>Username</label>
				<input type="text" readonly value="<?=$data_user->username?>" name="username" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" value="<?=$data_user->password?>"  name="password" class="form-control">
				
			</div>
			<div class="form-group">
				<label>Nama Lengkap</label>
				<textarea type="text" name="nama_lengkap" class="form-control">
					<?=$data_user->nama_lengkap?>
				</textarea>

			<div class="form-group">
				<label>Hak Akses</label>
				<input type="text" value="<?=$data_user->hak_akses?>"  name="hak_akses" class="form-control">
				
			</div>
				
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">
					Simpan Data
				</button>

<a href="<?= site_url('Pengguna/index')?>" class="btn btn-warning">Batal</a>

			</div>
		</form>
	</div> 
	
</div>
	
</div>
</body>
</html>
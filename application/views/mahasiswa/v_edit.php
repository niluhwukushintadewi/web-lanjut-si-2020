<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" 
	      href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>

<body>
		<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('mahasiswa/index')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tambah Data</a>
      </li>
    </ul>
    <span class="navbar-text">
      Ni Luh Wuku Shinta Dewi
    </span>
  </div>
</nav>

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
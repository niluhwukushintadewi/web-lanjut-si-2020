<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" 
	      href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>
<body>
	<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Tambah Data</a>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1" href="<?= site_url('Acontroller/index')?>">Beranda</span>
</nav>

<div class = "container">
  <div class="row">
	<div class="col-m-6">
		<form action="<?= site_url('Acontroller/input')?>" method="post">
			<div class="from-group">
				<label>id_010</label>
				<input type="text" name="id_010" class="form-control">
				
			</div>
			<div class="form-group">
				<label>merek</label>
				<input type="text" name="merek" class="form-control">
				
			</div>
			<div class="form-group">
				<label>jenis</label>
				<textarea type="text" name="jenis"></textarea>
				
			</div>
			<div class="form-group">
				<label>stok</label>
				<textarea type="text" name="stok"></textarea>
				
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
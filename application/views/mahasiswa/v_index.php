<!DOCTYPE html>
<html>
<head>
	<title>
		Data mahasiswa
	</title>
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
       
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('mahasiswa/tambah')?>"tabindex="-1">Tambah Data</a>
      </li>
    </ul>
    <span class="navbar-text">
      Ni Luh Wuku Shinta Dewi
    </span>
  </div>
</nav>

<div class="alert alert-info" role="alert">
  <center><b>Ni Luh Wuku Shinta Dewi / 1901050010</b></center>
</div>
<div class="card">
  <div class="card-body">
    Data Mahasiswa
    <br>
  </div>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php $no = 1; ?>
    <?php foreach ($tbl_mahasiswa as $key) {?>
      
    <tr>
      <td class="text-center"><?=$no++?></td>
      <td><?=$key->nim?></td>
      <td><?=$key->nama?></td>
      <td><?=$key->alamat?></td>
      <td class="text-center">

      
      <a href="<?=site_url('mahasiswa/hapus/' . $key->nim)?>"
         onclick="return confirm('Yakin ?')" 
        class="btn btn-danger btn-sm">Delete</a>

         <a href="<?=site_url('mahasiswa/Edit/' . $key->nim)?>"
        class="btn btn-info btn-sm">Edit</a>
      

      </td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>
</div>
</div>
</body>
</html>
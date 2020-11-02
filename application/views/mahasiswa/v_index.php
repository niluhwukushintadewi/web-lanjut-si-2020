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
        <a class="nav-link" href="#">Tambah Data</a>
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
      <th scope="col">NAma</th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>pahrul</td>
      <td>20020123992</td>
      <td>Mataram</td>
      <td><button type="button" class="btn btn-warning">Edit</button> 
     <button type="button" class="btn btn-danger">Delete</button> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Irfan</td>
      <td>200020123929</td>
      <td>Mataram Lagi</td>
       <td><button type="button" class="btn btn-warning">Edit</button> 
     <button type="button" class="btn btn-danger">Delete</button> </td>
    </tr>
   
  </tbody>
</table>
</div>
</div>
</body>
</html>
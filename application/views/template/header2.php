<!DOCTYPE html>
<html>
<head>
	<title>
		Data mahasiswa
	</title>
	<link rel="stylesheet" 
	      href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
        <a class="nav-link" href="<?= site_url('Pengguna/tambah')?>"tabindex="-1">Tambah Pengguna</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= site_url('Login/logout')?>"tabindex="-1">Logout</a>
      </li>
          </ul>
    <span class="navbar-text">
      <a href="#" class="nav-link"><?php echo $this->session->userdata('nama_pengguna');?></a>
    </span>
  </div>
</nav>
<!DOCTYPE html>
<html>
<head>
	<title>Data Olshop</title>
	<link rel="stylesheet" 
	      href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>
<body>
	
   <!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?= site_url('Acontroller/tambah')?>">Tambah Data</a>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Beranda</span>
</nav>
  <div class="alert alert-info" role="alert">
  <center><b>Data Olshop</b></center>
</div>
 <table class="table table-bordered">s
  <thead>
    <tr>
      <th scope="col">id_010</th>
      <th scope="col">merek</th>
      <th scope="col">jenis</th>
      <th scope="col">stok</th>
    </tr>
  </thead>
  <tbody>

    <?php $no = 1; ?>
    <?php foreach ($tabel_a as $key) {?>
      
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $key->merek; ?></td>
      <td><?php echo $key->jenis; ?></td>
      <td><?php echo $key->stok; ?></td>
 
    </tr>
  <?php } ?>
   
  </tbody>
</table>
</div>
</div>s
</body>
</html>
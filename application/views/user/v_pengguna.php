

<div class="alert alert-info" role="alert">
</div>
<div class="card">
  <div class="card-body">
    Data Pengguna
    <br>
  </div>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Hak akses</th>
       <th scope="col">Aksi</th>


    </tr>
  </thead>
  <tbody>

   <?php $no = 1; ?>
    <?php foreach ($tbl_pengguna as $key) {?>
      
    <tr>
      <th scope="row"> <?=$no++?> </th>
      <td> <?= $key->username?> </td>
      <td> <?= $key->password?> </td>
      <td> <?= $key->nama_lengkap?> </td>
      <td> <?= $key->hak_akses?> </td>

      <td class="text-center">

   <?php if ($this->session->userdata('hak_pengguna') == 'admin') { ?>

      
      <a href="<?=site_url('Pengguna/hapus/' . $key->username)?>"
         onclick="return confirm('Yakin ?')" 
        class="btn btn-danger btn-sm">Delete</a>

         <a href="<?=site_url('Pengguna/Edit/' . $key->username)?>"
        class="btn btn-info btn-sm">Edit</a>

      <?php } ?>
      

      </td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>
</div>
<script src="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('.table').DataTable();
    });
</script>
</div>
</body>
</html>
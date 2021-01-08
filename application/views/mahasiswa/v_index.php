

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

        <?php if ($this->session->userdata('hak_pengguna') == 'admin') { ?>

      
      <a href="<?=site_url('mahasiswa/hapus/' . $key->nim)?>"
         onclick="return confirm('Yakin ?')" 
        class="btn btn-danger btn-sm">Delete</a>

         <a href="<?=site_url('mahasiswa/Edit/' . $key->nim)?>"
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
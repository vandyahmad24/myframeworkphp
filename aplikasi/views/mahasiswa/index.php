<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="row">
				<div class="col-lg-6">
					<?php Notifikasi::flash() ?>	
				</div>
			</div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMahasiswa">
				  Tambah Mahasiswa
				</button>
			<h3>Daftar Mahasiswa</h3>
				<ul class="list-group">
					<?php foreach ($data["mhs"] as $mhs ) : ?>
				  <li class="list-group-item"><?= $mhs['nama']; ?> 
				  	<a href="<?= BASE_URL; ?>/mahasiswa/delete/<?= $mhs['id']; ?>" onclick="return confirm('Apakah Anda Yakin?');" class="badge badge-danger float-right ml-2">Delete</a>
				  	<a href="<?= BASE_URL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"  class="badge badge-primary float-right ">Detail</a>
				  	
				  </li>
				  	<?php endforeach; ?>
				</ul>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL ?>/mahasiswa/tambah" method="post">
		  <div class="form-group">
		    <label for="nama_mahasiswa">Nama Mahasiswa</label>
		    <input type="text" class="form-control" id="nama_mahasiswa" name="nama" aria-describedby="nama_mahasiswa">
		  </div>
		   <div class="form-group">
		    <label for="nim_mahasiswa">NIM Mahasiswa</label>
		    <input type="number" class="form-control" id="nim_mahasiswa" name="nim" aria-describedby="nim_mahasiswa">
		  </div>
		   <div class="form-group">
		    <label for="email">Email Mahasiswa</label>
		    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
		  </div>
		  <div class="form-group">
		    <label for="alamat">alamat Mahasiswa</label>
		    <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamat">
		  </div>
		  <div class="form-group">
		    <label for="jurusan">Jurusan Mahasiswa</label>
		    <select class="form-control" id="jurusan" name="jurusan">
		      <option value="TI">TI</option>
		      <option value="TKJ">TKJ</option>
		      <option value="MM">MM</option>
		      <option value="RPL">RPL</option>
		    </select>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Tambah Data</button>
		</form>
      </div>
     
    </div>
  </div>
</div>
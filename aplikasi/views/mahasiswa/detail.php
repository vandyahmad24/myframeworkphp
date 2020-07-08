<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
			    <p class="card-text"><?= $data['mhs']['alamat']; ?>, NIM : <?= $data['mhs']['nim']; ?></p>
			    <a href="<?= BASE_URL; ?>/mahasiswa" class="btn btn-primary">Kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>
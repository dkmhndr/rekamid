				<div><h3>Daftar Kamera</h3></div>
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('kamera/add') ?>"><i class="fas fa-plus"></i>Tambah Kamera</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Merk</th>
										<th>Tipe</th>
										<th>Harga Sewa</th>
										<th>Status</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($kamera as $daftar):?>
									<tr>
										<td width="150">
											<?php echo $daftar->merk ?>
										</td>
										<td>
											<?php echo $daftar->tipe ?>
										</td>
										<td>
											<?php echo $daftar->harga ?>
										</td>
										<td>
										   <?php echo $daftar->status ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/product/'.$daftar->gambar) ?>" width="64" />
										</td>
										<td width="250">
											<a href="<?php echo site_url('kamera/edit/'.$daftar->id_kamera) ?>"
											 class="btn btn-info btn-icon-split"><i class="fas fa-edit"></i>Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('kamera/delete/'.$daftar->id_kamera) ?>')"
											 href="#!" class="btn btn-danger btn-icon-split"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
                <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

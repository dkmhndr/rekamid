				<div><h3>Penyewaan</h3></div>
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('penyewaan/add') ?>"><i class="fas fa-plus"></i> Tambah Transaksi  | </a>
						<a href="<?php echo site_url('laporan') ?>"><i class="fas fa-print"></i> Cetak Laporan</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Merk</th>
										<th>Tipe</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>No HP</th>
										<th>Tanggal Sewa</th>
										<th>Tanggal Kembali</th>
										<th>Status</th>
										<th>Pendapatan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($sewa as $daftar):?>
									<tr>
										<td>
											<?php echo $daftar->merk ?>
										</td>
										<td>
											<?php echo $daftar->tipe ?>
										</td>
										<td>
											<?php echo $daftar->namaklien ?>
										</td>
										<td>
											<?php echo $daftar->alamatklien ?>
										</td>
										<td>
											<?php echo $daftar->nohpklien ?>
										</td>
										<td>
											<?php echo $daftar->tglsewa ?>
										</td>
										<td>
											<?php echo $daftar->tglkembali ?>
										</td>
										<td>
											<?php echo $daftar->status ?>
										</td>
										<td>
											<?php echo 'Rp '.number_format($daftar->pendapatan, 0, ".", ".") ?>
										</td>
										<td>
											<?php if($daftar->status !== "Selesai"){?>
											<a href="<?php echo site_url('penyewaan/edit/'.$daftar->id_sewa) ?>"
											 class="btn btn-info btn-icon-split"><i class="fas fa-edit"></i></a>
											<a href="http://wa.me/<?= $daftar->nohpklien; ?>" target="_blank"
											 class="btn btn-info btn-icon-split"><i class="fas fa-comment"></i></a>
											<a onclick="deleteConfirm('<?php echo site_url('penyewaan/delete/'.$daftar->id_sewa) ?>')"
											 href="#!" class="btn btn-success btn-icon-split"><i class="fas fa-check"></i></a>
											<?php }?>
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
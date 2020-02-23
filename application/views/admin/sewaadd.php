							<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
            	<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('penyewaan') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('penyewaan/add') ?>" method="post" >
							<div class="form-group">
                    			<label>Pilih Kamera*</label>
                    			<select class="form-control" name="kamera" id="kamera" required>
                        		<?php foreach($kamera as $row):?>
                        		<option value="<?php echo $row->id_kamera;?>"><?php echo $row->merk;?> <?php echo $row->tipe;?></option>
                    			<?php endforeach;?>
								</select>
                  				</div>
							<input id="tglsewa" name="tglsewa" type="hidden" value="<?= date("Y-m-d"); ?>">

							<div class="form-group">
								<label for="tglkembali">Tanggal Kembali*</label>
			                    <input type="text" id="tglkembali" data-format="YYYY-MM-DD" data-template="YYYY MM DD" name="tglkembali" value="<?= date("Y-m-d"); ?>" required>
								</div>


							<div class="form-group">
								<label for="namaklien">Nama Penyewa*</label>
								<input class="form-control <?php echo form_error('namaklien') ? 'is-invalid':'' ?>"
								 type="text" name="namaklien" placeholder="Nama Penyewa" id="namaklien" />
								<div class="invalid-feedback">
									<?php echo form_error('namaklien') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamatklien">Alamat Penyewa*</label>
								<input class="form-control <?php echo form_error('alamatklien') ? 'is-invalid':'' ?>"
								 type="text" name="alamatklien" placeholder="Alamat Penyewa" id="alamatklien"/>
								<div class="invalid-feedback">
									<?php echo form_error('alamatklien') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nohpklien">No HP Penyewa* (format: 628xxxxxxxxxx)</label>
								<input class="form-control <?php echo form_error('nohpklien') ? 'is-invalid':'' ?>"
								 type="tel" name="nohpklien" min="0" placeholder="No HP Penyewa" id="nohpklien"/>
								<div class="invalid-feedback">
									<?php echo form_error('nohpklien') ?>
								</div>
							</div>

							

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>

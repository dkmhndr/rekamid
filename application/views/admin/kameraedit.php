
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('kamera') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" kamera/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $kamera->id_kamera?>" />

							<div class="form-group">
								<label for="merk">Merk*</label>
								<input class="form-control <?php echo form_error('merk') ? 'is-invalid':'' ?>"
								 type="text" name="merk" placeholder="Merk kamera" value="<?php echo $kamera->merk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('merk') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tipe">Tipe*</label>
								<input class="form-control <?php echo form_error('tipe') ? 'is-invalid':'' ?>"
								 type="text" name="tipe" placeholder="Tipe kamera" value="<?php echo $kamera->tipe ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tipe') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="tel" name="harga" min="0" placeholder="Harga" value="<?php echo $kamera->harga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Gambar</label>
								<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<input type="hidden" name="old_image" value="<?php echo $kamera->gambar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


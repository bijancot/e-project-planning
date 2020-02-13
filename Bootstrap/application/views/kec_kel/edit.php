<?php echo form_open('kec_kel/edit/'.$kec_kel['id_kelurahan'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_kecamatan" class="col-md-4 control-label">Nama Kecamatan</label>
		<div class="col-md-8">
			<input type="text" name="nama_kecamatan" value="<?php echo ($this->input->post('nama_kecamatan') ? $this->input->post('nama_kecamatan') : $kec_kel['nama_kecamatan']); ?>" class="form-control" id="nama_kecamatan" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_kelurahan" class="col-md-4 control-label">Nama Kelurahan</label>
		<div class="col-md-8">
			<input type="text" name="nama_kelurahan" value="<?php echo ($this->input->post('nama_kelurahan') ? $this->input->post('nama_kelurahan') : $kec_kel['nama_kelurahan']); ?>" class="form-control" id="nama_kelurahan" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
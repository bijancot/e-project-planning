<?php echo form_open('sumberdana/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="jenis_sumberdana" class="col-md-4 control-label">Jenis Sumberdana</label>
		<div class="col-md-8">
			<input type="text" name="jenis_sumberdana" value="<?php echo $this->input->post('jenis_sumberdana'); ?>" class="form-control" id="jenis_sumberdana" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_sumberdana" class="col-md-4 control-label">Nama Sumberdana</label>
		<div class="col-md-8">
			<input type="text" name="nama_sumberdana" value="<?php echo $this->input->post('nama_sumberdana'); ?>" class="form-control" id="nama_sumberdana" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
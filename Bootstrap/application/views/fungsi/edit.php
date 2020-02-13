<?php echo form_open('fungsi/edit/'.$fungsi['id_fungsi'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_fungsi" class="col-md-4 control-label">Nama Fungsi</label>
		<div class="col-md-8">
			<input type="text" name="nama_fungsi" value="<?php echo ($this->input->post('nama_fungsi') ? $this->input->post('nama_fungsi') : $fungsi['nama_fungsi']); ?>" class="form-control" id="nama_fungsi" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
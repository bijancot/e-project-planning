<?php echo form_open('rekening/edit/'.$rekening['id_rek'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_rekening" class="col-md-4 control-label">Nama Rekening</label>
		<div class="col-md-8">
			<input type="text" name="nama_rekening" value="<?php echo ($this->input->post('nama_rekening') ? $this->input->post('nama_rekening') : $rekening['nama_rekening']); ?>" class="form-control" id="nama_rekening" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
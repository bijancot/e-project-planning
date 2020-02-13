<?php echo form_open('urusan/edit/'.$urusan['id_urusan'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_urusan" class="col-md-4 control-label">Nama Urusan</label>
		<div class="col-md-8">
			<input type="text" name="nama_urusan" value="<?php echo ($this->input->post('nama_urusan') ? $this->input->post('nama_urusan') : $urusan['nama_urusan']); ?>" class="form-control" id="nama_urusan" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
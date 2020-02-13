<?php echo form_open('jeni/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nm_jenis" class="col-md-4 control-label">Nm Jenis</label>
		<div class="col-md-8">
			<input type="text" name="nm_jenis" value="<?php echo $this->input->post('nm_jenis'); ?>" class="form-control" id="nm_jenis" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
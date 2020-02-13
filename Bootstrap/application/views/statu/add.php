<?php echo form_open('statu/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nm_status" class="col-md-4 control-label">Nm Status</label>
		<div class="col-md-8">
			<input type="text" name="nm_status" value="<?php echo $this->input->post('nm_status'); ?>" class="form-control" id="nm_status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
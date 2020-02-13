<?php echo form_open('ref_rek_2/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Nm_Rek_2" class="col-md-4 control-label">Nm Rek 2</label>
		<div class="col-md-8">
			<input type="text" name="Nm_Rek_2" value="<?php echo $this->input->post('Nm_Rek_2'); ?>" class="form-control" id="Nm_Rek_2" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
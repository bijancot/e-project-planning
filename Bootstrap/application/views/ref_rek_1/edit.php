<?php echo form_open('ref_rek_1/edit/'.$ref_rek_1['Kd_Rek_1'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Nm_Rek_1" class="col-md-4 control-label">Nm Rek 1</label>
		<div class="col-md-8">
			<input type="text" name="Nm_Rek_1" value="<?php echo ($this->input->post('Nm_Rek_1') ? $this->input->post('Nm_Rek_1') : $ref_rek_1['Nm_Rek_1']); ?>" class="form-control" id="Nm_Rek_1" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
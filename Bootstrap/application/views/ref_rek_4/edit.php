<?php echo form_open('ref_rek_4/edit/'.$ref_rek_4['Kd_Rek_1'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Nm_Rek_4" class="col-md-4 control-label">Nm Rek 4</label>
		<div class="col-md-8">
			<input type="text" name="Nm_Rek_4" value="<?php echo ($this->input->post('Nm_Rek_4') ? $this->input->post('Nm_Rek_4') : $ref_rek_4['Nm_Rek_4']); ?>" class="form-control" id="Nm_Rek_4" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
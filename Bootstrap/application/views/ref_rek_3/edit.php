<?php echo form_open('ref_rek_3/edit/'.$ref_rek_3['Kd_Rek_1'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Nm_Rek_3" class="col-md-4 control-label">Nm Rek 3</label>
		<div class="col-md-8">
			<input type="text" name="Nm_Rek_3" value="<?php echo ($this->input->post('Nm_Rek_3') ? $this->input->post('Nm_Rek_3') : $ref_rek_3['Nm_Rek_3']); ?>" class="form-control" id="Nm_Rek_3" />
		</div>
	</div>
	<div class="form-group">
		<label for="SaldoNorm" class="col-md-4 control-label">SaldoNorm</label>
		<div class="col-md-8">
			<input type="text" name="SaldoNorm" value="<?php echo ($this->input->post('SaldoNorm') ? $this->input->post('SaldoNorm') : $ref_rek_3['SaldoNorm']); ?>" class="form-control" id="SaldoNorm" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
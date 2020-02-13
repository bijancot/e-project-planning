<?php echo form_open('ref_rek_5/edit/'.$ref_rek_5['Kd_Rek_1'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<input type="checkbox" name="Status" value="1" <?php echo ($ref_rek_5['Status']==1 ? 'checked="checked"' : ''); ?> id='Status' />
		</div>
	</div>
	<div class="form-group">
		<label for="Nm_Rek_5" class="col-md-4 control-label">Nm Rek 5</label>
		<div class="col-md-8">
			<input type="text" name="Nm_Rek_5" value="<?php echo ($this->input->post('Nm_Rek_5') ? $this->input->post('Nm_Rek_5') : $ref_rek_5['Nm_Rek_5']); ?>" class="form-control" id="Nm_Rek_5" />
		</div>
	</div>
	<div class="form-group">
		<label for="Peraturan" class="col-md-4 control-label">Peraturan</label>
		<div class="col-md-8">
			<input type="text" name="Peraturan" value="<?php echo ($this->input->post('Peraturan') ? $this->input->post('Peraturan') : $ref_rek_5['Peraturan']); ?>" class="form-control" id="Peraturan" />
		</div>
	</div>
	<div class="form-group">
		<label for="Ket_Rek_5" class="col-md-4 control-label">Ket Rek 5</label>
		<div class="col-md-8">
			<textarea name="Ket_Rek_5" class="form-control" id="Ket_Rek_5"><?php echo ($this->input->post('Ket_Rek_5') ? $this->input->post('Ket_Rek_5') : $ref_rek_5['Ket_Rek_5']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
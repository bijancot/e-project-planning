<?php echo form_open('_kegiatan/edit/'.$_kegiatan['id_kegiatan'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_program" class="col-md-4 control-label"> Program</label>
		<div class="col-md-8">
			<select name="id_program" class="form-control">
				<option value="">select _program</option>
				<?php 
				foreach($all__program as $_program)
				{
					$selected = ($_program['id_program'] == $_kegiatan['id_program']) ? ' selected="selected"' : "";

					echo '<option value="'.$_program['id_program'].'" '.$selected.'>'.$_program['id_program'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="kd_keg" class="col-md-4 control-label">Kd Keg</label>
		<div class="col-md-8">
			<input type="text" name="kd_keg" value="<?php echo ($this->input->post('kd_keg') ? $this->input->post('kd_keg') : $_kegiatan['kd_keg']); ?>" class="form-control" id="kd_keg" />
		</div>
	</div>
	<div class="form-group">
		<label for="program" class="col-md-4 control-label">Program</label>
		<div class="col-md-8">
			<input type="text" name="program" value="<?php echo ($this->input->post('program') ? $this->input->post('program') : $_kegiatan['program']); ?>" class="form-control" id="program" />
		</div>
	</div>
	<div class="form-group">
		<label for="kegiatan" class="col-md-4 control-label">Kegiatan</label>
		<div class="col-md-8">
			<input type="text" name="kegiatan" value="<?php echo ($this->input->post('kegiatan') ? $this->input->post('kegiatan') : $_kegiatan['kegiatan']); ?>" class="form-control" id="kegiatan" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
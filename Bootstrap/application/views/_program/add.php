<?php echo form_open('_program/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_urusan" class="col-md-4 control-label">Urusan</label>
		<div class="col-md-8">
			<select name="id_urusan" class="form-control">
				<option value="">select urusan</option>
				<?php 
				foreach($all_urusan as $urusan)
				{
					$selected = ($urusan['id_urusan'] == $this->input->post('id_urusan')) ? ' selected="selected"' : "";

					echo '<option value="'.$urusan['id_urusan'].'" '.$selected.'>'.$urusan['id_urusan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_bidang" class="col-md-4 control-label">Id Bidang</label>
		<div class="col-md-8">
			<input type="text" name="id_bidang" value="<?php echo $this->input->post('id_bidang'); ?>" class="form-control" id="id_bidang" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_prog" class="col-md-4 control-label">Kd Prog</label>
		<div class="col-md-8">
			<input type="text" name="kd_prog" value="<?php echo $this->input->post('kd_prog'); ?>" class="form-control" id="kd_prog" />
		</div>
	</div>
	<div class="form-group">
		<label for="program" class="col-md-4 control-label">Program</label>
		<div class="col-md-8">
			<input type="text" name="program" value="<?php echo $this->input->post('program'); ?>" class="form-control" id="program" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_satker" class="col-md-4 control-label">Id Satker</label>
		<div class="col-md-8">
			<input type="text" name="id_satker" value="<?php echo $this->input->post('id_satker'); ?>" class="form-control" id="id_satker" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
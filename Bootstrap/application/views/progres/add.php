<?php echo form_open('progres/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_progress_penyedia" class="col-md-4 control-label">Id Progress Penyedia</label>
		<div class="col-md-8">
			<input type="text" name="id_progress_penyedia" value="<?php echo $this->input->post('id_progress_penyedia'); ?>" class="form-control" id="id_progress_penyedia" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_progeress_swklola" class="col-md-4 control-label">Id Progeress Swklola</label>
		<div class="col-md-8">
			<input type="text" name="id_progeress_swklola" value="<?php echo $this->input->post('id_progeress_swklola'); ?>" class="form-control" id="id_progeress_swklola" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
<?php echo form_open('det_paket/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_p_penyedia" class="col-md-4 control-label">Id P Penyedia</label>
		<div class="col-md-8">
			<input type="text" name="id_p_penyedia" value="<?php echo $this->input->post('id_p_penyedia'); ?>" class="form-control" id="id_p_penyedia" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_p_swakelola" class="col-md-4 control-label">Id P Swakelola</label>
		<div class="col-md-8">
			<input type="text" name="id_p_swakelola" value="<?php echo $this->input->post('id_p_swakelola'); ?>" class="form-control" id="id_p_swakelola" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_paket" class="col-md-4 control-label">Detail Paket</label>
		<div class="col-md-8">
			<input type="text" name="detail_paket" value="<?php echo $this->input->post('detail_paket'); ?>" class="form-control" id="detail_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="vol_paket" class="col-md-4 control-label">Vol Paket</label>
		<div class="col-md-8">
			<input type="text" name="vol_paket" value="<?php echo $this->input->post('vol_paket'); ?>" class="form-control" id="vol_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="uang_paket" class="col-md-4 control-label">Uang Paket</label>
		<div class="col-md-8">
			<input type="text" name="uang_paket" value="<?php echo $this->input->post('uang_paket'); ?>" class="form-control" id="uang_paket" />
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
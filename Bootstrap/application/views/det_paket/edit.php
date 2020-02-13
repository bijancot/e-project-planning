<?php echo form_open('det_paket/edit/'.$det_paket['id_det_paket'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_p_penyedia" class="col-md-4 control-label">Id P Penyedia</label>
		<div class="col-md-8">
			<input type="text" name="id_p_penyedia" value="<?php echo ($this->input->post('id_p_penyedia') ? $this->input->post('id_p_penyedia') : $det_paket['id_p_penyedia']); ?>" class="form-control" id="id_p_penyedia" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_p_swakelola" class="col-md-4 control-label">Id P Swakelola</label>
		<div class="col-md-8">
			<input type="text" name="id_p_swakelola" value="<?php echo ($this->input->post('id_p_swakelola') ? $this->input->post('id_p_swakelola') : $det_paket['id_p_swakelola']); ?>" class="form-control" id="id_p_swakelola" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_paket" class="col-md-4 control-label">Detail Paket</label>
		<div class="col-md-8">
			<input type="text" name="detail_paket" value="<?php echo ($this->input->post('detail_paket') ? $this->input->post('detail_paket') : $det_paket['detail_paket']); ?>" class="form-control" id="detail_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="vol_paket" class="col-md-4 control-label">Vol Paket</label>
		<div class="col-md-8">
			<input type="text" name="vol_paket" value="<?php echo ($this->input->post('vol_paket') ? $this->input->post('vol_paket') : $det_paket['vol_paket']); ?>" class="form-control" id="vol_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="uang_paket" class="col-md-4 control-label">Uang Paket</label>
		<div class="col-md-8">
			<input type="text" name="uang_paket" value="<?php echo ($this->input->post('uang_paket') ? $this->input->post('uang_paket') : $det_paket['uang_paket']); ?>" class="form-control" id="uang_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_satker" class="col-md-4 control-label">Id Satker</label>
		<div class="col-md-8">
			<input type="text" name="id_satker" value="<?php echo ($this->input->post('id_satker') ? $this->input->post('id_satker') : $det_paket['id_satker']); ?>" class="form-control" id="id_satker" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
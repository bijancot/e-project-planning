<?php echo form_open('lokasi/edit/'.$lokasi['id_lokasi'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_paket_lokasi" class="col-md-4 control-label">Id Paket Lokasi</label>
		<div class="col-md-8">
			<input type="text" name="id_paket_lokasi" value="<?php echo ($this->input->post('id_paket_lokasi') ? $this->input->post('id_paket_lokasi') : $lokasi['id_paket_lokasi']); ?>" class="form-control" id="id_paket_lokasi" />
		</div>
	</div>
	<div class="form-group">
		<label for="kec" class="col-md-4 control-label">Kec</label>
		<div class="col-md-8">
			<input type="text" name="kec" value="<?php echo ($this->input->post('kec') ? $this->input->post('kec') : $lokasi['kec']); ?>" class="form-control" id="kec" />
		</div>
	</div>
	<div class="form-group">
		<label for="kel" class="col-md-4 control-label">Kel</label>
		<div class="col-md-8">
			<input type="text" name="kel" value="<?php echo ($this->input->post('kel') ? $this->input->post('kel') : $lokasi['kel']); ?>" class="form-control" id="kel" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_lok" class="col-md-4 control-label">Detail Lok</label>
		<div class="col-md-8">
			<input type="text" name="detail_lok" value="<?php echo ($this->input->post('detail_lok') ? $this->input->post('detail_lok') : $lokasi['detail_lok']); ?>" class="form-control" id="detail_lok" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
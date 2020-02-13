<?php echo form_open('unit/edit/'.$unit['id_unit'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="kode_bidang" class="col-md-4 control-label">Bidang</label>
		<div class="col-md-8">
			<select name="kode_bidang" class="form-control">
				<option value="">select bidang</option>
				<?php 
				foreach($all_bidang as $bidang)
				{
					$selected = ($bidang['id_bidang'] == $unit['kode_bidang']) ? ' selected="selected"' : "";

					echo '<option value="'.$bidang['id_bidang'].'" '.$selected.'>'.$bidang['kode_bidang'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="kode_urusan" class="col-md-4 control-label">Kode Urusan</label>
		<div class="col-md-8">
			<input type="text" name="kode_urusan" value="<?php echo ($this->input->post('kode_urusan') ? $this->input->post('kode_urusan') : $unit['kode_urusan']); ?>" class="form-control" id="kode_urusan" />
		</div>
	</div>
	<div class="form-group">
		<label for="kode_unit" class="col-md-4 control-label">Kode Unit</label>
		<div class="col-md-8">
			<input type="text" name="kode_unit" value="<?php echo ($this->input->post('kode_unit') ? $this->input->post('kode_unit') : $unit['kode_unit']); ?>" class="form-control" id="kode_unit" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_unit" class="col-md-4 control-label">Nama Unit</label>
		<div class="col-md-8">
			<input type="text" name="nama_unit" value="<?php echo ($this->input->post('nama_unit') ? $this->input->post('nama_unit') : $unit['nama_unit']); ?>" class="form-control" id="nama_unit" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
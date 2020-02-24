<?php echo form_open('test-bootstrap/tr_lokasi_paket/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_paket" class="col-md-4 control-label"> Paket</label>
		<div class="col-md-8">
			<select name="id_paket" class="form-control">
				<option value="">select _paket</option>
				<?php 
				foreach($all__paket as $_paket)
				{
					$selected = ($_paket['id_paket'] == $this->input->post('id_paket')) ? ' selected="selected"' : "";

					echo '<option value="'.$_paket['id_paket'].'" '.$selected.'>'.$_paket['id_paket'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_kec_kel" class="col-md-4 control-label">Kec Kel</label>
		<div class="col-md-8">
			<select name="id_kec_kel" class="form-control">
				<option value="">select kec_kel</option>
				<?php 
				foreach($all_kec_kel as $kec_kel)
				{
					$selected = ($kec_kel['id_kelurahan'] == $this->input->post('id_kec_kel')) ? ' selected="selected"' : "";

					echo '<option value="'.$kec_kel['id_kelurahan'].'" '.$selected.'>'.$kec_kel['id_kelurahan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-4 control-label">Keterangan</label>
		<div class="col-md-8">
			<input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" />
		</div>
	</div>
	<div class="form-group">
		<label for="createdDate" class="col-md-4 control-label">CreatedDate</label>
		<div class="col-md-8">
			<input type="text" name="createdDate" value="<?php echo $this->input->post('createdDate'); ?>" class="form-control" id="createdDate" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
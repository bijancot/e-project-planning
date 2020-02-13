<?php echo form_open('bidang/edit/'.$bidang['id_bidang'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_urusan" class="col-md-4 control-label">Urusan</label>
		<div class="col-md-8">
			<select name="id_urusan" class="form-control">
				<option value="">select urusan</option>
				<?php 
				foreach($all_urusan as $urusan)
				{
					$selected = ($urusan['id_urusan'] == $bidang['id_urusan']) ? ' selected="selected"' : "";

					echo '<option value="'.$urusan['id_urusan'].'" '.$selected.'>'.$urusan['id_urusan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="kode_bidang" class="col-md-4 control-label">Kode Bidang</label>
		<div class="col-md-8">
			<input type="text" name="kode_bidang" value="<?php echo ($this->input->post('kode_bidang') ? $this->input->post('kode_bidang') : $bidang['kode_bidang']); ?>" class="form-control" id="kode_bidang" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_bidang" class="col-md-4 control-label">Nama Bidang</label>
		<div class="col-md-8">
			<input type="text" name="nama_bidang" value="<?php echo ($this->input->post('nama_bidang') ? $this->input->post('nama_bidang') : $bidang['nama_bidang']); ?>" class="form-control" id="nama_bidang" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
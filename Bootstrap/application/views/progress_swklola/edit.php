<?php echo form_open('progress_swklola/edit/'.$progress_swklola['id_prog_swklola'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="bulan_realisasi" class="col-md-4 control-label">Bulan Realisasi</label>
		<div class="col-md-8">
			<input type="text" name="bulan_realisasi" value="<?php echo ($this->input->post('bulan_realisasi') ? $this->input->post('bulan_realisasi') : $progress_swklola['bulan_realisasi']); ?>" class="form-control" id="bulan_realisasi" />
		</div>
	</div>
	<div class="form-group">
		<label for="rencana_keuangan" class="col-md-4 control-label">Rencana Keuangan</label>
		<div class="col-md-8">
			<input type="text" name="rencana_keuangan" value="<?php echo ($this->input->post('rencana_keuangan') ? $this->input->post('rencana_keuangan') : $progress_swklola['rencana_keuangan']); ?>" class="form-control" id="rencana_keuangan" />
		</div>
	</div>
	<div class="form-group">
		<label for="realisasi_keuangan" class="col-md-4 control-label">Realisasi Keuangan</label>
		<div class="col-md-8">
			<input type="text" name="realisasi_keuangan" value="<?php echo ($this->input->post('realisasi_keuangan') ? $this->input->post('realisasi_keuangan') : $progress_swklola['realisasi_keuangan']); ?>" class="form-control" id="realisasi_keuangan" />
		</div>
	</div>
	<div class="form-group">
		<label for="rencana_fisik" class="col-md-4 control-label">Rencana Fisik</label>
		<div class="col-md-8">
			<input type="text" name="rencana_fisik" value="<?php echo ($this->input->post('rencana_fisik') ? $this->input->post('rencana_fisik') : $progress_swklola['rencana_fisik']); ?>" class="form-control" id="rencana_fisik" />
		</div>
	</div>
	<div class="form-group">
		<label for="realisasi_fisik" class="col-md-4 control-label">Realisasi Fisik</label>
		<div class="col-md-8">
			<input type="text" name="realisasi_fisik" value="<?php echo ($this->input->post('realisasi_fisik') ? $this->input->post('realisasi_fisik') : $progress_swklola['realisasi_fisik']); ?>" class="form-control" id="realisasi_fisik" />
		</div>
	</div>
	<div class="form-group">
		<label for="realisasi_fisik_foto" class="col-md-4 control-label">Realisasi Fisik Foto</label>
		<div class="col-md-8">
			<input type="text" name="realisasi_fisik_foto" value="<?php echo ($this->input->post('realisasi_fisik_foto') ? $this->input->post('realisasi_fisik_foto') : $progress_swklola['realisasi_fisik_foto']); ?>" class="form-control" id="realisasi_fisik_foto" />
		</div>
	</div>
	<div class="form-group">
		<label for="tahapan_prgres_swklola" class="col-md-4 control-label">Tahapan Prgres Swklola</label>
		<div class="col-md-8">
			<input type="text" name="tahapan_prgres_swklola" value="<?php echo ($this->input->post('tahapan_prgres_swklola') ? $this->input->post('tahapan_prgres_swklola') : $progress_swklola['tahapan_prgres_swklola']); ?>" class="form-control" id="tahapan_prgres_swklola" />
		</div>
	</div>
	<div class="form-group">
		<label for="no_kontrak" class="col-md-4 control-label">No Kontrak</label>
		<div class="col-md-8">
			<input type="text" name="no_kontrak" value="<?php echo ($this->input->post('no_kontrak') ? $this->input->post('no_kontrak') : $progress_swklola['no_kontrak']); ?>" class="form-control" id="no_kontrak" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_pelaksana" class="col-md-4 control-label">Nama Pelaksana</label>
		<div class="col-md-8">
			<input type="text" name="nama_pelaksana" value="<?php echo ($this->input->post('nama_pelaksana') ? $this->input->post('nama_pelaksana') : $progress_swklola['nama_pelaksana']); ?>" class="form-control" id="nama_pelaksana" />
		</div>
	</div>
	<div class="form-group">
		<label for="alamat_pelaksana" class="col-md-4 control-label">Alamat Pelaksana</label>
		<div class="col-md-8">
			<input type="text" name="alamat_pelaksana" value="<?php echo ($this->input->post('alamat_pelaksana') ? $this->input->post('alamat_pelaksana') : $progress_swklola['alamat_pelaksana']); ?>" class="form-control" id="alamat_pelaksana" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_pgr_swakelola" class="col-md-4 control-label">Id Pgr Swakelola</label>
		<div class="col-md-8">
			<input type="text" name="id_pgr_swakelola" value="<?php echo ($this->input->post('id_pgr_swakelola') ? $this->input->post('id_pgr_swakelola') : $progress_swklola['id_pgr_swakelola']); ?>" class="form-control" id="id_pgr_swakelola" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_dinas" class="col-md-4 control-label">Id Dinas</label>
		<div class="col-md-8">
			<input type="text" name="id_dinas" value="<?php echo ($this->input->post('id_dinas') ? $this->input->post('id_dinas') : $progress_swklola['id_dinas']); ?>" class="form-control" id="id_dinas" />
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-4 control-label">Keterangan</label>
		<div class="col-md-8">
			<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $progress_swklola['keterangan']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
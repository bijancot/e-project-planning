<?php echo form_open('progress_penyedium/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="bulan_realisasi" class="col-md-4 control-label">Bulan Realisasi</label>
		<div class="col-md-8">
			<input type="text" name="bulan_realisasi" value="<?php echo $this->input->post('bulan_realisasi'); ?>" class="form-control" id="bulan_realisasi" />
		</div>
	</div>
	<div class="form-group">
		<label for="rencana_keuangan" class="col-md-4 control-label">Rencana Keuangan</label>
		<div class="col-md-8">
			<input type="text" name="rencana_keuangan" value="<?php echo $this->input->post('rencana_keuangan'); ?>" class="form-control" id="rencana_keuangan" />
		</div>
	</div>
	<div class="form-group">
		<label for="ren_keuangan_persen" class="col-md-4 control-label">Ren Keuangan Persen</label>
		<div class="col-md-8">
			<input type="text" name="ren_keuangan_persen" value="<?php echo $this->input->post('ren_keuangan_persen'); ?>" class="form-control" id="ren_keuangan_persen" />
		</div>
	</div>
	<div class="form-group">
		<label for="realisasi_keuangan" class="col-md-4 control-label">Realisasi Keuangan</label>
		<div class="col-md-8">
			<input type="text" name="realisasi_keuangan" value="<?php echo $this->input->post('realisasi_keuangan'); ?>" class="form-control" id="realisasi_keuangan" />
		</div>
	</div>
	<div class="form-group">
		<label for="rea_keuangan_persen" class="col-md-4 control-label">Rea Keuangan Persen</label>
		<div class="col-md-8">
			<input type="text" name="rea_keuangan_persen" value="<?php echo $this->input->post('rea_keuangan_persen'); ?>" class="form-control" id="rea_keuangan_persen" />
		</div>
	</div>
	<div class="form-group">
		<label for="rencana_fisik" class="col-md-4 control-label">Rencana Fisik</label>
		<div class="col-md-8">
			<input type="text" name="rencana_fisik" value="<?php echo $this->input->post('rencana_fisik'); ?>" class="form-control" id="rencana_fisik" />
		</div>
	</div>
	<div class="form-group">
		<label for="ren_fisik_volume" class="col-md-4 control-label">Ren Fisik Volume</label>
		<div class="col-md-8">
			<input type="text" name="ren_fisik_volume" value="<?php echo $this->input->post('ren_fisik_volume'); ?>" class="form-control" id="ren_fisik_volume" />
		</div>
	</div>
	<div class="form-group">
		<label for="realisasi_fisik" class="col-md-4 control-label">Realisasi Fisik</label>
		<div class="col-md-8">
			<input type="text" name="realisasi_fisik" value="<?php echo $this->input->post('realisasi_fisik'); ?>" class="form-control" id="realisasi_fisik" />
		</div>
	</div>
	<div class="form-group">
		<label for="rea_fisik_volume" class="col-md-4 control-label">Rea Fisik Volume</label>
		<div class="col-md-8">
			<input type="text" name="rea_fisik_volume" value="<?php echo $this->input->post('rea_fisik_volume'); ?>" class="form-control" id="rea_fisik_volume" />
		</div>
	</div>
	<div class="form-group">
		<label for="realisasi_fisik_foto" class="col-md-4 control-label">Realisasi Fisik Foto</label>
		<div class="col-md-8">
			<input type="text" name="realisasi_fisik_foto" value="<?php echo $this->input->post('realisasi_fisik_foto'); ?>" class="form-control" id="realisasi_fisik_foto" />
		</div>
	</div>
	<div class="form-group">
		<label for="tahapan_prgres_pnyedia" class="col-md-4 control-label">Tahapan Prgres Pnyedia</label>
		<div class="col-md-8">
			<input type="text" name="tahapan_prgres_pnyedia" value="<?php echo $this->input->post('tahapan_prgres_pnyedia'); ?>" class="form-control" id="tahapan_prgres_pnyedia" />
		</div>
	</div>
	<div class="form-group">
		<label for="no_kontrak" class="col-md-4 control-label">No Kontrak</label>
		<div class="col-md-8">
			<input type="text" name="no_kontrak" value="<?php echo $this->input->post('no_kontrak'); ?>" class="form-control" id="no_kontrak" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_kontrak" class="col-md-4 control-label">Tgl Kontrak</label>
		<div class="col-md-8">
			<input type="text" name="tgl_kontrak" value="<?php echo $this->input->post('tgl_kontrak'); ?>" class="form-control" id="tgl_kontrak" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_pelaksana" class="col-md-4 control-label">Nama Pelaksana</label>
		<div class="col-md-8">
			<input type="text" name="nama_pelaksana" value="<?php echo $this->input->post('nama_pelaksana'); ?>" class="form-control" id="nama_pelaksana" />
		</div>
	</div>
	<div class="form-group">
		<label for="alamat_pelaksana" class="col-md-4 control-label">Alamat Pelaksana</label>
		<div class="col-md-8">
			<input type="text" name="alamat_pelaksana" value="<?php echo $this->input->post('alamat_pelaksana'); ?>" class="form-control" id="alamat_pelaksana" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_p_penyedia" class="col-md-4 control-label">Id P Penyedia</label>
		<div class="col-md-8">
			<input type="text" name="id_p_penyedia" value="<?php echo $this->input->post('id_p_penyedia'); ?>" class="form-control" id="id_p_penyedia" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_dinas" class="col-md-4 control-label">Id Dinas</label>
		<div class="col-md-8">
			<input type="text" name="id_dinas" value="<?php echo $this->input->post('id_dinas'); ?>" class="form-control" id="id_dinas" />
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-4 control-label">Keterangan</label>
		<div class="col-md-8">
			<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
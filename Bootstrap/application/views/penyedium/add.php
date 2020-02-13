<?php echo form_open('penyedium/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_swakelola" class="col-md-4 control-label">Id Swakelola</label>
		<div class="col-md-8">
			<input type="text" name="id_swakelola" value="<?php echo $this->input->post('id_swakelola'); ?>" class="form-control" id="id_swakelola" />
		</div>
	</div>
	<div class="form-group">
		<label for="tanggal_terakhir_di_update" class="col-md-4 control-label">Tanggal Terakhir Di Update</label>
		<div class="col-md-8">
			<input type="text" name="tanggal_terakhir_di_update" value="<?php echo $this->input->post('tanggal_terakhir_di_update'); ?>" class="form-control" id="tanggal_terakhir_di_update" />
		</div>
	</div>
	<div class="form-group">
		<label for="status_aktif" class="col-md-4 control-label">Status Aktif</label>
		<div class="col-md-8">
			<input type="text" name="status_aktif" value="<?php echo $this->input->post('status_aktif'); ?>" class="form-control" id="status_aktif" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_satker" class="col-md-4 control-label">Id Satker</label>
		<div class="col-md-8">
			<input type="text" name="id_satker" value="<?php echo $this->input->post('id_satker'); ?>" class="form-control" id="id_satker" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_satker" class="col-md-4 control-label">Nama Satker</label>
		<div class="col-md-8">
			<input type="text" name="nama_satker" value="<?php echo $this->input->post('nama_satker'); ?>" class="form-control" id="nama_satker" />
		</div>
	</div>
	<div class="form-group">
		<label for="program" class="col-md-4 control-label">Program</label>
		<div class="col-md-8">
			<input type="text" name="program" value="<?php echo $this->input->post('program'); ?>" class="form-control" id="program" />
		</div>
	</div>
	<div class="form-group">
		<label for="kegiatan" class="col-md-4 control-label">Kegiatan</label>
		<div class="col-md-8">
			<input type="text" name="kegiatan" value="<?php echo $this->input->post('kegiatan'); ?>" class="form-control" id="kegiatan" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_paket" class="col-md-4 control-label">Nama Paket</label>
		<div class="col-md-8">
			<input type="text" name="nama_paket" value="<?php echo $this->input->post('nama_paket'); ?>" class="form-control" id="nama_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="volume" class="col-md-4 control-label">Volume</label>
		<div class="col-md-8">
			<input type="text" name="volume" value="<?php echo $this->input->post('volume'); ?>" class="form-control" id="volume" />
		</div>
	</div>
	<div class="form-group">
		<label for="jenis_pengadaan" class="col-md-4 control-label">Jenis Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="jenis_pengadaan" value="<?php echo $this->input->post('jenis_pengadaan'); ?>" class="form-control" id="jenis_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="metode_pemilihan" class="col-md-4 control-label">Metode Pemilihan</label>
		<div class="col-md-8">
			<input type="text" name="metode_pemilihan" value="<?php echo $this->input->post('metode_pemilihan'); ?>" class="form-control" id="metode_pemilihan" />
		</div>
	</div>
	<div class="form-group">
		<label for="sumber_dana" class="col-md-4 control-label">Sumber Dana</label>
		<div class="col-md-8">
			<input type="text" name="sumber_dana" value="<?php echo $this->input->post('sumber_dana'); ?>" class="form-control" id="sumber_dana" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_sumberdana" class="col-md-4 control-label">Detail Sumberdana</label>
		<div class="col-md-8">
			<input type="text" name="detail_sumberdana" value="<?php echo $this->input->post('detail_sumberdana'); ?>" class="form-control" id="detail_sumberdana" />
		</div>
	</div>
	<div class="form-group">
		<label for="kecamatan" class="col-md-4 control-label">Kecamatan</label>
		<div class="col-md-8">
			<input type="text" name="kecamatan" value="<?php echo $this->input->post('kecamatan'); ?>" class="form-control" id="kecamatan" />
		</div>
	</div>
	<div class="form-group">
		<label for="kelurahan" class="col-md-4 control-label">Kelurahan</label>
		<div class="col-md-8">
			<input type="text" name="kelurahan" value="<?php echo $this->input->post('kelurahan'); ?>" class="form-control" id="kelurahan" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_lokasi" class="col-md-4 control-label">Detail Lokasi</label>
		<div class="col-md-8">
			<input type="text" name="detail_lokasi" value="<?php echo $this->input->post('detail_lokasi'); ?>" class="form-control" id="detail_lokasi" />
		</div>
	</div>
	<div class="form-group">
		<label for="pagu_rup" class="col-md-4 control-label">Pagu Rup</label>
		<div class="col-md-8">
			<input type="text" name="pagu_rup" value="<?php echo $this->input->post('pagu_rup'); ?>" class="form-control" id="pagu_rup" />
		</div>
	</div>
	<div class="form-group">
		<label for="hps_penyedia" class="col-md-4 control-label">Hps Penyedia</label>
		<div class="col-md-8">
			<input type="text" name="hps_penyedia" value="<?php echo $this->input->post('hps_penyedia'); ?>" class="form-control" id="hps_penyedia" />
		</div>
	</div>
	<div class="form-group">
		<label for="nilai_kontrak" class="col-md-4 control-label">Nilai Kontrak</label>
		<div class="col-md-8">
			<input type="text" name="nilai_kontrak" value="<?php echo $this->input->post('nilai_kontrak'); ?>" class="form-control" id="nilai_kontrak" />
		</div>
	</div>
	<div class="form-group">
		<label for="sisa_pagu" class="col-md-4 control-label">Sisa Pagu</label>
		<div class="col-md-8">
			<input type="text" name="sisa_pagu" value="<?php echo $this->input->post('sisa_pagu'); ?>" class="form-control" id="sisa_pagu" />
		</div>
	</div>
	<div class="form-group">
		<label for="awal_pengadaan" class="col-md-4 control-label">Awal Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="awal_pengadaan" value="<?php echo $this->input->post('awal_pengadaan'); ?>" class="form-control" id="awal_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="akhir_pengadaan" class="col-md-4 control-label">Akhir Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="akhir_pengadaan" value="<?php echo $this->input->post('akhir_pengadaan'); ?>" class="form-control" id="akhir_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="awal_pekerjaan" class="col-md-4 control-label">Awal Pekerjaan</label>
		<div class="col-md-8">
			<input type="text" name="awal_pekerjaan" value="<?php echo $this->input->post('awal_pekerjaan'); ?>" class="form-control" id="awal_pekerjaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="akhir_pekerjaan" class="col-md-4 control-label">Akhir Pekerjaan</label>
		<div class="col-md-8">
			<input type="text" name="akhir_pekerjaan" value="<?php echo $this->input->post('akhir_pekerjaan'); ?>" class="form-control" id="akhir_pekerjaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tanggal_kebutuhan" class="col-md-4 control-label">Tanggal Kebutuhan</label>
		<div class="col-md-8">
			<input type="text" name="tanggal_kebutuhan" value="<?php echo $this->input->post('tanggal_kebutuhan'); ?>" class="form-control" id="tanggal_kebutuhan" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_ppk" class="col-md-4 control-label">Nama Ppk</label>
		<div class="col-md-8">
			<input type="text" name="nama_ppk" value="<?php echo $this->input->post('nama_ppk'); ?>" class="form-control" id="nama_ppk" />
		</div>
	</div>
	<div class="form-group">
		<label for="nip_ppk" class="col-md-4 control-label">Nip Ppk</label>
		<div class="col-md-8">
			<input type="text" name="nip_ppk" value="<?php echo $this->input->post('nip_ppk'); ?>" class="form-control" id="nip_ppk" />
		</div>
	</div>
	<div class="form-group">
		<label for="spesifikasi" class="col-md-4 control-label">Spesifikasi</label>
		<div class="col-md-8">
			<textarea name="spesifikasi" class="form-control" id="spesifikasi"><?php echo $this->input->post('spesifikasi'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
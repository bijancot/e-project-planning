<?php echo form_open('swakelola/add',array("class"=>"form-horizontal")); ?>

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
		<label for="tipe_swakelola" class="col-md-4 control-label">Tipe Swakelola</label>
		<div class="col-md-8">
			<input type="text" name="tipe_swakelola" value="<?php echo $this->input->post('tipe_swakelola'); ?>" class="form-control" id="tipe_swakelola" />
		</div>
	</div>
	<div class="form-group">
		<label for="sumber_dana" class="col-md-4 control-label">Sumber Dana</label>
		<div class="col-md-8">
			<input type="text" name="sumber_dana" value="<?php echo $this->input->post('sumber_dana'); ?>" class="form-control" id="sumber_dana" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_dana_sw" class="col-md-4 control-label">Detail Dana Sw</label>
		<div class="col-md-8">
			<input type="text" name="detail_dana_sw" value="<?php echo $this->input->post('detail_dana_sw'); ?>" class="form-control" id="detail_dana_sw" />
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
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
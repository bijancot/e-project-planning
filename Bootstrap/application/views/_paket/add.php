<?php echo form_open('_paket/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_keterangan" class="col-md-4 control-label"> Keterangan</label>
		<div class="col-md-8">
			<select name="id_keterangan" class="form-control">
				<option value="">select _keterangan</option>
				<?php 
				foreach($all__keterangan as $_keterangan)
				{
					$selected = ($_keterangan['id_keterangan'] == $this->input->post('id_keterangan')) ? ' selected="selected"' : "";

					echo '<option value="'.$_keterangan['id_keterangan'].'" '.$selected.'>'.$_keterangan['id_keterangan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_penyedia" class="col-md-4 control-label"> Penyedium</label>
		<div class="col-md-8">
			<select name="id_penyedia" class="form-control">
				<option value="">select _penyedium</option>
				<?php 
				foreach($all__penyedia as $_penyedium)
				{
					$selected = ($_penyedium['id_penyedia'] == $this->input->post('id_penyedia')) ? ' selected="selected"' : "";

					echo '<option value="'.$_penyedium['id_penyedia'].'" '.$selected.'>'.$_penyedium['id_penyedia'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_progress" class="col-md-4 control-label">Progres</label>
		<div class="col-md-8">
			<select name="id_progress" class="form-control">
				<option value="">select progres</option>
				<?php 
				foreach($all_progress as $progres)
				{
					$selected = ($progres['id_progress'] == $this->input->post('id_progress')) ? ' selected="selected"' : "";

					echo '<option value="'.$progres['id_progress'].'" '.$selected.'>'.$progres['id_progress'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_ktgori_pengadaan" class="col-md-4 control-label">Id Ktgori Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="id_ktgori_pengadaan" value="<?php echo $this->input->post('id_ktgori_pengadaan'); ?>" class="form-control" id="id_ktgori_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="sumberdana" class="col-md-4 control-label">Sumberdana</label>
		<div class="col-md-8">
			<input type="text" name="sumberdana" value="<?php echo $this->input->post('sumberdana'); ?>" class="form-control" id="sumberdana" />
		</div>
	</div>
	<div class="form-group">
		<label for="volume" class="col-md-4 control-label">Volume</label>
		<div class="col-md-8">
			<input type="text" name="volume" value="<?php echo $this->input->post('volume'); ?>" class="form-control" id="volume" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_kebutuhan" class="col-md-4 control-label">Tgl Kebutuhan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_kebutuhan" value="<?php echo $this->input->post('tgl_kebutuhan'); ?>" class="form-control" id="tgl_kebutuhan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_awal_pkerjaan" class="col-md-4 control-label">Tgl Awal Pkerjaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_awal_pkerjaan" value="<?php echo $this->input->post('tgl_awal_pkerjaan'); ?>" class="form-control" id="tgl_awal_pkerjaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_akhir_pkerjaan" class="col-md-4 control-label">Tgl Akhir Pkerjaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_akhir_pkerjaan" value="<?php echo $this->input->post('tgl_akhir_pkerjaan'); ?>" class="form-control" id="tgl_akhir_pkerjaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_awal_pengadaan" class="col-md-4 control-label">Tgl Awal Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_awal_pengadaan" value="<?php echo $this->input->post('tgl_awal_pengadaan'); ?>" class="form-control" id="tgl_awal_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_akhir_pengadaan" class="col-md-4 control-label">Tgl Akhir Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_akhir_pengadaan" value="<?php echo $this->input->post('tgl_akhir_pengadaan'); ?>" class="form-control" id="tgl_akhir_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="jenis" class="col-md-4 control-label">Jenis</label>
		<div class="col-md-8">
			<input type="text" name="jenis" value="<?php echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" />
		</div>
	</div>
	<div class="form-group">
		<label for="metode" class="col-md-4 control-label">Metode</label>
		<div class="col-md-8">
			<input type="text" name="metode" value="<?php echo $this->input->post('metode'); ?>" class="form-control" id="metode" />
		</div>
	</div>
	<div class="form-group">
		<label for="uraian" class="col-md-4 control-label">Uraian</label>
		<div class="col-md-8">
			<input type="text" name="uraian" value="<?php echo $this->input->post('uraian'); ?>" class="form-control" id="uraian" />
		</div>
	</div>
	<div class="form-group">
		<label for="tahun_anggaran" class="col-md-4 control-label">Tahun Anggaran</label>
		<div class="col-md-8">
			<input type="text" name="tahun_anggaran" value="<?php echo $this->input->post('tahun_anggaran'); ?>" class="form-control" id="tahun_anggaran" />
		</div>
	</div>
	<div class="form-group">
		<label for="createtime" class="col-md-4 control-label">Createtime</label>
		<div class="col-md-8">
			<input type="text" name="createtime" value="<?php echo $this->input->post('createtime'); ?>" class="form-control" id="createtime" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_paket" class="col-md-4 control-label">Nama Paket</label>
		<div class="col-md-8">
			<input type="text" name="nama_paket" value="<?php echo $this->input->post('nama_paket'); ?>" class="form-control" id="nama_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="rincian_paket" class="col-md-4 control-label">Rincian Paket</label>
		<div class="col-md-8">
			<input type="text" name="rincian_paket" value="<?php echo $this->input->post('rincian_paket'); ?>" class="form-control" id="rincian_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_paket" class="col-md-4 control-label">Detail Paket</label>
		<div class="col-md-8">
			<input type="text" name="detail_paket" value="<?php echo $this->input->post('detail_paket'); ?>" class="form-control" id="detail_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="uang_paket" class="col-md-4 control-label">Uang Paket</label>
		<div class="col-md-8">
			<input type="text" name="uang_paket" value="<?php echo $this->input->post('uang_paket'); ?>" class="form-control" id="uang_paket" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
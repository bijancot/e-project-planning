



<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Home</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kegiatan</a></li>
                <li class="breadcrumb-item active">Edit Kegiatan</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

            <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <div class="card">

                <div class="card-body">

                <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New User</a> &nbsp;

                    <a href="<?php echo base_url('admin/user/power') ?>" class="btn btn-info"><i class="fa fa-user-o"></i> &nbsp; Add User Power</a>
                <?php else: ?>
                    <!-- check logged user role permissions -->

                    <?php if(check_power(1)):?>
                        <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New User</a>
                    <?php endif; ?>
                <?php endif ?>
                

                    <div class="table-responsive m-t-40">
					<?php echo form_open('_paket/edit/'.$_paket['id_paket'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_keterangan" class="col-md-4 control-label"> Keterangan</label>
		<div class="col-md-8">
			<select name="id_keterangan" class="form-control">
				<option value="">select _keterangan</option>
				<?php 
				foreach($all__keterangan as $_keterangan)
				{
					$selected = ($_keterangan['id_keterangan'] == $_paket['id_keterangan']) ? ' selected="selected"' : "";

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
					$selected = ($_penyedium['id_penyedia'] == $_paket['id_penyedia']) ? ' selected="selected"' : "";

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
					$selected = ($progres['id_progress'] == $_paket['id_progress']) ? ' selected="selected"' : "";

					echo '<option value="'.$progres['id_progress'].'" '.$selected.'>'.$progres['id_progress'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_ktgori_pengadaan" class="col-md-4 control-label">Id Ktgori Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : $_paket['id_ktgori_pengadaan']); ?>" class="form-control" id="id_ktgori_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="sumberdana" class="col-md-4 control-label">Sumberdana</label>
		<div class="col-md-8">
			<input type="text" name="sumberdana" value="<?php echo ($this->input->post('sumberdana') ? $this->input->post('sumberdana') : $_paket['sumberdana']); ?>" class="form-control" id="sumberdana" />
		</div>
	</div>
	<div class="form-group">
		<label for="volume" class="col-md-4 control-label">Volume</label>
		<div class="col-md-8">
			<input type="text" name="volume" value="<?php echo ($this->input->post('volume') ? $this->input->post('volume') : $_paket['volume']); ?>" class="form-control" id="volume" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_kebutuhan" class="col-md-4 control-label">Tgl Kebutuhan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_kebutuhan" value="<?php echo ($this->input->post('tgl_kebutuhan') ? $this->input->post('tgl_kebutuhan') : $_paket['tgl_kebutuhan']); ?>" class="form-control" id="tgl_kebutuhan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_awal_pkerjaan" class="col-md-4 control-label">Tgl Awal Pkerjaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_awal_pkerjaan" value="<?php echo ($this->input->post('tgl_awal_pkerjaan') ? $this->input->post('tgl_awal_pkerjaan') : $_paket['tgl_awal_pkerjaan']); ?>" class="form-control" id="tgl_awal_pkerjaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_akhir_pkerjaan" class="col-md-4 control-label">Tgl Akhir Pkerjaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_akhir_pkerjaan" value="<?php echo ($this->input->post('tgl_akhir_pkerjaan') ? $this->input->post('tgl_akhir_pkerjaan') : $_paket['tgl_akhir_pkerjaan']); ?>" class="form-control" id="tgl_akhir_pkerjaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_awal_pengadaan" class="col-md-4 control-label">Tgl Awal Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_awal_pengadaan" value="<?php echo ($this->input->post('tgl_awal_pengadaan') ? $this->input->post('tgl_awal_pengadaan') : $_paket['tgl_awal_pengadaan']); ?>" class="form-control" id="tgl_awal_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_akhir_pengadaan" class="col-md-4 control-label">Tgl Akhir Pengadaan</label>
		<div class="col-md-8">
			<input type="text" name="tgl_akhir_pengadaan" value="<?php echo ($this->input->post('tgl_akhir_pengadaan') ? $this->input->post('tgl_akhir_pengadaan') : $_paket['tgl_akhir_pengadaan']); ?>" class="form-control" id="tgl_akhir_pengadaan" />
		</div>
	</div>
	<div class="form-group">
		<label for="jenis" class="col-md-4 control-label">Jenis</label>
		<div class="col-md-8">
			<input type="text" name="jenis" value="<?php echo ($this->input->post('jenis') ? $this->input->post('jenis') : $_paket['jenis']); ?>" class="form-control" id="jenis" />
		</div>
	</div>
	<div class="form-group">
		<label for="metode" class="col-md-4 control-label">Metode</label>
		<div class="col-md-8">
			<input type="text" name="metode" value="<?php echo ($this->input->post('metode') ? $this->input->post('metode') : $_paket['metode']); ?>" class="form-control" id="metode" />
		</div>
	</div>
	<div class="form-group">
		<label for="uraian" class="col-md-4 control-label">Uraian</label>
		<div class="col-md-8">
			<input type="text" name="uraian" value="<?php echo ($this->input->post('uraian') ? $this->input->post('uraian') : $_paket['uraian']); ?>" class="form-control" id="uraian" />
		</div>
	</div>
	<div class="form-group">
		<label for="tahun_anggaran" class="col-md-4 control-label">Tahun Anggaran</label>
		<div class="col-md-8">
			<input type="text" name="tahun_anggaran" value="<?php echo ($this->input->post('tahun_anggaran') ? $this->input->post('tahun_anggaran') : $_paket['tahun_anggaran']); ?>" class="form-control" id="tahun_anggaran" />
		</div>
	</div>
	<div class="form-group">
		<label for="createtime" class="col-md-4 control-label">Createtime</label>
		<div class="col-md-8">
			<input type="text" name="createtime" value="<?php echo ($this->input->post('createtime') ? $this->input->post('createtime') : $_paket['createtime']); ?>" class="form-control" id="createtime" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_paket" class="col-md-4 control-label">Nama Paket</label>
		<div class="col-md-8">
			<input type="text" name="nama_paket" value="<?php echo ($this->input->post('nama_paket') ? $this->input->post('nama_paket') : $_paket['nama_paket']); ?>" class="form-control" id="nama_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="rincian_paket" class="col-md-4 control-label">Rincian Paket</label>
		<div class="col-md-8">
			<input type="text" name="rincian_paket" value="<?php echo ($this->input->post('rincian_paket') ? $this->input->post('rincian_paket') : $_paket['rincian_paket']); ?>" class="form-control" id="rincian_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="detail_paket" class="col-md-4 control-label">Detail Paket</label>
		<div class="col-md-8">
			<input type="text" name="detail_paket" value="<?php echo ($this->input->post('detail_paket') ? $this->input->post('detail_paket') : $_paket['detail_paket']); ?>" class="form-control" id="detail_paket" />
		</div>
	</div>
	<div class="form-group">
		<label for="uang_paket" class="col-md-4 control-label">Uang Paket</label>
		<div class="col-md-8">
			<input type="text" name="uang_paket" value="<?php echo ($this->input->post('uang_paket') ? $this->input->post('uang_paket') : $_paket['uang_paket']); ?>" class="form-control" id="uang_paket" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>
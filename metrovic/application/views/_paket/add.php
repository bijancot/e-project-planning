<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Home</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang</a></li>
                <li class="breadcrumb-item active">Edit Bidang</li>
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
					<?php echo form_open('test-bootstrap/_paket/add',array("class"=>"form-horizontal")); ?>

<!-- <div class="form-group">
	<label for="id_keterangan" class="col-md-4 control-label"> Keterangan</label>
	<div class="col-md-8">
		<select name="id_keterangan" class="form-control">
			<option value="">select _keterangan</option>
			<?php 
			// foreach($all__keterangan as $_keterangan)
			// {
			// 	$selected = ($_keterangan['id_keterangan'] == $this->input->post('id_keterangan')) ? ' selected="selected"' : "";

			// 	echo '<option value="'.$_keterangan['id_keterangan'].'" '.$selected.'>'.$_keterangan['id_keterangan'].'</option>';
			// } 
			?>
		</select>
	</div>
</div> -->
<!-- <div class="form-group">
	<label for="id_penyedia" class="col-md-4 control-label"> Penyedium</label>
	<div class="col-md-8">
		<select name="id_penyedia" class="form-control">
			<option value="">select _penyedium</option>
			<?php 
			// foreach($all__penyedia as $_penyedium)
			// {
			// 	$selected = ($_penyedium['id_penyedia'] == $this->input->post('id_penyedia')) ? ' selected="selected"' : "";

			// 	echo '<option value="'.$_penyedium['id_penyedia'].'" '.$selected.'>'.$_penyedium['id_penyedia'].'</option>';
			// } 
			?>
		</select>
	</div>
</div> -->
<!-- <div class="form-group">
	<label for="id_progress" class="col-md-4 control-label">Progres</label>
	<div class="col-md-8">
		<select name="id_progress" class="form-control">
			<option value="">select progres</option>
			<?php 
			//foreach($all_progress as $progres)
			// {
			// 	$selected = ($progres['id_progress'] == $this->input->post('id_progress')) ? ' selected="selected"' : "";

			// 	echo '<option value="'.$progres['id_progress'].'" '.$selected.'>'.$progres['id_progress'].'</option>';
			// } 
			?>
		</select>
	</div>
</div> -->
<div class="row">
	<div class="col-md-6" style="border:1px solid black">
		<div class="form-group">
		<h5>Nama Paket</h5>
			<div class="input-group">
					<div class="input-group-addon"><i class="ti-archive"></i></div>
			<input type="text" name="nama_paket" value="<?php echo $this->input->post('nama_paket'); ?>" class="form-control" id="nama_paket" />
			</div>
		</div>
		<div class="form-group">
	<h5>Jenis</h5>
	<div>
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-archive"></i></div>
		<select class="select2" name="jenis">
			<option value="">Jenis Paket</option>
			<option value="BARANG">BARANG</option>
            <option value="PEKERJAAN KONSTRUKSI">PEKERJAAN KONSTRUKSI</option>
            <option value="JASA KONSULTANSI">JASA KONSULTANSI</option>
            <option value="JASA LAINNYA">JASA LAINNYA</option>
		</select>
		<!-- <input type="text" name="jenis" value="<?php //echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" /> -->
	</div>
</div>
</div>
		<div class="form-group">
			<h5>Volume</h5>

				<div class="input-group">
				<div class="input-group-addon"><i class="ti-shopping-cart"></i></div>
				<input type="text" name="volume" value="<?php echo $this->input->post('volume'); ?>" class="form-control vertical-spin" id="volume" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="" name="vertical-spin">
			</div>
		</div>
		<div class="form-group ">
		<h5>Sumber Dana</h5>
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-money"></i></div>
			<select class="select2 col-md-12" id="sumberdana" >
				<option value="">Sumber Dana</option>
				<option value="APBD">APBD</option>
				<option value="APBN">APBN</option>
				<!-- <option value="3">PHLN</option>
				<option value="4">PNBP</option>
				<option value="5">APBDP</option>
				<option value="6">APBNP</option>
				<option value="7">BLU</option>
				<option value="8">BLUD</option>
				<option value="9">BUMN</option>
				<option value="10">BUMD</option>
				<option value="11">LAINYA</option> -->
			</select>
	</div>
	</div>
	<div class="form-group">
	<div >
	<h5>Metode</h5>
	<div class="input-group">
				<div class="input-group-addon"><i class="ti-pencil"></i></div>
		<select class="select2" name="metode">
			<option value="">Metode yang digunakan</option>
			<option value="PENUNJUKAN LANGSUNG">PENUNJUKAN LANGSUNG</option>
			<option value="PENGADAAN LANGSUNG">PENGADAAN LANGSUNG</option>
			<option value="E-PURCHASING">E-PURCHASING</option>
			<option value="TENDER">TENDER</option>
			<option value="TENDER CEPAT"></option>
			<option value="SELEKSI">SELEKSI</option>
		</select>
	</div>
</div>
</div>
	<div class="form-group">

	<h5>Tahun Anggaran</h5>
		<div class="col-md-12">

			<label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('tahun_anggaran') ? $this->input->post('tahun_anggaran') : date("Y")); ?>" class="custom-control-input" id="id_ktgori_pengadaan1"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description"><?php echo date("Y");?></span>
			</label>
			<!-- <label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php //echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Swakelola"); ?>" class="custom-control-input" id="id_ktgori_pengadaan2"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Swakelola</span>
			</label> -->
		</div>
</div>
<div>
	<div>
		<h5>Kategori Penyedia</h5>
			<label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Penyedia"); ?>" class="custom-control-input" id="id_ktgori_pengadaan1"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Penyedia</span>
			</label>
			<label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Swakelola"); ?>" class="custom-control-input" id="id_ktgori_pengadaan2"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Swakelola</span>
			</label>
		</div>
	</div>
</div>
	<div class="col-md-6" style="border:1px solid black">
		<div class="form-group">
			<h5>Tanggal Pembuatan</h5>
			<div class="col-md-5">
				<div class="input-group">
					<div class="input-group-addon"><i class="ti-calendar"></i></div>
				<input type="text" class="form-control datepicker" id="tanggal9" name="createtime" value="<?php echo ($this->input->post('createtime') ? $this->input->post('createtime') : date("d/m/Y")); ?>" class="form-control" readonly/>
				</div>
			</div>
		</div>
		<div class="form-group col-md-6">
		<h5>Tanggal Kebutuhan</h5>
				<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
				<input type="text" class="form-control datepicker" name="tgl_kebutuhan" value="<?php echo ($this->input->post('tgl_kebutuhan') ? $this->input->post('tgl_kebutuhan') : date("d/m/Y")); ?>" class="form-control" id="tanggal" />
				</div>
		</div>

		<div class="form-group">
	<label for="tgl_awal_pkerjaan" class="col-md-5 control-label">Tgl Awal Pekerjaan</label>
	<div class="col-md-5">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_awal_pkerjaan" value="<?php echo ($this->input->post('tgl_awal_pkerjaan') ? $this->input->post('tgl_awal_pkerjaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal2" />
	</div>
</div>
</div>
<div class="form-group">
	<label for="tgl_akhir_pkerjaan" class="col-md-4 control-label">Tgl Akhir Pekerjaan</label>
	<div class="col-md-5">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_akhir_pkerjaan" value="<?php echo ($this->input->post('tgl_akhir_pkerjaan') ? $this->input->post('tgl_akhir_pkerjaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal3" />
	</div>
</div>
</div>
	<div class="form-group">
	<label for="tgl_awal_pengadaan" class="col-md-4 control-label">Tgl Awal Pengadaan</label>
	<div class="col-md-5">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_awal_pengadaan" value="<?php echo ($this->input->post('tgl_awal_pengadaan') ? $this->input->post('tgl_awal_pengadaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal4" />
	</div>
</div>
</div>
<div class="form-group">
	<label for="tgl_akhir_pengadaan" class="col-md-4 control-label">Tgl Akhir Pengadaan</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_akhir_pengadaan" value="<?php echo ($this->input->post('tgl_akhir_pengadaan') ? $this->input->post('tgl_akhir_pengadaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal5" />
	</div>
</div>
</div>
</div>
</div>
	<div class="form-group col-md-6">
		<div class="col-md-12">
		<h5>Kategori Penyedia</h5>
			<label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Penyedia"); ?>" class="custom-control-input" id="id_ktgori_pengadaan1"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Penyedia</span>
			</label>
			<label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Swakelola"); ?>" class="custom-control-input" id="id_ktgori_pengadaan2"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Swakelola</span>
			</label>
		</div>
	</div>

	<div class="form-group col-md-6">
		<h5>Sumber Dana</h5>
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-money"></i></div>
			<select class="select2 col-md-12" id="sumberdana" >
				<option value="">Sumber Dana</option>
				<option value="APBD">APBD</option>
				<option value="APBN">APBN</option>
				<!-- <option value="3">PHLN</option>
				<option value="4">PNBP</option>
				<option value="5">APBDP</option>
				<option value="6">APBNP</option>
				<option value="7">BLU</option>
				<option value="8">BLUD</option>
				<option value="9">BUMN</option>
				<option value="10">BUMD</option>
				<option value="11">LAINYA</option> -->
			</select>
	</div>
		<div class="form-group col-md-6">
				<h5>Volume</h5>

				<div class="input-group">
				<div class="input-group-addon"><i class="ti-shopping-cart"></i></div>
				<input type="text" name="volume" value="<?php echo $this->input->post('volume'); ?>" class="form-control vertical-spin" id="volume" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="" name="vertical-spin">
			</div>
		</div>
		<div class="form-group col-md-6">
		<h5>Tanggal Kebutuhan</h5>
				<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
				<input type="text" class="form-control datepicker" name="tgl_kebutuhan" value="<?php echo ($this->input->post('tgl_kebutuhan') ? $this->input->post('tgl_kebutuhan') : date("d/m/Y")); ?>" class="form-control" id="tanggal" />
				</div>
		</div>
</div>
<div class="form-group">
	<label for="tgl_awal_pkerjaan" class="col-md-4 control-label">Tgl Awal Pkerjaan</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_awal_pkerjaan" value="<?php echo ($this->input->post('tgl_awal_pkerjaan') ? $this->input->post('tgl_awal_pkerjaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal2" />
	</div>
</div>
<div class="form-group">
	<label for="tgl_akhir_pkerjaan" class="col-md-4 control-label">Tgl Akhir Pkerjaan</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_akhir_pkerjaan" value="<?php echo ($this->input->post('tgl_akhir_pkerjaan') ? $this->input->post('tgl_akhir_pkerjaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal3" />
	</div>
</div>
<div class="form-group">
	<label for="tgl_awal_pengadaan" class="col-md-4 control-label">Tgl Awal Pengadaan</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_awal_pengadaan" value="<?php echo ($this->input->post('tgl_awal_pengadaan') ? $this->input->post('tgl_awal_pengadaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal4" />
	</div>
</div>
<div class="form-group">
	<label for="tgl_akhir_pengadaan" class="col-md-4 control-label">Tgl Akhir Pengadaan</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" name="tgl_akhir_pengadaan" value="<?php echo ($this->input->post('tgl_akhir_pengadaan') ? $this->input->post('tgl_akhir_pengadaan') : date("d/m/Y")); ?>" class="form-control" id="tanggal5" />
	</div>
</div>
<div class="form-group">
	<label for="jenis" class="col-md-4 control-label">Jenis</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-archive"></i></div>
		<select class="select2" name="jenis">
			<option value="">Jenis Paket</option>
			<option value="BARANG">BARANG</option>
            <option value="PEKERJAAN KONSTRUKSI">PEKERJAAN KONSTRUKSI</option>
            <option value="JASA KONSULTANSI">JASA KONSULTANSI</option>
            <option value="JASA LAINNYA">JASA LAINNYA</option>
		</select>
		<!-- <input type="text" name="jenis" value="<?php //echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" /> -->
	</div>
</div>
</div>
<div class="form-group">
	<div class="col-md-8">
	<h5>Metode</h5>
	<div class="input-group">
				<div class="input-group-addon"><i class="ti-pencil"></i></div>
		<select class="select2" name="metode">
			<option value="">Metode yang digunakan</option>
			<option value="PENUNJUKAN LANGSUNG">PENUNJUKAN LANGSUNG</option>
			<option value="PENGADAAN LANGSUNG">PENGADAAN LANGSUNG</option>
			<option value="E-PURCHASING">E-PURCHASING</option>
			<option value="TENDER">TENDER</option>
			<option value="TENDER CEPAT"></option>
			<option value="SELEKSI">SELEKSI</option>
		</select>
	</div>
</div>
</div>

<div class="form-group">

	<label for="uraian" class="col-md-4 control-label">Uraian</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-comment-alt"></i></div>
		<textarea name="uraian" class="form-control"><?php echo $this->input->post('uraian'); ?></textarea>
		<!-- <input type="text" name="uraian" value="<?php //echo $this->input->post('uraian'); ?>" class="form-control" id="uraian" /> -->
	</div>
</div>
</div>
<div class="form-group">

	<h5 style="padding-left:15px">Tahun Anggaran</h5>
		<div class="col-md-12">

			<label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('tahun_anggaran') ? $this->input->post('tahun_anggaran') : date("Y")); ?>" class="custom-control-input" id="id_ktgori_pengadaan1"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description"><?php echo date("Y");?></span>
			</label>
			<!-- <label class="custom-control custom-radio">
				<input type="radio" name="id_ktgori_pengadaan" value="<?php //echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Swakelola"); ?>" class="custom-control-input" id="id_ktgori_pengadaan2"/>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Swakelola</span>
			</label> -->
		</div>
</div>
<div class="form-group">
	<h5>Tanggal Pembuatan</h5>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-calendar"></i></div>
		<input type="text" class="form-control datepicker" id="tanggal5" name="createtime" value="<?php echo ($this->input->post('createtime') ? $this->input->post('createtime') : date("d/m/Y")); ?>" class="form-control" readonly/>
	</div>
</div>
</div>
<div class="form-group">
	<label for="nama_paket" class="col-md-4 control-label">Nama Paket</label>
	<div class="col-md-8">
		<div class="input-group">
				<div class="input-group-addon"><i class="ti-archive"></i></div>
		<input type="text" name="nama_paket" value="<?php echo $this->input->post('nama_paket'); ?>" class="form-control" id="nama_paket" />
	</div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Modal title</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<?php $this->load->view("/lokasi/add");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- <div class="form-group">
	<label for="rincian_paket" class="col-md-4 control-label">Rincian Paket</label>
	<div class="col-md-8">
		<input type="text" name="rincian_paket" value="<?php //echo $this->input->post('rincian_paket'); ?>" class="form-control" id="rincian_paket" />
	</div>
</div>
<div class="form-group">
	<label for="detail_paket" class="col-md-4 control-label">Detail Paket</label>
	<div class="col-md-8">
		<input type="text" name="detail_paket" value="<?php //echo $this->input->post('detail_paket'); ?>" class="form-control" id="detail_paket" />
	</div>
</div>
<div class="form-group">
	<label for="uang_paket" class="col-md-4 control-label">Uang Paket</label>
	<div class="col-md-8">
		<input type="text" name="uang_paket" value="<?php //echo $this->input->post('uang_paket'); ?>" class="form-control" id="uang_paket" />
	</div>
</div> -->

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
</div>
</div>
</div>
</div>
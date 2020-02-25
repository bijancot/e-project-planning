

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
					<?php echo form_open('test-bootstrap/tr_lokasi_paket/edit/'.$tr_lokasi_paket['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_paket" class="col-md-4 control-label"> Paket</label>
		<div class="col-md-8">
			<select name="id_paket" class="form-control">
				<option value="">select _paket</option>
				<?php 
				foreach($all__paket as $_paket)
				{
					$selected = ($_paket['id_paket'] == $tr_lokasi_paket['id_paket']) ? ' selected="selected"' : "";

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
					$selected = ($kec_kel['id_kelurahan'] == $tr_lokasi_paket['id_kec_kel']) ? ' selected="selected"' : "";

					echo '<option value="'.$kec_kel['id_kelurahan'].'" '.$selected.'>'.$kec_kel['id_kelurahan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-4 control-label">Keterangan</label>
		<div class="col-md-8">
			<input type="text" name="keterangan" value="<?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $tr_lokasi_paket['keterangan']); ?>" class="form-control" id="keterangan" />
		</div>
	</div>
	<div class="form-group">
		<label for="createdDate" class="col-md-4 control-label">CreatedDate</label>
		<div class="col-md-8">
			<input type="text" name="createdDate" value="<?php echo ($this->input->post('createdDate') ? $this->input->post('createdDate') : $tr_lokasi_paket['createdDate']); ?>" class="form-control" id="createdDate" />
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
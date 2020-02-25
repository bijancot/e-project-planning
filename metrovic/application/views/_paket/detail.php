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
                    <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i>
                        <?php echo $msg; ?> &nbsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                    <?php endif ?>
                        <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                            <?php if (isset($error_msg)): ?>
                                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
                                    <?php echo $error_msg; ?> &nbsp;
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
                                                                    <?php echo form_open('test-bootstrap/_paket/edit/'.$_paket['id_paket'],array("class"=>"form-horizontal")); ?>
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
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <h5>Nama Paket</h5>
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"><i class="ti-archive"></i></div>
                                                                                        <input type="text" class="form-control maininput col-md-12" name="nama_paket" value="<?php echo ($this->input->post('nama_paket') ? $this->input->post('nama_paket') : $_paket['nama_paket']); ?>" id="nama_paket" readonly/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <h5>Kegiatan</h5>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"><i class="ti-archive"></i></div>
                                                                                            <select class="select2 col-md-12 tydac" name="kegiatan">
                                                                                                <?php
                                    foreach($all__kegiatan as $_kegiatan){
                                       echo '<option value="'.$_kegiatan['id_kegiatan'].'">'.$_kegiatan['kegiatan'].'</option>';
                                    }
                                 ?>
                                                                                                    <option value="0">Tidak ada</option>
                                                                                            </select>
                                                                                            <!-- <input type="text" name="jenis" value="<?php //echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" /> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="form-group col-md-7">
                                                                                        <h5>Jenis</h5>
                                                                                        <div>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-archive"></i></div>
                                                                                                <select class="select2 tydac" name="jenis" id="jenis1">
                                                                                                    <?php
								 	$option = array(
										'BARANG'=>'BARANG',
										'PEKERJAAN KONSTRUKSI'=>'PEKERJAAN KONSTRUKSI',
										'JASA KONSULTANSI'=>'JASA KONSULTANSI',
										'JASA LAINNYA'=>'JASA LAINNYA',
									 );

									 $op = array_keys($option);

									 for($r=0;$r<sizeof($op);$r++){
										if($op[$i]==$_paket['jenis']){
											$selected='selected = "selected"';
										}
										else{
											$selected='';
										}
										echo '<option value='.$op[$r].' '.$selected.'>'.$op[$r].'</option>';
									 }
								 ?>
                                                                                                </select>
                                                                                                <!-- <input type="text" name="jenis" value="<?php //echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" /> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group col-md-5">
                                                                                        <h5>Volume</h5>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"><i class="ti-shopping-cart"></i></div>
                                                                                            <input type="text" name="volume" value="<?php echo ($this->input->post('volume') ? $this->input->post('volume') : $_paket['volume']); ?>" class="form-control vertical-spin" id="volume" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="" name="vertical-spin" disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="form-group col-md-5">
                                                                                        <h5>Sumber Dana</h5>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"><i class="ti-money"></i></div>
                                                                                            <select id="sumberdana" name="sumberdana" class="select2 col-md-12 tydac">
                                                                                                <option value=" ">Sumber Dana</option>
                                                                                                <?php

							$options = array(
								'APBD'	=> 'APBD',
								'APBN'	=> 'APBN',
							);

							$op = array_keys($options);

							for($i=0;$i<sizeof($op);$i++){
								if($op[$i]==$_paket['sumberdana']){
									$selected='selected = "selected"';
								}
								else{
									$selected='';
								}
								echo '<option value='.$op[$i].' '.$selected.'>'.$op[$i].'</option>';
							}

							//echo form_dropdown('sumberdana', $options," ",$selected);
							?>
                                                                                            </select>
                                                                                            <!-- <select class="select2 col-md-12" id="sumberdana" name="sumberdana">
								<option value="">Sumber Dana</option>
								<option value="APBD">APBD</option>
								<option value="APBN">APBN</option>
								<option value="3">PHLN</option>
									<option value="4">PNBP</option>
									<option value="5">APBDP</option>
									<option value="6">APBNP</option>
									<option value="7">BLU</option>
									<option value="8">BLUD</option>
									<option value="9">BUMN</option>
									<option value="10">BUMD</option>
									<option value="11">LAINYA</option>
							</select> -->
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group col-md-7">
                                                                                        <div>
                                                                                            <h5>Metode</h5>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                                                                                <select name="metode" class="select2 tydac">
                                                                                                    <?php

									$options = array(
										'PENUNJUKAN LANGSUNG'	=> 'PENUNJUKAN LANGSUNG',
										'PENGADAAN LANGSUNG'	=> 'PENGADAAN LANGSUNG',
										'E-PURCHASING'	=> 'E-PURCHASING',
										'TENDER'	=> 'TENDER',
										'TENDER CEPAT'	=> 'TENDER CEPAT',
										'SELEKSI'	=> 'SELEKSI',
									);
									$op = array_keys($options);

							for($i=0;$i<sizeof($op);$i++){
								if($op[$i]==$_paket['metode']){
									$selected='selected = "selected"';
								}
								else{
									$selected='';
								}
								echo '<option value='.$op[$i].' '.$selected.'>'.$op[$i].'</option>';
							}
							//echo form_dropdown('metode', $options," ",'class="select2 col-md-12"');
							?>
                                                                                                </select>
                                                                                                <!-- <select class="select2" name="metode">
                                 <option value="">Metode yang digunakan</option>
                                 <option value="PENUNJUKAN LANGSUNG">PENUNJUKAN LANGSUNG</option>
                                 <option value="PENGADAAN LANGSUNG">PENGADAAN LANGSUNG</option>
                                 <option value="E-PURCHASING">E-PURCHASING</option>
                                 <option value="TENDER">TENDER</option>
                                 <option value="TENDER CEPAT"></option>
                                 <option value="SELEKSI">SELEKSI</option>
                              </select> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="form-group col-md-6">
                                                                                        <h5>Tahun Anggaran</h5>
                                                                                        <div class="col-md-12">
                                                                                            <label class="custom-control custom-radio">
                                                                                                <input type="radio" name="tahun_anggaran" value="<?php echo ($this->input->post('tahun_anggaran') ? $this->input->post('tahun_anggaran') : $_paket['tahun_anggaran']); ?>" <?php if($_paket[ 'tahun_anggaran']==date( "Y")){ echo "checked"; } ?> class="custom-control-input" id="tahun_anggaran"/>
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

                                                                                    <div class="col-md-6">
                                                                                        <div>
                                                                                            <h5>Kategori Penyedia</h5>
                                                                                            <label class="custom-control custom-radio">
                                                                                                <input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : " Penyedia ");?>" <?php if($_paket[ 'id_ktgori_pengadaan']=="Penyedia" ){ echo "checked"; } ?> class="custom-control-input" id="id_ktgori_pengadaan1"/>
                                                                                                <span class="custom-control-indicator"></span>
                                                                                                <span class="custom-control-description">Penyedia</span>
                                                                                            </label>
                                                                                            <label class="custom-control custom-radio">
                                                                                                <input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : " Swakelola "); ?>" class="custom-control-input" <?php if($_paket[ 'id_ktgori_pengadaan']=="Swakelola" ){ echo "checked"; } ?> id="id_ktgori_pengadaan2"/>
                                                                                                <span class="custom-control-indicator"></span>
                                                                                                <span class="custom-control-description">Swakelola</span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <div class="col-md-5">
                                                                                        <div class="form-group">
                                                                                            <h5>Tanggal Pembuatan Paket</h5>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                                                                <input type="text" class="form-control datepicker maininput" id="tanggal9" name="createtime" value="<?php echo ($this->input->post('createtime') ? $this->input->post('createtime') : date(" d/m/Y ", strtotime($_paket['createtime']))); ?>" class="form-control" readonly/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-5">
                                                                                        <div class="form-group ">
                                                                                            <h5>Tanggal Kebutuhan</h5>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                                                                <input type="text" class="form-control datepicker maininput" name="tgl_kebutuhan" value="<?php echo ($this->input->post('tgl_kebutuhan') ? $this->input->post('tgl_kebutuhan') : date(" d/m/Y ", strtotime($_paket['tgl_kebutuhan']))); ?>" class="form-control" id="tanggal" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-5">
                                                                                        <div class="form-group">
                                                                                            <h5>Tanggal Awal Pengerjaan</h5>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                                                                <input type="text" class="form-control datepicker maininput" name="tgl_awal_pkerjaan" value="<?php echo ($this->input->post('tgl_awal_pkerjaan') ? $this->input->post('tgl_awal_pkerjaan') : date(" d/m/Y ", strtotime($_paket['tgl_awal_pkerjaan']))); ?>" class="form-control" id="tanggal2" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-1">
                                                                                        <br/>
                                                                                        <br/>
                                                                                        <h5 style="text-align:center">-</h5>
                                                                                    </div>
                                                                                    <div class="col-md-5">
                                                                                        <div class="form-group">
                                                                                            <h5>Tanggal Akhir Pengerjaan</h5>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                                                                <input type="text" class="form-control datepicker maininput" name="tgl_akhir_pkerjaan" value="<?php echo ($this->input->post('tgl_akhir_pkerjaan') ? $this->input->post('tgl_akhir_pkerjaan') : date(" d/m/Y ", strtotime($_paket['tgl_akhir_pkerjaan']))); ?>" class="form-control" id="tanggal3" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <h4>Pengadaan</h4>
                                                                                    </div>
                                                                                    <!-- <h5>Pengadaan</h5><br/> -->
                                                                                    <div class="col-md-5">
                                                                                        <div class="form-group">
                                                                                            <p>Tanggal Awal</p>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                                                                <input type="text" class="form-control datepicker maininput" name="tgl_awal_pengadaan" value="<?php echo ($this->input->post('tgl_awal_pengadaan') ? $this->input->post('tgl_awal_pengadaan') : date(" d/m/Y ", strtotime($_paket['tgl_awal_pengadaan']))); ?>" class="form-control" id="tanggal4" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-1">
                                                                                        <br/>
                                                                                        <br/>
                                                                                        <h5 style="text-align:center">-</h5>
                                                                                    </div>
                                                                                    <div class="col-md-5">
                                                                                        <div class="form-group">
                                                                                            <p>Tanggal Akhir</p>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                                                                <input type="text" class="form-control datepicker maininput" name="tgl_akhir_pengadaan" value="<?php echo ($this->input->post('tgl_akhir_pengadaan') ? $this->input->post('tgl_akhir_pengadaan') : date(" d/m/Y ", strtotime($_paket['tgl_akhir_pengadaan']))); ?>" class="form-control" id="tanggal5" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <p>Uraian</p>
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"><i class="ti-comment-alt"></i></div>
                                                                                        <textarea name="uraian" id="textarea" style="height:200px" class="form-control">
                                                                                            <?php echo ($this->input->post('uraian') ? $this->input->post('uraian') : $_paket['uraian']); ?>
                                                                                        </textarea>
                                                                                        <!-- <input type="text" name="uraian" value="<?php //echo $this->input->post('uraian'); ?>" class="form-control" id="uraian" /> -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- <div class="form-group col-md-6">
                  <div class="col-md-12">
                     <h5>Kategori Penyedia</h5>
                     <label class="custom-control custom-radio">
                     <input type="radio" name="id_ktgori_pengadaan" value="<?php //echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Penyedia"); ?>" class="custom-control-input" id="id_ktgori_pengadaan1"/>
                     <span class="custom-control-indicator"></span>
                     <span class="custom-control-description">Penyedia</span>
                     </label>
                     <label class="custom-control custom-radio">
                     <input type="radio" name="id_ktgori_pengadaan" value="<?php //echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Swakelola"); ?>" class="custom-control-input" id="id_ktgori_pengadaan2"/>
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
                         <option value="3">PHLN</option>
                           <option value="4">PNBP</option>
                           <option value="5">APBDP</option>
                           <option value="6">APBNP</option>
                           <option value="7">BLU</option>
                           <option value="8">BLUD</option>
                           <option value="9">BUMN</option>
                           <option value="10">BUMD</option>
                           <option value="11">LAINYA</option> -->
                                                                        <!-- </select>
                  </div>
                  <div class="form-group col-md-6">
                     <h5>Volume</h5>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="ti-shopping-cart"></i></div>
                        <input type="text" name="volume" value="<?php //echo $this->input->post('volume'); ?>" class="form-control vertical-spin" id="volume" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="" name="vertical-spin">
                     </div>
                  </div>
                  <div class="form-group col-md-6">
                     <h5>Tanggal Kebutuhan</h5>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="ti-calendar"></i></div>
                        <input type="text" class="form-control datepicker" name="tgl_kebutuhan" value="<?php //e//cho ($this->input->post('tgl_kebutuhan') ? $this->input->post('tgl_kebutuhan') : date("d/m/Y")); ?>" class="form-control" id="tanggal" />
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
						   <div class="col-md-8">
                           <div class="form-group">
                              <h5>Jenis Paket</h5>
                                 <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-archive"></i></div>
                                    <select class="select2" name="jenis">
                                       <option value="">Jenis Paket</option>
                                       <option value="BARANG">BARANG</option>
                                       <option value="PEKERJAAN KONSTRUKSI">PEKERJAAN KONSTRUKSI</option>
                                       <option value="JASA KONSULTANSI">JASA KONSULTANSI</option>
                                       <option value="JASA LAINNYA">JASA LAINNYA</option>
                                    </select>
                                    <input type="text" name="jenis" value="<?php //echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" /> -->
                                                                        <!-- </div>
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
                                    <textarea name="uraian" class="form-control"><?php //echo $this->input->post('uraian'); ?></textarea> -->
                                                                        <!-- <input type="text" name="uraian" value="<?php //echo $this->input->post('uraian'); ?>" class="form-control" id="uraian" /> -->
                                                                        <!-- </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <h5 style="padding-left:15px">Tahun Anggaran</h5>
                              <div class="col-md-12">
                                 <label class="custom-control custom-radio">
                                 <input type="radio" name="id_ktgori_pengadaan" value="<?php echo ($this->input->post('tahun_anggaran') ? $this->input->post('tahun_anggaran') : date("Y")); ?>" class="custom-control-input" id="id_ktgori_pengadaan1"/>
                                 <span class="custom-control-indicator"></span>
                                 <span class="custom-control-description"><?php echo date("Y");?></span>
                                 </label> -->
                                                                        <!-- <label class="custom-control custom-radio">
                                    <input type="radio" name="id_ktgori_pengadaan" value="<?php //echo ($this->input->post('id_ktgori_pengadaan') ? $this->input->post('id_ktgori_pengadaan') : "Swakelola"); ?>" class="custom-control-input" id="id_ktgori_pengadaan2"/>
                                    	<span class="custom-control-indicator"></span>
                                    	<span class="custom-control-description">Swakelola</span>
                                    </label> -->
                                                                        <!-- </div>
                           </div>
                           <div class="form-group">
                              <h5>Tanggal Pembuatan</h5>
                              <div class="col-md-8">
                                 <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                    <input type="text" class="form-control datepicker" id="tanggal5" name="createtime" value="<?php echo ($this->input->post('createtime') ? $this->input->post('createtime') : date("d/m/Y")); ?>" class="form-control" readonly/>
                                 </div>
                              </div>
                           </div> -->
                                                                        <!-- <div class="form-group">
                              <label for="nama_paket" class="col-md-4 control-label">Nama Paket</label>
                              <div class="col-md-8">
                                 <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-archive"></i></div>
                                    <input type="text" name="nama_paket" value="<?php echo $this->input->post('nama_paket'); ?>" class="form-control" id="nama_paket" />
                                 </div> 
                              </div> -->
                                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Launch demo modal
                              </button> -->
                                                                        <!-- Modal -->
                                                                        <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              </div> -->
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

                                                                        <?php echo form_close(); ?>
                                                                            <div class="table-responsive m-t-40">
                                                                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>ID</th>
                                                                                            <th>Id Paket</th>
                                                                                            <th>Id Kec Kel</th>
                                                                                            <th>Keterangan</th>
                                                                                            <th style="width:12%">Opsi </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($tr_lokasi_paket as $t){ ?>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <?php echo $t['id']; ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo $t['id_paket']; ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo $t['id_kec_kel']; ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo $t['keterangan']; ?>
                                                                                                </td>
                                                                                                <!-- <td><?php //echo $t['createdDate']; ?></td> -->
                                                                                                <td>
                                                                                                    <a href="<?php echo site_url('test-bootstrap/tr_lokasi_paket/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <?php echo form_open('test-bootstrap/_Tr',array("class"=>"form-horizontal")); ?>

                                                                                <!-- <div class="form-group"> -->
                                                                                <!-- <label for="id_paket" class="col-md-4 control-label"> Paket</label>
      <div class="col-md-8"> -->
                                                                                <input type="hidden" name="id_paket" value="<?php echo $_paket['id_paket']?>">
                                                                                <!-- <select name="id_paket" class="form-control"> -->
                                                                                <!-- <option value="">select _paket</option> -->
                                                                              
                                                                                    <!-- </select> -->
                                                                                    <!-- </div> -->
                                                                                    <!-- </div> -->
                                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                                                        Launch demo modal
                                                                                    </button>
                                                                                    <!-- Modal -->
                                                                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h2 class="modal-title" id="exampleModalLongTitle">Detail Lokasi</h2>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                <?php echo form_open('test-bootstrap/_Tr',array("class"=>"form-horizontal")); ?>
                                                                                       <input type="hidden" name="id_paket" value="<?php echo $_paket['id_paket']?>">
                                                                                    <div class="form-group">
                                                                                        <label for="id_kec_kel" class="col-md-4 control-label">Kelurahan - Kecamatan </label>
                                                                                        <div class="col-md-8">
                                                                                            <select name="id_kec_kel" class="form-control select2" style="width:100%">
                                                                                                <option value="">Pilih Kelurahan</option>
                                                                                                <?php 
                                                                                                foreach($all_kec_kel as $kec_kel)
                                                                                                {
                                                                                                   $selected = ($kec_kel['id_kelurahan'] == $this->input->post('id_kec_kel')) ? ' selected="selected"' : "";

                                                                                                   echo '<option value="'.$kec_kel['id_kelurahan'].'" '.$selected.'>'.$kec_kel['nama_kelurahan']." - ".$kec_kel['nama_kecamatan'].'</option>';
                                                                                                } 
                                                                                                ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="keterangan" class="col-md-4 control-label">Keterangan</label>
                                                                                        <div class="col-md-8">
                                                                                            <textarea name="keterangan" class="form-control" id="keterangan"></textarea>
                                                                                            <!-- <input type="text" name="keterangan" value="<?php //echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" /> -->
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-offset-4 col-sm-8">
                                                                                            <button type="submit" class="btn btn-success">Save</button>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php echo form_close(); ?>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                   
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
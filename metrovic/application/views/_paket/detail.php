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
            <?php endif; ?>
            <div class="table-responsive m-t-40">
                    <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <?php foreach($_paket as $u){ ?>
                                <tr>
                                 <td colspan="2" align="center">
                                 <?php echo "<strong>Detail Paket</strong>"; ?>
                                 &nbsp;
                                 </td>
                               </tr>
                                <tr>
                                  <tr>
                                    <td>Nama Paket</td>
                                    <td><?php echo $u['nama_paket']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Jenis Pengadaan</td>
                                    <td><?php echo $u['id_ktgori_pengadaan']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Sumber Dana</td>
                                    <td><?php echo $u['sumberdana']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Volume</td>
                                    <td><?php echo $u['volume']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Tanggal Kebutuhan</td>
                                    <td><?php echo $u['tgl_kebutuhan']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Waktu Pengerjaan</td>
                                    <td><?php echo $u['tgl_awal_pkerjaan'].' s.d '.$u['tgl_akhir_pkerjaan']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Waktu Pengadaan</td>
                                    <td><?php echo $u['tgl_awal_pengadaan'].' s.d '.$u['tgl_akhir_pengadaan']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Jenis</td>
                                    <td><?php echo $u['jenis']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Metode</td>
                                    <td><?php echo $u['metode']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Uraian</td>
                                    <td><?php echo $u['uraian']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Tahun Anggaran</td>
                                    <td><?php echo $u['tahun_anggaran']; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Rincian Paket</td>
                                    <td><?php echo $u['rincian_paket']; ?></td>
                                  </tr>
                                </tr>
                                <?php } ?>
                            </thead>
                        </table>
                        </div>
                        <div class="table-responsive m-t-40">
                           <h3>Lokasi Paket</h3>
                              <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                 
                                          <thead>
                                             <tr>
                                       <th>No</th>
                                       <th>Provinsi</th>
                                       <th>Kecamatan</th>
                                       <th>Desa/Kelurahan</th>
                                       <th>Keterangan</th>
                                             </tr>
                                          </thead>
                                    <tbody>
                                    <?php
                                    $a=1;
                                    foreach ($tr_lokasi_paket as $t){ ?>
                                    <tr>
                                       <td><?php echo $a; ?></td>
                                       <td><?php echo "Jawa Timur"; ?></td>
                                       <td><?php echo $t['nama_kecamatan']; ?></td>
                                       <td><?php echo $t['nama_kelurahan']; ?></td>
                                       <td><?php echo $t['keterangan']; ?></td>
                                      
                                    </tr>
                                    <?php 
                                       $a=$a+1;
                                    } ?>
                                    </tbody>
                                       </table>
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
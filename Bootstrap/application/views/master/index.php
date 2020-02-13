<div class="pull-right">
	<a href="<?php echo site_url('master/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Master</th>
		<th>Tahun</th>
		<th>Kode Daerah</th>
		<th>Kd Rek 1</th>
		<th>Nm Rek 1</th>
		<th>Kd Rek 2</th>
		<th>Nm Rek 2</th>
		<th>Kd Rek 3</th>
		<th>Nm Rek 3</th>
		<th>Kd Rek 4</th>
		<th>Nm Rek 4</th>
		<th>Kd Rek 5</th>
		<th>Nm Rek 5</th>
		<th>Kd Urusan</th>
		<th>Nm Urusan</th>
		<th>Kd Bidang</th>
		<th>Nm Bidang</th>
		<th>Kd Unit</th>
		<th>Nm Unit</th>
		<th>Kd Sub</th>
		<th>Nm Sub</th>
		<th>Kd Prog</th>
		<th>Ket Program</th>
		<th>Kd Keg</th>
		<th>Nm Kegiatan</th>
		<th>Kd Ket</th>
		<th>Keterangan</th>
		<th>No Id</th>
		<th>Rincian</th>
		<th>Jumlah</th>
		<th>Satuan</th>
		<th>Harga</th>
		<th>Kd Fungsi</th>
		<th>Nm Fungsi</th>
		<th>Kd Urusan1</th>
		<th>Nm Urusan1</th>
		<th>Kd Bidang1</th>
		<th>Nm Bidang1</th>
		<th>Total</th>
		<th>Id Skpd</th>
		<th>Actions</th>
    </tr>
	<?php foreach($master as $m){ ?>
    <tr>
		<td><?php echo $m['id_master']; ?></td>
		<td><?php echo $m['tahun']; ?></td>
		<td><?php echo $m['kode_daerah']; ?></td>
		<td><?php echo $m['kd_rek_1']; ?></td>
		<td><?php echo $m['nm_rek_1']; ?></td>
		<td><?php echo $m['kd_rek_2']; ?></td>
		<td><?php echo $m['nm_rek_2']; ?></td>
		<td><?php echo $m['kd_rek_3']; ?></td>
		<td><?php echo $m['nm_rek_3']; ?></td>
		<td><?php echo $m['kd_rek_4']; ?></td>
		<td><?php echo $m['nm_rek_4']; ?></td>
		<td><?php echo $m['kd_rek_5']; ?></td>
		<td><?php echo $m['nm_rek_5']; ?></td>
		<td><?php echo $m['kd_urusan']; ?></td>
		<td><?php echo $m['nm_urusan']; ?></td>
		<td><?php echo $m['kd_bidang']; ?></td>
		<td><?php echo $m['nm_bidang']; ?></td>
		<td><?php echo $m['kd_unit']; ?></td>
		<td><?php echo $m['nm_unit']; ?></td>
		<td><?php echo $m['kd_sub']; ?></td>
		<td><?php echo $m['nm_sub']; ?></td>
		<td><?php echo $m['kd_prog']; ?></td>
		<td><?php echo $m['ket_program']; ?></td>
		<td><?php echo $m['kd_keg']; ?></td>
		<td><?php echo $m['nm_kegiatan']; ?></td>
		<td><?php echo $m['kd_ket']; ?></td>
		<td><?php echo $m['keterangan']; ?></td>
		<td><?php echo $m['no_id']; ?></td>
		<td><?php echo $m['rincian']; ?></td>
		<td><?php echo $m['jumlah']; ?></td>
		<td><?php echo $m['satuan']; ?></td>
		<td><?php echo $m['harga']; ?></td>
		<td><?php echo $m['kd_fungsi']; ?></td>
		<td><?php echo $m['nm_fungsi']; ?></td>
		<td><?php echo $m['kd_urusan1']; ?></td>
		<td><?php echo $m['nm_urusan1']; ?></td>
		<td><?php echo $m['kd_bidang1']; ?></td>
		<td><?php echo $m['nm_bidang1']; ?></td>
		<td><?php echo $m['total']; ?></td>
		<td><?php echo $m['id_skpd']; ?></td>
		<td>
            <a href="<?php echo site_url('master/edit/'.$m['id_master']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('master/remove/'.$m['id_master']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

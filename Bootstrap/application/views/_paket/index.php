<div class="pull-right">
	<a href="<?php echo site_url('_paket/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Paket</th>
		<th>Id Keterangan</th>
		<th>Id Penyedia</th>
		<th>Id Progress</th>
		<th>Id Ktgori Pengadaan</th>
		<th>Sumberdana</th>
		<th>Volume</th>
		<th>Tgl Kebutuhan</th>
		<th>Tgl Awal Pkerjaan</th>
		<th>Tgl Akhir Pkerjaan</th>
		<th>Tgl Awal Pengadaan</th>
		<th>Tgl Akhir Pengadaan</th>
		<th>Jenis</th>
		<th>Metode</th>
		<th>Uraian</th>
		<th>Tahun Anggaran</th>
		<th>Createtime</th>
		<th>Nama Paket</th>
		<th>Rincian Paket</th>
		<th>Detail Paket</th>
		<th>Uang Paket</th>
		<th>Actions</th>
    </tr>
	<?php foreach($_paket as $_){ ?>
    <tr>
		<td><?php echo $_['id_paket']; ?></td>
		<td><?php echo $_['id_keterangan']; ?></td>
		<td><?php echo $_['id_penyedia']; ?></td>
		<td><?php echo $_['id_progress']; ?></td>
		<td><?php echo $_['id_ktgori_pengadaan']; ?></td>
		<td><?php echo $_['sumberdana']; ?></td>
		<td><?php echo $_['volume']; ?></td>
		<td><?php echo $_['tgl_kebutuhan']; ?></td>
		<td><?php echo $_['tgl_awal_pkerjaan']; ?></td>
		<td><?php echo $_['tgl_akhir_pkerjaan']; ?></td>
		<td><?php echo $_['tgl_awal_pengadaan']; ?></td>
		<td><?php echo $_['tgl_akhir_pengadaan']; ?></td>
		<td><?php echo $_['jenis']; ?></td>
		<td><?php echo $_['metode']; ?></td>
		<td><?php echo $_['uraian']; ?></td>
		<td><?php echo $_['tahun_anggaran']; ?></td>
		<td><?php echo $_['createtime']; ?></td>
		<td><?php echo $_['nama_paket']; ?></td>
		<td><?php echo $_['rincian_paket']; ?></td>
		<td><?php echo $_['detail_paket']; ?></td>
		<td><?php echo $_['uang_paket']; ?></td>
		<td>
            <a href="<?php echo site_url('_paket/edit/'.$_['id_paket']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('_paket/remove/'.$_['id_paket']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

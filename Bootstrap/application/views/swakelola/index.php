<div class="pull-right">
	<a href="<?php echo site_url('swakelola/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id P Swakelola</th>
		<th>Nama Satker</th>
		<th>Program</th>
		<th>Kegiatan</th>
		<th>Nama Paket</th>
		<th>Volume</th>
		<th>Tipe Swakelola</th>
		<th>Sumber Dana</th>
		<th>Detail Dana Sw</th>
		<th>Kecamatan</th>
		<th>Kelurahan</th>
		<th>Detail Lokasi</th>
		<th>Pagu Rup</th>
		<th>Awal Pekerjaan</th>
		<th>Akhir Pekerjaan</th>
		<th>Nama Ppk</th>
		<th>Nip Ppk</th>
		<th>Tanggal Terakhir Di Update</th>
		<th>Status Aktif</th>
		<th>Id Satker</th>
		<th>Actions</th>
    </tr>
	<?php foreach($swakelola as $s){ ?>
    <tr>
		<td><?php echo $s['id_p_swakelola']; ?></td>
		<td><?php echo $s['nama_satker']; ?></td>
		<td><?php echo $s['program']; ?></td>
		<td><?php echo $s['kegiatan']; ?></td>
		<td><?php echo $s['nama_paket']; ?></td>
		<td><?php echo $s['volume']; ?></td>
		<td><?php echo $s['tipe_swakelola']; ?></td>
		<td><?php echo $s['sumber_dana']; ?></td>
		<td><?php echo $s['detail_dana_sw']; ?></td>
		<td><?php echo $s['kecamatan']; ?></td>
		<td><?php echo $s['kelurahan']; ?></td>
		<td><?php echo $s['detail_lokasi']; ?></td>
		<td><?php echo $s['pagu_rup']; ?></td>
		<td><?php echo $s['awal_pekerjaan']; ?></td>
		<td><?php echo $s['akhir_pekerjaan']; ?></td>
		<td><?php echo $s['nama_ppk']; ?></td>
		<td><?php echo $s['nip_ppk']; ?></td>
		<td><?php echo $s['tanggal_terakhir_di_update']; ?></td>
		<td><?php echo $s['status_aktif']; ?></td>
		<td><?php echo $s['id_satker']; ?></td>
		<td>
            <a href="<?php echo site_url('swakelola/edit/'.$s['id_p_swakelola']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('swakelola/remove/'.$s['id_p_swakelola']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

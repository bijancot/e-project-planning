<div class="pull-right">
	<a href="<?php echo site_url('penyedium/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id P Progress</th>
		<th>Id Swakelola</th>
		<th>Tanggal Terakhir Di Update</th>
		<th>Status Aktif</th>
		<th>Id Satker</th>
		<th>Nama Satker</th>
		<th>Program</th>
		<th>Kegiatan</th>
		<th>Nama Paket</th>
		<th>Volume</th>
		<th>Jenis Pengadaan</th>
		<th>Metode Pemilihan</th>
		<th>Sumber Dana</th>
		<th>Detail Sumberdana</th>
		<th>Kecamatan</th>
		<th>Kelurahan</th>
		<th>Detail Lokasi</th>
		<th>Pagu Rup</th>
		<th>Hps Penyedia</th>
		<th>Nilai Kontrak</th>
		<th>Sisa Pagu</th>
		<th>Awal Pengadaan</th>
		<th>Akhir Pengadaan</th>
		<th>Awal Pekerjaan</th>
		<th>Akhir Pekerjaan</th>
		<th>Tanggal Kebutuhan</th>
		<th>Nama Ppk</th>
		<th>Nip Ppk</th>
		<th>Spesifikasi</th>
		<th>Actions</th>
    </tr>
	<?php foreach($penyedia as $p){ ?>
    <tr>
		<td><?php echo $p['id_p_progress']; ?></td>
		<td><?php echo $p['id_swakelola']; ?></td>
		<td><?php echo $p['tanggal_terakhir_di_update']; ?></td>
		<td><?php echo $p['status_aktif']; ?></td>
		<td><?php echo $p['id_satker']; ?></td>
		<td><?php echo $p['nama_satker']; ?></td>
		<td><?php echo $p['program']; ?></td>
		<td><?php echo $p['kegiatan']; ?></td>
		<td><?php echo $p['nama_paket']; ?></td>
		<td><?php echo $p['volume']; ?></td>
		<td><?php echo $p['jenis_pengadaan']; ?></td>
		<td><?php echo $p['metode_pemilihan']; ?></td>
		<td><?php echo $p['sumber_dana']; ?></td>
		<td><?php echo $p['detail_sumberdana']; ?></td>
		<td><?php echo $p['kecamatan']; ?></td>
		<td><?php echo $p['kelurahan']; ?></td>
		<td><?php echo $p['detail_lokasi']; ?></td>
		<td><?php echo $p['pagu_rup']; ?></td>
		<td><?php echo $p['hps_penyedia']; ?></td>
		<td><?php echo $p['nilai_kontrak']; ?></td>
		<td><?php echo $p['sisa_pagu']; ?></td>
		<td><?php echo $p['awal_pengadaan']; ?></td>
		<td><?php echo $p['akhir_pengadaan']; ?></td>
		<td><?php echo $p['awal_pekerjaan']; ?></td>
		<td><?php echo $p['akhir_pekerjaan']; ?></td>
		<td><?php echo $p['tanggal_kebutuhan']; ?></td>
		<td><?php echo $p['nama_ppk']; ?></td>
		<td><?php echo $p['nip_ppk']; ?></td>
		<td><?php echo $p['spesifikasi']; ?></td>
		<td>
            <a href="<?php echo site_url('penyedium/edit/'.$p['id_p_progress']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('penyedium/remove/'.$p['id_p_progress']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

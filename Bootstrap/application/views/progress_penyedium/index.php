<div class="pull-right">
	<a href="<?php echo site_url('progress_penyedium/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Progress Penyedia</th>
		<th>Bulan Realisasi</th>
		<th>Rencana Keuangan</th>
		<th>Ren Keuangan Persen</th>
		<th>Realisasi Keuangan</th>
		<th>Rea Keuangan Persen</th>
		<th>Rencana Fisik</th>
		<th>Ren Fisik Volume</th>
		<th>Realisasi Fisik</th>
		<th>Rea Fisik Volume</th>
		<th>Realisasi Fisik Foto</th>
		<th>Tahapan Prgres Pnyedia</th>
		<th>No Kontrak</th>
		<th>Tgl Kontrak</th>
		<th>Nama Pelaksana</th>
		<th>Alamat Pelaksana</th>
		<th>Id P Penyedia</th>
		<th>Id Dinas</th>
		<th>Keterangan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($progress_penyedia as $p){ ?>
    <tr>
		<td><?php echo $p['id_progress_penyedia']; ?></td>
		<td><?php echo $p['bulan_realisasi']; ?></td>
		<td><?php echo $p['rencana_keuangan']; ?></td>
		<td><?php echo $p['ren_keuangan_persen']; ?></td>
		<td><?php echo $p['realisasi_keuangan']; ?></td>
		<td><?php echo $p['rea_keuangan_persen']; ?></td>
		<td><?php echo $p['rencana_fisik']; ?></td>
		<td><?php echo $p['ren_fisik_volume']; ?></td>
		<td><?php echo $p['realisasi_fisik']; ?></td>
		<td><?php echo $p['rea_fisik_volume']; ?></td>
		<td><?php echo $p['realisasi_fisik_foto']; ?></td>
		<td><?php echo $p['tahapan_prgres_pnyedia']; ?></td>
		<td><?php echo $p['no_kontrak']; ?></td>
		<td><?php echo $p['tgl_kontrak']; ?></td>
		<td><?php echo $p['nama_pelaksana']; ?></td>
		<td><?php echo $p['alamat_pelaksana']; ?></td>
		<td><?php echo $p['id_p_penyedia']; ?></td>
		<td><?php echo $p['id_dinas']; ?></td>
		<td><?php echo $p['keterangan']; ?></td>
		<td>
            <a href="<?php echo site_url('progress_penyedium/edit/'.$p['id_progress_penyedia']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('progress_penyedium/remove/'.$p['id_progress_penyedia']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

<div class="pull-right">
	<a href="<?php echo site_url('progress_swklola/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Prog Swklola</th>
		<th>Bulan Realisasi</th>
		<th>Rencana Keuangan</th>
		<th>Realisasi Keuangan</th>
		<th>Rencana Fisik</th>
		<th>Realisasi Fisik</th>
		<th>Realisasi Fisik Foto</th>
		<th>Tahapan Prgres Swklola</th>
		<th>No Kontrak</th>
		<th>Nama Pelaksana</th>
		<th>Alamat Pelaksana</th>
		<th>Id Pgr Swakelola</th>
		<th>Id Dinas</th>
		<th>Keterangan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($progress_swklola as $p){ ?>
    <tr>
		<td><?php echo $p['id_prog_swklola']; ?></td>
		<td><?php echo $p['bulan_realisasi']; ?></td>
		<td><?php echo $p['rencana_keuangan']; ?></td>
		<td><?php echo $p['realisasi_keuangan']; ?></td>
		<td><?php echo $p['rencana_fisik']; ?></td>
		<td><?php echo $p['realisasi_fisik']; ?></td>
		<td><?php echo $p['realisasi_fisik_foto']; ?></td>
		<td><?php echo $p['tahapan_prgres_swklola']; ?></td>
		<td><?php echo $p['no_kontrak']; ?></td>
		<td><?php echo $p['nama_pelaksana']; ?></td>
		<td><?php echo $p['alamat_pelaksana']; ?></td>
		<td><?php echo $p['id_pgr_swakelola']; ?></td>
		<td><?php echo $p['id_dinas']; ?></td>
		<td><?php echo $p['keterangan']; ?></td>
		<td>
            <a href="<?php echo site_url('progress_swklola/edit/'.$p['id_prog_swklola']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('progress_swklola/remove/'.$p['id_prog_swklola']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

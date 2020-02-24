<div class="pull-right">
	<a href="<?php echo site_url('lokasi/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Lokasi</th>
		<th>Id Paket Lokasi</th>
		<th>Kec</th>
		<th>Kel</th>
		<th>Detail Lok</th>
		<th>Actions</th>
    </tr>
	<?php foreach($lokasi as $l){ ?>
    <tr>
		<td><?php echo $l['id_lokasi']; ?></td>
		<td><?php echo $l['id_paket_lokasi']; ?></td>
		<td><?php echo $l['kec']; ?></td>
		<td><?php echo $l['kel']; ?></td>
		<td><?php echo $l['detail_lok']; ?></td>
		<td>
            <a href="<?php echo site_url('lokasi/edit/'.$l['id_lokasi']); ?>" class="btn btn-info btn-xs">Edit</a> 
        </td>
    </tr>
	<?php } ?>
</table>

<div class="pull-right">
	<a href="<?php echo site_url('sumberdana/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Sumberdana</th>
		<th>Jenis Sumberdana</th>
		<th>Nama Sumberdana</th>
		<th>Actions</th>
    </tr>
	<?php foreach($sumberdana as $s){ ?>
    <tr>
		<td><?php echo $s['id_sumberdana']; ?></td>
		<td><?php echo $s['jenis_sumberdana']; ?></td>
		<td><?php echo $s['nama_sumberdana']; ?></td>
		<td>
            <a href="<?php echo site_url('sumberdana/edit/'.$s['id_sumberdana']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('sumberdana/remove/'.$s['id_sumberdana']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

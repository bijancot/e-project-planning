<div class="pull-right">
	<a href="<?php echo site_url('ppk/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Ppk</th>
		<th>Nama Ppk</th>
		<th>Nip Ppk</th>
		<th>Id Satker Ppk</th>
		<th>Actions</th>
    </tr>
	<?php foreach($ppk as $p){ ?>
    <tr>
		<td><?php echo $p['id_ppk']; ?></td>
		<td><?php echo $p['nama_ppk']; ?></td>
		<td><?php echo $p['nip_ppk']; ?></td>
		<td><?php echo $p['id_satker_ppk']; ?></td>
		<td>
            <a href="<?php echo site_url('ppk/edit/'.$p['id_ppk']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ppk/remove/'.$p['id_ppk']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

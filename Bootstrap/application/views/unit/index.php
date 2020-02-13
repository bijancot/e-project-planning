<div class="pull-right">
	<a href="<?php echo site_url('unit/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Unit</th>
		<th>Kode Bidang</th>
		<th>Kode Urusan</th>
		<th>Kode Unit</th>
		<th>Nama Unit</th>
		<th>Actions</th>
    </tr>
	<?php foreach($unit as $u){ ?>
    <tr>
		<td><?php echo $u['id_unit']; ?></td>
		<td><?php echo $u['kode_bidang']; ?></td>
		<td><?php echo $u['kode_urusan']; ?></td>
		<td><?php echo $u['kode_unit']; ?></td>
		<td><?php echo $u['nama_unit']; ?></td>
		<td>
            <a href="<?php echo site_url('unit/edit/'.$u['id_unit']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('unit/remove/'.$u['id_unit']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

<div class="pull-right">
	<a href="<?php echo site_url('urusan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Urusan</th>
		<th>Nama Urusan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($urusan as $u){ ?>
    <tr>
		<td><?php echo $u['id_urusan']; ?></td>
		<td><?php echo $u['nama_urusan']; ?></td>
		<td>
            <a href="<?php echo site_url('urusan/edit/'.$u['id_urusan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('urusan/remove/'.$u['id_urusan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

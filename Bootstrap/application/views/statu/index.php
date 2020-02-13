<div class="pull-right">
	<a href="<?php echo site_url('statu/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Status</th>
		<th>Nm Status</th>
		<th>Actions</th>
    </tr>
	<?php foreach($status as $s){ ?>
    <tr>
		<td><?php echo $s['id_status']; ?></td>
		<td><?php echo $s['nm_status']; ?></td>
		<td>
            <a href="<?php echo site_url('statu/edit/'.$s['id_status']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('statu/remove/'.$s['id_status']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

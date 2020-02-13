<div class="pull-right">
	<a href="<?php echo site_url('progres/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Progress</th>
		<th>Id Progress Penyedia</th>
		<th>Id Progeress Swklola</th>
		<th>Actions</th>
    </tr>
	<?php foreach($progress as $p){ ?>
    <tr>
		<td><?php echo $p['id_progress']; ?></td>
		<td><?php echo $p['id_progress_penyedia']; ?></td>
		<td><?php echo $p['id_progeress_swklola']; ?></td>
		<td>
            <a href="<?php echo site_url('progres/edit/'.$p['id_progress']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('progres/remove/'.$p['id_progress']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

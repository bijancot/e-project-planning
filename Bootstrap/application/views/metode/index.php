<div class="pull-right">
	<a href="<?php echo site_url('metode/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Metode</th>
		<th>Nm Metode</th>
		<th>Actions</th>
    </tr>
	<?php foreach($metode as $m){ ?>
    <tr>
		<td><?php echo $m['id_metode']; ?></td>
		<td><?php echo $m['nm_metode']; ?></td>
		<td>
            <a href="<?php echo site_url('metode/edit/'.$m['id_metode']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('metode/remove/'.$m['id_metode']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

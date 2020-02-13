<div class="pull-right">
	<a href="<?php echo site_url('jeni/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Jenis</th>
		<th>Nm Jenis</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jenis as $j){ ?>
    <tr>
		<td><?php echo $j['id_jenis']; ?></td>
		<td><?php echo $j['nm_jenis']; ?></td>
		<td>
            <a href="<?php echo site_url('jeni/edit/'.$j['id_jenis']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jeni/remove/'.$j['id_jenis']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

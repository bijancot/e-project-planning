<div class="pull-right">
	<a href="<?php echo site_url('_penyedium/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Penyedia</th>
		<th>Id Jenis Penyedia</th>
		<th>Actions</th>
    </tr>
	<?php foreach($_penyedia as $_){ ?>
    <tr>
		<td><?php echo $_['id_penyedia']; ?></td>
		<td><?php echo $_['id_jenis_penyedia']; ?></td>
		<td>
            <a href="<?php echo site_url('_penyedium/edit/'.$_['id_penyedia']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('_penyedium/remove/'.$_['id_penyedia']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

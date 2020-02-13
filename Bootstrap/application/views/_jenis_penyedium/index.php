<div class="pull-right">
	<a href="<?php echo site_url('_jenis_penyedium/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Jenis Penyedia</th>
		<th>Id Penyedia</th>
		<th>Id P Penyedia</th>
		<th>Id P Swakelola</th>
		<th>Actions</th>
    </tr>
	<?php foreach($_jenis_penyedia as $_){ ?>
    <tr>
		<td><?php echo $_['id_jenis_penyedia']; ?></td>
		<td><?php echo $_['id_penyedia']; ?></td>
		<td><?php echo $_['id_p_penyedia']; ?></td>
		<td><?php echo $_['id_p_swakelola']; ?></td>
		<td>
            <a href="<?php echo site_url('_jenis_penyedium/edit/'.$_['id_jenis_penyedia']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('_jenis_penyedium/remove/'.$_['id_jenis_penyedia']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

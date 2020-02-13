<div class="pull-right">
	<a href="<?php echo site_url('_kegiatan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Kegiatan</th>
		<th>Id Program</th>
		<th>Kd Keg</th>
		<th>Program</th>
		<th>Kegiatan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($_kegiatan as $_){ ?>
    <tr>
		<td><?php echo $_['id_kegiatan']; ?></td>
		<td><?php echo $_['id_program']; ?></td>
		<td><?php echo $_['kd_keg']; ?></td>
		<td><?php echo $_['program']; ?></td>
		<td><?php echo $_['kegiatan']; ?></td>
		<td>
            <a href="<?php echo site_url('_kegiatan/edit/'.$_['id_kegiatan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('_kegiatan/remove/'.$_['id_kegiatan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

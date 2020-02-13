<div class="pull-right">
	<a href="<?php echo site_url('fungsi/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Fungsi</th>
		<th>Nama Fungsi</th>
		<th>Actions</th>
    </tr>
	<?php foreach($fungsi as $f){ ?>
    <tr>
		<td><?php echo $f['id_fungsi']; ?></td>
		<td><?php echo $f['nama_fungsi']; ?></td>
		<td>
            <a href="<?php echo site_url('fungsi/edit/'.$f['id_fungsi']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('fungsi/remove/'.$f['id_fungsi']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

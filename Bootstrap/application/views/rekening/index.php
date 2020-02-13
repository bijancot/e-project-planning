<div class="pull-right">
	<a href="<?php echo site_url('rekening/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Rek</th>
		<th>Nama Rekening</th>
		<th>Actions</th>
    </tr>
	<?php foreach($rekening as $r){ ?>
    <tr>
		<td><?php echo $r['id_rek']; ?></td>
		<td><?php echo $r['nama_rekening']; ?></td>
		<td>
            <a href="<?php echo site_url('rekening/edit/'.$r['id_rek']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('rekening/remove/'.$r['id_rek']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

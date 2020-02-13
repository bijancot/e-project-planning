<div class="pull-right">
	<a href="<?php echo site_url('mas_pak/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Master</th>
		<th>Id Paket</th>
		<th>Actions</th>
    </tr>
	<?php foreach($mas_pak as $m){ ?>
    <tr>
		<td><?php echo $m['id_master']; ?></td>
		<td><?php echo $m['id_paket']; ?></td>
		<td>
            <a href="<?php echo site_url('mas_pak/edit/'.$m['id_master']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('mas_pak/remove/'.$m['id_master']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

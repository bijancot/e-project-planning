<div class="pull-right">
	<a href="<?php echo site_url('_program/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Program</th>
		<th>Id Urusan</th>
		<th>Id Bidang</th>
		<th>Kd Prog</th>
		<th>Program</th>
		<th>Id Satker</th>
		<th>Actions</th>
    </tr>
	<?php foreach($_program as $_){ ?>
    <tr>
		<td><?php echo $_['id_program']; ?></td>
		<td><?php echo $_['id_urusan']; ?></td>
		<td><?php echo $_['id_bidang']; ?></td>
		<td><?php echo $_['kd_prog']; ?></td>
		<td><?php echo $_['program']; ?></td>
		<td><?php echo $_['id_satker']; ?></td>
		<td>
            <a href="<?php echo site_url('_program/edit/'.$_['id_program']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('_program/remove/'.$_['id_program']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

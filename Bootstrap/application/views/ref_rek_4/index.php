<div class="pull-right">
	<a href="<?php echo site_url('ref_rek_4/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Kd Rek 1</th>
		<th>Kd Rek 2</th>
		<th>Kd Rek 3</th>
		<th>Kd Rek 4</th>
		<th>Nm Rek 4</th>
		<th>Actions</th>
    </tr>
	<?php foreach($ref_rek_4 as $r){ ?>
    <tr>
		<td><?php echo $r['Kd_Rek_1']; ?></td>
		<td><?php echo $r['Kd_Rek_2']; ?></td>
		<td><?php echo $r['Kd_Rek_3']; ?></td>
		<td><?php echo $r['Kd_Rek_4']; ?></td>
		<td><?php echo $r['Nm_Rek_4']; ?></td>
		<td>
            <a href="<?php echo site_url('ref_rek_4/edit/'.$r['Kd_Rek_1']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ref_rek_4/remove/'.$r['Kd_Rek_1']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

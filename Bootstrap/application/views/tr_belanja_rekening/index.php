<div class="pull-right">
	<a href="<?php echo site_url('tr_belanja_rekening/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Keterangan</th>
		<th>Kd Rek 1</th>
		<th>Kd Rek 2</th>
		<th>Kd Rek 3</th>
		<th>Kd Rek 4</th>
		<th>Kd Rek 5</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tr_belanja_rekening as $t){ ?>
    <tr>
		<td><?php echo $t['id_keterangan']; ?></td>
		<td><?php echo $t['Kd_Rek_1']; ?></td>
		<td><?php echo $t['Kd_Rek_2']; ?></td>
		<td><?php echo $t['Kd_Rek_3']; ?></td>
		<td><?php echo $t['Kd_Rek_4']; ?></td>
		<td><?php echo $t['Kd_Rek_5']; ?></td>
		<td>
            <a href="<?php echo site_url('tr_belanja_rekening/edit/'.$t['']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tr_belanja_rekening/remove/'.$t['']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

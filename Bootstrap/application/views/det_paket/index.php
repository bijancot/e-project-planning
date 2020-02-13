<div class="pull-right">
	<a href="<?php echo site_url('det_paket/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Det Paket</th>
		<th>Id P Penyedia</th>
		<th>Id P Swakelola</th>
		<th>Detail Paket</th>
		<th>Vol Paket</th>
		<th>Uang Paket</th>
		<th>Id Satker</th>
		<th>Actions</th>
    </tr>
	<?php foreach($det_paket as $d){ ?>
    <tr>
		<td><?php echo $d['id_det_paket']; ?></td>
		<td><?php echo $d['id_p_penyedia']; ?></td>
		<td><?php echo $d['id_p_swakelola']; ?></td>
		<td><?php echo $d['detail_paket']; ?></td>
		<td><?php echo $d['vol_paket']; ?></td>
		<td><?php echo $d['uang_paket']; ?></td>
		<td><?php echo $d['id_satker']; ?></td>
		<td>
            <a href="<?php echo site_url('det_paket/edit/'.$d['id_det_paket']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('det_paket/remove/'.$d['id_det_paket']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

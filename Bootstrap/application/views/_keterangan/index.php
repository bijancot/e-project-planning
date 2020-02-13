<div class="pull-right">
	<a href="<?php echo site_url('_keterangan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Keterangan</th>
		<th>Id Kegiatan</th>
		<th>Keterangan</th>
		<th>Rincian</th>
		<th>Jumlah</th>
		<th>Satuan</th>
		<th>Harga</th>
		<th>Total</th>
		<th>Actions</th>
    </tr>
	<?php foreach($_keterangan as $_){ ?>
    <tr>
		<td><?php echo $_['id_keterangan']; ?></td>
		<td><?php echo $_['id_kegiatan']; ?></td>
		<td><?php echo $_['keterangan']; ?></td>
		<td><?php echo $_['rincian']; ?></td>
		<td><?php echo $_['jumlah']; ?></td>
		<td><?php echo $_['satuan']; ?></td>
		<td><?php echo $_['harga']; ?></td>
		<td><?php echo $_['total']; ?></td>
		<td>
            <a href="<?php echo site_url('_keterangan/edit/'.$_['id_keterangan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('_keterangan/remove/'.$_['id_keterangan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

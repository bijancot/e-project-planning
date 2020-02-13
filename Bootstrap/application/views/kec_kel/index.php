<div class="pull-right">
	<a href="<?php echo site_url('kec_kel/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Kelurahan</th>
		<th>Nama Kecamatan</th>
		<th>Nama Kelurahan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($kec_kel as $k){ ?>
    <tr>
		<td><?php echo $k['id_kelurahan']; ?></td>
		<td><?php echo $k['nama_kecamatan']; ?></td>
		<td><?php echo $k['nama_kelurahan']; ?></td>
		<td>
            <a href="<?php echo site_url('kec_kel/edit/'.$k['id_kelurahan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('kec_kel/remove/'.$k['id_kelurahan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

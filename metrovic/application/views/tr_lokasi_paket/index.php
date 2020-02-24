<div class="pull-right">
	<a href="<?php echo site_url('tr_lokasi_paket/add'); ?>" class="btn btn-success">Add</a> 
</div>
<div class="table-responsive m-t-40">
					<table id="example23" id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
							<tr>
								<th>ID</th>
								<th>Id Paket</th>
								<th>Id Kec Kel</th>
								<th>Keterangan</th>
								<th>CreatedDate</th>
								<th style="width:12%">Opsi </th>
							</tr>
                            </thead>
                            <tfoot>
                                <tr>
								<th>ID</th>
								<th>Id Paket</th>
								<th>Id Kec Kel</th>
								<th>Keterangan</th>
								<th>CreatedDate</th>
								<th style="width:12%">Opsi </th>
                                </tr>
                            </tfoot>
							<tbody>
					<?php foreach($_paket as $u){ ?>
						<tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_paket']; ?></td>
		<td><?php echo $t['id_kec_kel']; ?></td>
		<td><?php echo $t['keterangan']; ?></td>
		<td><?php echo $t['createdDate']; ?></td>
		<td>
            <a href="<?php echo site_url('test-bootstrap/tr_lokasi_paket/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('test-bootstrap/tr_lokasi_paket/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
							</tbody>
                        </table>
                    </div>
<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Paket</th>
		<th>Id Kec Kel</th>
		<th>Keterangan</th>
		<th>CreatedDate</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tr_lokasi_paket as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_paket']; ?></td>
		<td><?php echo $t['id_kec_kel']; ?></td>
		<td><?php echo $t['keterangan']; ?></td>
		<td><?php echo $t['createdDate']; ?></td>
		<td>
            <a href="<?php echo site_url('tr_lokasi_paket/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tr_lokasi_paket/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

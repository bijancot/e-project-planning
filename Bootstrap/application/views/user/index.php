<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Satker</th>
		<th>Password</th>
		<th>Password Reset Key</th>
		<th>Kode Urusan</th>
		<th>Kode Bidang</th>
		<th>Kode Unit</th>
		<th>Kode Sub Unit</th>
		<th>Nama Dinas</th>
		<th>Username</th>
		<th>Email</th>
		<th>User Role</th>
		<th>Login Session Key</th>
		<th>Email Status</th>
		<th>Gambar</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['id_satker']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['password_reset_key']; ?></td>
		<td><?php echo $u['kode_urusan']; ?></td>
		<td><?php echo $u['kode_bidang']; ?></td>
		<td><?php echo $u['kode_unit']; ?></td>
		<td><?php echo $u['kode_sub_unit']; ?></td>
		<td><?php echo $u['nama_dinas']; ?></td>
		<td><?php echo $u['username']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td><?php echo $u['user_role']; ?></td>
		<td><?php echo $u['login_session_key']; ?></td>
		<td><?php echo $u['email_status']; ?></td>
		<td><?php echo $u['gambar']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id_satker']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['id_satker']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

<?php echo form_open('user/edit/'.$user['id_satker'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="password_reset_key" class="col-md-4 control-label">Password Reset Key</label>
		<div class="col-md-8">
			<input type="text" name="password_reset_key" value="<?php echo ($this->input->post('password_reset_key') ? $this->input->post('password_reset_key') : $user['password_reset_key']); ?>" class="form-control" id="password_reset_key" />
		</div>
	</div>
	<div class="form-group">
		<label for="kode_urusan" class="col-md-4 control-label">Kode Urusan</label>
		<div class="col-md-8">
			<input type="text" name="kode_urusan" value="<?php echo ($this->input->post('kode_urusan') ? $this->input->post('kode_urusan') : $user['kode_urusan']); ?>" class="form-control" id="kode_urusan" />
		</div>
	</div>
	<div class="form-group">
		<label for="kode_bidang" class="col-md-4 control-label">Kode Bidang</label>
		<div class="col-md-8">
			<input type="text" name="kode_bidang" value="<?php echo ($this->input->post('kode_bidang') ? $this->input->post('kode_bidang') : $user['kode_bidang']); ?>" class="form-control" id="kode_bidang" />
		</div>
	</div>
	<div class="form-group">
		<label for="kode_unit" class="col-md-4 control-label">Kode Unit</label>
		<div class="col-md-8">
			<input type="text" name="kode_unit" value="<?php echo ($this->input->post('kode_unit') ? $this->input->post('kode_unit') : $user['kode_unit']); ?>" class="form-control" id="kode_unit" />
		</div>
	</div>
	<div class="form-group">
		<label for="kode_sub_unit" class="col-md-4 control-label">Kode Sub Unit</label>
		<div class="col-md-8">
			<input type="text" name="kode_sub_unit" value="<?php echo ($this->input->post('kode_sub_unit') ? $this->input->post('kode_sub_unit') : $user['kode_sub_unit']); ?>" class="form-control" id="kode_sub_unit" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama_dinas" class="col-md-4 control-label">Nama Dinas</label>
		<div class="col-md-8">
			<input type="text" name="nama_dinas" value="<?php echo ($this->input->post('nama_dinas') ? $this->input->post('nama_dinas') : $user['nama_dinas']); ?>" class="form-control" id="nama_dinas" />
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="user_role" class="col-md-4 control-label">User Role</label>
		<div class="col-md-8">
			<input type="text" name="user_role" value="<?php echo ($this->input->post('user_role') ? $this->input->post('user_role') : $user['user_role']); ?>" class="form-control" id="user_role" />
		</div>
	</div>
	<div class="form-group">
		<label for="login_session_key" class="col-md-4 control-label">Login Session Key</label>
		<div class="col-md-8">
			<input type="text" name="login_session_key" value="<?php echo ($this->input->post('login_session_key') ? $this->input->post('login_session_key') : $user['login_session_key']); ?>" class="form-control" id="login_session_key" />
		</div>
	</div>
	<div class="form-group">
		<label for="email_status" class="col-md-4 control-label">Email Status</label>
		<div class="col-md-8">
			<input type="text" name="email_status" value="<?php echo ($this->input->post('email_status') ? $this->input->post('email_status') : $user['email_status']); ?>" class="form-control" id="email_status" />
		</div>
	</div>
	<div class="form-group">
		<label for="gambar" class="col-md-4 control-label">Gambar</label>
		<div class="col-md-8">
			<input type="text" name="gambar" value="<?php echo ($this->input->post('gambar') ? $this->input->post('gambar') : $user['gambar']); ?>" class="form-control" id="gambar" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
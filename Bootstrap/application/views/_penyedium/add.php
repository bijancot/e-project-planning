<?php echo form_open('_penyedium/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_jenis_penyedia" class="col-md-4 control-label"> Jenis Penyedium</label>
		<div class="col-md-8">
			<select name="id_jenis_penyedia" class="form-control">
				<option value="">select _jenis_penyedium</option>
				<?php 
				foreach($all__jenis_penyedia as $_jenis_penyedium)
				{
					$selected = ($_jenis_penyedium['id_jenis_penyedia'] == $this->input->post('id_jenis_penyedia')) ? ' selected="selected"' : "";

					echo '<option value="'.$_jenis_penyedium['id_jenis_penyedia'].'" '.$selected.'>'.$_jenis_penyedium['id_jenis_penyedia'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
<?php echo form_open('_jenis_penyedium/edit/'.$_jenis_penyedium['id_jenis_penyedia'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_penyedia" class="col-md-4 control-label"> Penyedium</label>
		<div class="col-md-8">
			<select name="id_penyedia" class="form-control">
				<option value="">select _penyedium</option>
				<?php 
				foreach($all__penyedia as $_penyedium)
				{
					$selected = ($_penyedium['id_penyedia'] == $_jenis_penyedium['id_penyedia']) ? ' selected="selected"' : "";

					echo '<option value="'.$_penyedium['id_penyedia'].'" '.$selected.'>'.$_penyedium['id_penyedia'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_p_penyedia" class="col-md-4 control-label">Penyedium</label>
		<div class="col-md-8">
			<select name="id_p_penyedia" class="form-control">
				<option value="">select penyedium</option>
				<?php 
				foreach($all_penyedia as $penyedium)
				{
					$selected = ($penyedium['id_p_progress'] == $_jenis_penyedium['id_p_penyedia']) ? ' selected="selected"' : "";

					echo '<option value="'.$penyedium['id_p_progress'].'" '.$selected.'>'.$penyedium['id_p_progress'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_p_swakelola" class="col-md-4 control-label">Swakelola</label>
		<div class="col-md-8">
			<select name="id_p_swakelola" class="form-control">
				<option value="">select swakelola</option>
				<?php 
				foreach($all_swakelola as $swakelola)
				{
					$selected = ($swakelola['id_p_swakelola'] == $_jenis_penyedium['id_p_swakelola']) ? ' selected="selected"' : "";

					echo '<option value="'.$swakelola['id_p_swakelola'].'" '.$selected.'>'.$swakelola['id_p_swakelola'].'</option>';
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
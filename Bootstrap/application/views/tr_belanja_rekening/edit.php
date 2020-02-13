<?php echo form_open('tr_belanja_rekening/edit/'.$tr_belanja_rekening[''],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_keterangan" class="col-md-4 control-label"> Keterangan</label>
		<div class="col-md-8">
			<select name="id_keterangan" class="form-control">
				<option value="">select _keterangan</option>
				<?php 
				foreach($all__keterangan as $_keterangan)
				{
					$selected = ($_keterangan['id_keterangan'] == $tr_belanja_rekening['id_keterangan']) ? ' selected="selected"' : "";

					echo '<option value="'.$_keterangan['id_keterangan'].'" '.$selected.'>'.$_keterangan['id_keterangan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Kd_Rek_1" class="col-md-4 control-label">Ref Rek 1</label>
		<div class="col-md-8">
			<select name="Kd_Rek_1" class="form-control">
				<option value="">select ref_rek_1</option>
				<?php 
				foreach($all_ref_rek_1 as $ref_rek_1)
				{
					$selected = ($ref_rek_1['Kd_Rek_1'] == $tr_belanja_rekening['Kd_Rek_1']) ? ' selected="selected"' : "";

					echo '<option value="'.$ref_rek_1['Kd_Rek_1'].'" '.$selected.'>'.$ref_rek_1['Kd_Rek_1'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Kd_Rek_2" class="col-md-4 control-label">Ref Rek 2</label>
		<div class="col-md-8">
			<select name="Kd_Rek_2" class="form-control">
				<option value="">select ref_rek_2</option>
				<?php 
				foreach($all_ref_rek_2 as $ref_rek_2)
				{
					$selected = ($ref_rek_2['Kd_Rek_1'] == $tr_belanja_rekening['Kd_Rek_2']) ? ' selected="selected"' : "";

					echo '<option value="'.$ref_rek_2['Kd_Rek_1'].'" '.$selected.'>'.$ref_rek_2['Kd_Rek_2'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Kd_Rek_3" class="col-md-4 control-label">Ref Rek 3</label>
		<div class="col-md-8">
			<select name="Kd_Rek_3" class="form-control">
				<option value="">select ref_rek_3</option>
				<?php 
				foreach($all_ref_rek_3 as $ref_rek_3)
				{
					$selected = ($ref_rek_3['Kd_Rek_1'] == $tr_belanja_rekening['Kd_Rek_3']) ? ' selected="selected"' : "";

					echo '<option value="'.$ref_rek_3['Kd_Rek_1'].'" '.$selected.'>'.$ref_rek_3['Kd_Rek_3'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Kd_Rek_4" class="col-md-4 control-label">Ref Rek 4</label>
		<div class="col-md-8">
			<select name="Kd_Rek_4" class="form-control">
				<option value="">select ref_rek_4</option>
				<?php 
				foreach($all_ref_rek_4 as $ref_rek_4)
				{
					$selected = ($ref_rek_4['Kd_Rek_1'] == $tr_belanja_rekening['Kd_Rek_4']) ? ' selected="selected"' : "";

					echo '<option value="'.$ref_rek_4['Kd_Rek_1'].'" '.$selected.'>'.$ref_rek_4['Kd_Rek_4'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Kd_Rek_5" class="col-md-4 control-label">Ref Rek 5</label>
		<div class="col-md-8">
			<select name="Kd_Rek_5" class="form-control">
				<option value="">select ref_rek_5</option>
				<?php 
				foreach($all_ref_rek_5 as $ref_rek_5)
				{
					$selected = ($ref_rek_5['Kd_Rek_1'] == $tr_belanja_rekening['Kd_Rek_5']) ? ' selected="selected"' : "";

					echo '<option value="'.$ref_rek_5['Kd_Rek_1'].'" '.$selected.'>'.$ref_rek_5['Kd_Rek_5'].'</option>';
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
<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Role Name</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                	<?php echo Form::input('name', Input::post('name', isset($role) ? $role->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>
                               </div>
		</div>
		<div class="form-group" align="center">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($menu) ? $menu->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Icon', 'icon', array('class'=>'control-label')); ?>

				<?php echo Form::input('icon', Input::post('icon', isset($menu) ? $menu->icon : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Icon')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Roles', 'roles', array('class'=>'control-label')); ?>

				<?php echo Form::input('roles', Input::post('roles', isset($menu) ? $menu->roles : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Roles')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Position', 'position', array('class'=>'control-label')); ?>

				<?php echo Form::input('position', Input::post('position', isset($menu) ? $menu->position : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Position')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
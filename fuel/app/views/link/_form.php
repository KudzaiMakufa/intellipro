<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Menu id', 'menu_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('menu_id', Input::post('menu_id', isset($link) ? $link->menu_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Menu id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($link) ? $link->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Icon', 'icon', array('class'=>'control-label')); ?>

				<?php echo Form::input('icon', Input::post('icon', isset($link) ? $link->icon : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Icon')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Roles', 'roles', array('class'=>'control-label')); ?>

				<?php echo Form::input('roles', Input::post('roles', isset($link) ? $link->roles : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Roles')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Position', 'position', array('class'=>'control-label')); ?>

				<?php echo Form::input('position', Input::post('position', isset($link) ? $link->position : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Position')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Controller', 'controller', array('class'=>'control-label')); ?>

				<?php echo Form::input('controller', Input::post('controller', isset($link) ? $link->controller : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Controller')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Method', 'method', array('class'=>'control-label')); ?>

				<?php echo Form::input('method', Input::post('method', isset($link) ? $link->method : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Method')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
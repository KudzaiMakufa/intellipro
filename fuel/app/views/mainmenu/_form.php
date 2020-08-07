<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($mainmenu) ? $mainmenu->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Url', 'url', array('class'=>'control-label')); ?>

				<?php echo Form::input('url', Input::post('url', isset($mainmenu) ? $mainmenu->url : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Url')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Position', 'position', array('class'=>'control-label')); ?>

				<?php echo Form::input('position', Input::post('position', isset($mainmenu) ? $mainmenu->position : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Position')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Aligned', 'aligned', array('class'=>'control-label')); ?>

				<?php echo Form::input('aligned', Input::post('aligned', isset($mainmenu) ? $mainmenu->aligned : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Aligned')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Visble', 'visble', array('class'=>'control-label')); ?>

				<?php echo Form::input('visble', Input::post('visble', isset($mainmenu) ? $mainmenu->visble : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Visble')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Icon', 'icon', array('class'=>'control-label')); ?>

				<?php echo Form::input('icon', Input::post('icon', isset($mainmenu) ? $mainmenu->icon : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Icon')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
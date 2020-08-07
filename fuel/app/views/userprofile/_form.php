<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($userprofile) ? $userprofile->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('First name', 'first_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('first_name', Input::post('first_name', isset($userprofile) ? $userprofile->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Surname', 'surname', array('class'=>'control-label')); ?>

				<?php echo Form::input('surname', Input::post('surname', isset($userprofile) ? $userprofile->surname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Surname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($userprofile) ? $userprofile->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Phone number', 'phone_number', array('class'=>'control-label')); ?>

				<?php echo Form::input('phone_number', Input::post('phone_number', isset($userprofile) ? $userprofile->phone_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Phone number')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Position', 'position', array('class'=>'control-label')); ?>

				<?php echo Form::input('position', Input::post('position', isset($userprofile) ? $userprofile->position : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Position')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Department', 'department', array('class'=>'control-label')); ?>

				<?php echo Form::input('department', Input::post('department', isset($userprofile) ? $userprofile->department : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Department')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
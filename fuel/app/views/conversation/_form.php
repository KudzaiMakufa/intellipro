<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Message', 'message', array('class'=>'control-label')); ?>

				<?php echo Form::input('message', Input::post('message', isset($conversation) ? $conversation->message : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Message')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Sender id', 'sender_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('sender_id', Input::post('sender_id', isset($conversation) ? $conversation->sender_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Sender id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Receiver id', 'receiver_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('receiver_id', Input::post('receiver_id', isset($conversation) ? $conversation->receiver_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Receiver id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Cc', 'cc', array('class'=>'control-label')); ?>

				<?php echo Form::input('cc', Input::post('cc', isset($conversation) ? $conversation->cc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Cc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Online status', 'online_status', array('class'=>'control-label')); ?>

				<?php echo Form::input('online_status', Input::post('online_status', isset($conversation) ? $conversation->online_status : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Online status')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
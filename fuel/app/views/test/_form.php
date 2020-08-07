<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Index', 'index', array('class'=>'control-label')); ?>

				<?php echo Form::input('index', Input::post('index', isset($test) ? $test->index : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Index')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
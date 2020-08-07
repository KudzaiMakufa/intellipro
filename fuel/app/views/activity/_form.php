<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
             <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::input('name', Input::post('name', isset($activity) ? $activity->name : ''), array('placeholder'=>'Name')); ?>
                </div>
                
            </div> 
	
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
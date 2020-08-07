<h2 align="center">Listing Tasks </h2>
<br>
<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>

<?php if ($tasks): ?>
	<?php // Debug::dump($tasks); ?>

<?php foreach ($tasks as $item):?>		


			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Task Number  : <?php echo $item+1 ; ?> </label>
						<div class="col-md-7 col-sm-7 col-xs-12">
							<?php
								
								?>
							<?php echo Form::input($item, Input::post($item), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">duration(days)</label>
						<div class="col-md-7 col-sm-7 col-xs-12">
						<?php echo Form::input($item.'duration', Input::post($item.'duration'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Duration')); ?>
						</div>
					</div>
						
				</div>
			</div>
			<br>

<?php endforeach;  ?>

<div align="center"><?php echo Form::submit('submit', 'Save Tasks', array('class' => 'btn btn-primary')); ?></div>

<?php else: ?>
<p>No Tasks.</p>

<?php endif; ?><p>
		

</p>
	</fieldset>
<?php echo Form::close(); ?>

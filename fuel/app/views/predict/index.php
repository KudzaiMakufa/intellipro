
<html>
<head>
	<script>
			// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
</head>
<body>
<div class="se-pre-con"></div>

<?php echo Asset::css('loader.css'); ?>

<?php  
if ($activities): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Activity no</th>
			<th>Activity name</th>
			<th>PERT duration</th>
			<!-- <th>Standard duration</th> -->
			<th>AI Predicted duration</th>
			<th>Risk %</th>
			<th>Decided Duration</th>
			
		</tr>
	</thead>	
	<tbody>

<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<fieldset>	
<?php $duration = 0 ; $out = 0 ; ?>



<?php $due = 0 ;?>
<?php foreach ($activities as $item): ?>		
	<tr>
			<td><?php echo $item->sequence_no; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php
				//Calculate estimnated duration using PERT 
				$pert = round(($item->optimal_completion + $item->quickest_completion + $item->late_competion) / 3 , 2);
				$due = $pert ;
				echo $due.' days';
				$duration+$pert = $duration ;?>
			  	
			  </td>
			<!-- <td><?php //echo 10 ; ?></td> -->
			<td>
			<div class="alert-sm alert-success 	" role="alert">
					 	
					
			<?php 

				//AI --> call python script to predict project duration <-- AI //
				putenv('PYTHONPATH=/usr/lib/python3.7/site-packages:');
				//$command = "";	
				$command = escapeshellcmd(DOCROOT . "/python/predict/script.py ".strtolower( str_replace(" ","",$item->name)).".csv");
				$output = exec($command . ' 2>&1', $out, $ret);
				//Checking if there are no errors
				
				if ($ret != 0)
				{	
					echo "no dataset" ;//$output;
					$out =  0 ;
				}
				else
				{
					$out =  doubleval($output) ;
					//populate on web index form
					
					echo round($output , 2 ).' days' ; 
					//convert it to double for later comparison below
					
				}
			?></div></td>
			<!-- calculating risk level basing on deviation from ai vs projected  -->
			<td>

				<?php  $value =   round((($due - $out)/$due) *100,2); ?>
				<?php if($value > 50 ) :?>
				
					 <button type="button" class="btn btn-danger">
                          <span class="badge badge-pill badge-danger"> <?php echo $value.' %' ;?></span>

					

				<?php elseif($value < 50 && $value > 30  ) :?>
					<button type="button" class="btn btn-warning">
                          <span class="badge badge-pill badge-warning"> <?php echo $value.' %' ;?></span>
					
				<?php elseif($value < 30 ) :?>

					<button type="button" class="btn btn-success">
                          <span class="badge badge-pill badge-success"> <?php echo $value.' %' ;?></span>
			
				<?php endif ;?>
					
			</td>
			<td><?php 
			echo Form::input($item->id, Input::post($item->id), array('class' => 'col-md-12 form-control', 'placeholder'=>'enter duration')); 
			//echo Form::input('project', Input::post('project'), array('class' => 'col-md-12 form-control', 'type'=>'hidden'));

			?></td> 	
	</tr>
<?php endforeach; ?>



<td></td>
<td></td>
<td></td>
<td>Total duration</td>
<td><?php echo $duration; ?></td>


</tbody>
</table>

<div align="center ">
		<?php echo Form::submit('submit', 'Complete', array('class' => 'btn btn-primary')); ?>
		
	</div>

</fieldset>
	<?php echo Form::close(); ?>

<?php else: ?>
<p>No Projects.</p>

<?php endif; ?><p>

</body>
</html>

	
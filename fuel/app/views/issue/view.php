<h2>Viewing #<?php echo $issue->id; ?></h2>


<p>
	<strong>Problem:</strong>
	<?php echo $issue->problem; ?></p>
<p>
	<strong>Module:</strong>
	<?php echo $issue->module; ?></p>

	<?php if($issue->status == 'pending') : ?>
	<?php else : ?>
		<p>
	
		<div class="alert-sm alert-success" role="alert">
			<strong>
					  Solution :
					
	</strong>
	<?php echo $issue->solution; ?>
</div></p>

	<?php endif ; ?>
<p>
	<strong>Reported by:</strong>
	<?php echo $issue->reported_by; ?></p>

<?php echo Html::anchor('issue/edit/'.$issue->id, 'Edit'); ?> |
<?php echo Html::anchor('issue', 'Back'); ?>
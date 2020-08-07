<h2>Viewing #<?php echo $activity->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $activity->name; ?></p>
<p>
	<strong>Project:</strong>
	<?php echo $activity->project; ?></p>
<p>
	<strong>Sequence no:</strong>
	<?php echo $activity->sequence_no; ?></p>
<p>
	<strong>Number of members:</strong>
	<?php echo $activity->number_of_members; ?></p>
<p>
	<strong>Optimal completion:</strong>
	<?php echo $activity->optimal_completion; ?></p>
<p>
	<strong>Quickest completion:</strong>
	<?php echo $activity->quickest_completion; ?></p>
<p>
	<strong>Late competion:</strong>
	<?php echo $activity->late_competion; ?></p>
<p>
	<strong>Totalcost:</strong>
	<?php echo $activity->totalcost; ?></p>

<?php echo Html::anchor('activity/edit/'.$activity->id, 'Edit'); ?> |
<?php echo Html::anchor('activity', 'Back'); ?>
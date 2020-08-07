<h2>Viewing #<?php echo $project->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $project->name; ?></p>
<p>
	<strong>Start date:</strong>
	<?php echo $project->start_date; ?></p>
<p>
	<strong>Client name:</strong>
	<?php echo $project->client_name; ?></p>
<p>
	<strong>Client address:</strong>
	<?php echo $project->client_address; ?></p>
<p>
	<strong>Project type:</strong>
	<?php echo $project->project_type; ?></p>
<p>
	<strong>Project manager:</strong>
	<?php echo $project->project_manager; ?></p>
<p>
	<strong>Completion date:</strong>
	<?php echo $project->completion_date; ?></p>

<?php echo Html::anchor('project/edit/'.$project->id, 'Edit'); ?> |
<?php echo Html::anchor('project', 'Back'); ?>
<h2>Viewing #<?php echo $department->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $department->name; ?></p>

<?php echo Html::anchor('department/edit/'.$department->id, 'Edit'); ?> |
<?php echo Html::anchor('department', 'Back'); ?>
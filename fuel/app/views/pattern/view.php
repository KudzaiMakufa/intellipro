<h2>Viewing #<?php echo $pattern->id; ?></h2>

<p>
	<strong>Module:</strong>
	<?php echo $pattern->module; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $pattern->description; ?></p>

<?php echo Html::anchor('pattern/edit/'.$pattern->id, 'Edit'); ?> |
<?php echo Html::anchor('pattern', 'Back'); ?>
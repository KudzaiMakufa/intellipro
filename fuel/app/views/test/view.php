<h2>Viewing #<?php echo $test->id; ?></h2>

<p>
	<strong>Index:</strong>
	<?php echo $test->index; ?></p>

<?php echo Html::anchor('test/edit/'.$test->id, 'Edit'); ?> |
<?php echo Html::anchor('test', 'Back'); ?>
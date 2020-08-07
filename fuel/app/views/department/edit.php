<h2>Editing Department</h2>
<br>

<?php echo render('department/_form'); ?>
<p>
	<?php echo Html::anchor('department/view/'.$department->id, 'View'); ?> |
	<?php echo Html::anchor('department', 'Back'); ?></p>

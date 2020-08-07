<h2>Editing Task</h2>
<br>

<?php echo render('task/_form'); ?>
<p>
	<?php echo Html::anchor('task/view/'.$task->id, 'View'); ?> |
	<?php echo Html::anchor('task', 'Back'); ?></p>

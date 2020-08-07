<h2>Editing Activity</h2>
<br>

<?php echo render('activity/_form'); ?>
<p>
	<?php echo Html::anchor('activity/view/'.$activity->id, 'View'); ?> |
	<?php echo Html::anchor('activity', 'Back'); ?></p>

<h2>Editing Pattern</h2>
<br>

<?php echo render('pattern/_form'); ?>
<p>
	<?php echo Html::anchor('pattern/view/'.$pattern->id, 'View'); ?> |
	<?php echo Html::anchor('pattern', 'Back'); ?></p>

<h2>Editing Test</h2>
<br>

<?php echo render('test/_form'); ?>
<p>
	<?php echo Html::anchor('test/view/'.$test->id, 'View'); ?> |
	<?php echo Html::anchor('test', 'Back'); ?></p>

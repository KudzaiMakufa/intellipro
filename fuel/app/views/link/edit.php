<h2>Editing Link</h2>
<br>

<?php echo render('link/_form'); ?>
<p>
	<?php echo Html::anchor('link/view/'.$link->id, 'View'); ?> |
	<?php echo Html::anchor('link', 'Back'); ?></p>

<h2>Editing Projecttype</h2>
<br>

<?php echo render('projecttype/_form'); ?>
<p>
	<?php echo Html::anchor('projecttype/view/'.$projecttype->id, 'View'); ?> |
	<?php echo Html::anchor('projecttype', 'Back'); ?></p>

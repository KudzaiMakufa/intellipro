<h2>Editing Userprofile</h2>
<br>

<?php echo render('userprofile/_form'); ?>
<p>
	<?php echo Html::anchor('userprofile/view/'.$userprofile->id, 'View'); ?> |
	<?php echo Html::anchor('userprofile', 'Back'); ?></p>

<h2>Editing Mainmenu</h2>
<br>

<?php echo render('mainmenu/_form'); ?>
<p>
	<?php echo Html::anchor('mainmenu/view/'.$mainmenu->id, 'View'); ?> |
	<?php echo Html::anchor('mainmenu', 'Back'); ?></p>

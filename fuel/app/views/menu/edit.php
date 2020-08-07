<h2>Editing Menu</h2>
<br>

<?php echo render('menu/_form'); ?>
<p>
	<?php echo Html::anchor('menu/view/'.$menu->id, 'View'); ?> |
	<?php echo Html::anchor('menu', 'Back'); ?></p>

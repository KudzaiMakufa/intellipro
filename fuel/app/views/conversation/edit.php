<h2>Editing Conversation</h2>
<br>

<?php echo render('conversation/_form'); ?>
<p>
	<?php echo Html::anchor('conversation/view/'.$conversation->id, 'View'); ?> |
	<?php echo Html::anchor('conversation', 'Back'); ?></p>

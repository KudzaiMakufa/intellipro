<h2>Editing Project</h2>
<br>

<?php echo render('project/_form'); ?>
<p>
	<?php echo Html::anchor('project/view/'.$project->id, 'View'); ?> |
	<?php echo Html::anchor('project', 'Back'); ?></p>

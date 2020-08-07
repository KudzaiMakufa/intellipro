<h2>Viewing #<?php echo $mainmenu->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $mainmenu->name; ?></p>
<p>
	<strong>Url:</strong>
	<?php echo $mainmenu->url; ?></p>
<p>
	<strong>Position:</strong>
	<?php echo $mainmenu->position; ?></p>
<p>
	<strong>Aligned:</strong>
	<?php echo $mainmenu->aligned; ?></p>
<p>
	<strong>Visble:</strong>
	<?php echo $mainmenu->visble; ?></p>
<p>
	<strong>Icon:</strong>
	<?php echo $mainmenu->icon; ?></p>

<?php echo Html::anchor('mainmenu/edit/'.$mainmenu->id, 'Edit'); ?> |
<?php echo Html::anchor('mainmenu', 'Back'); ?>
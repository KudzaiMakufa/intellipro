<h2>Viewing #<?php echo $menu->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $menu->name; ?></p>
<p>
	<strong>Icon:</strong>
	<?php echo $menu->icon; ?></p>
<p>
	<strong>Roles:</strong>
	<?php echo $menu->roles; ?></p>
<p>
	<strong>Position:</strong>
	<?php echo $menu->position; ?></p>

<?php echo Html::anchor('menu/edit/'.$menu->id, 'Edit'); ?> |
<?php echo Html::anchor('menu', 'Back'); ?>
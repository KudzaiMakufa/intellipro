<h2>Viewing #<?php echo $link->id; ?></h2>

<p>
	<strong>Menu id:</strong>
	<?php echo $link->menu_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $link->name; ?></p>
<p>
	<strong>Icon:</strong>
	<?php echo $link->icon; ?></p>
<p>
	<strong>Roles:</strong>
	<?php echo $link->roles; ?></p>
<p>
	<strong>Position:</strong>
	<?php echo $link->position; ?></p>
<p>
	<strong>Controller:</strong>
	<?php echo $link->controller; ?></p>
<p>
	<strong>Method:</strong>
	<?php echo $link->method; ?></p>

<?php echo Html::anchor('link/edit/'.$link->id, 'Edit'); ?> |
<?php echo Html::anchor('link', 'Back'); ?>
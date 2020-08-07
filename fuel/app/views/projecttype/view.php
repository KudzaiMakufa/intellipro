<h2>Viewing #<?php echo $projecttype->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $projecttype->name; ?></p>

<?php echo Html::anchor('projecttype/edit/'.$projecttype->id, 'Edit'); ?> |
<?php echo Html::anchor('projecttype', 'Back'); ?>
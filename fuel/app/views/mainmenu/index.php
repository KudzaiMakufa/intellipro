<h2>Listing Mainmenus</h2>
<br>
<?php if ($mainmenus): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Url</th>
			<th>Position</th>
			<th>Aligned</th>
			<th>Visble</th>
			<th>Icon</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($mainmenus as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->url; ?></td>
			<td><?php echo $item->position; ?></td>
			<td><?php echo $item->aligned; ?></td>
			<td><?php echo $item->visble; ?></td>
			<td><?php echo $item->icon; ?></td>
			<td>
				<?php echo Html::anchor('mainmenu/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('mainmenu/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('mainmenu/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Mainmenus.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('mainmenu/create', 'Add new Mainmenu', array('class' => 'btn btn-success')); ?>

</p>

<h2>Listing Menus</h2>
<br>
<?php if ($menus): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Icon</th>
			<th>Roles</th>
			<th>Position</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($menus as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->icon; ?></td>
			<td><?php echo $item->roles; ?></td>
			<td><?php echo $item->position; ?></td>
			<td>
				<?php echo Html::anchor('menu/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('menu/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('menu/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Menus.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('menu/create', 'Add new Menu', array('class' => 'btn btn-success')); ?>

</p>

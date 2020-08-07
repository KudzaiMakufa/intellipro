<h2>Listing Links</h2>
<br>
<?php if ($links): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Menu id</th>
			<th>Name</th>
			<th>Icon</th>
			<th>Roles</th>
			<th>Position</th>
			<th>Controller</th>
			<th>Method</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($links as $item): ?>		<tr>

			<td><?php echo $item->menu_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->icon; ?></td>
			<td><?php echo $item->roles; ?></td>
			<td><?php echo $item->position; ?></td>
			<td><?php echo $item->controller; ?></td>
			<td><?php echo $item->method; ?></td>
			<td>
				<?php echo Html::anchor('link/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('link/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('link/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Links.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('link/create', 'Add new Link', array('class' => 'btn btn-success')); ?>

</p>

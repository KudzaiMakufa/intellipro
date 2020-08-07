<h2>Listing Roles</h2>
<br>
<?php if ($roles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($roles as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td>
				<?php echo Html::anchor('role/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('role/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('role/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Roles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('role/create', 'Add new Role', array('class' => 'btn btn-success')); ?>

</p>

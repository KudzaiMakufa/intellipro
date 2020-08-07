<h2>Listing Departments</h2>
<br>
<?php if ($departments): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($departments as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td>
				<?php echo Html::anchor('department/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('department/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('department/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Departments.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('department/create', 'Add new Department', array('class' => 'btn btn-success')); ?>

</p>

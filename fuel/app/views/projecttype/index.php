<h2>Listing Projecttypes</h2>
<br>
<?php if ($projecttypes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($projecttypes as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td>
				<?php echo Html::anchor('projecttype/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('projecttype/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('projecttype/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Projecttypes.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('projecttype/create', 'Add new Projecttype', array('class' => 'btn btn-success')); ?>

</p>

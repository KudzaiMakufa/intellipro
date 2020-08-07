<h2>Listing Patterns</h2>
<br>
<?php if ($patterns): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Module</th>
			<th>Anaylzed Recurring Words</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($patterns as $item): ?>		<tr>

			<td><?php echo $item->module; ?></td>
			<td><?php echo $item->description; ?></td>
			<td>
				<?php //echo Html::anchor('pattern/view/'.$item->id, 'View'); ?> 
				<?php //echo Html::anchor('pattern/edit/'.$item->id, 'Edit'); ?> 
				<?php //echo Html::anchor('pattern/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Patterns.</p>

<?php endif; ?><p>
	

</p>

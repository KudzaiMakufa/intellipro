<h2>Listing Projects</h2>
<br>
<div align="center"><?php echo Html::anchor('project/create', 'Add new Project', array('class' => 'btn btn-success')); ?></div>
<?php if ($projects): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<!-- <th>Start date</th> -->
			<th>Client name</th>
			<th>Client address</th>
			<th>Project type</th>
			<th>Project manager</th>
			<th>End date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($projects as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<!-- <td><?php //echo $item->start_date; ?></td> -->
			<td><?php echo $item->client_name; ?></td>
			<td><?php echo substr($item->client_address, 0, 15)."..."; ?></td>
			<td><?php echo $item->project_type; ?></td>
			<td><?php echo $item->project_manager; ?></td>
			<td><?php echo $item->completion_date; ?></td>
			<td>
				<?php echo Html::anchor('project/view/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> View More	', array('class' => 'btn btn-primary btn-sm')); ?> 
				<?php //echo Html::anchor('project/edit/'.$item->id, 'Edit'); ?> 
				<?php echo Html::anchor('project/delete/'.$item->id,'<i class="icon-trash icon-white"></i> Delete' , array(
					'class' => 'btn btn-danger btn-sm',
					'onclick' => "return confirm('Are you sure?')")); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Projects.</p>

<?php endif; ?><p>
	

</p>

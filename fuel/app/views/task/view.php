<h2>Listing Task Completion status </h2>
<br>
<?php if ($tasks): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Duration</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($tasks as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			
			<td><?php echo $item->duration; ?></td>
			

			<td>
			<?php if($item->done == 'false') : ?> 
				<?php echo Html::anchor('task/setcompleted/'.$item->id.'/'.$id, 'Set completed', array('onclick' => "return confirm('Are you sure?')", "class"=>"btn btn-sm btn-primary")); ?>
			<?php else: ?>
				<?php echo Html::anchor('#', 'Completed'); ?>
			<?php endif; ?><p>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No tasks added to this activity.</p>

<?php endif; ?><p>
	

</p>

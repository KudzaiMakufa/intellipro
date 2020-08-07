

<h2>Listing Milestone Tasks</h2>
<br>

<?php if ($activities): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Project</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
<?php foreach ($activities as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->project; ?></td>
			
			<td>
				
				<div class="btn-toolbar">
								<div class="btn-group">
								<button type="button" class="btn btn-info btn-small" onclick="Task( '<?php echo $item->id; ?>')"> Add Tasks
									</button>
								</div>
								</div> 
				<?php //echo Html::anchor('task/view/'.$item->id, 'Edit'); ?> 
				<?php //echo Html::anchor('activity/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
		
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Activities.</p>

<?php endif; ?><p>
	<?php // echo Html::anchor('activity/create', 'Add new Activity', array('class' => 'btn btn-success')); ?>

</p>
<?php echo render('task/_PickTasks'); ?>
<script>
	function Task(name){
		$('#popupmenu').modal();
		$('.modal-body #listitem').val(name);
		
	
	}
</script>

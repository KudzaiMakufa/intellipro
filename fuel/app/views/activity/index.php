<h2>Listing Activities</h2>
<br>
	<div align="center"><?php echo Html::anchor('activity/create', 'Add new activity', array('class' => 'btn btn-success')); ?></div>
<?php if ($activities): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Project</th>
			<!-- <th>Sequence no</th> -->
			<!-- <th>Number of members</th> -->
			<th>Optimal completion</th>
			<th>Quickest completion</th>
			<th>Late competion</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
<?php foreach ($activities as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->project; ?></td>
			<!-- <td><?php //echo $item->sequence_no; ?></td> -->
			<!-- <td><?php //echo $item->number_of_members; ?></td> -->
			<td><?php echo $item->optimal_completion; ?></td>
			<td><?php echo $item->quickest_completion; ?></td>
			<td><?php echo $item->late_competion; ?></td>
			
			<td>
				
				
				<?php echo Html::anchor('activity/delete/'.$item->id,'<i class="icon-trash icon-white"></i> Delete   	' , array(
					'class' => 'btn btn-danger btn-sm',
					'onclick' => "return confirm('Are you sure?')")); ?>|

				<?php echo Html::anchor('task/view/'.$item->id,'<i></i>  Tasks' , array(
									'class' => 'btn btn-primary btn-sm',
									)); ?>


			</td>
		</tr>
		
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Activities.</p>

<?php endif; ?><p>


</p>

<script>
	function Task(name){
		$('.modal-body #listitem').val(name);
		
		$('#popupmenu').modal();
	}
</script>

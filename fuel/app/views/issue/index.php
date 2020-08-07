<h2>Listing Issues</h2>
<br>
<?php if ($issues): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Problem</th>
			<th>Module</th>
			<th>Status</th>
			<th>Reported by</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($issues as $item): ?>		<tr>

			<td><?php echo $item->problem; ?></td>
			<td><?php echo $item->module; ?></td>
			<?php if($item->status == "pending" ) :?>
				<td>
					<div class="alert-sm alert-warning	" role="alert">
					 	<?php echo $item->status ;?>
					</div>
				</td>

			<?php else :?>
				<td>
					<div class="alert-sm alert-success" role="alert">
						<?php echo $item->status ;?>
					</div>
				</td>

			<?php endif ;?>
			
			<td><?php echo $item->reported_by; ?></td>
			<td>
				<?php 
					if($item->status == 'pending') {
						echo Html::anchor('issue/view/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> View Problem', array('class' => 'btn btn-warning btn-sm'));
					}else{
						echo Html::anchor('issue/view/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> View Solution', array('class' => 'btn btn-primary btn-sm'));
					} 
				?> |
				<?php echo Html::anchor('issue/delete/'.$item->id,'<i class="icon-trash icon-white"></i> Delete' , array(
					'class' => 'btn btn-danger btn-sm',
					'onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Issues.</p>

<?php endif; ?><p align="center">
	<?php echo Html::anchor('issue/create', 'Add new Issue', array('class' => 'btn btn-success')); ?>

</p>

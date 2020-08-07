<h3 align="center">Listing Project Members</h3>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Isactivated</th>
			<th></th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>

			<td><?php
					$name  = DB::select()->from('userprofiles')->where('user_id', $item->id)->as_object()->execute();
			 		echo $name[0]->first_name.' '.$name[0]->surname; 
			 ?></td>
			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php  if($item->isactivated == 0){ echo 'deactivated' ;}else{echo 'activated' ;}; ?></td>
		
			<td>
				<?php echo Html::anchor('userprofile/activate/'.$item->id.'/'.$item->isactivated,  $item->isactivated == 0 ? '<i class="glyphicon glyphicon-wrench"></i>activate' : '<i class="glyphicon glyphicon-wrench"></i>disable' ,array('class' => 'btn btn-default btn-sm')) ?>|
			
				<?php echo Html::anchor('project/delete/'.$item->id,'<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger','onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Projects.</p>

<?php endif; ?><p>
	<div align="center"><?php echo Html::anchor('project/create', 'Add new Project', array('class' => 'btn btn-success')); ?></div>

</p>

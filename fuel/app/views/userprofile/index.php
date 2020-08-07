<h2>Listing Userprofiles</h2>
<br>
<?php if ($userprofiles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>First name</th>
			<th>Surname</th>
			<th>Email</th>
			<th>Phone number</th>
			<th>Position</th>
			<th>Department</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($userprofiles as $item): ?>		<tr>

			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->first_name; ?></td>
			<td><?php echo $item->surname; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->phone_number; ?></td>
			<td><?php echo $item->position; ?></td>
			<td><?php echo $item->department; ?></td>
			<td>
				<?php echo Html::anchor('userprofile/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('userprofile/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('userprofile/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Userprofiles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('userprofile/create', 'Add new Userprofile', array('class' => 'btn btn-success')); ?>

</p>

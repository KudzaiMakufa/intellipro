<h2>Listing Conversations</h2>
<br>
<?php if ($conversations): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Message</th>
			<th>Sender id</th>
			<th>Receiver id</th>
			<th>Cc</th>
			<th>Online status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($conversations as $item): ?>		<tr>

			<td><?php echo $item->message; ?></td>
			<td><?php echo $item->sender_id; ?></td>
			<td><?php echo $item->receiver_id; ?></td>
			<td><?php echo $item->cc; ?></td>
			<td><?php echo $item->online_status; ?></td>
			<td>
				<?php echo Html::anchor('conversation/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('conversation/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('conversation/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Conversations.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('conversation/create', 'Add new Conversation', array('class' => 'btn btn-success')); ?>

</p>

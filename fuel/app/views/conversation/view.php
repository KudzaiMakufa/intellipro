<h2>Viewing #<?php echo $conversation->id; ?></h2>

<p>
	<strong>Message:</strong>
	<?php echo $conversation->message; ?></p>
<p>
	<strong>Sender id:</strong>
	<?php echo $conversation->sender_id; ?></p>
<p>
	<strong>Receiver id:</strong>
	<?php echo $conversation->receiver_id; ?></p>
<p>
	<strong>Cc:</strong>
	<?php echo $conversation->cc; ?></p>
<p>
	<strong>Online status:</strong>
	<?php echo $conversation->online_status; ?></p>

<?php echo Html::anchor('conversation/edit/'.$conversation->id, 'Edit'); ?> |
<?php echo Html::anchor('conversation', 'Back'); ?>
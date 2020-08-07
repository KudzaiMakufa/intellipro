<h2>Viewing #<?php echo $userprofile->id; ?></h2>

<p>
	<strong>User id:</strong>
	<?php echo $userprofile->user_id; ?></p>
<p>
	<strong>First name:</strong>
	<?php echo $userprofile->first_name; ?></p>
<p>
	<strong>Surname:</strong>
	<?php echo $userprofile->surname; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $userprofile->email; ?></p>
<p>
	<strong>Phone number:</strong>
	<?php echo $userprofile->phone_number; ?></p>
<p>
	<strong>Position:</strong>
	<?php echo $userprofile->position; ?></p>
<p>
	<strong>Department:</strong>
	<?php echo $userprofile->department; ?></p>

<?php echo Html::anchor('userprofile/edit/'.$userprofile->id, 'Edit'); ?> |
<?php echo Html::anchor('userprofile', 'Back'); ?>
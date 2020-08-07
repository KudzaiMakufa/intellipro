<head>
<style>
	 <?php  echo Asset::js('jquery.min.js'); ?>
	 <?php echo Asset::css('bootstrap-datepicker3.standalone.min.css'); ?>
 	<?php echo Asset::js(array(
    	'bootstrap-datepicker.js',
    )); ?>
#nationality_code
 {
	width: 5%;
 }

.hero .hero-content {
	padding-top: 15%;
}

.hero h1 {
	font-size: 40px;
}

.control-label {
	color: #fff;
}
.libspicker {
	cursor: pointer;
	background: #c200ff;
    color: #fff;
    border-radius: 15px;
	width: 100%;
	height: 30px;
    float: left
}
#branch_code,#payment_term {
	width: 75%;
    float: left;
}
</style>
</head>


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="hero-content text-center">
				<h1 class="landing-h1" style="">Member Signup</h1>
			</div>
		</div>
	</div>	

	<!-- alerts -->

	<style>
		div.alert p {
			padding: 0;
			line-height: 1;
		}
	</style>
	<div class="row">
		<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
		<?php endif; ?>
		<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error(s) encountered:</strong>
				<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
		<?php endif; ?>
	</div>
	<!-- /alerts -->

	<form class="form-horizontal" method="post">
		<div class="row landing-wrapper" style="min-height: 300px; padding: 20px 0 5px 0;">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">First name</label>
						<div class="col-md-7 col-sm-7 col-xs-12">
							<?php
								
								?>
							<?php echo Form::input('first_name', Input::post('first_name', isset($maternity) ? $maternity->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First name')); ?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Last name</label>
						<div class="col-md-7 col-sm-7 col-xs-12">
						<?php echo Form::input('surname', Input::post('surname', isset($maternity) ? $maternity->surname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Surname')); ?>
						</div>
					</div>
						
				</div>
			</div>
					
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Email address </label>
						<div class="col-md-7 col-sm-7 col-xs-12">
						<?php echo Form::input('email', Input::post('email', isset($maternity) ? $maternity->occupation : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email Address')); ?>
						</div>
					</div>
							
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Mobile number </label>
						<div class="col-md-7 col-sm-7 col-xs-12">
						<?php echo Form::input('phone_number', Input::post('phone_number', isset($maternity) ? $maternity->phone_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Phone number')); ?>
						</div>
					</div>
				</div>
						
			</div>
			<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-md-4 col-sm-4 col-xs-12">Position </label>
								<div class="col-md-7 col-sm-7 col-xs-12">
									<?php echo Form::input('position_code', Input::post('position_code', isset($maternity) ? $maternity->address : ''), array('class' => ' form-control input-sm2 btn-block', 'rows' =>2, 'disabled'=>'disabled','id'=>'position_code')); ?>
								<?php echo Form::input('position', Input::post('position', isset($maternity) ? $maternity->address : ''), array('class' => ' form-control input-sm2 btn-block', 'rows' =>2, 'id'=>'position','type'=>'hidden')); ?>
									<span class="input-group-addon libspicker" onclick="viewRoles()">Pick Role</span>
									
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-md-4 col-sm-4 col-xs-12">Department </label>
								<div class="col-md-7 col-sm-7 col-xs-12">
									

										<?php echo Form::input('department', Input::post('department', isset($maternity) ? $maternity->nationality : ''), array('class' => 'col-md-4 form-control', 'id'=>'nationality', 'type'=>'hidden')); ?>
										<?php echo Form::input('nationality_code', Input::post('nationality_code', isset($maternity) ? $maternity->nationality : ''), array('class' => 'col-md-4 form-control', 'id'=>'nationality_code', 'disabled'=>'disabled')); ?>
										<span class="input-group-addon libspicker" onclick="viewBranches()">Pick Department</span>
										
										
								</div>
							</div>
							
					  </div>
						
			</div>
	
			<div class="row">
				<div class="col-md-6">
						<div class="form-group">

						<?php echo Form::label('Choose a password ', 'password', array('class'=>'control-label col-md-4 col-sm-4 col-xs-12')); ?>

				
							
							<div class="col-md-7 col-sm-7 col-xs-12">
							<?php echo Form::input('password', Input::post('password'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Enter Prefered Password','type'=>'password')); ?>
							</div>
					</div>
					</div>
				<div class="col-md-6">
					<div class="form-group">

					<?php echo Form::label('Confirm Password ', 'confirm', array('class'=>'control-label col-md-4 col-sm-4 col-xs-12')); ?>

						<div class="col-md-7 col-sm-7 col-xs-12">
								<?php echo Form::input('confirm', Input::post('confirm'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Confirm Password','type'=>'password')); ?>
						</div>
					</div>
							
				</div>
						
						
			</div>
					
			
			<div class="row">
				
			
				
				
						
			</div>	
			
						
			
				
								
	
								
			</div>
			<div class="row form-actions text-center landing-text-center" style="margin-top: 20px;">
					<button type="submit" class="btn btn-primary btn-lg btn-cta">Signup</button>
					<a href="<?php echo Uri::create('/login'); ?>">
						<button type="button" class="btn btn-danger btn-lg btn-cta">Cancel</button>
					</a>
			</div>
		</div>
	</form>
	
</div>
<!-- Modal -->
 <?php //echo render('user/_pickBranch'); ?>
 <?php //echo render('user/_pickPaymentTerm'); ?>
<?php //echo Asset::js('country.js'); ?>

<?php echo render('user/_pickCountry'); ?>
<?php echo render('user/_pickRole'); ?>
	<script>
	function viewBranches()
 		{
			$('#viewBranches').modal();
		}
	</script>
<script>
	populateCountries("country", "state","district");
	populateStates("country", "state","district");

	

</script>
<script>
	
	
	function check()
	{
		var nat_id = document.getElementById('nat_id').value;
		
		if(nat_id.length==2||nat_id.length==9||nat_id.length==11)
		{
			document.getElementById('nat_id').value+='-';
		}
		
	}
		
		function viewRoles()
 		{
			$('#viewRoles').modal();
		}
 		function viewBranches()
 		{
			$('#viewBranches').modal();
		}
		function viewPayments()
 		{
			$('#viewPayments').modal();
		}
		
		
</script>
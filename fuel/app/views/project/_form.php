
<style>
#project_type_code{

	width: 40%


}
.label{
	align: center;
}
.libspicker {
	cursor: pointer;
	background: #5762ff;
    color: #fff;
    border: none;
    width: 9%;
    height: 34px; 
    float: left;
    border-radius: 25px
</style>
<script>

	
	
	function check()
	{
		var longi = document.getElementById('long').value;
		var lati = document.getElementById('lati').value;
		var longbut=false;
		var latibut = false;
		
		if(longi==0||longi==0.||lati==0 ||lati==0.)
		{
			document.getElementById('mysubmit').disabled=true;
		}
		if(longi!=0.0)
		{
			if(isNaN(longi))
			{
				var a =document.getElementById('myerror');
				a.innerHTML='Your longitude is not a number';
				a.style.display='block';
				document.getElementById('mysubmit').disabled=true;				
			}
			else
			{
				longbut= true;	
			}
		}
		
		if(lati!=0.0)
		{
			if(isNaN(lati))
			{
				var a =document.getElementById('myerror');
				a.innerHTML='Your latitude is not a number';
				a.style.display='block';
				document.getElementById('mysubmit').disabled=true;				
			}
			else
			{
				latibut= true;	
			}
		}
		if(longbut==true && latibut==true)
		{
			document.getElementById('mysubmit').disabled=false;	
			var a =document.getElementById('myerror');
				
				a.style.display='none';	
		}
	}
</script>

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2 align="center"><?php echo "New Project"; ?></h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br/>
			
			<form class="form-horizontal" method="post">
			
			<div class="alert alert-danger col-md-10" id="myerror" style="display:none"></div>


			
			<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Project Type</label>
				<?php echo Form::input('project_type_code', Input::post('project_type_code', isset($project) ? $project->user_id : ''), array('class' => 'col-md-4 form-control', 'disabled'=>'disabled' ,'id'=>'project_type_code','placeholder'=>'pick type of Project')); ?>

				<?php echo Form::input('project_type', Input::post('project_type', isset($project) ? $project->user_id : ''), array('id'=>'project_type','type'=>'hidden')); ?>

				<span class="input-group-addon libspicker" onclick="viewVendor()" 'id'="pickerNo">Pick</span>

			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Project name</label>
				<div class="col-md-6 col-sm-9 col-xs-12">
					<?php echo Form::input('name', Input::post('name', isset($project) ? $project->name : ''), array('class' => 'form-control', 'placeholder'=>'project name')); ?>
				</div>
				
			</div> 
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
				<div class="col-md-3 col-sm-3 col-xs-4">
					<?php echo Form::input('start_date', Input::post('start_date', isset($project) ? $project->size : ''), array('class' => 'btn-block form-control', 'placeholder'=>'start date' ,'type'=>'date')); ?>
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-8">
				
				<?php echo Form::input('client_name', Input::post('client_name', isset($project) ? $project->size : ''), array('class' => 'btn-block form-control', 'placeholder'=>'client name')); ?>
				</div>
			</div>
			
			<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Client Address </label>
<div class="col-md-6 col-xs-12 col-sm-6">
<?php echo Form::textarea('client_address', Input::post('client_address', isset($project->address) ? $project->address->address : ''),
					 array('class' => ' form-control', 'rows' =>3, 'placeholder'=>'Business Address Number and Street name')); ?>
</div>
</div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Project Manager </label>
<div class="col-md-6 col-xs-12 col-sm-6">
<?php echo Form::input('project_manager', Input::post('project_manager', isset($project->address) ? $project->address->phone : ''), array('class' =>' form-control','placeholder'=>'project manager')); ?>
</div>
</div>



<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Completion Date </label>
<div class="col-md-6 col-xs-12 col-sm-6">
<?php echo Form::input('completion_date', Input::post('completion_date', isset($project->latitude) ? $project->latitude : ''), array('class' =>' form-control','onkeyup'=>'check()','placeholder'=>'completion date','type'=>'date', 'id'=>'lati')); ?>
</div>
</div>

			
			<div class="ln_solid"></div>
			<div class="col-md-9 col-md-offset-3 col-xs-12 col-sm-12">
				<button type="submit" class="btn btn-success btn-round btn-md" ><?php echo "Submit"; ?></button>
				<a href="<?php echo Uri::create('project'); ?>" style="text-decoration: none">
					<button type="button" class="btn btn-warning btn-round btn-md">Cancel</button>
				</a>
			</div>
			
			
			</form>
		</div>
	</div>
</div>
<div align="center"><?php echo render('project/_pickProjectType'); ?></div>
<script>
	function viewVendor()
 		{
			$('#viewTypes').modal();
		}
</script>
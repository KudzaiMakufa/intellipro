<style>
#project__code,#name_code{

	width: 75%


}

.libspicker {
	cursor: pointer;
	background: #428BCA;
    color: #fff;
    border: none;
    width: 25%;
    height: 34px; 
    float: left;
    border-radius: 25px
</style>
<h2 align="center">New Activity</h2>
<br>
<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<fieldset>


             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                 <div class="col-md-6 col-sm-9 col-xs-12">
                      <?php echo Form::input('name', Input::post('name', isset($activity) ? $activity->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name','id'=>'name','type'=>'hidden')); ?>
                       <?php echo Form::input('name_code', Input::post('name_code', isset($activity) ? $activity->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name','id'=>'name_code','disabled'=>'disabled')); ?>
                       <span class="input-group-addon libspicker" onclick="viewName()" 'id'="pickerName">Pick</span>

                </div>
                
            </div> 

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Project</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                      <?php echo Form::input('project', Input::post('project', isset($activity) ? $activity->project : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Project','id'=>'project','type'=>'hidden')); ?>
                       <?php echo Form::input('project__code', Input::post('project__code', isset($activity) ? $activity->project : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Project','id'=>'project__code','disabled'=>'disabled')); ?>
                       <span class="input-group-addon libspicker" onclick="viewModule()" 'id'="pickerNo">Pick</span>

                </div>
                
            </div> 

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sequence no</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                     <?php echo Form::input('sequence_no', Input::post('sequence_no', isset($activity) ? $activity->sequence_no : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Sequence no')); ?>

                </div>
                
            </div> 

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Number of members</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <?php echo Form::input('number_of_members', Input::post('number_of_members', isset($activity) ? $activity->number_of_members : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Number of members')); ?>

                </div>
                
            </div> 

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Optimal completion</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    	<?php echo Form::input('optimal_completion', Input::post('optimal_completion', isset($activity) ? $activity->optimal_completion : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Optimal completion')); ?>
                </div>
                
            </div> 

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Quickest completion</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    		<?php echo Form::input('quickest_completion', Input::post('quickest_completion', isset($activity) ? $activity->quickest_completion : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Quickest completion')); ?>

                </div>
                
            </div> 

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Late competion</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    		<?php echo Form::input('late_competion', Input::post('late_competion', isset($activity) ? $activity->late_competion : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Late competion')); ?>

                </div>
                
            </div> 

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Cost</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    		<?php echo Form::input('totalcost', Input::post('totalcost', isset($activity) ? $activity->totalcost : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Totalcost')); ?>


                </div>
                
            </div> 
        <div class="form-group" align="center">
            <label class='control-label'>&nbsp;</label>
            <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary' )); ?>      </div>



	</fieldset>
	<?php echo render('activity/_pickProject'); ?>
    <?php echo render('activity/_pickName'); ?>
	<script>
	function viewModule()
 		{
			$('#viewModule').modal();
		}
        function viewName()
        {
            $('#viewName').modal();
        }
	</script>
	<?php echo Form::close(); ?>


<p><?php echo Html::anchor('activity', 'Back'); ?></p>

<style>
#module_code,#problem_code{

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
<h2 align="center">Issue Solution </h2>
<br>

<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>


             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Problem</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <?php echo Form::input('problem_code', Input::post('problem_code', isset($issue) ? $issue->module : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Problem','id'=>'problem_code')); ?>
                <?php echo Form::input('problem', Input::post('problem', isset($issue) ? $issue->module : ''), array('class' => 'col-md-4 form-control', 'type'=>'hidden','id'=>'problem')); ?>
                <span class="input-group-addon libspicker" onclick="pickerProb()" 'id'="pickerProb">Pick</span>
                </div>
                
            </div> 

        <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Solution</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::textarea('solution', Input::post('solution', isset($issue) ? $issue->problem : ''), array('class' => 'col-md-4 form-control', 'rows' =>3 ,'placeholder'=>'solution')); ?>
                </div>
                
            </div> 

          

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Solved By</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <?php echo Form::input('reported_by_code', Input::post('reported_by_code', isset($issue) ? $issue->reported_by : ''), array('class' => 'col-md-4 form-control','id'=>'reported_by_code','disabled'=>'disabled')); ?>
                     <?php echo Form::input('reported_by', Input::post('reported_by', isset($issue) ? $issue->reported_by : ''), array('class' => 'col-md-4 form-control', 'id'=>'reported_by' ,'type'=>'hidden')); ?>
                </div>
                
            </div> 

        <div class="form-group" align="center">
            <label class='control-label'>&nbsp;</label>
            <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary' )); ?>      </div>


<p><?php echo Html::anchor('issue', 'Back'); ?></p>
	</fieldset>
	
    <?php echo render('issue/_pickProblem'); ?>
	<script>
	function viewModule()
 		{
			$('#viewModule').modal();
		}
    function pickerProb(){
        $('#pickerProb').modal();
    }

	</script>
<?php echo Form::close(); ?>

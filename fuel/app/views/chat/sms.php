	<style>
#module_code{

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
<h2 align="center">Sms broadcasting portal </h2>
<br>


<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::textarea('problem', Input::post('problem', isset($issue) ? $issue->problem : ''), array('class' => 'col-md-4 form-control', 'rows' =>3 ,'placeholder'=>'type message to broadcast')); ?>
                </div>
                
            </div> 

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pick Number</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <?php echo Form::input('module_code', Input::post('module_code', isset($issue) ? $issue->module : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'pick a number to add to send list','id'=>'module_code','disabled'=>'disabled')); ?>
				<?php echo Form::input('module', Input::post('module', isset($issue) ? $issue->module : ''), array('class' => 'col-md-4 form-control', 'type'=>'hidden','id'=>'module')); ?>
				<span class="input-group-addon libspicker" onclick="viewModule()" 'id'="pickerNo">Pick</span>
                </div>
                
            </div> 

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Selected recipients :</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <?php echo Form::textarea('reported_by_code', Input::post('reported_by_code', isset($issue) ? $issue->reported_by : ''), array('class' => 'col-md-4 form-control','id'=>'reported_by_code','disabled'=>'disabled')); ?>
                     <?php echo Form::input('reported_by', Input::post('reported_by', isset($issue) ? $issue->reported_by : ''), array('class' => 'col-md-4 form-control', 'id'=>'reported_by' ,'type'=>'hidden')); ?>
                </div>
                
                
            </div> 

        <div class="form-group" align="center">
            <label class='control-label'>&nbsp;</label>
            <?php echo Form::submit('submit', 'Send', array('class' => 'btn btn-primary' )); ?>      </div>


<p><?php echo Html::anchor('issue', 'Back'); ?></p>
	</fieldset>
	<?php echo render('chat/_pickModule'); ?>
	<script>
	function viewModule()
 		{
			$('#viewModule').modal();
		}
	</script>
<?php echo Form::close(); ?>

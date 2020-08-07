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
<h2 align="center">Role based ACL </h2>
<br>


<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>


            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Change Role</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <?php echo Form::input('module_code', Input::post('module_code', isset($issue) ? $issue->module : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'select new role','id'=>'module_code','disabled'=>'disabled')); ?>
				<?php echo Form::input('module', Input::post('module', isset($issue) ? $issue->module : ''), array('class' => 'col-md-4 form-control', 'type'=>'hidden','id'=>'module')); ?>
				<span class="input-group-addon libspicker" onclick="viewModule()" 'id'="pickerNo">select</span>
                </div>
                
            </div> 

            
        <div class="form-group" align="center">
            <label class='control-label'>&nbsp;</label>
            <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary' )); ?>      </div>


<p><?php echo Html::anchor('issue', 'Back'); ?></p>
	</fieldset>
	<?php echo render('role/_pickModule'); ?>
	<script>
	function viewModule()
 		{
			$('#viewModule').modal();
		}
	</script>
<?php echo Form::close(); ?>


<!-- 	<style>
		 .modal {
       width: 100px;
       height: 100px;
       margin:0 auto;
       display:table;
       position: absolute;
       left: 0;
       right:0;
       top: 50%; 
       
       -webkit-transform:translateY(-50%);
       -moz-transform:translateY(-50%);
       -ms-transform:translateY(-50%);
       -o-transform:translateY(-50%);
       transform:translateY(-50%);
    }
	</style>
 -->


<div align="center">
<div class="modal" id="popupmenu" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Project  Activities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php echo Form::open(array("class"=>"form-horizontal")); ?>
        <fieldset>
			<div class="form-group">
				<?php echo Form::label('Number of Project Activities', 'name', array('class'=>'control-label')); ?>
				<br>
					<br>
            <?php echo Form::input('listitem', Input::post('listitem'), array('class' => 'col-md-4 form-control', 'id '=>'listitem','type'=>'hidden')); ?>
					<?php echo Form::input('name', Input::post('name', isset($menuitem) ? $menuitem->name : ''), array('class' => 'col-md-4 form-control', 'id '=>'Name')); ?>

			</div>
		

      </div>
      <div class="modal-footer" >
      	<div align="center" >
          <?php echo Form::submit('submit', 'Proceed', array('class' => 'btn btn-primary')); ?>
      	<?php //echo Html::anchor('menuitem/create', 'Proceed', array('class' => 'btn btn-primary')); ?>
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
      </div>
      </fieldset>
    <?php echo Form::close(); ?>
    </div>
  </div>
</div>
</div>


</body>
</html>
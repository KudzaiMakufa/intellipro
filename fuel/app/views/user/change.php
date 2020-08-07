<h4 align="center"><?php
    list(, $userid) = Auth::get_user_id();
   $name  = DB::select('email')->from('users')->where('id', $userid)->as_object()->execute();
        echo "Updating password for  account email : ".$name[0]->email;

  ?></h4>
  <b>
    <b>
<?php echo Form::open(array("class"=>"form-horizontal")); ?>
    <b><b>
    <fieldset>
        <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Password</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <?php echo Form::input('oldpass', Input::post('oldpass', isset($loginn) ? '' : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'enter old password','type'=>'password')); ?>
                </div>
                
            </div> 

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                     <?php echo Form::input('newpass', Input::post('newpass', isset($loginn) ? '': ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'New Password','type'=>'password')); ?>
                </div>
                
            </div> 

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                     <?php echo Form::input('password', Input::post('password', isset($loginn) ? '': ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Password','type'=>'password')); ?>
                </div>
                
            </div> 

        <div class="form-group" align="center">
            <label class='control-label'>&nbsp;</label>
            <?php echo Form::submit('submit', 'Update Password', array('class' => 'btn btn-primary' )); ?>      </div>
    </fieldset>
<?php echo Form::close(); ?>

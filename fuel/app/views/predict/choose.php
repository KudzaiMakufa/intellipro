<h4 align="center"><strong> <span class='muted'>Select project to perfom prediction on</span></strong></h4>
<p align="center">
	

</p>
<form method="post" class="form-horizontal" action="<?php echo Uri::create('predict/choose'); ?>">
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Product</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<?php 
				
					$arr=array(0=>'--Please Select A Project--');
					foreach ($items as $item) {
						$arr[$item->id] = $item->name;
					}
					
					echo Form::select('project_id', Input::post('project_id', isset($item) ? $item->name : ''),$arr ,		
					 array('class' => 'form-control','onchange'=>"setProject()",'id'=>'inputurl')); 
				?>
				
			</div>

		</div>

		<?php //Debug::dump($item->name) ;die; ?>

		<div align="center">
				<a class="glyphicon glyphicon-asterisk btn btn-info " id="btn-project" href="#">Proceed</a>

				</div>

</form>

<script>
	function setProject(){
		//disease 


		var target = document.getElementById('inputurl');
		//alert(target.value);
		document.getElementById("btn-project").onclick = function() {
    	this.href = '<?php echo Uri::base(false) ;?>'+"predict/index/"+target.value;
   		};

   	


		
		//alert(target.value);
	}
</script>
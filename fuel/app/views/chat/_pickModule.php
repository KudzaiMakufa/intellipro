<div class="modal fade" id="viewModule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" data-backdrop="false" align="center">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       		 <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">Pick Activity</h4>
      </div>
      <div class="modal-body">
	      	<div class="form-group">
				<?php echo Form::input('search','',
					array('class' => 'col-md-4 form-control', 'placeholder'=>'Search...' ,'onkeyup'=>'myFunction2()', 'id'=>'myInput2'));
			    ?>

			</div>
	       <?php 
				/*list(, $userid) = Auth::get_user_id();
				$name  = DB::select()->from('userprofiles')->where('user_id', $userid)->as_object()->execute(); 
				$fullname =  $name[0]->first_name.' '.$name[0]->surname  ;*/
	       		$module = Model_Userprofile::find_all();
	       		if ($module): 
	       	?>
			<table class="table table-striped" id="myTable2">
				<thead>
					<tr>
						<th>Fullname </th>
						<th>Phone Number</th>
					
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($module as $item): ?>		
						<tr>
							<td><?php echo $item->first_name.' '.$item->surname ; ?></td>
							<td><?php echo substr($item->phone_number, 0, 10)." "; ?></td>
							
							
							<td>
							<div class="btn-toolbar">
								<div class="btn-group">
								<button type="button" class="btn btn-info btn-small" onclick="pickBranch2('<?php echo $item->phone_number; ?>','<?php echo $item->first_name.' '.$item->surname ; ?>')"> select
									</button>
								</div>
								</div>

							</td>
						</tr>
				<?php endforeach; ?>	
			</tbody>
			</table>

		<?php else: ?>
		<p>No Project Types.</p>

		<?php endif; ?>
      </div>
            
    </div>
  </div>
</div>
<script>
	var array = [];
	function pickBranch2(name,fullname)
	{
		array.push(name);
		document.getElementById('module_code').value='Selected = '+fullname+' ,Phone ='+name;
		document.getElementById('module').value=name;
		document.getElementById('reported_by_code').value=array;
		document.getElementById('reported_by').value=array;
	
		
		$('#viewModule').modal('hide');
		
	}
	
	function myFunction2() 
	{
	  // Declare variables 
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("myInput2");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable2");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[0];
	    
	    if (td) {
	      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    } 
	  }
	}
</script>
	
	


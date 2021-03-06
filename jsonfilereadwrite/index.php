<?php 
	require 'header.php';
?>

	<script type="text/javascript">
		
		$(document).ready(function(){

	    	$('#editStudentdiv').hide();

			getAllstudents();

			function getAllstudents(){
				$.get('studentlist.json',function(response){
					// console.log(typeof(response));

					// string
					var studentObjArray = JSON.parse(response);

					// !string
					// var studentObjArray = response;

					var html =''; var j = 1;

					$.each(studentObjArray, function(i,v){
						var name = v.name;
						var email = v.email;
						var gender = v.gender;
						var address = v.address;
						var profile = v.profile;

						html += `<tr>
									<td> ${j++}. </td>
									<td> ${name} </td>
									<td> ${gender} </td>
									<td> ${email} </td>

									<td> 
										<button class="btn btn-outline-primary detailBtn" data-sid="${i}" data-name="${name}" data-email="${email}" data-gender="${gender}" data-address="${address}" data-profile="${profile}"> Detail </button>

										<button class="btn btn-outline-warning editBtn" data-id="${i}" data-name="${name}" data-email="${email}" data-gender="${gender}" data-address="${address}" data-profile="${profile}"> Edit </button>

										<button class="btn btn-outline-danger deleteBtn" data-id="${i}"> Delete </button>
																</td>
								</td>`;
					});
					$('tbody').html(html);
				});
			}
			// Detail
			$('tbody').on('click','.detailBtn',function(){
				var id = $(this).data('sid');
				var name = $(this).data('name');
				var email = $(this).data('email');
				var gender = $(this).data('gender');
				var address = $(this).data('address');
				var profile = $(this).data('profile');

				$('#exampleModalLabel').text(name);

				$('#detail_name').text(name);
				$('#detail_gender').text(gender);
				$('#detail_email').text(email);
				$('#detail_address').text(address);

				$('#detail_profile').attr('src',profile);

				$('#detailModal').modal('show');
			});

			// Delete
			$('tbody').on('click','.deleteBtn',function(){
				var id = $(this).data('id');

				var ans = confirm('Are you sure want to delete?');

				if (ans) {
					$.post('deletestudent.php',{
						sid:id
					},function(data){
						getAllstudents();
					})
				}
			});

			// Edit
			$('tbody').on('click','.editBtn',function(){
				var id = $(this).data('id');
				var name = $(this).data('name');
				var email = $(this).data('email');
				var gender = $(this).data('gender');
				var address = $(this).data('address');
				var profile = $(this).data('profile');

	    		$('#editStudentdiv').show();
	    		$('#addStudentdiv').hide();

				$('#edit_id').val(id);

				$('#edit_name').val(name);
				$('#edit_email').val(email);
				$('#edit_address').val(address);

				$('#edit_oldphoto').val(profile);

				$('#showOldPhoto').attr('src',profile);

				if (gender == "Male") {
					$('#edit_male').prop('checked', true);
				}else{
					$('#edit_female').prop('checked', true);
				}

			});

		});

	</script>


	<!-- Detail Modal -->
	<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel"></h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	        		<div class="container">
	        			<div class="row">
	        				<div class="col-4">
	        					<img src="" class="img-fluid" id="detail_profile">
	        				</div>
	        				<div class="col-8">
	        					<h1 id="detail_name"></h1>
	        					<p id="detail_gender"></p>
	        					<p id="detail_email"></p>
	        					<p id="detail_address"></p>

	        				</div>
	        			</div>
	        		</div>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<div class="container" id="addStudentdiv">
		
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h1 class="display-4"> Add New Student </h1>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col align-self-center">
				<form action="addstudent.php" method="POST" enctype="multipart/form-data">
					
					<div class="form-group row">
						<label for="profile" class="col-sm-2 col-form-label"> Profile </label>
					    <div class="col-sm-10">
					    	<input type="file"  id="profile" name="profile">
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="name" placeholder="Enter Name" name="sname">
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Email </label>
					    <div class="col-sm-10">
					    	<input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
					    </div>
					</div>

					<fieldset class="form-group">
					    <div class="row">
					    	<legend class="col-form-label col-sm-2 pt-0"> Gender </legend>
					      
					      	<div class="col-sm-10">
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
					          		<label class="form-check-label" for="male">
					            		Male
					          		</label>
					        	</div>
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
					          		<label class="form-check-label" for="female">
					            		Female
					          		</label>
					        	</div>
					        
					      </div>
					    </div>
					</fieldset>

					<div class="form-group row">
						<label for="address" class="col-sm-2 col-form-label"> Address </label>
					    <div class="col-sm-10">
					    	<textarea class="form-control" rows="5" name="address"></textarea>
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-10">
					   		<button type="submit" class="btn btn-primary">
					   			SAVE
					   		</button>
					    </div>
					</div>


				</form>
			</div>
		</div>
	</div>

	<div class="container" id="editStudentdiv">
		
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h1 class="display-4"> Edit Existing Student </h1>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col align-self-center">
				<form action="updatestudent.php" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="id" id="edit_id">
					<input type="hidden" name="oldphoto" id="edit_oldphoto">
					
					<div class="form-group row">
						<label for="profile" class="col-sm-2 col-form-label"> Profile </label>
					    <div class="col-sm-10">

							<ul class="nav nav-tabs" id="myTab" role="tablist">
	  							<li class="nav-item">
	    							<a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true"> Old Profile </a>
	  							</li>
	  
		  						<li class="nav-item">
		    						<a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#newprofile" role="tab" aria-controls="newprofile" aria-selected="false"> New Profile</a>
		  						</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="oldprofile" role="tabpanel" aria-labelledby="oldprofile-tab">
									<img src="" id="showOldPhoto" class="img-fluid" width="100px" height="90px">
								</div>
							
								<div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
									<input type="file"  id="profile" name="newphoto">
								</div>
							</div>

						
					    	
					    </div>
					</div>

					<div class="form-group row">
						<label for="edit_name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="edit_name" placeholder="Enter Name" name="name">
					    </div>
					</div>

					<div class="form-group row">
						<label for="edit_email" class="col-sm-2 col-form-label"> Email </label>
					    <div class="col-sm-10">
					    	<input type="email" class="form-control" id="edit_email" placeholder="Enter Email" name="email">
					    </div>
					</div>

					<fieldset class="form-group">
					    <div class="row">
					    	<legend class="col-form-label col-sm-2 pt-0"> Gender </legend>
					      
					      	<div class="col-sm-10">
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="edit_male" value="Male">
					          		<label class="form-check-label" for="edit_male">
					            		Male
					          		</label>
					        	</div>
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="edit_female" value="Female">
					          		<label class="form-check-label" for="edit_female">
					            		Female
					          		</label>
					        	</div>
					        
					      </div>
					    </div>
					</fieldset>

					<div class="form-group row">
						<label for="edit_address" class="col-sm-2 col-form-label"> Address </label>
					    <div class="col-sm-10">
					    	<textarea class="form-control" rows="5" name="address" id="edit_address"></textarea>
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-10">
					   		<button type="submit" class="btn btn-primary">
					   			SAVE
					   		</button>
					    </div>
					</div>


				</form>
			</div>
		</div>
	</div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th> # </th>
				<th> Name </th>
				<th> Gender </th>
				<th> Email </th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>

<?php 
	require 'footer.php';
?>




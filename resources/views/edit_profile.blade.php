@extends("home_template")
	@section("edit_profile")
		<div class="display_articles_container">
				<div class="edit_profile_container">
					<h2>General Account Settings</h2>
					<div class="edit_prof_underline"></div>
					<div class="row edit_prof_row">
						<div class="col-sm-4 col-md-4 col-lg-4">
							<p>First Name :  </p>
							<p>Last Name : </p>
							<p>Email Address : </p>
							<p>User Name : </p>
						</div>

						<div class="col-sm-8 col-md-8 col-lg-8">
							<p>{{ $user_firstname }}</p>
							<p>{{ $user_lastname }}</p>
							<p>{{ $user_email }}</p>
							<p>{{ $user_username }}</p>
							
						</div>
					</div>
					<button class='btn btn-success edit_prof_btn' data-toggle="modal" data-target="#edit_profile_name{{$user->id}}">
							Edit
					</button>
					<a href="/">
						<button class='btn btn-default edit_prof_btn'>
								Cancel
						</button>
					</a>
				</div>	<!--edit_profile_container-->

						<div class="modal fade" id="edit_profile_name{{$user->id}}" role="dialog" style="z-index: 99999;">
	   						<div class="modal-dialog">
	      	<!-- Modal content-->
			     				<div class="modal-content">
			        				<div class="modal-header">
			          					<button type="button" class="close" data-dismiss="modal">&times;</button>
			          					<h4 class="modal-title">Edit Account</h4>
			      					</div>
			        				<div class="modal-body">
			         					<form method="POST" action='{{url("saveEditProfile")}}' enctype="multipart/form-data">
			         					{{ csrf_field() }}

			         						<div class="form-group">
			         							<label for="title">First Name:</label>
			         							<input type="text" class="form-control" value="{{ $user_firstname }}" name="edit_firstname" id="edit_firstname" required>
			         						</div>

			         						<div class="form-group">
			         							<label for="title">Last Name:</label>
			         							<input type="text" class="form-control" value="{{ $user_lastname }}" name="edit_lastname" id="edit_lastname" required>
			         						</div>

			         						<div class="form-group">
			         							<label for="title">Email:</label>
			         							<input type="text" class="form-control" value="{{ $user->email }}" name="edit_email" id="edit_email" required>
			         						</div>

			         						<div class="form-group">
			         							<label for="title">Username:</label>
			         							<input type="text" class="form-control" value="{{ $user_username }}" name="edit_username" id="edit_username" required>
			         						</div>

			         						<div class="form-group">
			         							<label for="title">Password:</label>
			         							<input type="password" class="form-control" value="{{ $user_password }}" name="edit_password" id="edit_password" required>
			         						</div>
			         						
			        				</div>
			        				<div class="modal-footer">  
			        					<input type="submit" name="submit" value="Save" class="btn btn-success">
									
			          					<button type="button" class="btn btn-default" data-dismiss="modal">
			          						Close
			          					</button>
			          					</form>
			        				</div><!--modal-footer-->
			      				</div><!--modal-content-->
			      			</div><!--modal dialog-->
			      		</div>	<!--modal-->	


				



		</div><!--display_articles_container-->



	@endsection
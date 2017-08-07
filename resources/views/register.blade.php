@extends ("home_template")
	@section("register_content")
		<div class="register_container">
			<h4>Create your Growth Hack Philippines Account</h4>
			<!-- <div class="row"> -->
				<div register_container2">
					<div class="register_box">
						<form method="POST" action="/registerUser">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="firstname">
									<span>
										First Name *
									</span>
								</label>				
								<input type="text" class="form-control" name="register_firstname" id="register_firstname" required>
							</div>
							<div class="form-group">
								<label for="lastname">
									<span>
										Last Name *
									</span>
								</label>				
								<input type="text" class="form-control" name="register_lastname" id="register_lasttname" required>
							</div>
							<div class="form-group">
								<label for="email">
									<span>
										Email Address *
									</span>
								</label>				
								<input type="email" class="form-control" name="register_email" id="register_email" required>
							</div>
							<div class="form-group">
								<label for="gender">
									<span>
										Gender *
									</span>
								</label>	<br>			
								<input type="radio" name="register_gender" value="male" checked> Male
								&nbsp;&nbsp;&nbsp;
  								<input type="radio" name="register_gender" value="female"> Female<br>
							</div>
							<div class="form-group">
								<label for="username">
									<span>
										User Name *
									</span>
								</label>				
								<input type="text" class="form-control" name="register_username" id="register_username" required>
							</div>
							<div class="form-group">
								<label for="password">
									<span>
										Password *
									</span>
								</label>				
								<input type="password" class="form-control" name="register_password" id="register_password" required>
							</div>
							<div class="form-group">
								<label for="confrim_password">
									<span>
										Confirm Password *
									</span>
								</label>				
								<input type="password" class="form-control" name="register_password_confirmation" id="register_confirm_password" required>
							</div>
							<div class="register_button_container">
								<input type="submit" name="register_button" value="Register" class="btn btn-success" id="register_button">
							</div>	
						</form>		
							<a href="/blog">
								<button name="cancel_button" value="Cancel" class="btn btn-default" id="cancel_register_button">Cancel
								</button>
							</a>	
						
					</div>
				</div>
			<!-- </div>			 -->
		</div>
	@endsection
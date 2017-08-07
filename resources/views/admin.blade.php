		<div class="side_menu_container">
			<div class="pic_name_container">
				<div class="profile_pic_container">
					 <img src="{{ asset('images/prof_pic.jpg') }}">
				</div>
				<div class="sidemenu_name_container"> 
					<span>Mark Dollano</span><br>
					<span>Admin</span>
				</div>
			</div>	

			<div class="admin_panel_container">

					<div class="dashboard_container icon_container">
						<i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;<span>Dashboard</span>		
					</div>

				<a href='{{url("/articles")}}'>
					<div class="articles_container icon_container">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							&nbsp;<span>Articles</span>
					</div>
				</a>
				
				<div class="members_container icon_container">
					<i class="fa fa-address-book-o" aria-hidden="true"></i>
						&nbsp;<span>Members</span>
				</div>
				<a href="/">
					<button class='btn btn-success edit_prof_btn'>
								Back To Home
						</button>
				</a>		
			</div>	
		</div>


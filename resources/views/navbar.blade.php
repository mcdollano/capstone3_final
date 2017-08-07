<div class="navbar_container">
	<div class="logo_container">
        <a href="/">
		  <img src="{{ asset('images/growth_hack_logo2_transparent.png') }}">
        </a>
	</div>
</div>

<header class="header-container">
    <nav class="navbar navbar-inverse nav_container">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                  
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

          <ul class="nav navbar-nav nav_cat_container">
            <li class="first_li"><a href="/">HOME</a></li>
            <li><a href="/articleCategoryBusiness">BUSINESS</a></li>
         
            <li><a href="/articleCategoryStartup">STARTUP</a></li>
            <li><a href="/articleCategoryCareer">CAREER</a></li>
            <li class="leadership"><a href="/articleCategoryLeadership">LEADERSHIP</a></li>
          </ul>

           @if (Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         Hi, {{ Auth::user()->first_name }}
                        <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href='/logout'>Log Out</a>
                            </li>
                            <li>
                                <a href="/editProfile">Edit Profile</a>
                            </li>

                            @if(Auth::user()->user_role == "admin")

                            <li>
                                <a href="/articles">Admin Panel</a>
                            </li>

                            @endif

                          
                        </ul>
                </li>
            </ul>
    
           @else

            <ul class="nav navbar-nav navbar-right">
                <li>
                	<a href="#" data-toggle="modal" data-target="#login_modal">
                		<span class="glyphicon glyphicon-log-in"></span> Login
                	</a>
                	<div class="modal fade" id="login_modal" role="dialog">
                		<div class="modal-dialog login_modal_dialog">
                			<div class="modal-content login_modal_content">
                				<div class="modal-header" id="login_modal_header">
                					<button type="button" class="close" data-dismiss="modal">
                						&times;
                					</button>
        		          			<img src="{{ asset('images/growth_hack_logo2_transparent.png') }}">
                				</div>
                				<div class="modal-body" id="login_modal_body">
                					<p>Sign in to Growth Hack Philippines to connect with voices and perspectives that matter.</p>
                					<form method="POST" action="/login">
                					{{ csrf_field() }}
                						<div class="form-group login_container">
                							<label for="username">
                								Username
                							</label>
                							<input type="text" class="form-control" name="login_username" id="login_username" required>
                						</div>	
                						<div class="form-group login_container">
                							<label for="username">
                								Password
                							</label>
                							<input type="password" class="form-control" name="login_password" id="login_password" required>
                						</div>
                						<input type="submit" name="submit" value="Log In" class="btn btn-success" id="login_button">	
                					</form>	
                						<div class="modal-footer" id="login_modal_footer">
        		        					<p>Not a member yet?</p>
        		        					 <a href="/register">
        			          					<button type="button" class="btn btn-success" data-dismiss="modal" id="login_register_btn" href="/register">
        			          						
        			          							<span>Register Now</span>
        			          						
        			          					</button>
        			          				</a>	
        		          					</form>
        		        				</div>	

                					
                				</div>
                			</div><!--modal-content-->
                		</div>
                	</div>
                </li>  
                <li>
                	<a href="/register">
                		<span class="glyphicon glyphicon-user"></span> Sign Up
                	</a>
                </li> 
            </ul>
        
        @endif

        <form method="GET" action="/search" class="navbar-form search_container" role="search">
            <div class="input-group add-on search_container">
                <input class="form-control" placeholder="Search" name="search_bar" id="srch-term" type="text">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>    
                        </button>
                    </div>
            </div>
        </form>

        </div>
      </div>
    </nav>
</header>  

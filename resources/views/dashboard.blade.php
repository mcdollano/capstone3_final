@extends ("template")
	@section("dashboard")
		<div class="at_a_glance row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="total_posts_container row">
					<h1>
						{{ $total_posts }}
					</h1>
					<span>
						TOTAL POSTS
					</span><br>
					<i class="fa fa-list-alt fa-lg" aria-hidden="true"></i>
		
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="total_members_container row">
					<h1>
						{{ $total_users }}
					</h1>
					<span>
						TOTAL MEMBERS
					</span><br>
					<i class="fa fa-address-book-o fa-lg" aria-hidden="true"></i>
				</div>
			</div>
		</div>


	@endsection
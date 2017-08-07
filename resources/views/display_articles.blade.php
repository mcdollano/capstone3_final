@extends("home_template")
	@section("display_articles")
		
		<div class="display_articles_container">
			<div class="home_banner_image">
				 <img src="{{ asset('images/banner_1.jpeg') }}">
				 <h3>

					 	<span class="caption_top">
					 		STAY HUNGRY.
					 	</span>
					 	<br>
					 	<br>
					 	<br>
					 	<span class="caption_bottom">
					 		STAY FOOLISH.
					 	</span> 	
				 </h3>
			
			</div>
			<div class="home_content_container row">
				<div class="col-sm-8 col-md-8 col-lg-8">
					<h3>Latest Articles</h3>
					<div class="underline"></div>
				@foreach($blogs as $blog)

					<div class="latest_article_container row">
						<a href='{{url("/viewarticle/$blog->id")}}'>
							<div class="latest_article_image_container col-sm-6 col-md-6 col-lg-6">
								<img src="{{ $blog->banner_image }}">	
							</div>
						</a>
						<div class="latest_article_content_container col-sm-6 col-md-6 col-lg-6">
							<div class="latest_article_category_container">
								{{ $blog->category }}
							</div>
							<div class="latest_article_tag_container">
								{{ $blog->tags_id }}
							</div>
						<a href='{{url("/viewarticle/$blog->id")}}'>
							<div class="latest_article_title_container">
								{{ $blog->title }}
							</div>
						</a>
							<div class="latest_article_caption_container">
								{!! $blog->caption !!}
							</div>

							<div class="latest_article_content_container">
								{!!str_limit($blog->content) !!}
							</div>

							<div class="latest_article_author_container">
								by<span class="author_name">
								 {{ $blog->user->first_name }}&nbsp;{{ $blog->user->last_name }}
								 </span>
							</div>

							<div class="latest_article_createdat_container">
								{{ $blog->publish_date }}{{ $blog->created_at }}
							</div>	
						</div>
						
					</div>

					<div class="underline"></div>

				@endforeach	
					<div class="pagination_container">		
						<span>
							{{ $blogs->render() }}
						</span>
					</div>

				</div><!--column 8-->	

				<!--MOST READ ARTICLES -->

				<div class="col-sm-4 col-md-4 col-lg-4 mostread_">
					<h3>Most Read Articles</h3>
					<div class="underline"></div>
					@foreach($mostreads as $mostread)
					<div class="mostread_article_container row">
					<a href='{{url("/viewarticle/$blog->id")}}'>
						<div class="latest_article_image_container col-sm-6 col-md-6 col-lg-6">
							<img src="{{ $mostread->banner_image }}">	
						</div>
					</a>	
						<div class="mostread_article_content_container col-sm-6 col-md-6 col-lg-6">

							<div class="mostread_article_tag_container">
								{{ $mostread->tags_id }}
							</div>
					<a href='{{url("/viewarticle/$blog->id")}}'>
							<div class="mostread_article_title_container">
								{{ $mostread->title }}
							</div>
					</a>
							<div class="mostread_article_createdat_container">
								{{ $mostread->publish_date }}{{ $mostread->created_at }}
							</div>	
							<div class="mostread_article_category_container">
								{{ $mostread->category }}
							</div>
						</div>
						
					</div>
					<div class="mostread_underline"></div>

				@endforeach	
					
				</div>

			</div>

				<!--footer-->

					<div class="row footer_content">

						<div class="col-sm-3">
							<a href="/articleCategoryBusiness">	
								<h2>BUSINESS</h2>
							</a>	
							<div class="footer_underline"></div>
							@foreach($business_category_home as $business_home)
							<a href='{{url("/viewarticle/$business_home->id")}}'>
								<div class="footer_title">
									{{ $business_home->title }}
								</div>
							</a>
							@endforeach
						</div>

						<div class="col-sm-3">
							<a href="/articleCategoryStartup">
								<h2>STARTUP</h2>
							</a>	
							<div class="footer_underline"></div>
							@foreach($startup_category_home as $startups_home)
							<a href='{{url("/viewarticle/$startups_home->id")}}'>
								<div class="footer_title">
									{{ $startups_home->title }}
								</div>
							</a>	
							@endforeach
						</div>
						
						<div class="col-sm-3">
							<a href="/articleCategoryCareer">
								<h2>CAREER</h2>
							</a>	
							<div class="footer_underline"></div>
							@foreach($career_category_home as $career_home)
							<a href='{{url("/viewarticle/$career_home->id")}}'>
								<div class="footer_title">
									{{ $career_home->title }}
								</div>
							</a>	
							@endforeach
						</div>
						<div class="col-sm-3">
							<a href="/articleCategoryLeadership">
								<h2>LEADERSHIP</h2>
							</a>	
							<div class="footer_underline"></div>
							@foreach($leadership_category_home as $leadership_home)
							<a href='{{url("/viewarticle/$leadership_home->id")}}'>
								<div class="footer_title">
									{{ $leadership_home->title }}
								</div>
							</a>	
							@endforeach
						</div>

					</div><!--footer_content-->


		</div>


		

	@endsection
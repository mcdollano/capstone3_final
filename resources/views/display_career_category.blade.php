@extends("home_template")
	@section("display_category_career")

		<div class="display_articles_container">

			<div class="category_content_container row">

				<div class="col-sm-8 col-md-8 col-lg-8">
					<h2>{{ $career_category_first->category}}</h2>

					<div class="cat_bannerimage_container">
					
						<a href='{{url("/viewarticle/$career_category_first->id")}}'>
							<img src="{{ $career_category_first->banner_image }}">	
						</a>


						<div class="cat_caption_container">
							
					 		<h5>
					 			<span class="caption_top2">
							 	{{ $career_category_first->category }}
							 	</span>
					 			<p class="caption_bottom2">
							 	{{ $career_category_first->title }}
							 	</p>
							</h5>
						</div>
					</div>

					<div class="underline"></div>

					<div class="business_cat_articles">
						<h3>FEATURED ARTICLES </h3>
					</div>

					@foreach($career_category_all as $career_category) 

					<div class="display_cat_articles row">
						<a href='{{url("/viewarticle/$career_category->id")}}'>
							<div class="latest_article_image_container col-sm-6 col-md-6 col-lg-6 display_cat_left">
								<img src="{{ $career_category->banner_image }}">	
							</div>
						</a>
							<div class="latest_article_content_container col-sm-6 col-md-6 col-lg-6">

								<div class="latest_article_category_container">
								{{ $career_category->category }}
								</div>

								<a href='{{url("/viewarticle/$career_category->id")}}'>
									<div class="latest_article_title_container">
										{{$career_category->title }}
									</div>
								</a>	
									<div class="latest_article_caption_container">
										{!! $career_category->caption !!}
									</div>

									<div class="latest_article_createdat_container">
										{{ $career_category->publish_date }}{{ $career_category->created_at }}
									</div>	

							</div>			
					</div><!--display_cat_articles-->

					@endforeach

				</div> <!--business articles-->

				<div class="col-sm-4 col-md-4 col-lg-4">
					<h3>Most Read Articles</h3>
					<div class="underline"></div>
					@foreach($mostreads as $mostread)
					<div class="mostread_article_container row">
					<a href='{{url("/viewarticle/$mostread->id")}}'>
						<div class="latest_article_image_container col-sm-6 col-md-6 col-lg-6">
							<img src="{{ $mostread->banner_image }}">	
						</div>
					</a>	
						<div class="mostread_article_content_container col-sm-6 col-md-6 col-lg-6">

							<div class="mostread_article_tag_container">
								{{ $mostread->tags_id }}
							</div>
					<a href='{{url("/viewarticle/$mostread->id")}}'>
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
				</div> <!--most read article-->

			</div>	
		</div>	

	@endsection

	
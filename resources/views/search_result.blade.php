@extends("home_template")	
	@section("search_result")
		<div class="display_articles_container">
			<div class="search_result_container">
				{{$search_count}} results found under "<em>{{ $search }}"</em>
			</div>

			<div class="search_content_container row">
				<div class="col-sm-8 col-md-8 col-lg-8">

				@foreach($search_article as $search_result)

					<div class="latest_article_container row ">
						<a href='{{url("/viewarticle/$search_result->id")}}'>
							<div class="latest_article_image_container col-sm-6 col-md-6 col-lg-6">
								<img src="{{ $search_result->banner_image }}">	
							</div>
						</a>
						<div class="latest_article_content_container col-sm-6 col-md-6 col-lg-6">
							<div class="latest_article_category_container">
								{{ $search_result->category }}
							</div>

						<a href='{{url("/viewarticle/$search_result->id")}}'>
							<div class="latest_article_title_container">
								{{ $search_result->title }}
							</div>
						</a>
							<div class="latest_article_caption_container">
								{!! $search_result->caption !!}
							</div>

							<div class="latest_article_content_container">
								{!!str_limit($search_result->content) !!}
							</div>

							

							<div class="latest_article_createdat_container">
								{{ $search_result->publish_date }}{{ $search_result->created_at }}
							</div>	
						</div>
						
					</div>

					<div class="underline"></div>

				@endforeach	

				</div><!--column 8-->	

				<!--MOST READ ARTICLES -->

				<div class="col-sm-4 col-md-4 col-lg-4 mostread_">
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
					
				</div>

			</div>

		</div>
	@endsection
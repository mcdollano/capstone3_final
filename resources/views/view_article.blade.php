@extends("home_template")
	@section("meta_fb")	

	<meta name="csrf-token" content="{{URL:: to($blogs->banner_image) }}">

	 <meta property="og:url"           content="growth-hackph.herokuapp.com/viewarticle" />
   <meta property="og:type"          content="article" />
  <meta property="og:title"         content="{{$blogs->title}}" />
  <meta property="og:description" content="{{$blogs->caption}}" />
  <meta property="og:image:url" content="{{URL:: to($blogs->banner_image) }}" />

  	@endsection

		<!--FACEBOOK SHARE-->
@section("view_article")
			<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '736866899830566',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	
		<!--END OF FACEBOOK SHARE-->
		
		<div class="display_articles_container">

			<div class="row view_content_container">

				<div class="col-sm-8 col-md-8 col-lg-8 view_left">

					<div class="view_article_heading_container">

						<div class="view_article_category_container">
							{{$blogs->category}}
						</div>

						<div class="view_article_title_container">
							{{$blogs->title}}
						</div>

						<div class="view_article_caption_container">
							{{$blogs->caption}}
						</div>

						<div class="view_article_author_container">
							<span>by </span>
							<span class="view_author_name"> 
								{{ $blogs->user->first_name }}&nbsp;{{ $blogs->user->last_name }}	
							</span>	
						</div>

						<div class="view_article_publishdate_container">
							{{ $blogs->publish_date }}{{ $blogs->created_at }}
						</div>	


					<!--FACEBOOK LIKE AND SHARE-->

							<div
							  class="fb-like"
							  data-share="true" 
							  data-width="450"
							  data-show-faces="true">
							</div>
					</div>

					<!--END OF FACEBOOK LIKE AND SHARE-->

					<div class="view_underline"></div>

					<div class="view_bannerimage_container">
						<img src="{{URL:: to($blogs->banner_image) }}">
					</div>

					<div class="view_underline"></div>

					<div class="view_content_container">
						{!! $blogs->content !!}
					</div>


					<!-- FB COMMENT PLUG IN -->
					
					<div class="fb-comments" data-width="500" data-numposts="5"></div>

				</div> <!--view_left-->

				<div class="col-sm-4 col-md-4 col-lg-4 view_mostread_articles">
					<h3>Most Read Articles</h3>
					<div class="underline"></div>
					@foreach($mostreads as $mostread)
							<div class="mostread_article_container row">
								<div class="latest_article_image_container col-sm-6 col-md-6 col-lg-6">
								
									<a href='{{url("/viewarticle/$mostread->id")}}'>
										<img src="{{URL:: to($mostread->banner_image) }}">	
									</a>
										
								</div>
								<div class="mostread_article_content_container col-sm-6 col-md-6 col-lg-6">
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
							
					@endforeach	

				</div>
			</div> <!--view_content_container-->
		</div>	


	@endsection
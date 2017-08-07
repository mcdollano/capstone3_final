@extends ("template")
	@section("write_article")
		<div class="write_article_container">
			<form method="POST" action='{{url("/saveArticle")}}' enctype="multipart/form-data">
			{{ csrf_field() }}
				<div class="form-group">
		         	<label for="title">Title :</label>
		         	<input type="text" class="form-control" name="write_title" id="write_title" required>
		         </div>
		         <div class="form-group">
		         	<label for="caption">Caption :</label>
		         	<input type="text" class="form-control" name="write_caption" id="write_caption" required>
		         </div>
		         <div class="form-group">
		         	<label for="category">Category :</label>
		         	<input type="text" class="form-control" name="write_category" id="write_category" required>
		         </div>
		         <div class="form-group">
		         	<label for="banner_image">Banner Image :</label>
		         	<input type="file" name="write_banner_image" required>
		         </div>		
		         <div class="form-group">
		         	<label for="content">Content :</label><br>
		         	<textarea name="write_content" class="form-control" id="write_content"></textarea>
		         </div>	
		         <div class="form-group">
		         	<label for="caption">Add Tags : (tags can be separated by ',' or 'space')</label>
		         	<input type="text" class="form-control" name="write_tags" id="write_tags">
		         </div>
		         <input type="submit" class="btn btn-success" name="post_article" id="post_article_btn" value="Post Article">
			</form>		
		</div>
	@endsection

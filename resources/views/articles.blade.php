@extends ("template")
	@section("articles")
		<div class="articles_heading_container">
			
		</div>
		<a href='{{url("/writeArticle")}}'>
			<button type="button" class="btn btn-success" id="add_article_button">
				+ Write a new article
			</button>
		</a>
		<div class="articles_container_right">
			<table class="article_table_container">
				
				<tr>
					<th class="article_id">Article ID</th>
					<th>Title</th>
					<th>Publish Date</th>
					<th>Author</th>
					<th>Manage</th>
				</tr>

				@foreach($blogs as $blog)

				<tr>
					<td class="article_id">{{ $blog->id }}</td>
					<td class="article_tile">{{ $blog->title }}</td>
					<td>{{ $blog->created_at }}</td>
					<td>{{ $blog->user->first_name }}&nbsp;{{ $blog->user->last_name }}</td>

					<td>

						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#quick_view{{$blog->id}}">
							Edit
						</button>
	  
						<div class="modal fade" id="quick_view{{$blog->id}}" role="dialog">
	   						<div class="modal-dialog">
	      	<!-- Modal content-->
			     				<div class="modal-content">
			        				<div class="modal-header">
			          					<button type="button" class="close" data-dismiss="modal">&times;</button>
			          					<h4 class="modal-title">Edit Article</h4>
			      					</div>
			        				<div class="modal-body">
			         					<form method="POST" action='{{url("editArticle/$blog->id")}}' enctype="multipart/form-data">
			         					{{ csrf_field() }}

			         						<div class="form-group">
			         							<label for="title">Title:</label>
			         							<input type="text" class="form-control" value="{{ $blog->title }}" name="edit_title" id="edit_title" required>
			         						</div>
			         						<div class="form-group">
			         							<label for="title">Caption:</label>
			         							<input type="text" class="form-control" value="{{ $blog->caption }}" name="edit_caption" id="edit_caption">
			         						</div>
			         			
			         						<div class="form-group">
			         							<label for="content">Content :</label><br>
			         							<textarea id="edit_content{{$blog->id}}" name="edit_content" class="form-control" class="edit_content">
			         								{!! $blog->content !!}
			         							</textarea>
			        						</div>

			        						<script>
           										tinymce.init({
          										selector: '#edit_content{{$blog->id}}'
            									});
       										</script>
			        						
			        				</div>
			        				<div class="modal-footer">  
			        					<input type="submit" name="submit" value="Save" class="btn btn-success">
									
			          					<button type="button" class="btn btn-default" data-dismiss="modal">
			          						Close
			          					</button>
			          					</form>
			        				</div>
			      				</div>
			      			</div>
			      		</div>		
	   
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_article{{$blog->id}}">
							Delete
						</button>

						<div class="modal fade" id="delete_article{{$blog->id}}" role="dialog">
	   						<div class="modal-dialog">
	      				<!-- Modal content-->
			     				<div class="modal-content">
			        				<div class="modal-header">
			          					<button type="button" class="close" data-dismiss="modal">&times;</button>
			          					<h4 class="modal-title">Delete Article</h4>
			      					</div>
			        				<div class="modal-body">				
			     	  					<p>Are you sure you want to delete this Article?</p>
			        				</div>
			        				<div class="modal-footer">
			        					<form method="POST" action='{{url("deleteArticle/$blog->id")}}'>
			        					{{ csrf_field() }}
			        						<input type="submit" name="submit" value="Delete" class="btn btn-danger">	
			          						<button type="button" class="btn btn-default" data-dismiss="modal">
			          							Close
			          						</button>	
			          					</form>	          					
			        				</div>
			      				</div>
			      			</div>
			      		</div>		

					</td>
				</tr>
				@endforeach
			</table>
		</div>	
	@endsection
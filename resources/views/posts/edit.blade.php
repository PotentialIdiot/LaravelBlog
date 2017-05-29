@extends ('layouts.master')

@section ('content')

	<div class="col-sm-8 blog-main">

		<h1>Edit a Post</h1>

		<hr>

		<form method="POST" action="/posts/update">

			{{ csrf_field() }}

			<input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">

			  <div class="form-group">
			    <label for="title">Title:</label>
			    <input type="text" class="form-control" id="title" name="title" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}">
			  </div>

			  <div class="form-group">
			    <label for="body">Body</label>
			    <textarea id="body" name="body" class="form-control" rows="15">

			    	@if(!old('body'))
      					{!! $post->body !!}
      				@endif
      					{!! old('body') !!}

			    </textarea>
			  </div>

			  <div class="form-group">
			  	<!-- question(SOLVED) -->
			  	<!-- PostsControllerUpdate looks for "edit" under "name" -->
			  	<!-- but it doesent work if value field does not exists!?? -->
			  	<!-- value field can be any nonsense, as long as it exists, it works -->
				<button type="submit" class="btn btn-primary" name="save" value="0">Save Draft</button>
				<button type="submit" class="btn btn-primary" name="publish" value="1">Publish</button>
			  </div>

			@include ('layouts.errors')

		</form>

	</div>

@endsection
@extends ('layouts.master')

@section ('content')

	<div class="col-sm-8 blog-main">

		<h1>{{ $post->title }}</h1>

		<p class="blog-post-meta">

			{{ $post->user->name }} on

		    {{ Carbon\Carbon::parse($post->published_at)->timezone('Australia/Brisbane')->toDayDateTimeString() }}

		</p>

		{{ $post->body }}


	@if (Auth::check())

	<div>

    	<a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

    </div>
    
  	@endif

	</div>

@endsection

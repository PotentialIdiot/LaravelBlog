<div class="blog-post">
  <h2 class="blog-post-title">

    <a href="/posts/{{ $post->id }}">

      {{ $post->title }}

    </a>

  </h2>
  
  <p class="blog-post-meta">

  	{{ $post->user->name }} on

    {{ $post->created_at->toFormattedDateString() }}

  </p>

  <article>

    {!! str_limit($post->body, $limit = 300, $end = '....... <a href='.url("/posts/".$post->id).'>Read More</a>') !!}

  </article>

  @if (Auth::check())

  <div>

    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

  </div>

  @endif

</div><!-- /.blog-post -->


<div class="blog-post">
  <h2 class="blog-post-title">

    <a href="/posts/<?php echo e($post->id); ?>">

      <?php echo e($post->title); ?>


    </a>

  </h2>
  
  <p class="blog-post-meta">

  	<?php echo e($post->user->name); ?> on

    <?php echo e($post->created_at->toFormattedDateString()); ?>


  </p>

  <article>

    <?php echo str_limit($post->body, $limit = 300, $end = '....... <a href='.url("/posts/".$post->id).'>Read More</a>'); ?>


  </article>

  <?php if(Auth::check()): ?>

  <div>

    <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a>

  </div>

  <?php endif; ?>

</div><!-- /.blog-post -->


<?php $__env->startSection('content'); ?>

	<div class="col-sm-8 blog-main">

		<h1><?php echo e($post->title); ?></h1>

		<p class="blog-post-meta">

			<?php echo e($post->user->name); ?> on

		    <?php echo e(Carbon\Carbon::parse($post->published_at)->timezone('Australia/Brisbane')->toDayDateTimeString()); ?>


		</p>

		<?php echo e($post->body); ?>



	<?php if(Auth::check()): ?>

	<div>

    	<a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a>

    </div>
    
  	<?php endif; ?>

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
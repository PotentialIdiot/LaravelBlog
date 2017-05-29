<?php $__env->startSection('content'); ?>

	<div class="col-sm-8 blog-main">

		<h1>Edit a Post</h1>

		<hr>

		<form method="POST" action="/posts/update">

			<?php echo e(csrf_field()); ?>


			<input type="hidden" name="post_id" value="<?php echo e($post->id); ?><?php echo e(old('post_id')); ?>">

			  <div class="form-group">
			    <label for="title">Title:</label>
			    <input type="text" class="form-control" id="title" name="title" value="<?php if(!old('title')): ?><?php echo e($post->title); ?><?php endif; ?><?php echo e(old('title')); ?>">
			  </div>

			  <div class="form-group">
			    <label for="body">Body</label>
			    <textarea id="body" name="body" class="form-control" rows="15">

			    	<?php if(!old('body')): ?>
      					<?php echo $post->body; ?>

      				<?php endif; ?>
      					<?php echo old('body'); ?>


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

			<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		</form>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
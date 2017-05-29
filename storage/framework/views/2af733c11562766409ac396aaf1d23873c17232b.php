<?php $__env->startSection('content'); ?>

	<div class="col-md-8">

		<h1>Sign in</h1>

		<form method="POST" action="/login">

			<?php echo e(csrf_field()); ?>


			<div class="form-group">

				<label for="email">Email Address:</label>
				<input type="email" class="form-control" id="email" name="email">

			</div>

			<div class="form-group">

				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password">

			</div>

			<div class="form-group">

				<button type="submit" class="btn btn-primary">Sign In</button>

			</div>

			<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		</form>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
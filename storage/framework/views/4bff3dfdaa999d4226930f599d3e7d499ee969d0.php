<?php $__env->startSection('content'); ?>

        <div class="col-sm-8 blog-main">

          <?php if($posts->isEmpty()): ?>
            <h1>No blogs are available</h1>
          <?php endif; ?>

          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

	<script src="/js/file.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
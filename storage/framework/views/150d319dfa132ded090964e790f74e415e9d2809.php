    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>

          <?php if(Auth::check()): ?>

            <a class="nav-link" href="/posts/create">Create New Blog</a>
            <a class="nav-link ml-auto" href="#"><?php echo e(Auth::user()->name); ?></a>
            <a class="nav-link" href="/logout">Logout</a>

          <?php else: ?>

            <a class="nav-link ml-auto" href="/login">Login</a>
            <a class="nav-link" href="/register">Sign Up</a>

          <?php endif; ?>

        </nav>
      </div>
    </div>
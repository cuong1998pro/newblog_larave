<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-12">
    <div class="li-blog-single-item mb-30">
        <div class="row">
            <div class="col-lg-6">
                <div class="li-blog-banner">
                    <a href="<?php echo e(route('blog.show', $post->slug)); ?>"><img class="img-full" src="<?php echo e($post->image); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="li-blog-content">
                    <div class="li-blog-details">
                    <h3 class="li-blog-heading pt-xs-25 pt-sm-25"><a href="<?php echo e(route('blog.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></h3>
                        <div class="li-blog-meta">
                        <a class="author" href="#"><i class="fa fa-user"></i><?php echo e($post->author->name); ?></a>
                            <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> <?php echo e($post->date); ?></a>
                        </div>
                        <p><?php echo e($post->excerpt); ?></p>
                        <a class="read-more" href="<?php echo e(route('blog.show', $post->slug)); ?>">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php echo e($posts->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\newblog_laravel\resources\views/blog/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="li-blog-single-item mb-30">
        <div class="row">
            <div class="col-lg-6">
                <div class="li-blog-banner">
                    <a href="blog-details-left-sidebar.html"><img class="img-full" src="images/blog-banner/2.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="li-blog-content">
                    <div class="li-blog-details">
                        <h3 class="li-blog-heading pt-xs-25 pt-sm-25"><a href="blog-details-left-sidebar.html">blog image post</a></h3>
                        <div class="li-blog-meta">
                            <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                            <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                            <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                        </div>
                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                        <a class="read-more" href="blog-details-left-sidebar.html">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="li-paginatoin-area text-center pt-25">
        <div class="row">
            <div class="col-lg-12">
                <ul class="li-pagination-box">
                    <li><a class="Previous" href="#">Previous</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="Next" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\newblog_laravel\resources\views/blog/index.blade.php ENDPATH**/ ?>
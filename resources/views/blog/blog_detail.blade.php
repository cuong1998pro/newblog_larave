@extends('layouts.blog')
@section('content')
<div class="li-blog-single-item pb-30">
    <div class="li-blog-banner">
        <a href="blog-details.html"><img class="img-full" src="images/blog-banner/bg-banner.jpg" alt=""></a>
    </div>
    <div class="li-blog-content">
        <div class="li-blog-details">
            <h3 class="li-blog-heading pt-25"><a href="#">The Biggest Collection For Digital Product</a></h3>
            <div class="li-blog-meta">
                <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
            </div>
            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
            <div class="li-blog-blockquote">
                <blockquote>
                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                </blockquote>
            </div>
            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum </p>
            <div class="li-tag-line">
                <h4>tag:</h4>
                <a href="#">Headphones</a>,
                <a href="#">Video Games</a>,
                <a href="#">Wireless Speakers</a>
            </div>
            <div class="li-blog-sharing text-center pt-30">
                <h4>share this post:</h4>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
</div>
@include('blog.comment_section')

@endsection

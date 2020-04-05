@extends('layouts.blog')
@section('content')
<div class="li-blog-single-item pb-30">
    <div class="li-blog-banner">
        <a href="{{URL::to($post->image)}}"><img class="img-full" src="{{URL::to($post->image)}}" alt=""></a>
    </div>
    <div class="li-blog-content">
        <div class="li-blog-details">
        <h3 class="li-blog-heading pt-25"><a href="#">{{$post->title}}</a></h3>
            <div class="li-blog-meta">
                <a class="author" href="#"><i class="fa fa-user"></i>{{$post->author->name}}</a>
                <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
            <a class="post-time" href="#"><i class="fa fa-calendar"></i> {{$post->date}}</a>
            </div>
        {!!$post->body_html!!}
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

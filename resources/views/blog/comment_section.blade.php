<div class="li-comment-section">
    <h3>03 comment</h3>
    <ul>
        <li>
            <div class="author-avatar pt-15">
                <img src="{{URL::to('images/product-details/user.png')}}" alt="User">
            </div>
            <div class="comment-body pl-15">
                    <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                <h5 class="comment-author pt-15">admin</h5>
                <div class="comment-post-date">
                    20 nov, 2018 at 9:30pm
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
            </div>
        </li>
        <li class="comment-children">
            <div class="author-avatar pt-15">
                <img src="{{URL::to('images/product-details/admin.png')}}" alt="Admin">
            </div>
            <div class="comment-body pl-15">
                    <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                <h5 class="comment-author pt-15">admin</h5>
                <div class="comment-post-date">
                    20 nov, 2018 at 9:30pm
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
            </div>
        </li>
        <li>
            <div class="author-avatar pt-15">
                <img src="{{URL::to('images/product-details/admin.png')}}" alt="Admin">
            </div>
            <div class="comment-body pl-15">
                <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                <h5 class="comment-author pt-15">admin</h5>
                <div class="comment-post-date">
                    20 nov, 2018 at 9:30pm
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
            </div>
        </li>
    </ul>
</div>

<div class="li-blog-comment-wrapper">
    <h3>leave a reply</h3>
    <p>Your email address will not be published. Required fields are marked *</p>
    <form action="#">
        <div class="comment-post-box">
            <div class="row">
                <div class="col-lg-12">
                    <label>comment</label>
                    <textarea name="commnet" placeholder="Write a comment"></textarea>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                    <label>Name</label>
                    <input type="text" class="coment-field" placeholder="Name">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                    <label>Email</label>
                    <input type="text" class="coment-field" placeholder="Email">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20">
                    <label>Website</label>
                    <input type="text" class="coment-field" placeholder="Website">
                </div>
                <div class="col-lg-12">
                    <div class="coment-btn pt-30 pb-sm-30 pb-xs-30 f-left">
                        <input class="li-btn-2" type="submit" name="submit" value="post comment">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

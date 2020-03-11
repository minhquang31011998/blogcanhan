<?php 
require_once('layouts/header.php')
?>
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(public/home/img/bg-img/23.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Breadcrumb Text -->
            <div class="col-12">
                <div class="breadcrumb-text">
                    <h2>Bài viết</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8">
                <div class="mt-100">
                    <div class="post-details-content mb-100">
                        <div class="blog-thumbnail mb-50">
                            <img src="<?= $row['thumbnail']?>" alt="">
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title"><?= $row['title']?></h4>
                            <div class="post-meta mb-30">
                                <a href="#" class="post-date"><?= $row['created_at']?></a>
                                <a href="#" class="post-author">By Admin</a>
                                <a href="#" class="post-comments"><?= $row['view_count']?> view</a>
                            </div>
                            <p><?= $row['content']?></p>


                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment Area Start -->
            <div class="comment_area clearfix mb-70">
                <h4 class="mb-50">Comments</h4>

                <ol>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                                <img src="public/home/img/bg-img/32.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                                <a href="#" class="post-author">William Smith</a>
                                <a href="#" class="post-date">July 12, 2018</a>
                                <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                <a href="#reply" class="reply">Reply</a>
                            </div>
                        </div>


                    </li>

                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                                <img src="public/home/img/bg-img/32.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                                <a href="#" class="post-author">James Carter</a>
                                <a href="#" class="post-date">July 12, 2018</a>
                                <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                <a href="#reply" class="reply">Reply</a>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="post-a-comment-area mb-30 clearfix" id="reply">
                <h4 class="mb-50">Leave a reply</h4>

                <!-- Reply Form -->
                <div class="contact-form-area">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" id="name" placeholder="Name*">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="email" class="form-control" id="email" placeholder="Email*">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="subject" placeholder="Website">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn egames-btn w-100" type="submit">Submit Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Widget -->
    <div class="col-12 col-sm-9 col-md-6 col-lg-4">
        

        </div>
    </div>
</div>
</div>
</section>
<!-- ##### Post Details Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<?php
include_once('layouts/footer.php')
?>
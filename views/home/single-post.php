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
                            </div>
                            <p><?= $row['content']?></p>


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
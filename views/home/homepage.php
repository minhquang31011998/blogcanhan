<?php 
require_once('layouts/header.php')
?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(public/home/img/bg-img/3.jpg););">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<!-- Breadcrumb Text -->
			<div class="col-12">
				<div class="breadcrumb-text">
					<h2>Trang chủ</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Articles Area Start ##### -->
<section class="articles-area section-padding-0-100">
	<div class="container">
		<div class="row justify-content-center">
			<!-- Articles Post Area -->
			<div class="col-12 col-lg-8">
				<div class="mt-100">

					<?php foreach ($posts as $row) { ?>
						<div class="single-articles-area d-flex flex-wrap mb-30">
							<div class="article-thumbnail">
								<img src="<?= $row['thumbnail']?>">
							</div>
							<div class="article-content">
								<a href="index.php?mod=home&act=detail&id=<?= $row['id']?>" class="post-title"><?= $row['title']?></a>
								<div class="post-meta">
									<a href="#" class="post-date"><?= $row['created_at']?></a>
									<a href="#" class="post-comments"><?= $row['view_count'] ?> Views</a>
								</div>
								<p><?=$row['description']?></p>
							</div>
						</div>
					<?php } ?>
					<!-- *** Single Articles Area *** -->




					<!-- ### Pagination Area ### -->
					<nav aria-label="Page navigation example">
						<ul class="pagination mt-100">
							<li class="page-item active"><a class="page-link" href="#">01</a></li>
							<li class="page-item"><a class="page-link" href="#">02</a></li>
							<li class="page-item"><a class="page-link" href="#">03</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<!-- Sidebar Area -->
			<div class="col-12 col-sm-9 col-md-6 col-lg-4">
				<div class="sidebar-area mt-100">

					

					<!-- Single Widget Area -->
					<div class="single-widget-area post-widget">
						<h4 class="widget-title">Bài đăng mới nhất</h4>
						<!-- Single Post Widget -->
						<?php foreach ($postss as $row) { ?>
							<div class="single-post-area d-flex">
								<div class="blog-thumbnail">
									<img src="<?= $row['thumbnail']?>">
								</div>
								<div class="blog-content">
									<a href="<?= $row['id']?>" class="post-title"><?= $row['title']?></a>
									<span><?= $row['created_at']?></span>
								</div>
							</div>
						<?php } ?>

						<!-- Single Post Widget -->
						
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- ##### Articles Area End ##### -->

<!-- ##### Featured Articles Area Start ##### -->

<!-- ##### Featured Articles Area End ##### -->
<?php
include_once('layouts/footer.php')
?>
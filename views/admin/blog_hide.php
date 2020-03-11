<?php
include_once('layouts/header.php')
?>
<?php
include_once('layouts/sidebar.php')
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Danh sách bài viết ẩn</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Danh sách bài viết ẩn</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								

								<div class="card-tools">
									<div class="input-group input-group-sm" style="width: 150px;">
										<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

										<div class="input-group-append">
											<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body table-responsive p-0" style="height: 800px;">
								<table class="table table-head-fixed">
									<thead>
										<tr>
											<th>ID</th>
											<th>Tiêu đề</th>
											<th>Thumbail</th>
											<th>Hành động</th>
										</tr>
									</thead>
									<?php foreach( $posts as $row )  { ?>
										<tr>
											<td><?php echo $row['id'] ?></td>
											<td><?php echo $row['title'] ?></td>
											<td><img style="max-height: 50px;" src="<?php echo $row['thumbnail'] ?>" ></td>
											<td  style="display: flex;">
												<a href="index.php?mod=post&act=detail&id=<?php echo $row['id'] ?>" class="btn btn-primary">Detail</a>
												<a href="index.php?mod=post&act=edit&id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
												<a href="index.php?mod=post&act=show&id=<?php echo $row['id'] ?>" class="btn btn-dark">Show</a>
												<a href="index.php?mod=post&act=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
											</td>
										</tr>

									<?php } ?>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.card-body -->

			<!-- /.card-footer-->
		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once('layouts/footer.php')
?>
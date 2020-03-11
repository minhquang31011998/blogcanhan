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
						<li class="breadcrumb-item active">Danh sách bài viết</li>
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
				<h3 class="card-title">Danh sách bài viết</h3>
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
											<th>Danh mục</th>
											<th>Danh mục cha</th>
											<th>Hành động</th>
										</tr>
									</thead>
									
									<?php foreach( $childs as $rows )  {  ?>
										
										<tr>
											<td><?php echo $rows['id'] ?></td>
											<td><?php echo $rows['name'] ?></td>
											
											<td><?php foreach( $categories as $row )  { ?><?php if($rows['parent_id']==$row['id']) echo $row['name'] ?><?php } ?></td>

											<td  style="display: flex;">
												
												<a href="index.php?mod=category&act=edit&id=<?php echo $rows['id'] ?>" class="btn btn-success">Edit</a>
												<a href="index.php?mod=category&act=hide&id=<?php echo $rows['id'] ?>" class="btn btn-dark">Hide</a>
												<a href="index.php?mod=category&act=delete&id=<?php echo $rows['id'] ?>" class="btn btn-danger">Delete</a>
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
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
            <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
            <li class="breadcrumb-item active">Chi tiết bài viết</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      
          <div class="card-body">
            
            <label>Ảnh đại diện bài viết</label><br>
            <img src="<?= $post['thumbnail'] ?>">

            
            <div class="form-group">
              <label for="exampleInputEmail1">Tiêu đề bài viết</label>
              <p><?= $post['title'] ?></p>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Đường dẫn bài viết</label>
              <p><?= $post['slug'] ?></p>
            </div>
            <div class="form-group">
              <label>Mô tả bài viết</label><br>
              <p><?= $post['description'] ?></p>
            </div>
            <div class="form-group">
              <label>Nội dung</label><br>
              <p><?= $post['content'] ?></p>
            </div>
          </div>



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
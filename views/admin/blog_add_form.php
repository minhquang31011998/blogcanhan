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
          <h1>Thêm mới bài viết</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Bài đăng</a></li>
            <li class="breadcrumb-item active">Thêm mới viết</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Nội dung</h3>
    </div>
    <form action="index.php?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data" id="formCreateBlog" name="formCreateBlog">
      <div class="card-body">

        <div class="form-group">
          <label for="exampleInputFile">Ảnh đại diện cho bài viết</label>
          <input type="file" id="exampleInputFile" name="thumbnail" value="<?= $post['thumbnail'] ?>" accept=".png, .jpg, .jpeg">
          <img src="<?= $post['thumbnail'] ?>">
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Tiêu đề bài viết</label>
          <input type="text" class="form-control" name="title" id="title" onkeyup="ChangeToSlug()" placeholder="Nhập tiêu đề bài viết">
        </div>
        <span style="color: red"><?php
        if(isset($_COOKIE['check'])){
          echo $_COOKIE['check'];
        }
        ?>
      </span>
      <div class="form-group">
        <!-- <label for="exampleInputEmail1">Đường dẫn bài viết</label> -->
        <input type="hidden" class="form-control" name="slug" id="slug" placeholder="Nhập đường dẫn bài viết">
      </div>
      <div class="form-group">
        <label>Mô tả bài viết</label>
        <textarea class="form-control" rows="3" name="description" placeholder="Mô tả..."></textarea>
      </div>
      <div class="form-group">
        <label>Danh mục</label>
        <select class="form-control select2 select2-danger" name="category_id" data-dropdown-css-class="select2-danger" style="width: 100%;">
          <option value="0">Lựa chọn danh mục</option>

          <?php foreach ($categories as $value) { ?>
            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label>Nội dung</label>
        <textarea class="textarea" name="content" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

      </div>


    </div>
    <div class="card-footer">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.content-wrapper -->

<?php
include_once('layouts/footer.php')
?>
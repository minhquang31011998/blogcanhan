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
          <h1>Chỉnh sửa bài đăng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
            <li class="breadcrumb-item active">Chỉnh sửa bài viết</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Nội dung</h3>
    </div>
    <form action="index.php?mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
      <div class="card-body">
        
          <label>Chọn ảnh đại diện bài viết: <span style="color: red">*</span></label><br>
          <figure class="figure img-thumbnail shadow-4" style="width: 65%; background-color: #fff">

            <figcaption class="figure-caption text-center">
              <div class="custom-file">
                <input class="custom-file-input" id="image" name="thumbnail" type="file" style="margin-bottom: 10px !important;">
                <label class="custom-file-label text-dark" for="image" style="text-align: left"></label>
              </div>
            </figcaption>
          </figure>
        
        <div class="form-group">
          <input type="hidden" name="id" value="<?= $post['id'] ?>">
          <label for="exampleInputEmail1">Tiêu đề bài viết</label>
          <input type="text" class="form-control" name="title" id="title" onkeyup="ChangeToSlug()" value="<?= $post['title'] ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Đường dẫn bài viết</label>
          <input type="text" class="form-control" name="slug" id="slug" value="<?= $post['slug'] ?>">
        </div>
        <div class="form-group">
          <label>Mô tả bài viết</label>
          <textarea class="form-control" rows="3" name="description" ><?= $post['description'] ?></textarea>
        </div>
        <div class="form-group">
          <label>Danh mục</label>
          <select class="form-control select2 select2-danger" name="category_id" data-dropdown-css-class="select2-danger" style="width: 100%;">
            <option value="0">Lựa chọn danh mục</option>
           
                  <?php foreach ($categories as $value) { ?>
                      <option <?php if($post['category_id']==$value['id']) echo "selected" ?> value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                  <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Nội dung</label>
          <textarea class="textarea" name="content" 
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $post['content'] ?></textarea>
        </div>


      </div>
      <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-primary">Đăng</button>
      </div>
    </form>
  </div>
  <!-- /.content-wrapper -->

  <?php
  include_once('layouts/footer.php')
  ?>
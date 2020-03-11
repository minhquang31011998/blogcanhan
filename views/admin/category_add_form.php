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
          <h1>Thêm mới danh mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
            <li class="breadcrumb-item active">Thêm mới danh mục</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Nội dung</h3>
    </div>
    <form action="index.php?mod=category&act=store" method="POST" role="form" >
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tên danh mục</label>
          <input type="text" class="form-control" name="name" id="title" onkeyup="ChangeToSlug()" placeholder="Nhập tiêu đề danh mục">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Đường dẫn danh mục</label>
          <input type="text" class="form-control" name="slug" id="slug" placeholder="Nhập đường dẫn danh mục">
        </div>
        <div class="form-group">
          <label>Danh mục</label>
          <select class="form-control select2 select2-danger" name='parent_id' data-dropdown-css-class="select2-danger" style="width: 100%;">
            <option value="0">Mời bạn chọn danh mục cha</option>
                  <?php foreach ($categories as $value) { ?>
                      <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                  <?php } ?>
          </select>
        </div>


      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.content-wrapper -->

  <?php
  include_once('layouts/footer.php')
  ?>
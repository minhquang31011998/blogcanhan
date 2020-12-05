
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="public/admin/index3.html" class="brand-link">
    <img src="public/admin/dist/img/AdminLTELogo.png"
    alt="AdminLTE Logo"
    class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Xin chào</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $_SESSION['user']['name']?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <p>
                Bài viết
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?mod=post&act=list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=post&act=add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới bài viết</p>
                </a>
              </li>
            <!--  <?php  ?> -->
              <li class="nav-item">
                <a href="index.php?mod=post&act=hidelist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết đã ẩn</p>
                </a>
              </li>
              <!-- <?php  ?> -->
              <li class="nav-item">
                <a href="index.php?mod=post&act=checklist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết chờ duyệt</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="index.php?mod=post&act=deletelist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết đã xóa</p>
                </a>
              </li>
            </ul>
          </li>
          
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            
              <p>
                Danh mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?mod=category&act=add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=category&act=listedit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chỉnh sửa danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=category&act=deletelist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục đã xóa</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <p>
                Người dùng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="public/admin/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách người dùng</p>
                </a>
              </li>
              
            </ul>
          </li> -->

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
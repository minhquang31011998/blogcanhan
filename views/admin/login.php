<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    label.error{
      color:red;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="?mod=auth&act=login_process" method="POST" id="formLogin" name="formLogin">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" value='<? if(isset($_COOKIE['email'])) echo $_COOKIE['email']?>'>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div> 
          </div> 
          <label class="error" for="email"></label> 
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" value="<? if(isset($_COOKIE['password'])) echo $_COOKIE['password']?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name='remember' checked="<? if(isset($_COOKIE['email'])) echo 'true' ?>">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <?php
            if(isset($_COOKIE["alert"])){
            ?>
              <div class="alert alert-danger">
                <strong><?php echo $_COOKIE["alert"];?></strong>
              </div>
            <?php } ?>
            <!-- /.col -->
          </div>
        </form>

        <!-- /.social-auth-links -->

        
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="public/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/admin/dist/js/adminlte.min.js"></script>
  <script src="public/admin/dist/js/jquery.validate.js"></script>
  <script src="public/admin/dist/js/jquery.validate.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#formLogin').validate({ // initialize the plugin
    // errorElement: "labe",
    rules: {
      email : {
        required :true,
        email: true,
              // unique:students,emai
            },
          },
          messages: {
            email : {
              required :"Vui lòng nhập email",
              email: "Email không đúng định dạng",
              // unique: "Email đã tồn tại"
            },
          }
    });
  });
  </script>

</body>
</html>
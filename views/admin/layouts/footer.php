<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="public/admin/dist/js/demo.js"></script> -->
<script src="public/admin/plugins/select2/js/select2.full.min.js"></script>
<script src="public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
   

    //Initialize Select2 Elements
    $('.select2').select2()
})
</script>
<script>
  $(document).ready(function(){
     $('.textarea').summernote()
  })
  
</script>
<script>
  function ChangeToSlug()
{
    var title, slug;
 
    //Lấy text từ thẻ input title 
    title = document.getElementById("title").value;
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, " - ");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
 }
 </script>
 <script src="public/admin/dist/js/jquery.validate.js"></script>
  <script src="public/admin/dist/js/jquery.validate.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#formCreateBlog').validate({ // initialize the plugin
      rules: {
        thumbnail : {
          required :true,
        },
        title : {
          required :true,
          maxlength: 255,
          minlength: 10,
        },
        description : {
          required :true,
          maxlength: 255,
          minlength: 10,
        },
        content : {
          required :true,
        },
      },
      messages: {
        thumbnail : {
          required :"Vui lòng chọn hình ảnh",
          
        },
        title : {
          required :"Vui lòng nhập tiêu đề",
          minlength: "tiêu đề có độ dài ít nhất 10 ký tự",
          maxlength : "Tiêu đề có độ dài tối đa 250 ký tự"
        },
        description : {
          required :"Vui lòng nhập mô tả",
          minlength: "Mô tả có độ dài ít nhất 10 ký tự",
          maxlength : "Mô tả có độ dài tối đa 250 ký tự"
        },

        content : {
          required :"Vui lòng nhập nội dung",
        },
      }
    });
    $('#formEditBlog').validate({ // initialize the plugin
      rules: {
      //   thumbnail : {
      //     required :true,
      //   },
        title : {
          required :true,
          maxlength: 255,
          minlength: 10,
        },
        description : {
          required :true,
          maxlength: 255,
          minlength: 10,
        },
        content : {
          required :true,
        },
      },
      messages: {
        // thumbnail : {
        //   required :"Vui lòng chọn hình ảnh",
          
        // },
        title : {
          required :"Vui lòng nhập tiêu đề",
          minlength: "tiêu đề có độ dài ít nhất 10 ký tự",
          maxlength : "Tiêu đề có độ dài tối đa 250 ký tự"
        },
        description : {
          required :"Vui lòng nhập mô tả",
          minlength: "Mô tả có độ dài ít nhất 10 ký tự",
          maxlength : "Mô tả có độ dài tối đa 250 ký tự"
        },

        content : {
          required :"Vui lòng nhập nội dung",
        },
      }
    });
    $('#formAddCate').validate({ // initialize the plugin
      rules: {
        name : {
          required :true,
          maxlength: 30,
          minlength: 2,
        },
      },
      messages: {
        name : {
          required :"Vui lòng nhập tiêu đề",
          minlength: "tiêu đề có độ dài ít nhất 2 ký tự",
          maxlength : "Tiêu đề có độ dài tối đa 30 ký tự"
      }
      }
    });
    $('#formEditCate').validate({ // initialize the plugin
      rules: {
        name : {
          required :true,
          maxlength: 30,
          minlength: 2,
        },
      },
      messages: {
        name : {
          required :"Vui lòng nhập tiêu đề",
          minlength: "tiêu đề có độ dài ít nhất 2 ký tự",
          maxlength : "Tiêu đề có độ dài tối đa 30 ký tự"
      }
      }
    });           
  });
</script>

<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>

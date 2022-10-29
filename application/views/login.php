<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>LOGIN</title>
    <link href="<?php echo base_url('Metro/image/bca.png'); ?>" rel="shortcut icon" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('Metro/login/fontawesome-free-6.1.1/css/all.min.css');?>">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('Metro/login/css/adminlte.min.css');?>">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
<body class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 mx-auto">
        <div class="card col-12 mt-5">
          <div class="card-body">
            <form id="form-signin" action="#" method="POST">
                <img class="mb-4" src="<?= base_url('Metro/image/react.png'); ?>" width="100%">
                <h4 class="text-center mb-4"><b class="text-dark">Audit <b class="text-primary"><img src="<?php echo base_url('Metro/image/bcas.png'); ?>" style="height:30px;width:160px"></b></h4>
                <p id="response"></p>
                <div class="form-group">
                    <input class="form-control" type="text" name="user" id="username" placeholder="Username">
                </div>
                <p class="text-danger" id="response_user"></p>
                <div class="form-group">
                    <div class="input-group" id="show_hide_password">
                        <input type="password" name="password" id="inputPassword" class="col-12 form-control input-group" placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>
                <p class="text-danger" id="response_pass"></p>
                <input class="btn btn-sm btn-primary mb-3" type="submit" name="submit" value="Login" >
            </form>
          </div>
          <div class="text-center mb-4">
              Belum punya akun? daftar
              <a href="<?= site_url('register');?>"> Disini</a>
          </div>
          <hr>
          <div class="text-center mb-4">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; SKAI 2022</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('Metro/login/jquery/jquery.min.js');?>"></script>
  <script src="<?= base_url('Metro/login/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <!-- <script src="</?= base_url('vendor/AdminLTE/plugins/chart.js/Chart.min.js');?>"></script> -->
  <script src="<?= base_url('Metro/login/dist/js/adminlte.js');?>"></script>
  <!-- <script src="</?= base_url('vendor/AdminLTE/dist/js/demo.js');?>"></script> -->
  <script src="<?= base_url('Metro/login/sweetalert/sweetalert2.all.js');?>"></script>
  <script>
    $("#show_hide_password a").click( function(e) {
        e.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
    
    $('#form-signin').submit(function (event) {
      event.preventDefault()
      submitform()
    });

    function submitform(){
      var user = $('#username').val();
      var pswd = $('#inputPassword').val();

      // reset respon user & pass, empty html
      $('#response_user').html('')
      $('#response_pass').html('')
      // end reset
      $.post({
          url: "<?php echo site_url('Auth/getLogin'); ?>",
          method: 'POST',
          data:{
            'UserName' : user,
            'PassWord' : pswd
          },
          success: function(result){
            const res = JSON.parse(result)
            if(res.status == 'success'){
              $('#username').css('border','1px solid blue');
              $('#inputPassword').css('border','1px solid blue');

              setTimeout(function(){
                  window.location.href = '<?php echo site_url("Auth/dashboard") ?>';
                }, 500)
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })

                    Toast.fire({
                      icon: 'success',
                      title: 'Signed in successfully'
                    })
            } else if (res.status=='failed') {

              if(typeof res.rules === 'object' && res.rules !== null){
                if(res.rules.UserName){
                  $('#username').css('border', '1px solid red');
                  $('#response_user').html(res.rules.UserName);
                }
                if(res.rules.PassWord){
                  $('#inputPassword').css('border', '1px solid red');
                  $('#response_pass').html(res.rules.PassWord);
                }
              }

              const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })

                    Toast.fire({
                      icon: 'error',
                      title: res.msg
                    })
            } else {
              $('#response').html('<div class="alert alert-danger" role="alert"> Login Gagal, Mohon Coba Ulang </div>');
            }
          }
      });
    }
  </script>
</body>
</html>
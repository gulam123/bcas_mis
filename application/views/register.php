<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>AMS Register</title>
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
            <div class="col-12 col-sm-5 mx-auto">
                <div class="card col-12 mt-5">          
                    <div class="card-header">
                        <a href="<?= base_url(); ?>" class="text-danger">
                            <i class="fas fa-backward text-danger"></i> 
                            LOGIN
                        </a>
                    </div>    
                    <div class="card-body">
                        <h4 class="text-center mb-4 mt-3"><b class="text-info">Register User Login</b></h4>
                        <form id="form-register" action="#" method="post">
                            <?php if(!empty($this->session->flashdata('status'))){ ?>
                                <?= $this->session->flashdata('status'); ?>
                            <?php } ?>
                            <div class="form-group">
                                <p class="text-danger" id="response_user"></p>
                                <input class="form-control" type="text" name="username" id="username" onkeyup="this.value = this.value.toUpperCase()" placeholder="Username" required >
                            </div>
                            <div class="form-group">
                                <p class="text-danger" id="response_email"></p>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <p class="text-danger" id="response_level"></p>
                                <select name="level" id="level" class="col-12 form-control" required>
                                    <option value="" disabled selected>Pilih Level User</option>
                                    <!-- <option value="admin">ADMIN</option> -->
                                    <option value="kadiv">Kepala Divisi</option>
                                    <option value="kadept">Kepala Departemen</option>
                                    <option value="spv">Supervisi</option>
                                    <option value="auditkp">Staff Audit KP</option>
                                    <option value="auditkc">Staff Audit KC</option>
                                    <option value="auditit">Staff Audit IT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p class="text-danger" id="response_password"></p>
                                <div class="input-group" id="show_password">
                                    <input type="password" name="password" id="password" class="col-12 form-control input-group" placeholder="Password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-danger" id="response_password_conf"></p>
                                <div class="input-group" id="show_password2">
                                    <input type="password" name="password_conf" id="password_conf" class="col-12 form-control input-group" placeholder="Konfirm Password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-sm btn-info" value="DAFTAR">
                        </form>
                    </div>
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
        $("#show_password a").click( function(e) {
            e.preventDefault();
            if($('#show_password input').attr("type") == "text"){
                $('#show_password input').attr('type', 'password');
                $('#show_password i').addClass( "fa-eye-slash" );
                $('#show_password i').removeClass( "fa-eye" );
            }else if($('#show_password input').attr("type") == "password"){
                $('#show_password input').attr('type', 'text');
                $('#show_password i').removeClass( "fa-eye-slash" );
                $('#show_password i').addClass( "fa-eye" );
            }
        });

        $("#show_password2 a").click( function(e) {
            e.preventDefault();
            if($('#show_password2 input').attr("type") == "text"){
                $('#show_password2 input').attr('type', 'password');
                $('#show_password2 i').addClass( "fa-eye-slash" );
                $('#show_password2 i').removeClass( "fa-eye" );
            }else if($('#show_password2 input').attr("type") == "password"){
                $('#show_password2 input').attr('type', 'text');
                $('#show_password2 i').removeClass( "fa-eye-slash" );
                $('#show_password2 i').addClass( "fa-eye" );
            }
        });

        $('#form-register').submit(function (event) {
        event.preventDefault()
        submitform()
        });

        function submitform(){
        var user            = $('#username').val();
        var emailuser       = $('#email').val();
        var leveluser       = $('#level').val();
        var pswduser        = $('#password').val();
        var pswduserconf    = $('#password_conf').val();

        // reset respon user & pass, empty html
        $('#response_user').html('')
        $('#response_email').html('')
        $('#response_level').html('')
        $('#response_password').html('')
        $('#response_password_conf').html('')
        // end reset
        $.post({
            url: "<?php echo site_url('Auth/registration'); ?>",
            method: 'POST',
            data:{
                'username'      : user,
                'email'         : emailuser,
                'level'         : leveluser,
                'password'      : pswduser,
                'password_conf' : pswduserconf,
            },
            success: function(result){
                const res = JSON.parse(result)
                if(res.status == 'success'){
                $('#username').css('border','1px solid green');
                $('#email').css('border','1px solid green');
                $('#level').css('border','1px solid green');
                $('#password').css('border','1px solid green');
                $('#password_conf').css('border','1px solid green');

                // empty value
                $('#username').val('');
                $('#email').val('');
                $('#level').val('');
                $('#password').val('');
                $('#password_conf').val('');

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'success',
                    title: 'Register in successfully'
                    })
                } else if (res.status=='failed') {
                    if(typeof res.rules === 'object' && res.rules !== null){
                        if(res.rules.username){
                        $('#username').css('border', '1px solid red');
                        $('#response_user').html(res.rules.username);
                        }
                        if(res.rules.email){
                        $('#email').css('border', '1px solid red');
                        $('#response_email').html(res.rules.email);
                        }
                        if(res.rules.level){
                        $('#level').css('border', '1px solid red');
                        $('#response_level').html(res.rules.level);
                        }
                        if(res.rules.password){
                        $('#password').css('border', '1px solid red');
                        $('#response_password').html(res.rules.password);
                        }
                        if(res.rules.password_conf){
                        $('#password_conf').css('border', '1px solid red');
                        $('#response_password_conf').html(res.rules.password_conf);
                        }
                    }

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 4000,
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
                $('#response').html('<div class="alert alert-danger" role="alert"> Register Gagal, Mohon Coba Ulang </div>');
                }
            }
        });
        }
    </script>
</body>
</html>
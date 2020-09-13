<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Dateabus.com</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

        <!-- App css -->
        <link href="<?php echo base_url();?>assets/css/admin_css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    </head>

    <body class="">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <a href="<?php echo base_url(); ?>">
                                        <span><img src="assets/img/logo/Original1.png" alt="" height="50"></span>
                                    </a>
                                </div>
                                <div class="alert alert-danger" id='loginFailAlert' style='display:none'>
                                    
                                </div>
                                <form action='<?php echo base_url(); ?>login/logincheck' method="POST">
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" name="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" onclick="" type='submit'> Log In </button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

        <script type="text/javascript">
            function login()
            {
                alert('<?php echo base_url(); ?>login/logincheck');
                $.get('<?php echo base_url(); ?>login/logincheck',
                {
                    id: $('#emailaddress').val(),
                    password: $('#password').val()
                }, function(res){
                    alert();
                });
            }

            
        </script>
        <?php
        if($this->session->flashdata('login_failed')) {
            $message = $this->session->flashdata('login_failed');
        ?>
        <script>
            $('#loginFailAlert').html('<strong>Warning!</strong> &nbsp &nbsp<?php echo $message; ?>');
            $('#loginFailAlert').css('display', 'block');
        </script>
        <?php
        }
        ?>
    </body>
</html>
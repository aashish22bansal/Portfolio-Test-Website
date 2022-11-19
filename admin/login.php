<?php
require("../includes/db.php");
require("../functions/functions.php");

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query_login = "SELECT * FROM personal_details WHERE email='$email' && user_password='$password'";
    $run_login = mysqli_query($connection, $query_login);
    $user_data_login = mysqli_fetch_array($run_login);
    // print_r($user_data_login);
    if(count($user_data_login)>0){
        //creating a session
        $_SESSION['isUserLoggedIn'] = true;
        $_SESSION['emailId'] = $_POST['email'];
        //redirecting
        echo "<script>window.location.href = 'index.php';</script>";
    }
    else{
        echo "<script>alert('Invalid Credentials!')</script>";
    }
    // CredentialAuthentication($email, $password);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel | Log in</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="index.php"><b>Admin</b> Panel</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to Admin Panel</p>

                    <form method="post"><!--action="../../index3.html"-->
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- <br> -->
                            <div class="col-4">
                                <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <!-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                    </div> -->
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p>
                    <!-- <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                    </p> -->
                    <!-- <br> -->
                    <div class="col-16">
                        <a href="../index.php">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Back to Main Website</button>
                        </a>
                    </div>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>

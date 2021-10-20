<?php
  error_reporting(E_ALL);  

session_start();
require_once"konmysqli.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recover Password - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post">
                    <div class="login-form-head">
                        <h4>Reset Password</h4>
                        <p>Hey! Reset Your Password and comeback again</p>
                    </div>
                    <div class="login-form-body">
                        <?php
                        if(isset($_GET['success'])) { // jika ada success di URL
                            echo '<p class="text-success">Silakan cek email untuk melanjutkan reset password</p><br>';
                        }
                        ?>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" id="exampleInputPassword1" name="email">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Password Baru</label>
                            <input type="text" id="exampleInputPassword2" name="pass">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area mt-5">
                            <button id="form_submit" name="reset-pass" type="submit">Reset <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>

            <?php
                            function process($conn,$sql){
                                $s=false;
                                $conn->autocommit(FALSE);
                                try {
                                  $rs = $conn->query($sql);
                                  if($rs){
                                        $conn->commit();
                                        $last_inserted_id = $conn->insert_id;
                                         $affected_rows = $conn->affected_rows;
                                          $s=true;
                                  }
                                } 
                                catch (Exception $e) {
                                    echo 'fail: ' . $e->getMessage();
                                      $conn->rollback();
                                }
                                $conn->autocommit(TRUE);
                                return $s;
                                }
        if(isset($_POST["reset-pass"])){
            $email=$_POST["email"];
            $pas=$_POST["pass"];
            $exp= date('Y-m-d H:i:s', time()+600);
            $token= md5(time());
            $role = $_GET["role"];

            $sql=" INSERT INTO `reset_password` (
                `email` ,
                `new_pass` ,
                `token` ,
                `expire` ,
                `role` 
                ) VALUES (
                '$email', 
                '$pas',
                '$token', 
                '$exp',
                '$role'
                )";
            $simpan=process($conn,$sql);
            mail($email, 'Reset Password','Silahkan Klik Link Dibawah ini
            http://localhost/app_ppkdjaksel_new/confirm.php?token='.$token);
            header('location: reset-pass.php?success');
        }
        ?>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
<?php
session_start();
require_once"konmysqli.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login PPKD Jakarta Selatan</title>
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

<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="assets/images/icon/logoPPKDt.png" width="30" height="30" class="d-inline-block align-top" alt="">
    PPKD Jakarta Selatan
  </a>
  <form class="form-inline">
	<a href="index.php"><button type="button" class="btn btn-outline-primary my-2 my-sm-0">Kembali</button></a>
  </form>
</nav>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
	<!--
	<div id="preloader">
        <div class="loader"></div>
	</div>
	-->
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form name="formLogin" method="post" action="">
                    <div class="login-form-head">
                        <h4>Halaman Login Admin</h4>
                        <h4>PPKD <br> JAKARTA SELATAN</h4>
                        <p>Masukkan Username dan Password Untuk Dapat Mengakses</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="validationCustom01">Username</label>
                            <input type="text" name="user" id="validationCustom01" required="">
							<div class="invalid-feedback">
								Please provide a valid city.
							</div>
							<i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="validationCustom02">Password</label>
                            <input type="password" name="pass" id="validationCustom02" required="">
							<div class="invalid-feedback">
								Please provide a valid city.
							</div>
							<i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="reset-pass.php?role=admin">Forget Password</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="Login" name="Login" value="Login" type="submit">Login<i class="ti-arrow-right"></i></button>
                        </div>
                        </div>
                </form>
    <!-- login area end -->

<?php
if(isset($_POST["Login"])){
	$usr=$_POST["user"];
	$pas=$_POST["pass"];

        //$sql1="select * from `$tbadmin` where `username`='$usr' and `password`='$pas' and `status`='Aktif'";
		//$sql2="select * from `$tbalumni` where `user_name`='$usr' and `password`='$pas'";
		//$sql3="select * from `$tbperusahaan` where `user_name`='$usr' and `password`='$pas'";
		$sql1="select * from `$tbadmin` where `username`='$usr' and `password`='$pas' and ( `status`='Aktif' OR `status`='Super Administrator' )";
		
		if(getJum($conn,$sql1)>0){
			$d=getField($conn,$sql1);
				$kode=$d["kode_admin"];
				$nama=$d["username"];
				   $_SESSION["cid"]=$kode;
				   $_SESSION["cnama"]=$nama;
				   $_SESSION["cstatus"]=$d["status"];
		echo "<script>alert('Otentikasi ".$_SESSION["cnama"]." (".$_SESSION["cid"].") berhasil Login!');
		document.location.href='index.php?mnu=home';</script>";
		}//Hak akses Super Administrator

		/*	
		else if(getJum($conn,$sql2)>0){
			$d=getField($conn,$sql2);
				$kode=$d["id_alumni"];
				$nama=$d["nama_alumni"];
				   $_SESSION["cid"]=$kode;
				   $_SESSION["cnama"]=$nama;
				   $_SESSION["cstatus"]="Administrator";
		echo "<script>alert('Otentikasi ".$_SESSION["cstatus"]." (".$_SESSION["cnama"].") berhasil Login!');
		document.location.href='index.php?mnu=home';</script>";
		}//Hak akses Admin

	
		else if(getJum($conn,$sql2)>0){
			$d=getField($conn,$sql2);
				$kode=$d["kode_admin"];
				$nama=$d["username"];
				   $_SESSION["cid"]=$kode;
				   $_SESSION["cnama"]=$nama;
				   $_SESSION["cstatus"]="Tidak Aktif";
		echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
		document.location.href='login.php';</script>";
		}//Hak akses Perusahaan*/

		else{
			session_destroy();
			echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
			document.location.href='login.php';</script>";
		}
}
?>

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

	function getJum($conn,$sql){
		$rs=$conn->query($sql);
		$jum= $rs->num_rows;
		$rs->free();
	return $jum;
	}

	function getField($conn,$sql){
		$rs=$conn->query($sql);
		$rs->data_seek(0);
		$d= $rs->fetch_assoc();
		$rs->free();
	return $d;
	}

	function getData($conn,$sql){
		$rs=$conn->query($sql);
		$rs->data_seek(0);
		$arr = $rs->fetch_all(MYSQLI_ASSOC);
		//foreach($arr as $row) {
		//  echo $row['nama_kelas'] . '*<br>';
		//}
	
		$rs->free();
	return $arr;
	}

	function getAdmin($conn,$kode){
		$field="username";
		$sql="SELECT `$field` FROM `tb_admin` where `id_admin`='$kode'";
		$rs=$conn->query($sql);	
		$rs->data_seek(0);
		$row = $rs->fetch_assoc();
		$rs->free();
    return $row[$field];
	}
	
	function getAlumni($conn,$kode){
		$field="nama_customer";
		$sql="SELECT `$field` FROM `tbalumni` where `id_alumni`='$id'";
		$rs=$conn->query($sql);	
		$rs->data_seek(0);
		$row = $rs->fetch_assoc();
		$rs->free();
    return $row[$field];
	}
	
	function getPerusahaan($conn,$kode){
		$field="id_perusahaan";
		$sql="SELECT `$field` FROM `tbperusahaan` where `id_perusahaan`='$id'";
		$rs=$conn->query($sql);	
		$rs->data_seek(0);
		$row = $rs->fetch_assoc();
		$rs->free();
    return $row[$field];
	}
	
?>
  </div>
  </div>
  </div>
  

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
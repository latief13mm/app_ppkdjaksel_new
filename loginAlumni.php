<?php
session_start();
require_once "konmysqli.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Peserta PPKD Jakarta Selatan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<!--===============================================================================================-->
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start 
    <div id="preloader">
        <div class="loader"></div>
    </div>
	 preloader area end -->
	
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

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" name="formLogin" method="post" action="">
					<span class="login100-form-title p-b-55">
						<h3>Halaman Login Alumni<br><small> PPKD Jakarta Selatan </small></h3><br>
						<p>silahkan masukkan Username Dan Password</p>
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please Fill Out This Field">
						<input class="input100" type="text" name="nik" id="nik" placeholder="Nomor Induk Kependudukan">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please Fill Out This Field">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					
					<div class="col-6 text-right">
						<a href="reset-pass.php?role=alumni">Forget Password</a>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" id="Login" name="Login" value="Login" type="submit">
							Submit
						</button>
					</div>
					<!--
					<div class="form-footer text-center mt-5">
						<p class="text-muted">Silahkan Melakukan Registrasi Jika Belum Memiliki Akun<a href="registrasiAlumni.php"> Registrasi </a></p>
					</div> --> 
			</div>
			</form>

			<?php
			if (isset($_POST["Login"])) {
				$nik=$_POST["nik"];
				$pas=$_POST["pass"];

				//$sql1="select * from `$tbadmin` where `username`='$usr' and `password`='$pas' and `status`='Aktif'";
				//$sql1 = "select * from `$tbadmin` where `username`='$usr' and `password`='$pas'";
				//$sql3 = "select * from `$tbperusahaan` where `user_name`='$usr' and `password`='$pas'";
				$sql2 = "select * from `$tbalumni` where `nik`='$nik' and `password`='$pas'";
				
				/*
				if (getJum($conn, $sql1) > 0) {
					$d = getField($conn, $sql1);
					$kode = $d["kode_admin"];
					$nama = $d["username"];
					$_SESSION["cid"] = $kode;
					$_SESSION["cnama"] = $nama;
					$_SESSION["cstatus"] = "Administrator";
					echo "<script>alert('Otentikasi " . $_SESSION["cnama"] . " (" . $_SESSION["cid"] . ") berhasil Login!');
		document.location.href='index.php?mnu=home';</script>";
				} //Hak akses Administrator */

				if (getJum($conn, $sql2) > 0) {
					$d = getField($conn, $sql2);
					$kode = $d["id_alumni"];
					$nama = $d["nama_alumni"];
					$_SESSION["cid"] = $kode;
					$_SESSION["cnama"] = $nama;
					$_SESSION["cstatus"] = "Alumni";
					echo "<script>alert('Otentikasi " . $_SESSION["cnama"] . " (" . $_SESSION["cid"] . ") berhasil Login!');
		document.location.href='index.php?mnu=home';</script>";
				} //Hak akses Alumni

				/*
				else if (getJum($conn, $sql3) > 0) {
					$d = getField($conn, $sql3);
					$kode = $d["id_perusahaan"];
					$nama = $d["nama_perusahaan"];
					$_SESSION["cid"] = $kode;
					$_SESSION["cnama"] = $nama;
					$_SESSION["cstatus"] = "Perusahaan";
					echo "<script>alert('Otentikasi " . $_SESSION["cnama"] . " (" . $_SESSION["cid"] . ") berhasil Login!');
		document.location.href='index.php?mnu=home';</script>";
				} //Hak akses Perusahaan*/

				else {
					session_destroy();
					echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
			document.location.href='loginAlumni.php';</script>";
				}
			}
			?>

			<?php
			function process($conn, $sql)
			{
				$s = false;
				$conn->autocommit(FALSE);
				try {
					$rs = $conn->query($sql);
					if ($rs) {
						$conn->commit();
						$last_inserted_id = $conn->insert_id;
						$affected_rows = $conn->affected_rows;
						$s = true;
					}
				} catch (Exception $e) {
					echo 'fail: ' . $e->getMessage();
					$conn->rollback();
				}
				$conn->autocommit(TRUE);
				return $s;
			}

			function getJum($conn, $sql)
			{
				$rs = $conn->query($sql);
				$jum = $rs->num_rows;
				$rs->free();
				return $jum;
			}

			function getField($conn, $sql)
			{
				$rs = $conn->query($sql);
				$rs->data_seek(0);
				$d = $rs->fetch_assoc();
				$rs->free();
				return $d;
			}

			function getData($conn, $sql)
			{
				$rs = $conn->query($sql);
				$rs->data_seek(0);
				$arr = $rs->fetch_all(MYSQLI_ASSOC);
				//foreach($arr as $row) {
				//  echo $row['nama_kelas'] . '*<br>';
				//}

				$rs->free();
				return $arr;
			}

			function getAdmin($conn, $kode)
			{
				$field = "username";
				$sql = "SELECT `$field` FROM `tb_admin` where `id_admin`='$kode'";
				$rs = $conn->query($sql);
				$rs->data_seek(0);
				$row = $rs->fetch_assoc();
				$rs->free();
				return $row[$field];
			}

			function getAlumni($conn, $kode)
			{
				$field = "nama_customer";
				$sql = "SELECT `$field` FROM `tbalumni` where `id_alumni`='$id'";
				$rs = $conn->query($sql);
				$rs->data_seek(0);
				$row = $rs->fetch_assoc();
				$rs->free();
				return $row[$field];
			}

			function getPerusahaan($conn, $kode)
			{
				$field = "id_perusahaan";
				$sql = "SELECT `$field` FROM `tbperusahaan` where `id_perusahaan`='$id'";
				$rs = $conn->query($sql);
				$rs->data_seek(0);
				$row = $rs->fetch_assoc();
				$rs->free();
				return $row[$field];
			}

			?>
	</div>
	</div>
	</div>
	</div>

	<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>

</html>

<?php
if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);  
  ?>
<?php
session_start();
//error_reporting(0);
require_once"konmysqli.php";

$mnu=$_GET["mnu"];
date_default_timezone_set("Asia/Jakarta");
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registrasi Perusahaan</title>
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
    <!-- Tutup CSS Table
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
    ===============================================================================================-->

</head>

			
				<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />
				<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
				<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
				<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
				<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>

	<script type="text/javascript">
      $(document).ready(function(){
        $("#tanggal_lahir").datepicker({
					dateFormat  : "dd MM yy",
          changeMonth : true,
          changeYear  : true
        });
      });
	</script>

<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="assets/images/icon/logoPPKDt.png" width="30" height="30" class="d-inline-block align-top" alt="">
    PPKD Jakarta Selatan
  </a>
  <form class="form-inline">
	<a href="loginPerusahaan.php"><button type="button" class="btn btn-outline-primary my-2 my-sm-0">Kembali</button></a>
  </form>
</nav>
  

<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
									<form class="needs-validation" action="registrasiPerusahaan.php" method="post" enctype="multipart/form-data" novalidate="">
									<h2 class="header-title" align="center"><b>Pendaftaran Perusahaan</b><br/>PPKD Jakarta Selatan</h2>
									<p class="text-muted font-14 mb-4" align="center">Silahkan Masukkan Data Perusahaan </p>

									<div class="form-group">
                                            <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
											<input class="form-control" name="nama_perusahaan" type="text" id="nama_perusahaan" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="alamat" class="col-form-label">Alamat Perusahaan</label>
											<textarea class="form-control form-control-lg mb-4" name="alamat" type="textarea" id="alamat" required=""></textarea>
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>
									
									<div class="form-group">
                                            <label for="website" class="col-form-label">Website Perusahaan</label>
											<input class="form-control" name="website" type="text" id="website" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="email" class="col-form-label">Email Perusahaan</label>
											<input class="form-control" name="email" type="text" id="email" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="telephone" class="col-form-label">Telephone Perusahaan</label>
											<input class="form-control" name="telephone" type="text" id="telephone" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="user_name" class="col-form-label">Username</label>
											<input class="form-control" name="user_name" type="text" id="user_name" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="password" class="col-form-label">Password</label>
											<input class="form-control" name="password" type="password" id="password" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="skdp" class="col-form-label">Nomor Surat Registrasi Keterangan Domisili Tenaga Perusahaan</label>
											<input class="form-control" name="skdp" type="text" id="skdp" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="wlk" class="col-form-label">Nomor Wajib Lapor Ketenagakerjaan</label>
											<input class="form-control" name="wlk" type="text" id="wlk" required="">
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<div class="form-group">
                                            <label for="keterangan" class="col-form-label">Keterangan Tambahan Dari Perusahaan</label>
											<textarea class="form-control form-control-lg mb-4" name="keterangan" type="textarea" id="keterangan" required=""></textarea>
											<div class="valid-feedback">
                                                        OK...!
                                            </div>
									</div>

									<b class="text-muted mb-3 mt-4 d-block">Status Akses Perusahaan Ke Sistem</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" checked id="customRadio1" name="status" class="custom-control-input" value="Menunggu Verifikasi" <?php if($status=="Calon Peserta"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio1">Menunggu Verifikasi</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" disabled id="customRadio2" name="status" class="custom-control-input" value="Terverifikasi" <?php if($status=="Terverifikasi"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio2">Terverifikasi</label>
                                            </div>
											<br/>
									<br/>

                    
                                    <div class="form-group">
                                            <label for="gambar" class="col-form-label">Foto DIri Pribadi</label>
                                            <input name="gambar" type="file" class="form-control" id="gambar"/>
                                            <p class="text-secondary">Tambahkan Foto Jika Ada</p>
                                          </div>

									<div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" value="" id="invalidCheck" required="">
                                                    <label class="custom-control-label" for="invalidCheck">
                                                        Agree to terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
											
									<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan">Simpan</button>
									<input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
									<input name="gambar0" type="hidden" id="gambar0" value="<?php echo $gambar0;?>" />
									<input name="id_perusahaan" type="hidden" id="id_perusahaan" value="<?php echo $id_perusahaan;?>" />
									<input name="id_perusahaan0" type="hidden" id="id_perusahaan0" value="<?php echo $id_perusahaan0;?>" />
									<a href="?mnu=perusahaan"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				<!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Projek Tugas Akhir Abdul Latief M M @supportby <a href="http://ppkdjakartaselatan.com/">PPKD Jakarta Selatan</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_perusahaan=strip_tags($_POST["id_perusahaan"]);
	$id_perusahaan0=strip_tags($_POST["id_perusahaan0"]);
	$nama_perusahaan=strip_tags($_POST["nama_perusahaan"]);
	$alamat=strip_tags($_POST["alamat"]);
	$website=strip_tags($_POST["website"]);
	$email=strip_tags($_POST["email"]);
	$telephone=strip_tags($_POST["telephone"]);
	$user_name=strip_tags($_POST["user_name"]);
	$password=strip_tags($_POST["password"]);
	$status=strip_tags($_POST["status"]);
	$skdp=strip_tags($_POST["skdp"]);
	$wlk=strip_tags($_POST["wlk"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	$gambar0=strip_tags($_POST["gambar0"]);
	if ($_FILES["gambar"] != "") {
		@copy($_FILES["gambar"]["tmp_name"],"$YPATH/".$_FILES["gambar"]["name"]);
		$gambar=$_FILES["gambar"]["name"];
		}
	else {$gambar=$gambar0;}
	if(strlen($gambar)<1){$gambar=$gambar0;}
	
$sql=" INSERT INTO `$tbperusahaan` (
`id_perusahaan`,
`nama_perusahaan`,
`alamat`,
`website`,
`email`,
`telephone`,
`user_name`,
`password`,
`status`,
`skdp`,
`wlk`,
`keterangan`,
`gambar` 
) VALUES (
'', 
'$nama_perusahaan', 
'$alamat',
'$website',
'$email',
'$telephone',
'$user_name', 
'$password',
'$status',
'$skdp',
'$wlk',
'$keterangan',
'$gambar'
)";

$simpan=process($conn,$sql);
	if($simpan) {echo "<script>alert('Data $id_alumni berhasil disimpan !');document.location.href='loginPerusahaan.php';</script>";}
		else{echo"<script>alert('Data $id_alumni gagal disimpan...');document.location.href='loginPerusahaan.php';</script>";}
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
?>

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->

</body>

</html>

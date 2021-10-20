<?php
if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);  
  ?>
<?php
//error_reporting(0);
require_once"konmysqli.php";

$mnu=$_GET["mnu"];
date_default_timezone_set("Asia/Jakarta");
?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registrasi Calon Peserta Pelatihan</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
	<a href="loginAlumni.php"><button type="button" class="btn btn-outline-primary my-2 my-sm-0">Kembali</button></a>
  </form>
</nav>
  
<body>
<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="needs-validation" action="registrasiAlumni.php" method="post" enctype="multipart/form-data" novalidate="">
                                    <h2 class="header-title" align="center"><b>Pendaftaran Calon Peserta Pelatihan<br/>PPKD Jakarta Selatan</b></h2>
                                    <p class="text-muted font-14 mb-4" align="center">Silahkan Masukkan Data Dengan Benar</p>
                                    

									                  <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label">Nama Alumni</label>
                                            <input class="form-control" name="nama_alumni" type="text" id="validationCustom01" required="">
                                            <div class="valid-feedback">
                                                        OK...!
                                            </div>
                                    </div>

                                    <div class="form-group">
                                            <label for="validationCustom02" class="col-form-label">NIK ( Sesuai KTP )</label>
                                            <input class="form-control" name="nik" type="text" id="validationCustom02" required="">
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                            <label for="validationCustom03" class="col-form-label">Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" type="text" id="validationCustom03" required="" >
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                    </div>
                        
                                    <div class="form-group">
                                            <label for="validationCustom04" class="date">Tanggal Lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date" id="validationCustom04" required="" >
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                    </div>

								
								                  	<b class="text-muted mb-3 mt-4 d-block">Jenis Kelamin</b>
                                            <div class="custom-control custom-radio custom-control-inline" >
                                                <input type="radio" id="customRadio1" name="jenis_kelamin" class="custom-control-input" value="Laki-Laki" required="" >
                                                <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio2" name="jenis_kelamin" class="custom-control-input" value="Perempuan" required="" >
                                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                            </div>						
									
									                          <div class="form-group">
                                            <label for="validationCustom05" class="col-form-label">Alamat Rumah</label>
                                            <input class="form-control form-control-lg mb-4" name="alamat" type="textarea" id="validationCustom05" required="" >
                                            <div class="valid-feedback">
                                                        Please provide a valid Alamat Rumah
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label for="validationCustom06" class="col-form-label">Telephone</label>
                                            <input class="form-control form-control-lg mb-4" name="telephone" type="text" id="validationCustom06" required="" >
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                            </div>
                                        
                                            <div class="form-group">
                                            <label for="validationCustom07" class="col-form-label">Email</label>
                                            <input class="form-control form-control-lg mb-4" name="email" type="text" id="validationCustom07" required="" >
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label  for="pendidikan" class="col-form-label">Pendidikan Terakhir</label>
                                            <select name="pendidikan" class="custom-select" id="pendidikan" >
                                                <option selected="selected" required="">Silahkan Pilih</option>
                                                <option>SD / MI / Paket A / Sederajat</option>
                                                <option>SMP / Mts / Paket B / Sederajat</option>
                                                <option>SMA / MA / Paket C / Sederajat</option>
                                                <option>SMK/SMEA/STM/Sederajat</option>
                                                <option>D1 / Sederajat</option>
                                                <option>D2 / Sederajat</option>
                                                <option>D3 / Sederajat</option>
                                                <option>S1 / D4 / Sederajat</option>
                                                <option>S2</option>
                                                <option>Lainnya</option>
                                            </select>
                                            </div>
		
									                          <div class="form-group">
                                            <label for="validationCustom08" class="col-form-label">Keahlian</label>
                                            <input class="form-control form-control-lg mb-4" name="keahlian" type="text" id="validationCustom08" required="" >
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                            </div>
                                          
                                            <div class="form-group">
                                            <label for="validationCustom09" class="col-form-label">Username</label>
                                            <input class="form-control form-control-lg mb-4" name="user_name" type="text" id="validationCustom09" required="" >
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                            </div>

                                            <div class="form-group" >
                                            <label for="validationCustom10" class="col-form-label">Password</label>
                                            <input class="form-control form-control-lg mb-4" name="password" type="password" id="validationCustom10" required="" >
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label  for="peminatan_kejuruan" class="col-form-label">Peminatan Kejuruan</label>
                                            <select name="peminatan_kejuruan" class="custom-select" id="peminatan_kejuruan" required="">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option >Teknik Sepedah Motor</option>
                                                <option >Teknik Pendingin / AC</option>
                                                <option >Teknik Otomotif</option>
                                                <option >Teknik Komputer</option>
                                                <option >Tata Graha</option>
                                                <option >Tata Busana</option>
                                                <option >Tata Boga</option>
                                                <option >Operator Komputer</option>
                                                <option >Desain Grafis</option>
                                                <option >Bahasa Jepang</option>
                                                <option >Bahasa Inggris</option>
                                                <option >MTU Tata Busana</option>
                                                <option >MTU Tata Rias</option>
                                                <option >MTU Teknik Komputer</option>
                                                <option >MTU Teknik Sepeda Motor</option>
                                                <option >MTU Teknik Las</option>
                                                <option >MTU Tata Boga</option>
                                                <option >MTU Desain Grafis</option>
                                                <option >MTU Operator Komputer</option>
                                                <option >MTU Teknik Pendingin/AC</option>
                                            </select>
                                            </div>					
											
									                          <div class="form-group">
                                            <label for="validationCustom11" class="col-form-label">Alasan Memilih PPKD Untuk Pelatihan</label>
                                            <textarea class="form-control form-control-lg mb-4" name="keterangan" type="textarea" id="validationCustom11" required="" ></textarea>
                                            <div class="valid-feedback">
                                            OK...!
                                            </div>
                                            </div>

                                            <b class="text-muted mb-3 mt-4 d-block">Status</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" checked id="customRadio3" name="status" class="custom-control-input" value="Calon Peserta" <?php if($status=="Calon Peserta"){echo"checked";}?> required="">
                                                <label class="custom-control-label" for="customRadio3">Calon Peserta</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" disabled id="customRadio4" name="status" class="custom-control-input" value="Peserta" <?php if($status=="Peserta"){echo"checked";}?> required="" >
                                                <label class="custom-control-label" for="customRadio4">Peserta Pelatihan</label>
                                            </div>
										                      	<div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" disabled id="customRadio5" name="status" class="custom-control-input" value="Alumni" <?php if($status=="Alumni"){echo"checked";}?> required="">
                                                <label class="custom-control-label" for="customRadio5">Alumni Pelatihan</label>
                                            </div>
                                          
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

									<input type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan"/>
									<input name="gambar0" type="hidden" id="gambar0" value="<?php echo $gambar0;?>" />
									<input name="id_alumni" type="hidden" id="id_alumni" value="<?php echo $id_alumni;?>" />
									<input name="id_alumni0" type="hidden" id="id_alumni0" value="<?php echo $id_alumni0;?>" />
									<a href="?mnu=alumni"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
									</form>
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
    </div>

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_alumni=strip_tags($_POST["id_alumni"]);
	$id_alumni0=strip_tags($_POST["id_alumni"]);
	$nama_alumni=strip_tags($_POST["nama_alumni"]);
	$nik=strip_tags($_POST["nik"]);
	$tempat_lahir=strip_tags($_POST["tempat_lahir"]);
	$tanggal_lahir=strip_tags($_POST["tanggal_lahir"]);
	$jenis_kelamin=strip_tags($_POST["jenis_kelamin"]);
	$alamat=strip_tags($_POST["alamat"]);
	$telephone=strip_tags($_POST["telephone"]);
	$email=strip_tags($_POST["email"]);
	$pendidikan=strip_tags($_POST["pendidikan"]);
	$keahlian=strip_tags($_POST["keahlian"]);
	$user_name=strip_tags($_POST["user_name"]);
	$password=strip_tags($_POST["password"]);
	$peminatan_kejuruan=strip_tags($_POST["peminatan_kejuruan"]);
	$status=strip_tags($_POST["status"]);
	$kategori=strip_tags($_POST["kategori"]);
	$keterangan=strip_tags($_POST["keterangan"]);

	$gambar0=strip_tags($_POST["gambar0"]);
	if ($_FILES["gambar"] != "") {
		@copy($_FILES["gambar"]["tmp_name"],"$YPATH/".$_FILES["gambar"]["name"]);
		$gambar=$_FILES["gambar"]["name"];
		}
	else {$gambar=$gambar0;}
  if(strlen($gambar)<1){$gambar=$gambar0;}
  
 $sql=" INSERT INTO `$tbalumni` (
`id_alumni`,
`nama_alumni`,
`nik`,
`tempat_lahir`,
`tanggal_lahir`,
`jenis_kelamin`,
`alamat`,
`telephone`,
`email`,
`pendidikan`,
`keahlian`,
`user_name`,
`password`,
`peminatan_kejuruan`,
`status`,
`kategori`,
`keterangan`,
`gambar`
) VALUES (
'',
'$nama_alumni',
'$nik',
'$tempat_lahir',
'$tanggal_lahir',
'$jenis_kelamin',
'$alamat',
'$telephone',
'$email',
'$pendidikan',
'$keahlian',
'$user_name',
'$password',
'$peminatan_kejuruan',
'$status',
'$kategori',
'$keterangan',
'$gambar'
)";

$simpan=process($conn,$sql);
	if($simpan) {echo "<script>alert('Data $id_alumni berhasil disimpan !');document.location.href='loginAlumni.php';</script>";}
		else{echo"<script>alert('Data $id_alumni gagal disimpan...');document.location.href='loginAlumni.php';</script>";}
	}
?>

<?php
//proses
    if(isset($_POST['simpan'])) {
    $nama_alumni=$_POST['nama_alumni'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   
//script validasi data
 
    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM $tbalumni WHERE nama_alumni='$nama_alumni' or email='$email'"));
    if ($cek > 0){
    echo "<script>window.alert('nama atau email yang anda masukan sudah ada')
    window.location='index.php'</script>";
    }else {
    mysqli_query($conn,"INSERT INTO cek(id_alumni,nama_alumni,email, password)
    VALUES ('','$nama_alumni','$email','$password')");
 
    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='index.php'</script>";
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
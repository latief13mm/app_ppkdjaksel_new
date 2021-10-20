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
    <title>Pusat Pelatihan Kerja Daerah Jakarta Selatan</title>
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
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

</head>

<body>
    <!-- Loader
    <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/DKITESt.png" alt="logo"></a>
                    <font color=white><h5>PPKD Jakarta Selatan</h5></color>
                </div>
            </div>

            <?php
			$mnu=$_GET["mnu"];
			?>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                            </li>
                            <?php
                                if($_SESSION["cstatus"]=="Super Administrator" || $_SESSION["cstatus"]=="Aktif" ){	
                                    echo"
                                    <li ";if($mnu=="home"){echo"class='active'";} echo"><a href='index.php?mnu=home'><i class='fa fa-home'></i><span>Home</span></a></li>
                                    <li ";if($mnu=="admin"){echo"class='active'";} echo"><a href='index.php?mnu=admin'><i class='fa fa-user'></i><span> Data Admin</span></a></li>
                                    <li ";if($mnu=="alumni"){echo"class='active'";} echo"><a href='index.php?mnu=alumni'><i class='fa fa-graduation-cap'></i><span>Data Alumni</span></a></li>
                                    <li ";if($mnu=="perusahaan"){echo"class='active'";} echo"><a href='index.php?mnu=perusahaan'><i class='fa fa-industry'></i><span>Data Perusahaan</span></a></li>
                                    <li ";if($mnu=="loker"){echo"class='active'";} echo"><a href='index.php?mnu=loker'><i class='fa fa-briefcase'></i><span>Data Lowongan Kerja</span></a></li>
                                    <li ";if($mnu=="pilihan"){echo"class='active'";} echo"><a href='index.php?mnu=pilihan'><i class='fa fa-hand-pointer-o'></i><span>Data Pilihan Pekerja</span></a></li>
                                    <li ";if($mnu=="logout"){echo"class='active'";} echo"><a href='index.php?mnu=logout'><i class='fa fa-sign-out'></i><span>Logout</span></a></li>";
                                }

                                else if($_SESSION["cstatus"]=="Alumni" || $_SESSION["cstatus"]=="Calon Peserta" || $_SESSION["cstatus"]=="Peserta" ){	
                                    echo"
                                    <li ";if($mnu=="home"){echo"class='active'";} echo"><a href='index.php?mnu=home'><i class='fa fa-home'></i><span>Home</span></a></li>
                                    <li ";if($mnu=="alumniProfil"){echo"class='active'";} echo"><a href='index.php?mnu=alumniProfil'><i class='fa fa-user'></i><span>Profil</span></a></li>
                                    <li ";if($mnu=="alumniPengalaman"){echo"class='active'";} echo"><a href='index.php?mnu=alumniPengalaman'><i class='fa fa-trophy'></i><span>Pengalaman Saya</span></a></li>
                                    <li ";if($mnu=="alumniLoker"){echo"class='active'";} echo"><a href='index.php?mnu=alumniLoker'><i class='fa fa-briefcase'></i><span>Info Lowongan Kerja</span></a></li>
                                    <li ";if($mnu=="alumniPilihan"){echo"class='active'";} echo"><a href='index.php?mnu=alumniPilihan'><i class='fa fa-file-text-o'></i><span>Lamaran Saya</span></a></li>
                                    <li ";if($mnu=="inboxAlumniPilihan"){echo"class='active'";} echo"><a href='index.php?mnu=inboxAlumniPilihan'><i class='fa fa-inbox'></i><span>Inbox Alumni</span></a></li>
									<li ";if($mnu=="logout"){echo"class='active'";} echo"><a href='index.php?mnu=logout'><i class='fa fa-sign-out'></i><span>Logout</span></a></li>";
                                }

                                else if($_SESSION["cstatus"]=="Terverifikasi" || $_SESSION["cstatus"]=="Menunggu Verifikasi" ){	
                                    echo"
                                    <li ";if($mnu=="home"){echo"class='active'";} echo"><a href='index.php?mnu=home'><i class='fa fa-home'></i><span>Home</span></a></li>
                                    <li ";if($mnu=="profilPerusahaan"){echo"class='active'";} echo"><a href='index.php?mnu=profilPerusahaan'><i class='fa fa-industry'></i><span>Profil</span></a></li>
                                    <li ";if($mnu=="perusahaanAlumni"){echo"class='active'";} echo"><a href='index.php?mnu=perusahaanAlumni'><i class='fa fa-graduation-cap'></i><span>Lihat Alumni</span></a></li>
                                    <li ";if($mnu=="perusahaanLoker"){echo"class='active'";} echo"><a href='index.php?mnu=perusahaanLoker'><i class='fa fa-briefcase'></i><span>Lowongan Kerja</span></a></li>
                                    <li ";if($mnu=="perusahaanPilihan"){echo"class='active'";} echo"><a href='index.php?mnu=perusahaanPilihan'><i class='fa fa-hand-pointer-o'></i><span>Pelamar Kerja</span></a></li>
									<li ";if($mnu=="inboxPerusahaanPilihan"){echo"class='active'";} echo"><a href='index.php?mnu=inboxPerusahaanPilihan'><i class='fa fa-inbox'></i><span>Inbox Perusahaan</span></a></li>
                                    <li ";if($mnu=="logout"){echo"class='active'";} echo"><a href='index.php?mnu=logout'><i class='fa fa-sign-out'></i><span>Logout</span></a></li>";
                                }
                                else{
                                    echo "<li ";if($mnu=="home"){echo"class='active'";} echo"><a href='index.php?mnu=home'><i class='fa fa-home'></i><span>Home</span></a></li>";
                                    echo "<li ";if($mnu=="loginAlumni"){echo"class='active'";} echo"><a href='loginAlumni.php'><i class='fa fa-graduation-cap'></i><span>Login Alumni</span></a></li>";
                                    echo "<li ";if($mnu=="loginPerusahaan"){echo"class='active'";} echo"><a href='loginPerusahaan.php'><i class='fa fa-industry'></i><span>Login Perusahaan</span></a></li>";
                                    echo "<li ";if($mnu=="login"){echo"class='active'";} echo"><a href='login.php'><i class='fa fa-coffee'></i><span>Login PPKD</span></a></li>";	 
                                }
                            ?>
                         </ul>
                    </nav>
                </div>
            </div>
        </div>
<div class="main-content">
   <?php
   require_once"header.php";
   ?>
            
<?php           
//Untuk Hak Akses Admin                             
if($mnu=="admin"){require_once"admin/admin.php";}
else if($mnu=="alumni"){require_once"alumni/alumni.php";}
else if($mnu=="aalumni"){require_once"alumni/aalumni.php";}
else if($mnu=="pengalaman"){require_once"pengalaman/pengalaman.php";}
else if($mnu=="perusahaan"){require_once"perusahaan/perusahaan.php";}
else if($mnu=="loker"){require_once"loker/loker.php";}
else if($mnu=="pilihan"){require_once"pilihan/pilihan.php";}


//Untuk Hak Akses Alumni
else if($mnu=="alumniProfil"){require_once"alumni/alumniProfil.php";}
else if($mnu=="alumniProfil2"){require_once"alumni/alumniProfil2.php";}
else if($mnu=="alumniPengalaman"){require_once"pengalaman/alumniPengalaman.php";}
else if($mnu=="alumniPerusahaan"){require_once"perusahaan/alumniPerusahaan.php";}
else if($mnu=="alumniLoker"){require_once"loker/alumniLoker.php";}
else if($mnu=="alumniPilihan"){require_once"pilihan/alumniPilihan.php";}
else if($mnu=="inboxAlumniPilihan"){require_once"pilihan/inboxAlumniPilihan.php";}

//Untuk Hak Akses Perusahaan
else if($mnu=="profilPerusahaan"){require_once"perusahaan/profilPerusahaan.php";}
else if($mnu=="profilPerusahaan2"){require_once"perusahaan/profilPerusahaan2.php";}
else if($mnu=="perusahaanAlumni"){require_once"alumni/perusahaanAlumni.php";}
else if($mnu=="perusahaanPengalaman"){require_once"pengalaman/PerusahaanPengalaman.php";}
else if($mnu=="PerusahaanPengalamanAlumni"){require_once"pengalaman/PerusahaanPengalamanAlumni.php";}
else if($mnu=="perusahaanLoker"){require_once"loker/perusahaanLoker.php";}
else if($mnu=="perusahaanPilihan"){require_once"pilihan/perusahaanPilihan.php";}
else if($mnu=="profilPerusahaanAlumni"){require_once"perusahaan/profilPerusahaanAlumni.php";}
else if($mnu=="inboxPerusahaanPilihan"){require_once"pilihan/inboxPerusahaanPilihan.php";}


else if($mnu=="registrasiAlumni"){require_once"registrasiAlumni.php";}
else if($mnu=="login"){require_once"login.php";}
else if($mnu=="logout"){require_once"logout.php";}
else {require_once"home.php";}				
?>


         <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Projek Tugas Akhir Abdul Latief M M <a href="http://ppkdjakartaselatan.com/">PPKD Jakarta Selatan</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <?php
		require_once"nav.php";
		
        ?>
        
    </div>
     

<?php function RP($rupiah){return number_format($rupiah,"2",",",".");}?>
<?php
function WKT($sekarang){
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,0,4);

$judul_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli", "Agustus", "September","Oktober", "November", "Desember");
$wk=$tanggal." ".$judul_bln[(int)$bulan]." ".$tahun;
return $wk;
}
?>
<?php
function WKTP($sekarang){
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,2,2);

$judul_bln=array(1=> "Jan", "Feb", "Mar", "Apr", "Mei","Jun", "Jul", "Agu", "Sep","Okt", "Nov", "Des");
$wk=$tanggal." ".$judul_bln[(int)$bulan]."'".$tahun;
return $wk;
}
?>
<?php
function BAL($tanggal){
	$arr=explode(" ",$tanggal);
	if($arr[1]=="Januari"||$arr[1]=="January"){$bul="01";}
	else if($arr[1]=="Februari"||$arr[1]=="February"){$bul="02";}
	else if($arr[1]=="Maret"||$arr[1]=="March"){$bul="03";}
	else if($arr[1]=="April"){$bul="04";}
	else if($arr[1]=="Mei"||$arr[1]=="May"){$bul="05";}
	else if($arr[1]=="Juni"||$arr[1]=="June"){$bul="06";}
	else if($arr[1]=="Juli"||$arr[1]=="July"){$bul="07";}
	else if($arr[1]=="Agustus"||$arr[1]=="August"){$bul="08";}
	else if($arr[1]=="September"){$bul="09";}
	else if($arr[1]=="Oktober"||$arr[1]=="October"){$bul="10";}
	else if($arr[1]=="November"){$bul="11";}
	else if($arr[1]=="Nopember"){$bul="11";}
	else if($arr[1]=="Desember"||$arr[1]=="December"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";	
}
?>


<?php
function BALP($tanggal){
	$arr=explode(" ",$tanggal);
	if($arr[1]=="Jan"){$bul="01";}
	else if($arr[1]=="Feb"){$bul="02";}
	else if($arr[1]=="Mar"){$bul="03";}
	else if($arr[1]=="Apr"){$bul="04";}
	else if($arr[1]=="Mei"){$bul="05";}
	else if($arr[1]=="Jun"){$bul="06";}
	else if($arr[1]=="Jul"){$bul="07";}
	else if($arr[1]=="Agu"){$bul="08";}
	else if($arr[1]=="Sep"){$bul="09";}
	else if($arr[1]=="Okt"){$bul="10";}
	else if($arr[1]=="Nov"){$bul="11";}
	else if($arr[1]=="Nop"){$bul="11";}
	else if($arr[1]=="Des"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";	
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
$sql="SELECT `$field` FROM `tb_admin` where `kode_admin`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
	}
	
	function getPerusahaan($conn,$kode){
$field="nama_perusahaan";
$sql="SELECT `$field` FROM `tb_perusahaan` where `id_perusahaan`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
	}
	
	function getPerusahaanByIdLoker($conn,$id_loker){
        $field="nama_perusahaan";
        $sql="SELECT $field FROM tb_perusahaan LEFT JOIN tb_loker ON tb_loker.id_perusahaan = tb_perusahaan.id_perusahaan where tb_loker.id_loker='$id_loker'";        
        $rs=$conn->query($sql);	
        $rs->data_seek(0);
            $row = $rs->fetch_assoc();
            $rs->free();
            return $row[$field];
        }
            
	function getAlumni($conn,$kode){
$field="nama_alumni";
$sql="SELECT `$field` FROM `tb_alumni` where `id_alumni`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
	}
	
	function getUser($conn,$kode){
$field="nama_user";
$sql="SELECT `$field` FROM `tb_user` where `id_user`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
    }
    
    function getLoker($conn,$kode){
        $field="judul_loker";
$sql="SELECT `$field` FROM `tb_loker` where `id_loker`='$kode'";
$rs=$conn->query($sql);	
            $rs->data_seek(0);
            $row = $rs->fetch_assoc();
            $rs->free();
            return $row[$field];
            }

    function getPilihan($conn,$kode){
        $field="judul_loker";
$sql="SELECT `$field` FROM `tb_pilihan` where `id_pilihan`='$kode'";
$rs=$conn->query($sql);	
                    $rs->data_seek(0);
                    $row = $rs->fetch_assoc();
                    $rs->free();
                    return $row[$field];
                    }
?>

<!-- maps Resources -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<?php
if(@$_GET['pro']=='ubah'){
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#exampleModalLong').modal('show');
		$('#exampleLongModalLong2').modal('show');
	})
</script>
<?php
}
?>

	<!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
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
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
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
</body>

</html>

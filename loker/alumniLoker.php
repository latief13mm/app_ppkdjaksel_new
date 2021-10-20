
<?php
        $id_alumni=$_SESSION["cid"];
        $sql="select * from `$tbalumni` where `id_alumni`='$id_alumni'";
        $d=getField($conn,$sql);
        $id_alumni=$d["id_alumni"];
		$nama_alumni=$d["nama_alumni"];
		if ($_SESSION["cstatus"]=="Alumni") { 
?>
<!-- page title area start -->
<div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Lowongan Pekerjaan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Daftar Lowongan Pekerjaan</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"for="nama_alumni"><?php echo $nama_alumni;?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?mnu=inboxAlumniPilihan">Inbox</a>
				            <a class="dropdown-item" href="index.php?mnu=logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
<?php

$tanggal=WKT(date("Y-m-d"));
$pro="simpan";
$gambar0="avatar.jpg";
$status="Aktif";
//$PATH="ypathcss";
?>
<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script> 
    
	<!--Accordion -->
    <link rel="stylesheet" href="js/jquery-ui.css">
  <link rel="stylesheet" href="resources/demos/style.css">
<script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>
  <!-- Accordion -->  
 
  <!-- Block tiny 
 
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
   tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
   }); 
</script>
<!-- end Tiny -->        

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('loker/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, tanggal=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
if($_GET["pro"]=="ubah"){
	$id_loker=$_GET["kode"];
	$sql="select * from `$tbloker` where `id_loker`='$id_loker'";
	$d=getField($conn,$sql);
				$id_loker=$d["id_loker"];
				$judul_loker=$d["judul_loker"];
				$status_pekerjaan=$d["status_pekerjaan"];
				$id_perusahaan=$d["id_perusahaan"];
				$jabatan=$d["jabatan"];
				$jumlah_karyawan=$d["jumlah_karyawan"];
				$tanggal=WKT($d["tanggal"]);
				$lokasi_pekerjaan=$d["lokasi_pekerjaan"];
				$bidang_pekerjaan=$d["bidang_pekerjaan"];
				$gaji=$d["gaji"];
				$asuransi_kesehatan=$d["asuransi_kesehatan"];
				$tunjangan=$d["tunjangan"];
				$hari_kerja=$d["hari_kerja"];
				$jam_kerja=$d["jam_kerja"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$usia=$d["usia"];
				$pendidikan=$d["pendidikan"];
				$status_pernikahan=$d["status_pernikahan"];
				$pengalaman=$d["pengalaman"];
				$kemampuan_penunjang=$d["kemampuan_penunjang"];
				$sertifikat_profesi=$d["sertifikat_profesi"];
				$keterangan=$d["keterangan"];
				$gambar=$d["gambar"];
				$gambar0=$d["gambar"];
				$status=$d["status"];
				$pro="ubah";		
}
?>
<!-- Accordion -->
<!--
<div id="accordion">
  <h3>Input Data Lowongan Pekerjaan</h3>
  <div>
-->
<!-- Accordion -->
<!-- Accordion -->
<div class="col-lg-8 mt-5">
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg"> 
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Lowongan Pekerjaan</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body" >    
										<?php  
										$sqlq="select distinct(judul_loker) from `$tbloker` order by `id_loker` desc";
										$jumq=getJum($conn,$sqlq);
												if($jumq <1){
													echo"<h1>Maaf data belum tersedia...</h1>";
													}								
											$arrq=getData($conn,$sqlq);
												foreach($arrq as $dq) {							
														$judul_loker=$dq["judul_loker"];
										?>
										<div>

<div class="main-content-inner">
    <div class="row"> 
		<div class="col-lg-12 col-md-6 mt-5">
                <div class="card card-bordered">
                        <div class="card-body">
								<?php  
								$sql="select * from `$tbloker` where judul_loker='$judul_loker' order by `id_loker` desc";
								$jum=getJum($conn,$sql);
										if($jum > 0){
								//--------------------------------------------------------------------------------------------
								$batas   = 10;
								$page = $_GET['page'];
								if(empty($page)){$posawal  = 0;$page = 1;}
								else{$posawal = ($page-1) * $batas;}

								$sql2 = $sql." LIMIT $posawal,$batas";
								$no = $posawal+1;
								//--------------------------------------------------------------------------------------------									
									$arr=getData($conn,$sql2);
										foreach($arr as $d) {						
												$id_loker=$d["id_loker"];
												$idp=$d["id_perusahaan"];
												$id_perusahaan=getPerusahaan($conn,$d["id_perusahaan"]);
												$judul_loker=$d["judul_loker"];
												$status_pekerjaan=$d["status_pekerjaan"];
												$jabatan=$d["jabatan"];
												$jumlah_karyawan=$d["jumlah_karyawan"];
												$tanggal=WKT($d["tanggal"]);
												$lokasi_pekerjaan=$d["lokasi_pekerjaan"];
												$bidang_pekerjaan=$d["bidang_pekerjaan"];
												$gaji=$d["gaji"];
												$tunjangan=$d["tunjangan"];
												$hari_kerja=$d["hari_kerja"];
												$jam_kerja=$d["jam_kerja"];
												$jenis_kelamin=$d["jenis_kelamin"];
												$usia=$d["usia"];
												$pendidikan=$d["pendidikan"];
												$status_pernikahan=$d["status_pernikahan"];
												$pengalaman=$d["pengalaman"];
												$kemampuan_penunjang=$d["kemampuan_penunjang"];
												$sertifikat_profesi=$d["sertifikat_profesi"];
												$keterangan=$d["keterangan"];
												$gambar=$d["gambar"];
												$gambar0=$d["gambar"];
												$status=$d["status"];
												$color="#dddddd";		
												if($no %2==0){$color="#FFFFFF";}
												echo"<tr bgcolor='$color'>

												<center><td valign='top'><h5><b>$judul_loker</b></h5></center>
												<br>
												<td><div align='center'>";
												echo"<a href='#' onclick='buka(\"loker/zoom.php?id=$id_loker\")'>
												<img src='$YPATH/$gambar' width='200' height='200' /></a></div>";
												echo"</td>

												<br>Nama Perusahaan : <b>$id_perusahaan</b>
												<br>Status Perusahaan : <b>$status_pekerjaan</b>
												<br>Keterangan : <b>$keterangan</b></td>
												<br>

												<td align ='center'>
												<a href='?mnu=alumniPilihan&id=$id_loker'><button type='button' class='btn btn-outline-info mb-3' alt='ubah'>Detail Lowongan Kerja</button></a>
												<a href='?mnu=profilPerusahaanAlumni&id=$idp&id_loker=$id_loker'><button type='button' class='btn btn-outline-warning mb-3' alt='ubah'>Detail Perusahaan</button></a>
												</div></td>
												</tr>";	

											$no++;
											}//while
										}//if
										else{echo"<tr><td colspan='6'><blink>Maaf, Data loker belum tersedia...</blink></td></tr>";}
									?>
								</div>
                            </div>
                        </div>
		<!-- table primary start -->
		</div>
		

<!-- Accordion -->
</div>
<?php }?>
</div>
</div>
</div>
</div>
</div>
</body>
<!-- Accordion -->
<?php } else if ($_SESSION["cstatus"] == "Peserta" or "Calon Peserta") { ?>
	<!-- error area start -->
    <div class='error-area ptb--100 text-center'>
        <div class='container'>
            <div class='error-content'>
                <h2>403</h2>
				<p>Maaf Belom Bisa Mengakses Lowongan Kerja <br> Jika Ingin Mengakses Harus Menjadi Alumi Terlebih Dahulu
				<p>Jadi Tetap Semangat Belajarnya...!</p>
                <a href='index.php?mnu=home'>Kembali Ke Home</a>
            </div>
        </div>
    </div>
<!-- error area end -->" 
<?php } else { ?>
	<!-- error area start -->
    <div class='error-area ptb--100 text-center'>
        <div class='container'>
            <div class='error-content'>
                <h2>404</h2>
                <p>Maaf Ini Bukan Area Anda</p>
                <a href='index.php?mnu=home'>Kembali Ke Home</a>
            </div>
        </div>
    </div>
<!-- error area end -->";
<?php } ?>



<?php
        $id_alumni=$_SESSION["cid"];
        $sql="select * from `$tbalumni` where `id_alumni`='$id_alumni'";
        $d=getField($conn,$sql);
        $id_alumni=$d["id_alumni"];
        $nama_alumni=$d["nama_alumni"];
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
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
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
<div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Lowongan Pekerjaan</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">    
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
										<h5>Judul Lowongan <b><?php echo $judul_loker;?></b></h5>
										<div>
										<br />

<div class="main-content-inner">
    <div class="row">
		<!-- table primary start -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                	 <h4 class="header-title">Data Lowongan Pekerjaan</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table width="200%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
									<th width="2%"><center>No</center></td>
									<th width="5%"><center>Gambar</center></td>
									<th width="20%"><center>Permintaan Tenaga Kerja</center></td>
									<th width="20%"><center>Kompensasi Tenaga Kerja</center></td>
									<th width="25%"><center>Kualifikasi Tenaga Kerja</center></td>
									<th width="20%"><center>Keterangan Tambahan</center></td>
									<th width="10%"><center>Aksi</center></td>
								</tr>
								</thead>	
								<tbody>
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
												<td scope='row'>$no</td>
												
												<td><div align='left'>";
								echo"<a href='#' onclick='buka(\"loker/zoom.php?id=$id_loker\")'>
								<img src='$YPATH/$gambar' width='200' height='200' /></a></div>";
												echo"</td>
												<td valign='top'><b>$id_perusahaan</b>
												<br>Judul Loker : <br><b>$judul_loker</b>
												<br>Status Pekerjaan : <br><b>$status_pekerjaan</b>
												<br>Jabatan : <br><b>$jabatan</b>
												<br>Jumlah Karyawan : <br><b>$jumlah_karyawan</b>
												<br> Tanggal : <br><b>$tanggal</b>
												<br> Lokasi Pekerjaan : <br><b>$lokasi_pekerjaan</b>
												<br>Bidang Pekerjaan : <br><b>$bidang_pekerjaan</b></td>
												<td valign='top'>Gaji : <br><b>$gaji</b>
												<br>Tunjangan : <br><b>$tunjangan</b>
												<br>Hari Kerja : <br><b>$hari_kerja</b>
												<br> Jam Kerja : <br><b>$jam_kerja</b></td>
												<td valign='top'>Jenis Kelamin : <br><b>$jenis_kelamin</b>
												<br> Usia Pekerja : <br><b>$usia</b>
												<br> Pendidikan : <br><b>$pendidikan</b>
												<br>Status Pernikahan : <br><b>$status_pernikahan</b> 
												<br>Pengalaman : <br><b>$pengalaman</b>
												<br>Kemampuan Penunjang : <br><b>$kemampuan_penunjang</b> 
												<br>Sertifikasi Profesi : <br><b>$sertifikat_profesi</b></td>
												<td valign='top'>Status Loker : <br><b>$status</b>
												<br>Catatan : <br><b>$keterangan</b></td>

												<td align ='center'>
												<a href='?mnu=alumniPilihan&id=$id_loker'><button type='button' class='btn btn-rounded btn-info mb-3' alt='ubah'>Detail Lowongan Kerja</button></a>
												<a href='?mnu=profilPerusahaanAlumni&id=$idp&id_loker=$id_loker'><button type='button' class='btn btn-rounded btn-info mb-3' alt='ubah'>Detail Perusahaan</button></a>
												
												
												</div></td>
												</tr>";	
																								
											$no++;
											}//while
										}//if
										else{echo"<tr><td colspan='6'><blink>Maaf, Data loker belum tersedia...</blink></td></tr>";}
								?>
								</tbody>
    							</table>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
<?php
$jmldata = $jum;
if($jmldata>0){
	if($batas<1){$batas=1;}
	$jmlhal  = ceil($jmldata/$batas);
	echo "<div class=paging>";
	if($page > 1){
		$prev=$page-1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=alumniLoker'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=alumniLoker'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=alumniLoker'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
echo "<p align=center>Total data <b>$jmldata</b> item</p>";
?>
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




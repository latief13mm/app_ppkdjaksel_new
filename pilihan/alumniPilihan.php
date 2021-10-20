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
                            <h4 class="page-title pull-left">Lamaran Kerja</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Lamaran Saya</span></li>
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
       
     <!-- Accordion -->
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

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('pilihan/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
$id_alumni=$_SESSION["cid"];
if(isset($_GET["id"])){
	$id_loker=$_GET["id"];
	$sql="select * from `$tbloker` where `id_loker`='$id_loker'";
	$d=getField($conn,$sql);
				$id_loker=$d["id_loker"];
				$judul_loker=$d["judul_loker"];
				$status_pekerjaan=$d["status_pekerjaan"];
				$id_perusahaan=$d["id_perusahaan"];
				$id_perusahaan=strtoupper(getPerusahaan($conn,$d["id_perusahaan"]));
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
	
$sql="select id_pilihan,pesan from `$tbpilihan` where `id_alumni`='$id_alumni' and id_loker='$id_loker'";
	$d=getField($conn,$sql);
	$pesan=$d["pesan"];
	$sudah=getJum($conn,$sql)+0;
	
}


if($_GET["pro"]=="ubah"){
	$id_pilihan=$_GET["kode"];
	$sql="select * from `$tbpilihan` where `id_alumni`='$id_alumni' and `id_pilihan`='$id_pilihan'";
	$d=getField($conn,$sql);
				$id_pilihan=$d["id_pilihan"];
				$id_pilihan0=$d["id_pilihan"];
				$tanggal=WKT($d["tanggal"]);
				$id_alumni=$d["id_alumni"];
				$pesan=$d["pesan"];
				$id_perusahaan=$d["id_perusahaan"];
				$id_loker=$d["id_loker"];
				$status=$d["status"];
				$balasan=$d["balasan"];
				$keterangan=$d["keterangan"];
				$pro="ubah";		
}
?>

<div class="main-content-inner">
                <div class="row">
				<?php
				if(isset($_GET["id"])){
					?>
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
									<form action="" method="post" enctype="multipart/form-data">
									<h1 class="header-title">Detail Lowongan Pekerjaan</h1>
									<p class="text-muted font-14 mb-4">Silahkan Tulis Lamaran Pekerjaan </p>

									<div class="form-group">
                                            <label for="tanggal" class="date"><h2>Tanggal</h2><br>
                                            <h3><b><?php echo WKT(date("Y-m-d"));?></b></h3></label>
                                    </div>

									<div class="form-group">
                                            <label  for="id_alumni" class="col-form-label"><h2>Nama Alumni</h2><br>
                                           	<h3><b><?php echo $_SESSION["cnama"];?></b></h3></label>
                                    </div>


									<div class="form-group"> <label for="pesan" class="col-form-label">Info Lowongan Kerja :
                                           <?php
										   
									
										  echo"<table class='table table-striped text-left'>
												<tbody> 
												<th scope='row'>
												<div align='center'>";
												echo"<a href='#' onclick='buka(\"loker/zoom.php?id=$id_loker\")'>
												<img src='$YPATH/$gambar' width='300' height='300' /></a></div>";
												echo"</td>
												<th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<th scope='row'><h2><b>$id_perusahaan</b></h2><br/>
												<br>Judul Loker : $judul_loker
												<br>Status Pekerjaan : $status_pekerjaan
												<br>Posisi Pekerjaan : $jabatan
												<br>Jumlah Karyawan : $jumlah_karyawan
												<br>Tanggal : $tanggal
												<br>Lokasi Pekerjaan : $lokasi_pekerjaan
												<br>Bidang Pekerjaan : $bidang_pekerjaan
												<br>Gaji : $gaji
												<br>Tunjangan : $tunjangan
												<br>Hari Kerja : $hari_kerja
												<br>Jam Kerja : $jam_kerja
												<br>Jenis Kelamin : $jenis_kelamin
												<br>Usia : $usia
												<br>Pendidikan : $pendidikan
												<br>Status Pernikahan : $status_pernikahan 
												<br>Pengalaman : $pengalaman 
												<br>Kemampuan Penunjang : $kemampuan_penunjang 
												<br>Sertifikasi Profesi : $sertifikat_profesi
												</tr>
												</tbody>
												</table>";	
										   
										   ?></label>
                                    </div>
						
									<?php
									if($sudah>0){
										?>
										<div class="form-group">
											<label for="pesan" class="col-form-label">Tulis Draf Lamaran Kerja</label>
											<textarea disabled name="pesan" class="form-control" id="pesan"><?php echo $pesan;?></textarea>
										</div>
									
									<input name="id_loker" type="hidden" id="id_loker" value="<?php echo $id_loker;?>" />
									<a href="?mnu=alumniPilihan&id=<?php echo $id_loker;?>"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Pesan Sudah Dikirim" /></a>

									<div class="form-group">
                                            <label for="balasan" class="col-form-label">Balasan Dari Perusahaan</label>
                                            <textarea class="form-control form-control-lg mb-4" disabled name="balasan" type="textarea" id="balasan"><?php echo $balasan;?></textarea>
									</div>	

									</div>								
									<b class="text-muted mb-3 mt-4 d-block"></b>										
										<?php
									}
									else{
									?>
										<div class="form-group">
                                            <label for="pesan" class="col-form-label">Tulis Draf Lamaran Kerja</label>
                                            <textarea class="form-control form-control-lg mb-4" name="pesan" type="textarea" id="pesan" value="<?php echo $pesan;?>" ></textarea>	

								</div>
									<b class="text-muted mb-3 mt-4 d-block"></b>
									<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Daftar Sekarang">Kirim Lamaran</button>
									<input name="id_loker" type="hidden" id="id_loker" value="<?php echo $id_loker;?>" />
									<a href="?mnu=alumniPilihan&id=<?php echo $id_loker;?>"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
														
								<?php
									}
								?>
										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				}
				?>

				
				
<!-- Accordion -->
<div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Lamaran Saya</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">      
										<?php  
										$sqlq="select distinct(status) from `$tbpilihan` where id_alumni='$id_alumni' order by `id_pilihan` desc";
										$jumq=getJum($conn,$sqlq);
												if($jumq <1){
													echo"<h1>Maaf data belum tersedia...</h1>";
													}								
											$arrq=getData($conn,$sqlq);
												foreach($arrq as $dq) {							
														$status=$dq["status"];

										?>    
										
										<h3>Status Lamaran <?php echo"$status";?></h3>  
										<div>
										<br />

<div class="main-content-inner">
    <div class="row">
		<!-- table primary start -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                	 <h4 class="header-title">Lamaran Saya</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table width="100%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
										<th width="5%"><center>No</center></th>
										<th width="20%"><center>Alumni</center></th>
										<th width="20%"><center>Judul Lowongan Kerja</center></th>
										<th width="15%"><center>Menu</center></th>
									</tr>
									</thead>	
									<tbody>
									<?php  
									$sql="select * from `$tbpilihan` where status='$status' and id_alumni='$id_alumni' order by `id_pilihan` desc";
									$jum=getJum($conn,$sql);
											if($jum > 0){
										//--------------------------------------------------------------------------------------------
										$batas = 10;
										$page = $_GET['page'];
										if(empty($page)){$posawal  = 0;$page = 1;}
										else{$posawal = ($page-1) * $batas;}
										
										$sql2 = $sql." LIMIT $posawal,$batas";
										$no = $posawal+1;
										//--------------------------------------------------------------------------------------------									
										$arr=getData($conn,$sql2);
											foreach($arr as $d) {							
													$id_pilihan=$d["id_pilihan"];
													$tanggal=WKT($d["tanggal"]);
													$IDA=getAlumni($conn,$d["id_alumni"]);
													$pesan=$d["pesan"];
													$loker=getLoker($conn,$d["id_loker"]);
													$id_loker=$d["id_loker"];
													$status=$d["status"];
													$balasan=$d["balasan"];
													$keterangan=$d["keterangan"];
														$color="#dddddd";	
														if($no %2==0){$color="#FFFFFF";}
													echo"<tr bgcolor='$color'>
													<td>$no</td>
													<td><b>$IDA</b> 
													<br> Status : $status
													<br> Pesan: $pesan
													<br> $tanggal
													<td> Judul Loker :<b>$loker 
													<br> Balasan:
													<br> $balasan
													

													<td align ='center'>";
													
													if($status=="Proses"){
													echo"<a href='#'><button type='button' class='btn btn-rounded btn-danger mb-3' alt='hapus'
													onClick='return confirm(\"Maaf data sudah terkunci.... ?..\")'>Hapus</button></a>
													";
													}
													else{
													echo"<a href='?mnu=alumniPilihan&pro=hapus&kode=$id_pilihan'><button type='button' class='btn btn-rounded btn-danger mb-3' alt='hapus'
													onClick='return confirm(\"Apakah Anda benar-benar akan menghapus data pada data alumniPilihan ?..\")'>Hapus</span></button></a>
													";
													}
													echo"<a href='?mnu=alumniPilihan&id=$id_loker&id_pilihan=$id_pilihan'><button type='button' class='btn btn-rounded btn-success mb-3' alt='detail'>Lihat Detail</button></a>
													</div></td>
													</tr>";	

														
												$no++;
												}//while
											}//if
											else{echo"<tr><td colspan='7'><blink>Maaf, Data pilihan belum tersedia...</blink></td></tr>";}
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
//Langkah 3: Hitung total data dan page 
$jmldata = $jum;
if($jmldata>0){
	if($batas<1){$batas=1;}
	$jmlhal  = ceil($jmldata/$batas);
	echo "<div class=paging>";
	if($page > 1){
		$prev=$page-1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=alumniPilihan'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=alumniPilihan'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=alumniPilihan'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>
<!-- Accordion -->
</div>
<?php }?>
</div>
</div>
</div>
</div>
</body>
<!-- Accordion -->
<?php
if(isset($_POST["Simpan"])){
	$tanggal=date("Y-m-d");
	$id_alumni=strip_tags($_SESSION["cid"]);
	$pesan=strip_tags($_POST["pesan"]);
	$id_loker=strip_tags($_POST["id_loker"]);
	
 $sql=" INSERT INTO `$tbpilihan` (
`id_pilihan`,
`tanggal`,
`id_alumni`,
`pesan`,
`id_loker`,
`balasan`,
`keterangan`,
`status` 
) VALUES (
'', 
'$tanggal', 
'$id_alumni',
'$pesan',
'$id_loker',
'',
'', 
'Proses'
)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('lamaran kamu $id_pilihan berhasil dikirimkan !');document.location.href='?mnu=alumniPilihan&id=$id_loker';</script>";}
		else{echo "<script>alert('lamaran kamu $id_pilihan gagal dikirimkan...');document.location.href='?mnu=alumniPilihan&id=$id_loker';</script>";}

}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_pilihan=$_GET["kode"];
$sql="delete from `$tbpilihan` where `id_pilihan`='$id_pilihan'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data lamaran kamu $id_pilihan berhasil dihapus !');document.location.href='?mnu=alumniPilihan';</script>";}
else{echo"<script>alert('Data lamaran kamu $id_pilihan gagal dihapus...');document.location.href='?mnu=alumniPilihan';</script>";}
}
?>

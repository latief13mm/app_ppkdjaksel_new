<?php
        $kode_admin=$_SESSION["cid"];
        $sql="select * from `$tbadmin` where `kode_admin`='$kode_admin'";
        $d=getField($conn,$sql);
        $kode_admin=$d["kode_admin"];
		$username=$d["username"];
		if ($_SESSION["cstatus"]=="Super Administrator" || $_SESSION["cstatus"]=="Aktif"){	
        ?>
<!-- page title area start -->
<div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Perusahaan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Kelola Data Perusahaan</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"for="username"><?php echo $username;?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
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
        $("#waktu").datepicker({
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
    $( "#accordion4" ).accordion4({
      collapsible: true
    });
  } );
  </script>
  <!-- Accordion -->       

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('perusahaan/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, password=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
if($_GET["pro"]=="ubah"){
	$id_perusahaan=$_GET["kode"];
	$sql="select * from `$tbperusahaan` where `id_perusahaan`='$id_perusahaan'";
	$d=getField($conn,$sql);
				$id_perusahaan=$d["id_perusahaan"];
				$id_perusahaan0=$d["id_perusahaan"];
				$nama_perusahaan=$d["nama_perusahaan"];
				$alamat=$d["alamat"];
				$website=$d["website"];
				$email=$d["email"];
				$telephone=$d["telephone"];
				$user_name=$d["user_name"];
				$password=$d["password"];
				$status=$d["status"];
				$skdp=$d["skdp"];
				$wlk=$d["wlk"];
				$keterangan=$d["keterangan"];
				$gambar=$d["gambar"];
				$gambar0=$d["gambar"];
				$pro="ubah";		
}
?>
<!-- Accordion -->
<!-- <div id="accordion">
  <h3>Input Data Perusahaan</h3>
  <div>
-->  
<!-- Accordion -->
					<div class="main-content-inner">
						<div class="row">
							<button type="button" class="btn btn-success btn-xl  mt-3" data-toggle="modal" data-target="#exampleModalLong">Form Perusahaan</button>
							<div class="col-lg-12 mt-5">   
							<!-- Modal -->
                                <div class="modal fade" id="exampleModalLong">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="header-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
											<form action="" method="post" enctype="multipart/form-data">
									<h4 class="header-title">Input Data Perusahaan</h4>
									<p class="text-muted font-14 mb-4">Silahkan Masukkan Data Perusahaan </p>


									<div class="form-group">
                                            <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                                            <input class="form-control" name="nama_perusahaan" type="text" id="nama_perusahaan" value="<?php echo $nama_perusahaan;?>" />
									</div>

									<div class="form-group">
											<label for="alamat" class="col-form-label">Alamat Perusahaan</label>
											<textarea name="alamat" class="form-control" id="alamat"><?php echo $alamat;?></textarea>
									</div>
									
									<div class="form-group">
                                            <label for="website" class="col-form-label">Website Perusahaan</label>
                                            <input class="form-control" name="website" type="text" id="website" value="<?php echo $website;?>" />
									</div>

									<div class="form-group">
                                            <label for="email" class="col-form-label">Email Perusahaan</label>
                                            <input class="form-control" name="email" type="text" id="email" value="<?php echo $email;?>" />
									</div>

									<div class="form-group">
                                            <label for="telephone" class="col-form-label">Telephone Perusahaan</label>
                                            <input class="form-control" name="telephone" type="text" id="telephone" value="<?php echo $telephone;?>" />
									</div>

									<div class="form-group">
                                            <label for="user_name" class="col-form-label">Username</label>
                                            <input class="form-control" name="user_name" type="text" id="user_name" value="<?php echo $user_name;?>" />
									</div>

									<div class="form-group">
                                            <label for="password" class="col-form-label">Password</label>
                                            <input class="form-control" name="password" type="password" id="password" value="<?php echo $password;?>" />
									</div>

									<div class="form-group">
                                            <label for="skdp" class="col-form-label">Nomor Surat Registrasi Keterangan Domisili Tenaga Perusahaan</label>
                                            <input class="form-control" name="skdp" type="text" id="skdp" value="<?php echo $skdp;?>" />
									</div>

									<div class="form-group">
                                            <label for="wlk" class="col-form-label">Nomor Wajib Lapor Ketenagakerjaan</label>
                                            <input class="form-control" name="wlk" type="text" id="wlk" value="<?php echo $wlk;?>" />
									</div>

									<div class="form-group">
											<label for="keterangan" class="col-form-label">Keterangan Tambahan Dari Perusahaan</label>
											<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $keterangan;?></textarea>
									</div>
									
								
									<b class="text-muted mb-3 mt-4 d-block">Status Akses Perusahaan Ke Sistem</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" checked id="customRadio1" name="status" class="custom-control-input" value="Menunggu Verifikasi" <?php if($status=="Calon Peserta"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio1">Menunggu Verifikasi</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="Terverifikasi" <?php if($status=="Terverifikasi"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio2">Terverifikasi</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio3" name="status" class="custom-control-input" value="Tidak Aktif" <?php if($status=="Tidak Aktif"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio3">Tidak Aktif</label>
                                            </div>
									<br/>
									<br/>

																	
									<b class="text-muted mb-3 mt-4 d-block">Logo Perusahaan</b>
									<div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">jpg,png,pdf</span>
									</div>
                                    <div class="custom-file">
                                    <input name="gambar" type="file" class="custom-file-input" id="gambar" value="<?php echo $gambar0;?>" />
                                            <label class="custom-file-label" for="gambar">Choose file</label>
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

<a class="btn btn-primary mb-3" href="perusahaan/pdf.php" role="button">PDF</a>
<a class="btn btn-info mb-3" href="perusahaan/xls.php" role="button">Excel</a>
<a class="btn btn-warning mb-3" href="#" role="button" alt='PRINT' OnClick="PRINT()">print</a>			
<!-- Accordion -->
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Perusahaan</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">      
										<?php  
										$sqlq="select distinct(status) from `$tbperusahaan` order by `id_perusahaan` asc";
										$jumq=getJum($conn,$sqlq);
												if($jumq <1){
													echo"<h1>Maaf data belum tersedia...</h1>";
													}								
											$arrq=getData($conn,$sqlq);
												foreach($arrq as $dq) {							
														$status=$dq["status"];

										?>     
										<h3>Status <?php echo"$status";?></h3>
										<div>
										<br />
<!-- Accordion -->

<div class="main-content-inner">
    <div class="row">
		<!-- table primary start -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                        <div class="single-table">
                            <div class="table-responsive">
                                <table width="100%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
									<th width="3%"><center>No</center></th>
									<th width="5%"><center>Gambar</center></td>
									<th width="30%"><center>Data Perusahaan</center></th>
									<th width="15%"><center>Menu</center></th>
								</tr>
								<?php  
								$sql="select * from `$tbperusahaan` where status='$status' order by `id_perusahaan` desc";
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
												$id_perusahaan=$d["id_perusahaan"];
												$nama_perusahaan=strtoupper($d["nama_perusahaan"]);
												$alamat=$d["alamat"];
												$website=$d["website"];
												$email=$d["email"];
												$telephone=$d["telephone"];
												$user_name=$d["user_name"];
												$password=$d["password"];
												$status=$d["status"];
												$skdp=$d["skdp"];
												$wlk=$d["wlk"];
												$keterangan=$d["keterangan"];
												$gambar=$d["gambar"];
												$gambar0=$d["gambar"];
													$color="#dddddd";	
													if($no %2==0){$color="#FFFFFF";}
								echo"<tr bgcolor='$color'>
												<td valign='top'>$no</td>
												
												<td><div align='center'>";
								echo"<a href='#' onclick='buka(\"perusahaan/zoom.php?id=$id_perusahaan\")'>
								<img src='$YPATH/$gambar' width='40' height='40' /></a></div>";
												echo"</td>
												<td scope='row'><b><a href='$website'>$nama_perusahaan</a></b>
												Alamat: $alamat Telp $telephone
												<br>SKDP: $skdp, WLK: $wlk, Cat: $keterangan</td>
												<td align ='center'>
												<a href='?mnu=perusahaan&pro=ubah&kode=$id_perusahaan'><button type='button' class='btn btn-outline-primary mb-3' alt='ubah' i title='ubah data $nama_perusahaan'><span class=' ti-ruler-pencil'></i></span></button></a>
												<a href='?mnu=perusahaan&pro=hapus&kode=$id_perusahaan'><button type='button' class='btn btn-outline-danger mb-3' alt='hapus' i title='hapus data $nama_perusahaan'
												onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama pada data perusahaan ?..\")'><span class=' ti-trash'></i></span></button></a></div></td>
												</tr>";	

											
											$no++;
											}//while
										}//if
										else{echo"<tr><td colspan='7'><blink>Maaf, Data perusahaan belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=perusahaan'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=perusahaan'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=perusahaan'>Next »</a></span>";
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
</div>
</body>
<!-- Accordion -->
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
	
if($pro=="simpan"){
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
		if($simpan) {echo "<script>alert('Data $id_perusahaan berhasil disimpan !');document.location.href='?mnu=perusahaan';</script>";}
		else{echo"<script>alert('Data $id_perusahaan gagal disimpan...');document.location.href='?mnu=perusahaan';</script>";}
	}
	else{
$sql="update `$tbperusahaan` set 
`nama_perusahaan`='$nama_perusahaan',
`alamat`='$alamat' ,
`website`='$website',
`email`='$email',
`telephone`='$telephone',
`user_name`='$user_name',
`password`='$password' ,
`status`='$status',
`skdp`='$skdp',
`wlk`='$wlk',
`keterangan`='$keterangan',
`gambar`='$gambar'
where `id_perusahaan`='$id_perusahaan0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_perusahaan berhasil diubah !');document.location.href='?mnu=perusahaan';</script>";}
	else{echo"<script>alert('Data $id_perusahaan gagal diubah...');document.location.href='?mnu=perusahaan';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_perusahaan=$_GET["kode"];
$sql="delete from `$tbperusahaan` where `id_perusahaan`='$id_perusahaan'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data perusahaan $id_perusahaan berhasil dihapus !');document.location.href='?mnu=perusahaan';</script>";}
else{echo"<script>alert('Data perusahaan $id_perusahaan gagal dihapus...');document.location.href='?mnu=perusahaan';</script>";}
}
?>

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
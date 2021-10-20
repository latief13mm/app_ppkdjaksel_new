<?php
        $kode_admin=$_SESSION["cid"];
        $sql="select * from `$tbadmin` where `kode_admin`='$kode_admin'";
        $d=getField($conn,$sql);
        $kode_admin=$d["kode_admin"];
		$username=$d["username"];
		if ($_SESSION["cstatus"]=="Super Administrator"){	
?>
<!-- page title area start -->
<div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Admin</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Data Admin</span></li>
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
  <style type="text/css">
  body {
	background-color: #FFFFFF;
}
</style>
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
win=window.open('admin/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
  $sql="select * from `$tbadmin` order by `kode_admin` desc";
  $q=mysqli_query($conn, $sql);
  $jum=mysqli_num_rows($q);
  $kd="ADM";
		if($jum > 0){
			$d=mysqli_fetch_array($q);
			$idmax=$d["kode_admin"];
			$urut=substr($idmax,3,2)+1;//01
				if($urut<10){$idmax="$kd"."0".$urut;}
				else{$idmax="$kd".$urut;}
			}
		else{$idmax="$kd"."01";}
		$kode_admin=$idmax;
?>

<?php
if($_GET["pro"]=="ubah"){
	$kode_admin=$_GET["kode"];
	$sql="select * from `$tbadmin` where `kode_admin`='$kode_admin'";
	$d=getField($conn,$sql);
				$kode_admin=$d["kode_admin"];
				$username=$d["username"];
				$password=$d["password"];
				$telepon=$d["telepon"];
				$email=$d["email"];
				$status=$d["status"];
				$gambar=$d["gambar"];
				$gambar0=$d["gambar"];
				$pro="ubah";		
}
?>

<!-- Accordion 
<div id="accordion">
  <h3>Input Data Admin</h3>
  <div>
  -->
<!-- Accordion -->
						<div class="main-content-inner">
               				 <div class="row">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-success btn-xl  mt-3" data-toggle="modal" data-target="#exampleModalLong">Tambah Data Admin</button>
								<div class="col-lg-12 mt-5">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
											<h5 class="header-title" >Tambah Data Admin</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
											<form action="" method="post" enctype="multipart/form-data">
											<h4 class="header-title">Input Data Admin</h4>
											<p class="text-muted font-14 mb-4">Silahkan Masukkan Data Admin </p>
											
											<div class="form-group">
											<label for="kode_admin" class="col-form-label">Kode Admin</label>
											<input class="form-control" type="text" value="<?php echo $kode_admin;?>" id="kode_admin">
											</div>
											
											<div class="form-group">
													<label for="username" class="col-form-label">Username</label>
													<input class="form-control" name="username" type="text" id="username" value="<?php echo $username;?>" required=""/>
											</div>
						
											<div class="form-group">
													<label for="password" class="col-form-label">Password</label>
													<input class="form-control" name="password" type="text" id="password" value="<?php echo $password;?>" required=""/>
											</div>
											
											<div class="form-group">
													<label for="telepon" class="col-form-label">Telepon</label>
													<input class="form-control" name="telepon" type="text" id="telepon" value="<?php echo $telepon;?>" required=""/>
											</div>
											
											<div class="form-group">
													<label for="email" class="col-form-label">Email</label>
													<input class="form-control" name="email" type="text" id="email" value="<?php echo $email;?>" required=""/>
											</div>
											

											<b class="text-muted mb-3 mt-4 d-block">Status</b>
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" checked id="customRadio1" name="status" class="custom-control-input" value="Aktif" <?php if($status=="Aktif"){echo"checked";}?>/>
														<label class="custom-control-label" for="customRadio1">Aktif</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" id="customRadio2" name="status" class="custom-control-input" value="Tidak Aktif" <?php if($status=="Tidak Aktif"){echo"checked";}?> />
														<label class="custom-control-label" for="customRadio2">Tidak Aktif</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" id="customRadio3" name="status" class="custom-control-input" value="Super Administrator" <?php if($status=="Super Administrator"){echo"checked";}?> />
														<label class="custom-control-label" for="customRadio3">Super Administrator</label>
													</div>

											<b class="text-muted mb-3 mt-4 d-block">Foto Diri Pribadi</b>
											<div class="input-group mb-3">
											<div class="input-group-prepend">
													<span class="input-group-text">jpg,png</span>
													</div>
											<div class="custom-file">
											<input name="gambar" type="file" class="custom-file-input" id="gambar" value="<?php echo $gambar0;?>" />
													<label class="custom-file-label" for="gambar">Choose file</label>
													</div>
											</div>
													
											<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan">Simpan</button>
											<input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
											<input name="gambar0" type="hidden" id="gambar0" value="<?php echo $gambar0;?>" />
											<input name="kode_admin" type="hidden" id="kode_admin" value="<?php echo $kode_admin;?>" />
											<input name="kode_admin0" type="hidden" id="kode_admin0" value="<?php echo $kode_admin0;?>" />
											<a href="?mnu=admin"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
									</form>
								</div>
                            </div>
                        </div>
					</div>
				</div>	      
			</div>	
			
<a class="btn btn-primary mb-3" href="admin/pdf.php" role="button">PDF</a>
<a class="btn btn-info mb-3" href="admin/xls.php" role="button">Excel</a>
<a class="btn btn-warning mb-3" href="#" role="button" alt='PRINT' OnClick="PRINT()">print</a>
<!-- Accordion -->
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Admin</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">                                       
											<?php  
											$sqlq="select distinct(status) from `$tbadmin` order by `kode_admin` asc";
											$jumq=getJum($conn,$sqlq);
													if($jumq <1){
														echo"<h1>Maaf data belum tersedia...</h1>";
														}								
												$arrq=getData($conn,$sqlq);
													foreach($arrq as $dq) {							
															$status=$dq["status"];
											?>     
										<h3>Data Admin <?php echo"$status";?></h3>
										<div>
										<br/>
									
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
										<th width="5%"><center>No</center></td>
										<th width="10%"><center>Kode Admin</center></td>
										<th width="10%"><center>Username</center></td>
										<th width="10%"><center>Email</center></td>
										<th width="10%"><center>Telepon</center></td>
										<th width="10%"><center>Status</center></td>
										<th width="5%"><center>Gambar</center></td>
										<th width="15%"><center>Menu</center></td>
									</tr>
									</thead>	
									<tbody>
  										<!-- where status -->
										<?php  
										$sql="select * from `$tbadmin` where status='$status' order by `kode_admin` desc";
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
														$kode_admin=$d["kode_admin"];
														$username=$d["username"];
														$password=$d["password"];
														$telepon=$d["telepon"];
														$email=$d["email"];
														$status=$d["status"];
														$gambar=$d["gambar"];
														$gambar0=$d["gambar"];
														$color="#dddddd";		
														if($no %2==0){$color="#FFFFFF";}
										echo"<tr bgcolor='$color'>
														<td>$no</td>
														<td>$kode_admin</td>
														<td>$username</td>
														<td>$email</td>
														<td>$telepon</td>
														<td>$status</td>
														<td><div align='center'>";
										echo"<a href='#' onclick='buka(\"admin/zoom.php?id=$kode_admin\")'>
										<img src='$YPATH/$gambar' width='40' height='40' /></a></div>";
														echo"</td>

														<td align ='center'>
														<a href='?mnu=admin&pro=ubah&kode=$kode_admin'><button type='button' class='btn btn-outline-primary mb-3' alt='ubah' i title='ubah data admin $username'><span class=' ti-ruler-pencil'></i></span></button></a>
														<a href='?mnu=admin&pro=hapus&kode=$kode_admin'><button type='button' class='btn btn-outline-danger mb-3' alt='hapus' i title='hapus data admin $username'
														onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama pada data admin ?..\")'><span class=' ti-trash'></i></span></button></a></div></td>
														</tr>";	
																			
													$no++;
													}//while
												}//if
												else{echo"<tr><td colspan='6'><blink>Maaf, Data admin belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=admin'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=admin'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=admin'>Next »</a></span>";
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

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$kode_admin=strip_tags($_POST["kode_admin"]);
	$kode_admin0=strip_tags($_POST["kode_admin"]);
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$telepon=strip_tags($_POST["telepon"]);
	$email=strip_tags($_POST["email"]);
	$status=strip_tags($_POST["status"]);
	
	$gambar0=strip_tags($_POST["gambar0"]);
	if ($_FILES["gambar"] != "") {
		@copy($_FILES["gambar"]["tmp_name"],"$YPATH/".$_FILES["gambar"]["name"]);
		$gambar=$_FILES["gambar"]["name"];
		} 
	else {$gambar=$gambar0;}
	if(strlen($gambar)<1){$gambar=$gambar0;}
	
if($pro=="simpan"){
$sql=" INSERT INTO `$tbadmin` (
`kode_admin` ,
`username` ,
`password` ,
`telepon` ,
`email` ,
`status` ,
`gambar` 
) VALUES (
'$kode_admin', 
'$username',
'$password', 
'$telepon',
'$email',
'$status', 
'$gambar'
)";
	
$simpan=process($conn,$sql);
	if($simpan) {echo "<script>alert('Data $kode_admin berhasil disimpan !');document.location.href='?mnu=admin';</script>";}
		else{echo"<script>alert('Data $kode_admin gagal disimpan...');document.location.href='?mnu=admin';</script>";}
	}
	else{
	$sql="update `$tbadmin` set `username`='$username',`password`='$password',`telepon`='$telepon' ,`email`='$email',`status`='$status',
	`gambar`='$gambar'  where `kode_admin`='$kode_admin0'";
	$ubah=process($conn,$sql);
		if($ubah) {echo "<script>alert('Data $kode_admin berhasil diubah !');document.location.href='?mnu=admin';</script>";}
		else{echo"<script>alert('Data $kode_admin gagal diubah...');document.location.href='?mnu=admin';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$kode_admin=$_GET["kode"];
$sql="delete from `$tbadmin` where `kode_admin`='$kode_admin'";
$hapus=process($conn,$sql);
	if($hapus) {echo "<script>alert('Data $kode_admin berhasil dihapus !');document.location.href='?mnu=admin';</script>";}
	else{echo"<script>alert('Data $kode_admin gagal dihapus...');document.location.href='?mnu=admin';</script>";}
}
?>

<?php } else {  ?> 
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
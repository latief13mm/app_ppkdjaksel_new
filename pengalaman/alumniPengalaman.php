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
                            <h4 class="page-title pull-left">Pengalaman</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Pengalaman Saya</span></li>
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
        $("#date").datepicker({
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
win=window.open('pengalaman/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, telepon=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>


<?php
$id_alumni=$_SESSION["cid"];
if($_GET["pro"]=="ubah"){
	$id_pengalaman	=$_GET["kode"];
	$sql="select * from `$tbpengalaman` where `id_pengalaman`='$id_pengalaman'";
  	$d=getField($conn,$sql);
				$id_pengalaman=$d["id_pengalaman"];
        		$id_pengalaman0=$d["id_pengalaman"];
        		$id_alumni=$d["id_alumni"];
				$pengalaman_kerja=$d["pengalaman_kerja"];
				$periode=$d["periode"];
				$catatan=$d["catatan"];
				$ijazah=$d["ijazah"];
				$ijazah0=$d["ijazah"];
				$sertifikat=$d["sertifikat"];
				$sertifikat0=$d["sertifikat"];
				$sertifikat_bnsp=$d["sertifikat_bnsp"];
				$sertifikat_bnsp0=$d["sertifikat_bnsp"];
				$pro="ubah";	

}
?>
<!-- Accordion -->
<!--
<div id="accordion">
  <h3>Input Data Pengalaman</h3>
  <div>
 --> 
<!-- Accordion -->
<div class="main-content-inner">
        <div class="row">
				<button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalLong">Tambah Pengalaman</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="header-title" >Tambah Pengalaman</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
											<form action="" method="post" enctype="multipart/form-data">
											<h4 class="header-title">Input Data Pengalaman</h4>
											<p class="text-muted font-14 mb-4">Silahkan Masukkan Data Pengalaman </p>

											<div class="form-group">
													<label for="pengalaman_kerja" class="col-form-label">Pengalaman Kerja</label>
													<textarea name="pengalaman_kerja" class="form-control" id="pengalaman_kerja"><?php echo $pengalaman_kerja;?></textarea>
											</div>

											<div class="form-group">
													<label for="periode" class="col-form-label">Periode Kerja Disuatu Perusahaan</label>
													<textarea name="periode" class="form-control" id="periode"><?php echo $periode;?></textarea>
											</div>

											<div class="form-group">
													<label for="catatan" class="col-form-label">Catatan Tambahan</label>
													<textarea name="catatan" class="form-control" id="catatan"><?php echo $catatan;?></textarea>
											</div>

											<div class="form-group">
												<label for="ijazah" class="col-form-label">Tambahkan Ijazah</label>
												<input name="ijazah" type="file" class="form-control" id="ijazah" value="<?php echo $ijazah;?>"/>
												<p class="text-secondary">Tambahkan Ijazah Jika Ada</p>
											</div>

											<div class="form-group">
												<label for="sertifikat" class="col-form-label">Tambahkan Sertifikat</label>
												<input name="sertifikat" type="file" class="form-control" id="sertifikat" value="<?php echo $sertifikat;?>"/>
												<p class="text-secondary">Tambahkan Sertifikat Jika Ada</p>
											</div>

											<div class="form-group">
												<label for="sertifikat_bnsp" class="col-form-label">Tambahkan Sertifikat BNSP</label>
												<input name="sertifikat_bnsp" type="file" class="form-control" id="sertifikat_bnsp" value="<?php echo $sertifikat_bnsp;?>"/>
												<p class="text-secondary">Tambahkan Sertifikat BNSP Jika Ada</p>
											</div>

											<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan">Simpan</button>
											<input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
											<input name="ijazah0" type="hidden" id="ijazah0" value="<?php echo $ijazah0;?>" />
											<input name="sertifikat0" type="hidden" id="sertifikat0" value="<?php echo $sertifikat0;?>" />
											<input name="sertifikat_bnsp0" type="hidden" id="sertifikat_bnsp0" value="<?php echo $sertifikat_bnsp0;?>" />
											<input name="id_pengalaman" type="hidden" id="id_pengalaman" value="<?php echo $id_pengalaman;?>" />
											<input name="id_pengalaman0" type="hidden" id="id_pengalaman0" value="<?php echo $id_pengalaman0;?>" />
											<a href="?mnu=alumniPengalaman"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
											</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
<!-- Accordion -->
<div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Pengalaman</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">                                       
									<div>
<!-- Accordion -->
<div class="main-content-inner">
    <div class="row">
		<!-- table primary start -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                	 <h4 class="header-title">Data Alumni</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table width="100%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
									<th width="3%"><center>No</center></th>
									<th width="20%"><center>Pengalaman</center></th>
									<th width="20%"><center>Catatan</center></th>
									<th width="10%"><center>Ijazah</center></th>
									<th width="10%"><center>Sertifikat</center></th>
									<th width="10%"><center>Sertifikat BNSP</center></th>
									<th width="15%"><center>Aksi</center></th>
								</tr>
								<?php  
								
								$sql="select * from `$tbpengalaman` where id_alumni='$id_alumni' order by `id_pengalaman` desc";
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
										$id_pengalaman=$d["id_pengalaman"];
										$id_pengalaman0=$d["id_pengalaman"];
												$id_alumni=getAlumni($conn,$d["id_alumni"]);
												$pengalaman_kerja=$d["pengalaman_kerja"];
												$periode=$d["periode"];
												$catatan=$d["catatan"];
												$ijazah=$d["ijazah"];
												$sertifikat=$d["sertifikat"];
												$sertifikat_bnsp=$d["sertifikat_bnsp"];
													$color="#dddddd";	
													if($no %2==0){$color="#FFFFFF";}
												echo"<tr bgcolor='$color'>
												<td scope='row'>$no</td>
												<td>Pengalaman Kerja : 
												<br><b>$pengalaman_kerja</b>
												<br>Periode Kerja : 
												<br><b>$periode</b></td>
												<td>$catatan</td>

												<td><div align='right'>";
									echo"<a href='#' onclick='buka(\"pengalaman/zoom.php?id=$id_pengalaman\")'>
									<img src='$YPATH/$ijazah' width='100' height='100' /></a></div>";
													echo"</td>
												<td><div align='right'>";
									echo"<a href='#' onclick='buka(\"pengalaman/zoom1.php?id=$id_pengalaman\")'>
									<img src='$YPATH/$sertifikat' width='100' height='100' /></a></div>";
													echo"</td>

												<td><div align='right'>";
									echo"<a href='#' onclick='buka(\"pengalaman/zoom2.php?id=$id_pengalaman\")'>
									<img src='$YPATH/$sertifikat_bnsp' width='100' height='100' /></a></div>";
													echo"</td>

												<td align ='center'>
												<a href='?mnu=alumniPengalaman&pro=ubah&kode=$id_pengalaman'><button type='button' class='btn btn-outline-primary mb-3' alt='ubah' data-dismiss='modal' i title='ubah pengalaman $id_alumni'><span class=' ti-ruler-pencil'></i></span></button></a>
												<a href='?mnu=alumniPengalaman&pro=hapus&kode=$id_pengalaman'><button type='button' class='btn btn-outline-danger mb-3' alt='hapus' i title='hapus pengalaman $id_alumni' 
												onClick='return confirm(\"Apakah Anda benar-benar akan menghapus pengalaman anda pada data alumniPengalaman ?..\")'><span class=' ti-trash'></i></span></button></a></div></td>
												</tr>";	

											$no++;
											}//while
										}//if
										else{echo"<tr><td colspan='7'><blink>Maaf, Data pengalaman belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=alumniPengalaman'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=alumniPengalaman'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=alumniPengalaman'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>
<!-- Accordion -->
</div>
</div>
</div>
</div>
</body>
<!-- Accordion -->
<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_pengalaman=strip_tags($_POST["id_pengalaman"]);
	$id_pengalaman0=strip_tags($_POST["id_pengalaman0"]);
	$id_alumni=$_SESSION["cid"];
	
	$pengalaman_kerja=strip_tags($_POST["pengalaman_kerja"]);
	$periode=strip_tags($_POST["periode"]);
	$catatan=strip_tags($_POST["catatan"]);

	$ijazah0=strip_tags($_POST["ijazah0"]);
	if ($_FILES["ijazah"] != "") {
		@copy($_FILES["ijazah"]["tmp_name"],"$YPATH/".$_FILES["ijazah"]["name"]);
		$ijazah=$_FILES["ijazah"]["name"];
		}
	else {$ijazah=$ijazah0;}
	if(strlen($ijazah)<1){$ijazah=$ijazah0;}

	$sertifikat0=strip_tags($_POST["sertifikat0"]);
	if ($_FILES["sertifikat"] != "") {
		@copy($_FILES["sertifikat"]["tmp_name"],"$YPATH/".$_FILES["sertifikat"]["name"]);
		$sertifikat=$_FILES["sertifikat"]["name"];
		}
	else {$sertifikat=$sertifikat0;}
	if(strlen($sertifikat)<1){$sertifikat=$sertifikat0;}

	$sertifikat_bnsp0=strip_tags($_POST["sertifikat_bnsp0"]);
	if ($_FILES["sertifikat_bnsp"] != "") {
		@copy($_FILES["sertifikat_bnsp"]["tmp_name"],"$YPATH/".$_FILES["sertifikat_bnsp"]["name"]);
		$sertifikat_bnsp=$_FILES["sertifikat_bnsp"]["name"];
		}
	else {$sertifikat_bnsp=$sertifikat_bnsp0;}
	if(strlen($sertifikat_bnsp)<1){$sertifikat_bnsp=$sertifikat_bnsp0;}
	
if($pro=="simpan"){
$sql=" INSERT INTO `$tbpengalaman` (
`id_pengalaman`,
`id_alumni`,
`pengalaman_kerja`,
`periode`,
`catatan`,
`ijazah`,
`sertifikat`,
`sertifikat_bnsp`
) VALUES (
'', 
'$id_alumni',
'$pengalaman_kerja', 
'$periode',
'$catatan',
'$ijazah',
'$sertifikat',
'$sertifikat_bnsp'
)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_pengalaman berhasil disimpan !');document.location.href='?mnu=alumniPengalaman';</script>";}
		else{echo "<script>alert('Data $id_pengalaman gagal disimpan...');document.location.href='?mnu=alumniPengalaman';</script>";}
	}
	else{
	$sql="update `tb_pengalaman` SET 
	`id_alumni` = '$id_alumni', 
	`pengalaman_kerja` = '$pengalaman_kerja', 
	`periode` = '$periode', 
	`catatan` = '$catatan',
	`ijazah` = '$ijazah',
	`sertifikat` = '$sertifikat',
	`sertifikat_bnsp` = '$sertifikat_bnsp' 
	where `id_pengalaman` = '$id_pengalaman0'";
	$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_pengalaman berhasil diubah !');document.location.href='?mnu=alumniPengalaman';</script>";}
	else{echo"<script>alert('Data $id_pengalaman gagal diubah...');document.location.href='?mnu=alumniPengalaman';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_pengalaman	=$_GET["kode"];
$sql="delete from `$tbpengalaman` where `id_pengalaman`='$id_pengalaman'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data pengalaman $id_pengalaman	 berhasil dihapus !');document.location.href='?mnu=alumniPengalaman';</script>";}
else{echo"<script>alert('Data pengalaman $id_pengalaman	 gagal dihapus...');document.location.href='?mnu=alumniPengalaman';</script>";}
}
?>

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
                            <h4 class="page-title pull-left">Pilihan Pelamar Kerja</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Data Status Pelamar Kerja</span></li>
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
if($_GET["pro"]=="ubah"){
	$id_pilihan=$_GET["kode"];
	$sql="select * from `$tbpilihan` where `id_pilihan`='$id_pilihan'";
	$d=getField($conn,$sql);
				$id_pilihan=$d["id_pilihan"];
				$id_pilihan0=$d["id_pilihan"];
				$tanggal=$d["tanggal"];
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
<!-- Accordion -->
<!-- <div id="accordion">
  <h3>Pilihan Pelamar Kerja</h3>
  <div>
 --> 
<!-- Accordion -->
<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
									<form action="" method="post" enctype="multipart/form-data">
									<h4 class="header-title">Input Data Pilihan</h4>
									<p class="text-muted font-14 mb-4">Silahkan Masukkan Data Pilihan </p>

									<div class="form-group">
                                            <label for="tanggal" class="date">Tanggal</label>
                                            <input disabled class="form-control" name="tanggal" type="date" id="tanggal" value="<?php echo $tanggal;?>" />
                                    </div>

									<div class="form-group">
                                            <label  for="id_alumni" class="col-form-label">Nama Alumni</label>
                                            <select disabled name="id_alumni" class="custom-select" id="id_alumni">
                                                <option selected="selected">Pilih Alumni</option>
                                                <?php
												$s="select * from `tb_alumni`";
												$q=getData($conn,$s);
													foreach($q as $d){							
															$id_alumni0=$d["id_alumni"];
															$nama_alumni=$d["nama_alumni"];
												echo"<option value='$id_alumni0' ";if($id_alumni0==$id_alumni){echo"selected";} echo">$id_alumni0 - $nama_alumni  </option>";
												}
												?>
                                            </select>
                                    </div>

									<div class="form-group">
											<label for="pesan" class="col-form-label">Pesan</label>
											<textarea disabled name="pesan" class="form-control" id="pesan"><?php echo $pesan;?></textarea>
									</div>

									<div class="form-group">
                                            <label  for="id_loker" class="col-form-label">Judul Lowongan Pekerjaan</label>
                                            <select disabled name="id_loker" class="custom-select" id="id_loker">
                                                <option selected="selected">Pilih Lowongan Pekerjaan</option>
												<?php
												$s="select * from `tb_loker`";
												$q=getData($conn,$s);
													foreach($q as $d){							
															$id_loker0=$d["id_loker"];
															$id_perusahaan0= getPerusahaan($conn, $d["id_perusahaan"]);
															$judul_loker=$d["judul_loker"];
												echo"<option value='$id_loker0' ";if($id_loker0==$id_loker){echo"selected";} echo">$id_loker0 - $id_perusahaan0 - $judul_loker  </option>";
												}
												?>
                                            </select>
                                    </div>

									<div class="form-group">
											<label for="balasan" class="col-form-label">Balasan</label>
											<textarea disabled name="balasan" class="form-control" id="balasan"><?php echo $balasan;?></textarea>
									</div>

									<div class="form-group">
                                            <label for="keterangan" class="col-form-label">Keterangan</label>
                                            <textarea disabled class="form-control form-control-lg mb-4" name="keterangan" type="textarea" id="keterangan"><?php echo $keterangan;?></textarea>
									</div>


									<b class="text-muted mb-3 mt-4 d-block">Status Pelamar</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio1" name="status" disabled class="custom-control-input" value="Proses" <?php if($status=="Proses"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio1">Proses</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio2" name="jenis_kelamin" disabled class="custom-control-input" value="Diterima" <?php if($status=="Diterima"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio2">Diterima</label>
                                            </div>
											<div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio3" name="jenis_kelamin" disabled class="custom-control-input" value="Tidak Diterima" <?php if($status=="Tidak Diterima"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio3">Tidak Diterima</label>
                                            </div>
									<div>

									<b class="text-muted mb-3 mt-4 d-block"></b>
									<!-- <button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan">Simpan</button>-->
									<input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
									<input name="gambar0" type="hidden" id="gambar0" value="<?php echo $gambar0;?>" />
									<input name="id_pilihan" type="hidden" id="id_pilihan" value="<?php echo $id_pilihan;?>" />
									<input name="id_pilihan0" type="hidden" id="id_pilihan0" value="<?php echo $id_pilihan0;?>" />
									<!-- <a href="?mnu=pilihan"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a> -->
									</form>
								</div>
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
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Pilihan</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">      
										<?php  
										$sqlq="select distinct(status) from `$tbpilihan` order by `id_pilihan` desc";
										$jumq=getJum($conn,$sqlq);
												if($jumq <1){
													echo"<h1>Maaf data belum tersedia...</h1>";
													}								
											$arrq=getData($conn,$sqlq);
												foreach($arrq as $dq) {							
														$status=$dq["status"];

										?>    
										
										<h3>Data Pelamar <?php echo"$status";?></h3>  
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
										<th width="30%"><center>Alumni</center></th>
										<th width="30%"><center>Perusahaan</center></th>
										<th width="15%"><center>Menu</center></th>
									</tr>
									</thead>	
									<tbody>
									<?php  
									$sql="select * from `$tbpilihan` where status='$status' order by `id_pilihan` desc";
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
													$id_pilihan=$d["id_pilihan"];
													$tanggal=WKT($d["tanggal"]);
													$id_alumni=getAlumni($conn,$d["id_alumni"]);
													$pesan=$d["pesan"];
													$id_perusahaan=getPerusahaan($conn,$d["id_perusahaan"]);
													$nama_perusahaan = getPerusahaanByIdLoker($conn, $d["id_loker"]);
													$id_loker=getLoker($conn,$d["id_loker"]);
													$status=$d["status"];
													$balasan=$d["balasan"];
													$keterangan=$d["keterangan"];
														$color="#dddddd";	
														if($no %2==0){$color="#FFFFFF";}
									echo"<tr bgcolor='$color'>
													<td>$no</td>
													<td><b>$id_alumni</b> 
													<br> Status : <b><u>$status</u></b>
													<br> Pesan: $pesan
													<td> $tanggal
													<br> $nama_perusahaan
													<br> Judul Loker : <br><b>$id_loker</b> 
													<br> Balasan : <br>$balasan
													<br> Keterangan : $keterangan</td>

													<td align ='center'>
													<a href='?mnu=pilihan&pro=ubah&kode=$id_pilihan'><button type='button' class='btn btn-outline-success mb-3' alt='ubah' i title='Detail Lamaran Kerja $id_alumni'><span class=' fa fa-binoculars'></i></span></button></a>
													<a href='?mnu=pilihan&pro=hapus&kode=$id_pilihan'><button type='button' class='btn btn-outline-danger mb-3' alt='hapus' i title='hapus data $id_alumni'
													onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama pada data pilihan ?..\")'><span class=' ti-trash'></i></span></button></a></div></td>
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=pilihan'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=pilihan'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=pilihan'>Next »</a></span>";
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
	$pro=strip_tags($_POST["pro"]);
	$id_pilihan=strip_tags($_POST["id_pilihan"]);
	$id_pilihan0=strip_tags($_POST["id_pilihan0"]);
	$tanggal=date("Y-m-d");
	$id_alumni=strip_tags($_POST["id_alumni"]);
	$pesan=strip_tags($_POST["pesan"]);
	$id_loker=strip_tags($_POST["id_loker"]);
	$status=strip_tags($_POST["status"]);
	$balasan=strip_tags($_POST["balasan"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
if($pro=="simpan"){
echo $sql=" INSERT INTO `$tbpilihan` (
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
'$balasan',
'$keterangan', 
'$status'
)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_pilihan berhasil disimpan !');document.location.href='?mnu=pilihan';</script>";}
		else{echo "<script>alert('Data $id_pilihan gagal disimpan...');document.location.href='?mnu=pilihan';</script>";}
	}
	else{
		$sql="update `$tbpilihan` set 
		`tanggal`='$tanggal',
		`id_alumni`='$id_alumni' ,
		`pesan`='$pesan',
		`id_loker`='$id_loker',
		`balasan`='$balasan',
		`keterangan`='$keterangan', 
		`status`='$status'
where `id_pilihan`='$id_pilihan0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_pilihan berhasil diubah !');document.location.href='?mnu=pilihan';</script>";}
	else{echo"<script>alert('Data $id_pilihan gagal diubah...');document.location.href='?mnu=pilihan';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_pilihan=$_GET["kode"];
$sql="delete from `$tbpilihan` where `id_pilihan`='$id_pilihan'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data pilihan $id_pilihan berhasil dihapus !');document.location.href='?mnu=pilihan';</script>";}
else{echo"<script>alert('Data pilihan $id_pilihan gagal dihapus...');document.location.href='?mnu=pilihan';</script>";}
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

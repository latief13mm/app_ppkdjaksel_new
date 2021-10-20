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
                            <h4 class="page-title pull-left">Lowongan Kerja</h4>
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
					<div class="main-content-inner">
						<div class="row">
							<button type="button" class="btn btn-success btn-xl  mt-3" data-toggle="modal" data-target="#exampleModalLong">Form Lowongan Pekerjaan</button>
							<div class="col-lg-12 mt-5">							   
								<!-- Modal -->
                                <div class="modal fade" id="exampleModalLong">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="header-title">Form Lowongan Pekerjaan</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
											<form action="" method="post" enctype="multipart/form-data">
									<h1 class="header-title">Input Data Lowongan Pekerjaan</h1>
									<p class="text-muted font-14 mb-4"><b>Silahkan Masukkan Data Lowongan Pekerjaan</b></p>
									
									<div class="form-group">
                                            <label for="judul_loker" class="col-form-label">Judul Loker</label>
                                            <input class="form-control" name="judul_loker" type="text" id="judul_loker" value="<?php echo $judul_loker;?>" />
									</div>

									<div class="form-group">
                                            <label  for="status_pekerjaan" class="col-form-label"><b>Jenis Pekerjaan</b></label>
                                            <select name="status_pekerjaan" class="custom-select" id="status_pekerjaan">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Tetap"<?php if($status_pekerjaan=="Tetap"){echo"selected";}?>>Tetap</option>
												<option value="Kontrak"<?php if($status_pekerjaan=="Kontrak"){echo"selected";}?>>Kontrak</option>
												<option value="Magang"<?php if($status_pekerjaan=="Magang"){echo"selected";}?>>Magang</option>
												<option value="Outsorce"<?php if($status_pekerjaan=="Outsorce"){echo"selected";}?>>Outsorce</option>
												<option value="lainnya"<?php if($status_pekerjaan=="lainnya"){echo"selected";}?>>lainnya</option>
								            </select>
                                    </div>
						
									<div class="form-group">
                                            <label  for="id_perusahaan" class="col-form-label">Nama Perusahaan Anda</label>
                                            <select name="id_perusahaan" class="custom-select" id="id_alumni">
                                                <option selected="selected">Pilih Perusahaan</option>
												<?php
												$s="select * from `tb_perusahaan`";
												$q=getData($conn,$s);
												foreach($q as $d){							
													$id_perusahaan0=$d["id_perusahaan"];
													$nama_perusahaan=$d["nama_perusahaan"];
													echo"<option value='$id_perusahaan0' ";if($id_perusahaan0==$id_perusahaan){echo"selected";} echo">$id_perusahaan0 - $nama_perusahaan  </option>";
												}
											?>	
                                            </select>
                                	</div>

									<div class="form-group">
                                            <label for="jabatan" class="col-form-label">Posisi Pekerjaan</label>
                                            <input class="form-control" name="jabatan" type="text" id="jabatan" value="<?php echo $jabatan;?>" />
									</div>

									<div class="form-group">
                                            <label for="jumlah_karyawan" class="col-form-label">Jumlah Karyawan</label>
                                            <input class="form-control" name="jumlah_karyawan" type="text" id="jumlah_karyawanan" value="<?php echo $jumlah_karyawan;?>" />
									</div>
				
									<div class="form-group">
                                            <label for="lokasi_pekerjaan" class="col-form-label">Lokasi Pekerjaan</label>
                                            <input class="form-control" name="lokasi_pekerjaan" type="text" id="lokasi_pekerjaan" value="<?php echo $lokasi_pekerjaan;?>" />
									</div>

									<div class="form-group">
                                            <label  for="bidang_pekerjaan" class="col-form-label">Jenis Pekerjaan</label>
                                            <select name="bidang_pekerjaan" class="custom-select" id="bidang_pekerjaan">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Logistik"<?php if($bidang_pekerjaan=="Logistik"){echo"selected";}?>>Logistik</option>
												<option value="Jasa Pengantar Barang"<?php if($bidang_pekerjaan=="Jasa Pengantar Barang"){echo"selected";}?>>Jasa Pengantar Barang</option>
												<option value="Layanan Pelanggan"<?php if($bidang_pekerjaan=="Layanan Pelanggan"){echo"selected";}?>>Layanan Pelanggan</option>
												<option value="Telemarketik"<?php if($bidang_pekerjaan=="Telemarketik"){echo"selected";}?>>Telemarketik</option>
												<option value="Otomotif"<?php if($bidang_pekerjaan=="Otomotif"){echo"selected";}?>>Otomotif</option>
												<option value="Restoran"<?php if($bidang_pekerjaan=="Restoran"){echo"selected";}?>>Restoran</option>
												<option value="Traveler"<?php if($bidang_pekerjaan=="Traveler"){echo"selected";}?>>Traveler</option>
												<option value="Elektronika"<?php if($bidang_pekerjaan=="Elektronika"){echo"selected";}?>>Elektronika</option>
												<option value="Service Komputer"<?php if($bidang_pekerjaan=="Service Komputer"){echo"selected";}?>>Service Komputer</option>
												<option value="Service AC"<?php if($bidang_pekerjaan=="Service AC"){echo"selected";}?>>Service AC</option>
												<option value="Transportasi"<?php if($bidang_pekerjaan=="Transportasi"){echo"selected";}?>>Transportasi</option>
												<option value="lainnya"<?php if($bidang_pekerjaan=="lainnya"){echo"selected";}?>>lainnya</option>
								            </select>
                                    </div>

									<div class="form-group">
                                            <label  for="gaji" class="col-form-label">Gaji Yang Akan Diberikan</label>
                                            <select name="gaji" class="custom-select" id="gaji">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Rp. 2000.000"<?php if($gaji=="Rp. 2000.000"){echo"selected";}?>>Rp. 2.000.000</option>
												<option value="Rp. 2000.000 - Rp.3000.000"<?php if($gaji=="Rp. 2000.000 - Rp.3000.000"){echo"selected";}?>>Rp. 2000.000 - Rp.3000.000</option>
												<option value="Rp. 3000.000"<?php if($gaji=="Rp. 3000.000"){echo"selected";}?>>Rp. 3000.000</option>
												</select>
                                    </div>

									<div class="form-group">
                                            <label for="tunjangan" class="col-form-label">Tunjangan Yang Akan Diberikan</label>
                                            <input class="form-control" name="tunjangan" type="text" id="tunjangan" value="<?php echo $tunjangan;?>" />
									</div>
	
									<div class="form-group">
                                            <label  for="hari_kerja" class="col-form-label">Hari Kerja</label>
                                            <select name="hari_kerja" class="custom-select" id="hari_kerja">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Senin-Jumat"<?php if($hari_kerja=="Senin-Jumat"){echo"selected";}?>>Senin-Jumat</option>
												<option value="Senin-Sabtu"<?php if($hari_kerja=="Senin-Sabtu"){echo"selected";}?>>Senin-Sabtu</option>
												<option value="Senin-Minggu"<?php if($hari_kerja=="Senin-Minggu"){echo"selected";}?>>Senin-Minggu</option>
												</select>
                                    </div>

									<div class="form-group">
                                            <label  for="jam_kerja" class="col-form-label">Jam Kerja</label>
                                            <select name="jam_kerja" class="custom-select" id="jam_kerja">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Office Hour"<?php if($jam_kerja=="Office Hour"){echo"selected";}?>>Office Hour</option>
												<option value="Shifting"<?php if($jam_kerja=="Shifting"){echo"selected";}?>>Shifting</option>
												</select>
									</div>
									
									<div class="form-group">
                                            <label  for="jenis_kelamin" class="col-form-label"><b>Jenis Kelamin Yang Dibutuhkan</b></label>
                                            <select name="jenis_kelamin" class="custom-select" id="jenis_kelamin">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Laki-laki"<?php if($jenis_kelamin=="Laki-laki"){echo"selected";}?>>Laki-laki</option>
												<option value="Perempuan"<?php if($jenis_kelamin=="Perempuan"){echo"selected";}?>>Perempuan</option>
												<option value="Laki-laki Dan Perempuan"<?php if($jenis_kelamin=="Laki-laki Dan Perempuan"){echo"selected";}?>>Laki-laki Dan Perempuan</option>
												</select>
                                    </div>
		
									<div class="form-group">
                                            <label  for="usia" class="col-form-label"><b>Usia Pekerja Yang Dibutuhkan</b></label>
                                            <select name="usia" class="custom-select" id="usia">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="17 - 20 Tahun"<?php if($usia=="17 - 20 Tahun"){echo"selected";}?>>17 - 20 Tahun</option>
												<option value="20 - 30 Tahun"<?php if($usia=="20 - 30 Tahun"){echo"selected";}?>>20 - 30 Tahun</option>
												<option value="30 - 40 Tahun"<?php if($usia=="30 - 40 Tahun"){echo"selected";}?>>30 - 40 Tahun</option>
												<option value="40 - 50 Tahun"<?php if($usia=="40 - 50 Tahun"){echo"selected";}?>>40 - 50 Tahun</option>
											</select>
									</div>

									
									<div class="form-group">
                                            <label  for="pendidikan" class="col-form-label"><b>Kualifikasi Minimal Pendidikan Pekerja</b></label>
                                            <select name="pendidikan" class="custom-select" id="pendidikan">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="SMA / SMK / Mandrasah"<?php if($pendidikan=="17 - 20 Tahun"){echo"selected";}?>>SMA / SMK / Mandrasah</option>
												<option value="D-3"<?php if($pendidikan=="D-3"){echo"selected";}?>>D-3</option>
												<option value="S-1"<?php if($pendidikan=="S-1"){echo"selected";}?>>S-1</option>
												<option value="S-2"<?php if($pendidikan=="S-2"){echo"selected";}?>>S-2</option>
											</select>
									</div>
														
									<div class="form-group">
                                            <label  for="status_pernikahan" class="col-form-label">Status Pernikahan Calon Pekerja</label>
                                            <select name="status_pernikahan" class="custom-select" id="status_pernikahan">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Sudah Menikah"<?php if($status_pernikahan=="Sudah Menikah"){echo"selected";}?>>Sudah Menikah</option>
												<option value="Belum Menikah"<?php if($status_pernikahan=="Belum Menikah"){echo"selected";}?>>Belum Menikah</option>
												</select>
                                    </div>

									<div class="form-group">
                                            <label for="pengalaman" class="col-form-label">Pengalaman Yang Diperlukan</label>
                                            <input class="form-control form-control-lg mb-4" name="pengalaman" type="textarea" id="pengalaman" value="<?php echo $pengalaman;?>" />
									</div>
								

									<div class="form-group">
                                            <label  for="kemampuan_penunjang" class="col-form-label">Kemampuan Penunjang</label>
                                            <select name="kemampuan_penunjang" class="custom-select" id="kemampuan_penunjang">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Teknik Komputer"	<?php if($kemampuan_penunjang=="Teknik Komputer"){echo"selected";}?>>Teknik Komputer</option>
												<option value="Teknik Pendingin" <?php if($kemampuan_penunjang=="Teknik Pendingin"){echo"selected";}?>>Teknik Pendingin</option>
												<option value="Teknik Otomotif" <?php if($kemampuan_penunjang=="Teknik Otomotif"){echo"selected";}?>>Teknik Otomotif</option>
												<option value="Teknik Sepeda Motor" <?php if($kemampuan_penunjang=="Teknik Sepeda Motor"){echo"selected";}?>>Teknik Sepeda Motor</option>
												<option value="Operator Komputer" <?php if($kemampuan_penunjang=="Operator Komputer"){echo"selected";}?>>Operator Komputer</option>
												<option value="Desain Grafis" <?php if($kemampuan_penunjang=="Desain Grafis"){echo"selected";}?>>Desain Grafis</option>
												<option value="Tata Boga" <?php if($kemampuan_penunjang=="Tata Boga"){echo"selected";}?>>Tata Boga</option>
												<option value="Tata Busana" <?php if($kemampuan_penunjang=="Tata Busana"){echo"selected";}?>>Tata Busana</option>
												<option value="Tata Graha" <?php if($kemampuan_penunjang=="Tata Graha"){echo"selected";}?>>Tata Graha</option>
												<option value="Bahasa Jepang" <?php if($kemampuan_penunjang=="Bahasa Jepang"){echo"selected";}?>>Bahasa Jepang</option>
												<option value="Bahasa Inggris" <?php if($kemampuan_penunjang=="Bahasa Inggris"){echo"selected";}?>>Bahasa Inggris</option>
                                            </select>
                                    </div>
								
									<b class="text-muted mb-3 mt-4 d-block">Sertifikat BNSP</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio1" name="sertifikat_profesi" class="custom-control-input" value="Diutamakan" <?php if($sertifikat_profesi=="Diutamakan"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio1">Diutamakan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio2" name="sertifikat_profesi" class="custom-control-input" value="Tidak Diutamakan" <?php if($sertifikat_profesi=="Tidak Diutamakan"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio2">Tidak Diutamakan</label>
                                    </div>
								
									<div class="form-group">
											<label for="keterangan" class="col-form-label">Keterangan Tambahan</label>
											<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $keterangan;?></textarea>
									</div>

									<b class="text-muted mb-3 mt-4 d-block">Status Loowongan Pekerjaan</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio3" name="status" class="custom-control-input" value="Publish" <?php if($status=="Publish"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio3">Publish</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio4" name="status" class="custom-control-input" value="Hidden" <?php if($status=="Hidden"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio4">Hidden</label>
                                    		</div>

									<b class="text-muted mb-3 mt-4 d-block">Brosur Lowongan Pekerjaan</b>
									<div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">jpg,png,pdf</span>
											</div>
                                    <div class="custom-file">
                                    <input name="gambar" type="file" class="custom-file-input" id="gambar" value="<?php echo $gambar0;?>" />
                                            <label class="custom-file-label" for="gambar">Choose file</label>
											<a href='#' onclick='buka("loker/zoom.php?id=<?php echo $id_loker;?>")'><?php echo $gambar0;?></a>
                                			</div>
									</div>

									<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan">Simpan</button>
									<input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
									<input name="gambar0" type="hidden" id="gambar0" value="<?php echo $gambar0;?>" />
									<input name="id_loker" type="hidden" id="id_loker" value="<?php echo $id_loker;?>" />
									<input name="id_loker0" type="hidden" id="id_loker0" value="<?php echo $id_loker0;?>" />
									<a href="?mnu=loker"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
									</form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>			
					


<!-- Accordion -->
<a class="btn btn-primary mb-3" href="loker/pdf.php" role="button">PDF</a>
<a class="btn btn-info mb-3" href="loker/xls.php" role="button">Excel</a>
<a class="btn btn-warning mb-3" href="#" role="button" alt='PRINT' OnClick="PRINT()">print</a>
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Lisiting Data Lowongan Pekerjaan</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">    
										<?php  
										$sqlq="select distinct(id_perusahaan) from `$tbloker` order by `id_loker` desc";
										$jumq=getJum($conn,$sqlq);
												if($jumq <1){
													echo"<h1>Maaf data belum tersedia...</h1>";
													}								
											$arrq=getData($conn,$sqlq);
												foreach($arrq as $dq) {							
														$id_perusahaan=$dq["id_perusahaan"];
										?>
										<h3>Nama Perusahaan <?php echo getPerusahaan($conn,$id_perusahaan);?></h3>
										<div>
										<br />
<!-- Accordion -->
Data Lowongan Kerja: 
| <a href="loker/pdf.php"><img src='ypathicon/pdf.png' alt='PDF'></a> 
| <a href="loker/xls.php"><img src='ypathicon/xls.png' alt='XLS'></a> 
| <img src='ypathicon/print.png' alt='PRINT' OnClick="PRINT()"> |
<br>

<div class="main-content-inner">
    <div class="row">
		<!-- table primary start -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                        <div class="single-table">
                            <div class="table-responsive">
                                <table width="200%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
									<th width="2%"><center>No</center></td>
									<th width="5%"><center>Gambar</center></td>
									<th width="20%"><center>Tenaga Kerja</center></td>
									<th width="20%"><center>Kompensasi</center></td>
									<th width="20%"><center>Kualifikasi</center></td>
									<th width="15%"><center>Keterangan Tambahan</center></td>
									<th width="15%"><center>Menu</center></td>
								</tr>
								</thead>	
								<tbody>
								<?php  
								$sql="select * from `$tbloker` where id_perusahaan='$id_perusahaan' order by `id_loker` desc";
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
												<td><center>$no</center></td>
												
												<td><div align='center'>";
								echo"<a href='#' onclick='buka(\"loker/zoom.php?id=$id_loker\")'>
								<img src='$YPATH/$gambar' width='40' height='40' /></a></div>";
												echo"</td>
												<td valign='top'><b>$judul_loker</b>
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
												<br> Usia : <br><b>$usia</b>
												<br> Pendidikan : <br><b>$pendidikan</b>
												<br>Status Pernikahan : <br><b>$status_pernikahan</b> 
												<br>Pengalaman : <br><b>$pengalaman</b> 
												<br>Kemampuan Penunjang : <br><b>$kemampuan_penunjang</b> 
												<br>Sertifikasi Profesi : <br><b>$sertifikat_profesi</b></td>
												<td valign='top'>Status Loker : <br><b>$status</b>
												<br>Catatan : <br><b>$keterangan</b></td>

												<td align ='center'>
													<a href='?mnu=loker&pro=ubah&kode=$id_loker'><button type='button' class='btn btn-outline-primary mb-3' alt='ubah' i title='ubah loker $judul_loker'><span class=' ti-ruler-pencil'></i></span></button></a>
													<a href='?mnu=loker&pro=hapus&kode=$id_loker'><button type='button' class='btn btn-outline-danger mb-3' alt='hapus' i title='hapus loker $judul_loker'
													onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama pada data loker ?..\")'><span class=' ti-trash'></i></span></button></a></div></td>
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=loker'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=loker'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=loker'>Next »</a></span>";
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
</body>
<!-- Accordion -->
<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_loker=strip_tags($_POST["id_loker"]);
	$id_loker0=strip_tags($_POST["id_loker"]);
	$judul_loker=strip_tags($_POST["judul_loker"]);
	$id_perusahaan=strip_tags($_POST["id_perusahaan"]);
	$status_pekerjaan=($_POST["status_pekerjaan"]);
	$jabatan=strip_tags($_POST["jabatan"]);
	$jumlah_karyawan=strip_tags($_POST["jumlah_karyawan"]);
	$tanggal=date("Y-m-d");
	$lokasi_pekerjaan=strip_tags($_POST["lokasi_pekerjaan"]);
	$bidang_pekerjaan=strip_tags($_POST["bidang_pekerjaan"]);
	$gaji=strip_tags($_POST["gaji"]);
	$tunjangan=strip_tags($_POST["tunjangan"]);
	$hari_kerja=strip_tags($_POST["hari_kerja"]);
	$jam_kerja=strip_tags($_POST["jam_kerja"]);
	$jenis_kelamin=strip_tags($_POST["jenis_kelamin"]);
	$usia=strip_tags($_POST["usia"]);
	$pendidikan=strip_tags($_POST["pendidikan"]);
	$status_pernikahan=strip_tags($_POST["status_pernikahan"]);
	$pengalaman=($_POST["pengalaman"]);	
	$kemampuan_penunjang=($_POST["kemampuan_penunjang"]);
	$sertifikat_profesi=($_POST["sertifikat_profesi"]);
	$keterangan=($_POST["keterangan"]);
	$status=($_POST["status"]);
	$gambar0=strip_tags($_POST["gambar0"]);
	if ($_FILES["gambar"] != "") {
		@copy($_FILES["gambar"]["tmp_name"],"$YPATH/".$_FILES["gambar"]["name"]);
		$gambar=$_FILES["gambar"]["name"];
		} 
	else {$gambar=$gambar0;}
	if(strlen($gambar)<1){$gambar=$gambar0;}
	
if($pro=="simpan"){
echo $sql=" INSERT INTO `$tbloker` (
`id_loker`,
`judul_loker`,
`status_pekerjaan`,
`id_perusahaan`,
`jabatan` ,
`jumlah_karyawan`,
`tanggal`,
`lokasi_pekerjaan`,
`bidang_pekerjaan`,
`gaji`,
`tunjangan`,
`hari_kerja`,
`jam_kerja`,
`jenis_kelamin`,
`usia`,
`pendidikan`,
`status_pernikahan`,
`pengalaman`,`status`,
`kemampuan_penunjang`,
`sertifikat_profesi`,
`keterangan`,
`gambar` 
) VALUES (
'', 
'$judul_loker', 
'$status_pekerjaan', 
'$id_perusahaan',
'$jabatan',
'$jumlah_karyawan',
'$tanggal',
'$lokasi_pekerjaan',
'$bidang_pekerjaan',
'$gaji',
'$tunjangan',
'$hari_kerja',
'$jam_kerja',
'$jenis_kelamin',
'$usia',
'$pendidikan',
'$status_pernikahan',
'$pengalaman','$status',
'$kemampuan_penunjang',
'$sertifikat_profesi',
'$keterangan',
'$gambar'
)";
	
$simpan=process($conn,$sql);
	if($simpan) {echo "<script>alert('Data $id_loker berhasil disimpan !');document.location.href='?mnu=loker';</script>";}
		else{echo "<script>alert('Data $id_loker gagal disimpan...');document.location.href='?mnu=loker';</script>";}
	}
	else{
	$sql="update `$tbloker` set 
	`id_perusahaan`='$id_perusahaan',
	`judul_loker`='$judul_loker',
	`status_pekerjaan`='$status_pekerjaan',
	`jabatan`='$jabatan',
	`jumlah_karyawan`='$jumlah_karyawan',
	`lokasi_pekerjaan`='$lokasi_pekerjaan',
	`bidang_pekerjaan`='$bidang_pekerjaan',
	`gaji`='$gaji',`status`='$status',
	`tunjangan`='$tunjangan',
	`hari_kerja`='$hari_kerja',
	`jam_kerja`='$jam_kerja',
	`jenis_kelamin`='$jenis_kelamin',
	`usia`='$usia',
	`pendidikan`='$pendidikan',
	`status_pernikahan`='$status_pernikahan',
	`pengalaman`='$pengalaman',
	`kemampuan_penunjang`='$kemampuan_penunjang',
	`sertifikat_profesi`='$sertifikat_profesi',
	`keterangan`='$keterangan',
	`gambar`='$gambar'
	  where `id_loker`='$id_loker0'";
	$ubah=process($conn,$sql);
		if($ubah) {echo "<script>alert('Data $id_loker berhasil diubah !');document.location.href='?mnu=loker';</script>";}
		else{echo "<script>alert('Data $id_loker gagal diubah...');document.location.href='?mnu=loker';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_loker=$_GET["kode"];
$sql="delete from `$tbloker` where `id_loker`='$id_loker'";
$hapus=process($conn,$sql);
	if($hapus) {echo "<script>alert('Data $id_loker berhasil dihapus !');document.location.href='?mnu=loker';</script>";}
	else{echo"<script>alert('Data $id_loker gagal dihapus...');document.location.href='?mnu=loker';</script>";}
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



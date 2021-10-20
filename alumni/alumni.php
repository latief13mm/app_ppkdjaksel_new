<?php
        $kode_admin=$_SESSION["cid"];
        $sql="select * from `$tbadmin` where `kode_admin`='$kode_admin'";
        $d=getField($conn,$sql);
        $kode_admin=$d["kode_admin"];
		$username=$d["username"];
		if ($_SESSION["cstatus"]=="Super Administrator"  || $_SESSION["cstatus"]=="Aktif"){	
        ?>
<!-- page title area start -->
<div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Alumni</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Kelola Data Alumni</span></li>
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
				$tanggal_lahir=WKT(date("Y-m-d"));
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
        $("#tanggal_lahir").datepicker({
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
win=window.open('alumni/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, keterangan=0'); }
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
if($_GET["pro"]=="ubah"){
	$id_alumni=$_GET["kode"];
	$sql="select * from `$tbalumni` where `id_alumni`='$id_alumni'";
	$d=getField($conn,$sql);
				$idalumni=$d["id_alumni"];
				$nama_alumni=$d["nama_alumni"];
				$nik=$d["nik"];
				$tempat_lahir=$d["tempat_lahir"];
				$tanggal_lahir=$d["tanggal_lahir"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$alamat=$d["alamat"];
				$telephone=$d["telephone"];
				$email=$d["email"];
				$pendidikan=$d["pendidikan"];
				$keahlian=$d["keahlian"];
				$user_name=$d["user_name"];
				$password=$d["password"];
				$peminatan_kejuruan=$d["peminatan_kejuruan"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				$gambar=$d["gambar"];
				$gambar0=$d["gambar"];
				$pro="ubah";
}
?>
<!-- Accordion -->
<!-- <div id="accordion">
  <h3>Input Data Peserta Pelatihan</h3>
  <div>
-->  
<!-- Accordion -->
<body>
								<div class="main-content-inner">
								<div class="row">
								<button type="button" class="btn btn-success btn-xl  mt-3" data-toggle="modal" data-target="#exampleModalLong">Form Alumni</button>
								<div class="col-lg-12 mt-5">
								<!-- Modal -->
                                <div class="modal fade" id="exampleModalLong">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="header-title">Form Alumni</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
											<form action="" method="post" enctype="multipart/form-data">
									<h4 class="header-title">Input Data Alumni</h4>
									<p class="text-muted font-14 mb-4">Silahkan Masukkan Data Admin </p>


									<div class="form-group">
                                            <label for="nama_alumni" class="col-form-label">Nama Alumni</label>
                                            <input class="form-control" name="nama_alumni" type="text" id="nama_alumni" value="<?php echo $nama_alumni;?>" />
									</div>

									<div class="form-group">
                                            <label for="nik" class="col-form-label">NIK ( Sesuai KTP )</label>
                                            <input class="form-control" name="nik" type="text" id="nik" value="<?php echo $nik;?>" />
									</div>
									
									<div class="form-group">
                                            <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir" value="<?php echo $tempat_lahir;?>" />
									</div>
			
									<div class="form-group">
                                            <label for="tanggal_lahir" class="date">Tanggal Lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date" id="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" />
                                    </div>

								
									<b class="text-muted mb-3 mt-4 d-block">Jenis Kelamin</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio1" name="jenis_kelamin" class="custom-control-input" value="Laki-Laki" <?php if($jenis_kelamin=="Laki-Laki"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio2" name="jenis_kelamin" class="custom-control-input" value="Perempuan" <?php if($jenis_kelamin=="Perempuan"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                            </div>
											
									
									<div class="form-group">
                                            <label for="alamat" class="col-form-label">Alamat Rumah</label>
                                            <textarea name="alamat" class="form-control" id="alamat"><?php echo $alamat;?></textarea>
									</div>

									<div class="form-group">
                                            <label for="telephone" class="col-form-label">Telephone</label>
                                            <input class="form-control form-control-lg mb-4" name="telephone" type="text" id="telephone" value="<?php echo $telephone;?>" />
									</div>
							
									<div class="form-group">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input class="form-control form-control-lg mb-4" name="email" type="text" id="email" value="<?php echo $email;?>" />
									</div>

									<div class="form-group">
                                            <label  for="pendidikan" class="col-form-label">Pendidikan Terakhir</label>
                                            <select name="pendidikan" class="custom-select" id="pendidikan">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="SD / MI / Paket A / Sederajat"<?php if($pendidikan=="SD / MI / Paket A / Sederajat"){echo"selected";}?>>SD / MI / Paket A / Sederajat</option>
												<option value="SMP / Mts / Paket B / Sederajat"<?php if($pendidikan=="SMP / Mts / Paket B / Sederajat"){echo"selected";}?>>SMP / Mts / Paket B / Sederajat</option>
												<option value="SMA / MA / Paket C / Sederajat"<?php if($pendidikan=="SMA / MA / Paket C / Sederajat"){echo"selected";}?>>SMA / MA / Paket C / Sederajat</option>
												<option value="SMK / SMEA / STM / Sederajat"<?php if($pendidikan=="SMK / SMEA / STM / Sederajat"){echo"selected";}?>>SMK/SMEA/STM/Sederajat</option>
												<option value="D1 / Sederajat"<?php if($pendidikan=="D1 / Sederajat"){echo"selected";}?>>D1 / Sederajat</option>
												<option value="D2 / Sederajat"<?php if($pendidikan=="D2 / Sederajat"){echo"selected";}?>>D2 / Sederajat</option>
												<option value="D3 / Sederajat"<?php if($pendidikan=="D3 / Sederajat"){echo"selected";}?>>D3 / Sederajat</option>
												<option value="S1 / D4 / Sederajat"<?php if($pendidikan=="S1 / D4 / Sederajat"){echo"selected";}?>>S1 / D4 / Sederajat</option>
												<option value="S2"<?php if($pendidikan=="S2"){echo"selected";}?>>S2</option>
												<option value="Laiinya"<?php if($pendidikan=="Laiinya"){echo"selected";}?>>Lainnya</option>
                                            </select>
                                    </div>
		
									<div class="form-group">
                                            <label for="keahlian" class="col-form-label">Keahlian</label>
                                            <input class="form-control form-control-lg mb-4" name="keahlian" type="text" id="keahlian" value="<?php echo $keahlian;?>" />
									</div>
								
									<div class="form-group">
                                            <label for="user_name" class="col-form-label">Username</label>
                                            <input class="form-control form-control-lg mb-4" name="user_name" type="text" id="user_name" value="<?php echo $user_name;?>" />
									</div>

									<div class="form-group">
                                            <label for="password" class="col-form-label">Password</label>
                                            <input class="form-control form-control-lg mb-4" name="password" type="password"  id="password" value="<?php echo $password;?>" />
									</div>

									<div class="form-group">
                                            <label  for="peminatan_kejuruan" class="col-form-label">Peminatan Kejuruan</label>
                                            <select name="peminatan_kejuruan" class="custom-select" id="peminatan_kejuruan">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Teknik Sepedah Motor"	<?php if($peminatan_kejuruan=="Teknik Sepedah Motor"){echo"selected";}?>>Teknik Sepedah Motor</option>
												<option value="Teknik Pendingin / AC" <?php if($peminatan_kejuruan=="Teknik Pendingin / AC"){echo"selected";}?>>Teknik Pendingin / AC</option>
												<option value="Teknik Otomotif" <?php if($peminatan_kejuruan=="Teknik Otomotif"){echo"selected";}?>>Teknik Otomotif</option>
												<option value="Teknik Komputer" <?php if($peminatan_kejuruan=="Teknik Komputer"){echo"selected";}?>>Teknik Komputer</option>
												<option value="Tata Graha" <?php if($peminatan_kejuruan=="Tata Graha"){echo"selected";}?>>Tata Graha</option>
												<option value="Tata Busana" <?php if($peminatan_kejuruan=="Tata Busana"){echo"selected";}?>>Tata Busana</option>
												<option value="Tata Boga" <?php if($peminatan_kejuruan=="Tata Boga"){echo"selected";}?>>Tata Boga</option>
												<option value="Operator Komputer" <?php if($peminatan_kejuruan=="Operator Komputer"){echo"selected";}?>>Operator Komputer</option>
												<option value="Desain Grafis" <?php if($peminatan_kejuruan=="Desain Grafis"){echo"selected";}?>>Desain Grafis</option>
												<option value="Bahasa Jepang" <?php if($peminatan_kejuruan=="Bahasa Jepang"){echo"selected";}?>>Bahasa Jepang</option>
												<option value="Bahasa Inggris" <?php if($peminatan_kejuruan=="Bahasa Inggris"){echo"selected";}?>>Bahasa Inggris</option>
												<option value="MTU Tata Busana" <?php if($peminatan_kejuruan=="MTU Tata Busana"){echo"selected";}?>>MTU Tata Busana</option>
												<option value="MTU Tata Rias" <?php if($peminatan_kejuruan=="MTU Tata Rias"){echo"selected";}?>>MTU Tata Rias</option>
												<option value="MTU Teknik Komputer" <?php if($peminatan_kejuruan=="MTU Teknik Komputer"){echo"selected";}?>>MTU Teknik Komputer</option>
												<option value="MTU Teknik Sepeda Motor" <?php if($peminatan_kejuruan=="MTU Teknik Sepeda Motor"){echo"selected";}?>>MTU Teknik Sepeda Motor</option>
												<option value="MTU Teknik Las" <?php if($peminatan_kejuruan=="MTU Teknik Las"){echo"selected";}?>>MTU Teknik Las</option>
												<option value="MTU Tata Boga" <?php if($peminatan_kejuruan=="MTU Tata Boga"){echo"selected";}?>>MTU Tata Boga</option>
												<option value="MTU Desain Grafis" <?php if($peminatan_kejuruan=="MTU Desain Grafis"){echo"selected";}?>>MTU Desain Grafis</option>
												<option value="MTU Operator Komputer" <?php if($peminatan_kejuruan=="MTU Operator Komputer"){echo"selected";}?>>MTU Operator Komputer</option>
												<option value="MTU Teknik Pendingin/AC" <?php if($peminatan_kejuruan=="MTU Teknik Pendingin/AC"){echo"selected";}?>>MTU Teknik Pendingin/AC</option>
                                            </select>
                                    </div>
			
																									
									<b class="text-muted mb-3 mt-4 d-block">Status</b>
									<!-- Status
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio3" name="status" class="custom-control-input" value="Calon Peserta" <?php if($status=="Calon Peserta"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio3">Calon Peserta</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio4" name="status" class="custom-control-input" value="Peserta" <?php if($status=="Peserta"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio4">Peserta</label>
											</div> 
									-->
											<div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio5" name="status" class="custom-control-input" value="Alumni" <?php if($status=="Alumni"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio5">Alumni</label>
                                    </div> 
                                            
									<b class="text-muted mb-3 mt-4 d-block">Kategori</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio6" name="kategori" class="custom-control-input" value="Komitmen Terbaik" <?php if($jenis_kelamin=="Komitmen Terbaik"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio6">Komitmen Terbaik</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio7" name="kategori" class="custom-control-input" value="Peserta Berprestasi" <?php if($jenis_kelamin=="Peserta Berprestasi"){echo"checked";}?> />
                                                <label class="custom-control-label" for="customRadio7">Peserta Berprestasi</label>
                                            </div>
											<div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio8" name="kategori" class="custom-control-input" value="Peserta Standar" <?php if($jenis_kelamin=="Peserta Standar"){echo"checked";}?>/>
                                                <label class="custom-control-label" for="customRadio8">Peserta Standar</label>
                                    </div>
								
									<div class="form-group">
											<label for="keterangan" class="col-form-label">Alasan Memilih PPKD Untuk Pelatihan</label>
											<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $keterangan;?></textarea>
									</div>
								
									<b class="text-muted mb-3 mt-4 d-block">Foto Diri Pribadi</b>
									<div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">jpg,png</span>
                                            </div>
                                    <div class="custom-file">
                                    <input name="gambar" type="file" class="custom-file-input" id="gambar" value="<?php echo $gambar0;?>" />
                                            <label class="custom-file-label" for="gambar">Choose file</label>
											<a href='#' onclick='buka("alumni/zoom.php?id=<?php echo $id_alumni;?>")'><?php echo $gambar0;?></a>
                                        	</div>
									</div>

									<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan">Simpan</button>
									<input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
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
			</div>

<a class="btn btn-primary mb-3" href="alumni/pdf.php" role="button">PDF</a>
<a class="btn btn-info mb-3" href="alumni/xls.php" role="button">Excel</a>
<a class="btn btn-warning mb-3" href="#" role="button" alt='PRINT' OnClick="PRINT()">print</a>
<!-- Accordion -->
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Alumni</a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">      
										
										<?php  
										/*$sqlq="select distinct(status) from `$tbalumni` order by `id_alumni` desc";
										$jumq=getJum($conn,$sqlq);
												if($jumq <1){
													echo"<h1>Maaf data belum tersedia...</h1>";
													}								
											$arrq=getData($conn,$sqlq);
												foreach($arrq as $dq) {							
														$status=$dq["status"];
										*/
										?>     
										<!-- <h3>Status  <?php /* echo"$status";*/?></h3>  -->
										<br/>
										
<!-- Accordion -->

<div class="main-content-inner">
    <div class="row">
		<!-- table primary start -->
		<!-- id="dataTable" Kalo Mau Pake Search -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                        <div class="data-tables">
                            <div class="table-responsive">
                                <table id="dataTable" width="100%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
										<th width="2%"><center>No</center></td>
										<th width="5%"><center>Gambar</center></td>
										<th width="5%"><center>Nama Alumni</center></td>
										<th width="5%"><center>NIK</center></td>
										<th width="5%"><center>TTL</center></td>
										<th width="5%"><center>Jenis Kelamin</center></td>
										<th width="10%"><center>Alamat</center></td>
										<th width="5%"><center>telphone</center></td>
										<th width="5%"><center>pendidikan</center></td>
										<th width="5%"><center>keahlian</center></td>
										<th width="5%"><center>kejuruan</center></td>
										<th width="5%"><center>kategori</center></td>
										<th width="5%"><center>Aksi</center></td>
									</tr>
									</thead>	
									<tbody>
									<?php
									$sql="select * from `$tbalumni` order by `id_alumni` desc";
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
													$id_alumni=$d["id_alumni"];
													$nama_alumni=$d["nama_alumni"];
													$nik=$d["nik"];
													$tempat_lahir=$d["tempat_lahir"];
													$tanggal_lahir=WKT($d["tanggal_lahir"]);
													$jenis_kelamin=$d["jenis_kelamin"];
													$alamat=$d["alamat"];
													$telephone=$d["telephone"];
													$email=$d["email"];
													$pendidikan=$d["pendidikan"];
													$keahlian=$d["keahlian"];
													$user_name=$d["user_name"];
													$password=$d["password"];
													$peminatan_kejuruan=$d["peminatan_kejuruan"];
													$status=$d["status"];
													$kategori=$d["kategori"];
													$keterangan=$d["keterangan"];
													$gambar=$d["gambar"];
													$gambar0=$d["gambar"];
													$color="#dddddd";
														if($no %2==0){$color="#FFFFFF";}
									echo"<tr bgcolor='$color'>
													<td scope='row'>$no</td>
													<td><div align='center'>";
									echo"<a href='#' onclick='buka(\"alumni/zoom.php?id=$id_alumni\")'>
									<img src='$YPATH/$gambar' width='100' height='100' /></a></div>";
													echo"</td>
													<td valign='top'><b><a href='mailto:$email'>$nama_alumni</a></b></td>
													<td>$nik</td>
													<td>$tempat_lahir, $tanggal_lahir
													<td>$jenis_kelamin </td>
													<td>$alamat </td>
													<td>$telephone</td>
													<td>$pendidikan</td> 
													<td>$keahlian</td>
													<td>$peminatan_kejuruan</td>
													<td>$kategori</td>
													

													<td align ='center'>
													<a href='?mnu=alumni&pro=ubah&kode=$id_alumni'><button type='button' class='btn btn-outline-primary mb-3' alt='ubah' i title='ubah data $nama_alumni'><span class=' ti-ruler-pencil'></i></span></button></a>
													<a href='?mnu=alumni&pro=hapus&kode=$id_alumni'><button type='button' class='btn btn-outline-danger mb-3' alt='hapus' i title='hapus data $nama_alumni'
													onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama pada data alumni ?..\")'><span class=' ti-trash'></i></span></button></a></div></td>
													</tr>";	

													
												$no++;
												}//while
											}//if
											else{echo"<tr><td colspan='6'><blink>Maaf, Data alumni belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=alumni'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=alumni'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=alumni'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
echo "<p align=center>Total data <b>$jmldata</b> item</p>";
?>
<!-- Accordion -->
</div>
<?php //}?>
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
	$id_alumni=strip_tags($_POST["id_alumni"]);
	$id_alumni0=strip_tags($_POST["id_alumni"]);
	$nama_alumni=strip_tags($_POST["nama_alumni"]);
	$nik=strip_tags($_POST["nik"]);
	$tempat_lahir=strip_tags($_POST["tempat_lahir"]);
	$tanggal_lahir=(strip_tags($_POST["tanggal_lahir"]));
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

if($pro=="simpan"){
echo $sql=" INSERT INTO `$tbalumni` (
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
	if($simpan) {echo "<script>alert('Data $nama_alumni berhasil disimpan !');document.location.href='?mnu=alumni';</script>";}
		else{echo"<script>alert('Data $nama_alumni gagal disimpan...');document.location.href='?mnu=alumni';</script>";}
	}
	else{
	$sql="update `$tbalumni` set
	`nama_alumni`='$nama_alumni',
	`nik`='$nik',
	`tempat_lahir`='$tempat_lahir',
	`tanggal_lahir`='$tanggal_lahir',
	`jenis_kelamin`='$jenis_kelamin',
	`alamat`='$alamat',
	`telephone`='$telephone',
	`email`='$email',
	`pendidikan`='$pendidikan',
	`keahlian`='$keahlian',
	`user_name`='$user_name',
	`password`='$password',
	`peminatan_kejuruan`='$peminatan_kejuruan',
	`status`='$status',
	`kategori`='$kategori',
	`keterangan`='$keterangan',
	`gambar`='$gambar'
	  where `id_alumni`='$id_alumni0'";
	$ubah=process($conn,$sql);
		if($ubah) {echo "<script>alert('Data $nama_alumni berhasil diubah !');document.location.href='?mnu=alumni';</script>";}
		else{echo"<script>alert('Data $nama_alumni gagal diubah...');document.location.href='?mnu=alumni';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_alumni=$_GET["kode"];
$sql="delete from `$tbalumni` where `id_alumni`='$id_alumni'";
$hapus=process($conn,$sql);
	if($hapus) {echo "<script>alert('Data $nama_alumni berhasil dihapus !');document.location.href='?mnu=alumni';</script>";}
	else{echo"<script>alert('Data $nama_alumni gagal dihapus...');document.location.href='?mnu=alumni';</script>";}
}
?>

<?php } else {echo "    
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
<!-- error area end -->"; } ?>
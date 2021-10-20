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
                            <h4 class="page-title pull-left">Profil</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Profil Alumni</span></li>
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

				$id_alumni=$_SESSION["cid"];
				$sql="select * from `$tbalumni` where `id_alumni`='$id_alumni'";
				$d=getField($conn,$sql);
				$id_alumni=$d["id_alumni"];
				$id_alumni0=$d["id_alumni"];
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
				$keterangan=$d["keterangan"];
				$gambar0=$d["gambar"];
?>
<!-- Accordion -->
<!-- <div id="accordion">
<h3>Input Data Peserta Pelatihan</h3>
<div>

Accordion -->

<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
									<form action="" method="post" enctype="multipart/form-data">
									<h4 class="header-title">Update Data</h4>
									<p class="text-muted font-14 mb-4">Silahkan Masukkan Data Yang Sesuai</p>


									<div class="form-group">
                                            <label for="nama_alumni" class="col-form-label">Nama Alumni</label>
                                            <input class="form-control" name="nama_alumni" type="text" id="nama_alumni" value="<?php echo $nama_alumni;?>" required=""/>
									</div>

									<div class="form-group">
                                            <label for="nik" class="col-form-label">NIK ( Sesuai KTP )</label>
                                            <input class="form-control" name="nik" type="text" id="nik" value="<?php echo $nik;?>" required="" />
									</div>
									
									<div class="form-group">
                                            <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir" value="<?php echo $tempat_lahir;?>" required="" />
									</div>
			
									<div class="form-group">
                                            <label for="tanggal_lahir" class="date">Tanggal Lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date" id="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" required="" />
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
                                            <textarea class="form-control form-control-lg mb-4" name="alamat" type="textarea" id="alamat" required=""><?php echo $alamat;?></textarea>
									</div>

									<div class="form-group">
                                            <label for="telephone" class="col-form-label">Telephone</label>
                                            <input class="form-control form-control-lg mb-4" name="telephone" type="text" id="telephone" value="<?php echo $telephone;?>" required=""/>
									</div>
							
									<div class="form-group">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input class="form-control form-control-lg mb-4" name="email" type="text" id="email" value="<?php echo $email;?>" required=""/>
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
                                            <input class="form-control form-control-lg mb-4" name="keahlian" type="text" id="keahlian" value="<?php echo $keahlian;?>" required="" />
									</div>
								
									<div class="form-group">
                                            <label for="user_name" class="col-form-label">Username</label>
                                            <input class="form-control form-control-lg mb-4" name="user_name" type="text" id="user_name" value="<?php echo $user_name;?>" required="" />
									</div>

									<div class="form-group">
                                            <label for="password" class="col-form-label">Password</label>
                                            <input class="form-control form-control-lg mb-4" name="password" type="password" id="password" value="<?php echo $password;?>" required="" />
									</div>

									<div class="form-group">
                                            <label  for="peminatan_kejuruan" class="col-form-label">Peminatan Kejuruan</label>
                                            <select name="peminatan_kejuruan" class="custom-select" id="peminatan_kejuruan">
                                                <option selected="selected">Silahkan Pilih</option>
                                                <option value="Teknik Komputer"	<?php if($peminatan_kejuruan=="Teknik Komputer"){echo"selected";}?>>Teknik Komputer</option>
												<option value="Teknik Pendingin" <?php if($peminatan_kejuruan=="Teknik Pendingin"){echo"selected";}?>>Teknik Pendingin</option>
												<option value="Teknik Otomotif" <?php if($peminatan_kejuruan=="Teknik Otomotif"){echo"selected";}?>>Teknik Otomotif</option>
												<option value="Teknik Sepeda Motor" <?php if($peminatan_kejuruan=="Teknik Sepeda Motor"){echo"selected";}?>>Teknik Sepeda Motor</option>
												<option value="Operator Komputer" <?php if($peminatan_kejuruan=="Operator Komputer"){echo"selected";}?>>Operator Komputer</option>
												<option value="Desain Grafis" <?php if($peminatan_kejuruan=="Desain Grafis"){echo"selected";}?>>Desain Grafis</option>
												<option value="Tata Boga" <?php if($peminatan_kejuruan=="Tata Boga"){echo"selected";}?>>Tata Boga</option>
												<option value="Tata Busana" <?php if($peminatan_kejuruan=="Tata Busana"){echo"selected";}?>>Tata Busana</option>
												<option value="Tata Graha" <?php if($peminatan_kejuruan=="Tata Graha"){echo"selected";}?>>Tata Graha</option>
												<option value="Bahasa Jepang" <?php if($peminatan_kejuruan=="Bahasa Jepang"){echo"selected";}?>>Bahasa Jepang</option>
												<option value="Bahasa Inggris" <?php if($peminatan_kejuruan=="Bahasa Inggris"){echo"selected";}?>>Bahasa Inggris</option>
                                            </select>
                                    </div>
																						
											
									<div class="form-group">
                                            <label for="keterangan" class="col-form-label">Alasan Memilih PPKD Untuk Pelatihan</label>
                                            <input class="form-control form-control-lg mb-4" name="keterangan" type="textarea" id="keterangan" value="<?php echo $keterangan;?>" required="" />
									</div>
								
									<b class="text-muted mb-3 mt-4 d-block">Foto Diri Pribadi</b>
									<div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">jpg,png</span>
                                            </div>
                                    <div class="custom-file">
                                    <input name="gambar" type="file" class="custom-file-input" id="gambar" value="<?php echo $gambar0;?>"  />
                                            <label class="custom-file-label" for="gambar">Choose file</label>
											<a href='#' onclick='buka("alumni/zoom.php?id=<?php echo $id_alumni;?>")'><?php echo $gambar0;?></a></td>
                                        </div>
									</div>

									<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Update">Update</button>
									<a href="?mnu=alumniProfil"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

<!--
<tr valign="top">
        <td height="40">
        <td height="40">
        <td height="40" colspan="2">	<input name="Simpan" type="submit" id="Simpan" value="Update" />
        <a href="?mnu=aprofil"><input name="Batal" type="button" id="Batal" value="Batal" /></a>
        </td>
	</tr>
</table>
</form>
-->

<!-- Accordion -->
</div>

</div>

</body>
<!-- Accordion -->
<?php
if(isset($_POST["Simpan"])){
	$id_alumni=strip_tags($_POST["id_alumni"]);
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
	$keterangan=strip_tags($_POST["keterangan"]);

	$gambar=strip_tags($_POST["gambar"]);
	if ($_FILES["gambar"] != "") {
		@copy($_FILES["gambar"]["tmp_name"],"$YPATH/".$_FILES["gambar"]["name"]);
		$gambar=$_FILES["gambar"]["name"];
		}
	else {$gambar=$gambar0;}
	if(strlen($gambar)<1){$gambar=$gambar0;}

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
	`keterangan`='$keterangan',
	`gambar`='$gambar'
	where `id_alumni`='$id_alumni0'";
	$ubah=process($conn,$sql);
		if($ubah) {echo "<script>alert('Data $id_alumni berhasil diubah !');document.location.href='?mnu=alumniProfil';</script>";}
		else{echo"<script>alert('Data $id_alumni gagal diubah...');document.location.href='?mnu=alumniProfil';</script>";}
	}//else simpan

?>

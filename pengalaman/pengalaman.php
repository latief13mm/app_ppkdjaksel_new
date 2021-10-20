<?php
$kode_admin = $_SESSION["cid"];
$sql = "select * from `$tbadmin` where `kode_admin`='$kode_admin'";
$d = getField($conn, $sql);
$kode_admin = $d["kode_admin"];
$username = $d["username"];
if ($_SESSION["cstatus"]=="Super Administrator" || $_SESSION["cstatus"]=="Aktif"){	
?>
<!-- page title area start -->
<div class="page-title-area">
	<div class="row align-items-center">
		<div class="col-sm-6">
			<div class="breadcrumbs-area clearfix">
				<h4 class="page-title pull-left">Pengalaman</h4>
				<ul class="breadcrumbs pull-left">
					<li><a href="index.php">Home</a></li>
					<li><span>Lihat Pengalaman Alumni</span></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 clearfix">
			<div class="user-profile pull-right">
				<img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
				<h4 class="user-name dropdown-toggle" data-toggle="dropdown" for="username"><?php echo $username; ?><i class="fa fa-angle-down"></i></h4>
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

$tanggal = WKT(date("Y-m-d"));
$pro = "simpan";
$gambar0 = "avatar.jpg";
$status = "Aktif";
//$PATH="ypathcss";
?>
<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#date").datepicker({
			dateFormat: "dd MM yy",
			changeMonth: true,
			changeYear: true
		});
	});
</script>

<!-- Accordion -->
<link rel="stylesheet" href="js/jquery-ui.css">
<link rel="stylesheet" href="resources/demos/style.css">
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {
		$("#accordion").accordion({
			collapsible: true
		});
	});
</script>
<!-- Accordion -->

<script type="text/javascript">
	function PRINT() {
		win = window.open('pengalaman/print.php', 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, telepon=0');
	}
</script>
<script language="JavaScript">
	function buka(url) {
		window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');
	}
</script>

<?php
if ($_GET["pro"] == "ubah") {
	$id_pengalaman	= $_GET["kode"];
	$sql = "select * from `$tbpengalaman` where `id_pengalaman`='$id_pengalaman'";
	$d = getField($conn, $sql);
	$id_pengalaman = $d["id_pengalaman"];
	$id_pengalaman0 = $d["id_pengalaman"];
	$id_alumni = $d["id_alumni"];
	$pengalaman_kerja = $d["pengalaman_kerja"];
	$periode = $d["periode"];
	$catatan = $d["catatan"];
	$pro = "ubah";
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
		<div class="col-lg-12 col-ml-12">
			<div class="row">
				<!-- Textual inputs start -->
				<div class="col-12 mt-5">
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data">
								<h4 class="header-title">Input Data Pengalaman</h4>
								<p class="text-muted font-14 mb-4">Silahkan Masukkan Data Pengalaman </p>

								<div class="form-group">
									<label for="id_alumni" class="col-form-label">Nama Alumni</label>
									<select name="id_alumni" class="custom-select" id="id_alumni">
										<option selected="selected">Pilih Alumni</option>
										<?php
										$s = "select * from `tb_alumni`";
										$q = getData($conn, $s);
										foreach ($q as $d) {
											$id_alumni0 = $d["id_alumni"];
											$nama_alumni = $d["nama_alumni"];
											echo "<option value='$id_alumni0' ";
											if ($id_alumni0 == $id_alumni) {
												echo "selected";
											}
											echo ">$id_alumni0 - $nama_alumni  </option>";
										}
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="pengalaman_kerja" class="col-form-label">Pengalaman Kerja</label>
									<textarea name="pengalaman_kerja" class="form-control" id="pengalaman_kerja"><?php echo $pengalaman_kerja;?></textarea>
								</div>

								<div class="form-group">
									<label for="periode" class="col-form-label">Periode Kerja Disuatu Perusahaan</label>
									<input class="form-control" name="periode" type="text" id="periode" value="<?php echo $periode; ?>" />
								</div>

								<div class="form-group">
									<label for="catatan" class="col-form-label">Catatan Tambahan</label>
									<textarea name="catatan" class="form-control" id="catatan"><?php echo $catatan;?></textarea>
								</div>

								<button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Simpan">Simpan</button>
								<input name="pro" type="hidden" id="pro" value="<?php echo $pro; ?>" />
								<input name="gambar0" type="hidden" id="gambar0" value="<?php echo $gambar0; ?>" />
								<input name="id_pengalaman" type="hidden" id="id_pengalaman" value="<?php echo $id_pengalaman; ?>" />
								<input name="id_pengalaman0" type="hidden" id="id_pengalaman0" value="<?php echo $id_pengalaman0; ?>" />
								<a href="?mnu=pengalaman"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
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
								<a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Pengalaman</a>
							</div>
							<div id="accordion41" class="collapse show" data-parent="#accordion4">
								<div class="card-body">
									<?php
									$sqlq = "select distinct(id_alumni) from `$tbpengalaman` order by `id_pengalaman` desc";
									$jumq = getJum($conn, $sqlq);
									if ($jumq < 1) {
										echo "<h1>Maaf data belum tersedia...</h1>";
									}
									$arrq = getData($conn, $sqlq);
									foreach ($arrq as $dq) {
										$id_alumni = $dq["id_alumni"];
										?>
										<h3>Nama Alumni <?php echo getAlumni($conn, $id_alumni); ?></h3>
										<div>
										<br />
											<!-- Accordion -->
											Data pengalaman:
											| <a href="pengalaman/pdf.php"><img src='ypathicon/pdf.png' alt='PDF'></a>
											| <a href="pengalaman/xls.php"><img src='ypathicon/xls.png' alt='XLS'></a>
											| <a href="pengalaman/xml.php"><img src='ypathicon/xml.png' alt='XML'></a>
											| <img src='ypathicon/print.png' alt='PRINT' OnClick="PRINT()"> |
											<br>
											<div class="main-content-inner">
												<div class="row">
													<!-- table primary start -->
													<div class="col-lg-12 col-ml-12">
														<div class="card">
															<div class="card-body">
																<h4 class="header-title">Data Pengalaman</h4>
																<div class="single-table">
																	<div class="table-responsive">
																		<table class="table text-left">
																			<thead class="text-uppercase bg-primary">
																				<tr class="text-white">
																					<th scope="col">
																						<center>No</center>
																					</th>
																					<th scope="col">
																						<center>Pengalaman Alumni</center>
																					</th>
																					<th scope="col">
																						<center>Catatan</center>
																					</th>
																					<th scope="col">
																						<center>Menu</center>
																					</th>
																				</tr>
																				<?php
																				$sql = "select * from `$tbpengalaman` where id_alumni='$id_alumni' order by `id_pengalaman` desc";
																				$jum = getJum($conn, $sql);
																				if ($jum > 0) {
																					//--------------------------------------------------------------------------------------------
																					$batas   = 10;
																					$page = $_GET['page'];
																					if (empty($page)) {
																						$posawal  = 0;
																						$page = 1;
																					} else {
																						$posawal = ($page - 1) * $batas;
																					}

																					$sql2 = $sql . " LIMIT $posawal,$batas";
																					$no = $posawal + 1;
																					//--------------------------------------------------------------------------------------------									
																					$arr = getData($conn, $sql2);
																					foreach ($arr as $d) {
																						$id_pengalaman = $d["id_pengalaman"];
																						$id_pengalaman0 = $d["id_pengalaman"];
																						$id_alumni = getAlumni($conn, $d["id_alumni"]);
																						$pengalaman_kerja = $d["pengalaman_kerja"];
																						$periode = $d["periode"];
																						$catatan = $d["catatan"];
																						$color = "#dddddd";
																						if ($no % 2 == 0) {
																							$color = "#FFFFFF";
																						}
																						echo "<tr bgcolor='$color'>
																						<td scope='row'>$no</td>
																						<td valign='top'<b>$id_alumni</b>
																						<br>Pengalaman Kerja : $pengalaman_kerja
																						<br>Periode Kerja : $periode</td>
																						<td>$catatan</td>

																						<td align ='center'>
																						<a href='?mnu=pengalaman&pro=ubah&kode=$id_pengalaman'><button type='button' class='btn btn-rounded btn-primary mb-3' alt='ubah'><span class=' ti-ruler-pencil'></span></button></a>
																						<a href='?mnu=pengalaman&pro=hapus&kode=$id_pengalaman'><button type='button' class='btn btn-rounded btn-danger mb-3' alt='hapus'
																						onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama pada data pengalaman ?..\")'><span class=' ti-trash'></span></button></a></div></td>
																						</tr>";	

																																																																																																									
																						$no++;
																					} //while
																				} //if
																				else {
																					echo "<tr><td colspan='7'><blink>Maaf, Data pengalaman belum tersedia...</blink></td></tr>";
																				}
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
												if ($jmldata > 0) {
													if ($batas < 1) {
														$batas = 1;
													}
													$jmlhal  = ceil($jmldata / $batas);
													echo "<div class=paging>";
													if ($page > 1) {
														$prev = $page - 1;
														echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=pengalaman'>« Prev</a></span> ";
													} else {
														echo "<span class=disabled>« Prev</span> ";
													}

													// Tampilkan link page 1,2,3 ...
													for ($i = 1; $i <= $jmlhal; $i++)
														if ($i != $page) {
															echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=pengalaman'>$i</a> ";
														} else {
															echo " <span class=current>$i</span> ";
														}

													// Link kepage berikutnya (Next)
													if ($page < $jmlhal) {
														$next = $page + 1;
														echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=pengalaman'>Next »</a></span>";
													} else {
														echo "<span class=disabled>Next »</span>";
													}
													echo "</div>";
												} //if jmldata

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
						if (isset($_POST["Simpan"])) {
							$pro = strip_tags($_POST["pro"]);
							$id_pengalaman = strip_tags($_POST["id_pengalaman"]);
							$id_pengalaman0 = strip_tags($_POST["id_pengalaman0"]);
							$id_alumni = strip_tags($_POST["id_alumni"]);
							$pengalaman_kerja = strip_tags($_POST["pengalaman_kerja"]);
							$periode = strip_tags($_POST["periode"]);
							$catatan = strip_tags($_POST["catatan"]);

							if ($pro == "simpan") {
								$sql = " INSERT INTO `$tbpengalaman` (
							`id_pengalaman`,
							`id_alumni`,
							`pengalaman_kerja`,
							`periode`,
							`catatan` 
							) VALUES (
							'', 
							'$id_alumni',
							'$pengalaman_kerja', 
							'$periode',
							'$catatan'
							)";

								$simpan = process($conn, $sql);
								if ($simpan) {
									echo "<script>alert('Data $id_pengalaman berhasil disimpan !');document.location.href='?mnu=pengalaman';</script>";
								} else {
									echo "<script>alert('Data $id_pengalaman gagal disimpan...');document.location.href='?mnu=pengalaman';</script>";
								}
							} else {
								$sql = "UPDATE `tb_pengalaman` SET 
							`id_alumni` = '$id_alumni', 
							`pengalaman_kerja` = '$pengalaman_kerja', 
							`periode` = '$periode', 
							`catatan` = '$catatan' 
							WHERE `id_pengalaman` = '$id_pengalaman'";
								$ubah = process($conn, $sql);
								if ($ubah) {
									echo "<script>alert('Data $id_pengalaman berhasil diubah !');document.location.href='?mnu=pengalaman';</script>";
								} else {
									echo "<script>alert('Data $id_pengalaman gagal diubah...');document.location.href='?mnu=pengalaman';</script>";
								}
							} //else simpan
						}
						?>

						<?php
						if ($_GET["pro"] == "hapus") {
							$id_pengalaman	= $_GET["kode"];
							$sql = "delete from `$tbpengalaman` where `id_pengalaman`='$id_pengalaman'";
							$hapus = process($conn, $sql);
							if ($hapus) {
								echo "<script>alert('Data pengalaman $id_pengalaman	 berhasil dihapus !');document.location.href='?mnu=pengalaman';</script>";
							} else {
								echo "<script>alert('Data pengalaman $id_pengalaman	 gagal dihapus...');document.location.href='?mnu=pengalaman';</script>";
							}
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

<?php
$id_perusahaan = $_SESSION["cid"];
$sql = "select * from `$tbperusahaan` where `id_perusahaan`='$id_perusahaan'";
$d = getField($conn, $sql);
$id_perusahaan = $d["id_perusahaan"];
$nama_perusahaan = $d["nama_perusahaan"];
if ($_SESSION["cstatus"]=="Terverifikasi"){	
?>
<!-- page title area start -->
<div class="page-title-area">
	<div class="row align-items-center">
		<div class="col-sm-6">
			<div class="breadcrumbs-area clearfix">
				<h4 class="page-title pull-left">Lihat Alumni</h4>
				<ul class="breadcrumbs pull-left">
					<li><a href="index.php">Home</a></li>
					<li><span>Lihat Daftar Alumni</span></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 clearfix">
			<div class="user-profile pull-right">
				<img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
				<h4 class="user-name dropdown-toggle" data-toggle="dropdown" for="nama_perusahaan"><?php echo $nama_perusahaan; ?><i class="fa fa-angle-down"></i></h4>
				<div class="dropdown-menu">
				<a class="dropdown-item" href="index.php?mnu=inboxPerusahaanPilihan">Inbox</a>
				<a class="dropdown-item" href="index.php?mnu=logout">Log Out</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- page title area end -->

<?php
$tanggal_lahir = WKT(date("Y-m-d"));
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
		$("#tanggal_lahir").datepicker({
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
		win = window.open('alumni/print.php', 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, keterangan=0');
	}
</script>
<script language="JavaScript">
	function buka(url) {
		window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');
	}
</script>

<?php

$id_pengalaman	= $_SESSION["cid"];
$sql = "select * from `$tbpengalaman` where `id_pengalaman`='$id_pengalaman'";
$d = getField($conn, $sql);
$id_pengalaman = $d["id_pengalaman"];
$id_pengalaman0 = $d["id_pengalaman"];
$id_alumni = $d["id_alumni"];
$pengalaman_kerja = $d["pengalaman_kerja"];
$periode = $d["periode"];
$catatan = $d["catatan"];
?>


<div class="main-content-inner">
	<div class="row">
		<!-- Accordion -->
		<div class="col-lg-12 mt-5">
			<div class="card">
				<div class="card-body">
					<div id="accordion4" class="according accordion-s3 gradiant-bg">
						<div class="card">
							<div class="card-header">
								<a class="card-link" data-toggle="collapse" href="#accordion41">Disting Data Alumni</a>
							</div>
							<div id="accordion41" class="collapse show" data-parent="#accordion4">
								<div class="card-body">
										<div>
											<br />
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
																		<table id="dataTable" width="100%" border="0" class="table table-striped table-bordered table-hover">
																			<thead class="text-uppercase bg-primary">
																				<tr class="text-white">
																					<th width="2%">
																						<center>No</center>
																						</td>
																					<th width="10%">
																						<center>GAMBAR</center>
																						</td>
																					<th width="50%">
																						<center>DATA ALumni</center>
																						</td>
																					<th width="20%">
																						<center>Alasan Masuk Ke PPKD</center>
																						</td>
																					<th width="10%">
																						<center>AKSI</center>
																						</td>
																				</tr>
																			</thead>
																			<tbody>
																				<?php
																				$sql = "select * from `$tbalumni` where status='Alumni' order by `id_alumni` desc";
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
																						$id_alumni = $d["id_alumni"];
																						$nama_alumni = $d["nama_alumni"];
																						$nik = $d["nik"];
																						$tempat_lahir = $d["tempat_lahir"];
																						$tanggal_lahir = WKT($d["tanggal_lahir"]);
																						$jenis_kelamin = $d["jenis_kelamin"];
																						$alamat = $d["alamat"];
																						$telephone = $d["telephone"];
																						$email = $d["email"];
																						$pendidikan = $d["pendidikan"];
																						$keahlian = $d["keahlian"];
																						$user_name = $d["user_name"];
																						$password = $d["password"];
																						$peminatan_kejuruan = $d["peminatan_kejuruan"];
																						$status = $d["status"];
																						$kategori = $d["kategori"];
																						$keterangan = $d["keterangan"];
																						$gambar = $d["gambar"];
																						$gambar0 = $d["gambar"];
																						$color = "#dddddd";
																						if ($no % 2 == 0) {
																							$color = "#FFFFFF";
																						}
																						
																						echo "<tr bgcolor='$color'>
																						<td scope='row'>$no</td>
																						<td><div align='center'>";
																						echo "<a href='#' onclick='buka(\"alumni/zoom.php?id=$id_alumni\")'>
																						<img src='$YPATH/$gambar' width='100' height='100' /></a></div>";
																						echo "</td>
																						<td valign='top'><b><a href='mailto:$email'>$nama_alumni ($nik)</a></b>
																						<br>TTL : <b>$tempat_lahir, $tanggal_lahir</b>
																						<br>Jenis Kelamin : <b>$jenis_kelamin</b>
																						<br>Alamat : <b>$alamat</b> 
																						<br>No Telephone : <b>$telephone</b>
																						<br>Pendidikan : <b>$pendidikan</b> 
																						<br>Keahlian : <br><b>$keahlian</b> 
																						<br>Kejuruan : <b>$peminatan_kejuruan</b>
																						<br>Kategori Kelulusan Alumni : <br><b>$kategori</b>
																						<td valign='top'>$keterangan</td>

																						<td align ='left'>
																						<a href='?mnu=perusahaanPengalaman&id=$id_alumni'><button type='button' class='btn btn-rounded btn-success mb-3' alt='ubah'>Lihat Pengalaman</button></a>
																						</div></td>
																						</tr>";

																						$no++;
																					} //while
																				} //if
																				else {
																					echo "<tr><td colspan='6'><blink>Maaf, Data alumni belum tersedia...</blink></td></tr>";
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
													$jmldata = $jum;
													if ($jmldata > 0) {
														if ($batas < 1) {
															$batas = 1;
														}
														$jmlhal  = ceil($jmldata / $batas);
														echo "<div class=paging>";
														if ($page > 1) {
															$prev = $page - 1;
															echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=perusahaanAlumni'>« Prev</a></span> ";
														} else {
															echo "<span class=disabled>« Prev</span> ";
														}

														for ($i = 1; $i <= $jmlhal; $i++)
															if ($i != $page) {
																echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=perusahaanAlumni'>$i</a> ";
															} else {
																echo " <span class=current>$i</span> ";
															}

														if ($page < $jmlhal) {
															$next = $page + 1;
															echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=perusahaanAlumni'>Next »</a></span>";
														} else {
															echo "<span class=disabled>Next »</span>";
														}
														echo "</div>";
													} //if jmldata

													$jmldata = $jum;
													echo "<p align=center>Total data <b>$jmldata</b> item</p>";
													?>
									
											</div>
										</div>
									</div>
								</div>
							</div>
							</body>
							<?php } else if ($_SESSION["cstatus"] == "Menunggu Verifikasi") { ?>
							<!-- error area start -->
							<div class='error-area ptb--100 text-center'>
								<div class='container'>
									<div class='error-content'>
										<h2>403</h2>
										<p>Maaf Status Perusahaan Anda Belum Terverifikasi 
										<br>Harap Hubungin Pihak PPKD Untuk Verifikasi Akun
										<br>EMAIL : info@ppkdjakartaselatan.com, ppkd.jakartaselatan@gmail.com
										<br>Kantor: (021) 7980311/7940884 
										<br>Whatsapp Center: 081574268025<br/>
										<a href='index.php?mnu=home'>Kembali Ke Home</a>
									</div>
								</div>
							</div>
						<!-- error area end -->" 
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
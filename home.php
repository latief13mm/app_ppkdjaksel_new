
<?php if($_SESSION["cstatus"]=="Super Administrator" || $_SESSION["cstatus"]=="Aktif" ){?>

<?php
$kode_admin = $_SESSION["cid"];
$sql = "select * from `$tbadmin` where `kode_admin`='$kode_admin'";
$d = getField($conn, $sql);
$kode_admin = $d["kode_admin"];
$username = $d["username"];
?>
<!-- page title area start -->
<div class="page-title-area">
	<div class="row align-items-center">
		<div class="col-sm-6">
			<div class="breadcrumbs-area clearfix">
				<h4 class="page-title pull-left">Home</h4>
				<ul class="breadcrumbs pull-left">
					<li><a href="index.php">Home</a></li>
					<li><span>Beranda Administrator</span></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 clearfix">
			<div class="user-profile pull-right">
				<img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
				<h4 class="user-name dropdown-toggle" data-toggle="dropdown" for="username"><?php echo $username; ?><i class="fa fa-angle-down"></i></h4>
				<div class="dropdown-menu">
				<a class="dropdown-item" href="index.php?mnu=logout">Log Out</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="main-content-inner">
                 <!-- Welcome start -->
                 <div class="col-12 mt-5">
                         <div class="card">
                            <div class="card-body">
                                <h1 class="header-title" align="center">Selamat Datang Di Portal Administrator</h1>
                                        <p class="text-muted mb-3">Halaman Administrator hanya untuk mengecek data - data yang masuk ke dalam sistem 
                                            pemilihan dan penyaluran tenaga kerja untuk alumni PPKD Jakarta Selatan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                <!-- Welcome end -->
<!-- page title area end -->
                <!--  report area start -->
                         <div class="row">
                            <div class="col-md-6 mt-md-5 mb-3">
                            <?php
							$sql="select * from `$tbalumni` where status='Calon Peserta' order by `id_alumni` desc";
                            $jum=getJum($conn,$sql);
                            $jmldata = $jum;
							?>
                                  <div class="single-report mb-xs-30">
                                      <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                            <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Calon Peserta</h4>
                                            </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h2><?php echo $jmldata; ?> </h2>
                                        </div>
                                     </div>
                                    </div>
                                </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                            <?php
							$sql="select * from `$tbalumni` where status='Peserta' order by `id_alumni` desc";
                            $jum=getJum($conn,$sql);
                            $jmldata = $jum;
							?>
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-book"></i></div>
                                            <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Peserta Pelatihan</h4>
                                           </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h2><?php echo $jmldata; ?></h2>
                                           </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-6 mt-md-5 mb-3">
                        <?php
							$sql="select * from `$tbalumni` where status='Alumni' order by `id_alumni` desc";
                            $jum=getJum($conn,$sql);
                            $jmldata = $jum;
							?>
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Alumni Pelatihan</h4>
                                        </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?php echo $jmldata; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-5 mb-3">
                        <?php
							$sql="select * from `$tbperusahaan` order by `id_perusahaan` desc";
                            $jum=getJum($conn,$sql);
                            $jmldata = $jum;
							?>
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-industry"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Jumlah Perusahaan Terdaftar</h4>
                                        </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?php echo $jmldata; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-5 mb-3">
                        <?php
							$sql="select * from `$tbperusahaan` where status='Terverifikasi' order by `id_perusahaan` desc";
                            $jum=getJum($conn,$sql);
                            $jmldata = $jum;
							?>
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-unlock"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Perusahaan Terverifikasi</h4>
                                        </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?php echo $jmldata; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-5 mb-3">
                        <?php
							$sql="select * from `$tbperusahaan` where status='Menunggu Verifikasi' order by `id_perusahaan` desc";
                            $jum=getJum($conn,$sql);
                            $jmldata = $jum;
							?>
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-lock"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Perusahaan Menunggu Verifikasi </h4>
                                        </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?php echo $jmldata; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- report area end 
                <div class="row mt-5">
                    <!-- latest news area start 
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Info Terbaru</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    slatest news area end 
                    </div>-->
                    <!-- testimonial area end -->
                </div>
            </div>
        </div>

 <?php }  else if($_SESSION["cstatus"]=="Alumni" || $_SESSION["cstatus"]=="Calon Peserta" ||$_SESSION["cstatus"]=="Peserta" ){ ?>
    <?php
        $id_alumni=$_SESSION["cid"];
        $sql="select * from `$tbalumni` where `id_alumni`='$id_alumni'";
        $d=getField($conn,$sql);
        $id_alumni=$d["id_alumni"];
       	$nama_alumni=$d["nama_alumni"];
				$nik=$d["nik"];
				$tempat_lahir=$d["tempat_lahir"];
				$tanggal_lahir=WKT(($d["tanggal_lahir"]));
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
                $gambar0 = $d["gambar"];
?>
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Home</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Beranda Alumni</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown" for="nama_alumni"><?php echo $nama_alumni; ?><i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?mnu=inboxAlumniPilihan">Inbox</a>
				<a class="dropdown-item" href="index.php?mnu=logout">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-inner">
                <div class="row">
<?php
                $id_alumni=$_SESSION["cid"];
                $sql="select * from `$tbalumni` where `id_alumni`='$id_alumni'";
                $d=getField($conn,$sql);
                $id_alumni=$d["id_alumni"];
                $nama_alumni=$d["nama_alumni"];
				$nik=$d["nik"];
				$tempat_lahir=$d["tempat_lahir"];
				$tanggal_lahir=WKT(($d["tanggal_lahir"]));
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
                $gambar0 = $d["gambar"];
                ?>
                    <!-- Social Campain area start -->
                    <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                            <br><br>
                            <center><img class="profile-user-img img-responsive img-circle" <?php echo "<a href='#' onclick='buka(\"alumni/zoom.php?id=$id_alumni\")'>
                                <img src='$YPATH/$gambar0' width='150' height='168'/></center></a> ";?>
								<h2 class="title" align="center"><b>Foto Diri</b></h2>
								
                                <div class="card-body" align="left">
								<p class="card-text">
                                <tr>
                                <td><label for="user_name">User Name 
                                <td> : <td><b> <?php echo $user_name;?></b></td>
                                </label>
                                </tr>
                                </p>
								
                                <p class="card-text">
                                <tr>
                                <td><label for="nama_alumni">Nama 
                                <td> : <td><b> <?php echo $nama_alumni;?></b></td>
                                </label>
                                </tr>
                                </p>

                                <p class="card-text">
                                <tr>
                                <td><label for="nik">NIK KTP
                                <td> : <td><b> <?php echo $nik;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="tempat_lahir">Tempat Lahir
                                <td> : <td><b> <?php echo $tempat_lahir;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="jenis_kelamin">Jenis Kelamin
                                <td> : <td><b> <?php echo $jenis_kelamin;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="tanggal_lahir">Tanggal Lahir
                                <td> : <td><b> <?php echo $tanggal_lahir;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="pendidikan">Pendidikan
                                <td> : <td><b> <?php echo $pendidikan;?></b></td>
                                </label>
                                </tr>
                                </p>

                                <p class="card-text">
                                <tr>
                                <td><label for="telephone">Telephone
                                <td> : <td><b> <?php echo $telephone;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="email">Email
                                <td> : <td><b> <?php echo $email;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="alamat">Alamat
                                <td> : <td><b> <?php echo $alamat;?></b></td>
                                </label>
                                </tr>
                                </p>

                                <a href="?mnu=alumniProfil" class="btn btn-primary">Lihat Profil</a>
                                </div>
                            </div>
                        </div>
                    <!-- Social Campain area end -->
<!-- page title area end -->
                    <!-- seo fact area start -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-user"></i> Status User</div>
                                        </div>
										<button type="button" class="btn btn-secondary btn-lg btn-block"><h2><b><?php echo $status;?></h2></b></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-layout-accordion-list"></i>Peminatan Kejuruan</div>
                                        </div>
										<button type="button" class="btn btn-secondary btn-lg btn-block"><h2><b><?php echo $peminatan_kejuruan;?></h2></b></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-layout-tab"></i>Lowongan Kerja</div>
                                        </div>
										<center><a href="?mnu=alumniLoker" button type="button" class="btn btn-outline-secondary mb-3" >Klik Detail</a></button></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-volume"></i>Lamaran Saya</div>
                                        </div>
										<center><a href="?mnu=alumniPilihan" button type="button" class="btn btn-outline-secondary mb-3" >Klik Detail</a></button></center>
                                    </div>
                                </div>
                            </div>
                    <!-- Google Map -->
                    <div class="col-lg-12 mt-5 ">
                        <div class="card card-bordered">
                            <div class="card-body">
                                <h4 class="header-title" align="center">Google Map</h4>
                                <p align="center">Lokasi PPKD Jakarta Selatan</p>
                                <center><iframe src="https://www.google.com/maps/embed?pb=!4v1566206164194!6m8!1m7!1sv6c1XjBuy6hDxZbbnXrVJA!2m2!1d-6.271568809540684!2d106.8307484583522!3f51.67462649447728!4f-25.98982632328324!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
                            </div>
                        </div>
                    </div>
                    <!-- Google Map End -->
                    <!-- latest news area start 
                    <div class="col-md-12 mt-md-5 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Info Terbaru</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    latest news area end -->
                        </div>
                    </div>
                    <!-- seo fact area end -->

                </div>
            </div>
        </div>
        <!-- main content area end -->

<?php } else if($_SESSION["cstatus"]=="Terverifikasi" || $_SESSION["cstatus"]=="Menunggu Verifikasi" ){?>
<?php
$id_perusahaan = $_SESSION["cid"];
$sql = "select * from `$tbperusahaan` where `id_perusahaan`='$id_perusahaan'";
$d = getField($conn, $sql);
$id_perusahaan = $d["id_perusahaan"];
$nama_perusahaan = $d["nama_perusahaan"];
$status=$d["status"];
$email=$d["email"];
?>
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Home</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Beranda HRD Perusahaan</span></li>
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
 <div class="main-content-inner">
                <div class="row">
                                        <!-- seo fact area end -->
                                        <?php
                    $id_perusahaan = $_SESSION["cid"];
                    $sql = "select * from `$tbperusahaan` where `id_perusahaan`='$id_perusahaan'";
                    $d = getField($conn, $sql);
                    $id_perusahaan = $d["id_perusahaan"];
                    $id_perusahaan0 = $d["id_perusahaan"];
                    $nama_perusahaan = $d["nama_perusahaan"];
                    $alamat = $d["alamat"];
                    $website = $d["website"];
                    $email = $d["email"];
                    $telephone = $d["telephone"];
                    $user_name = $d["user_name"];
                    $password = $d["password"];
                    $status = $d["status"];
                    $skdp = $d["skdp"];
                    $wlk = $d["wlk"];
                    $keterangan = $d["keterangan"];
                    $gambar = $d["gambar"];
                    $gambar0 = $d["gambar"];
                    ?>
               <!-- Social Campain area start -->
               <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                            <br><br>
                            <center><img class="profile-user-img img-responsive img-circle" <?php echo "<a href='#' onclick='buka(\"perusahaan/zoom.php?id=$id_perusahaan\")'>
                                <img src='$YPATH/$gambar0' width='150' height='168'/></center></a> ";?>
								<h2 class="title" align="center"><b>Logo Perusahaan</b></h2>
								
								<div class="card-body" align="left">
								<p class="card-text">
                                <tr>
                                <td><label for="user_name">User Name 
                                <td> : <td><b> <?php echo $user_name;?></b></td>
                                </label>
                                </tr>
                                </p>
								
                                <p class="card-text">
                                <tr>
                                <td><label for="nama_perusahaan">Nama Perusahaan 
                                <td> : <td><b> <?php echo $nama_perusahaan;?></b></td>
                                </label>
                                </tr>
                                </p>

                                <p class="card-text">
                                <tr>
                                <td><label for="website">Website
                                <td> : <td><b> <?php echo $website;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="email">Email
                                <td> : <td><b> <?php echo $email;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="telephone">Telephone
                                <td> : <td><b> <?php echo $telephone;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="skdp">SKDP
                                <td> : <td><b> <?php echo $skdp;?></b></td>
                                </label>
                                </tr>
                                </p>

                                <p class="card-text">
                                <tr>
                                <td><label for="wlk">WLK
                                <td> : <td><b> <?php echo $skdp;?></b></td>
                                </label>
                                </tr>
                                </p>
								
								<p class="card-text">
                                <tr>
                                <td><label for="alamat">Alamat
                                <td> : <td><b> <?php echo $alamat;?></b></td>
                                </label>
                                </tr>
                                </p>
                                <a href="?mnu=profilPerusahaan" class="btn btn-primary">Lihat Profil</a>
                                </div>
                            </div>
                        </div>
                    <!-- Social Campain area end -->
                    <!-- seo fact area start -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
							<?php
							$id_perusahaan=$_SESSION["cid"];
							$sql="select * from `$tbpilihan`,`$tbloker` where  `$tbloker`.id_perusahaan='$id_perusahaan' and `$tbpilihan`.id_loker=`$tbloker`.id_loker and  `$tbpilihan`.status='Proses' order by `$tbpilihan`.`id_pilihan` desc";
							$jum=getJum($conn,$sql);
							$jmldata = $jum;
							?>
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-id-badge"></i><h6>Jumlah Pelamar</h6></div> 
                                        </div>
										<button type="button" class="btn btn-secondary btn-lg btn-block"><h2><b><?php echo $jmldata; ?></b></h2></button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            ?>
                            <div class="col-md-6 mt-md-5 mb-3">
                            <?php
							$id_perusahaan=$_SESSION["cid"];
							$sql="select * from `$tbloker` where id_perusahaan='$id_perusahaan' order by `id_loker` desc";
                            $jum=getJum($conn,$sql);
                            $jmldata = $jum;
                            ?>
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-layout-tab"></i><h6>Jumlah Lowongan Kerja<h6></div>
                                        </div>
										<button type="button" class="btn btn-secondary btn-lg btn-block"><h2><b><?php echo $jmldata; ?></b></h2></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="fa fa-building"></i><h6>Status Akun Perusahaan<h6></div>
                                        </div>
										<button type="button" class="btn btn-secondary btn-lg btn-block"><center><?php echo $status; ?></center></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-email"></i><h6>Email Perusahaan<h6></div>
                                        </div>
										<button type="button" class="btn btn-secondary btn-lg btn-block"><center><?php echo $email; ?></center></button>
                                    </div>
                                </div>
                            </div>
                    <!-- Map Google -->
                    <div class="col-lg-12 mt-5 ">
                        <div class="card card-bordered">
                            <div class="card-body">
                                <h4 class="header-title" align="center">Google Map</h4>
                                <p align="center">Lokasi PPKD Jakarta Selatan</p>
                                <center><iframe src="https://www.google.com/maps/embed?pb=!4v1566206164194!6m8!1m7!1sv6c1XjBuy6hDxZbbnXrVJA!2m2!1d-6.271568809540684!2d106.8307484583522!3f51.67462649447728!4f-25.98982632328324!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
                            </div>
                        </div>
                    </div>
                    <!-- Map Google End -->

					<!-- latest news area start 
                    <div class="col-md-12 mt-md-5 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Info Terbaru</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    latest news area end -->
                            
                            <!--
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Impressions</div>
                                            <canvas id="seolinechart3" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">New Users</div>
                                            <canvas id="seolinechart4" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->

 <?php } else{ ?>
 
 <div class="main-content-inner">
                      <!-- Welcome start -->
                      <div class="col-12 mt-5">
                         <div class="card">
                            <div class="card-body">
                                <h1 class="header-title" align="center">Selamat Datang Di Aplikasi Pemilihan Dan Penyaluran Tenaga Kerja PPKD Jakarta Selatan</h1>
                                        <p class="text-muted mb-3" align="justify">Aplikasi ini adalah sebuah projek skripsi, projek aplikasi ini bertujuan untuk mempermudah bagi para alumni yang sudah 
                                            lulus pelatihan DI PPKD Jakarta Selatan dalam mencari lowongan pekerjaan. Lowongan pekerjaan tersebut diposting langsung oleh pihak Perusahaan
                                            yang sudah bekerjasama dengan PPKD Jakarta selatan. Jadi informasi lowongan kerja tersebut diharapkan lebih akurat dan inshaallah dapat membantu 
                                            bagi teman-teman alumni PPKD Jakarta Selatan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                <!-- Welcome end -->
                  <!-- latest news area start -->
                     <div class="col-12 mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                    <div class="col-md-12">
                                    <center><img class="img-responsive" src="assets/images/blog/Admin.jpg" alt=""></center>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- latest news area end -->
                    <!-- latest news area start -->
                    <div class="col-12 mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                    <div class="col-md-12">
                                    <center><img class="img-responsive" src="assets/images/blog/alumni.jpg" alt=""></center>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- latest news area end -->
                    <!-- latest news area start -->
                    <div class="col-12 mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                    <div class="col-md-12">
                                    <center><img class="img-responsive" src="assets/images/blog/Pengguna Perusahaan.jpg" alt=""></center>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- latest news area end -->
 
 <?php } ?>
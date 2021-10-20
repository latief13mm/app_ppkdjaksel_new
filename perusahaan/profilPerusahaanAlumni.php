<?php
$id_alumni = $_SESSION["cid"];
$sql = "select * from `$tbalumni` where `id_alumni`='$id_alumni'";
$d = getField($conn, $sql);
$id_alumni = $d["id_alumni"];
$nama_alumni = $d["nama_alumni"];

	$id_loker=$_GET["id_loker"];
?>


<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Profil</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Profil Perusahaan</span></li>
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
<!-- page title area end -->

<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#waktu").datepicker({
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
        $("#accordion4").accordion4({
            collapsible: true
        });
    });
</script>
<!-- Accordion -->

<script type="text/javascript">
    function PRINT() {
        win = window.open('perusahaan/print.php', 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, password=0');
    }
</script>
<script language="JavaScript">
    function buka(url) {
        window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');
    }
</script>

<!-- Accordion -->
<!-- <div id="accordion">
  <h3>Input Data Perusahaan</h3>
  <div>
-->
<!-- Accordion -->

<?php
$id_perusahaan=$_GET["id"];
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
?>


<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="#">
                                <div class="card h-full">
                                    <div class="card-body" align="center">
                                        <h4 class="header-title mb-0">Logo Perusahaan</h4>
                                        <br />
                                        <?php
                                        echo "<a href='#' onclick='buka(\"perusahaan/zoom.php?id=$id_perusahaan\")'>
                                      <img src='$YPATH/$gambar0' align='center' width='150' height='168' />
                                      </a>
                                      ";
                                        ?>
                                    </div>
                                </div>
                            </form>


                            <div class="form-group">
                                <label for="nama_perusahaan" class="col-form-label">
                                    <h3><b>Nama Perusahaan</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $nama_perusahaan; ?></h5>
                                    </p>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="col-form-label">
                                    <h3><b>Alamat Perusahaan</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $alamat; ?></h5>
                                    </p>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="website" class="col-form-label">
                                    <h3><b>Website Perusahaan</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $website; ?></h5>
                                    </p>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-form-label">
                                    <h3><b>Email Perusahaan</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $email; ?></h5>
                                    </p>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="telephone" class="col-form-label">
                                    <h3><b>Telephone Perusahaan</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $telephone; ?></h5>
                                    </p>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="skdp" class="col-form-label">
                                    <h4><b>Nomor Surat Registrasi Keterangan Domisili Tenaga Perusahaan</b></h4>
                                    <p class=" ">
                                        <h5><?php echo $skdp; ?></h5>
                                    </p>
                                </label>
                            </div>


                            <div class="form-group">
                                <label for="wlk" class="col-form-label">
                                    <h3><b>Nomor Wajib Lapor Ketenagakerjaan</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $wlk; ?></h5>
                                    </p>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="keterangan" class="col-form-label">
                                    <h3><b>Keterangan Tambahan Dari Perusahaan</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $keterangan; ?></h5>
                                    </p>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-form-label">
                                    <h3><b>Status Akses Perusahaan Ke Sistem</b></h3>
                                    <p class=" ">
                                        <h5><?php echo $status; ?></h5>
                                    </p>
                                </label>
                            </div>
                            <a href='?mnu=alumniPilihan&id=<?php echo $id_loker; ?>'><input name="Loker" type="button" id="Loker" class="btn btn-primary mb-3" value="Lamar Pekerjaan" /></a>
                            <a href='?mnu=alumniLoker'><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Kembali" /></a>    
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
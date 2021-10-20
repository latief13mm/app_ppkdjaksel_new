<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Data Perusahaan</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Abdul Latief M.M <i class="fa fa-angle-down"></i></h4>
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
$skdp = $d["skdp"];
$wlk = $d["wlk"];
$keterangan = $d["keterangan"];
$gambar0 = $d["gambar"];
?>
<!-- Accordion -->
<!-- <div id="accordion">
  <h3>Input Data Perusahaan</h3>
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
                                <h4 class="header-title">Input Data Perusahaan</h4>
                                <p class="text-muted font-14 mb-4">Silahkan Masukkan Data Perusahaan </p>


                                <div class="form-group">
                                    <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                                    <input class="form-control" name="nama_perusahaan" type="text" id="nama_perusahaan" value="<?php echo $nama_perusahaan; ?>" required="" />
                                </div>

                                <div class="form-group">
                                    <label for="alamat" class="col-form-label">Alamat Perusahaan</label>
                                    <textarea class="form-control form-control-lg mb-4" name="alamat" id="alamat" required=""><?php echo $alamat; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="website" class="col-form-label">Website Perusahaan</label>
                                    <input class="form-control" name="website" type="text" id="website" value="<?php echo $website; ?>" required=""/>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email Perusahaan</label>
                                    <input class="form-control" name="email" type="text" id="email" value="<?php echo $email; ?>" required="" />
                                </div>

                                <div class="form-group">
                                    <label for="telephone" class="col-form-label">Telephone Perusahaan</label>
                                    <input class="form-control" name="telephone" type="text" id="telephone" value="<?php echo $telephone; ?>" required=""/>
                                </div>

                                <div class="form-group">
                                    <label for="user_name" class="col-form-label">Username</label>
                                    <input class="form-control" name="user_name" type="text" id="user_name" value="<?php echo $user_name; ?>" required="" />
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password</label>
                                    <input class="form-control" name="password" type="password" id="password" value="<?php echo $password; ?>" required="" />
                                </div>

                                <div class="form-group">
                                    <label for="skdp" class="col-form-label">Nomor Surat Registrasi Keterangan Domisili Tenaga Perusahaan</label>
                                    <input class="form-control" name="skdp" type="text" id="skdp" value="<?php echo $skdp; ?>" required="" />
                                </div>

                                <div class="form-group">
                                    <label for="wlk" class="col-form-label">Nomor Wajib Lapor Ketenagakerjaan</label>
                                    <input class="form-control" name="wlk" type="text" id="wlk" value="<?php echo $wlk; ?>" required="" />
                                </div>

                                <div class="form-group">
                                    <label for="keterangan" class="col-form-label">Keterangan Tambahan Dari Perusahaan</label>
                                    <textarea class="form-control form-control-lg mb-4" name="keterangan" id="keterangan" required=""><?php echo $keterangan; ?></textarea>
                                </div>

                                <b class="text-muted mb-3 mt-4 d-block">Logo Perusahaan</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">jpg,png,pdf</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="gambar" type="file" class="custom-file-input" id="gambar" value="<?php echo $gambar0; ?>" />
                                        <label class="custom-file-label" for="gambar">Choose file</label>
                                    </div>
                                </div>

                                <button type="submit" name="Simpan" id="Simpan" class="btn btn-primary mb-3" value="Update">Update</button>
                                <a href="?mnu=profilPerusahaan"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accordion -->

        <!-- Accordion -->
    </div>

</div>
</div>
</body>
<!-- Accordion -->
<?php
if (isset($_POST["Simpan"])) {
    $id_perusahaan = strip_tags($_POST["id_perusahaan"]);
    $nama_perusahaan = strip_tags($_POST["nama_perusahaan"]);
    $alamat = strip_tags($_POST["alamat"]);
    $website = strip_tags($_POST["website"]);
    $email = strip_tags($_POST["email"]);
    $telephone = strip_tags($_POST["telephone"]);
    $user_name = strip_tags($_POST["user_name"]);
    $password = strip_tags($_POST["password"]);
    $skdp = strip_tags($_POST["skdp"]);
    $wlk = strip_tags($_POST["wlk"]);
    $keterangan = strip_tags($_POST["keterangan"]);

    $gambar = strip_tags($_POST["gambar"]);
    if ($_FILES["gambar"] != "") {
        @copy($_FILES["gambar"]["tmp_name"], "$YPATH/" . $_FILES["gambar"]["name"]);
        $gambar = $_FILES["gambar"]["name"];
    } else {
        $gambar = $gambar0;
    }
    if (strlen($gambar) < 1) {
        $gambar = $gambar0;
    }


    $sql = "update `$tbperusahaan` set 
    `nama_perusahaan`='$nama_perusahaan',
    `alamat`='$alamat' ,
    `website`='$website',
    `email`='$email',
    `telephone`='$telephone',
    `user_name`='$user_name',
    `password`='$password' ,
    `skdp`='$skdp',
    `wlk`='$wlk',
    `keterangan`='$keterangan',
    `gambar`='$gambar'
    where `id_perusahaan`='$id_perusahaan0'";
    $ubah = process($conn, $sql);
    if ($ubah) {
        echo "<script>alert('Data $id_perusahaan berhasil diubah !');document.location.href='?mnu=profilPerusahaan';</script>";
    } else {
        echo "<script>alert('Data $id_perusahaan gagal diubah...');document.location.href='?mnu=profilPerusahaan';</script>";
    }
} //else simpan

?>
<?php
$id_perusahaan = $_SESSION["cid"];
$sql = "select * from `$tbperusahaan` where `id_perusahaan`='$id_perusahaan'";
$d = getField($conn, $sql);
$id_perusahaan = $d["id_perusahaan"];
$nama_perusahaan = $d["nama_perusahaan"];
$pesan="";
?>
<!-- page title area start -->
<div class="page-title-area">
	<div class="row align-items-center">
		<div class="col-sm-6">
			<div class="breadcrumbs-area clearfix">
				<h4 class="page-title pull-left">Inbox Perusahaan</h4>
				<ul class="breadcrumbs pull-left">
					<li><a href="index.php">Home</a></li>
					<li><span>Pesan Untuk Alumni</span></li>
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
$id_alumni=$_GET["id"];
 $nama_alumni=getAlumni($conn,$id_alumni); 		
?>

<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
									<form action="" method="post" enctype="multipart/form-data">
									<h4 class="header-title">Tulis Pesan Ke Alumni</h4>
									<p class="text-muted font-14 mb-4">Silahkan Tulis Pesan </p>

									<div class="form-group">
                                            <label for="tanggal" class="date">Tanggal<br>
                                            <?php echo WKT(date("Y-m-d"));?></label>
                                    </div>

									<div class="form-group">
                                            <label  for="id_alumni" class="col-form-label">Nama Alumni<br>
                                            <b><?php echo $nama_alumni;?></b>
                                            </label>
                                    </div>

									<div class="form-group">
                                            <label for="pesan" class="col-form-label">Pesan</label>
                                            <textarea class="form-control form-control-lg mb-4" name="pesan" type="textarea" id="pesan"><?php echo $pesan;?></textarea>
									</div>

								

									<div class="form-group">
                                            <label for="keterangan" class="col-form-label">Catatan Untuk Alumni</label>
                                            <textarea class="form-control form-control-lg mb-4" name="keterangan" type="textarea" id="keterangan" required=""></textarea>
									</div>


									<b class="text-muted mb-3 mt-4 d-block"></b>
									<button type="submit" name="Kirim" id="Simpan" class="btn btn-primary mb-3" value="Kirim">Kirim</button>
									<input name="id_alumni" type="hidden" id="id_alumni" value="<?php echo $id_alumni;?>" />
									<a href="?mnu=inboxPerusahaanPilihan&id=<?php echo $id_alumni;?>"><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Batal" /></a>
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
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Pesan Masuk</a>
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
                        <div class="single-table">
                            <div class="table-responsive">
                                <table width="200%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
									<th width="3%"><center>No</center></th>
										<th width="15%"><center>Waktu</center></th>
										<th width="10%"><center>Inbox</center></th>
										<th width="20%"><center>Pesan Dari Perusahaan</center></th>
										<th width="20%"><center>Catatan Dari Perusahaan</center></th>
										<th width="20%"><center>Balasan Untuk Perusahaan</center></th>
										<th width="30%"><center>Aksi</center></th>
									</tr>
									</thead>	
									<tbody>
									<?php  
									
		//$sql="INSERT INTO `tb_inbox` (`id_inbox`, `id_perusahaan`, `id_alumni`, `pesan`, `tanggal`, `jam`, `keterangan`, `status`) VALUES
									$id = $_GET['id'];
									$sql = "UPDATE $tbinbox SET status='Read' WHERE id_alumni='$id' and flag='Alumni'";
									$update=process($conn,$sql);

									$sql="select * from `$tbinbox` where id_alumni='$id_alumni' and id_perusahaan='$id_perusahaan' order by `id_inbox` desc";
									$jum=getJum($conn,$sql);
											if($jum > 0){
												$no=1;
												$arr=getData($conn,$sql);
												foreach($arr as $d) {							
													$id_inbox=$d["id_inbox"];
													$alumni=getAlumni($conn,$d["id_alumni"]);
													$tanggal=WKT($d["tanggal"]);
													$pesan=$d["pesan"];
													$balasan=$d["balasan"];
													$jam=$d["jam"];
													$id_perusahaan=$d["id_perusahaan"];
													$status=$d["status"];
													$keterangan=$d["keterangan"];
													$flag=$d["flag"];
													if($flag=="Alumni"){
														$flag=$alumni;
													}
													else{
														$flag=getPerusahaan($conn,$id_perusahaan);
													}
														$color="#dddddd";	
														if($no %2==0){$color="#FFFFFF";}
									echo"<tr bgcolor='$color'>
													<td>$no</td>
													<td><b> $tanggal <br> $jam</b> 
													<td><b><i> $flag </b></i></td>
													<td> $pesan </td>
													<td>$keterangan</td>
													<td> $balasan </td>

													<td align ='center'>
													<a href='?mnu=inboxPerusahaanPilihan&pro=hapus&id=$id_inbox&id_alumni=$id_alumni'><button type='button' class='btn btn-rounded btn-danger mb-3' alt='hapus'
													onClick='return confirm(\"Apakah Anda benar-benar akan menghapus Pesan pada data perusahaanPilihan ?..\")'>Hapus Pesan</button></a></div></td>
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
</div>
</div>
</div>
</div>

</body>

<?php
if(isset($_POST["Kirim"])){
	$tanggal=date("Y-m-d");
	$jam=date("H:i:s");
	$id_alumni=strip_tags($_POST["id_alumni"]);
	$pesan=strip_tags($_POST["pesan"]);
	$id_perusahaan=strip_tags($_SESSION["cid"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
 $sql="INSERT INTO `tb_inbox` (`id_inbox`, `id_perusahaan`, `id_alumni`, `pesan`, `tanggal`, `jam`, `keterangan`, `status`) VALUES
 ('', '$id_perusahaan','$id_alumni','$pesan', '$tanggal', '$jam', '$keterangan',  'UnRead')";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data Pesan berhasil dikirim !');document.location.href='?mnu=inboxPerusahaanPilihan&id=$id_alumni';</script>";}
		else{echo "<script>alert('Data Pesan gagal dikirim...');document.location.href='?mnu=inboxPerusahaanPilihan&id=$id_alumni';</script>";}

}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_inbox=$_GET["id"];
$id_alumni=$_GET["id_alumni"];

$sql="delete from `tb_inbox` where `id_inbox`='$id_inbox'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data Pesan berhasil dihapus !');document.location.href='?mnu=inboxPerusahaanPilihan&id=$id_alumni';</script>";}
else{echo"<script>alert('Data Pesan gagal dihapus...');document.location.href='?mnu=inboxPerusahaanPilihan&id=$id_alumni';</script>";}
}
?>

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
                            <h4 class="page-title pull-left">Lihat Perusahaan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Lihat Daftar Perusahaan</span></li>
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
        $("#waktu").datepicker({
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
win=window.open('perusahaan/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, password=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<div class="main-content-inner">
<div class="row">
                 
<!-- Accordion -->
<div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Status Terverifikasi </a>
									</div>
									<div id="accordion41" class="collapse show" data-parent="#accordion4">							 
										<div class="card-body">      
										<div>
										<br />
<!-- Accordion -->
Data perusahaan: 
| <a href="perusahaan/pdf.php"><img src='ypathicon/pdf.png' alt='PDF'></a> 
| <a href="perusahaan/xls.php"><img src='ypathicon/xls.png' alt='XLS'></a> 
| <a href="perusahaan/xml.php"><img src='ypathicon/xml.png' alt='XML'></a> 
| <img src='ypathicon/print.png' alt='PRINT' OnClick="PRINT()"> |
<br>

<div class="main-content-inner">
    <div class="row">
		<!-- table primary start -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                	 <h4 class="header-title">Data Perusahaan</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-left">
                                	<thead class="text-uppercase bg-primary">
									<tr class="text-white">
									<th scope="col"><center>No</center></th>
									<th scope="col"><center>Gambar</center></td>
									<th scope="col"><center>Data Perusahaan</center></th>
									<th scope="col"><center>Aksi</center></th>
								</tr>
								<?php  
								$sql="select * from `$tbperusahaan` where status='Terverifikasi' order by `id_perusahaan` desc";
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
												$id_perusahaan=$d["id_perusahaan"];
												$nama_perusahaan=strtoupper($d["nama_perusahaan"]);
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
													$color="#dddddd";	
													if($no %2==0){$color="#FFFFFF";}
												echo"<tr bgcolor='$color'>
												<td valign='top'>$no</td>
												
												<td><div align='center'>";
												echo"<a href='#' onclick='buka(\"perusahaan/zoom.php?id=$id_perusahaan\")'>
												<img src='$YPATH/$gambar' width='40' height='40' /></a></div>";
												echo"</td>
												<td scope='row'><b><a href='$website'>$nama_perusahaan</a></b>
												<br>Alamat: $alamat
												<br>Telp $telephone
												<br>SKDP: $skdp, WLK: $wlk, Cat: $keterangan</td>	
		
												<td align ='center'>
												<a href='?mnu=profilPerusahaan'><button type='button' class='btn btn-rounded btn-success mb-3' alt='ubah'>Detail Perusahaan</button></a>
												</div></td>
												</tr>";
											
											$no++;
											}//while
										}//if
										else{echo"<tr><td colspan='7'><blink>Maaf, Data perusahaan belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=alumniPerusahaan'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=alumniPerusahaan'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=alumniPerusahaan'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>
<!-- Accordion -->
</div>

</div>
</div>
</div>
</div>
</body>
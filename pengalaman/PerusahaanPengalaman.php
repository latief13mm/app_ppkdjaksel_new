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
$id_perusahaan = $_SESSION["cid"];
$sql = "select * from `$tbperusahaan` where `id_perusahaan`='$id_perusahaan'";
$d = getField($conn, $sql);
$id_perusahaan = $d["id_perusahaan"];
$nama_perusahaan = $d["nama_perusahaan"];
?>

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Pengalaman Alumni</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Lihat Pengalaman Alumni</span></li>
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
        $id_alumni=$_GET["id"];
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
<!-- Accordion -->
<!--<div id="accordion">
  <h3>Input Data Peserta Pelatihan</h3>
  <div>
 --> 
<!-- Accordion -->
                   <div class="main-content-inner">
                      <div class="row">
                           <!-- Textual inputs start -->
                                  <div class="col-xl-12 col-lg-8 mt-5">
                                      <div class="card">
                                          <div class="card-body">

                                          <form action="#">
                                              <div class="card h-full">
                                                  <div class="card-body" align="center">
                                                      <h4 class="header-title mb-0">FOTO DIRI</h4>
                                                      <br/>
                                                      <?php
                                                      echo "<a href='#' onclick='buka(\"alumni/zoom.php?id=$id_alumni\")'>
                                                      <img src='$YPATH/$gambar0' align='center' width='150' height='168' />
                                                      </a>
                                                      ";
                                                      ?>
                                                    </div>
                                               </div>
                                             </form>
                                           

                                          <div class="form-group">
                                                  <label for="nama_alumni" class="col-form-label"><h3><b>Nama Alumni</b></h3>
                                                  <p class=" "><h5><?php echo $nama_alumni;?></h5></p></label>                         
                                          </div>
                                          
                                          <div class="form-group">
                                                  <label for="nik" class="col-form-label"><h3><b>NIK ( Sesuai KTP )</b></h3>
                                                  <p class=" "><h5><?php echo $nik;?></h5></p></label>
                                          </div>
                                          
                                          <div class="form-group">
                                                  <label for="tempat_lahir" class="col-form-label"><h3><b>Tempat Lahir</b></h3>
                                                  <p class=" "><h5><?php echo $tempat_lahir;?></h5></p></label>
                                          </div>
                              
                                          <div class="form-group">
                                                  <label for="tanggal_lahir" class="date"><h3><b>Tanggal Lahir</b></h3>
                                                  <p class=" "><h5><?php echo $tanggal_lahir;?></h5></p></label>
                                          </div>

                      
                                          <div class="form-group">
                                                  <label for="jenis_kelamin" class="col-form-label"><h3><b>Jenis Kelamin</b></h3>
                                                  <p class=" "><h5><?php echo $jenis_kelamin;?></h5></p></label>
                                          </div>
                                            										
                                          <div class="form-group">
                                                 <label for="alamat" class="col-form-label"><h3><b>Alamat Rumah</b></h3> 
                                                  <p class=" "><h5><?php echo $alamat;?></h5></p></label>
                                          </div>
                                            										
									                        <div class="form-group">
                                                 <label for="telephone" class="col-form-label"><h3><b>Telephone</b></h3>
                                                  <p class=" "><h5><?php echo $telephone;?></h5></p></label>
                                          </div>  

                                          <div class="form-group">
                                                 <label for="email" class="col-form-label"><h3><b>Email</b></h3>
                                                  <p class=" "><h5><?php echo $email;?></h5></p></label>
                                          </div>  
                                        
                                          <div class="form-group">
                                                 <label for="pendidikan" class="col-form-label"><h3><b>Pendidikan</b></h3>
                                                  <p class=" "><h5><?php echo $pendidikan;?></h5></p></label>
                                          </div>  

                                          <div class="form-group">
                                                 <label for="keahlian" class="col-form-label"><h3><b>Keahlian</b></h3>
                                                  <p class=" "><h5><?php echo $keahlian;?></h5></p></label>
                                          </div>  

                                                                           
                                          <div class="form-group">
                                                 <label for="peminatan_kejuruan" class="col-form-label"><h3><b>Peminatan Kejuruan</b></h3>
                                                  <p class=" "><h5><?php echo $peminatan_kejuruan;?></h5></p></label>
                                          </div>  

                                          <div class="form-group">
                                                 <label for="status" class="col-form-label"><h3><b>Status User</b></h3>
                                                  <p class=" "><h5><?php echo $status;?></h5></p></label>
                                          </div>                               		
																				
                                     
                                          <div class="form-group">
                                                 <label for="keterangan" class="col-form-label"><h3><b>Alasan Mememilih PPKD Untuk Pelatihan</b></h3>
                                                  <p class=" "><h5><?php echo $keterangan;?></h5></p></label>
                                          </div>                               		                           
                                          <a href='?mnu=inboxPerusahaanPilihan&id=<?php echo $id_alumni;?>'><input name="Loker" type="button" id="Loker" class="btn btn-primary mb-3" value="Apply Alumni" /></a>
                                          <a href='?mnu=perusahaanAlumni'><input name="Batal" type="button" id="Batal" class="btn btn-danger mb-3" value="Kembali" /></a>    
                                       </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                   

<div class="main-content-inner">
    <div class="row">
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Pengalaman Alumni</a>
                                </div>
                                <div id="accordion41" class="collapse show" data-parent="#accordion4">							 
                                <div class="card-body">                                       
								
		<!-- table primary start -->
		<div class="col-lg-12 col-ml-12">
            <div class="card">
                <div class="card-body">
                        <div class="single-table">
                            <div class="table-responsive">
                                <table width="100%" border="0" class="table table-striped table-bordered table-hover">
                                	<thead class="text-uppercase bg-primary">
                                  <tr class="text-white">
                                  <th width="3%"><center>No</center></th>
                                  <th width="30%"><center>Pengalaman</center></th>
                                  <th width="30%"><center>Catatan</center></th>
                                  <th width="10%"><center>Ijazah</center></th>
                                  <th width="10%"><center>Sertifikat</center></th>
                                  <th width="10%"><center>Sertifikat BNSP</center></th>
										              </tr>
                                  <?php  
                                  $sql="select * from `$tbpengalaman` where id_alumni='$id_alumni' order by `id_pengalaman` desc";
                                  $jum=getJum($conn,$sql);
                                  $no=1;
                                      if($jum > 0){
                                            $arr=getData($conn,$sql);
                                          foreach($arr as $d) {							
                                          $id_pengalaman=$d["id_pengalaman"];
                                          $id_pengalaman0=$d["id_pengalaman"];
                                          $id_alumni=getAlumni($conn,$d["id_alumni"]);
                                          $pengalaman_kerja=$d["pengalaman_kerja"];
                                          $periode=$d["periode"];
                                          $catatan=$d["catatan"];
                                          $ijazah=$d["ijazah"];
                                          $sertifikat=$d["sertifikat"];
                                          $sertifikat_bnsp=$d["sertifikat_bnsp"];
                                          $color="#dddddd";	
                                          if($no %2==0){$color="#FFFFFF";}
                                          echo"<tr bgcolor='$color'>
                                          <td scope='row'>$no</td>
                                          <td><b>$id_alumni</b>
                                          <br>Pengalaman Kerja : 
                                          <br><b>$pengalaman_kerja</b>
                                          <br>Periode Kerja : 
                                          <br><b>$periode</b></td>
                                          <td>$catatan</td>

                                          <td><div align='right'>";
                                          echo"<a href='#' onclick='buka(\"pengalaman/zoom.php?id=$id_pengalaman\")'>
                                          <img src='$YPATH/$ijazah' width='100' height='100' /></a></div>";
                                                  echo"</td>
                                                <td><div align='right'>";
                                          echo"<a href='#' onclick='buka(\"pengalaman/zoom1.php?id=$id_pengalaman\")'>
                                          <img src='$YPATH/$sertifikat' width='100' height='100' /></a></div>";
                                                  echo"</td>
                        
                                                <td><div align='right'>";
                                          echo"<a href='#' onclick='buka(\"pengalaman/zoom2.php?id=$id_pengalaman\")'>
                                          <img src='$YPATH/$sertifikat_bnsp' width='100' height='100' /></a></div>";
                                                  echo"</td>
                                          </tr>";	

                                        $no++;
                                        }//while
                                      }//if
                                      else{echo"<tr><td colspan='7'><blink>Maaf, Data pengalaman belum tersedia...</blink></td></tr>";}
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
    </div>


<div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!--
                        <div class="header-tittle">
                        <p class="text-secondary">PUSAT PELATIHAN KERJA DAERAH JAKARTA SELATAN</p>
                        </div>
                        -->
                        <?php if($_SESSION["cstatus"]=="Administrator"){?>

                        <div class="search-box pull-left">
                            <form action="" method="keyword">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                            </form>
                        </div>
                        <?php
                        }
                        ?>

                        <?php if($_SESSION["cstatus"]=="Alumni" || $_SESSION["cstatus"]=="Calon Peserta" || $_SESSION["cstatus"]=="Peserta"){?>
                        
                        <div class="search-box pull-left">
                            <form action="" method="keyword">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                            </form>
                        </div>
                        <?php
                        }
                        ?>

                        <?php if($_SESSION["cstatus"]=="Perusahaan" || $_SESSION["cstatus"]=="Terverifikasi" || $_SESSION["cstatus"]=="Menunggu Verifikasi" ){?>
                        
                        <div class="search-box pull-left">
                            <form action="" method="keyword">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                            </form>
                        </div>
                        <?php
                        }
                        ?>
                         
      
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <!-- li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>-->
							<li class="dropdown">

							<?php if($_SESSION["cstatus"]=="Alumni" || $_SESSION["cstatus"]=="Calon Peserta" || $_SESSION["cstatus"]=="Peserta"){	
							$id_alumni=$_SESSION["cid"];
							$sql="select * from `$tbpilihan` where id_alumni='$id_alumni' and not status='$status' order by `id_pilihan` desc";
							$jum=getJum($conn,$sql);
							?>
                               <i class="ti-bell dropdown-toggle" data-toggle="dropdown"> <span><?php echo $jum;?></span></i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have <?php echo $jum;?> new notifications</span>
                                    <div class="nofity-list">
									<?php
									$arr=getData($conn,$sql);
											foreach($arr as $d) {							
													$id_pilihan=$d["id_pilihan"];
													$tanggal=WKT($d["tanggal"]);
													$IDA=getAlumni($conn,$d["id_alumni"]);
													$pesan=$d["pesan"];
													$loker=getLoker($conn,$d["id_loker"]);
													$id_loker=$d["id_loker"];
													$status=$d["status"];
													$balasan=$d["balasan"];
                                                    $keterangan=$d["keterangan"];
                                                    
													$class="<i class='ti-comments-smiley  btn-danger'></i>";
													if($status=="Proses"){
														$class="<i class='ti-comments-smiley  btn-primary'></i>";
													}
													else if($status=="Diterima"){
														$class="<i class='ti-comments-smiley btn-info'></i>";
													}
													?>
									
                                        <a href="?mnu=alumniPilihan&id=<?php echo $id_loker;?>" class="notify-item">
                                           <div class="notify-thumb"><?php echo $class;?></div>
                                            <div class="notify-text">
                                                <p><?php echo $pesan;?></p>
                                                <span><?php echo $status;?></span>
                                            </div>
                                        </a>
                                      <?php
										}
										?>
                                    </div>
                                </div>

							<?php
                            }
                            ?>

                        <?php if($_SESSION["cstatus"]=="Perusahaan" || $_SESSION["cstatus"]=="Terverifikasi" || $_SESSION["cstatus"]=="Menunggu Verifikasi" ){	
							$id_perusahaan=$_SESSION["cid"];
							$sql="select * from `$tbpilihan`,`$tbloker` where  `$tbloker`.id_perusahaan='$id_perusahaan' and `$tbpilihan`.id_loker=`$tbloker`.id_loker and  `$tbpilihan`.status='Proses' order by `$tbpilihan`.`id_pilihan` desc";
							$jum=getJum($conn,$sql);
							?>
                               <i class="ti-bell dropdown-toggle" data-toggle="dropdown"> <span><?php echo $jum;?></span></i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have <?php echo $jum;?> new notifications</span>
                                    <div class="nofity-list">
									<?php
									
                                    $arr=getData($conn,$sql);
											foreach($arr as $d) {							
													$id_pilihan=$d["id_pilihan"];
													$tanggal=WKT($d["tanggal"]);
													$id_alumni=getAlumni($conn,$d["id_alumni"]);
													$pesan=$d["pesan"];
													$id_loker=getLoker($conn,$d["id_loker"]);
													$status=$d["status"];
													$balasan=$d["balasan"];
													
													$class="<i class='ti-comments-smiley  btn-danger'></i>";
													if($status=="Proses"){
														$class="<i class='ti-comments-smiley  btn-primary'></i>";
													}
													else if($status=="Diterima"){
														$class="<i class='ti-comments-smiley btn-info'></i>";
													}
                                                    ?>
                                                    
                                        <a href="?mnu=perusahaanPilihan&id=<?php echo $id_loker;?>" class="notify-item">
                                           <div class="notify-thumb"><?php echo $class;?></div>
                                            <div class="notify-text">
                                                <p><?php echo $pesan;?></p>
                                                <span><?php echo $status;?></span>
                                            </div>
                                        </a>
                                      <?php
										}
										?>
                                    </div>
                                </div>

							<?php
                            }
                            ?>
							</li>	
							
							<!-- Template Bawaan
							  <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                        -->
				
                            <li class="dropdown">
							  <?php
							if($_SESSION["cstatus"]=="Alumni" || $_SESSION["cstatus"]=="Calon Peserta" || $_SESSION["cstatus"]=="Peserta"){	
							$id_alumni=$_SESSION["cid"];
							//	$sql="select * from `$tbinbox`,`$tbperusahaan` where  `$tbperusahaan`.id_perusahaan='$id_perusahaan' and `$tbinbox`.id_perusahaan=`$tbperusahaan`.id_perusahaan order by `$tbinbox`.`id_perusahaan` desc";
                            $id = $_GET['id'];
                            // $sql = "UPDATE $tbinbox SET status='Read' WHERE id_perusahaan='$id'";
                            // $update=process($conn,$sql);
                            
                            $sql="select * from `$tbinbox` where id_alumni='$id_alumni' and flag = 'Perusahaan' and status <> 'Read' order by `id_inbox` desc";
							$jum=getJum($conn,$sql);
							?>
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span><?php echo $jum;?></span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
								
                                    <span class="notify-title">You have <?php echo $jum ?> new notifications </span>
                                       
								  <div class="nofity-list">
								   <?php                  
   
		                            $arr=getData($conn,$sql);
											foreach($arr as $d) {	
													$id_inbox=$d["id_inbox"];
													$alumni=getAlumni($conn,$id_alumni);
													$tanggal=WKT($d["tanggal"]);
                                                    $pesan=$d["pesan"];
                                                    $balasan=$d["balasan"];
													$jam=$d["jam"];
													$id_perusahaan=$d["id_perusahaan"];
		                                        	$perusahaan=getPerusahaan($conn,$d["id_perusahaan"]);
													$status=$d["status"];
													$keterangan=$d["keterangan"];
													$flag=$d["flag"];
													
                                             ?>
                                        <a href="?mnu=inboxAlumniPilihan&id=<?php echo $d['id_perusahaan'];?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p><?php echo $perusahaan; ?></p>
                                                <span class="msg"><?php echo $pesan; ?></span>
                                                <span><?php echo $jam; ?></span>
                                                <br><span><?php echo $status; ?></span>
                                            </div>
                                        </a>   
                                    <?php
										}
										?>										
                                    </div>
									
                                </div>
							<?php  } 
							?>
                            </li>
							
							<li class="dropdown">
							  <?php
							  
							if($_SESSION["cstatus"]=="Terverifikasi" || $_SESSION["cstatus"]=="Menunggu Verifikasi"){	
							$id_perusahaan=$_SESSION["cid"];
							//	$sql="select * from `$tbinbox`,`$tbperusahaan` where  `$tbperusahaan`.id_perusahaan='$id_perusahaan' and `$tbinbox`.id_perusahaan=`$tbperusahaan`.id_perusahaan order by `$tbinbox`.`id_perusahaan` desc";
                            $id = $_GET['id'];
                            // $sql = "UPDATE $tbinbox SET status='Read' WHERE id_alumni='$id'";
                            // $update=process($conn,$sql);
                            
                            $sql="select * from `$tbinbox` where id_perusahaan='$id_perusahaan' and flag = 'Alumni' and status <> 'Read' order by `id_inbox` desc";
							$jum=getJum($conn,$sql);
							?>
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span><?php echo $jum;?></span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
								
                                    <span class="notify-title">You have <?php echo $jum ?> new notifications <!--<a href="#">view all</a>--></span>
                                       
								  <div class="nofity-list">
								   <?php                  
   
                                    $arr=getData($conn,$sql);
											foreach($arr as $d) {	
													$id_inbox=$d["id_inbox"];
													$alumni=getAlumni($conn,$d['id_alumni']);
													$tanggal=WKT($d["tanggal"]);
                                                    $pesan=$d["pesan"];
                                                    $balasan=$d["balasan"];
													$jam=$d["jam"];
													$id_perusahaan=$d["id_perusahaan"];
		                                        	$perusahaan=getPerusahaan($conn,$d["id_perusahaan"]);
													$status=$d["status"];
													$keterangan=$d["keterangan"];
													$flag=$d["flag"];
													
                                             ?>
                                        <a href="?mnu=inboxPerusahaanPilihan&id=<?php echo $d['id_alumni'];?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p><?php echo $alumni; ?></p>
                                                <span class="msg"><?php echo $balasan; ?></span>
                                                <span><?php echo $jam; ?></span>
                                                <br><span><?php echo $status; ?></span>
                                            </div>
                                        </a>   
                                    <?php
										}
										?>										
                                    </div>
									
                                </div>
							<?php  } 
							?>
                            </li>
                            <!-- Button Setting
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
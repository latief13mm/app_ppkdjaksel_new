<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>

<h3><center>Laporan data loker:</h3>

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>No</td>
    <th width="25%"><center>Judul Loker</td>
    <th width="5%"><center>Status Pekerjaan</td>
    <th width="10%"><center>Jabatan</td>
    <th width="10%"><center>Karyawan</td>
    <th width="10%"><center>Tanggal</td>
    <th width="10%"><center>Lokasi Pekerjaan</td>
    <th width="10%"><center>Bidang Pekerjaan</td>
    <th width="10%"><center>Gaji</td>
  </tr>
<?php  
  $sql="select * from `$tbloker` order by `id_loker` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_loker=$d["id_loker"];
				$judul_loker=$d["judul_loker"];
				$status_pekerjaan=$d["status_pekerjaan"];
				$jabatan=$d["jabatan"];
				$jumlah_karyawan=$d["jumlah_karyawan"];
				$tanggal=$d["tanggal"];
				$lokasi_pekerjaan=$d["lokasi_pekerjaan"];
				$bidang_pekerjaan=$d["bidang_pekerjaan"];
				$gaji=$d["gaji"];

  						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$judul_loker</td>
				<td>$status_pekerjaan</td>
				<td>$jabatan</td>
				<td>$jumlah_karyawan</td>
				<td>$tanggal</td>
				<td>$lokasi_pekerjaan</td>
				<td>$bidang_pekerjaan</td>
				<td>$gaji</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$judul_loker</td>
				<td>$status_pekerjaan</td>
				<td>$jabatan</td>
				<td>$jumlah_karyawan</td>
				<td>$tanggal</td>
				<td>$lokasi_pekerjaan</td>
				<td>$bidang_pekerjaan</td>
				<td>$gaji</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data loker belum tersedia...</blink></td></tr>";}
		
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function getJum($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getData($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	
	$rs->free();
	return $arr;
}
		
?>
</table>


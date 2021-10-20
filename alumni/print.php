<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>

<h3><center>Laporan data alumni:</h3>
 
 
<table width="100%" border="0">
  <tr>
    <th width="5%"><center>No</td>
    <th width="25%"><center>Nama Alumni</td>
    <th width="25%"><center>Nik</td>
    <th width="20%"><center>Tanggal Lahir</td>
    <th width="10%"><center>Jenis Kelamin</td>
    <th width="5%"><center>Alamat</td>
    <th width="5%"><center>Telephone</td>
    <th width="5%"><center>Email</td>
    <th width="5%"><center>Pendidikan</td>
    <th width="5%"><center>Peminatan Kejuruan</td>
  </tr>
<?php  
  $sql="select * from `$tbalumni` order by `id_alumni` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_alumni=$d["id_alumni"];
				$nama_alumni=$d["nama_alumni"];
				$nik=$d["nik"];
				$tempat_lahir=$d["tempat_lahir"];
				$tanggal_lahir=$d["tanggal_lahir"];
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
					

if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$nama_alumni</td>
				<td>$nik</td>
				<td>$tanggal_lahir</td>
				<td>$jenis_kelamin</td>
				<td>$alamat</td>
				<td>$telephone</td>
				<td>$email</td>
				<td>$pendidikan</td>
				<td>$peminatan_kejuruan</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$nama_alumni</td>
				<td>$nik</td>
				<td>$tanggal_lahir</td>
				<td>$jenis_kelamin</td>
				<td>$alamat</td>
				<td>$telephone</td>
				<td>$email</td>
				<td>$pendidikan</td>
				<td>$peminatan_kejuruan</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data alumni belum tersedia...</blink></td></tr>";}
		
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


<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan data mahasiswa:</h3>
 

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>No</td>
    <th width="25%"><center>Nama Perusahaan</td>
    <th width="25%"><center>Alamat</td>
    <th width="20%"><center>Website</td>
    <th width="10%"><center>Telephone</td>
    <th width="10%"><center>Email</td>
    <th width="25%"><center>Skdp</td>
    <th width="10%"><center>Wlk</td>
  </tr>
<?php  
  $sql="select * from `$tbperusahaan` order by `id_perusahaan` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_perusahaan=$d["id_perusahaan"];
				$nama_perusahaan=$d["nama_perusahaan"];
				$alamat=$d["alamat"];
				$website=$d["website"];
				$telephone=$d["telephone"];
				$email=$d["email"];
				$skdp=$d["skdp"];
				$wlk=$d["wlk"];					
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$nama_perusahaan</td>
				<td>$alamat</td>
				<td>$website</td>
				<td>$telephone</td>
				<td>$email</td>
				<td>$skdp</td>
				<td>$wlk</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$nama_perusahaan</td>
				<td>$alamat</td>
				<td>$website</td>
				<td>$telephone</td>
				<td>$email</td>
				<td>$skdp</td>
				<td>$wlk</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data Perusahaan belum tersedia...</blink></td></tr>";}
		
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


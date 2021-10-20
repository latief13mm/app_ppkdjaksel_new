<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan data pilihan:</h3>

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>no</td>
    <th width="10%"><center>id_pilihan</td>
    <th width="25%"><center>tanggal</td>
    <th width="25%"><center>id_alumni</td>
    <th width="5%"><center>kategori</td>
    <th width="5%"><center>status</td>
    <th width="25%"><center>balasan</td>
    <th width="25%"><center>keterangan</td>
  </tr>
<?php  
  $sql="select * from `$tbpilihan` order by `id_pilihan` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_pilihan=$d["id_pilihan"];
				$tanggal=$d["tanggal"];
				$id_alumni=$d["id_alumni"];
				$kategori=$d["kategori"];
				$status=$d["status"];
				$balasan=$d["balasan"];
				$keterangan=$d["keterangan"];
				
						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$id_pilihan</td>
				<td>$tanggal</td>
				<td>$id_alumni</td>
				<td>$kategori</td>
				<td>$status</td>
				<td>$balasan</td>
				<td>$keterangan</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$id_pilihan</td>
				<td>$tanggal</td>
				<td>$id_alumni</td>
				<td>$kategori</td>
				<td>$status</td>
				<td>$balasan</td>
				<td>$keterangan</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data pilihan belum tersedia...</blink></td></tr>";}
		
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


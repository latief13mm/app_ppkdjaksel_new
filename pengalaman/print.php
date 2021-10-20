<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan data pengalaman:</h3>
 

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>no</td>
    <th width="10%"><center>id_alumni</td>
    <th width="25%"><center>pengalaman_kerja</td>
    <th width="25%"><center>periode</td>
    <th width="20%"><center>catatan</td>
  </tr>
<?php  
  $sql="select * from `$tbpengalaman` order by `id_alumni` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_alumni=$d["id_alumni"];
				$pengalaman_kerja=$d["pengalaman_kerja"];
				$periode=$d["periode"];
				$catatan=$d["catatan"];		
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$id_alumni</td>
				<td>$pengalaman_kerja</td>
				<td>$periode</td>
				<td>$catatan</td>
			    </tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$id_alumni</td>
				<td>$pengalaman_kerja</td>
				<td>$periode</td>
				<td>$catatan</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data pengalaman belum tersedia...</blink></td></tr>";}
		
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


<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbpengalaman`";
if(getJum($conn,$sql)>0){
	print "<pengalaman>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_alumni=$d["id_alumni"];
				$pengalaman_kerja=$d["pengalaman_kerja"];
				$periode=$d["periode"];
				$catatan=$d["catatan"];
												
				print "<record>\n";
				print "<pengalaman_kerja>$pengalaman_kerja</pengalaman_kerja>\n";
				print "<periode>$periode</periode>\n";
				print "<catatan>$catatan</catatan>\n";
				print "<id_alumni>$id_alumni</id_alumni>\n";
				print "</record>\n";
			}
	print "</pengalaman>\n";
}
else{
	$null="null";
	print "<pengalaman>\n";
		print "<record>\n";
				print "  <pengalaman_kerja>$null</pengalaman_kerja>\n";
				print "  <periode>$null</periode>\n";
				print "  <catatan>$null</catatan>\n";
				print "  <id_alumni>$null</id_alumni>\n";
		print "</record>\n";
	print "</pengalaman>\n";
	}
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
	
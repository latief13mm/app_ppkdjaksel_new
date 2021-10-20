<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbuser`";
if(getJum($conn,$sql)>0){
	print "<user>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_user=$d["id_user"];
				$nama_user=$d["nama_user"];
				$email=$d["email"];
				$status=$d["status"];
			    $keterangan=$d["keterangan"];
				
												
				print "<record>\n";
				print "  <nama_user>$nama_user</nama_user>\n";
				print "  <email>$email</email>\n";
				print "  <status>$status</status>\n";
				print "  <keterangan>$keterangan</keterangan>\n";
				print "  <id_user>$id_user</id_user>\n";
				print "</record>\n";
			}
	print "</user>\n";
}
else{
	$null="null";
	print "<user>\n";
		print "<record>\n";
				print "  <nama_user>$null</nama_user>\n";
				print "  <email>$null</email>\n";
				print "  <status>$null</status>\n";
				print "  <keterangan>$null</keterangan>\n";
				print "  <id_user>$null</id_user>\n";
		print "</record>\n";
	print "</user>\n";
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
	
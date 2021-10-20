<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbpilihan`";
if(getJum($conn,$sql)>0){
	print "<pilihan>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_pilihan=$d["id_pilihan"];
				$tanggal=$d["tanggal"];
				$id_alumni=$d["id_alumni"];
				$pesan=$d["pesan"];
			    $id_user=$d["id_user"];
				$kategori=$d["kategori"];
				$status=$d["status"];
				$balasan=$d["balasan"];
				$keterangan=$d["keterangan"];
												
				print "<record>\n";
				print "  <tanggal>$tanggal</tanggal>\n";
				print "  <id_alumni>$id_alumni</id_alumni>\n";
				print "  <pesan>$pesan</pesan>\n";
				print "  <id_user>$id_user</id_user>\n";
				print "  <id_user>$kategori</id_user>\n";
				print "  <status>$status</status>\n";
				print "  <balasan>$balasan</balasan>\n";
				print "  <keterangan>$keterangan</keterangan>\n";
				print "  <id_pilihan>$id_pilihan</id_pilihan>\n";
				print "</record>\n";
			}
	print "</pilihan>\n";
}
else{
	$null="null";
	print "<pilihan>\n";
		print "<record>\n";
				print "  <tanggal>$null</tanggal>\n";
				print "  <id_alumni>$null</id_alumni>\n";
				print "  <pesan>$null</pesan>\n";
				print "  <id_user>$null</id_user>\n";
				print "  <kategori>$null</kategori>\n";
				print "  <status>$null</status>\n";
				print "  <balasan>$null</balasan>\n";
				print "  <keterangan>$null</keterangan>\n";
				print "  <id_pilihan>$null</id_pilihan>\n";
		print "</record>\n";
	print "</pilihan>\n";
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
	
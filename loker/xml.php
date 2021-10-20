<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbloker`";
if(getJum($conn,$sql)>0){
	print "<loker>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_loker=$d["id_loker"];
				$judul	=$d["judul	"];
				$isi=$d["isi"];
				$status=$d["status"];
				$id_perusahaan=$d["id_perusahaan"];
				$tanggal=$d["tanggal"];
				$keterangan=$d["keterangan"];
				$gambar=$d["gambar"];
												
				print "<record>\n";
				print "  <judul	>$judul	</judul	>\n";
				print "  <isi>$isi</isi>\n";
				print "  <status>$status</status>\n";
				print "  <id_perusahaan>$id_perusahaan</id_perusahaan>\n";
				print "  <tanggal>$tanggal</tanggal>\n";
				print "  <keterangan>$keterangan</keterangan>\n";
				print "  <gambar>$gambar</gambar>\n";
				print "  <id_loker>$id_loker</id_loker>\n";
				print "</record>\n";
			}
	print "</loker>\n";
}
else{
	$null="null";
	print "<loker>\n";
				print "<record>\n";
				print "  <judul	>$null</judul	>\n";
				print "  <isi>$null</isi>\n";
				print "  <status>$null</status>\n";				
				print "  <id_perusahaan>$null</id_perusahaan>\n";
				print "  <tanggal>$null</tanggal>\n";
				print "  <keterangan>$null</keterangan>\n";				
				print "  <gambar>$null</gambar>\n";
				print "  <id_loker>$null</id_loker>\n";
				print "</record>\n";
	print "</loker>\n";

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
	
<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbalumni`";
if(getJum($conn,$sql)>0){
	print "<alumni>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {					
				$id_alumni=$d["id_alumni"];
				$nama_alumni=$d["nama_alumni"];
				$nik=$d["nik"];
				$tempat_lahir=$d["tempat_lahir"];
				$tanggal_lahir=WKT(($d["tanggal_lahir"]));
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
				$gambar=$d["gambar"];
				
												
				print "<record>\n";
				print "  <id_alumni>$id_alumni</id_alumni>\n";
				print "  <nama_alumni>$nama_alumni</nama_alumni>\n";
				print "  <nik>$nik</nik>\n";
				print "  <tempat_lahir>$tempat_lahir</tempat_lahir>\n";
				print "  <tanggal_lahir>$tanggal_lahir</tanggal_lahir>\n";
				print "  <jenis_kelamin>$jenis_kelamin</jenis_kelamin>\n";
				print "  <alamat>$alamat</alamat>\n";
				print "  <telephone>$telephone</telephone>\n";
				print "  <email>$email</email>\n";
				print "  <pendidikan>$pendidikan</pendidikan>\n";
				print "  <keahlian>$keahlian</keahlian>\n";
				print "  <user_name>$user_name</user_name>\n";
				print "  <password>$password</password>\n";
				print "  <peminatan_kejuruan>$peminatan_kejuruan</peminatan_kejuruan>\n";
				print "  <status>$status</status>\n";
				print "  <keterangan>$keterangan</keterangan>\n";
				print "  <gambar>$gambar</gambar>\n";
				print "</record>\n";
			}
	print "</alumni>\n";
}
else{
	$null="null";
	print "<alumni>\n";
				print "<record>\n";
				print "  <nama_alumni>$null</nama_alumni>\n";
				print "  <nik>$null</nik>\n";
				print "  <tempat_lahir>$null</tempat_lahir>\n";
				print "  <tanggal_lahir>$null</tanggal_lahir>\n";				
				print "  <jenis_kelamin>$null</jenis_kelamin>\n";
				print "  <alamat>$null</alamat>\n";
				print "  <telephone>$null</telephone>\n";	
				print "  <email>$null</email>\n";	
				print "  <pendidikan>$null</pendidikan>\n";	
				print "  <keahlian>$null</keahlian>\n";	
				print "  <user_name>$null</user_name>\n";	
				print "  <password>$null</password>\n";	
				print "  <peminatan_kejuruan>$null</peminatan_kejuruan>\n";	
				print "  <status>$null</status>\n";	
				print "  <keterangan>$null</keterangan>\n";					
				print "  <gambar>$null</gambar>\n";
				print "  <id_alumni>$null</id_alumni>\n";
				print "</record>\n";
	print "</alumni>\n";

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
	
<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbmahasiswa`";
if(getJum($conn,$sql)>0){
	print "<mahasiswa>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$kode_mahasiswa=$d["kode_mahasiswa"];
				$nama_mahasiswa=$d["nama_mahasiswa"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$tgl_lahir=$d["tgl_lahir"];
			    $alamat=$d["alamat"];
				$telepon=$d["telepon"];
				$email=$d["email"];
				$nama_ortu=$d["nama_ortu"];
				$username=$d["username"];
			    $password=$d["password"];
				$status=$d["status"];
				$add1=$d["add1"];
				$add2=$d["add2"];
			    $add3=$d["add3"];
				$add4=$d["add4"];
												
				print "<record>\n";
				print "  <nama_mahasiswa>$nama_mahasiswa</nama_mahasiswa>\n";
				print "  <jenis_kelamin>$jenis_kelamin</jenis_kelamin>\n";
				print "  <tgl_lahir>$tgl_lahir</tgl_lahir>\n";
				print "  <alamat>$alamat</alamat>\n";
				print "  <telepon>$telepon</telepon>\n";
				print "  <email>$email</email>\n";
				print "  <nama_ortu>$nama_ortu</nama_ortu>\n";
				print "  <username>$username</username>\n";
				print "  <password>$password</password>\n";
				print "  <status>$status</status>\n";
				print "  <add1>$add1</add1>\n";
				print "  <add2>$add2</add2>\n";
				print "  <add3>$add3</add3>\n";
				print "  <add4>$add4</add4>\n";
				print "  <kode_mahasiswa>$kode_mahasiswa</kode_mahasiswa>\n";
				print "</record>\n";
			}
	print "</mahasiswa>\n";
}
else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
				print "  <nama_mahasiswa>$null</nama_mahasiswa>\n";
				print "  <jenis_kelamin>$null</jenis_kelamin>\n";
				print "  <tgl_lahir>$null</tgl_lahir>\n";
				print "  <alamat>$null</alamat>\n";
				print "  <telepon>$null</telepon>\n";
				print "  <email>$null</email>\n";
				print "  <nama_ortu>$null</nama_ortu>\n";
				print "  <username>$null</username>\n";
				print "  <password>$null</password>\n";
				print "  <status>$null</status>\n";
				print "  <add1>$null</add1>\n";
				print "  <add2>$null</add2>\n";
				print "  <add3>$null</add3>\n";
				print "  <add4>$null</add4>\n";
				print "  <kode_mahasiswa>$null</kode_mahasiswa>\n";
		print "</record>\n";
	print "</mahasiswa>\n";
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
	
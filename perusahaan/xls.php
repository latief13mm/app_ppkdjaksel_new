<?php
require_once"../koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

 	$buffer = ""; 
    $separator = ","; //, atau ;
    $newline = "\r\n"; 
    		    
    $buffer = "kode_mahasiswa".$separator ."nama_mahasiswa".$separator ."jenis_kelamin".$separator ."tgl_lahir".$separator ."alamat".$separator. "telepon".$separator ."email".$separator."nama_ortu".$separator."username".$separator."password".$separator."status".$separator."add1".$separator."add2".$separator."add3".$separator."add4".$separator; 
    $buffer .= $newline; 
    
  $sql="select `kode_mahasiswa`,`nama_mahasiswa`,`jenis_kelamin`,`tgl_lahir`,`alamat`,`telepon`,`email`,`nama_ortu`,`username`,`password`,`status`,`add1`,`add2`,`add3`,`add4` from `$tbmahasiswa` order by `kode_mahasiswa` desc";
  $jum=getJum($conn,$sql);	
  if($jum>0){						
	  $arr=getData($conn,$sql);
	  foreach($arr as $d) {		 
					$value=$d["kode_mahasiswa"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["nama_mahasiswa"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["jenis_kelamin"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["tgl_lahir"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["alamat"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["telepon"];$buffer .= "\"".$value."\"".$separator;
					$value=$d["email"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["nama_ortu"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["username"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["password"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["status"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["add1"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["add2"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["add3"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["add4"];$buffer .= "\"".$value."\"".$separator; 
				$buffer .= $newline; 
		}	
  }
  else{
    $buffer .= $newline; 
	  }
    header("Content-type: application/vnd.ms-excel"); 
    header("Content-Length: ".strlen($buffer)); 
    header("Content-Disposition: attachment; filename=report.csv"); 
    header("Expires: 0"); 
    header("Cache-Control: must-revalidate, post-check=0,pre-check=0"); 
    header("Pragma: public"); 

    print $buffer;
	
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
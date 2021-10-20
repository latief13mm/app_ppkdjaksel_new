<?php
require_once"../koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}


 	$buffer = ""; 
    $separator = ","; //, atau ;
    $newline = "\r\n"; 
    		    
    $buffer = "id_alumni".$separator ."nama_alumni".$separator."nik".$separator ."tempat_lahir".$separator ."tanggal_lahir".$separator ."jenis_kelamin".$separator ."alamat".$separator ."telephone".$separator ."email".$separator ."pendidikan".$separator ."keahlian".$separator ."user_name".$separator ."password".$separator ."peminatan_kejuruan".$separator ."status".$separator ."keterangan".$separator ."gambar".$separator; 
    $buffer .= $newline; 
    
$sql="select `id_alumni`,`nama_alumni`,`nik`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`alamat`,`alamat`,`alamat`,`alamat`,`alamat`,`alamat`,`alamat`,`alamat`,`alamat`,`alamat`,`gambar` from `$tbalumni` order by `id_alumni` desc";
  $jum=getJum($conn,$sql);	
  if($jum>0){						
	  $arr=getData($conn,$sql);
	  foreach($arr as $d) {		 
					$value=$d["id_alumni"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["nama_alumni"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["nik"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["tempat_lahir"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["tanggal_lahir"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["jenis_kelamin"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["alamat"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["telephone"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["email"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["pendidikan"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["keahlian"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["peminatan_kejuruan"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["status"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["keterangan"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gambar"];$buffer .= "\"".$value."\"".$separator; 
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
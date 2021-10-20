<?php
session_start();
require_once"konmysqli.php";

function process($conn,$sql){
	$s=false;
	$conn->autocommit(FALSE);
	try {
		$rs = $conn->query($sql);
		if($rs){
			$conn->commit();
			$last_inserted_id = $conn->insert_id;
			$affected_rows = $conn->affected_rows;
			$s=true;
		}
	} 
	catch (Exception $e) {
		echo 'fail: ' . $e->getMessage();
		$conn->rollback();
	}
	$conn->autocommit(TRUE);
	return $s;
}
if(isset($_GET['token'])) { // jika ada token di URL
	$t = $_GET['token'];
	$sql = "SELECT * FROM reset_password WHERE token='$t'";
	$cek_token = $conn->query($sql);
	$cek_token->data_seek(0);
	$row = $cek_token->fetch_assoc();
    if($row) { // jika token ditemukan
        $email = $row['email'];
        $pass = $row['new_pass'];
        $role = $row['role'];
        $table = "tb_".$role;
        $sql = "SELECT * FROM $table WHERE email='$email'";
        $cek_user = $conn->query($sql);
        $cek_user->data_seek(0);
        $row_user = $cek_user->fetch_assoc();
        if( $row_user ) { // jika usernya ketemu
            $sql = "UPDATE $table SET password='$pass' WHERE email='$email'";
            $update=process($conn,$sql);
            if($update) { // jika berhasil mengupdate password
                if($role == 'alumni') {
                    $file = 'loginAlumni.php?success';
                }
                if($role == 'perusahaan') {
                    $file = 'loginPerusahaan.php?success';
                }
                if($role == 'admin') {
                    $file = 'login.php?success';
                }
                header('location: ' . $file );
            }else{
                echo 'Maaf Proses Update Password Gagal';
            }
        }else{
            echo 'Maaf User Tidak ditemukan';
        }
    }else{
        echo 'Maaf Tokern Tidak Ditemukan';
    }
}else{
    echo 'Token Belum Tersedia';
}
?>
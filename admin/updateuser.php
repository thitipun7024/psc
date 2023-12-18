<?php
include("../Connection/conn.php");
$id = $_POST['id_user'];
$username = $_POST['login_user'];
$pass = $_POST['pass_user'];
$role = $_POST['role_user'];
$name = $_POST['name_user'];
$sex = $_POST['sex_user'];
$address = $_POST['address_user'];
$email = $_POST['email_user'];
$phone = $_POST['phone_user'];
$status = $_POST['status_user'];

$img = $_FILES["img"]["name"];
$img_tmp = $_FILES["img"]["tmp_name"];

if($img != null){
	$sql = "SELECT * FROM tb_user WHERE id_user = '$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$file = $row['photo_user'];
	if(mysqli_num_rows($result) != 0){
		$delete = ("img/$file");
		@unlink($delete);
	}
	
	$local = "img/";
	$namefile = $local.$username."-".$img;
	$namefile2 = $username."-".$img;
	move_uploaded_file($img_tmp = $_FILES["img"]["tmp_name"], $namefile);
	
	$sql2 = "UPDATE tb_user SET photo_user ='$namefile2' WHERE id_user = '$id'";
	$result2 = mysqli_query($conn, $sql2);
}


	$sql3 = "UPDATE tb_user SET pass_user ='$pass', role_user ='$role', name_user ='$name', sex_user ='$sex', address_user ='$address',email_user ='$email', phone_user ='$phone', status_user ='$status' WHERE id_user = '$id'";
	$result3 = mysqli_query($conn, $sql3);
;
	
	if($result3){
		echo "<script>";
		echo "alert(\" เเก้ไขสมาชิกสำเร็จ \");";
		echo "window.location.href='index.php?option=alluser'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เเก้ไขสมาชิกไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>
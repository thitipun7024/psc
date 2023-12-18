<?php
include("../Connection/conn.php");
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

$local = "img/";
$namefile = $local.$username."-".$img;
$namefile2 = $username."-".$img;
move_uploaded_file($img_tmp = $_FILES["img"]["tmp_name"], $namefile);

$sql = "SELECT * FROM tb_user WHERE login_user = '$username'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num != 0){
	echo "<script>";
    echo "alert(\" username ซ้ำ กรุณาลองใหม่อีกครั้ง \");";
    echo "window.history.back()";
    echo "</script>";
}else{
	$sql2 = "INSERT INTO tb_user VALUES (null,'$username','$pass','$role','$name','$sex','$address','$email','$phone','$namefile2','$status')";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เพิ่มสมาชิกสำเร็จ \");";
		echo "window.location.href='index.php?option=alluser'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เพิ่มสมาชิกไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
}	
?>
<?php
session_start();
include("../Connection/conn.php");
$id = $_POST['id_employee'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];

$img = $_FILES["img"]["name"];
$img_tmp = $_FILES["img"]["tmp_name"];

if($img != null){
	$sql = "SELECT * FROM tb_employee WHERE id_employee = '$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$file = $row['photo_employee'];
	if(mysqli_num_rows($result) != 0){
		$delete = ("img/$file");
		@unlink($delete);
	}
	
	$local = "img/";
	$namefile = $local.$detail."-".$img;
	$namefile2 = $detail."-".$img;
	move_uploaded_file($img_tmp = $_FILES["img"]["tmp_name"], $namefile);
	
	$sql2 = "UPDATE tb_employee SET photo_employee ='$namefile2' WHERE id_employee = '$id'";
	$result2 = mysqli_query($conn, $sql2);
}


	$sql3 = "UPDATE tb_employee SET name_employee ='$name', detail ='$detail', phone_employee ='$phone' WHERE  id_employee = '$id'";
	$result3 = mysqli_query($conn, $sql3);
;
	
	if($result3){
		echo "<script>";
		echo "alert(\" เเก้ไขข้อมูลพนักงานสำเร็จ \");";
		echo "window.location.href='index.php?option=employee'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"  เเก้ไขข้อมูลพนักงานไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>
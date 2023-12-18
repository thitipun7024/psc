<?php
session_start();
include("../Connection/conn.php");
$id = $_POST['id_new'];
$detail = $_POST['detail'];
$date = date("Y-m-d H:i:s");

$img = $_FILES["img"]["name"];
$img_tmp = $_FILES["img"]["tmp_name"];

if($img != null){
	$sql = "SELECT * FROM tb_new WHERE id_new = '$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$file = $row['photo_new'];
	if(mysqli_num_rows($result) != 0){
		$delete = ("img/$file");
		@unlink($delete);
	}
	
	$local = "img/";
	$namefile = $local.$detail."-".$img;
	$namefile2 = $detail."-".$img;
	move_uploaded_file($img_tmp = $_FILES["img"]["tmp_name"], $namefile);
	
	$sql2 = "UPDATE tb_new SET photo_new ='$namefile2' WHERE id_new = '$id'";
	$result2 = mysqli_query($conn, $sql2);
}


	$sql3 = "UPDATE tb_new SET detail = '$detail', name_user = '".$_SESSION['login_user']."', datesave = '$date' WHERE  id_new = '$id'";
	$result3 = mysqli_query($conn, $sql3);
;
	
	if($result3){
		echo "<script>";
		echo "alert(\" เเก้ไขประชาสัมพันธ์สำเร็จ \");";
		echo "window.location.href='index.php?option=new'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เเก้ไขประชาสัมพันธ์ไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>
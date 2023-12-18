<?php
session_start();
include("../Connection/conn.php");
$id = $_POST['id_ques'];
$detail = $_POST['comment'];
$date = date("Y-m-d H:i:s");

	$sql2 = "INSERT INTO tb_comment VALUES (null,'$detail','".$_SESSION['login_user']."','".$_SESSION['id_user']."','$date','$id')";
	$result2 = mysqli_query($conn, $sql2);

    $sql2 = "UPDATE tb_question SET view = view+1 , reply =  reply+1 WHERE id_ques = '$id'";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เเสดงความคิดเห็นสำเร็จ \");";
		echo "window.location.href='index.php?option=question'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"เเสดงความคิดเห็นไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}	
?>
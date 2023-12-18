<?php
session_start();
include("../Connection/conn.php");
$id = $_REQUEST['id_ques'];
$topic = $_POST['topic'];
$detail = $_POST['detail'];



	$sql3 = "UPDATE tb_question SET topic ='$topic', detail ='$detail', name_ques ='".$_SESSION['login_user']."', id_user ='".$_SESSION['id_user']."' WHERE id_ques = '$id'";
	$result3 = mysqli_query($conn, $sql3);
;
	
	if($result3){
		echo "<script>";
		echo "alert(\" เเก้ไขกระดานบอร์ดสำเร็จ \");";
		echo "window.location.href='index.php?option=question'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"เเก้ไขกระดานบอร์ดไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>
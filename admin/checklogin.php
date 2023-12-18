<?php
session_start();
include("../Connection/conn.php");
if(isset($_POST['login_user'])){
	$user =$_POST['login_user'];
	$password =$_POST['pass_user'];
	
	$sql = "SELECT * FROM tb_user WHERE login_user = '$user' AND pass_user = '$password'";
    $result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result);
		
		$_SESSION['id_user'] = $row['id_user'];
		$_SESSION['login_user'] = $row['login_user'];
		$_SESSION['pass_user'] = $row['pass_user'];
		$_SESSION['role_user'] = $row['role_user'];
		
		if($row['role_user'] == "admin"){
			header("Location: index.php?option=dashboard");
		}elseif($row['role_user'] == "staff"){
			header("Location: index.php");
		}elseif($row['role_user'] == "user"){
			header("Location: ../index.php");
		}
		
	}else{
		echo "<script>";
        echo "alert(\" user หรือ password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
	}
}else{
	header("Location: login.php");
}
?>
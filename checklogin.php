<?php
session_start();
include("Connection/conn.php");
$user = $_POST['login_user'];
$password = $_POST['pass_user'];
if($user == ''){
    header("location: index.php");
}else{
    $sql = "SELECT * FROM tb_user WHERE login_user='$user' and pass_user='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        if($row["status_user"]=='1'){
            if($row["role_user"] == 'user'){
                $_SESSION["login_user"] = $row["login_user"];
                $_SESSION["name_user"] = $row["name_user"];
                $_SESSION["id_user"] = $row["id_user"];
                $_SESSION["role_user"] = $row["role_user"];
                header("location: index.php");
                
            }else if($row["role_user"] == 'staff' || $row["role_user"] == 'admin'){
                $_SESSION["login_user"] = $row["login_user"];
                $_SESSION["name_user"] = $row["name_user"];
                $_SESSION["id_user"] = $row["id_user"];
                $_SESSION["role_user"] = $row["role_user"];
                header("location: ../index.php");
        }else{
            echo "<script>";
            echo "alert(\" user ของท่านยังไม่สามารถใช้งานได้!!!\");";
            echo "window.history.back()";
            echo "</script>";
        }
    }else if($row["status_user"]=='0'){
        echo "<script>";
        echo "alert(\" user ของท่านยังไม่สามารถใช้งานได้!!!\");";
        echo "window.history.back()";
        echo "</script>";
    }
    }else{
        echo "<script>";
        echo "alert(\" user หรือ password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
}
?>
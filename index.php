<?php
ob_start();
$option = null;
if(isset($_GET["option"])){
    $option = $_GET["option"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PICC SENIOR CARE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include("header.php"); ?>

    <div class="container-fluid mt-3">
        <?php
        if($option == null){
            require_once "frmmain.php";
        }elseif($option == "new"){
            require_once "new.php";
        }
        ?>
    </div>
    
    <?php include("footer.php"); ?>
</body>
</html>
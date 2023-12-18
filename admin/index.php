<?php
include("../Connection/conn.php");
ob_start();
$option = null;
if(isset($_GET["option"])){
	$option = $_GET["option"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PICC SENIOR CARE</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
		<div class="row flex-nowrap">
		<?php include("sidebar.php"); ?>
			
			<div class="col-md-5 col-lg-10">
				<div class="container-fluid">
					<div class="row py-3">
						<?php
							if($option == "dashboard"){
								require_once("dashboard.php");
							}elseif($option == "alluser"){
								require_once("alluser.php");
							}elseif($option == "frmadduser"){
								require_once("frmadduser.php");
							}elseif($option == "frmedituser"){
								require_once("frmedituser.php");
							}elseif($option == "new"){
								require_once("new.php");
							}elseif($option == "frmaddnew"){
								require_once("frmaddnew.php");
							}elseif($option == "frmeditnew"){
								require_once("frmeditnew.php");
							}elseif($option == "question"){
								require_once("question.php");
							}elseif($option == "frmaddquestion"){
								require_once("frmaddquestion.php");
							}elseif($option == "frmeditquestion"){
								require_once("frmeditquestion.php");
							}elseif($option == "frmcomment"){
								require_once("frmcomment.php");
							}elseif($option == "check"){
								require_once("check.php");
							}elseif($option == "frmaddcheck"){
								require_once("frmaddcheck.php");
							}elseif($option == "frmeditcheck"){
								require_once("frmeditcheck.php");
							}elseif($option == "schedule"){
								require_once("schedule.php");
							}elseif($option == "frmaddschedule"){
								require_once("frmaddschedule.php");
							}elseif($option == "frmeditschedule"){
								require_once("frmeditschedule.php");
							}elseif($option == "employee"){
								require_once("employee.php");
							}elseif($option == "frmaddemployee"){
								require_once("frmaddemployee.php");
							}elseif($option == "frmeditemployee"){
								require_once("frmeditemployee.php");
							}elseif($option == "hospital"){
								require_once("hospital.php");
							}elseif($option == "frmaddhospital"){
								require_once("frmaddhospital.php");
							}elseif($option == "frmedithospital"){
								require_once("frmedithospital.php");
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
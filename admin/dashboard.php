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
	<h1 class="text-center py-2">Dashboard</h1>
	<p></p>
	
	<?php
		include("../Connection/conn.php");
		$sql = "SELECT * FROM tb_user ";
		$result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);
	?>
    <div class="col-md-10 col-lg-4 py-2">
		<div class="card border-0 shadow">
			<div class="card-header bg-info">
				<h3 class="fw-bold">จำนวนสมาชิกทั้งหมด</h3>
			</div>
			
			<div class="card-body">
				<?php echo $num; ?> คน
			</div>
		</div>
	</div>
	
	<?php
		include("../Connection/conn.php");
		$sql2 = "SELECT * FROM tb_new ";
		$result2 = mysqli_query($conn, $sql2);
		$num2 = mysqli_num_rows($result2);
	?>
	<div class="col-md-10 col-lg-4 py-2">
		<div class="card border-0 shadow">
			<div class="card-header bg-warning">
				<h3 class="fw-bold">ประชาสัมพันธ์ทั้งหมด</h3>
			</div>
			
			<div class="card-body">
				<?php echo $num2; ?> เรื่อง
			</div>
		</div>
	</div>
	
	<?php
		include("../Connection/conn.php");
		$sql3 = "SELECT * FROM tb_question ";
		$result3 = mysqli_query($conn, $sql3);
		$num3 = mysqli_num_rows($result3);
	?>
	<div class="col-md-10 col-lg-4 py-2">
		<div class="card border-0 shadow">
			<div class="card-header bg-success">
				<h3 class="fw-bold">จำนวนกระดานบอร์ด</h3>
			</div>
			
			<div class="card-body">
				<?php echo $num3; ?> หัวข้อ
			</div>
		</div>
	</div>

	<?php
		include("../Connection/conn.php");
		$sql4 = "SELECT * FROM tb_check ";
		$result4 = mysqli_query($conn, $sql4);
		$num4 = mysqli_num_rows($result4);
	?>
	<div class="col-md-10 col-lg-4 py-2">
		<div class="card border-0 shadow">
			<div class="card-header bg-primary">
				<h4 class="fw-bold">จำนวนหัวข้อเเบบประเมิน</h4>
			</div>
			
			<div class="card-body">
				<?php echo $num4; ?> หัวข้อ
			</div>
		</div>
	</div>

	<?php
		include("../Connection/conn.php");
		$sql5 = "SELECT * FROM tb_schedule ";
		$result5 = mysqli_query($conn, $sql4);
		$num5 = mysqli_num_rows($result4);
	?>
	<div class="col-md-10 col-lg-4 py-2">
		<div class="card border-0 shadow">
			<div class="card-header bg-primary">
				<h3 class="fw-bold">จำนวนตารางนัด</h3>
			</div>
			
			<div class="card-body">
				<?php echo $num4; ?> รายการ
			</div>
		</div>
	</div>

	<div class="col-md-10 col-lg-4 py-2">
            <div class="card border-0 shadow">
                <div class="card-header bg-secondary">
                    <h4 class="fw-bold">จำนวนผู้เข้าชม</h4>
                </div>
                
                <div class="card-body">
                    <?php include("counter.php"); ?>
                </div>
            </div>
        </div>
</body>
</html>
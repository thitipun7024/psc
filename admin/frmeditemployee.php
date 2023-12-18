<?php
include("../Connection/conn.php");
$id = $_REQUEST['id_employee'];
$sql = "SELECT * FROM tb_employee WHERE id_employee = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
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
	<form action="updateemployee.php" method="post" enctype="multipart/form-data">
		<div class="d-flex align-items-center min-vh-100">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="text-center py-1 fw-bold">เเก้ไขข้อมูลพนักงาน</h1>
				<div class="col-md-8 col-lg-7">
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="name" placeholder="ชื่อ - นามสกุล" value="<?php echo $row['name_employee']; ?>">
							</div>

                            <div class="form-outline py-2">
								<textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด"><?php echo $row['detail']; ?></textarea>
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="text" name="phone" placeholder="เบอร์โทรศัพท์" maxlength="10" value="<?php echo $row['phone_employee']; ?>">
							</div>

                            <div class="text-center py-2">
								<img src="img/<?php echo $row['photo_employee']; ?>" width="50%">
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="file" name="img">
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="hidden" name="id_employee" value="<?php echo $row['id_employee']; ?>">
							</div>
							
							<div class="text-end py-3">
								<button class="btn btn-outline-success">เเก้ไขข้อมูลพนักงาน</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
</body>
</html>
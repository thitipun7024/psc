<?php
include("../Connection/conn.php");
$id = $_REQUEST['id_schedule'];
$sql = "SELECT * FROM tb_schedule WHERE id_schedule = '$id'";
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
	<form action="updateschedule.php" method="post" enctype="multipart/form-data">
		<div class="d-flex align-items-center min-vh-100">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="text-center py-1 fw-bold">เเก้ไขตารางนัดหมาย</h1>
				<div class="col-md-8 col-lg-7">
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="name_sch" placeholder="ชื่อ - นามสกุล" value="<?php echo $row['name_sch']; ?>">
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="text" name="phone_sch" placeholder="เบอร์โทรศัพท์" maxlength="10" value="<?php echo $row['phone_sch']; ?>">
							</div>

                            <div class="form-outline py-2">
								<textarea class="form-control" rows="5" name="address_user" placeholder="ที่อยู่"><?php echo $row['address_user']; ?></textarea>
							</div>

                            <div class="form-outline py-2">
								<textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด" required><?php echo $row['detail']; ?></textarea>
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="date" name="date_sch" placeholder="วันที่นัดหมาย" value="<?php echo $row['date_sch']; ?>">
							</div>

                            <div class="form-outline py-2 col-3">
								<select class="form-control" name="status_sch">
									<option value="<?php echo $row['status_sch']; ?>" selected>
                                    <?php if($row['status_sch'] == "1"){
									echo "อยู่ระหว่างตรวจสอบ";
                                            }elseif($row['status_sch'] == "2"){
                                                echo "อยู่ระหว่างดำเนินการ";
                                            }elseif($row['status_sch'] == "3"){
                                                echo "ดำเนินการเสร็จสิ้น";
                                            }  
                                    ?>
                                    </option>
									<option value="1">อยู่ระหว่างตรวจสอบ</option>
									<option value="2">อยู่ระหว่างดำเนินการ</option>
									<option value="3">ดำเนินการเสร็จสิ้น</option>
								</select>
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="hidden" name="id_schedule" maxlength="10" placeholder="เบอร์โทรศัพท์" value="<?php echo $row['id_schedule']; ?>">
							</div>
							
							<div class="text-end py-3">
								<button class="btn btn-outline-success">เเก้ไขตารางนัดหมาย</button>
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
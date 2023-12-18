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
	<form action="insertemployee.php" method="post" enctype="multipart/form-data">
		<div class="d-flex align-items-center min-vh-100">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="text-center py-1 fw-bold">เพิ่มข้อมูลพนักงาน</h1>
				<div class="col-md-8 col-lg-7">
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="name" placeholder="ชื่อ - นามสกุล" required>
							</div>

                            <div class="form-outline py-2">
								<textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด" required></textarea>
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="text" name="phone" placeholder="เบอร์โทรศัพท์" maxlength="10" required>
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="file" name="img" required>
							</div>
							
							<div class="text-end py-3">
								<button class="btn btn-outline-success">เพิ่มข้อมูลพนักงาน</button>
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
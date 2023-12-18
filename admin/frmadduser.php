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
	<form action="insertuser.php" method="post" enctype="multipart/form-data">
		<div class="d-flex align-items-center min-vh-100">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="text-center py-1 fw-bold">เพิ่มสมาชิก</h1>
				<div class="col-md-8 col-lg-7">
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="login_user" placeholder="Username">
							</div>
							
							<div class="form-outline py-2">
								<input class="form-control" type="password" name="pass_user" placeholder="Password">
							</div>
							
							<div class="form-outline py-2 col-3">
								<select class="form-control" name="role_user">
									<option selected>สถานะ</option>
									<option value="admin">admin</option>
									<option value="staff">staff</option>
									<option value="user">user</option>
								</select>
							</div>
							
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="name_user" placeholder="ชื่อ-นามสกุล">
							</div>
							
							<div class="form-outline py-2 col-3">
								<select class="form-control" name="sex_user">
									<option selected>เพศ</option>
									<option value="1">ชาย</option>
									<option value="2">หญิง</option>
								</select>
							</div>
							
							<div class="form-outline py-2">
								<textarea class="form-control" rows="5" name="address_user" placeholder="ที่อยู่"></textarea>
							</div>
							
							<div class="form-outline py-2">
								<input class="form-control" type="email" name="email_user" placeholder="อีเมล์">
							</div>
							
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="phone_user" maxlength="10" placeholder="เบอร์โทรศัพท์">
							</div>
							
							<div class="form-outline py-2 col-3">
								<select class="form-control" name="status_user">
									<option selected>สถานะผู้ใช้</option>
									<option value="0">ยังไม่อนุมัติ</option>
									<option value="1">อนุมัติ</option>
									<option value="2">พักใช้งาน</option>
								</select>
							</div>
							
							<div class="form-outline py-2">
								<input class="form-control" type="file" name="img">
							</div>
							
							<div class="text-end py-3">
								<button class="btn btn-outline-success">เพิ่มสมาชิก</button>
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
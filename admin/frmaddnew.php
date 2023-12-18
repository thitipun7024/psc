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
	<form action="insertnew.php" method="post" enctype="multipart/form-data">
		<div class="d-flex align-items-center min-vh-100">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="text-center py-1 fw-bold">เพิ่มประชาสัมพันธ์</h1>
				<div class="col-md-8 col-lg-7">
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="name_user" placeholder="<?php echo $_SESSION['login_user'] ?>">
							</div>
							
							<div class="form-outline py-2">
								<textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด"></textarea>
							</div>
							
							<div class="form-outline py-2">
								<input class="form-control" type="file" name="img">
							</div>
							
							<div class="text-end py-3">
								<button class="btn btn-outline-success">เพิ่มประชาสัมพันธ์</button>
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
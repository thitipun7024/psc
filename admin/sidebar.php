<?php
session_start();
include("../Connection/conn.php");
if(empty($_SESSION['id_user'])){
	header("Location: login.php");
	exit();
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
    <!-- <div class="container-fluid">
		<div class="row flex-nowrap">
			<div class="col-auto col-md-4 col-lg-2 flex-column justify-content-center text-white bg-dark min-vh-100">
				<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<span class="d-none d-sm-inline fw-bold fs-4"><h2>PSC ADMIN</h2></span>
				</a>
				
				<ul class="nav nav-pills mt-4 flex-column">
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">Dashboard</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลสมาชิก</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลประชาสัมพันธ์</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลกระดานบอร์ด</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลเเบบประเมิน</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลตารางนัด</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลพนักงาน</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลโรงพยาบาล</span>
						</a>
					</li>
					
					<li class="nav-item py-2">
						<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
							<span class="d-none d-sm-inline fw-bold px-2">รายงาน</span>
						</a>
					</li>
				</ul>
				
				<div class="col-md-4 col-lg-12 py-4">
					<div class="card border-1 text-center" style="background-color: rgba(240, 248, 255, 0)">
						<div class="card-body">
							<img src="img/t1.jpg" class="rounded-circle" width="30" height="30"><br>
                            <p></p>
                            <p class="fw-bold">ADMIN</p><br>
							<a href="logout.php" class="btn btn-danger btn-sm">LOGOUT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="col-auto col-md-4 col-lg-2 flex-column justify-content-center text-white bg-dark min-vh-100">
		<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
			<span class="d-none d-sm-inline fw-bold fs-4"><h2>PSC ADMIN</h2></span>
		</a>
		
		<ul class="nav nav-pills mt-4 flex-column">
			<li class="nav-item py-2">
				<a href="index.php?option=dashboard" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">Dashboard</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a href="index.php?option=alluser" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลสมาชิก</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a href="index.php?option=new" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลประชาสัมพันธ์</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a href="index.php?option=question" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลกระดานบอร์ด</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a href="index.php?option=check" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลเเบบประเมิน</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a href="index.php?option=schedule" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลตารางนัด</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a href="index.php?option=employee" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลพนักงาน</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a href="index.php?option=hospital" class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">ข้อมูลโรงพยาบาล</span>
				</a>
			</li>
			
			<li class="nav-item py-2">
				<a class="d-flex text-decoration-none mt-1 text-white align-items-center text-center">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30">
					<span class="d-none d-sm-inline fw-bold px-2">รายงาน</span>
				</a>
			</li>
		</ul>
		
		<div class="col-md-4 col-lg-12 py-4">
			<div class="card border-1 text-center" style="background-color: rgba(240, 248, 255, 0)">
				<div class="card-body">
					<img src="img/t1.jpg" class="rounded-circle" width="30" height="30"><br>
					<p></p>
					<p class="fw-bold"><?php echo $_SESSION['login_user']; ?></p><br>
					<a href="logout.php" class="btn btn-danger btn-sm">LOGOUT</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
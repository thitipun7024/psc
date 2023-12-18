<?php 
	include("../Connection/conn.php");
	$search = null;
	if(isset($_POST["search"])){
		$search = $_POST["search"];
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
    <h1 class="text-center py-2">ข้อมูลสมาชิก</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=frmadduser" class="btn btn-primary">เพิ่มสมาชิก</a>
				</div>

				<div class="col-3">
					<div class="input-group">
						<input class="form-control" name="search" placeholder="search">
						<button class="btn btn-success" type="submit">ค้นหา</button>
					</div>
				</div>
			</div>
	</form>
	
		<table class="table table-striped table-responsive">
			<thead>
				<tr>
					<td>ID</td>
					<td>ชื่อผู้ใช้</td>
					<td>รหัสผ่าน</td>
					<td>สถานะ</td>
					<td>ชื่อ-นามสกุล</td>
					<td>เพศ</td>
					<td>ที่อยู่</td>
					<td>อีเมล์</td>
					<td>เบอร์</td>
					<td>รูป</td>
					<td>สถานะผู้ใช้</td>
				</tr>
			</thead>
			
			<tbody>
				<?php
					$sql = "SELECT * FROM tb_user WHERE login_user LIKE '%$search%' OR name_user LIKE '%$search%' OR role_user LIKE '%$search%' OR phone_user LIKE '%$search%' ORDER BY id_user ASC";
					$result = mysqli_query($conn, $sql);
				
					$i = 1;
					while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row['id_user']; ?></td>
					<td><?php echo $row['login_user']; ?></td>
					<td><?php echo $row['pass_user']; ?></td>
					<td><?php echo $row['role_user']; ?></td>
					<td><?php echo $row['name_user']; ?></td>
					<td><?php if($row['sex_user'] == "1"){
									echo "ชาย";
								}elseif($row['sex_user'] == "2"){
									echo "หญิง";
								} 
						?></td>
					<td><?php echo $row['address_user']; ?></td>
					<td><?php echo $row['email_user']; ?></td>
					<td><?php echo $row['phone_user']; ?></td>
					<td><img src="img/<?php echo $row['photo_user']; ?>" class="rounded-circle" width="40" height="40"></td>
					<td><?php if($row['status_user'] == "0"){
									echo "ยังไม่อนุมัติ";
								}elseif($row['status_user'] == "1"){
									echo "อนุมัติ";
								}elseif($row['status_user'] == "2"){
									echo "พักใช้งาน";
								}  
						?></td>
					<td><a class="btn btn-warning" href="index.php?option=frmedituser&id_user=<?php echo $row['id_user']; ?>">เเก้ไข</a></td>
					<td><a class="btn btn-danger" href="deleteuser.php?id_user=<?php echo $row['id_user']; ?>">ลบ</a></td>
				</tr>
				<?php
					$i++;
					}
				?>
			</tbody>
		</table>
</body>
</html>
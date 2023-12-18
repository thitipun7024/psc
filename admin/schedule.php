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
    <h1 class="text-center py-2">ข้อมูลตารางนัดหมาย</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=frmaddschedule" class="btn btn-primary">เพิ่มตารางนัดหมาย</a>
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
					<td>ชื่อ</td>
					<td>เบอร์โทรศัพท์</td>
					<td>ที่อยู่</td>
					<td>รายละเอียด</td>
					<td>วันที่นัดหมาย</td>
					<td>สถานะ</td>
				</tr>
			</thead>
			
			<tbody>
				<?php
					$sql = "SELECT * FROM tb_schedule WHERE name_sch LIKE '%$search%' OR address_user LIKE '%$search%' OR detail LIKE '%$search%' OR date_sch LIKE '%$search%' ORDER BY date_sch DESC";
					$result = mysqli_query($conn, $sql);
				
					$i = 1;
					while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row['name_sch']; ?></td>
					<td><?php echo $row['phone_sch']; ?></td>
					<td><?php echo $row['address_user']; ?></td>
					<td><?php echo $row['detail']; ?></td>
					<td><?php echo $row['date_sch']; ?></td>
					<td><?php if($row['status_sch'] == "1"){
									echo "อยู่ระหว่างตรวจสอบ";
								}elseif($row['status_sch'] == "2"){
									echo "อยู่ระหว่างดำเนินการ";
								}elseif($row['status_sch'] == "3"){
									echo "ดำเนินการเสร็จสิ้น";
								}  
						?></td>
					
					<td><a class="btn btn-warning" href="index.php?option=frmeditschedule&id_schedule=<?php echo $row['id_schedule']; ?>">เเก้ไข</a></td>
					<td><a class="btn btn-danger" href="deleteschedule.php?id_schedule=<?php echo $row['id_schedule']; ?>">ลบ</a></td>
				</tr>
				<?php
					$i++;
					}
				?>
			</tbody>
		</table>
</body>
</html>
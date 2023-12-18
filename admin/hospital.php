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
    <h1 class="text-center py-2">ข้อมูลโรงพยาบาล</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=frmaddhospital" class="btn btn-primary">เพิ่มข้อมูลโรงพยาบาล</a>
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
					<td>ชื่อโรงพยาบาล</td>
					<td>ที่อยู่</td>
					<td>เบอร์</td>
				</tr>
			</thead>
			
			<tbody>
				<?php
					$sql = "SELECT * FROM tb_hospital WHERE name_hospital LIKE '%$search%' OR address_hospital LIKE '%$search%' OR phone_hospital	
                    LIKE '%$search%' ORDER BY id_hospital ASC";
					$result = mysqli_query($conn, $sql);
				
					$i = 1;
					while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row['name_hospital']; ?></td>
					<td><?php echo $row['address_hospital']; ?></td>
					<td><?php echo $row['phone_hospital']; ?></td>
					
					<td><a class="btn btn-warning" href="index.php?option=frmedithospital&id_hospital=<?php echo $row['id_hospital']; ?>">เเก้ไข</a></td>
					<td><a class="btn btn-danger" href="deletehospital.php?id_hospital=<?php echo $row['id_hospital']; ?>">ลบ</a></td>
				</tr>
				<?php
					$i++;
					}
				?>
			</tbody>
		</table>
</body>
</html>
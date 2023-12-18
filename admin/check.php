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
    <h1 class="text-center py-2">ข้อมูลเเบบประเมิน</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=frmaddcheck" class="btn btn-primary">เพิ่มหัวข้อประเมิน</a>
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
					<td>หัวข้อประเมิน</td>
                    <td>มากที่สุด</td>
                    <td>มาก</td>
                    <td>ปานกลาง</td>
                    <td>น้อย</td>
                    <td>น้อยที่สุด</td>
				</tr>
			</thead>
			
			<tbody>
				<?php
					$sql = "SELECT * FROM tb_check WHERE title_check LIKE '%$search%' ORDER BY id_check ASC";
					$result = mysqli_query($conn, $sql);
				
					$i = 1;
					while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row['id_check']; ?></td>
					<td><?php echo $row['title_check']; ?></td>
                    <td><input type="radio" class="form-check-input" name="<?php echo $row['id_check']; ?>" id="<?php echo $i; ?>_1" value="5"></td>
                    <td><input type="radio" class="form-check-input" name="<?php echo $row['id_check']; ?>" id="<?php echo $i; ?>_2" value="4"></td>
                    <td><input type="radio" class="form-check-input" name="<?php echo $row['id_check']; ?>" id="<?php echo $i; ?>_3" value="3"></td>
                    <td><input type="radio" class="form-check-input" name="<?php echo $row['id_check']; ?>" id="<?php echo $i; ?>_2" value="2"></td>
                    <td><input type="radio" class="form-check-input" name="<?php echo $row['id_check']; ?>" id="<?php echo $i; ?>_5" value="1"></td>

					<td><a class="btn btn-warning" href="index.php?option=frmeditcheck&id_check=<?php echo $row['id_check']; ?>">เเก้ไข</a></td>
					<td><a class="btn btn-danger" href="deletecheck.php?id_check=<?php echo $row['id_check']; ?>">ลบ</a></td>
				</tr>
				<?php
					$i++;
					}
				?>
			</tbody>
		</table>
</body>
</html>
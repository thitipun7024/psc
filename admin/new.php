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
    <h1 class="text-center py-2">ข้อมูลประชาสัมพันธ์</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=frmaddnew" class="btn btn-primary">เพิ่มประชาสัมพันธ์</a>
				</div>

				<div class="col-3">
					<div class="input-group">
						<input class="form-control" name="search" placeholder="search">
						<button class="btn btn-success" type="submit">ค้นหา</button>
					</div>
				</div>
			</div>
	</form>
	
	<p></p>

	<?php
	$sql = "SELECT * FROM tb_new INNER JOIN tb_user ON tb_new.name_user = tb_user.login_user WHERE tb_new.name_user LIKE '%$search%' OR tb_new.detail LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);

	$i = 1;
	while($row = mysqli_fetch_array($result)){
		?>

<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-9 py-2">
				<div class="card border-0 shadow bg-white">
					<div class="card-header bg-white">
						<img src="img/<?php echo $row['photo_user']; ?>" width="40" height="40" class="rounded-circle">
						<?php echo $row['login_user']; ?> | <?php echo $row['datesave']; ?><br>
						<p></p>
						<h3 class="card-title"><?php echo $row['detail']; ?></h3>
					</div>

						<div class="card-body text-center bg-white">
							<img src="img/<?php echo $row['photo_new']; ?>" width="80%">
						</div>
						
						<div class="card-footer bg-white text-end">
							<a class="btn btn-warning" href="index.php?option=frmeditnew&id_new=<?php echo $row['id_new']; ?>">เเก้ไข</a>
							<a class="btn btn-danger" href="deletenew.php?id_new=<?php echo $row['id_new']; ?>">ลบ</a>
						</div>

				</div>
			</div>
		</div>
	</div>

		<?php
		$i++;
	}
	?>
</body>
</html>
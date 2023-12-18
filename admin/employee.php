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
    <h1 class="text-center py-2">ข้อมูลพนักงาน</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=frmaddemployee" class="btn btn-primary">เพิ่มพนักงาน</a>
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
	$sql = "SELECT * FROM tb_employee WHERE name_employee LIKE '%$search%' OR detail LIKE '%$search%' OR phone_employee LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);

	$i = 1;
	while($row = mysqli_fetch_array($result)){
		?>

        <div class="col-md-10 col-lg-4 py-2">
            <div class="card border-0 shadow">
                <div class="card-header bg-primary">
                    <h3 class="fw-bold"><?php echo $row['name_employee'] ?></h3>
                </div>
                
                <div class="card-body text-center">
                    <img src="img/<?php echo $row['photo_employee']; ?>" width="80%">
                </div>

                <div class="card-footer">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            tel : <?php echo $row['phone_employee'] ?>
                            <?php echo $row['detail'] ?>
                        </div>
        
                        <div class="col-6">
                            <a class="btn btn-warning" href="index.php?option=frmeditemployee&id_employee=<?php echo $row['id_employee']; ?>">เเก้ไข</a>
                            <a class="btn btn-danger" href="deleteemployee.php?id_employee=<?php echo $row['id_employee']; ?>">ลบ</a>
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
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
    <h1 class="text-center py-2">ข้อมูลกระดานบอร์ด</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=frmaddquestion" class="btn btn-primary">เพิ่มกระดานบอร์ด</a>
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
	$sql = "SELECT * FROM tb_question INNER JOIN tb_user ON tb_question.id_user = tb_user.id_user WHERE tb_question.topic LIKE '%$search%' OR tb_question.name_ques LIKE '%$search%' OR tb_question.detail LIKE '%$search%'";
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
						<?php echo $row['login_user']; ?> | <?php echo $row['datetime_ques']; ?><br>
						<p></p>
						<h3 class="card-title"><?php echo $row['topic']; ?></h3>
                    </div>

						<div class="card-body bg-white">
							<p class="card-text"><?php echo $row['detail']; ?></p>
						</div>
						
						<div class="card-footer bg-white">
                        <div class="row justify-content-between">
                            <div class="col-6">
                                <a class="btn btn-warning" href="index.php?option=frmeditquestion&id_ques=<?php echo $row['id_ques']; ?>">เเก้ไข</a>
                                <a class="btn btn-danger" href="deletequestion.php?id_ques=<?php echo $row['id_ques']; ?>">ลบ</a>
                                <a class="btn btn-primary" href="index.php?option=frmcomment&id_ques=<?php echo $row['id_ques']; ?>">เเสดงความคิดเห็น</a>
                            </div>

                            <div class="col-5">
                               จำนวนผู้เข้าชมทั้งหมด <?php echo $row['view']; ?> | จำนวนผู้ตอบ <?php echo $row['view']; ?>
                            </div>
                        </div>
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
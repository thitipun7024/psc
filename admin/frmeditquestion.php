<?php
include("../Connection/conn.php");
$id = $_REQUEST['id_ques'];
$sql = "SELECT * FROM tb_question WHERE id_ques = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
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
	<form action="updatequestion.php" method="post" enctype="multipart/form-data">
		<div class="d-flex align-items-center min-vh-100">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="text-center py-1 fw-bold">เเก้ไขกระดานบอร์ด</h1>
				<div class="col-md-8 col-lg-7">
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="form-outline py-2">
								<input class="form-control" type="text" name="name_user" placeholder="<?php echo $_SESSION['login_user'] ?>" disabled>
							</div>
							
                            <div class="form-outline py-2">
								<input class="form-control" type="text" name="topic" placeholder="หัวข้อ" value="<?php echo $row['topic']; ?>">
							</div>

							<div class="form-outline py-2">
								<textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด"><?php echo $row['detail']; ?></textarea>
							</div>

                            <div class="form-outline py-2">
								<input class="form-control" type="hidden" name="id_ques" value="<?php echo $row['id_ques']; ?>">
							</div>
							
							<div class="text-end py-3">
								<button class="btn btn-outline-success">เเก้ไขกระดานบอร์ด</button>
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
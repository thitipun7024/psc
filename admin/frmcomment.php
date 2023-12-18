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
	<?php
    $id = $_REQUEST['id_ques'];
	$sql = "SELECT * FROM tb_question INNER JOIN tb_user ON tb_question.id_user = tb_user.id_user WHERE id_ques = '$id'";
	$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);


	$sql2 = "SELECT * FROM tb_comment 
    INNER JOIN tb_question ON tb_comment.id_ques = tb_question.id_ques
    INNER JOIN tb_user ON tb_comment.id_user = tb_user.id_user
    WHERE tb_comment.id_ques = '$id'";
	$result2 = mysqli_query($conn, $sql2);
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
				</div>

                <?php 
                $i = 1;
	            while($row2 = mysqli_fetch_array($result2)){
                ?>
                <p class="py-2"></p>
                
                <div class="card border-0 shadow bg-white">
					<div class="card-header bg-white">
						<img src="img/<?php echo $row2['photo_user']; ?>" width="40" height="40" class="rounded-circle">
						<?php echo $row2['login_user']; ?> | <?php echo $row2['datetime_ans']; ?><br>
						<p></p>
						<h4 class="card-title"><?php echo $row2['detail_comment']; ?></h4>
                    </div>
				</div>

                <?php
                $i++;
                }
                ?>

                <form action="insertcomment.php" method="post" enctype="multipart/form-data">
                    <div class="input-group py-3">
						<input class="form-control" type="text" name="comment" placeholder="เเสดงความคิดเห็น">
						<button class="btn btn-success" type="submit">ส่งความคิดเห็น</button>
                        <input class="form-control" type="hidden" name="id_ques" value="<?php echo $row['id_ques']; ?>">
				    </div>
                </form>

			</div>
		</div>
	</div>
</body>
</html>
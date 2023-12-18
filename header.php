<?php
    session_start();
    include("Connection/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PICC SENIOR CARE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1 class="fw-bold fw-bolder">PSC</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">ประชาสัมพันธ์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">กระดานสนทนา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ติดต่อเรา</a>
        </li>
      </ul>
      <span class="navbar-text">
        <?php
            if(empty($_SESSION['id_user'])){
        ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    SIGN IN
                </button>
                |
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal2">
                    SIGN UP
                </button>
        <?php
            }else{    
        ?>
                <a href="edituser.php" class="text-decoration-none fw-bold"><?php echo $_SESSION['login_user']; ?></a>
                |
                <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
        <?php
            }
        ?>
      </span>
    </div>
  </div>
</nav>

<form action="checklogin.php" method="post">
    <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <h1 class="text-center fw-bold">เข้าสู่ระบบ</h1>
        <div class="container-fluid">
            <div class="form-outline py-2">
                <input type="text" class="form-control" name="login_user" placeholder="Username">
            </div>

            <div class="form-outline py-2">
                <input type="password" class="form-control" name="pass_user" placeholder="Password">
            </div>

            <div class="text-center py-3">
                <button class="btn btn-outline-primary" type="submit">เข้าสู่ระบบ</button>
                <button class="btn btn-outline-danger" data-bs-dismiss="modal" type="button">ยกเลิก</button>
            </div>
        </div>
  
      </div>
    </div>
  </div>
</form>

<form action="insertuser.php" method="post" enctype="multipart/form-data">
    <!-- The Modal -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <h1 class="text-center fw-bold">สมัครสมาชิก</h1>
        <div class="container-fluid">
            <div class="form-outline py-2">
                <input type="text" class="form-control" name="login_user" placeholder="Username" required>
            </div>

            <div class="form-outline py-2">
                <input type="password" class="form-control" name="pass_user" placeholder="Password" required>
            </div>

            <div class="form-outline py-2">
                <input type="text" class="form-control" name="name_user" placeholder="Username" required>
            </div>

            <div class="form-outline py-2 col-3">
                <select name="sex_user" class="form-control" required>
                    <option selected>เพศ</option>
                    <option value="1">ชาย</option>
                    <option value="2">หญิง</option>
                </select>
            </div>

            <div class="form-outline py-2">
                <textarea class="form-control" name="address_user" placeholder="ที่อยู่" rows="5" required></textarea>
            </div>

            <div class="form-outline py-2">
                <input type="email" class="form-control" name="email_user" placeholder="อีเมล์" required>
            </div>

            <div class="form-outline py-2">
                <input type="phone" class="form-control" name="phone_user" placeholder="เบอร์โทรศัพท์" maxlength="10" required>
            </div>

            <div class="form-outline py-2">
                <input type="file" class="form-control" name="img" required>
            </div>

            <div class="text-end py-3">
                <button class="btn btn-outline-primary" type="submit">สมัครสมาชิก</button>
                <button class="btn btn-outline-danger" data-bs-dismiss="modal" type="button">ยกเลิก</button>
            </div>
        </div>
  
      </div>
    </div>
  </div>
</form>
</body>
</html>



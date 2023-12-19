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
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><h1 class="fw-bold" style="font-family: Arial, Helvetica, sans-serif;">PSC</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?option=new">ประชาสัมพันธ์</a>
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
                  <a href="logout.php" class="btn btn-danger text-white">ออกจากระบบ</a>
          <?php
              }
          ?>
        </span>

      </div>
    </div>
  </nav>



<?php include("model.php"); ?>
</body>
</html>



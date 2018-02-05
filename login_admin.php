<?php
session_start();
if(!isset($_SESSION["Admin"])) {
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CM-Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="check_login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" name="txtUsername" id="username"
                   type="text"  placeholder="Username" required autofocus>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" name="txtPassword" id="password"
                   type="password" placeholder="Password">
          </div>
            <input class="btn btn-primary btn-block" type="submit" value="Login">
        </form>
      </div>
    </div>
  </div>
  <br>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

    <?php
}
else{
    header('Location: index.php');
}
?>

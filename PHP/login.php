<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "admin" && $password === "123456") {
    $_SESSION["username"] = $username;
    echo "<script>alert('Login successful!'); window.location='index.php';</script>";
    exit();
  } else {
    echo "<script>alert('Invalid login. Try admin / 123456');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1 class="title">Welcome</h1>
    <form method="POST" action="">
      <div class="input-group">
        <i class="bx bx-user"></i>
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="input-group">
        <i class="bx bx-lock-alt"></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="links">
        <a href="#">Forgot Password</a>
        <a href="register.php">Sign up</a>
      </div>
    </form>
  </div>
</body>
</html>

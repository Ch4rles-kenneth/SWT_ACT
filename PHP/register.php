<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $confirm = $_POST["confirm_password"];

  $errors = [];

  if (!preg_match("/^[a-zA-Z0-9_]{4,15}$/", $username)) {
    $errors[] = "Username must be 4–15 characters (letters, numbers, underscore).";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
  }

  if (!preg_match("/^09\d{9}$/", $phone)) {
    $errors[] = "Invalid PH phone number (e.g., 09123456789).";
  }

  if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/", $password)) {
    $errors[] = "Password must be at least 6 chars, include letters and numbers.";
  }

  if ($password !== $confirm) {
    $errors[] = "Passwords do not match.";
  }

  if (empty($errors)) {
    echo "<script>alert('Registration successful! Please login.'); window.location='login.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1 class="title">Sign Up</h1>
    <?php if (!empty($errors)): ?>
      <div style="color:red; background:#fff2f2; padding:10px; border-radius:8px; margin-bottom:15px;">
        <?php foreach ($errors as $e) echo "<p>$e</p>"; ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="">
      <div class="input-group">
        <i class="bx bx-user"></i>
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="input-group">
        <i class="bx bx-envelope"></i>
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="input-group">
        <i class="bx bx-phone"></i>
        <input type="tel" name="phone" placeholder="Phone Number" required>
      </div>
      <div class="input-group">
        <i class="bx bx-lock-alt"></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="input-group">
        <i class="bx bx-lock"></i>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      </div>
      <button type="submit" class="btn">Register</button>
      <div class="links">
        <a href="login.php">Already have an account?</a>
      </div>
    </form>
  </div>
</body>
</html>

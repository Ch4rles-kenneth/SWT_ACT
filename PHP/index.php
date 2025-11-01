<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Require login
if (!isset($_SESSION["username"])) {
    echo "<script>alert('Please login first.'); window.location='login.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WST - Activities</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include 'header.php'; ?>
  <?php include 'content.php'; ?>
  <?php include 'footer.php'; ?>
</body>
</html>

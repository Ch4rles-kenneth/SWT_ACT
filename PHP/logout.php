<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_unset();
session_destroy();
echo "<script>alert('You have been logged out.'); window.location='login.php';</script>";
exit();

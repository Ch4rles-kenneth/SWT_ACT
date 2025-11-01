<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">WST Activities</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutme.php">ABOUT ME</a></li>
        <?php if (isset($_SESSION["username"])): ?>
          <li class="nav-item"><a class="nav-link text-danger" href="logout.php">LOGOUT</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

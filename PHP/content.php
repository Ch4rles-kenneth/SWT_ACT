<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : 'Guest';
?>

<section class="hero-section text-center" style="padding:80px 20px;color:#fff;background:linear-gradient(135deg,#213c6b 0%,#484d1e 100%);">
  <div class="container">
    <h1 class="display-4 fw-bold">Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p class="lead">Explore and access all activities below</p>
  </div>
</section>

<main class="container text-center mb-5">
  <div class="row justify-content-center g-4">
    <div class="col-md-4">
      <div class="card shadow-lg border-0">
        <div class="card-body">
          <h5 class="card-title">Activity 1</h5>
          <a href="#" class="btn btn-primary">Go to Activity 1</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-lg border-0">
        <div class="card-body">
          <h5 class="card-title">Activity 2</h5>
          <a href="#" class="btn btn-success">Go to Activity 2</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-lg border-0">
        <div class="card-body">
          <h5 class="card-title">Activity 3</h5>
          <a href="#" class="btn btn-warning">Go to Activity 3</a>
        </div>
      </div>
    </div>
  </div>
</main>

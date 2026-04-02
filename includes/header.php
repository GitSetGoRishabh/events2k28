<?php $anchorBase = basename($_SERVER['PHP_SELF']) !== 'index.php' ? 'index.php' : ''; ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $anchorBase; ?>#home">events2k28</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="#ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?php echo $anchorBase; ?>#home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="<?php echo $anchorBase; ?>#events" class="nav-link">events</a></li>
          <li class="nav-item"><a href="<?php echo $anchorBase; ?>#about" class="nav-link">about</a></li>
          
          <li class="nav-item cta"><a href="register.php?event_id=1" class="nav-link"><span>Register</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
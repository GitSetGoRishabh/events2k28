<?php
// Simple confirmation page after successful registration
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="refresh" content="6;url=index.php" />
  <title>Registration Confirmed</title>
  <style>
    body { margin:0; min-height:100vh; display:flex; align-items:center; justify-content:center; background:#0d1721; color:#fff; font-family:Arial, sans-serif; }
    .confirm-box { width:100%; max-width:480px; padding:28px 24px; border-radius:12px; background:#1b2430; text-align:center; box-shadow:0 0 20px rgba(0,0,0,.45); }
    .confirm-box h1 { margin-bottom:16px; font-size:28px; }
    .confirm-box p { margin:10px 0; color:#c0c7d2; font-size:16px; }
    .confirm-box a { display:inline-block; margin-top:20px; padding:10px 18px; border-radius:8px; background:#f85959; color:#fff; text-decoration:none; font-weight:600; }
  </style>
</head>
<body>
  <div class="confirm-box">
    <h1>Registration Confirmed</h1>
    <p>Your registration request has been successfully received.</p>
    <p>We are processing your request and will send details to your email shortly.</p>
    <p>You will be redirected to home automatically in a few seconds.</p>
    <a href="index.php">Go back to Home</a>
  </div>
</body>
</html>

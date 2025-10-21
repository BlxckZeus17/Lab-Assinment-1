<?php
// Set timezone for accurate time
date_default_timezone_set("Africa/Johannesburg");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>230503551 — Dynamic PHP Page</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #fff;
      color: #111;
      line-height: 1.6;
      text-align: center;

      /* ninja head pattern */
      background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120"><rect width="100%" height="100%" fill="%23ffffff"/><g transform="translate(10,10)"><circle cx="50" cy="50" r="40" fill="%23000"/><rect x="6" y="36" width="88" height="14" rx="7" ry="7" fill="%23000" opacity="0.95"/><circle cx="36" cy="50" r="5" fill="%23ffffff"/><circle cx="64" cy="50" r="5" fill="%23ffffff"/></g></svg>');
      background-repeat: repeat;
      background-size: 120px 120px;
    }

    .box {
      max-width: 600px;
      margin: 3rem auto;
      padding: 2rem;
      background: rgba(255,255,255,0.92);
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h1 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }
    p { margin: 0.6rem 0; }
    a { color: #000; text-decoration: underline; }
    a:hover { color: #333; }
  </style>
</head>
<body>
  <div class="box">
    <h1>Dynamic PHP Page</h1>
    <p><strong>Student No:</strong> 230503551</p>
    <p><strong>Project:</strong> StyleHub — Online Clothing Store</p>
    <p>The current server date is: <strong><?php echo date('l, d F Y'); ?></strong></p>
    <p>The current server time is: <strong><?php echo date('h:i:s A'); ?></strong></p>
    <p><a href="230503551.html">⬅ Back to Main Page</a></p>
  </div>
</body>
</html>

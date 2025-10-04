<?php
include __DIR__ . '/../config/images.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? $page_title : 'GAMEONIX ESPORTS & GAMING'; ?></title>
  <meta name="description" content="Play the best mobile games including BGMI, VALORANT, FREE FIRE, COD: MOBILE, and PUBG: NEW STATES. Join millions of players today!">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/assets/style2.css">
  <link rel="icon" type="image/x-icon" href="<?php echo $imgurl?>/favicon.ico">
</head>

<body>
  <header class="header">
    <div class="container">
      <a href="/index.php" class="logo">
        <img id="main_logo" src="<?php echo $imgurl?>/gameonix_favicon.png" alt="logo" >
      </a>
      <nav class="nav">
        <ul class="nav-menu">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/store.php">Store</a></li>
          <li><a href="/features.php">Features</a></li>
          <li><a href="/download.php">Download</a></li>
          <li><a href="/faq.php">FAQ</a></li>
          <li><a href="/auth/login.php">Login</a></li>
        </ul>
        <button class="nav-toggle">
          <i class="fas fa-bars"></i>
        </button>
      </nav>
    </div>
  </header>

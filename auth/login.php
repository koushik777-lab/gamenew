<?php
include '../config/images.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gameonix Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-color: #0f0f0f;
      --text-color: #fff;
      --subtext-color: #c4c4c4;
      --button-bg: #e50914;
      --button-color: #fff;
      --input-bg: #1c1c1c;
      --input-border: #333;
    }

    body.dark {
      --bg-color: #fff;
      --text-color: #000;
      --subtext-color: #555;
      --button-bg: #111;
      --button-color: #fff;
      --input-bg: #f1f1f1;
      --input-border: #ccc;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    body, html {
      height: 100%;
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    .container {
      display: flex;
      flex-direction: row;
      height: 100vh;
    }

    .left-side {
      flex: 1;
      background: url('https://app.pivaga.com/static/img/illustrations/auth-login-illustration-light.png') no-repeat center center;
      background-size: cover;
      animation: slideInLeft 1s ease;
    }

    .right-side {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      animation: fadeIn 1.5s ease;
    }

    .login-box {
      width: 100%;
      max-width: 400px;
    }

    .logo img {
      height: 40px;
      margin-bottom: 1rem;
    }

    .welcome-text {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .subtext {
      font-size: 14px;
      margin-bottom: 1.5rem;
      color: var(--subtext-color);
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid var(--input-border);
      border-radius: 5px;
      background-color: var(--input-bg);
      color: var(--text-color);
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
      margin-bottom: 1rem;
    }

    .remember {
      display: flex;
      align-items: center;
    }

    button {
      width: 100%;
      padding: 0.75rem;
      background-color: var(--button-bg);
      color: var(--button-color);
      border: none;
      border-radius: 5px;
      font-weight: 600;
      cursor: pointer;
      margin-bottom: 1rem;
      transition: all 0.3s ease;
    }

    .divider {
      text-align: center;
      margin: 1.5rem 0;
      border-bottom: 1px solid var(--input-border);
      line-height: 0.1em;
    }

    .divider span {
      background: var(--bg-color);
      padding: 0 10px;
      color: var(--subtext-color);
    }

    .social-signup {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .social-signup button {
      background-color: transparent;
      color: var(--text-color);
      border: 1px solid var(--input-border);
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-bottom: 0.75rem;
    }

    .social-signup img {
      width: 20px;
      height: 20px;
    }

    .dark-toggle {
      text-align: right;
      margin-bottom: 1rem;
      cursor: pointer;
      font-size: 14px;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .left-side {
        display: none;
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideInLeft {
      from { transform: translateX(-100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left-side"></div>
    <div class="right-side">
      <div class="login-box">
    <!--    <div class="dark-toggle" onclick="toggleDarkMode()">🌓 Toggle Theme</div> -->
        <div class="logo">
          <img src="<?php echo $imgurl?>/gameonix-wr-half.png" alt="Gameonix Logo">
        </div>
        <div class="welcome-text">Login to Gameonix</div>
        <div class="subtext">Unleash your gaming skills and compete with pros.</div>

        <input type="text" placeholder="Email or Username" />
        <input type="password" placeholder="Password" />

        <div class="options">
          <label class="remember"><input type="checkbox" style="margin-right: 8px;"> Remember Me</label>
          <a href="#">Forgot Password?</a>
        </div>

        <button>Sign in</button>

        <div class="subtext">New to Gameonix? <a href="./signup.php">Create an account</a></div>

        <div class="divider"><span>or</span></div>

        <div class="social-signup">
          <button>
            <img src="<?php echo $imgurl?>/google.png" alt="Google Logo">
            Sign up with Google
          </button>
          <button>
            <img src="<?php echo $imgurl?>/discord.png" alt="Discord Logo">
            Sign up with Discord
          </button>
          <button>
            <img src="<?php echo $imgurl?>/twitch.png" alt="Twitch Logo">
            Sign up with Twitch
          </button>
        </div>
        
      </div>
    </div>
  </div>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark');
    }
  </script>
</body>
</html>
